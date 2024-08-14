<?php

namespace Workbench\App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class WorkbenchServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->loadMigrationsFrom(realpath(__DIR__.'/../../database/migrations'));
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        Route::macro('text', function (string $url, string $content) {
            return $this->get($url, fn () => response($content)->header('Content-Type', 'text/plain'));
        });
    }
}
