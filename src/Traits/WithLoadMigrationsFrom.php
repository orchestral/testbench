<?php

namespace Orchestra\Testbench\Traits;

use Exception;
use Orchestra\Database\ConsoleServiceProvider;
use Illuminate\Contracts\Console\Kernel as ConsoleKernel;

trait WithLoadMigrationsFrom
{
    /**
     * Define hooks to migrate the database before and after each test.
     *
     * @param  string|array  $realpah
     *
     * @return void
     */
    protected function loadMigrationsFrom($realpath)
    {
        if (! class_exists(ConsoleServiceProvider::class)) {
            throw new Exception('Missing `orchestra/database` in composer.json');
        }

        $options = is_array($realpath) ? $realpath : ['--realpath' => $realpath];

        $this->artisan('migrate', $options);

        $this->app[ConsoleKernel::class]->setArtisan(null);

        $this->beforeApplicationDestroyed(function () use ($options) {
            $this->artisan('migrate:rollback', $options);
        });
    }
}
