<?php

namespace ParamProcessor\Tests;

use ParamProcessor\Options;
use ParamProcessor\Param;
use ParamProcessor\ParamDefinition;
use PHPUnit\Framework\TestCase;

/**
 * @covers \ParamProcessor\Param
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class ParamTest extends TestCase {

	public function testListParamProcessingWithEmptyListAsDefault() {
		$definition = new ParamDefinition( 'string', 'something', [] );
		$definitions = [ $definition ];

		$param = new Param( $definition );
		$param->process( $definitions, [], new Options() );

		$this->assertSame( [], $param->getValue() );
	}

}
