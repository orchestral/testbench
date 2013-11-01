Orchestra Testbench Package
==============

`Orchestra\Testbench` is a simple package that is supposed to help you write tests for your Laravel package, especially when there is routing involved.

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
	"require-dev": {
		"orchestra/testbench": "2.1.*@dev"
	}
}
```

### Versions

 Laravel  | Testbench
:---------|:----------
 4.0.*    | 2.0.*
 4.1.*    | 2.1.*

## Usage

To use Orchestra\Testbench, all you need to do is extend `Orchestra\Testbench\TestCase` instead of `PHPUnit_Framework_TestCase`. The fixture `app` booted by `Orchestra\Testbench\TestCase` is predefined to follow the base application skeleton of Laravel 4.

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

## Testing Route Filters

By default, route filters are disabled by Laravel because, ideally, you should test the filter separately. In order to overwrite this default, add the following code:

```php

$this->app['router']->enableFilters();
```

## Working with Workbench

> Fatal error: Class 'Illuminate\Foundation\Testing\TestCase' not found in /laravel/workbench/foo/bar/vendor/orchestra/testbench/src/Orchestra/Testbench/TestCase.php

Due to the requirement to include `laravel/framework` when you install `orchestra/testbench`, please remove any **Illuminate** dependencies to avoid a failed installation.
