<?php

namespace Orchestra\Testbench\Traits;

use Illuminate\Contracts\Console\Kernel as ConsoleKernel;

trait WithLaravelMigrations
{
    /**
     * Migrate Laravel's default migrations.
     *
     * @param  array|string  $database
     *
     * @return void
     */
    protected function loadLaravelMigrations($database)
    {
        $options = is_array($database) ? $database : ['--database' => $database];

        $options['--path'] = 'migrations';

        $this->artisan('migrate', $options);

        $this->app[ConsoleKernel::class]->setArtisan(null);

        $this->beforeApplicationDestroyed(function () use ($options) {
            $this->artisan('migrate:rollback', $options);
        });
    }
}
