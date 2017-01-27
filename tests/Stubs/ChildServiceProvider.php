<?php

namespace Orchestra\Testbench\Tests\Stubs;

class ChildServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app['child.loaded'] = true;
    }
}
