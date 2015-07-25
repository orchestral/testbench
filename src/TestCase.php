<?php namespace Orchestra\Testbench;

use Mockery;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Foundation\Testing\CrawlerTrait;
use Orchestra\Testbench\Traits\ApplicationTrait;
use Illuminate\Foundation\Testing\AssertionsTrait;
use Illuminate\Foundation\Testing\ApplicationTrait as FoundationTrait;

abstract class TestCase extends \PHPUnit_Framework_TestCase implements TestCaseInterface
{
    use ApplicationTrait, CrawlerTrait, FoundationTrait, AssertionsTrait;

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * The Eloquent factory instance.
     *
     * @var \Illuminate\Database\Eloquent\Factory
     */
    protected $factory;

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

        if (! $this->factory) {
            $this->factory = $this->app->make(Factory::class);
        }
    }

    /**
     * Clean up the testing environment before the next test.
     */
    public function tearDown()
    {
        if (class_exists('Mockery')) {
            Mockery::close();
        }

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
