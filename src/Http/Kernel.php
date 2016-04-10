<?php namespace Orchestra\Testbench\Http;

use Exception;

class Kernel extends \Illuminate\Foundation\Http\Kernel
{
    /**
     * The bootstrap classes for the application.
     *
     * @return void
     */
    protected $bootstrappers = [];

    /**
     * The application's middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        ],

        'api' => [
            'throttle:60,1',
        ],
    ];

     /**
      * The application's route middleware.
      *
      * These middleware may be assigned to groups or used individually.
      *
      * @var array
      */
     protected $routeMiddleware = [
        'auth'       => Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'can'        => \Illuminate\Foundation\Http\Middleware\Authorize::class,
        'guest'      => Middleware\RedirectIfAuthenticated::class,
        'throttle'   => \Illuminate\Routing\Middleware\ThrottleRequests::class,
     ];

    /**
     * Report the exception to the exception handler.
     *
     * @param  \Exception  $e
     *
     * @return void
     *
     * @throws \Exception
     */
    protected function reportException(Exception $e)
    {
        throw $e;
    }
}
