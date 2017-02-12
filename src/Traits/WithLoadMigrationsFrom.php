<?php namespace Orchestra\Testbench\Traits;

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
        $options  = is_array($realpath) ? $realpath : ['--realpath' => $realpath];
        $database = isset($options['--database']) ? $options['--database'] : null;

        $this->artisan('migrate', $options);

        $this->beforeApplicationDestroyed(function () use ($database) {
            $this->artisan('migrate:rollback', ['--database' => $database]);
        });
    }
}
