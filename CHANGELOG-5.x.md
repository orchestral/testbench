# Change for 5.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 5.20.0

Released: 2021-09-08

### Changes

* Update minimum support for Testbench Core v5.22.0+. ([v5.21.0...v5.22.0](https://github.com/orchestral/testbench-core/compare/v5.21.0...v5.22.0))

## 5.19.0

Released: 2021-05-25

### Changes

* Update minimum support for Testbench Core v5.21.0+. ([v5.19.0...v5.21.0](https://github.com/orchestral/testbench-core/compare/v5.19.0...v5.21.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Foundation\Application` to allow creating remote application using Testbench.
* Added static public method `Orchestra\Testbench\Concerns\CreatesApplication::applicationBasePath()` to replace `getBasePath()`.

##### Changes

* Use `getcwd()` instead of relative path to setup `TESTBENCH_WORKING_PATH` constant when executing it via `bootstrap/app.php`.
* Accept `APP_BASE_PATH` environment variable to configure application base path.

## 5.18.0

Released: 2021-02-21

### Changes

* Update minimum support for Testbench Core v5.19.0+. ([v5.18.1...v5.19.0](https://github.com/orchestral/testbench-core/compare/v5.18.1...v5.19.0))

#### Testbench Changes

##### Changes

* Flush `Queue::createPayloadUsing()` on `Orchestra\Testbench\TestCase::tearDown()`.

## 5.17.1

Released: 2021-02-13

### Changes

* Update minimum support for Testbench Core v5.18.1+. ([v5.18.0...v5.18.1](https://github.com/orchestral/testbench-core/compare/v5.18.0...v5.18.1))

#### Testbench Changes

##### Fixes

* Always attempt to delete `laravel/vendor` symlink folder.

## 5.17.0

Released: 2021-02-09

### Changes

* Update minimum support for Testbench Core v5.18.0+. ([v5.16.0...v5.18.0](https://github.com/orchestral/testbench-core/compare/v5.16.0...v5.18.0))

#### Testbench Changes

##### Added

* Add `defineWebRoutes()` to automatically define routes under `web` middleware.

## 5.16.0

Released: 2021-01-30

### Changes

* Update minimum support for Testbench Core v5.16.0+. ([v5.15.0...v5.16.0](https://github.com/orchestral/testbench-core/compare/v5.15.0...v5.16.0))

#### Testbench Changes

##### Added

* Added `dont-discover` configuration to `testbench.yaml`.

## 5.15.0

Released: 2021-01-29

### Changes

* Update minimum support for Testbench Core v5.15.0+. ([v5.14.1...v5.15.0](https://github.com/orchestral/testbench-core/compare/v5.14.1...v5.15.0))

#### Testbench Changes

##### Changes

* Allows using Spatie Ray directly within Testbench.

## 5.14.0

Released: 2021-01-18

### Changes

* Update minimum support for Testbench Core v5.14.1+. ([v5.13.0...v5.14.1](https://github.com/orchestral/testbench-core/compare/v5.13.0...v5.14.1))

#### Testbench Changes

##### Changes

* Improves support for Package Discovery support on test environment and also `testbench` command.

##### Fixes

* Fixes tests example.

## 5.13.0

Released: 2021-01-17

### Changes

* Update minimum support for Laravel Framework v7.30.3+. ([v7.24.0...v7.30.3](https://github.com/laravel/framework/compare/v7.24.0...v7.30.3))
* Update minimum support for Testbench Core v5.13.0+. ([v5.12.1...v5.13.0](https://github.com/orchestral/testbench-core/compare/v5.12.1...v5.13.0))

#### Testbench Changes

##### Added

* Added `ignorePackageDiscoveriesFrom()` method to `Orchestra\Testbench\Concerns\CreatesApplication` trait to allow enable package discoveries during tests.
* `Orchestra\Testbench\Console\Commander` will automatically discover packages.

## 5.12.1

Released: 2020-12-15

### Changes

* Update minimum support for Testbench Core v5.12.1+. ([v5.12.0...v5.12.1](https://github.com/orchestral/testbench-core/compare/v5.12.0...v5.12.1))

## 5.12.0

Released: 2020-12-15

### Changes

* Update minimum support for Testbench Core v5.12.0+. ([v5.11.0...v5.12.0](https://github.com/orchestral/testbench-core/compare/v5.11.0...v5.12.0))

#### Testbench Changes

##### Changes

* Bump `mockery/mockery` to `v1.3.2` and above.
* Opt to use `method_exists()` to detect support for `parseTestMethodAnnotations()` under `HandlesDatabases` and `HandlesRoutes` trait.
* Update `Orchestra\Testbench\Bootstrap\LoadConfiguration::getConfigurationFiles()` to return `Generator` instead of array.

## 5.11.0

Released: 2020-12-09

### Changes

* Update minimum support for Testbench Core v5.11.0+. ([v5.10.0...v5.11.0](https://github.com/orchestral/testbench-core/compare/v5.10.0...v5.11.0))

#### Testbench Changes

##### Added

* Added following traits:
    - `Orchestra\Testbench\Concerns\HandlesAnnotations`.
    - `Orchestra\Testbench\Concerns\HandlesDatabases`.
    - `Orchestra\Testbench\Concerns\HandlesRoutes`.
* Added `defineRoutes()` and `defineCacheRoutes()` to group dedicated tests routing.

## 5.10.0

Released: 2020-12-01

### Changes

* Update minimum support for Testbench Core v5.10.0+. ([v5.9.0...v5.10.0](https://github.com/orchestral/testbench-core/compare/v5.9.0...v5.10.0))

#### Testbench Changes

##### Added

* Added `defineEnvironment()` and `defineDatabaseMigrations()` method to `Orchestra\Testbench\TestCase`.
    - `defineEnvironment()` usage is identical to `getEnvironmentSetUp()` but the original function will remain functioning for now.
    - Use `defineDatabaseMigrations()` to load any database migrations for the tests. This will allows Testbench to loads it early on the test cycle before to avoid it being clashing usage with `DatabaseTransactions` trait.
* Add support to read environment variable from `.env` on skeleton when it's available when used with `testbench` bin command.

## 5.9.0

Released: 2020-11-07

### Changes

* Update minimum support for Testbench Core v5.9.0+. ([v5.8.0...v5.9.0](https://github.com/orchestral/testbench-core/compare/v5.8.0...v5.9.0))

## 5.8.0

Released: 2020-10-28

### Changes

* Update minimum support for Testbench Core v5.8.0+. ([v5.5.0...v5.8.0](https://github.com/orchestral/testbench-core/compare/v5.5.0...v5.8.0))
* Added support for PHP 8.
* Replace `fzaninotto/faker` with `fakerphp/faker`.

## 5.7.0

Released: 2020-09-28

### Changes

* Update minimum support for Testbench Core v5.5.0+. ([v5.4.0...v5.5.0](https://github.com/orchestral/testbench-core/compare/v5.4.0...v5.5.0))

## 5.6.0

Released: 2020-09-25

### Added

Added experimental support for running artisan commands outside of Laravel. e.g:

    ./vendor/bin/testbench migrate

This would allows you to setup the testing environment before running `phpunit` instead of executing everything from within `TestCase::setUp()`.

### Changes

* Update minimum support for Testbench Core v5.4.0+. ([v5.3.0...v5.4.0](https://github.com/orchestral/testbench-core/compare/v5.3.0...v5.4.0))

## 5.5.0

Released: 2020-08-31

### Changes

* Update minimum support for Laravel Framework v7.24.0+. ([v7.10.0...v7.24.0](https://github.com/laravel/framework/compare/v7.10.0...v7.24.0))
* Update minimum support for Testbench Core v5.3.0+. ([v5.2.0...v5.3.0](https://github.com/orchestral/testbench-core/compare/v5.2.0...v5.3.0))

## 5.4.0

Released: 2020-08-18

### Changes

* Update minimum support for Testbench Core v5.2.0+. ([v5.1.4...v5.2.0](https://github.com/orchestral/testbench-core/compare/v5.1.4...v5.2.0))

## 5.3.0

Released: 2020-05-30

### Changes

* Update minimum support for Laravel Framework v7.10.0+. ([v7.1.0...v7.10.0](https://github.com/laravel/framework/compare/v7.1.0...v7.10.0))
* Update minimum support for Testbench Core v5.1.4+. ([v5.1.0...v5.1.4](https://github.com/orchestral/testbench-core/compare/v5.1.0...v5.1.4))

## 5.2.0

Released: 2020-04-28

### Changes

* Add forward compatibility with `laravel/legacy-factories`.

## 5.1.0

Released: 2020-03-11

### Changes

* Update minimum support for Laravel Framework v7.1.0+. ([v7.0.6...v7.1.0](https://github.com/laravel/framework/compare/v7.0.6...v7.1.0))
* Update minimum support for Testbench Core v5.1.0+. ([v5.0.2...v5.1.0](https://github.com/orchestral/testbench-core/compare/v5.0.2...v5.1.0))

## 5.0.2

Released: 2020-03-07

### Changes

* Update minimum support for Laravel Framework v7.0.6+. ([v7.0.1...v7.0.6](https://github.com/laravel/framework/compare/v7.0.1...v7.0.6))
* Update minimum support for Testbench Core v5.0.2+. ([v5.0.1...v5.0.2](https://github.com/orchestral/testbench-core/compare/v5.0.1...v5.0.2))

## 5.0.1

Released: 2020-03-03

### Changes

* Update minimum support for Laravel Framework v7.0.1+. ([v7.0.0...v7.0.1](https://github.com/laravel/framework/compare/v7.0.0...v7.0.1))
* Update minimum support for Testbench Core v5.0.1+. ([v5.0.0...v5.0.1](https://github.com/orchestral/testbench-core/compare/v5.0.0...v5.0.1))

## 5.0.0

Released: 2020-02-29

### Changes

* Update support for Laravel Framework v7.
* Increase minimum PHP version to 7.2.5 and above (tested with 7.2, 7.3 and 7.4).
* Configuration changes:
    - Changed `MAIL_DRIVER` to `MAIL_MAILER` environment variable.
