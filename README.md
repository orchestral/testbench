Laravel Package Unit Testing Helper
==============

Testbench Component is a simple package that is supposed to help you write tests for your Laravel package, especially when there is routing involved.

[![Latest Stable Version](https://img.shields.io/github/release/orchestral/testbench.svg?style=flat)](https://packagist.org/packages/orchestra/testbench)
[![Total Downloads](https://img.shields.io/packagist/dt/orchestra/testbench.svg?style=flat)](https://packagist.org/packages/orchestra/testbench)
[![MIT License](https://img.shields.io/packagist/l/orchestra/testbench.svg?style=flat)](https://packagist.org/packages/orchestra/testbench)
[![Build Status](https://img.shields.io/travis/orchestral/testbench/2.1.svg?style=flat)](https://travis-ci.org/orchestral/testbench)
[![Coverage Status](https://img.shields.io/coveralls/orchestral/testbench/2.1.svg?style=flat)](https://coveralls.io/r/orchestral/testbench?branch=2.1)
[![Scrutinizer Quality Score](https://img.shields.io/scrutinizer/g/orchestral/testbench/2.1.svg?style=flat)](https://scrutinizer-ci.com/g/orchestral/testbench/)
[![Reference Status](https://www.versioneye.com/php/orchestra:testbench/reference_badge.svg?style=flat)](https://www.versioneye.com/php/orchestra:testbench/references)

* [Installation](#installation)
* [Usage](#usage)
* [Testing Route Filters](#testing-route-filters)
* [Example](#example)
* [Working with Workbench](#working-with-workbench)

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
	"require-dev": {
		"orchestra/testbench": "2.1.*"
	}
}
```

### Versions

 Laravel  | Testbench
:---------|:----------
 4.0.*    | 2.0.*
 4.1.*    | 2.1.*

## Usage

To use Testbench Component, all you need to do is extend `Orchestra\Testbench\TestCase` instead of `PHPUnit_Framework_TestCase`. The fixture `app` booted by `Orchestra\Testbench\TestCase` is predefined to follow the base application skeleton of Laravel 4.

```php
<?php

class TestCase extends Orchestra\Testbench\TestCase {}

```

### Custom Service Provider

To load your package service provider, override the `getPackageProviders`.

```php
protected function getPackageProviders()
{
	return array('Acme\AcmeServiceProvider');
}
```

### Custom Aliases

To load your package alias, override the `getPackageAliases`.

```php
protected function getPackageAliases()
{
	return array(
		'Acme' => 'Acme\Facade'
	);
}
```

### Overriding setUp() method

Since `Orchestral\Testbench\TestCase` replace Laravel's `TestCase`, if you need your own `setUp()` implementation, do not forget to call `parent::setUp()`:

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
	//
}
```

## Testing Route Filters

By default, route filters are disabled by Laravel because, ideally, you should test the filter separately. In order to overwrite this default, add the following code:

```php
$this->app['router']->enableFilters();
```

## Example

To see a working example of testbench including how to set your configuration, check the file:

* [Testing with Database](tests/DatabaseFixtureTest.php).

## Working with Workbench

### Cannot redeclare crypt_random_string()

> To avoid this, please use `"phpseclib/phpseclib": ">=0.3.7"` which already solve the issue, otherwise read the alternative solution below.

Due to the requirement with Laravel Framework 4.1, we need to maintain a modified version of `phpseclib/phpseclib` for developing Laravel/PHP packages using workbench. In order to make this work please include the following code in both your `composer.json` file for `app` and `workbench`:

```json
{
	"repositories": [
		{
			"type": "vcs",
			"url": "git://github.com/orchestral/phpseclib.git"
		}
	],
}
```

### Class 'Illuminate\Foundation\Testing\TestCase' not found

	Fatal error: Class 'Illuminate\Foundation\Testing\TestCase' not found in /laravel/workbench/foo/bar/vendor/orchestra/testbench/src/Orchestra/Testbench/TestCase.php

Due to the requirement to include `laravel/framework` when you install `orchestra/testbench`, please remove any **Illuminate** dependencies to avoid a failed installation.
