<?php

namespace Orchestra\Testbench\Tests\Integrations;

use Orchestra\Testbench\TestCase;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\AggregateServiceProvider;

class AggregateServiceProviderTest extends TestCase
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            'Orchestra\Testbench\Tests\Stubs\ParentServiceProvider',
        ];
    }

    /**
     * Test able to load aggregate service providers.
     *
     * @test
     */
    public function testServiceIsAvailable()
    {
        $this->assertTrue($this->app->bound('parent.loaded'));
        $this->assertTrue($this->app->bound('child.loaded'));
        $this->assertTrue($this->app->bound('child.deferred.loaded'));

        $this->assertTrue($this->app->make('parent.loaded'));
        $this->assertTrue($this->app->make('child.loaded'));
        $this->assertTrue($this->app->make('child.deferred.loaded'));
    }
}
