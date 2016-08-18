<?php namespace Orchestra\Testbench\TestCase;

use Illuminate\Routing\Router;

class RouteTest extends \Orchestra\Testbench\TestCase
{
    /**
     * Define environment setup.
     *
     * @param  Illuminate\Foundation\Application    $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['router']->get('hello', ['as' => 'hi', 'uses' => function () {
            return 'hello world';
        }]);

        $app['router']->get('goodbye', function () {
            return 'goodbye world';
        })->name('bye');

        $app['router']->group(['prefix' => 'boss'], function (Router $router) {
            $router->get('hello', ['as' => 'boss.hi', 'uses' => function () {
                return 'hello boss';
            }]);

             $router->get('goodbye', function () {
                return 'goodbye boss';
            })->name('boss.bye');
        });

        $app['router']->resource('foo', 'Orchestra\Testbench\TestCase\FooController');
    }

    /**
     * Test GET routes.
     *
     * @test
     */
    public function testGetRoutes()
    {
        $crawler = $this->call('GET', 'hello');

        $this->assertEquals('hello world', $crawler->getContent());

        $crawler = $this->call('GET', 'goodbye');

        $this->assertEquals('goodbye world', $crawler->getContent());
    }

    /**
     * Test GET routes via named route.
     *
     * @test
     */
    public function testGetRoutesViaNamedRoute()
    {
        $crawler = $this->route('GET', 'hi');

        $this->assertEquals('hello world', $crawler->getContent());

        $crawler = $this->route('GET', 'bye');

        $this->assertEquals('goodbye world', $crawler->getContent());
    }

    /**
     * Test GET routes with prefix.
     *
     * @test
     */
    public function testGetPrefixedRoutes()
    {
        $crawler = $this->call('GET', 'boss/hello');

        $this->assertEquals('hello boss', $crawler->getContent());

        $crawler = $this->route('GET', 'boss.bye');

        $this->assertEquals('goodbye boss', $crawler->getContent());
    }

    /**
     * Test GET routes with prefix via named route.
     *
     * @test
     */
    public function testGetPrefixedRoutesViaNameRoute()
    {
        $crawler = $this->route('GET', 'boss.hi');

        $this->assertEquals('hello boss', $crawler->getContent());

        $crawler = $this->call('GET', 'boss/goodbye');

        $this->assertEquals('goodbye boss', $crawler->getContent());
    }

    /**
     * Test GET foo/index route using action.
     *
     * @test
     */
    public function testGetFooIndexRouteUsingAction()
    {
        $crawler = $this->action('GET', '\Orchestra\Testbench\TestCase\FooController@index');

        $this->assertResponseOk();
        $this->assertEquals('FooController@index', $crawler->getContent());
    }

    /**
     * Test GET foo/index route using call.
     *
     * @test
     */
    public function testGetFooIndexRouteUsingCall()
    {
        $crawler = $this->call('GET', 'foo');

        $this->assertResponseOk();
        $this->assertEquals('FooController@index', $crawler->getContent());
    }
}

class FooController extends \Illuminate\Routing\Controller
{
    public function index()
    {
        return 'FooController@index';
    }
}
