# Change for 8.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 8.5.0

Released: 2023-04-18

### Changes

* Bump minimum `laravel/framework` to `10.8.0`.
* Update minimum support for Testbench Core v8.5.0+. ([v8.4.2...v8.5.0](https://github.com/orchestral/testbench-core/compare/v8.4.2...v8.5.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\after_resolving` helper function.

##### Changes

* Update skeleton to match v10.1.0.
* Bump minimum `laravel/framework` to `10.8.0`.

## 8.4.0

Released: 2023-04-14

### Changes

* Support PHPUnit `10.1`.
* Update minimum support for Testbench Core v8.4.2+. ([v8.4.0...v8.4.2](https://github.com/orchestral/testbench-core/compare/v8.4.0...v8.4.2))

#### Testbench Changes

##### Changes

* Supports PHPUnit 10.1.
* Update skeleton to match v10.0.6.
* Avoid declaring `Orchestra\Testbench\Concerns\Testing::setUpTheTestEnvironmentTraitToBeIgnored()` as `abstract` method.

## 8.3.1

Released: 2023-04-11

### Changes

* Support Laravel Framework `10.7`.

## 8.3.0

Released: 2023-04-05

### Changes

* Update minimum support for Testbench Core v8.4.0+. ([v8.3.1...v8.4.0](https://github.com/orchestral/testbench-core/compare/v8.3.1...v8.4.0))

#### Testbench Changes

##### Changes

* Add `setUpTheTestEnvironmentTraitToBeIgnored()` method to determine `setup<Concern>` and `teardown<Concern>` with imported traits that should be used on a given trait.
* Bump minimum `laravel/framework` to `10.6.1`.

## 8.2.2

Released: 2023-04-04

### Changes

* Support Laravel Framework `10.6`.

## 8.2.1

Released: 2023-04-03

### Changes

* Update minimum support for Testbench Core v8.3.1+. ([v8.3.0...v8.3.1](https://github.com/orchestral/testbench-core/compare/v8.3.0...v8.3.1))

#### Testbench Changes

##### Fixes

* Fixes `Orchestra\Testbench\Foundation\Config::addProviders()` usage.
* Fixes `Orchestra\Testbench\transform_relative_path()` logic.

## 8.2.0

Released: 2023-04-01

### Changes

* Update minimum support for Testbench Core v8.3.0+. ([v8.2.0...v8.3.0](https://github.com/orchestral/testbench-core/compare/v8.2.0...v8.3.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Foundation\Bootstrap\LoadMigrationsFromArray` class to handle loading migrations from `testbench.yaml`.
    - You can now disable loading default migrations using either `migrations: false` in `testbench.yaml` or adding `TESTBENCH_WITHOUT_DEFAULT_MIGRATIONS=(true)` environment variable.
* Added additional configuration options to `testbench.yaml`:
    - `migrations: <bool|array>`
    - `bootstrappers: <array>`
* Added `Orchestra\Testbench\parse_environment_variables()` function.
* Added `Orchestra\Testbench\transform_relative_path()` function.

##### Changes

* `env` configuration from `testbench.yaml` with have higher priority than `default_environment_variables()`.
* Disable `Dotenv\Repository\Adapter\PutenvAdapter` when generating environment variable on the fly using `Orchestra\Testbench\Foundation\Application`.

##### Fixes

* Fixes console output when an exception is thrown before application can be bootstrapped.
* Fixes some configuration value leaks between tests due to the way it set environment values including `APP_KEY`, `APP_DEBUG` etc.

## 8.1.0

Released: 2023-03-27

### Changes

* Update minimum support for Testbench Core v8.2.0+. ([v8.0.5...v8.2.0](https://github.com/orchestral/testbench-core/compare/v8.0.5...v8.2.0))

#### Testbench Changes

##### Added

* Add supports for `setup<Concern>` and `teardown<Concern>` with imported traits.

##### Changes

* Move PHPUnit 9 support to legacy:
    - Recommend using PHPUnit 10 whenever possible. 
    - Remove deprecation handling support for PHPUnit 9.
    - Only recommend using `package:test` and `--parallel` with PHPUnit 10.

-------------

> **Warning**: Breaking change is possible if your package contains any traits with `setup<TraitClassName>` or `teardown<TraitClassName>`
>
> This version now will automatically run those methods during application bootstrap and terminate to be consistent with Laravel Framework implementations.

## 8.0.11

Released: 2023-03-23

### Fixes

* Avoid database connection from eager loaded via `spatie/laravel-ray`.

## 8.0.10

Released: 2023-03-18

### Changes

* Update minimum support for Laravel Framework to `v10.4.1`.

## 8.0.9

Released: 2023-03-18

### Changes

* Update minimum support for Laravel Framework to `v10.4.0`.
* Support for Testbench Core to `v8.1.0`.

## 8.0.8

Released: 2023-03-10

### Changes

* Update minimum support for Testbench Core v8.0.5+. ([v8.0.4...v8.0.5](https://github.com/orchestral/testbench-core/compare/v8.0.4...v8.0.5))
* Update minimum support for Laravel Framework to `v10.3.3`.

## 8.0.7

Released: 2023-03-09

### Changes

* Update minimum support for Testbench Core v8.0.4+. ([v8.0.2...v8.0.4](https://github.com/orchestral/testbench-core/compare/v8.0.2...v8.0.4))
* Update minimum support for Laravel Framework to `v10.3.1`.

## 8.0.6

Released: 2023-03-08

### Changes

* Support Laravel Framework `10.3`.

## 8.0.5

Released: 2023-03-02

### Changes

* Support Laravel Framework `10.2`.

## 8.0.4

Released: 2023-02-24

### Changes

* Update minimum support for Laravel Framework to `v10.1.5`.

## 8.0.3

Released: 2023-02-24

### Changes

* Update minimum support for Laravel Framework to `v10.1.4`.

## 8.0.2

Released: 2023-02-21

### Changes

* Update minimum support for Testbench Core v8.0.2+. ([v8.0.1...v8.0.2](https://github.com/orchestral/testbench-core/compare/v8.0.1...v8.0.2))
* Support Laravel Framework `10.1`.

#### Testbench Changes

##### Fixes

* Fixes `app.asset_url` config default value from `'/'` to `null`.

## 8.0.1

Released: 2023-02-17

### Changes

* Update minimum support for Testbench Core v8.0.1+. ([v8.0.0...v8.0.1](https://github.com/orchestral/testbench-core/compare/v8.0.0...v8.0.1))

#### Testbench Changes

##### Changes

* Bump minimum `laravel/framework` to `10.0.3`.
* Use available `$_composer_autoload_path` from `composer-runtime-api`.

## 8.0.0

Released: 2023-02-14

### Added

* Added support for PHPUnit 10.

### Changes

* Update support for Laravel Framework v10.
* Increase minimum PHP version to 8.1 and above (tested with 8.1 and 8.2).
