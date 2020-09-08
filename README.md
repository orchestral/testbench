Laravel Testing Helper for Packages Development
==============

Testbench Component is a simple package that has been designed to help you write tests for your Laravel package, especially when there is routing involved.

[![Build Status](https://travis-ci.org/orchestral/testbench.svg?branch=6.x)](https://travis-ci.org/orchestral/testbench)
[![Latest Stable Version](https://poser.pugx.org/orchestra/testbench/v/stable)](https://packagist.org/packages/orchestra/testbench)
[![Total Downloads](https://poser.pugx.org/orchestra/testbench/downloads)](https://packagist.org/packages/orchestra/testbench)
[![License](https://poser.pugx.org/orchestra/testbench/license)](https://packagist.org/packages/orchestra/testbench)

* [Version Compatibility](#version-compatibility)
* [Getting Started](#getting-started)
* [Installation](#installation)
* [Usage](#usage)
* [Example](#example)
* [Alternative Testing](#alternative-testing)
* [Troubleshoot](#troubleshoot)
* [Changelog](https://github.com/orchestral/testbench/releases)

## Version Compatibility

 Laravel  | Testbench
:---------|:----------
 5.0.x    | 3.0.x
 5.1.x    | 3.1.x
 5.2.x    | 3.2.x
 5.3.x    | 3.3.x
 5.4.x    | 3.4.x
 5.5.x    | 3.5.x
 5.6.x    | 3.6.x
 5.7.x    | 3.7.x
 5.8.x    | 3.8.x
 6.x      | 4.x
 7.x      | 5.x
 8.x      | 6.x

## Getting Started

Before going through the rest of this documentation, please take some time to read the [Package Development](https://laravel.com/docs/6.x/packages) section of Laravel's own documentation, if you haven't done so yet.

## Installation

To install through composer, run the following command from terminal:

    composer require --dev "orchestra/testbench"

## Usage

To use Testbench Component, all you need to do is extend `Orchestra\Testbench\TestCase` instead of `PHPUnit\Framework\TestCase`. The fixture `app` booted by `Orchestra\Testbench\TestCase` is predefined to follow the base application skeleton of Laravel 6.

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

Since `Orchestra\Testbench\TestCase` replace Laravel's `Illuminate\Foundation\Testing\TestCase`, if you need your own `setUp()` implementation, do not forget to call `parent::setUp()` and make sure proper declaration compatibility:

```php
/**
 * Setup the test environment.
 */
protected function setUp(): void
{
    parent::setUp();

    // Your code here
}
```

#### Setup Environment

If you need to add something early in the application bootstrapping process (which executed between registering service providers and booting service providers) you could use the `getEnvironmentSetUp()` method:

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

### Setup Environment using Annotation

New in Testbench Core 4.4 is the ability to use `@environment-setup` annotation to customise use of `getEnvironmentSetUp` specific for each test.

```php
protected function useMySqlConnection($app) 
{
    $app->config->set('database.default', 'mysql');
}

protected function useSqliteConnection($app)
{
    $app->config->set('database.default', 'sqlite');
}

/**
 * @environment-setup useMySqlConnection
 */
public function testItCanBeConnectedWithMySql()
{
    // write your tests
}

/**
 * @environment-setup useSqliteConnection
 */
public function testItCanBeConnectedWithSqlite()
{
    // write your tests
}
```

#### Memory SQLite Connection

To reduce setup configuration, you could use `testing` database connection (`:memory:` with `sqlite` driver) via setting it up under `getEnvironmentSetUp()` or by defining it under PHPUnit Configuration File:

```xml
<phpunit>

    // ...

    <php>
        <env name="DB_CONNECTION" value="testing"/>
    </php>

</phpunit>
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
$this->artisan('migrate', ['--database' => 'testbench'])->run();
```

#### Using Laravel Migrations

By default Testbench doesn't execute the default Laravel migrations which include `users` and `password_resets` table. In order to run the migration just add the following command:

```php
$this->loadLaravelMigrations();
```

You can also set specific database connection to be used by adding `--database` options:

```php
$this->loadLaravelMigrations(['--database' => 'testbench']);
```

#### Running Testing Migrations

To run migrations that are **only used for testing purposes** and not part of your package, add the following to your base test class:

```php
/**
 * Setup the test environment.
 */
protected function setUp(): void
{
    parent::setUp();

    $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    
    // and other test setup steps you need to perform
}
```

##### Notes and Considerations

* Your migration files has to suite Laravel's convention, e.g. `0000_00_00_000000_create_package_test_tables.php`.
* You may choose to put your migrations folder in `tests/database/`.
* You may choose to change your test-migrations class name to be different from the published class names, e.g. from `CreateUsersTable` to `CreateUsersTestTable` or otherwise you may encounter composer class loader collision.
 
### Using Legacy Model Factories

> Laravel 8 shipped with class based Factories which you can autoload using Composer. This is only needed when you want to retain the legacy model factories.

Testbench include `withFactories()` method to allow you to register custom model factory path for your test suite.

```php
$this->withFactories(__DIR__.'/factories');
```

You also need to require the following:

    composer require --dev "laravel/legacy-factories:^1.0.4"

## Example

To see a working example of testbench including how to set your configuration, check the file:

* [Testing with Database](https://github.com/orchestral/testbench-core/tree/4.x/tests/Databases).

## Alternative Testing

There also 3rd party packages that extends Testbench:

* [Testbench with Laravel Dusk](https://github.com/orchestral/testbench-dusk)
* [Testbench with BrowserKit](https://github.com/orchestral/testbench-browser-kit)
* [Testbench with CodeCeption](https://github.com/aedart/testing-laravel)
* [Testbench with PHPSpec](https://github.com/Pixelindustries/phpspec-testbench)

## Troubleshoot

### No supported encrypter found. The cipher and / or key length are invalid.

    RuntimeException: No supported encrypter found. The cipher and / or key length are invalid.

This error would only occur if your test suite require usages of the encrypter. To solve this you can add a dummy `APP_KEY` or use a specific key to your application/package `phpunit.xml`.

```xml
<phpunit>

    // ...

    <php>
        <env name="APP_KEY" value="AckfSECXIvnK5r28GVIWUAxmbBSjTsmF"/>
    </php>

</phpunit>
```

### Why Testbench doesn't include any of the `App` classes.

The reason Testbench remove all the classes is to make sure that you would never depends on it when developing Laravel Packages. Classes such as `App\Http\Controllers\Controller` and `App\User` are simple to be added but the problems with these classes is that it can be either:

* Removed, moved to other location such as `App\Models\User`, or
* Renamed using `php artisan app:name Acme` which would rename `App\User` to `Acme\User`.

### Class 'GuzzleHttp\Client' not found

If you plan to use the new **HTTP Client** in Laravel 7, you need to include `guzzlehttp/guzzle` to your package's `composer.json`:

    composer require "guzzlehttp/guzzle:^6.3.1"

> We can't guarantee that any requirements in `laravel/laravel` will always be maintained as it is. Developer may remove any of the optional requirements such as `guzzlehttp/guzzle`, `fideloper/proxy`, `fruitcake/laravel-cors` or `laravel/tinker`.

<a name="using-legacy-factories"></a>
### Class 'Illuminate\Database\Eloquent\Factory' not found

Starting from Laravel 8, `Illuminate\Database\Eloquent\Factory` has been pushed to `laravel/legacy-factories` package in favor of class based Factories.

As package developers, you have the options to either split the package version for Laravel 8 from previous Laravel version and use the new class based Factories or require `laravie/legacy-factories` to make release while supporting lower versions as well. In both cases the packages will needs to require PHP 7.3 and above.

> **Note:** The minimum PHP requirements is due to `laravel/legacy-factories` depending on `illuminate/macroable`.

In order to use legacy factories on packages development supporting Laravel 8 and below without splitting the release you can opt to use the following:

    composer require --dev "laravel/legacy-factories:^1.0.4"

Next you need to ensure `orchestra/testbench` uses the minimum version supporting `laravel/legacy-factories` to avoid issues on CI environment (if you're running tests on each version of Laravel or using `--prefer-lowest`).

| Laravel | Minimum Versions 
|:--------|:---------------
| 5.5     | `3.5.6`
| 5.6     | `3.6.7`
| 5.7     | `3.7.8`
| 5.8     | `3.8.6`
| 6.x     | `4.8.0`
| 7.x     | `5.2.0`

E.g: If you need to support minimum Laravel 6 here how the requirement should look like in `composer.json`:

```json
{
    "require-dev": {
        "orchestra/testbench": "~3.6.7 || ~3.7.8 || ~3.8.6 || ^4.8 || ^5.2 || ^6.0"
    }
}
```

#### Converted to new class based factories but still facing this error

You need to check all your TestCase and ensure that there is no call to `$this->withFactories()`, autoloading class based factories is handled by Composer and `withFactories()` is only needed for legacy based factories.


### Missing Browser Kit support after testing on Laravel 5.4

Replace `orchestra/testbench` with `orchestra/testbench-browser-kit` and follow [the installation guide](https://github.com/orchestral/testbench-browser-kit#installation).
