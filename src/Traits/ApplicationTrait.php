<?php namespace Orchestra\Testbench\Traits;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Facade;

trait ApplicationTrait
{
    /**
     * Get application timezone.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return string|null
     */
    protected function getApplicationTimezone($app)
    {
        return $app['config']['app.timezone'];
    }

    /**
     * Get application aliases.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getApplicationAliases($app)
    {
        return [
            'App'       => \Illuminate\Support\Facades\App::class,
            'Artisan'   => \Illuminate\Support\Facades\Artisan::class,
            'Auth'      => \Illuminate\Support\Facades\Auth::class,
            'Blade'     => \Illuminate\Support\Facades\Blade::class,
            'Bus'       => \Illuminate\Support\Facades\Bus::class,
            'Cache'     => \Illuminate\Support\Facades\Cache::class,
            'Config'    => \Illuminate\Support\Facades\Config::class,
            'Cookie'    => \Illuminate\Support\Facades\Cookie::class,
            'Crypt'     => \Illuminate\Support\Facades\Crypt::class,
            'DB'        => \Illuminate\Support\Facades\DB::class,
            'Eloquent'  => \Illuminate\Database\Eloquent\Model::class,
            'Event'     => \Illuminate\Support\Facades\Event::class,
            'File'      => \Illuminate\Support\Facades\File::class,
            'Gate'      => \Illuminate\Support\Facades\Gate::class,
            'Hash'      => \Illuminate\Support\Facades\Hash::class,
            'Input'     => \Illuminate\Support\Facades\Input::class,
            'Inspiring' => \Illuminate\Foundation\Inspiring::class,
            'Lang'      => \Illuminate\Support\Facades\Lang::class,
            'Log'       => \Illuminate\Support\Facades\Log::class,
            'Mail'      => \Illuminate\Support\Facades\Mail::class,
            'Password'  => \Illuminate\Support\Facades\Password::class,
            'Queue'     => \Illuminate\Support\Facades\Queue::class,
            'Redirect'  => \Illuminate\Support\Facades\Redirect::class,
            'Redis'     => \Illuminate\Support\Facades\Redis::class,
            'Request'   => \Illuminate\Support\Facades\Request::class,
            'Response'  => \Illuminate\Support\Facades\Response::class,
            'Route'     => \Illuminate\Support\Facades\Route::class,
            'Schema'    => \Illuminate\Support\Facades\Schema::class,
            'Session'   => \Illuminate\Support\Facades\Session::class,
            'Storage'   => \Illuminate\Support\Facades\Storage::class,
            'URL'       => \Illuminate\Support\Facades\URL::class,
            'Validator' => \Illuminate\Support\Facades\Validator::class,
            'View'      => \Illuminate\Support\Facades\View::class,
        ];
    }

    /**
     * Get package aliases.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [];
    }

    /**
     * Get application providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getApplicationProviders($app)
    {
        return [
            \Illuminate\Foundation\Providers\ArtisanServiceProvider::class,
            \Illuminate\Auth\AuthServiceProvider::class,
            \Illuminate\Broadcasting\BroadcastServiceProvider::class,
            \Illuminate\Bus\BusServiceProvider::class,
            \Illuminate\Cache\CacheServiceProvider::class,
            \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
            \Illuminate\Routing\ControllerServiceProvider::class,
            \Illuminate\Cookie\CookieServiceProvider::class,
            \Illuminate\Database\DatabaseServiceProvider::class,
            \Illuminate\Encryption\EncryptionServiceProvider::class,
            \Illuminate\Filesystem\FilesystemServiceProvider::class,
            \Illuminate\Foundation\Providers\FormRequestServiceProvider::class,
            \Illuminate\Hashing\HashServiceProvider::class,
            \Illuminate\Mail\MailServiceProvider::class,
            \Orchestra\Database\MigrationServiceProvider::class,
            \Illuminate\Pagination\PaginationServiceProvider::class,
            \Illuminate\Pipeline\PipelineServiceProvider::class,
            \Illuminate\Queue\QueueServiceProvider::class,
            \Illuminate\Redis\RedisServiceProvider::class,
            \Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
            \Illuminate\Database\SeedServiceProvider::class,
            \Illuminate\Session\SessionServiceProvider::class,
            \Illuminate\Translation\TranslationServiceProvider::class,
            \Illuminate\Validation\ValidationServiceProvider::class,
            \Illuminate\View\ViewServiceProvider::class,
        ];
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [];
    }

    /**
     * Get base path.
     *
     * @return string
     */
    protected function getBasePath()
    {
        return __DIR__.'/../../fixture';
    }

