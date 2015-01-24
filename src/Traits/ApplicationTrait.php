<?php namespace Orchestra\Testbench\Traits;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Facade;

trait ApplicationTrait
{
    /**
     * The Illuminate application instance.
     *
     * @var \Illuminate\Foundation\Application
     */
    protected $app;

    /**
     * Refresh the application instance.
     *
     * @return void
     */
    protected function refreshApplication()
    {
        $this->app = $this->createApplication();

        putenv('APP_ENV=testing');
    }


    /**
     * Get application timezone.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return string|null
     */
    protected function getApplicationTimezone($app)
    {
        return null;
    }

    /**
     * Get application aliases.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getApplicationAliases($app)
    {
        return [
            'App'       => 'Illuminate\Support\Facades\App',
            'Artisan'   => 'Illuminate\Support\Facades\Artisan',
            'Auth'      => 'Illuminate\Support\Facades\Auth',
            'Blade'     => 'Illuminate\Support\Facades\Blade',
            'Bus'       => 'Illuminate\Support\Facades\Bus',
            'Cache'     => 'Illuminate\Support\Facades\Cache',
            'Config'    => 'Illuminate\Support\Facades\Config',
            'Cookie'    => 'Illuminate\Support\Facades\Cookie',
            'Crypt'     => 'Illuminate\Support\Facades\Crypt',
            'DB'        => 'Illuminate\Support\Facades\DB',
            'Event'     => 'Illuminate\Support\Facades\Event',
            'File'      => 'Illuminate\Support\Facades\File',
            'Hash'      => 'Illuminate\Support\Facades\Hash',
            'Input'     => 'Illuminate\Support\Facades\Input',
            'Inspiring' => 'Illuminate\Foundation\Inspiring',
            'Lang'      => 'Illuminate\Support\Facades\Lang',
            'Log'       => 'Illuminate\Support\Facades\Log',
            'Mail'      => 'Illuminate\Support\Facades\Mail',
            'Password'  => 'Illuminate\Support\Facades\Password',
            'Queue'     => 'Illuminate\Support\Facades\Queue',
            'Redirect'  => 'Illuminate\Support\Facades\Redirect',
            'Redis'     => 'Illuminate\Support\Facades\Redis',
            'Request'   => 'Illuminate\Support\Facades\Request',
            'Response'  => 'Illuminate\Support\Facades\Response',
            'Route'     => 'Illuminate\Support\Facades\Route',
            'Schema'    => 'Illuminate\Support\Facades\Schema',
            'Session'   => 'Illuminate\Support\Facades\Session',
            'URL'       => 'Illuminate\Support\Facades\URL',
            'Validator' => 'Illuminate\Support\Facades\Validator',
            'View'      => 'Illuminate\Support\Facades\View',
        ];
    }

    /**
     * Get package aliases.
     *
     * @param  \Illuminate\Foundation\Application  $app
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
     * @return array
     */
    protected function getApplicationProviders($app)
    {
        return [
            'Illuminate\Foundation\Providers\ArtisanServiceProvider',
            'Illuminate\Auth\AuthServiceProvider',
            'Illuminate\Bus\BusServiceProvider',
            'Illuminate\Cache\CacheServiceProvider',
            'Illuminate\Foundation\Providers\ConsoleSupportServiceProvider',
            'Illuminate\Cookie\CookieServiceProvider',
            'Illuminate\Database\DatabaseServiceProvider',
            'Illuminate\Encryption\EncryptionServiceProvider',
            'Illuminate\Filesystem\FilesystemServiceProvider',
            'Illuminate\Foundation\Providers\FormRequestServiceProvider',
            'Illuminate\Hashing\HashServiceProvider',
            'Illuminate\Mail\MailServiceProvider',
            'Illuminate\Database\MigrationServiceProvider',
            'Illuminate\Pagination\PaginationServiceProvider',
            'Illuminate\Pipeline\PipelineServiceProvider',
            'Illuminate\Queue\QueueServiceProvider',
            'Illuminate\Redis\RedisServiceProvider',
            'Illuminate\Auth\Passwords\PasswordResetServiceProvider',
            'Illuminate\Database\SeedServiceProvider',
            'Illuminate\Session\SessionServiceProvider',
            'Illuminate\Translation\TranslationServiceProvider',
            'Illuminate\Validation\ValidationServiceProvider',
            'Illuminate\View\ViewServiceProvider',
        ];
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
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
        return new Application($this->getBasePath());
    }

    /**
     * Resolve application core configuration implementation.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function resolveApplicationConfiguration($app)
    {
        $app->make('Illuminate\Foundation\Bootstrap\LoadConfiguration')->bootstrap($app);
        $timezone = $this->getApplicationTimezone($app);

        ! is_null($timezone) && date_default_timezone_set($timezone);

        $aliases = array_merge($this->getApplicationAliases($app), $this->getPackageAliases($app));
        $app['config']['app.aliases'] = $aliases;

        $providers = array_merge($this->getApplicationProviders($app), $this->getPackageProviders($app));
        $app['config']['app.providers'] = $providers;
    }

    /**
     * Resolve application core implementation.
     *
     * @param  \Illuminate\Foundation\Application  $app
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
     * @return void
     */
    protected function resolveApplicationExceptionHandler($app)
    {
        $app->singleton('Illuminate\Contracts\Debug\ExceptionHandler', 'Orchestra\Testbench\Exceptions\Handler');
    }
}
