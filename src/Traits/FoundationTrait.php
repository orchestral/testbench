<?php namespace Orchestra\Testbench\Traits;

use Illuminate\Contracts\Auth\Authenticatable;

trait FoundationTrait
{
    /**
     * The last code returned by artisan cli.
     *
     * @var int
     */
    protected $code;

    /**
     * Set the session to the given array.
     *
     * @param  array  $data
     *
     * @return void
     */
    public function session(array $data)
    {
        $this->startSession();

        foreach ($data as $key => $value) {
            $this->app['session']->put($key, $value);
        }
    }

    /**
     * Flush all of the current session data.
     *
     * @return void
     */
    public function flushSession()
    {
        $this->startSession();

        $this->app['session']->flush();
    }

    /**
     * Start the session for the application.
     *
     * @return void
     */
    protected function startSession()
    {
        if (! $this->app['session']->isStarted()) {
            $this->app['session']->start();
        }
    }

    /**
     * Set the currently logged in user for the application.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  string  $driver
     *
     * @return void
     */
    public function be(Authenticatable $user, $driver = null)
    {
        $this->app['auth']->driver($driver)->setUser($user);
    }

    /**
     * Seed a given database connection.
     *
     * @param  string  $class
     *
     * @return void
     */
    public function seed($class = 'DatabaseSeeder')
    {
        $this->artisan('db:seed', ['--class' => $class]);
    }

    /**
     * Call artisan command and return code.
     *
     * @param string  $command
     * @param array   $parameters
     *
     * @return int
     */
    public function artisan($command, $parameters = [])
    {
        return $this->code = $this->app['Illuminate\Contracts\Console\Kernel']->call($command, $parameters);
    }
}
