# Change for 3.7

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 3.7.6

Released: 2018-12-04

### Changes

* Update minimum support for Laravel Framework v5.7.14+.
* Update minimum support for Testbench Core v3.7.7+.

## 3.7.5

Released: 2018-11-15

### Changes

* Update minimum support for Testbench Core v3.7.6+.
* Move `mockery/mockery` dependency out of `dev` requirement.

## 3.7.4

Released: 2018-10-07

### Fixes

* Fixes dependencies constraint.

## 3.7.3

Released: 2018-10-07

### Changes

* Update minimum support for Testbench Core v3.7.5+.
    - Allows `Orchestra\Testbench\Database\MigrateProcessor` to accept both `int` exit code and `Illuminate\Foundation\Testing\PendingCommand` when running migration via artisan.
    - Update Laravel 5.7 skeleton.

## 3.7.2

Released: 2018-09-13

### Changes

* Update minimum support for Testbench Core v3.7.3+.

## 3.7.1

Released: 2018-09-12

### Changes

* Update minimum support for Laravel Framework v5.7.4+.
* Update minimum support for Testbench Core v3.7.2+.

## 3.7.0

Released: 2018-08-23

### Added

* Added `Orchestra\Testbench\Http\Middleware\Authenticate` middleware.

### Changes

* Update support for Laravel Framework v5.7.
* `Orchestra\Testbench\Concerns\Testing::setUpTheTestEnvironmentTraits()` should always accept an array of `$uses` from `Orchestra\Testbench\TestCase::setUpTraits()`.
