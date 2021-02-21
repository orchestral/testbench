# Change for 4.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.


## 4.16.0

Released: 2021-02-21

### Changes

* Update minimum support for Testbench Core v4.15.0+. ([v4.14.0...v4.15.0](https://github.com/orchestral/testbench-core/compare/v4.14.0...v4.15.0))

## 4.15.0

Released: 2021-02-09

### Changes

* Update minimum support for Testbench Core v4.14.0+. ([v4.12.0...v4.14.0](https://github.com/orchestral/testbench-core/compare/v4.12.0...v4.14.0))

#### Testbench Changes

##### Added

* Add `defineWebRoutes()` to automatically define routes under `web` middleware.

## 4.14.0

Released: 2021-01-17

### Changes

* Update minimum support for Laravel Framework v6.20.12+. ([v6.18.0...v6.20.12](https://github.com/laravel/framework/compare/v6.18.0...v6.20.12))
* Update minimum support for Testbench Core v4.13.0+. ([v4.12.0...v4.13.0](https://github.com/orchestral/testbench-core/compare/v4.12.0...v4.13.0))

#### Testbench Changes

##### Added

* Added `ignorePackageDiscoveriesFrom()` method to `Orchestra\Testbench\Concerns\CreatesApplication` trait to allow enable package discoveries during tests.

## 4.13.0

Release: 2020-12-15

### Changes

* Update minimum support for Testbench Core v4.12.0+. ([v4.11.1...v4.12.0](https://github.com/orchestral/testbench-core/compare/v4.11.1...v4.12.0))

#### Testbench Changes

##### Changes

* Bump `mockery/mockery` to `v1.3.2` and above.
* Opt to use `method_exists()` to detect support for `parseTestMethodAnnotations()` under `HandlesDatabases` and `HandlesRoutes` trait.
* Update `Orchestra\Testbench\Bootstrap\LoadConfiguration::getConfigurationFiles()` to return `Generator` instead of array.

## 4.12.2

Released: 2020-12-10

### Changes

* Update minimum support for Testbench Core v4.11.1+. ([v4.11.0...v4.11.1](https://github.com/orchestral/testbench-core/compare/v4.11.0...v4.11.1))

#### Testbench Changes

##### Fixes

* Removed `abstract` method `parseTestMethodAnnotations()` to revert breaking changes.

## 4.12.1

Released: 2020-12-09

### Fixes

* Fixes Testbench Core dependencies.

## 4.12.0

Released: 2020-12-09

### Changes

* Update minimum support for Testbench Core v4.11.0+. ([v4.10.0...v4.11.0](https://github.com/orchestral/testbench-core/compare/v4.10.0...v4.11.0))

#### Testbench Changes

##### Added

* Added following traits:
    - `Orchestra\Testbench\Concerns\HandlesAnnotations`.
    - `Orchestra\Testbench\Concerns\HandlesDatabases`.
    - `Orchestra\Testbench\Concerns\HandlesRoutes`.
* Use `defineRoutes()` to group dedicated tests routing.

## 4.11.0

Released: 2020-12-01

### Changes

* Update minimum support for Testbench Core v4.10.0+. ([v4.9.0...v4.10.0](https://github.com/orchestral/testbench-core/compare/v4.9.0...v4.10.0))

#### Testbench Changes

##### Added

* Added `defineEnvironment()` and `defineDatabaseMigrations()` method to `Orchestra\Testbench\TestCase`.
    - `defineEnvironment()` usage is identical to `getEnvironmentSetUp()` but the original function will remain functioning for now.
    - Use `defineDatabaseMigrations()` to load any database migrations for the tests. This will allows Testbench to loads it early on the test cycle before to avoid it being clashing usage with `DatabaseTransactions` trait.

## 4.10.0

Released: 2020-11-07

### Changes

* Update minimum support for Testbench Core v4.9.0+. ([v4.8.0...v4.9.0](https://github.com/orchestral/testbench-core/compare/v4.8.0...v4.9.0))

## 4.9.0

Released: 2020-10-28

### Changes

* Update minimum support for Testbench Core v4.8.0+. ([v4.7.0...v4.8.0](https://github.com/orchestral/testbench-core/compare/v4.7.0...v4.8.0))
* Added support for PHP 8.
* Replace `fzaninotto/faker` with `fakerphp/faker`.

## 4.8.0

Released: 2020-04-28

### Changes

* Add forward compatibility with `laravel/legacy-factories`.

## 4.7.0

Released: 2020-03-07

### Changes

* Update minimum support for Laravel Framework v6.18.0+. ([v6.9.0...v6.18.0](https://github.com/laravel/framework/compare/v6.9.0...v6.18.0))
* Update minimum support for Testbench Core v4.7.0+. ([v4.6.0...v4.7.0](https://github.com/orchestral/testbench-core/compare/v4.6.0...v4.7.0))

## 4.6.0

Released: 2020-01-30

### Changes

* Update minimum support for Testbench Core v4.6.0+. ([v4.4.0...v4.6.0](https://github.com/orchestral/testbench-core/compare/v4.4.0...v4.6.0))

## 4.5.0

Released: 2020-01-08

### Changes

* Update minimum support for Laravel Framework v6.9.0+. ([v6.4.0...v6.9.0](https://github.com/laravel/framework/compare/v6.4.0...v6.9.0))
* Update minimum support for Testbench Core v4.5.0+. ([v4.4.1...v4.5.0](https://github.com/orchestral/testbench-core/compare/v4.4.1...v4.5.0))

## 4.4.1

Released: 2019-11-22

### Changes

* Update minimum support for Testbench Core v4.4.1+. ([v4.4.0...v4.4.1](https://github.com/orchestral/testbench-core/compare/v4.4.0...v4.4.1))

## 4.4.0

Released: 2019-11-22

### Changes

* Update minimum support for Testbench Core v4.4.0+. ([v4.3.0...v4.4.0](https://github.com/orchestral/testbench-core/compare/v4.3.0...v4.4.0))

## 4.3.0

Released: 2019-10-24

### Changes

* Update minimum support for Laravel Framework v6.4.0+. ([v6.2.0...v6.4.0](https://github.com/laravel/framework/compare/v6.2.0...v6.4.0))
* Update minimum support for Testbench Core v4.3.0+. ([v4.2.0...v4.3.0](https://github.com/orchestral/testbench-core/compare/v4.2.0...v4.3.0))

## 4.2.0

Released: 2019-10-11

### Changes

* Update minimum support for Laravel Framework v6.2.0+. ([v6.1.0...v6.2.0](https://github.com/laravel/framework/compare/v6.1.0...v6.2.0))
* Update minimum support for Testbench Core v4.2.0+. ([v4.1.0...v4.2.0](https://github.com/orchestral/testbench-core/compare/v4.1.0...v4.2.0))

## 4.1.0 

Released: 2019-10-06

### Changes

* Update minimum support for Laravel Framework v6.1.0+. ([v6.0.0...v6.1.0](https://github.com/laravel/framework/compare/v6.0.0...v6.1.0))
* Update minimum support for Testbench Core v4.1.0+. ([v4.0.2...v4.1.0](https://github.com/orchestral/testbench-core/compare/v4.0.2...v4.1.0))
* Rename default `Redis` alias under `app.aliases` to `RedisManager` to avoid incompatibility when running tests using `phpredis` extension.

## 4.0.1

Released: 2019-09-24

### Changes

* Update minimum support for Testbench Core v4.0.2+. ([v4.0.0...v4.0.2](https://github.com/orchestral/testbench-core/compare/v4.0.0...v4.0.2))
* Support test againsts PHP `7.4snapshot` build on Travis-CI.

## 4.0.0

Released: 2019-09-03

### Changes

* Update support for Laravel Framework v6.
* Increase minimum PHP version to 7.2+ (tested with 7.2 and 7.3).
* Increase minimum PHPUnit to v8.0+.
* Configuration changes:
    - `BCRYPT_ROUNDS` now defaults to `10`.
    - `REDIS_CLIENT` now defaults to `phpredis`.
    - `REDIS_CLUSTER` now defaults to `redis`.

### Breaking Changes

* Any tests requiring Redis would now requires `ext-redis` to be installed. As of now you either can setup Redis or set `REDIS_CLIENT` and `REDIS_CLUSTER` to the deprecated `predis` option.
