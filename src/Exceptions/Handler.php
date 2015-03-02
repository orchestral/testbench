<?php namespace Orchestra\Testbench\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Exception
     */
    public function render($request, Exception $e)
    {
        throw $e;
    }
}
