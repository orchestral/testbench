<?php

namespace Orchestra\Testbench\Traits;

use Illuminate\Database\Eloquent\Factory as ModelFactory;

trait WithFactories
{
    /**
     * Load model factories from path.
     *
     * @param  string  $path
     *
     * @return $this
     */
    protected function withFactories($path)
    {
        $this->app->make(ModelFactory::class)->load($path);

        return $this;
    }
}
