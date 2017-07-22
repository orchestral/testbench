Laravel Testing Helper for Packages Development
==============

[![Join the chat at https://gitter.im/orchestral/testbench](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/orchestral/testbench?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Testbench Component is a simple package that has been designed to help you write tests for your Laravel package, especially when there is routing involved.

[![Build Status](https://img.shields.io/travis/orchestral/testbench/3.4.svg)](https://travis-ci.org/orchestral/testbench)
[![Latest Stable Version](https://poser.pugx.org/orchestra/testbench/v/stable)](https://packagist.org/packages/orchestra/testbench)
[![Total Downloads](https://poser.pugx.org/orchestra/testbench/downloads)](https://packagist.org/packages/orchestra/testbench)
[![License](https://poser.pugx.org/orchestra/testbench/license)](https://packagist.org/packages/orchestra/testbench)

* [Version Compatibility](#version-compatibility)
* [Installation](#installation)
* [Usage](#usage)
* [Example](#example)
* [Alternative Testing](#alternative-testing)
* [Troubleshoot](#troubleshoot)

## Version Compatibility

 Laravel  | Testbench
:---------|:----------
 4.0.x    | 2.0.x
 4.1.x    | 2.1.x
 4.2.x    | 2.2.x
 5.0.x    | 3.0.x
 5.1.x    | 3.1.x
 5.2.x    | 3.2.x
 5.3.x    | 3.3.x
 5.4.x    | 3.4.x

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
    "require-dev": {
        "orchestra/testbench": "~3.0"
    }
}
```

And then run `composer install` from the terminal.

### Quick Installation

Above installation can also be simplify by using the following command:

    composer require --dev "orchestra/testbench=~3.0"

## Usage

To use Testbench Component, all you need to do is extend `Orchestra\Testbench\TestCase` instead of `PHPUnit\Framework\TestCase`. The fixture `app` booted by `Orchestra\Testbench\TestCase` is predefined to follow the base application skeleton of Laravel 5.

```php
<?php

class TestCase extends Orchestra\Testbench\TestCase
{
    //
}
```

### Custom Service Provider

To load your package service provider, override the `getPackageProviders`.

```php
protected function getPackageProviders($app)
{
    return ['Acme\AcmeServiceProvider'];
}
```

### Custom Aliases

To load your package alias, override the `getPackageAliases`.

```php
protected function getPackageAliases($app)
{
    return [
        'Acme' => 'Acme\Facade'
    ];
}
```

### Overriding setUp() method

Since `Orchestra\Testbench\TestCase` replace Laravel's `Illuminate\Foundation\Testing\TestCase`, if you need your own `setUp()` implementation, do not forget to call `parent::setUp()`:

```php
/**
 * Setup the test environment.
 */
public function setUp()
{
    parent::setUp();

    // Your code here
}
```

If you need to add something early in the application bootstrapping process, you could use the `getEnvironmentSetUp()` method:

```php
/**
 * Define environment setup.
 *
 * @param  \Illuminate\Foundation\Application  $app
 * @return void
 */
protected function getEnvironmentSetUp($app)
{
    // Setup default database to use sqlite :memory:
    $app['config']->set('database.default', 'testbench');
    $app['config']->set('database.connections.testbench', [
        'driver'   => 'sqlite',
        'database' => ':memory:',
        'prefix'   => '',
    ]);
}
```

### Overriding Console Kernel

You can easily swap Console Kernel for application bootstrap by overriding `resolveApplicationConsoleKernel()` method:

```php
/**
 * Resolve application Console Kernel implementation.
 *
 * @param  \Illuminate\Foundation\Application  $app
 * @return void
 */
protected function resolveApplicationConsoleKernel($app)
{
    $app->singleton('Illuminate\Contracts\Console\Kernel', 'Acme\Testbench\Console\Kernel');
}
```

### Overriding HTTP Kernel

You can easily swap HTTP Kernel for application bootstrap by overriding `resolveApplicationHttpKernel()` method:

```php
/**
 * Resolve application HTTP Kernel implementation.
 *
 * @param  \Illuminate\Foundation\Application  $app
 * @return void
 */
protected function resolveApplicationHttpKernel($app)
{
    $app->singleton('Illuminate\Contracts\Http\Kernel', 'Acme\Testbench\Http\Kernel');
}
```

### Overriding Application Timezone

You can also easily override application default timezone, instead of the default `"UTC"`:

```php
/**
 * Get application timezone.
 *
 * @param  \Illuminate\Foundation\Application  $app
 * @return string|null
 */
protected function getApplicationTimezone($app)
{
    return 'Asia/Kuala_Lumpur';
}
```

### Using Migrations

Package developer should be using `ServiceProvider::loadMigrationsFrom()` feature to automatically handle migrations for packages.

```php
$this->artisan('migrate', ['--database' => 'testbench']);
```

#### Realpath Migration

In order to use a custom migrations command that support `realpath` option instead of the basic relative `path` option you need to first install the following package and include `Orchestra\Database\ConsoleServiceProvider` to your [Custom Service Provider](#custom-service-provider):
    
    composer require --dev "orchestra/database=~3.1"

This would make it easier for you to run database migrations during testing by just including the full realpath to your package database/migration folder.

```php
$this->loadMigrationsFrom(realpath(__DIR__.'/../migrations'));
```

You can also set specific database connection to be used by adding `--database` options:

```php
$this->loadMigrationsFrom([
    '--database' => 'testbench',
    '--realpath' => realpath(__DIR__.'/../migrations'),
]);
```

> Warning: `--realpath` support has been deprecated in favour of `ServiceProvider::loadMigrationsFrom()`. 

#### Using Laravel Migrations

By default Testbench doesn't execute the default Laravel migrations which include `users` and `password_resets` table. In order to run the migration just add the following command:

```php
$this->loadLaravelMigrations();
```

You can also set specific database connection to be used by adding `--database` options:

```php
$this->loadLaravelMigrations(['--database' => 'testbench']);
```
 
### Using Model Factories

Testbench include `withFactories()` method to allow you to register custom model factory path for your test suite.

```php
$this->withFactories(__DIR__.'/factories');
```

## Example

To see a working example of testbench including how to set your configuration, check the file:

* [Testing with Database](tests/Databases).

## Alternative Testing

There also 3rd party packages that extends Testbench Component on CodeCeption and PHPSpec:

* [Testbench with CodeCeption](https://github.com/aedart/testing-laravel)
* [Testbench with PHPSpec](https://github.com/Pixelindustries/phpspec-testbench)

## Troubleshoot

### No supported encrypter found. The cipher and / or key length are invalid.

    RuntimeException: No supported encrypter found. The cipher and / or key length are invalid.

This error would only occur if your test suite require actual usage of the encrypter. To solve this you can add a dummy `APP_KEY` or use a specific key to your application/package `phpunit.xml`.

```xml
<phpunit>

    // ...

    <php>
        <env name="APP_KEY" value="AckfSECXIvnK5r28GVIWUAxmbBSjTsmF"/>
    </php>

</phpunit>
```

### Why Testbench doesn't include any of the `App` classes.

The reason Testbench remove all the case is to make sure that you would never depends on it when developing Laravel Packages. Classes such as `App\Http\Controllers\Controller` and `App\User` may seem simple to be added but the problems with these classes is that it can be either:

* Removed, moved to other location such as `App\Models\User`, or
* Renamed using `php artisan app:name Acme` which would rename `App\User` to `Acme\User`.

### Missing Browser Kit support after testing on Laravel 5.4

Replace `orchestra/testbench` with `orchestra/testbench-browser-kit` and follow [the installation guide](https://github.com/orchestral/testbench-browser-kit#installation).
