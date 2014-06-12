<?php namespace Orchestra\Testbench;

use Orchestra\Testbench\Traits\ApplicationClientTrait;
use Orchestra\Testbench\Traits\ApplicationTrait;
use Orchestra\Testbench\Traits\PHPUnitAssertionsTrait;

abstract class TestCase extends \PHPUnit_Framework_TestCase implements TestCaseInterface
{
    use ApplicationClientTrait, ApplicationTrait, PHPUnitAssertionsTrait;

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
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application   $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Define your environment setup.
    }
}
