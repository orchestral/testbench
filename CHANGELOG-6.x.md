# Change for 6.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 6.7.0

Released: 2020-12-15

### Changes

* Update minimum support for Testbench Core v6.9.0+. ([v6.8.0...v6.9.0](https://github.com/orchestral/testbench-core/compare/v6.8.0...v6.9.0))

#### Testbench Changes

##### Changes

* Bump `mockery/mockery` to `v1.3.2` and above.
* Opt to use `method_exists()` to detect support for `parseTestMethodAnnotations()` under `HandlesDatabases` and `HandlesRoutes` trait.
* Update `Orchestra\Testbench\Bootstrap\LoadConfiguration::getConfigurationFiles()` to return `Generator` instead of array.

## 6.6.0

Released: 2020-12-09

### Changes

* Update minimum support for Testbench Core v6.8.0+. ([v6.7.0...v6.8.0](https://github.com/orchestral/testbench-core/compare/v6.7.0...v6.8.0))

#### Testbench Changes

##### Added

* Added following traits:
    - `Orchestra\Testbench\Concerns\HandlesAnnotations`.
    - `Orchestra\Testbench\Concerns\HandlesDatabases`.
    - `Orchestra\Testbench\Concerns\HandlesRoutes`.
* Added `defineRoutes()` and `defineCacheRoutes()` to group dedicated tests routing.

## 6.5.0

Released: 2020-12-01

### Changes

* Update minimum support for Testbench Core v6.7.0+. ([v6.6.0...v6.7.0](https://github.com/orchestral/testbench-core/compare/v6.6.0...v6.7.0))

#### Testbench Changes

##### Added

* Added `defineEnvironment()` and `defineDatabaseMigrations()` method to `Orchestra\Testbench\TestCase`.
    - `defineEnvironment()` usage is identical to `getEnvironmentSetUp()` but the original function will remain functioning for now.
    - Use `defineDatabaseMigrations()` to load any database migrations for the tests. This will allows Testbench to loads it early on the test cycle before to avoid it being clashing usage with `DatabaseTransactions` trait.
* Add support to read environment variable from `.env` on skeleton when it's available when used with `testbench` bin command.

##### Changes

* Update Laravel skeleton.
    - Remove `filesystems.cloud` configuration.

## 6.4.0

Released: 2020-11-07

### Changes

* Update minimum support for Testbench Core v6.6.0+. ([v6.5.0...v6.6.0](https://github.com/orchestral/testbench-core/compare/v6.5.0...v6.6.0))

## 6.3.0

Released: 2020-10-28

### Changes

* Update minimum support for Testbench Core v6.5.0+. ([v6.2.0...v6.5.0](https://github.com/orchestral/testbench-core/compare/v6.2.0...v6.5.0))
* Added support for PHP 8.
* Replace `fzaninotto/faker` with `fakerphp/faker`.

## 6.2.0

Released: 2020-09-28

### Changes

* Update minimum support for Testbench Core v6.2.0+. ([v6.1.0...v6.2.0](https://github.com/orchestral/testbench-core/compare/v6.1.0...v6.2.0))

## 6.1.0

Released: 2020-09-24

### Added

Added experimental support for running artisan commands outside of Laravel. e.g:

    ./vendor/bin/testbench migrate

This would allows you to setup the testing environment before running `phpunit` instead of executing everything from within `TestCase::setUp()`.

### Changes

* Update minimum support for Testbench Core v6.1.0+. ([v6.0.0...v6.1.0](https://github.com/orchestral/testbench-core/compare/v6.0.0...v6.1.0))

## 6.0.0

Released: 2020-09-08

### Added

* Added `Orchestra\Testbench\Factories\UserFactory` to handle `Illuminate\Foundation\Auth\User` model.
* Automatically autoloads `Illuminate\Database\Eloquent\LegacyFactoryServiceProvider` if the service provider exists.

### Changes

* Update support for Laravel Framework v8.
* Increase minimum PHP version to 7.3 and above (tested with 7.3 and 7.4).
* Configuration changes:
    - Changed `auth.providers.users.model` to `Illuminate\Foundation\Auth\User`.
    - Changed `queue.failed.driver` to `database-uuid`.
