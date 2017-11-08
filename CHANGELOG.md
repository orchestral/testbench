# Changelog

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 3.4.10

Released: 2017-10-08

### Changes

* Update minimum support for Testbench Core v3.4.4+.

## 3.4.9

Released: 2017-09-19

### Changes

* Update minimum support for Testbench Core v3.4.2+.

## 3.4.8

Released: 2017-07-03

### Changes

* Migrate code to `orchestra/testbench-core`.

## 3.4.7

Released: 2017-06-04

### Changes

* Update minimum support for Laravel Framework v5.4.17+.
* Deprecate `Orchestra\Testbench\TestCase::runLaravelDefaultMigrations()`.

## 3.4.6

Released: 2017-03-17

### Changes

* Reverse order of execution for `$this->beforeApplicationDestroyedCallbacks`. ([a-komarev](https://github.com/a-komarev))
* Update missing `Bus` alias.
* Rename `Orchestra\Testbench\Traits\ApplicationTrait` to `Orchestra\Testbench\Traits\CreatesApplication`.

## 3.4.5

Released: 2017-02-12

### Added

* Add `Orchestra\Testbench\Traits\WithLaravelMigrations` trait to allow executing Laravel default migrations.

## 3.4.4

Released: 2017-02-05

### Changes

* Update `auth` middleware class namespace.

## 3.4.3

Released: 2017-02-02

### Changes

* Add missing running Artisan bootstrap which would load all deferred service providers. 
* Ensure all configuration match `Illuminate\Foundation\Testing\TestCase`.

## 3.4.2

Released: 2017-01-27

### Added

* Add `Orchestra\Testbench\Traits\WithLoadMigrationsFrom` for migration with `--realpath` support.

### Changes

* Use `PHPUnit\Framework\TestCase` instead of `PHPUnit_Framework_TestCase` since we're requiring `phpunit` `v5.7.0` and above.

### Removed

* Remove `Orchestra\Database\ConsoleServiceProvider` from default `app.providers` configuration file.

## 3.4.1

Released: 2017-01-27

### Changes

* Made `orchestra/database` optional dependency as it's only needed when you need to use `--realpath` as option for migration.

## 3.4.0

Released: 2017-01-27

### Changes

* Update support for Laravel Framework v5.4.
* `Orchestra\Testbench\Http\Kernel` now runs `TrimStrings`, `ValidatePostSize`, `ConvertEmptyStringsToNull` as global middleware, consider replacing the HTTP Kernel if you need to setup different expectation.

### Removed

* Browser Kit related testing is now has been removed, if you need such feature do instead require `orchestra/testbench-browser-kit`.

### Deprecation 

* `--realpath` for migration is now deprecated. All package developer should be utilizing the available `loadMigrationFroms()` under the package service provider, refer to [Migration for Packages documentation](https://laravel.com/docs/5.4/packages#migrations).
