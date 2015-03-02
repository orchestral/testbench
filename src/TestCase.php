<?php namespace Orchestra\Testbench;

use Orchestra\Testbench\Traits\ClientTrait;
use Orchestra\Testbench\Traits\ApplicationTrait;
use Orchestra\Testbench\Traits\PHPUnitAssertionsTrait;

abstract class TestCase extends \PHPUnit_Framework_TestCase implements TestCaseInterface
{
    use ApplicationTrait, ClientTrait, PHPUnitAssertionsTrait;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    public function setUp()
    {
        if (! $this->app) {
            $this->refreshApplication();
        }
    }

    /**
     * Clean up the testing environment before the next test.
     */
    public function tearDown()
    {
        if ($this->app) {
            $this->app->flush();
        }
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application   $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Define your environment setup.
    }
}
