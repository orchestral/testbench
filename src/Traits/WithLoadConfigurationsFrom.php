<?php

namespace Orchestra\Testbench\Traits;

use SplFileInfo;
use Symfony\Component\Finder\Finder;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\Foundation\Application as ApplicationContract;

trait WithLoadConfigurationsFrom
{
    /**
     * Load config from one folder up.
     *
     * @param Application|ApplicationContract $app
     * @param string                          $path
     */
    protected function loadConfigurationFiles($app, $path)
    {
        foreach ($this->getConfigurationFiles($path) as $key => $path) {
            $config = require $path;

            if ($app['config']->has($key)) {
                $config = array_replace_recursive($app['config']->get($key), $config);
            }

            $app['config']->set($key, $config);
        }
    }

    /**
     * Get all of the configuration files for the application.
     *
     * @param string $path
     *
     * @return array
     */
    protected function getConfigurationFiles($path)
    {
        $files = [];

        $configPath = realpath($path);

        /** @var SplFileInfo $file */
        foreach (Finder::create()->files()->name('*.php')->in($configPath) as $file) {
            $files[basename($file->getRealPath(), '.php')] = $file->getRealPath();
        }

        return $files;
    }
}
