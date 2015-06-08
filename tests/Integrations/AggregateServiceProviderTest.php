<?php namespace Orchestra\Testbench\Integrations\TestCase;

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
            'Orchestra\Testbench\Integrations\TestCase\ParentService',
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


class ParentService extends AggregateServiceProvider
{
    protected $providers = [
        'Orchestra\Testbench\Integrations\TestCase\ChildService',
        'Orchestra\Testbench\Integrations\TestCase\DeferredChildService',
    ];

    public function register()
    {
        parent::register();

        $this->app['parent.loaded'] = true;
    }
}

class ChildService extends ServiceProvider
{
    public function register()
    {
        $this->app['child.loaded'] = true;
    }
}

class DeferredChildService extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app['child.deferred.loaded'] = true;
    }
}