<?php
/**
 * Provides components to update a tables rows via a batching process
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Maintenance
 */

/**
 * Ties together the batch update components to provide a composable method
 * of batch updating rows in a database. To use create a class implementing
 * the EchoRowUpdateGenerator interface and configure the EchoBatchRowIterator and
 * EchoBatchRowWriter for access to the correct table. The components will
 * handle reading, writing, and waiting for slaves while the generator implementation
 * handles generating update arrays for singular rows.
 *
 * Instantiate:
 *   $updater = new EchoBatchRowUpdate(
 *       new EchoBatchRowIterator( $dbr, 'some_table', 'primary_key_column', 500 ),
 *       new EchoBatchRowWriter( $dbw, 'some_table', 'clusterName' ),
 *       new MyImplementationOfEchoRowUpdateGenerator
 *   );
 *
 * Run:
 *   $updater->execute();
 *
 * An example maintenance script utilizing the EchoBatchRowUpdate can be located in the Echo
 * extension file maintenance/updateSchema.php
 *
 * @ingroup Maintenance
 */
class EchoBatchRowUpdate {
	/**
	 * @var EchoBatchRowIterator $reader Iterator that returns an array of database rows
	 */
	protected $reader;

	/**
	 * @var EchoBatchRowWriter $writer Writer capable of pushing row updates to the database
	 */
	protected $writer;

	/**
	 * @var EchoRowUpdateGenerator $generator Generates single row updates based on the rows content
	 */
	protected $generator;

	/**
	 * @var callable $output Output callback
	 */
	protected $output;

	/**
	 * @param EchoBatchRowIterator   $reader    Iterator that returns an array of database rows
	 * @param EchoBatchRowWriter     $writer    Writer capable of pushing row updates to the database
	 * @param EchoRowUpdateGenerator $generator Generates single row updates based on the rows content
	 */
	public function __construct( EchoBatchRowIterator $reader, EchoBatchRowWriter $writer, EchoRowUpdateGenerator $generator ) {
		$this->reader = $reader;
		$this->writer = $writer;
		$this->generator = $generator;
		$this->output = function() {
		}; // nop
	}

	/**
	 * Runs the batch update process
	 */
	public function execute() {
		foreach ( $this->reader as $rows ) {
			$updates = array();
			foreach ( $rows as $row ) {
				$update = $this->generator->update( $row );
				if ( $update ) {
					$updates[] = array(
						'primaryKey' => $this->reader->extractPrimaryKeys( $row ),
						'changes' => $update,
					);
				}
			}

			if ( $updates ) {
				$this->output( "Processing " . count( $updates ) . " rows\n" );
				$this->writer->write( $updates );
			}
		}

		$this->output( "Completed\n" );
	}

	/**
	 * Accepts a callable which will receive a single parameter containing
	 * string status updates
	 *
	 * @param callable $output A callback taking a single string parameter to output
	 */
	public function setOutput( $output ) {
		if ( !is_callable( $output ) ) {
			throw new MWException( 'Provided $output param is required to be callable.' );
		}
		$this->output = $output;
	}

	/**
	 * Write out a status update
	 *
	 * @param string $text The value to print
	 */
	protected function output( $text ) {
		call_user_func( $this->output, $text );
	}
}

/**
 * Interface for generating updates to single rows in the database.
 *
 * @ingroup Maintenance
 */
interface EchoRowUpdateGenerator {

	/**
	 * Given a database row, generates an array mapping column names to updated value within the database row
	 *
	 * Sample Response:
	 *   return array(
	 *       'some_col' => 'new value',
	 *       'other_col' => 99,
	 *   );
	 *
	 * @param stdClass $row A row from the database
	 * @return array Map of column names to updated value within the database row. When no update is required
	 *   returns an empty array.
	 */
	public function update( $row );
}

/**
 * Updates database rows by primary key in batches. There are two options for writing to tables
 * with a composite primary key.
 *
 * @ingroup Maintenance
 */
