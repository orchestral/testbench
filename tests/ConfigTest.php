<?php

namespace Orchestra\Testbench\TestCase;

use Orchestra\Testbench\TestCase;

class ConfigTest extends TestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testing');
    }

    /**
     * Test \Illuminate\Support\Facades\Config facade is usable.
     *
     * @test
     */
    public function testConfigFacadeIsLoaded()
    {
        $this->assertEquals('testing', \Config::get('database.default'));
    }

    /**
     * Test config() helper is usable.
     *
     * @test
     */
    public function testConfigHelperIsLoaded()
    {
        $this->assertEquals('testing', config('database.default'));
    }
}
