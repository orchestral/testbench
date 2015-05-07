<?php namespace Orchestra\Testbench\Testing\Support;

use Illuminate\Support\Fluent;
use Illuminate\View\View;
use Mockery as m;

trait UnitAssertionTrait
{
    public function testAssertResponseOkMethod()
    {
        $this->response = $response = m::mock('\Illuminate\Http\Response');

        $response->shouldReceive('status')->once()->andReturn(200)
            ->shouldReceive('isOk')->once()->andReturn(true);

        $this->assertResponseOk();
    }

    public function testAssertResponseStatusMethod()
    {
        $this->response = $response = m::mock('\Illuminate\Http\Response');

        $response->shouldReceive('status')->once()->andReturn(400);

        $this->assertResponseStatus(400);
    }

    public function testAssertViewHasMethod()
    {
        $view = new View(m::mock('\Illuminate\View\Factory'), m::mock('\Illuminate\View\Engines\EngineInterface'), 'hello', '/var/laravel/views', [
            'foo'   => 'bar',
            'hello' => 'world',
        ]);

        $this->response = new Fluent([
            'original' => $view,
        ]);

        $this->assertViewHas('foo');
        $this->assertViewHas('hello', 'world');
    }

    public function testAssertViewHasAllMethod()
    {
        $view = new View(m::mock('\Illuminate\View\Factory'), m::mock('\Illuminate\View\Engines\EngineInterface'), 'hello', '/var/laravel/views', [
            'foo' => 'bar',
            'bar' => 'foo',
        ]);

        $this->response = new Fluent([
            'original' => $view,
        ]);

        $this->assertViewHas(['foo', 'bar', 'foo' => 'bar']);
    }

    public function testAssertViewMissingMethod()
    {
        $view = new View(m::mock('\Illuminate\View\Factory'), m::mock('\Illuminate\View\Engines\EngineInterface'), 'hello', '/var/laravel/views', []);

        $this->response = new Fluent([
            'original' => $view,
        ]);

        $this->assertViewMissing('foo');
    }
}
