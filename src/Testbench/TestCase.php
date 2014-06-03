<?php namespace Orchestra\Testbench;

use Illuminate\Foundation\Testing\TestCase as FoundationTestCase;
use Orchestra\Testbench\Traits\ApplicationTrait;

abstract class TestCase extends FoundationTestCase
{
    use ApplicationTrait;

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
