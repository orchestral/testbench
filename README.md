Laravel Package Unit Testing Helper
==============

Orchestra\Testbench is a simple package that suppose to help you write test cases for your Laravel package especially when there routing involved.

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
	"require-dev": {
		"orchestra/testbench": "2.0.*"
	}
}
```

## Usage

To use Orchestra\Testbench all you need to do is extends `Orchestra\Testbench\TestCase` instead of `PHPUnit_Framework_TestCase`. The fixture `app` booted by `Orchestra\Testbench\TestCase` is predefined to follow the base Laravel 4 application skeleton.

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
