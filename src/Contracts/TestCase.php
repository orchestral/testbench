<?php

namespace Orchestra\Testbench\Contracts;

use Illuminate\Contracts\Auth\Authenticatable;

interface TestCase
{
    /**
     * Call the given URI and return the Response.
     *
     * @param  string $method
     * @param  string $uri
     * @param  array $parameters
     * @param  array $files
     * @param  array $server
     * @param  string $content
     * @param  bool $changeHistory
     *
     * @return \Illuminate\Http\Response
     */
    public function call($method, $uri, $parameters = [], $files = [], $server = [], $content = null, $changeHistory = true);

    /**
     * Creates the application.
     *
     * Needs to be implemented by subclasses.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernelInterface
     */
    public function createApplication();

    /**
     * Set the currently logged in user for the application.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable $user
     * @param  string $driver
     *
     * @return void
     */
    public function be(Authenticatable $user, $driver = null);

    /**
     * Seed a given database connection.
     *
     * @param  string $class
     *
     * @return void
     */
    public function seed($class = 'DatabaseSeeder');

    /**
     * Call artisan command and return code.
     *
     * @param string  $command
     * @param array   $parameters
     *
     * @return int
     */
    public function artisan($command, $parameters = []);
}
