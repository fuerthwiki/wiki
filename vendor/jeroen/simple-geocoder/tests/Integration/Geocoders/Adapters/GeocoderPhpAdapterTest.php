<?php

declare( strict_types = 1 );

namespace Jeroen\SimpleGeocoder\Tests\Integration\Geocoders\Adapters;

use DataValues\Geo\Values\LatLongValue;
use Geocoder\Collection;
use Geocoder\Exception\InvalidServerResponse;
use Geocoder\Provider\GoogleMaps\GoogleMaps;
use Geocoder\Provider\Provider;
use Geocoder\Query\GeocodeQuery;
use Geocoder\Query\ReverseQuery;
use GuzzleHttp\Psr7\Response;
use Http\Mock\Client;
use Jeroen\SimpleGeocoder\Geocoders\Adapters\GeocoderPhpAdapter;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Jeroen\SimpleGeocoder\Geocoders\Adapters\GeocoderPhpAdapter
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class GeocoderPhpAdapterTest extends TestCase {

	public function testHappyPath() {
		$httpClient = new Client();
		$httpClient->addResponse( new Response(
			200,
			[],
			file_get_contents( __DIR__ . '/GoogleMaps-NewYork.txt' )
		) );

		$phpGeocoder = new GoogleMaps( $httpClient );

		$simpleGeocoder = new GeocoderPhpAdapter( $phpGeocoder );

		$this->assertEquals(
			new LatLongValue( 40.7127753, -74.0059728 ),
			$simpleGeocoder->geocode( 'This is not used by the mock' )
		);
	}

	public function testWhenExceptionIsThrown_geocoderReturnsNull() {
		$simpleGeocoder = new GeocoderPhpAdapter( $this->newThrowingPhpGeocoder() );

		$this->assertNull( $simpleGeocoder->geocode( 'New York' ) );
	}

	private function newThrowingPhpGeocoder(): Provider {
		return new class() implements Provider {
			public function geocodeQuery( GeocodeQuery $query ): Collection {
				throw new InvalidServerResponse();
			}
			public function reverseQuery( ReverseQuery $query ): Collection {
				throw new InvalidServerResponse();
			}
			public function getName(): string {
				return '';
			}
		};
	}

}
