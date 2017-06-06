<?php

namespace Orchestra\Testbench\Bootstrap;

use Illuminate\Config\Repository;
use Illuminate\Contracts\Foundation\Application;
use Orchestra\Testbench\Traits\WithLoadConfigurationsFrom;

class LoadConfiguration
{
    use WithLoadConfigurationsFrom;

    /**
     * Bootstrap the given application.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     *
     * @return void
     */
    public function bootstrap(Application $app)
    {
        $items = [];

        $app->instance('config', $config = new Repository($items));

        $this->loadConfigurationFiles($app, __DIR__.'/../../fixture/config/');

        mb_internal_encoding('UTF-8');
    }
}
