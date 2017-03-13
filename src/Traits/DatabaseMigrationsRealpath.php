<?php

namespace Orchestra\Testbench\Traits;

trait DatabaseMigrationsRealpath
{
    /**
     * Define hooks to migrate the database before and after each test.
     *
     * @return void
     */
    public function runDatabaseMigrations($realpath)
    {
        $this->artisan('migrate', [
            '--realpath' => $realpath,
        ]);

        $this->beforeApplicationDestroyed(function () {
            $this->artisan('migrate:rollback');
        });
    }
}
