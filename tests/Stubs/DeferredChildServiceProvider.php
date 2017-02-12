<?php

namespace Orchestra\Testbench\Tests\Stubs;

class DeferredChildServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app['child.deferred.loaded'] = true;
    }
}
