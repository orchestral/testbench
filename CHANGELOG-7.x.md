# Change for 7.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 7.1.0

Released: 2022-02-22

### Changes

* Update minimum support for Testbench Core v7.1.0+. ([v7.0.2...v7.1.0](https://github.com/orchestral/testbench-core/compare/v7.0.2...v7.1.0))

#### Testbench Changes

##### Changes

* Bump minimum `laravel/framework` to `9.1`.
* Remove Laravel 9 beta compatibilities codes.

##### Removed

* Remove `sanctum.php` configuration from skeleton. 

## 7.0.2

Released: 2022-02-14

### Changes

* Update minimum support for Testbench Core v7.0.2+. ([v7.0.1...v7.0.2](https://github.com/orchestral/testbench-core/compare/v7.0.1...v7.0.2))

#### Testbench Changes

##### Changes

* Update skeleton to match v9.0.1.

## 7.0.1

Released: 2022-02-14

### Changes

* Update minimum support for Testbench Core v7.0.1+. ([v7.0.0...v7.0.1](https://github.com/orchestral/testbench-core/compare/v7.0.0...v7.0.1))

#### Testbench Changes

##### Changes

* Add missing `lang/en.json` skeleton file.

## 7.0.0

Released: 2022-02-08

### Changes

* Update support for Laravel Framework v9.
* Increase minimum PHP version to 8.0 and above (tested with 8.0 and 8.1).

#### Testbench Changes

##### Added

* Allows customizing default RateLimiter configuration via `resolveApplicationRateLimiting()` method.
* Added `Orchestra\Testbench\Http\Middleware\PreventRequestsDuringMaintenance` middleware.

##### Changes

* Update support for Laravel Framework v9.
* Increase minimum PHP version to 8.0 and above (tested with 8.0 and 8.1).
* `$loadEnvironmentVariables` property is now set to `true` by default.
* Following internal classes has been marked as `final`:
    - `Orchestra\Testbench\Bootstrap\LoadConfiguration`
    - `Orchestra\Testbench\Console\Kernel`
    - `Orchestra\Testbench\Http\Kernel`
* Moved `resources/lang` skeleton files to `lang` directory.

##### Removed

* Remove deprecated `Illuminate\Foundation\Testing\Concerns\MocksApplicationServices` trait.
