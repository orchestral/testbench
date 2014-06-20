<?php namespace Orchestra\Testbench\TestCase;

class BehatFeatureContextTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Orchestra\Testbench\BehatFeatureContext::createApplication() method.
     *
     * @test
     */
    public function testCreateApplicationMethod()
    {
        $stub = new StubFeatureContext([]);
        $app  = $stub->createApplication();

        $this->assertInstanceOf('\Orchestra\Testbench\TestCaseInterface', $stub);
        $this->assertInstanceOf('\Illuminate\Foundation\Application', $app);
        $this->assertEquals('UTC', date_default_timezone_get());
        $this->assertEquals('testing', $app['env']);
        $this->assertInstanceOf('\Illuminate\Config\Repository', $app['config']);
    }
}

class StubFeatureContext extends \Orchestra\Testbench\BehatFeatureContext
{

}
