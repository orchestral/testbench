<?php

namespace Orchestra\Testbench\Tests;

use Illuminate\Routing\Router;
use Orchestra\Testbench\TestCase;

class RouteTest extends TestCase
{
    /**
     * Define environment setup.
     *
     * @param  Illuminate\Foundation\Application  $app
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

        $app['router']->resource('foo', 'Orchestra\Testbench\Tests\Stubs\Controller');
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
     * Test GET routes with prefix.
     *
     * @test
     */
    public function testGetPrefixedRoutes()
    {
        $crawler = $this->call('GET', 'boss/hello');

        $this->assertEquals('hello boss', $crawler->getContent());

        $crawler = $this->call('GET', 'boss/goodbye');

        $this->assertEquals('goodbye boss', $crawler->getContent());
    }

    /**
     * Test GET foo/index route using call.
     *
     * @test
     */
    public function testGetFooIndexRouteUsingCall()
    {
        $response = $this->call('GET', 'foo');

        $response->assertStatus(200);
        $this->assertEquals('Controller@index', $response->getContent());
    }
}
