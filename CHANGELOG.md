# Changelog

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 3.4.4

Date: 2017-02-05

### Changes

* Update `auth` middleware class namespace.

## 3.4.3

Date: 2017-02-02

### Changes

* Add missing running Artisan bootstrap which would load all deferred service providers. 
* Ensure all configuration match `Illuminate\Foundation\Testing\TestCase`.

## 3.4.2

Date: 2017-01-27

### Added

* Add `Orchestra\Testbench\Traits\WithLoadMigrationsFrom` for migration with `--realpath` support.

### Changes

* Use `PHPUnit\Framework\TestCase` instead of `PHPUnit_Framework_TestCase` since we're requiring `phpunit` `v5.7.0` and above.

### Removed

* Remove `Orchestra\Database\ConsoleServiceProvider` from default `app.providers` configuration file.

## 3.4.1

Date: 2017-01-27

### Changes

* Made `orchestra/database` optional dependency as it's only needed when you need to use `--realpath` as option for migration.

## 3.4.0

Date: 2017-01-27

### Changes

* Update support for Laravel Framework v5.4.
* `Orchestra\Testbench\Http\Kernel` now runs `TrimStrings`, `ValidatePostSize`, `ConvertEmptyStringsToNull` as global middleware, consider replacing the HTTP Kernel if you need to setup different expectation.

### Removed

* Browser Kit related testing is now has been removed, if you need such feature do instead require `orchestra/testbench-browser-kit`.

### Deprecation 

* `--realpath` for migration is now deprecated. All package developer should be utilizing the available `loadMigrationFroms()` under the package service provider, refer to [Migration for Packages documentation](https://laravel.com/docs/5.4/packages#migrations).
