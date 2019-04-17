<?php

declare( strict_types = 1 );

namespace FileFetcher\Cache\PackagePrivate;

use FileFetcher\FileFetcher;
use FileFetcher\FileFetchingException;
use SimpleCache\Cache\Cache;

/**
 * This class is package private and should not be bound to from outside this library.
 *
 * @licence BSD-3-Clause
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class CachingFileFetcher implements FileFetcher {

	private $fileFetcher;
	private $cache;

	public function __construct( FileFetcher $fileFetcher, Cache $cache ) {
		$this->fileFetcher = $fileFetcher;
		$this->cache = $cache;
	}

	/**
	 * @see FileFetcher::fetchFile
	 * @throws FileFetchingException
	 */
	public function fetchFile( string $fileUrl ): string {
		$fileContents = $this->cache->get( $fileUrl );

		if ( $fileContents === null ) {
			return $this->retrieveAndCacheFile( $fileUrl );
		}

		return $fileContents;
	}

	private function retrieveAndCacheFile( $fileUrl ): string {
		$fileContents = $this->fileFetcher->fetchFile( $fileUrl );

		$this->cache->set( $fileUrl, $fileContents );

		return $fileContents;
	}

}
