<?php namespace Orchestra\Testbench\Traits;

trait WithLaravelMigrations
{
    use WithLoadMigrationsFrom;

    /**
     * Migrate Laravel's default migrations.
     *
     * @param  string $database
     *
     * @return void
     */
    protected function loadLaravelMigrations($database)
    {
        $options = is_array($database) ? $database : ['--database' => $database];

        $options['--realpath'] = realpath($this->app->basePath().'/migrations');

        $this->loadMigrationsFrom($options);
    }

    /**
     * Define hooks to migrate the database before and after each test.
     *
     * @param  string|array  $realpah
     *
     * @return void
     */
    abstract protected function loadMigrationsFrom($realpath);
}