class EchoBatchRowWriter {
	/**
	 * @var DatabaseBase $db The database to write to
	 */
	protected $db;

	/**
	 * @var string $table The name of the table to update
	 */
	protected $table;

	/**
	 * @var string $clusterName A cluster name valid for use with LBFactory
	 */
	protected $clusterName;

	/**
	 * @param DatabaseBase $db          The database to write to
	 * @param string       $table       The name of the table to update
	 * @param string       $clusterName A cluster name valid for use with LBFactory
	 */
	public function __construct( DatabaseBase $db, $table, $clusterName = false ) {
		$this->db = $db;
		$this->table = $table;
		$this->clusterName = $clusterName;
	}

	/**
	 * @param array $updates Array of arrays each containing two keys, 'primaryKey' and 'changes'.
	 *   primaryKey must contain a map of column names to values sufficient to uniquely identify the row
	 *   changes must contain a map of column names to update values to apply to the row
	 */
	public function write( array $updates ) {
		$this->db->begin();

		foreach ( $updates as $id => $update ) {
			//echo "Updating: ";var_dump( $update['primaryKey'] );
			//echo "With values: ";var_dump( $update['changes'] );
			$this->db->update(
				$this->table,
				$update['changes'],
				$update['primaryKey'],
				__METHOD__
			);
		}

		$this->db->commit();
		wfWaitForSlaves( false, false, $this->clusterName );
	}
}

/**
 * Fetches rows batched into groups from the database in ascending order of the primary key(s).
 *
 * @ingroup Maintenance
 */
class EchoBatchRowIterator implements Iterator {

	/**
	 * @var DatabaseBase $db The database to read from
	 */
	protected $db;

	/**
	 * @var string $table The name of the table to read from
	 */
	protected $table;

	/**
	 * @var array $primaryKey The name of the primary key(s)
	 */
	protected $primaryKey;

	/**
	 * @var integer $batchSize The number of rows to fetch per iteration
	 */
	protected $batchSize;

	/**
	 * @var array $conditions Array of strings containing SQL conditions to add to the query
	 */
	protected $conditions = array();

	/**
	 * @var array $fetchColumns List of column names to select from the table suitable for use with DatabaseBase::select()
	 */
	protected $fetchColumns = array( '*' );

	/**
	 * @var string $orderBy SQL Order by condition generated from $this->primaryKey
	 */
	protected $orderBy;

	/**
	 * @var array $current The current iterator value
	 */
	private $current = array();

	/**
	 * @var integer key 0-indexed number of pages fetched since self::reset()
	 */
	private $key;

	/**
	 * @param DatabaseBase $db         The database to read from
	 * @param string       $table      The name of the table to read from
	 * @param string|array $primaryKey The name or names of the primary key columns
	 * @param integer      $batchSize  The number of rows to fetch per iteration
	 */
	public function __construct( DatabaseBase $db, $table, $primaryKey, $batchSize ) {
		if ( $batchSize < 1 ) {
			throw new MWException( 'Batch size must be at least 1 row.' );
		}
		$this->db = $db;
		$this->table = $table;
		$this->primaryKey = (array) $primaryKey;
		$this->orderBy = implode( ' ASC,', $this->primaryKey ) . ' ASC';
		$this->batchSize = $batchSize;
	}

	/**
	 * @param string $condition Query conditions suitable for use with DatabaseBase::select
	 */
	public function addConditions( array $conditions ) {
		$this->conditions = array_merge( $this->conditions, $conditions );
	}

	/**
	 * @param array $columns List of column names to select from the table suitable for use with DatabaseBase::select()
	 */
	public function setFetchColumns( array $columns ) {
		// If it's not the all column selector merge in the primary keys we need
		if ( count( $columns ) === 1 && reset( $columns ) === '*' ) {
			$this->fetchColumns = $columns;
		} else {
			$this->fetchColumns = array_unique( array_merge( $this->primaryKey, $columns ) );
		}
	}

