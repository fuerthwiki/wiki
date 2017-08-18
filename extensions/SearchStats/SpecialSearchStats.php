<?php
/**
 * SearchStats extension
 *
 * For more info see http://mediawiki.org/wiki/Extension:SearchStats
 *
 * @file
 * @ingroup Extensions
 * @author Steven Orvis, 2016
 * @license GNU General Public Licence 2.0 or later
 */

class SpecialSearchStats extends SpecialPage {
	function __construct() {
		parent::__construct( 'SearchStats' );
	}

	function execute( $par ) {
		$request = $this->getRequest();
		$output = $this->getOutput();
		$this->setHeaders();

		# Get request data from, e.g.
		$param = $request->getText( 'param' );
		
		# Get database connection
		$dbr = wfGetDB(DB_SLAVE);
		
		$wikitext = '';

		$wikitext .= $this->displayCommonSearches($dbr);
		$wikitext .= $this->displayRecentSearches($dbr);	
		
		# Write the page
		$output->addWikiText( $wikitext );
	}
	
	private function displayRecentSearches($dbr)
	{
		$wikitext = '';
		
		# Display the recent searches
		$wikitext .= "==Recent 1000 Searches With No Direct Match==\n";
		# Get the recent searches
		$recentStats = $dbr->select(
					'search_query', 								# table
					array('sq_id', 'sq_query', 'sq_timestamp'), 	# columns
					'', 											# conditions
					__METHOD__,
					array('ORDER BY' => 'sq_id DESC LIMIT 1000')		# options	
		);
		
		foreach( $recentStats as $row){
			$wikitext .= "* [[" . $row->sq_query . "]] ''at " . $row->sq_timestamp . "'' \n";
		}
		
		return $wikitext;
	}
	
	private function displayCommonSearches($dbr)
	{
		$wikitext = '';
		
				# Display the most common searches
		$wikitext .= "==Common 100 Searches With No Direct Match==\n";
		
		# Get the top searches
		$recentStats = $dbr->select(
					'search_query', 								# table
					array('count(*) AS QUERYCOUNT', 'sq_query', ), 	# columns
					'', 											# conditions
					__METHOD__,
					array( 'GROUP BY' => 'sq_query',
					'ORDER BY' => 'QUERYCOUNT DESC LIMIT 100')		# options	
		);
		
		# Start a table to display data in
		$wikitext .= "{| class=\"wikitable sortable\" \n !Term \n !Times \n";
		
		# Output the table
		foreach( $recentStats as $row){
			$wikitext .= "|- \n | [[" . $row->sq_query . "]]\n |" . $row->QUERYCOUNT . " \n";
		}
		
		# End the table
		$wikitext .= "|} \n";
		
		return $wikitext;
	}
}