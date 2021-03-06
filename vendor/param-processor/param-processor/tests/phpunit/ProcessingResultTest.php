<?php

namespace ParamProcessor\Tests;

use ParamProcessor\ProcessedParam;
use ParamProcessor\ProcessingError;
use ParamProcessor\ProcessingResult;
use PHPUnit\Framework\TestCase;

/**
 * @covers \ParamProcessor\ProcessingResult
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class ProcessingResultTest extends TestCase {

	public function testGetParameters() {
		$processedParams = [
			$this->newMockParam()
		];

		$result = new ProcessingResult( $processedParams );

		$this->assertEquals( $processedParams, $result->getParameters() );
	}

	private function newMockParam() {
		return $this->getMockBuilder( ProcessedParam::class )
			->disableOriginalConstructor()->getMock();
	}

	public function testGetErrors() {
		$errors = [
			$this->newMockError()
		];

		$result = new ProcessingResult( [], $errors );

		$this->assertEquals( $errors, $result->getErrors() );
	}

	private function newMockError() {
		return $this->getMockBuilder( ProcessingError::class )
			->disableOriginalConstructor()->getMock();
	}

	public function testGivenNoErrors_HasNoFatal() {
		$this->assertNoFatalForErrors( [] );
	}

	private function assertNoFatalForErrors( array $errors ) {
		$result = new ProcessingResult( [], $errors );

		$this->assertFalse( $result->hasFatal() );
	}

	public function testGivenNonfatalErrors_HasNoFatal() {
		$this->assertNoFatalForErrors( [
			new ProcessingError( '', ProcessingError::SEVERITY_HIGH ),
			new ProcessingError( '', ProcessingError::SEVERITY_LOW ),
			new ProcessingError( '', ProcessingError::SEVERITY_MINOR ),
			new ProcessingError( '', ProcessingError::SEVERITY_NORMAL ),
		] );
	}

	public function testGivenFatalError_HasFatal() {
		$result = new ProcessingResult( [], [
			new ProcessingError( '', ProcessingError::SEVERITY_HIGH ),
			new ProcessingError( '', ProcessingError::SEVERITY_LOW ),
			new ProcessingError( '', ProcessingError::SEVERITY_FATAL ),
			new ProcessingError( '', ProcessingError::SEVERITY_MINOR ),
			new ProcessingError( '', ProcessingError::SEVERITY_NORMAL ),
		] );

		$this->assertTrue( $result->hasFatal() );
	}

}