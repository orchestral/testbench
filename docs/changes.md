---
title: Testbench Change Log

---

## Version 3.0 {#v3-0}

### v3.0.4 {#v3-0-4}

* Add `Orchestra\Testbench\TestCaseInterface::artisan()` contract.
* Add `Orchestra\Testbench\Traits\ClientTrait::artisan()` helper.

### v3.0.3 {#v3-0-3}

* Ensure Laravel is bootstrapped using `array` for cache driver by default.

### v3.0.2 {#v3-0-2}

* Timezone should be more explicit, and shouldn't attempt to set `date_default_timezone_set()` when timezone is `NULL`.
* Rebind `Illuminate\Foundation\Bootstrap\LoadConfiguration` with `Orchestra\Testbench\Bootstrap\LoadConfiguration`.
* Add `orchestra/database` to allow migration using `--realpath` option.

### v3.0.1 {#v3-0-1}

* Fixes timezone not being set by default in certain environment.

### v3.0.0 {#v3-0-0}

* Update support for Laravel Framework v5.0.
* Simplify PSR-4 path.
* Update fixtures to match Laravel 5 structure.

## Version 2.2 {#v2-2}

### v2.2.1 {#v2-2-1}

* Add support for Behat when testing packages as an alternative to PHPUnit.
* Remove requirement to use phpseclib fork since v0.3.7 already provides compatibility to Laravel 4 workbench.

### v2.2.0 {#v2-2-0}

* Bump minimum version to PHP v5.4.0.
* Add support for Laravel Framework v4.2.
* Refactor `Orchestra\Testbench\TestCase` bootstrapping process to utilize trait.
* Add `Orchestra\Testbench\TestCaseInterface` and remove dependencies to require `Illuminate\Foundation\Testing\TestCase`.

## Version 2.1 {#v2-1}

### v2.1.2 {#v2-1-2}

* Implement [PSR-4](https://github.com/php-fig/fig-standards/blob/master/proposed/psr-4-autoloader/psr-4-autoloader.md) autoloading structure.
* Remove requirement to use phpseclib fork since v0.3.7 already provides compatibility to Laravel 4 workbench.

### v2.1.1 {#v2-1-1}

* Fixes `Cannot redeclare crypt_random_string()` issue when developing with workbench.

### v2.1.0 {#v2-1-0}

* Update Laravel 4.1 Service Providers.

## Version 2.0 {#v2-0}

### v2.0.6 {#v2-0-6}

* Implement [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) coding standard.
* Add multiple test case examples.

### v2.0.5 {#v2-0-5}

* Fixed stricter SQLite configuration introduced in Laravel Framework 4.0.8.

### v2.0.4 {#v2-0-4}

* Add migration testcase example.
* Add `Orchestra\Testbench\TestCase::getEnvironmentSetUp()`.

### v2.0.3 {#v2-0-3}

* Fixed a bug when calling `Artisan::call()` from test suite.

### v2.0.2 {#v2-0-2}

* Add unit testing and code coverage.

### v2.0.1 {#v2-0-1}

* Improved performance by reducing registered service providers.

### v2.0.0 {#v2-0-0}

* Initial release.
