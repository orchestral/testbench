<?php namespace Orchestra\Testbench;

class ApplicationTestCase extends TestCase
{
    /**
     * Resolve application HTTP exception handler.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return void
     */
    protected function resolveApplicationExceptionHandler($app)
    {
        $app->singleton('Illuminate\Contracts\Debug\ExceptionHandler', 'Orchestra\Testbench\Exceptions\ApplicationHandler');
    }
}
