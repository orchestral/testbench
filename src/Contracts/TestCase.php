<?php

namespace Orchestra\Testbench\Contracts;

use Illuminate\Contracts\Auth\Authenticatable;

interface TestCase
{
    /**
     * Assert that the session has a given list of values.
     *
     * @param  array $bindings
     *
     * @return void
     */
    public function assertSessionHasAll(array $bindings);

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
     * Call a controller action and return the Response.
     *
     * @param  string $method
     * @param  string $action
     * @param  array $wildcards
     * @param  array $parameters
     * @param  array $files
     * @param  array $server
     * @param  string $content
     * @param  bool $changeHistory
     *
     * @return \Illuminate\Http\Response
     */
    public function action($method, $action, $wildcards = [], $parameters = [], $files = [], $server = [], $content = null, $changeHistory = true);

    /**
     * Assert that the session has old input.
     *
     * @return void
     */
    public function assertHasOldInput();

    /**
     * Assert that the response view has a given piece of bound data.
     *
     * @param  string|array $key
     * @param  mixed $value
     *
     * @return void
     */
    public function assertViewHas($key, $value = null);

    /**
     * Assert that the client response has a given code.
     *
     * @param  int $code
     *
     * @return void
     */
    public function assertResponseStatus($code);

    /**
     * Call a named route and return the Response.
     *
     * @param  string $method
     * @param  string $name
     * @param  array $routeParameters
     * @param  array $parameters
     * @param  array $files
     * @param  array $server
     * @param  string $content
     * @param  bool $changeHistory
     *
     * @return \Illuminate\Http\Response
     */
    public function route($method, $name, $routeParameters = [], $parameters = [], $files = [], $server = [], $content = null, $changeHistory = true);

    /**
     * Assert that the session has a given list of values.
     *
     * @param  string|array $key
     * @param  mixed $value
     *
     * @return void
     */
    public function assertSessionHas($key, $value = null);

    /**
     * Assert whether the client was redirected to a given URI.
     *
     * @param  string $uri
     * @param  array $with
     *
     * @return void
     */
    public function assertRedirectedTo($uri, $with = []);

    /**
     * Set the session to the given array.
     *
     * @param  array $data
     *
     * @return void
     */
    public function session(array $data);

    /**
     * Creates the application.
     *
     * Needs to be implemented by subclasses.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernelInterface
     */
    public function createApplication();

    /**
     * Assert that the client response has an OK status code.
     *
     * @return void
     */
    public function assertResponseOk();

    /**
     * Assert whether the client was redirected to a given action.
     *
     * @param  string $name
     * @param  array $parameters
     * @param  array $with
     *
     * @return void
     */
    public function assertRedirectedToAction($name, $parameters = [], $with = []);

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
     * Assert that the session has errors bound.
     *
     * @param  string|array $bindings
     * @param  mixed $format
     *
     * @return void
     */
    public function assertSessionHasErrors($bindings = [], $format = null);

    /**
     * Assert that the response view is missing a piece of bound data.
     *
     * @param  string $key
     *
     * @return void
     */
    public function assertViewMissing($key);

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

    /**
     * Call the given HTTPS URI and return the Response.
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
    public function callSecure($method, $uri, $parameters = [], $files = [], $server = [], $content = null, $changeHistory = true);

    /**
     * Assert whether the client was redirected to a given route.
     *
     * @param  string $name
     * @param  array $parameters
     * @param  array $with
     *
     * @return void
     */
    public function assertRedirectedToRoute($name, $parameters = [], $with = []);

    /**
     * Flush all of the current session data.
     *
     * @return void
     */
    public function flushSession();

    /**
     * Assert that the view has a given list of bound data.
     *
     * @param  array $bindings
     *
     * @return void
     */
    public function assertViewHasAll(array $bindings);
}
