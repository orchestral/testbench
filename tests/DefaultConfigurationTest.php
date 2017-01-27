<?php

namespace Orchestra\Testbench\Tests;

class DefaultConfigurationTest extends \Orchestra\Testbench\TestCase
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
