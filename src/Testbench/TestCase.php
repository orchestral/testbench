<?php namespace Orchestra\Testbench;

use Orchestra\Testbench\Traits\ApplicationTrait;
use Orchestra\Testbench\Traits\CrawlerTrait;
use Orchestra\Testbench\Traits\PHPUnitAssertionsTrait;
use Illuminate\Foundation\Testing\ApplicationTrait as ApplicationClientTrait;

abstract class TestCase extends \PHPUnit_Framework_TestCase implements TestCaseInterface
{
    use ApplicationClientTrait, ApplicationTrait, CrawlerTrait, PHPUnitAssertionsTrait {
        CrawlerTrait::call insteadof ApplicationClientTrait;
    }

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
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Define your environment setup.
    }
}
