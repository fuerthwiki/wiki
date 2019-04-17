<?php

declare( strict_types = 1 );

namespace FileFetcher\Cache\Tests\Unit\PackagePrivate;

use FileFetcher\Cache\PackagePrivate\PsrCacheFileFetcher;
use FileFetcher\FileFetchingException;
use FileFetcher\InMemoryFileFetcher;
use FileFetcher\ThrowingFileFetcher;
use PHPUnit\Framework\TestCase;
use Psr\SimpleCache\CacheException;
use Psr\SimpleCache\CacheInterface;

/**
 * @covers \FileFetcher\Cache\PackagePrivate\PsrCacheFileFetcher
 *
 * @licence BSD-3-Clause
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class PsrCacheFileFetcherTest extends TestCase {

	private const FILE_URL = 'foo://bar';
	private const FILE_CONTENT = 'NyanData across the sky!';

	private $fileFetcher;
	private $cache;
	private $ttl;
	private $keyBuilder;

	public function setUp() {
		$this->fileFetcher = new InMemoryFileFetcher( [
			self::FILE_URL => self::FILE_CONTENT
		] );

		$this->cache = $this->newCacheWithFile();
		$this->ttl = null;

		$this->keyBuilder = function( string $string ): string {
			return $string;
		};
	}

	private function newCacheWithFile(): CacheInterface {
		$cache = $this->createMock( CacheInterface::class );

		$cache->expects( $this->any() )
			->method( 'get' )
			->with( self::FILE_URL )
			->will( $this->returnValue( self::FILE_CONTENT ) );

		return $cache;
	}

	private function newCachingFileFetcher(): PsrCacheFileFetcher {
		return new PsrCacheFileFetcher(
			$this->fileFetcher,
			$this->cache,
			$this->ttl,
			$this->keyBuilder
		);
	}

	public function testWhenFileIsNotCached_itGetsRetrieved() {
		$this->cache = $this->newNullCache();

		$this->assertSame(
			self::FILE_CONTENT,
			$this->newCachingFileFetcher()->fetchFile( self::FILE_URL )
		);
	}

	/**
	 * @return \PHPUnit\Framework\MockObject\MockObject|CacheInterface
	 */
	private function newNullCache() {
		$cache = $this->createMock( CacheInterface::class );

		$cache->expects( $this->any() )
			->method( 'get' )
			->with( self::FILE_URL )
			->will( $this->returnValue( null ) );

		return $cache;
	}

	public function testWhenFileIsCached_cachedContentsGetsReturned() {
		$this->fileFetcher = new ThrowingFileFetcher();

		$this->assertSame(
			self::FILE_CONTENT,
			$this->newCachingFileFetcher()->fetchFile( self::FILE_URL )
		);
	}

	public function testWhenFileIsNotCached_fileContentsGetsCached() {
		$this->cache = $this->newNullCache();

		$this->cache->expects( $this->once() )
			->method( 'set' )
			->with(
				$this->equalTo( self::FILE_URL ),
				$this->equalTo( self::FILE_CONTENT )
			);

		$this->newCachingFileFetcher()->fetchFile( self::FILE_URL );
	}

	public function testWhenFetcherThrowsException_itIsNotCaught() {
		$this->cache = $this->newNullCache();
		$this->fileFetcher = new ThrowingFileFetcher();
		$fetcher = $this->newCachingFileFetcher();

		$this->expectException( FileFetchingException::class );
		$fetcher->fetchFile( self::FILE_URL );
	}

	public function testWhenCacheReadThrowsException_fileContentIsFetched() {
		$this->cache = $this->newCacheThatThrowsOnGet();

		$this->assertSame(
			self::FILE_CONTENT,
			$this->newCachingFileFetcher()->fetchFile( self::FILE_URL )
		);
	}

	private function newCacheThatThrowsOnGet(): CacheInterface {
		$cache = $this->createMock( CacheInterface::class );

		$cache->expects( $this->any() )
			->method( 'get' )
			->willThrowException( $this->newCacheException() );

		return $cache;
	}

	private function newCacheException(): \Exception {
		return new class() extends \Exception implements CacheException {
		};
	}

	public function testWhenCacheWriteThrowsException_fileContentIsReturned() {
		$this->cache = $this->newCacheThatThrowsOnSet();

		$this->assertSame(
			self::FILE_CONTENT,
			$this->newCachingFileFetcher()->fetchFile( self::FILE_URL )
		);
	}

	private function newCacheThatThrowsOnSet(): CacheInterface {
		$cache = $this->createMock( CacheInterface::class );

		$cache->expects( $this->any() )
			->method( 'set' )
			->willThrowException( $this->newCacheException() );

		return $cache;
	}

	/**
	 * @dataProvider cacheKeyProvider
	 */
	public function testCacheKeyBuilding( string $fileUrl, string $expectedCacheKey ) {
		$this->fileFetcher = new InMemoryFileFetcher( [
			$fileUrl => $expectedCacheKey
		] );

		$this->cache = $this->createMock( CacheInterface::class );

		$this->cache->expects( $this->once() )
			->method( 'get' )
			->with( $this->equalTo( $expectedCacheKey ) );

		$this->cache->expects( $this->once() )
			->method( 'set' )
			->with( $this->equalTo( $expectedCacheKey ) );

		$this->keyBuilder = null;

		$this->newCachingFileFetcher()->fetchFile( $fileUrl );
	}

	public function cacheKeyProvider(): iterable {
		yield [
			'https://www.entropywins.wtf/blog/wp-json/wp/v2/posts?per_page=10',
			'https___www_entropywins_wtf_blog_wp-json_wp_v2_posts_per_page_10-adbba'
		];
		yield [
			'/tmp',
			'_tmp-8c393'
		];
		yield [
			'http://localhost:8042/kittens.jpg',
			'http___localhost_8042_kittens_jpg-2f14e'
		];
		yield [
			'ÆntrøpyWins',
			'__ntr__pyWins-6e250'
		];
	}

	/**
	 * @dataProvider validTtlProvider
	 */
	public function testTtlIsPassedToCache( $ttl ) {
		$this->ttl = $ttl;

		$this->cache = $this->newNullCache();

		$this->cache->expects( $this->once() )
			->method( 'set' )
			->with( $this->anything(), $this->anything(), $this->equalTo( $ttl ) );

		$this->newCachingFileFetcher()->fetchFile( self::FILE_URL );
	}

	public function validTtlProvider(): iterable {
		yield [ null ];
		yield [ 0 ];
		yield [ 1 ];
		yield [ 100 ];
		yield [ new \DateInterval( 'P3M' ) ];
	}

}
