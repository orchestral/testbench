<?php namespace Orchestra\Testbench\Traits;

use Illuminate\Http\Request;
use Illuminate\Config\FileLoader;
use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Application;
use Illuminate\Routing\Stack\Builder as Stack;

trait ApplicationTrait
{
    /**
     * Get application timezone.
     *
     * @return string
     */
    protected function getApplicationTimezone()
    {
        return 'UTC';
    }

    /**
     * Get application aliases.
     *
     * @return array
     */
    protected function getApplicationAliases()
    {
        return [
            'App'             => 'Illuminate\Support\Facades\App',
            'Artisan'         => 'Illuminate\Support\Facades\Artisan',
            'Auth'            => 'Illuminate\Support\Facades\Auth',
            'Blade'           => 'Illuminate\Support\Facades\Blade',
            'Cache'           => 'Illuminate\Support\Facades\Cache',
            'Config'          => 'Illuminate\Support\Facades\Config',
            'Controller'      => 'Illuminate\Routing\Controller',
            'Cookie'          => 'Illuminate\Support\Facades\Cookie',
            'Crypt'           => 'Illuminate\Support\Facades\Crypt',
            'DB'              => 'Illuminate\Support\Facades\DB',
            'Eloquent'        => 'Illuminate\Database\Eloquent\Model',
            'Event'           => 'Illuminate\Support\Facades\Event',
            'File'            => 'Illuminate\Support\Facades\File',
            'FormRequest'     => 'Illuminate\Foundation\Http\FormRequest',
            'Hash'            => 'Illuminate\Support\Facades\Hash',
            'Input'           => 'Illuminate\Support\Facades\Input',
            'Lang'            => 'Illuminate\Support\Facades\Lang',
            'Log'             => 'Illuminate\Support\Facades\Log',
            'Mail'            => 'Illuminate\Support\Facades\Mail',
            'Paginator'       => 'Illuminate\Support\Facades\Paginator',
            'Password'        => 'Illuminate\Support\Facades\Password',
            'Queue'           => 'Illuminate\Support\Facades\Queue',
            'Redirect'        => 'Illuminate\Support\Facades\Redirect',
            'Redis'           => 'Illuminate\Support\Facades\Redis',
            'Request'         => 'Illuminate\Support\Facades\Request',
            'Response'        => 'Illuminate\Support\Facades\Response',
            'Route'           => 'Illuminate\Support\Facades\Route',
            'Schema'          => 'Illuminate\Support\Facades\Schema',
            'Seeder'          => 'Illuminate\Database\Seeder',
            'Session'         => 'Illuminate\Support\Facades\Session',
            'Str'             => 'Illuminate\Support\Str',
            'URL'             => 'Illuminate\Support\Facades\URL',
            'Validator'       => 'Illuminate\Support\Facades\Validator',
            'View'            => 'Illuminate\Support\Facades\View',
        ];
    }

    /**
     * Get package aliases.
     *
     * @return array
     */
    protected function getPackageAliases()
    {
        return [];
    }

    /**
     * Get application middlewares.
     *
     * @return array
     */
    protected function getApplicationMiddlewares()
    {
        return [
            'Illuminate\Cookie\Middleware\Guard',
            'Illuminate\Cookie\Middleware\Queue',
            'Illuminate\Session\Middleware\Reader',
            'Illuminate\Session\Middleware\Writer',
            'Illuminate\View\Middleware\ErrorBinder',
        ];
    }

    /**
     * Get package middlewares.
     *
     * @return array
     */
    protected function getPackageMiddlewares()
    {
        return [];
    }

    /**
     * Get application providers.
     *
     * @return array
     */
    protected function getApplicationProviders()
    {
        return [
            'Illuminate\Foundation\Providers\ArtisanServiceProvider',
            'Illuminate\Auth\AuthServiceProvider',
            'Illuminate\Cache\CacheServiceProvider',
            'Illuminate\Foundation\Providers\ConsoleSupportServiceProvider',
            'Illuminate\Cookie\CookieServiceProvider',
            'Illuminate\Database\DatabaseServiceProvider',
            'Illuminate\Encryption\EncryptionServiceProvider',
            'Illuminate\Filesystem\FilesystemServiceProvider',
            'Illuminate\Foundation\Providers\FormRequestServiceProvider',
            'Illuminate\Hashing\HashServiceProvider',
            'Illuminate\Log\LogServiceProvider',
            'Illuminate\Mail\MailServiceProvider',
            'Illuminate\Database\MigrationServiceProvider',
            'Illuminate\Pagination\PaginationServiceProvider',
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
     * @return array
     */
    protected function getPackageProviders()
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
     * @return \Symfony\Component\HttpKernel\HttpKernelInterface
     */
    public function createApplication()
    {
        $app = $this->resolveApplication();

        $app->detectEnvironment(function () {
            return 'testing';
        });

        $app->registerCoreContainerAliases();

        $app->instance('config', $config = new Repository(
            new FileLoader(new Filesystem, realpath($app->configPath())), $app->environment()
        ));

        date_default_timezone_set($this->getApplicationTimezone());

        $aliases = array_merge($this->getApplicationAliases(), $this->getPackageAliases());
        $config->set('app.aliases', $aliases);

        $app->make('Illuminate\Foundation\Bootstrap\RegisterFacades')->bootstrap($app);

        Request::enableHttpMethodParameterOverride();

        $providers = array_merge($this->getApplicationProviders(), $this->getPackageProviders());
        $app['config']['app.providers'] = $providers;

        $app->make('Illuminate\Foundation\Bootstrap\RegisterProviders')->bootstrap($app);

        $this->getEnvironmentSetUp($app);

        /*
        $middlewares = array_merge($this->getApplicationMiddlewares(), $this->getPackageMiddlewares());

        $app->stack(function (Stack $stack, Router $router) use ($middlewares) {
            return $stack
                ->middleware($middlewares)
                ->then(function ($request) use ($router) {
                    return $router->dispatch($request);
                });
        });
        */

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
}
