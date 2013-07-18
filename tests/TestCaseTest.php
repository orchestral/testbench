<?php namespace Orchestra\Testbench\Tests;

class TestCaseTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Test Orchestra\Testbench\TestCase::createApplication() method.
	 *
	 * @test
	 */
	public function testCreateApplicationMethod()
	{
		$stub = new StubTestCase;
		$app  = $stub->createApplication();

		$this->assertInstanceOf('\Illuminate\Foundation\Application', $app);
		$this->assertEquals('Asia/Kuala_Lumpur', date_default_timezone_get());
		$this->assertEquals('testing', $app['env']);
		$this->assertInstanceOf('\Illuminate\Config\Repository', $app['config']);
	}
}

class StubTestCase extends \Orchestra\Testbench\TestCase {

	/**
	 * Get application timezone.
	 *
	 * @access protected
	 * @return string
	 */
	protected function getApplicationTimezone()
	{
		return 'Asia/Kuala_Lumpur';
	}
}
