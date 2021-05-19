# Change for 6.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 6.17.1

Released: 2021-05-19

### Changes

* Update minimum support for Testbench Core v6.21.3+. ([v6.21.0...v6.21.3](https://github.com/orchestral/testbench-core/compare/v6.21.0...v6.21.3))

#### Testbench Changes

##### Changes

* Update skeleton to match v8.5.18.
* Check whether skeleton `vendor` is an actual directory before trying to symlink with base directory `vendor`.

##### Fixes

* Fixes missing `PHPUnit\Util\Test::parseTestMethodAnnotations()` on PHPUnit 10.

## 6.17.0

Released: 2021-04-06

### Changes

* Update minimum support for Testbench Core v6.21.0+. ([v6.20.0...v6.21.0](https://github.com/orchestral/testbench-core/compare/v6.20.0...v6.21.0))

#### Testbench Changes

##### Added

* Added capability to fetch package discovery from root project.
* Added database-specific environment variables based on ChipperCI.

##### Changes

* Allow configuration to be loaded from `Application::basePath()` instead of hardcoded value.

## 6.16.0

Released: 2021-03-31

### Changes

* Update minimum support for Testbench Core v6.20.0+. ([v6.19.0...v6.20.0](https://github.com/orchestral/testbench-core/compare/v6.19.0...v6.20.0))

#### Testbench Changes

##### Added

* Added ability to run multiple database by adding database specific environment variable. E.g: `MYSQL_HOST`, `POSTGRES_HOST` and `MSSQL_HOST` instead of just `DB_HOST`.

##### Changes

* Use `getcwd()` instead of relative path when setting up `TESTBENCH_WORKING_PATH` when executing it via `bootstrap/app.php`.
* Accept `APP_BASE_PATH` environment variable to configure `getBasePath()`.

## 6.15.0

Released: 2021-03-21

### Changes

* Update minimum support for Testbench Core v6.19.0+. ([v6.18.0...v6.19.0](https://github.com/orchestral/testbench-core/compare/v6.18.0...v6.19.0))

#### Testbench Changes

##### Added

* Added `TESTBENCH_WORKING_DIRECTORY` constant.

##### Removed

* Remove package discovery for `Orchestra\Testbench\Foundation\TestbenchServiceProvider`, the service provider will only be registered from CLI Commander.

## 6.14.0

Released: 2021-03-16

### Changes

* Update minimum support for Testbench Core v6.18.0+. ([v6.16.0...v6.18.0](https://github.com/orchestral/testbench-core/compare/v6.16.0...v6.18.0))
* Bump `spatie/laravel-ray` to v1.17.1+.

#### Testbench Changes

##### Added

* Added support for PHPUnit 10.

#### Changes

* Update Laravel skeleton.
  - Add `Date` aliases.
  - Update `logging` configuration.
  - Update `validation` language file.

## 6.13.0

Released: 2021-02-21

### Changes

* Update minimum support for Testbench Core v6.16.0+. ([v6.15.2...v6.16.0](https://github.com/orchestral/testbench-core/compare/v6.15.2...v6.16.0))

#### Testbench Changes

##### Changes

* Flush `Queue::createPayloadUsing()` on `Orchestra\Testbench\TestCase::tearDown()`.

## 6.12.1

Released: 2021-02-13

### Changes

* Update minimum support for Testbench Core v6.15.2+. ([v6.15.1...v6.15.2](https://github.com/orchestral/testbench-core/compare/v6.15.1...v6.15.2))

#### Testbench Changes

##### Fixes

* Always attempt to delete `laravel/vendor` symlink folder.

## 6.12.0

Released: 2021-02-09

### Changes

* Update minimum support for Testbench Core v6.15.1+. ([v6.13.0...v6.15.1](https://github.com/orchestral/testbench-core/compare/v6.13.0...v6.15.1))

#### Testbench Changes

##### Added

* Add `defineWebRoutes()` to automatically define routes under `web` middleware.

## 6.11.0

Released: 2021-01-30

### Changes

* Update minimum support for Testbench Core v6.13.0+. ([v6.12.0...v6.13.0](https://github.com/orchestral/testbench-core/compare/v6.12.0...v6.13.0))

#### Testbench Changes

##### Added

* Added `dont-discover` configuration to `testbench.yaml`.

## 6.10.0

Released: 2021-01-29

### Changes

* Update minimum support for Testbench Core v6.12.0+. ([v6.11.1...v6.12.0](https://github.com/orchestral/testbench-core/compare/v6.11.1...v6.12.0))

#### Testbench Changes

##### Added

* Added support for Laravel 8 parallel testing:
  - Added `package:test` command.
  - Added `Orchestra\Testbench\Foundation\TestbenchServiceProvider` class.

## 6.9.0

Released: 2021-01-18

### Changes

* Update minimum support for Testbench Core v6.11.1+. ([v6.10.0...v6.11.1](https://github.com/orchestral/testbench-core/compare/v6.10.0...v6.11.1))

#### Testbench Changes

##### Changes

* Improves support for Package Discovery support on test environment and also `testbench` command.

##### Fixes

* Fixes tests example.

## 6.8.0

Released: 2021-01-17

### Changes

* Update minimum support for Laravel Framework v8.22.1+. ([v8.18.1...v8.22.1](https://github.com/laravel/framework/compare/v8.18.1...v8.22.1))
* Update minimum support for Testbench Core v6.10.0+. ([v6.9.2...v6.10.0](https://github.com/orchestral/testbench-core/compare/v6.9.2...v6.10.0))

#### Testbench Changes

##### Added

* Added `ignorePackageDiscoveriesFrom()` method to `Orchestra\Testbench\Concerns\CreatesApplication` trait to allow enable package discoveries during tests.
* `Orchestra\Testbench\Console\Commander` will automatically discover packages.

## 6.7.2

Released: 2020-12-30

### Changes

* Update minimum support for Testbench Core v6.9.2+. ([v6.9.1...v6.9.2](https://github.com/orchestral/testbench-core/compare/v6.9.1...v6.9.2))

## 6.7.1

Released: 2020-12-28

### Changes

* Update minimum support for Laravel Framework v8.18.1+. ([v8.0.0...v8.18.1](https://github.com/laravel/framework/compare/v8.0.0...v8.18.1))

## 6.7.0

Released: 2020-12-15

### Changes

* Update minimum support for Testbench Core v6.9.1+. ([v6.8.0...v6.9.1](https://github.com/orchestral/testbench-core/compare/v6.8.0...v6.9.1))

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
