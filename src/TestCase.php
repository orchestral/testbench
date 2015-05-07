<?php namespace Orchestra\Testbench;

use Orchestra\Testbench\Traits\ClientTrait;
use Orchestra\Testbench\Traits\CrawlerTrait;
use Orchestra\Testbench\Traits\ApplicationTrait;
use Orchestra\Testbench\Traits\PHPUnitAssertionsTrait;

abstract class TestCase extends \PHPUnit_Framework_TestCase implements TestCaseInterface
{
    use ApplicationTrait, ClientTrait, CrawlerTrait, PHPUnitAssertionsTrait;

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * The callbacks that should be run before the application is destroyed.
     *
     * @var array
     */
    protected $beforeApplicationDestroyedCallbacks = [];

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
            foreach ($this->beforeApplicationDestroyedCallbacks as $callback) {
                call_user_func($callback);
            }

            $this->app->flush();

            $this->app = null;
        }
    }

    /**
     * Register a callback to be run before the application is destroyed.
     *
     * @param  callable  $callback
     *
     * @return void
     */
    protected function beforeApplicationDestroyed(callable $callback)
    {
        $this->beforeApplicationDestroyedCallbacks[] = $callback;
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
