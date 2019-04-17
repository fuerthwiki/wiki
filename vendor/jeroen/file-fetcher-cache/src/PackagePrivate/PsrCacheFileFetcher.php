<?php

declare( strict_types = 1 );

namespace FileFetcher\Cache\PackagePrivate;

use FileFetcher\FileFetcher;
use FileFetcher\FileFetchingException;
use Psr\SimpleCache\CacheException;
use Psr\SimpleCache\CacheInterface;

/**
 * This class is package private and should not be bound to from outside this library.
 *
 * @licence BSD-3-Clause
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class PsrCacheFileFetcher implements FileFetcher {

	private $fileFetcher;
	private $cache;
	private $ttl;
	private $keyBuilder;

	/**
	 * @param FileFetcher $fileFetcher
	 * @param CacheInterface $cache
	 * @param \DateInterval|int|null $ttl
	 * @param callable|null $keyBuilderFunction Gets the fileUrl (string) and needs to return a valid cache key (string)
	 */
	public function __construct( FileFetcher $fileFetcher, CacheInterface $cache, $ttl, callable $keyBuilderFunction = null ) {
		$this->fileFetcher = $fileFetcher;
		$this->cache = $cache;
		$this->ttl = $ttl;
		$this->keyBuilder = $keyBuilderFunction ?? $this->getDefaultKeyBuilder();
	}

	private function getDefaultKeyBuilder(): callable {
		return function( string $fileUrl ): string {
			return preg_replace(
					'/[^A-Za-z0-9\-]/',
					'_',
					$fileUrl
				)
				. '-' . substr( sha1( $fileUrl ), 0, 5 );
		};
	}

	/**
	 * @see FileFetcher::fetchFile
	 * @throws FileFetchingException
	 */
	public function fetchFile( string $fileUrl ): string {
		$fileContents = $this->getFileContentsFromCache( $fileUrl );

		if ( $fileContents === null ) {
			return $this->retrieveAndCacheFile( $fileUrl );
		}

		return $fileContents;
	}

	private function getFileContentsFromCache( string $fileUrl ): ?string {
		try {
			return $this->cache->get( $this->createCacheKey( $fileUrl ) );
		}
		catch ( CacheException $ex ) {
			return null;
		}
	}

	private function createCacheKey( string $fileUrl ): string {
		return ( $this->keyBuilder )( $fileUrl );
	}

	private function retrieveAndCacheFile( string $fileUrl ): string {
		$fileContents = $this->fileFetcher->fetchFile( $fileUrl );

		try {
			$this->cache->set(
				$this->createCacheKey( $fileUrl ),
				$fileContents,
				$this->ttl
			);
		}
		catch ( CacheException $ex ) {
		}

		return $fileContents;
	}

}
