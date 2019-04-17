<?php

declare( strict_types = 1 );

namespace Jeroen\SimpleGeocoder\Geocoders\Adapters;

use DataValues\Geo\Values\LatLongValue;
use Geocoder\Exception\Exception;
use Geocoder\Provider\Provider;
use Geocoder\Query\GeocodeQuery;
use Jeroen\SimpleGeocoder\Geocoder;

/**
 * Adapter for the https://github.com/geocoder-php/Geocoder library.
 * The interface adapted to is the Provider one defined in
 * https://github.com/geocoder-php/php-common.
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class GeocoderPhpAdapter implements Geocoder {

	private $geocoder;

	public function __construct( Provider $geocoderProvider ) {
		$this->geocoder = $geocoderProvider;
	}

	/**
	 * @param string $address
	 *
	 * @return LatLongValue|null
	 */
	public function geocode( string $address ) {
		try {
			$result = $this->geocoder->geocodeQuery(
				GeocodeQuery::create( $address )->withLimit( 1 )
			);
		}
		catch ( Exception $ex ) {
			return null;
		}

		if ( $result->isEmpty() ) {
			return null;
		}

		$coordinates = $result->first()->getCoordinates();

		if ( $coordinates === null ) {
			return null;
		}

		return new LatLongValue(
			$coordinates->getLatitude(),
			$coordinates->getLongitude()
		);
	}

}
