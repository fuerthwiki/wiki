<?php

declare( strict_types = 1 );

namespace Jeroen\SimpleGeocoder;

use DataValues\Geo\Values\LatLongValue;

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
interface Geocoder {

	/**
	 * Returns null when no result is found or when an error occurs.
	 *
	 * @return LatLongValue|null
	 */
	public function geocode( string $address );

}