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
     * @var array
     */
    protected $middleware = [
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
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
