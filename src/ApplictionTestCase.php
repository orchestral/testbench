<?php namespace Orchestra\Testbench;

use Orchestra\Testbench\Contracts\TestCase as TestCaseContract;

class ApplicationTestCase extends TestCase implements TestCaseContract
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
