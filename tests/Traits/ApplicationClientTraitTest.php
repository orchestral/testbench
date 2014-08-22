<?php namespace Orchestra\Testbench\TestCase\Traits;

use Illuminate\Container\Container;
use Mockery as m;
use Orchestra\Testbench\Traits\ApplicationClientTrait;

class ApplicationClientTraitTest extends \PHPUnit_Framework_TestCase
{
    use ApplicationClientTrait;

    /**
     * Teardown the test environment.
     */
    public function tearDown()
    {
        unset($this->app);
        unset($this->client);

        m::close();
    }

    /**
     * Test Orchestra\Testbench\Traits\ApplicationClientTrait::call()
     * method.
     *
     * @test
     */
    public function testCallMethod()
    {
        $this->client = $client = m::mock('\Illuminate\Foundation\Testing\Client');

        $client->shouldReceive('request')->once()->with('GET', 'foo')->andReturnSelf()
            ->shouldReceive('getResponse')->once()->andReturn('foobar');

        $this->assertEquals('foobar', $this->call('GET', 'foo'));
    }

    /**
     * Test Orchestra\Testbench\Traits\ApplicationClientTrait::callSecure()
     * method.
     *
     * @test
     */
    public function testCallSecureMethod()
    {
        $this->client = $client = m::mock('\Illuminate\Foundation\Testing\Client');

        $client->shouldReceive('request')->once()->with('GET', 'https://localhost/foo')->andReturnSelf()
            ->shouldReceive('getResponse')->once()->andReturn('foobar');

        $this->assertEquals('foobar', $this->callSecure('GET', 'foo'));
    }

    /**
     * Test Orchestra\Testbench\Traits\ApplicationClientTrait::action()
     * method.
     *
     * @test
     */
    public function testActionMethod()
    {
        $this->app = new Container;

        $this->app['url'] = $url = m::mock('\Illuminate\Routing\UrlGenerator[route]', [
            m::mock('\Illuminate\Routing\RouteCollection'),
            m::mock('\Illuminate\Http\Request'),
        ]);

        $this->client = $client = m::mock('\Illuminate\Foundation\Testing\Client');

        $url->shouldReceive('route')->once()->with('foo.show', [])->andReturn('http://localhost/foo');

        $client->shouldReceive('request')->once()->with('GET', 'http://localhost/foo', [], [], [], null, true)->andReturnSelf()
            ->shouldReceive('getResponse')->once()->andReturn('foobar');

        $this->assertEquals('foobar', $this->route('GET', 'foo.show'));
    }

    /**
     * Test Orchestra\Testbench\Traits\ApplicationClientTrait::be()
     * method.
     *
     * @test
     */
    public function testBeMethod()
    {
        $this->app = new Container;

        $this->app['auth'] = $auth = m::mock('\Illuminate\Auth\AuthManager[driver]', [$this->app]);

        $user = m::mock('\Illuminate\Contracts\Auth\User');
        $driver = 'eloquent';

        $auth->shouldReceive('driver')->once()->with($driver)->andReturnSelf()
            ->shouldReceive('setUser')->once()->with($user)->andReturnNull();

        $this->assertNull($this->be($user, $driver));
    }

    /**
     * Test Orchestra\Testbench\Traits\ApplicationClientTrait::seed()
     * method.
     *
     * @test
     */
    public function testSeedMethod()
    {
        $this->app = new Container;

        $this->app['artisan'] = $artisan = m::mock('\Illuminate\Console\Application');

        $class = 'UserSeeder';

        $artisan->shouldReceive('call')->once()->with('db:seed', ['--class' => $class])->andReturnNull();

        $this->assertNull($this->seed($class));
    }

    /**
     * Test Orchestra\Testbench\Traits\ApplicationClientTrait::startSession()
     * method.
     *
     * @test
     */
    public function testStartSessionMethod()
    {
        $this->app = new Container;

        $this->app['session'] = $session = m::mock('\Illuminate\Session\Store');

        $session->shouldReceive('isStarted')->once()->andReturn(false)
            ->shouldReceive('start')->once()->andReturnNull();

        $this->assertNull($this->startSession());
    }

    /**
     * Test Orchestra\Testbench\Traits\ApplicationClientTrait::flushSession()
     * method.
     *
     * @test
     */
    public function testFlushSessionMethod()
    {
        $this->app = new Container;

        $this->app['session'] = $session = m::mock('\Illuminate\Session\Store');

        $session->shouldReceive('isStarted')->once()->andReturn(true)
            ->shouldReceive('flush')->once()->andReturnNull();

        $this->assertNull($this->flushSession());
    }

    /**
     * Test Orchestra\Testbench\Traits\ApplicationClientTrait::session()
     * method.
     *
     * @test
     */
    public function testSessionMethod()
    {
        $this->app = new Container;

        $this->app['session'] = $session = m::mock('\Illuminate\Session\Store');

        $data = [
            ['foo' => 'bar'],
            ['hello' => 'world'],
        ];

        $session->shouldReceive('isStarted')->once()->andReturn(true);

        foreach ($data as $key => $value) {
            $session->shouldReceive('put')->once()->with($key, $value)->andReturnNull();
        }

        $this->assertNull($this->session($data));
    }
}
