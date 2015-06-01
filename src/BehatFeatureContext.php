<?php namespace Orchestra\Testbench;

use Behat\Behat\Context\BehatContext;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Foundation\Testing\CrawlerTrait;
use Orchestra\Testbench\Traits\ApplicationTrait;
use Illuminate\Foundation\Testing\AssertionsTrait;
use Illuminate\Foundation\Testing\ApplicationTrait as FoundationTrait;

abstract class BehatFeatureContext extends BehatContext implements TestCaseInterface
{
    use ApplicationTrait, CrawlerTrait, FoundationTrait, AssertionsTrait;

    /**
     * The Eloquent factory instance.
     *
     * @var \Illuminate\Database\Eloquent\Factory
     */
    protected $factory;

    /**
     * Initializes context.
     * Every scenario gets its own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        $this->setUp();
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

        if (! $this->factory) {
            $this->factory = $this->app->make(Factory::class);
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
