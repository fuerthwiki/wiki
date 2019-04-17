<?php

declare( strict_types = 1 );

namespace FileFetcher\Cache\Tests\Integration;

use FileFetcher\Cache\Factory;
use FileFetcher\NullFileFetcher;
use PHPUnit\Framework\TestCase;
use Psr\SimpleCache\CacheInterface;
use SimpleCache\Cache\SimpleInMemoryCache;

/**
 * @covers \FileFetcher\Cache\Factory
 *
 * @licence BSD-3-Clause
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class FactoryTest extends TestCase {

	public function testNewCachingFetcherReturnsFetcherThatUsesCache() {
		$cache = ( new Factory() )->newCachingFetcher(
			new NullFileFetcher(),
			$this->newStubCache( '42' ),
			60
		);

		$this->assertSame(
			'42',
			$cache->fetchFile( 'whatever' )
		);
	}

	private function newStubCache( string $stubValue ): CacheInterface {
		$cache = $this->createMock( CacheInterface::class );

		$cache->method( 'get' )
			->willReturn( $stubValue );

		return $cache;
	}

	public function testNewJeroenSimpleCacheFetcherReturnsFetcherThatUsesCache() {
		$cache = new SimpleInMemoryCache();
		$cache->set( 'whatever', '42' );

		$cache = ( new Factory() )->newJeroenSimpleCacheFetcher(
			new NullFileFetcher(),
			$cache
		);

		$this->assertSame(
			'42',
			$cache->fetchFile( 'whatever' )
		);
	}

}
