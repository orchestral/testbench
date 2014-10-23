<?php namespace Orchestra\Testbench\Traits;

use Illuminate\Http\Request;

trait CrawlerTrait
{
    /**
     * The HttpKernel response instance.
     *
     * @var \Illuminate\Http\Response
     */
    protected $crawler;

    /**
     * Call the given URI and return the Response.
     *
     * @param  string  $method
     * @param  string  $uri
     * @param  array   $parameters
     * @param  array   $cookies
     * @param  array   $files
     * @param  array   $server
     * @param  string  $content
     * @return \Illuminate\Http\Response
     */
    public function call($method, $uri, $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
    {
        $request = Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);

        return $this->crawler = $this->app->make('Illuminate\Contracts\Http\Kernel')->handle($request);
    }
}
