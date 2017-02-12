<?php

namespace Orchestra\Testbench\Tests;

use Orchestra\Testbench\Tests\Stubs\TestCase;

class TestCaseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Orchestra\Testbench\TestCase::createApplication() method.
     *
     * @test
     */
    public function testCreateApplicationMethod()
    {
        $stub = new TestCase();
        $app = $stub->createApplication();

        $this->assertInstanceOf('\Orchestra\Testbench\Contracts\TestCase', $stub);
        $this->assertInstanceOf('\Illuminate\Foundation\Application', $app);
        $this->assertEquals('UTC', date_default_timezone_get());
        $this->assertEquals('testing', $app['env']);
        $this->assertInstanceOf('\Illuminate\Config\Repository', $app['config']);
    }
}
