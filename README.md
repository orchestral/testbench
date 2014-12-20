Laravel Package Unit Testing Helper
==============

Testbench Component is a simple package that is supposed to help you write tests for your Laravel package, especially when there is routing involved.

[![Latest Stable Version](https://img.shields.io/github/release/orchestral/testbench.svg?style=flat)](https://packagist.org/packages/orchestra/testbench)
[![Total Downloads](https://img.shields.io/packagist/dt/orchestra/testbench.svg?style=flat)](https://packagist.org/packages/orchestra/testbench)
[![MIT License](https://img.shields.io/packagist/l/orchestra/testbench.svg?style=flat)](https://packagist.org/packages/orchestra/testbench)
[![Build Status](https://img.shields.io/travis/orchestral/testbench/master.svg?style=flat)](https://travis-ci.org/orchestral/testbench)
[![Coverage Status](https://img.shields.io/coveralls/orchestral/testbench/master.svg?style=flat)](https://coveralls.io/r/orchestral/testbench?branch=master)
[![Scrutinizer Quality Score](https://img.shields.io/scrutinizer/g/orchestral/testbench/master.svg?style=flat)](https://scrutinizer-ci.com/g/orchestral/testbench/)
[![Reference Status](https://www.versioneye.com/php/orchestra:testbench/reference_badge.svg?style=flat)](https://www.versioneye.com/php/orchestra:testbench/references)

* [Version Compatibility](#version-compatibility
* [Installation](#installation)
* [Usage](#usage)
* [Example](#example)
* [Working with Workbench](#working-with-workbench)

## Version Compatibility

 Laravel  | Testbench
:---------|:----------
 4.0.x    | 2.0.x
 4.1.x    | 2.1.x
 4.2.x    | 2.2.x
 5.0.x    | 3.0.x@dev

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
	"require-dev": {
		"orchestra/testbench": "3.0.*"
	}
}
```


## Usage

To use Testbench Component, all you need to do is extend `Orchestra\Testbench\TestCase` instead of `PHPUnit_Framework_TestCase`. The fixture `app` booted by `Orchestra\Testbench\TestCase` is predefined to follow the base application skeleton of Laravel 5.

```php
<?php

class TestCase extends Orchestra\Testbench\TestCase {}

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

Since `Orchestral\Testbench\TestCase` overrides Laravel's `Illuminate\Foundation\Testing\TestCase`, if you need your own `setUp()` implementation, do not forget to call `parent::setUp()`:

```php
    public function setUp()
    {
    	parent::setUp();

    	// Your code here
    }
```

## Example

To see a working example of testbench including how to set your configuration, check the file:

* [Testing with Database](tests/DatabaseFixtureTest.php).

## Working with Workbench

### Class 'Illuminate\Foundation\Testing\TestCase' not found

	Fatal error: Class 'Illuminate\Foundation\Testing\TestCase' not found in /laravel/workbench/foo/bar/vendor/orchestra/testbench/src/Orchestra/Testbench/TestCase.php

Due to the requirement to include `laravel/framework` when you install `orchestra/testbench`, please remove any **Illuminate** dependencies to avoid a failed installation.
