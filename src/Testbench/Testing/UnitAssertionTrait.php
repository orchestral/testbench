<?php namespace Orchestra\Testbench\Testing;

use Illuminate\Support\Fluent;
use Illuminate\View\View;
use Mockery as m;

trait UnitAssertionTrait
{
    public function testAssertResponseOkMethod()
    {
        $this->client = $client = m::mock('\Illuminate\Foundation\Testing\Client');

        $client->shouldReceive('getResponse')->once()->andReturnSelf()
            ->shouldReceive('getStatusCode')->once()->andReturn(200)
            ->shouldReceive('isOk')->once()->andReturn(true);

        $this->assertResponseOk();
    }

    public function testAssertResponseStatusMethod()
    {
        $this->client = $client = m::mock('\Illuminate\Foundation\Testing\Client');

        $client->shouldReceive('getResponse')->once()->andReturnSelf()
            ->shouldReceive('getStatusCode')->once()->andReturn(400);

        $this->assertResponseStatus(400);
    }

    public function testAssertViewHasMethod()
    {
        $this->client = $client = m::mock('\Illuminate\Foundation\Testing\Client');
        $view = new View(m::mock('\Illuminate\View\Factory'), m::mock('\Illuminate\View\Engines\EngineInterface'), 'hello', '/var/laravel/views', [
            'foo'   => 'bar',
            'hello' => 'world',
        ]);

        $response = new Fluent([
            'original' => $view,
        ]);

        $client->shouldReceive('getResponse')->once()->andReturn($response);

        $this->assertViewHas('foo');
        $this->assertViewHas('hello', 'world');
    }

    public function testAssertViewHasAllMethod()
    {
        $this->client = $client = m::mock('\Illuminate\Foundation\Testing\Client');
        $view = new View(m::mock('\Illuminate\View\Factory'), m::mock('\Illuminate\View\Engines\EngineInterface'), 'hello', '/var/laravel/views', [
            'foo' => 'bar',
            'bar' => 'foo',
        ]);
        $response = new Fluent([
            'original' => $view,
        ]);

        $client->shouldReceive('getResponse')->once()->andReturn($response);

        $this->assertViewHas(['foo', 'bar', 'foo' => 'bar']);
    }

    public function testAssertViewMissingMethod()
    {
        $this->client = $client = m::mock('\Illuminate\Foundation\Testing\Client');
        $view = new View(m::mock('\Illuminate\View\Factory'), m::mock('\Illuminate\View\Engines\EngineInterface'), 'hello', '/var/laravel/views', []);
        $response = new Fluent([
            'original' => $view,
        ]);

        $client->shouldReceive('getResponse')->once()->andReturn($response);

        $this->assertViewMissing('foo');
    }
}
