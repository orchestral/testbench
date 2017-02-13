<?php

namespace Orchestra\Testbench\TestCase;

class ConfigTest extends \Orchestra\Testbench\TestCase
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

        $this->loadConfigurationFiles($app, __DIR__.'/config/');
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

    /**
     * Test loadConfigurationFiles() merges configs correctly.
     *
     * @test
     */
    public function testLoadConfigurationFilesMergesValues()
    {
        $testbench = [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ];

        $this->assertEquals($testbench, config('database.connections.testbench'));
    }

    /**
     * Test loadConfigurationFiles() replaces config values correctly.
     *
     * @test
     */
    public function testLoadConfigurationFilesReplacesValues()
    {
        $this->assertEquals('XYZ123', config('services.sparkpost.secret'));
    }
}
