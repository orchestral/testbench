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