	/**
	 * Extracts the primary key(s) from a database row.
	 *
	 * @param stdClass $row An individual database row from this iterator
	 * @return array Map of primary key column to value within the row
	 */
	public function extractPrimaryKeys( $row ) {
		$pk = array();
		foreach ( $this->primaryKey as $column ) {
			$pk[$column] = $row->$column;
		}
		return $pk;
	}

	/**
	 * @return array The most recently fetched set of rows from the database
	 */
	public function current() {
		return $this->current;
	}

	/**
	 * @return integer 0-indexed count of the page number fetched
	 */
	public function key() {
		return $this->key;
	}

	/**
	 * Reset the iterator to the begining of the table.
	 */
	public function rewind() {
		$this->key = -1; // self::next() will turn this into 0
		$this->current = array();
		$this->next();
	}

	/**
	 * @return boolean True when the iterator is in a valid state
	 */
	public function valid() {
		return (bool) $this->current;
	}

	/**
	 * Fetch the next set of rows from the database.
	 */
	public function next() {
		$res = $this->db->select(
			$this->table,
			$this->fetchColumns,
			$this->buildConditions(),
			__METHOD__,
			array(
				'LIMIT' => $this->batchSize,
				'ORDER BY' => $this->orderBy,
			)
		);

		// The iterator is converted to an array because in addition to returning it
		// in self::current() we need to use the end value in self::buildConditions()
		$this->current = iterator_to_array( $res );
		$this->key++;
	}

	/**
	 * Uses the primary key list and the maximal result row from the previous iteration to build
	 * an SQL condition sufficient for selecting the next page of results.  All except the final
	 * key use `=` conditions while the final key uses a `>` condition
	 *
	 * Example output:
	 * 	  array( '( foo = 42 AND bar > 7 ) OR ( foo > 42 )' )
	 *
	 * @return array The SQL conditions necessary to select the next set of rows in the batched query
	 */
	protected function buildConditions() {
		if ( !$this->current ) {
			return $this->conditions;
		}

		$maxRow = end( $this->current );
		$maximumValues = array();
		foreach ( $this->primaryKey as $column ) {
			$maximumValues[$column] = $this->db->addQuotes( $maxRow->$column );
		}

		$pkConditions = array();
		// For example: If we have 3 primary keys
		// first run through will generate
		//   col1 = 4 AND col2 = 7 AND col3 > 1
		// second run through will generate
		//   col1 = 4 AND col2 > 7
		// and the final run through will generate
		//   col1 > 4
		while ( $maximumValues ) {
			$pkConditions[] = $this->buildGreaterThanCondition( $maximumValues );
			array_pop( $maximumValues );
		}

		$conditions = $this->conditions;
		$conditions[] = sprintf( '( %s )', implode( ' ) OR ( ', $pkConditions ) );

		return $conditions;
	}

	/**
	 * Given an array of column names and their maximum value  generate an SQL
	 * condition where all keys except the last match $quotedMaximumValues
	 * exactly and the last column is greater than the matching value in $quotedMaximumValues
	 *
	 * @param array $quotedMaximumValues The maximum values quoted with $this->db->addQuotes()
	 * @return string An SQL condition that will select rows where all columns match the
	 *   maximum value exactly except the last column which must be greater than the provided
	 *   maximum value
	 */
	protected function buildGreaterThanCondition( array $quotedMaximumValues ) {
		$keys = array_keys( $quotedMaximumValues );
		$lastColumn = end( $keys );
		$lastValue = array_pop( $quotedMaximumValues );
		$conditions = array();
		foreach ( $quotedMaximumValues as $column => $value ) {
			$conditions[] = "$column = $value";
		}
		$conditions[] = "$lastColumn > $lastValue";

		return implode( ' AND ', $conditions );
	}
}

