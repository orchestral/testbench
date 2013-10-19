<?php namespace Orchestra\Testbench\Tests;

class TestCaseTest extends \PHPUnit_Framework_TestCase
{
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
        $this->assertEquals('UTC', date_default_timezone_get());
        $this->assertEquals('testing', $app['env']);
        $this->assertInstanceOf('\Illuminate\Config\Repository', $app['config']);
    }
}

class StubTestCase extends \Orchestra\Testbench\TestCase
{

}
