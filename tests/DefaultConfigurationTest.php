<?php

namespace Orchestra\Testbench\Tests;

use Orchestra\Testbench\TestCase;

class DefaultConfigurationTest extends TestCase
{
    /**
     * `cache.default` value is set to array.
     *
     * @test
     */
    public function testDefaultCacheConfiguration()
    {
        $this->assertEquals('array', $this->app['config']['cache.default']);
    }

    /**
     * `session.driver` value is set to array.
     *
     * @test
     */
    public function testDefaultSessionConfiguration()
    {
        $this->assertEquals('array', $this->app['config']['session.driver']);
    }
}
