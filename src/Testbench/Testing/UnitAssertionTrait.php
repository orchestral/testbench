<?php namespace Orchestra\Testbench\Testing;

use Illuminate\Support\Fluent;
use Illuminate\View\View;
use Mockery as m;

trait UnitAssertionTrait
{
    public function testAssertResponseOkMethod()
    {
        $this->crawler = $crawler = m::mock('\Illuminate\Http\Response');

        $crawler->shouldReceive('getStatusCode')->once()->andReturn(200)
            ->shouldReceive('isOk')->once()->andReturn(true);

        $this->assertResponseOk();
    }

    public function testAssertResponseStatusMethod()
    {
        $this->crawler = $crawler = m::mock('\Illuminate\Http\Response');

        $crawler->shouldReceive('getStatusCode')->once()->andReturn(400);

        $this->assertResponseStatus(400);
    }

    public function testAssertViewHasMethod()
    {
        $view = new View(m::mock('\Illuminate\View\Factory'), m::mock('\Illuminate\View\Engines\EngineInterface'), 'hello', '/var/laravel/views', [
            'foo'   => 'bar',
            'hello' => 'world',
        ]);

        $this->crawler = new Fluent([
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

        $this->crawler = new Fluent([
            'original' => $view,
        ]);

        $this->assertViewHas(['foo', 'bar', 'foo' => 'bar']);
    }

    public function testAssertViewMissingMethod()
    {
        $view = new View(m::mock('\Illuminate\View\Factory'), m::mock('\Illuminate\View\Engines\EngineInterface'), 'hello', '/var/laravel/views', []);

        $this->crawler = new Fluent([
            'original' => $view,
        ]);

        $this->assertViewMissing('foo');
    }
}
