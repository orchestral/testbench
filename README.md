Laravel Package Unit Testing Helper
==============

Testbench Component is a simple package that is supposed to help you write tests for your Laravel package, especially when there is routing involved.

[![Latest Stable Version](https://poser.pugx.org/orchestra/testbench/v/stable.png)](https://packagist.org/packages/orchestra/testbench)
[![Total Downloads](https://poser.pugx.org/orchestra/testbench/downloads.png)](https://packagist.org/packages/orchestra/testbench)
[![Build Status](https://travis-ci.org/orchestral/testbench.svg?branch=master)](https://travis-ci.org/orchestral/testbench)
[![Coverage Status](https://coveralls.io/repos/orchestral/testbench/badge.png?branch=master)](https://coveralls.io/r/orchestral/testbench?branch=master)
[![Reference Status](https://www.versioneye.com/php/orchestra:testbench/reference_badge.svg?style=flat)](https://www.versioneye.com/php/orchestra:testbench/references)

* [Installation](#installation)
* [Usage](#usage)
* [Testing Route Filters](#testing-route-filters)
* [Example](#example)
* [Working with Workbench](#working-with-workbench)

## Version Compability

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

	protected function getPackageProviders()
	{
		return ['Acme\AcmeServiceProvider'];
	}
```

### Custom Aliases

To load your package alias, override the `getPackageAliases`.

```php

	protected function getPackageAliases()
	{
		return [
			'Acme' => 'Acme\Facade'
		];
	}
```

### Overriding setUp() method

Since `Orchestral\TestCase` overrides Laravel's `TestCase`, if you need your own `setUp()` implementation, do not forget to call `parent::setUp()`:

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
