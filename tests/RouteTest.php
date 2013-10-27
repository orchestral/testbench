<?php namespace Orchestra\Testbench\TestCase;

class RouteTest extends \Orchestra\Testbench\TestCase
{
     /**
     * Setup the test environment.
     */
    public function setUp()
    {
        parent::setUp();

        $this->app['router']->disableFilters();
    }

    /**
     * Define environment setup.
     *
     * @param  Illuminate\Foundation\Application    $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['router']->get('hello', function () {
            return 'hello world';
        });

        $app['router']->controller('foo', 'Orchestra\Testbench\TestCase\FooController');
    }

    /**
     * Test GET hello route.
     *
     * @test
     */
    public function testGetHelloRoute()
    {
        $crawler = $this->call('GET', 'hello');

        $this->assertResponseOk();
        $this->assertEquals('hello world', $crawler->getContent());
    }

    /**
     * Test GET foo/index route using action.
     *
     * @test
     */
    public function testGetFooIndexRouteUsingAction()
    {
        $crawler = $this->action('GET', 'Orchestra\Testbench\TestCase\FooController@getIndex');

        $this->assertResponseOk();
        $this->assertEquals('FooController@getIndex', $crawler->getContent());
    }

    /**
     * Test GET foo/index route using call.
     *
     * @test
     */
    public function testGetFooIndexRouteUsingCall()
    {
        $crawler = $this->call('GET', 'foo/index');

        $this->assertResponseOk();
        $this->assertEquals('FooController@getIndex', $crawler->getContent());
    }
}

class FooController extends \Illuminate\Routing\Controllers\Controller
{
    public function getIndex()
    {
        return 'FooController@getIndex';
    }
}
