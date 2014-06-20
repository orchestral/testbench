<?php namespace Orchestra\Testbench;

use Behat\Behat\Context\BehatContext;
use Orchestra\Testbench\Traits\ApplicationClientTrait;
use Orchestra\Testbench\Traits\ApplicationTrait;
use Orchestra\Testbench\Traits\BehatPHPUnitAssertionsTrait;

abstract class BehatFeatureContext extends BehatContext implements TestCaseInterface
{
    use ApplicationTrait;
    use ApplicationClientTrait;
    use BehatPHPUnitAssertionsTrait;

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
