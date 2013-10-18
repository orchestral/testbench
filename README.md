Laravel Package Unit Testing Helper
==============

Orchestra\Testbench is a simple package that is suppose to help you write test cases for your Laravel package especially when there is routing involved.

[![Latest Stable Version](https://poser.pugx.org/orchestra/testbench/v/stable.png)](https://packagist.org/packages/orchestra/testbench) 
[![Total Downloads](https://poser.pugx.org/orchestra/testbench/downloads.png)](https://packagist.org/packages/orchestra/testbench) 
[![Build Status](https://travis-ci.org/orchestral/testbench.png?branch=master)](https://travis-ci.org/orchestral/testbench) 
[![Coverage Status](https://coveralls.io/repos/orchestral/testbench/badge.png?branch=master)](https://coveralls.io/r/orchestral/testbench?branch=master)

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
	"require-dev": {
		"orchestra/testbench": "2.0.*"
	}
}
```

### Versions

 Laravel  | Testbench
:---------|:----------
 4.0.*    | 2.0.*
 4.1.*    | 2.1.*

## Usage

To use Orchestra\Testbench all you need to do is extend `Orchestra\Testbench\TestCase` instead of `PHPUnit_Framework_TestCase`. The fixture `app` booted by `Orchestra\Testbench\TestCase` is predefined to follow the base Laravel 4 application skeleton.

```php
<?php

class TestCase extends Orchestra\Testbench\TestCase {}

```


### Custom Service Provider

To load your package service provider override the `getPackageProviders`.

```php

	protected function getPackageProviders()
	{
		return array('Acme\AcmeServiceProvider');
	}
```

### Custom Aliases

To load your package alias override the `getPackageAliases`.

```php

	protected function getPackageAliases()
	{
		return array(
			'Acme' => 'Acme\Facade'
		);
	}
```

## Testing Route Filters

By default Route filters are disabled by Laravel because ideally you should test the filter separately. In order to overwrite this default add the following code:

```php

$this->app['router']->enableFilters();
```


## Working with Workbench

	Fatal error: Class 'Illuminate\Foundation\Testing\TestCase' not found in /laravel/workbench/foo/bar/vendor/orchestra/testbench/src/Orchestra/Testbench/TestCase.php

Due to the requirement to include `laravel/framework` when you install `orchestra/testbench`, please remove any **illuminate** dependencies to avoid fail installation.
