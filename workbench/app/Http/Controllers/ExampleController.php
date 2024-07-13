<?php

namespace Workbench\App\Http\Controllers;

use Closure;
use Illuminate\Routing\Controller;
use PHPUnit\Framework\Assert;

class ExampleController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, Closure $next) {
            $route = app('router')->getCurrentRoute();

            Assert::assertSame('index', $route->getActionMethod());
            Assert::assertSame(ExampleController::class, \get_class($route->getController()));

            return $next($request);
        });
    }

    public function index()
    {
        return 'ExampleController@index';
    }
}