    /**
     * Creates the application.
     *
     * Needs to be implemented by subclasses.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = $this->resolveApplication();

        $this->resolveApplicationExceptionHandler($app);
        $this->resolveApplicationCore($app);
        $this->resolveApplicationConfiguration($app);
        $this->resolveApplicationHttpKernel($app);
        $this->resolveApplicationConsoleKernel($app);

        $app->make('Illuminate\Foundation\Bootstrap\ConfigureLogging')->bootstrap($app);
        $app->make('Illuminate\Foundation\Bootstrap\HandleExceptions')->bootstrap($app);
        $app->make('Illuminate\Foundation\Bootstrap\RegisterFacades')->bootstrap($app);
        $app->make('Illuminate\Foundation\Bootstrap\SetRequestForConsole')->bootstrap($app);
        $app->make('Illuminate\Foundation\Bootstrap\RegisterProviders')->bootstrap($app);

        $this->getEnvironmentSetUp($app);

        $app->make('Illuminate\Foundation\Bootstrap\BootProviders')->bootstrap($app);

        return $app;
    }

    /**
     * Resolve application implementation.
     *
     * @return \Illuminate\Foundation\Application
     */
    protected function resolveApplication()
    {
        $app = new Application($this->getBasePath());

        $app->bind('Illuminate\Foundation\Bootstrap\LoadConfiguration', 'Orchestra\Testbench\Bootstrap\LoadConfiguration');

        return $app;
    }

    /**
     * Resolve application core configuration implementation.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return void
     */
    protected function resolveApplicationConfiguration($app)
    {
        $app->make('Illuminate\Foundation\Bootstrap\LoadConfiguration')->bootstrap($app);
        $timezone = $this->getApplicationTimezone($app);

        ! is_null($timezone) && date_default_timezone_set($timezone);

        $aliases   = array_merge($this->getApplicationAliases($app), $this->getPackageAliases($app));
        $providers = array_merge($this->getApplicationProviders($app), $this->getPackageProviders($app));

        $app['config']['app.aliases']   = $aliases;
        $app['config']['app.providers'] = $providers;
    }

    /**
     * Resolve application core implementation.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return void
     */
    protected function resolveApplicationCore($app)
    {
        Facade::clearResolvedInstances();
        Facade::setFacadeApplication($app);

        $app->detectEnvironment(function () {
            return 'testing';
        });
    }

    /**
     * Resolve application Console Kernel implementation.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return void
     */
    protected function resolveApplicationConsoleKernel($app)
    {
        $app->singleton('Illuminate\Contracts\Console\Kernel', 'Orchestra\Testbench\Console\Kernel');
    }

    /**
     * Resolve application HTTP Kernel implementation.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return void
     */
    protected function resolveApplicationHttpKernel($app)
    {
        $app->singleton('Illuminate\Contracts\Http\Kernel', 'Orchestra\Testbench\Http\Kernel');
    }

    /**
     * Resolve application HTTP exception handler.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return void
     */
    protected function resolveApplicationExceptionHandler($app)
    {
        $app->singleton('Illuminate\Contracts\Debug\ExceptionHandler', 'Orchestra\Testbench\Exceptions\Handler');
    }
}
