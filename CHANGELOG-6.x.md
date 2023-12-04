# Change for 6.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 6.39.0

Released: 2023-12-04

### Changes

* Update minimum support for Testbench Core v6.43.0+. ([v6.42.0...v6.43.0](https://github.com/orchestral/testbench-core/compare/v6.42.0...v6.43.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Attributes\ResetRefreshDatabaseState` attribute to force refreshing database before executing the test.
* Added `Orchestra\Testbench\Foundation\Bootstrap\SyncDatabaseEnvironmentVariables` bootstrap class and allow database collation to be configurable via environment variables using `MYSQL_COLLATION`, `POSTGRES_COLLATION` and `MSSQL_COLLATION`.

##### Changes

* Refactor handling attributes: 
  - Add ability to handle actions directly from the attribute.
  - Add ability to set `defer` when using `Orchestra\Testbench\Attributes\DefineDatabase`.

##### Deprecated

* Deprecate `Orchestra\Testbench\Concerns\Database\HandlesConnections` trait.

## 6.38.0

Released: 2023-11-10

### Changes

* Update minimum support for Testbench Core v6.42.0+. ([v6.41.0...v6.42.0](https://github.com/orchestral/testbench-core/compare/v6.41.0...v6.42.0))

#### Testbench Changes

##### Added

* Added new PHPUnit Attribute to run the default `laravel`, `cache`, `notifications`, `queue` and `session` database migrations using `Orchestra\Testbench\Attributes\WithMigration`.
* Added `Orchestra\Testbench\Bootstrap\ConfigureRay` class.
* Added `Orchestra\Testbench\defined_environment_variables()` function.
* Added `Orchestra\Testbench\laravel_migration_path()` function.
* Added `Orchestra\Testbench\remote()` function.

##### Changes

* Mark the following classes as `@api`:
    - `Orchestra\Testbench\Foundation\Application`
    - `Orchestra\Testbench\Foundation\Config`
    - `Orchestra\Testbench\Foundation\Env`
* Cache results from `Orchestra\Testbench\PHPUnit\AttributeParser`.

## 6.37.0

Released: 2023-10-24

### Changes

* Update minimum support for Testbench Core v6.41.0+. ([v6.40.0...v6.41.0](https://github.com/orchestral/testbench-core/compare/v6.40.0...v6.41.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Workbench\Workbench` to handle integrations with Workbench.
* Added `Orchestra\Testbench\Foundation\Config::getWorkbenchDiscoversAttributes()` method.
* Added `Orchestra\Testbench\Concerns\Database\InteractsWithSqliteDatabaseFile` trait.
* Added support for PHPUnit Attribute as replacements to Annotations:
  - `@define-env` and `@environment-setup` will be replaced with `Orchestra\Testbench\Attributes\DefineEnvironment`.
  - `@define-db` will be replaced with `Orchestra\Testbench\Attributes\DefineDatabase`.
  - `@define-route` will be replaced with `Orchestra\Testbench\Attributes\DefineRoute`.

##### Fixes

* Fixes generating path using `Orchestra\Testbench\package_path()` and `Orchestra\Testbench\workbench_path()`.

##### Deprecated

* Deprecate `Orchestra\Testbench\Concerns\WithFactories`.

##### Removed

* Remove `Orchestra\Testbench\Foundation\Bootstrap\StartWorkbench`, use `Orchestra\Testbench\Workbench\Workbench::start()` instead.

## 6.36.0

Released: 2023-10-09

### Changes

* Update minimum support for Testbench Core v6.40.0+. ([v6.39.0...v6.40.0](https://github.com/orchestral/testbench-core/compare/v6.39.0...v6.40.0))

#### Testbench Changes

##### Changes

* Code refactors.
* Mark `Orchestra\Testbench\Bootstrap\LoadEnvironmentVariables` class as `@internal`.

## 6.35.0

Released: 2023-09-25

### Changes

* Update minimum support for Testbench Core v6.39.0+. ([v6.38.0...v6.39.0](https://github.com/orchestral/testbench-core/compare/v6.38.0...v6.39.0))

#### Testbench Changes

##### Added

* Added `cachedConfigurationForWorkbench()` to `Orchestra\Testbench\Concern\InteractsWithWorkbench` trait.
* Add the ability to read `TESTBENCH_WORKING_PATH` from environment variables for Testbench Dusk usage.
* Supports Workbench `discovers` configuration.
* Add the ability to properly forward Environment Variables.
* Add `usesSqliteInMemoryDatabaseConnection` to `Orchestra\Testbench\Concerns\HandlesDatabases` trait.

## 6.34.0

Released: 2023-08-29

### Changes

* Update minimum support for Testbench Core v6.38.0+. ([v6.37.1...v6.38.0](https://github.com/orchestral/testbench-core/compare/v6.37.1...v6.38.0))

#### Testbench Changes

##### Added

* Add ability to automatically run default Laravel migrations using `Orchestra\Testbench\Concerns\WithLaravelMigrations`.

## 6.33.1

Released: 2023-08-22

### Changes

* Update minimum support for Testbench Core v6.37.1+. ([v6.37.0...v6.37.1](https://github.com/orchestral/testbench-core/compare/v6.37.0...v6.37.1))

#### Testbench Changes

##### Fixes

* Fixes missing import for `Orchestra\Testbench\after_resolving` helper function.

## 6.33.0

Released: 2023-08-22

### Changes

* Update minimum support for Testbench Core v6.37.0+. ([v6.36.0...v6.37.0](https://github.com/orchestral/testbench-core/compare/v6.36.0...v6.37.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\after_resolving` helper function.

##### Changes

* Allow using `$model` property override when extending `Orchestra\Testbench\Factories\UserFactory`.

## 6.32.0

Released: 2023-08-19

### Changes

* Update minimum support for Testbench Core v6.36.0+. ([v6.35.1...v6.36.0](https://github.com/orchestral/testbench-core/compare/v6.35.1...v6.36.0))

#### Testbench Changes

##### Added

* Added new `workbench.welcome` configuration option.

##### Changes

* Allow `testbench.yaml` configuration fallback similar to `.env`.

## 6.31.1

Released: 2023-08-17

### Changes

* Update minimum support for Testbench Core v6.35.1+. ([v6.35.0...v6.35.1](https://github.com/orchestral/testbench-core/compare/v6.35.0...v6.35.1))

#### Testbench Changes

##### Fixes

* Fixes configuration leak when running some TestCase without `Orchestra\Testbench\Concerns\WithWorkbench`.

## 6.31.0

Released: 2023-08-15

### Changes

* Update minimum support for Testbench Core v6.35.0+. ([v6.34.0...v6.35.0](https://github.com/orchestral/testbench-core/compare/v6.34.0...v6.35.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\package_path()` function.

##### Changes

* Rename `Orchestra\Testbench\Workbench\Bootstrap\StartWorkbench` to `Orchestra\Testbench\Foundation\Bootstrap\StartWorkbench`.

##### Fixes

* Fixes `boolean` usage with `Orchestra\Testbench\parse_environment_variables()` function.

##### Remove

* Remove experimental Workbench support.

## 6.30.0

Released: 2023-08-12

### Changes

* Update minimum support for Testbench Core v6.34.0+. ([v6.33.2...v6.34.0](https://github.com/orchestral/testbench-core/compare/v6.33.2...v6.34.0))

#### Testbench Changes

##### Changes

* Change `HandlesRoutes` loading sequence to match common Laravel bootstrap steps.
* Refactor `HandlesAnnotations` and `InteractsWithPHPUnit` traits.
* Workbench integration improvements.
* Update `workbench` configuration schema.

##### Fixes

* Fixes `Illuminate\Foundation\Application::runningUnitTests()` detection.

## 6.29.2

Released: 2023-08-10

### Changes

* Update minimum support for Testbench Core v6.33.2+. ([v6.33.1...v6.33.2](https://github.com/orchestral/testbench-core/compare/v6.33.1...v6.33.2))

#### Testbench Changes

##### Fixes

* Fixes `app()->environment()` detection when creating application `Orchestra\Testbench\Concerns\CreatesApplication` outside of `PHPUnit`.

## 6.29.1

Released: 2023-08-09

### Changes

* Update minimum support for Testbench Core v6.33.1+. ([v6.33.0...v6.33.1](https://github.com/orchestral/testbench-core/compare/v6.33.0...v6.33.1))

#### Testbench Changes

##### Added

* Add new `Orchestra\Testbench\Concerns\InteractsWithPHPUnit` to handle `CreatesApplication` within PHPUnit.

##### Fixes

* Fixes `workbench.start` path when accessing the `/` route return 404.
* Only Configure `TESTBENCH_APP_BASE_PATH` environment variable only when running under tests.

## 6.29.0

Released: 2023-08-08

### Changes

* Update minimum support for Testbench Core v6.33.0+. ([v6.32.0...v6.33.0](https://github.com/orchestral/testbench-core/compare/v6.32.0...v6.33.0))

#### Testbench Changes

##### Added

* Added new Workbench support (experimental feature).
    - Register routes under `/_workbench` prefix.
    - Automatically run configured seeds when executing `migrate:fresh` and `migrate:refresh`
    - Bind `Orchestra\Testbench\Contracts\Config` to IoC Container and introduce the new `Orchestra\Testbench\workbench` and `Orchestra\Testbench\workbench_path` helper function.
* Add PHPStan analysis.
* Add new `Orchestra\Testbench\Concerns\WithWorkbench` to automatically loads configuration from `testbench.yaml` when running tests.

## 6.28.0

Released: 2023-06-13

### Changes

* Update minimum support for Testbench Core v6.32.0+. ([v6.31.1...v6.32.0](https://github.com/orchestral/testbench-core/compare/v6.31.1...v6.32.0))

#### Testbench Changes

##### Added

* `Orchestra\Testbench\Bootstrap\LoadEnvironmentVariables` to manage loading `.env` file during tests, backport from Testbench Core 8 releases.

##### Changes

* Automate registering `tearDownInteractsWithPublishedFiles()` from `setUpInteractsWithPublishedFiles()` method.

## 6.27.1

Released: 2023-04-03

### Changes

* Update minimum support for Testbench Core v6.31.1+. ([v6.31.0...v6.31.1](https://github.com/orchestral/testbench-core/compare/v6.31.0...v6.31.1))

#### Testbench Changes

##### Fixes

* Fixes `Orchestra\Testbench\Foundation\Config::addProviders()` usage.
* Fixes `Orchestra\Testbench\transform_relative_path()` logic.

## 6.27.0

Released: 2023-04-01

### Changes

* Update minimum support for Testbench Core v6.31.0+. ([v6.30.0...v6.31.0](https://github.com/orchestral/testbench-core/compare/v6.30.0...v6.31.0))

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

## 6.26.0

Released: 2023-03-27

### Changes

* Update minimum support for Testbench Core v6.30.0+. ([v6.29.1...v6.30.0](https://github.com/orchestral/testbench-core/compare/v6.29.1...v6.30.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Foundation\Config` to read Yaml file from `testbench.yaml`.
* Added `Orchestra\Testbench\Foundation\Application::createVendorSymlink()` method.
    - The feature uses `Orchestra\Testbench\Foundation\Bootstrap\CreateVendorSymlink`.
* Added `resolveApplicationEnvironmentVariables()` method.
* Add supports for `setup<Concern>` and `teardown<Concern>` with imported traits.

##### Changes

* Bump minimum laravel/framework to `8.83.26`.
* Improves PHPUnit memory leaks.
* Refactor the following classes to match Testbench 7:
    - `Orchestra\Testbench\Concerns\HandlesRoutes`
    - `Orchestra\Testbench\Console\Commander`
    - `Orchestra\Testbench\Foundation\Application`

-------------

> **Warning**: Breaking change is possible if your package contains any traits with `setup<TraitClassName>` or `teardown<TraitClassName>`
>
> This version now will automatically run those methods during application bootstrap and terminate to be consistent with Laravel Framework implementations.

## 6.25.1

Released: 2022-10-11

### Changes

* Update minimum support for Testbench Core v6.29.1+. ([v6.29.0...v6.29.1](https://github.com/orchestral/testbench-core/compare/v6.29.0...v6.29.1))

#### Testbench Changes

##### Fixes

* Remove `bootstrap/cache/packages.php` on vendor symlink event.

## 6.25.0

Released: 2022-08-24

### Changes

* Update minimum support for Testbench Core v6.29.0+. ([v6.28.1...v6.29.0](https://github.com/orchestral/testbench-core/compare/v6.28.1...v6.29.0))

#### Testbench Changes

##### Added

* Added `loadLaravelMigrationsWithoutRollback()` and `runLaravelMigrationsWithoutRollback()` helpers.

## 6.24.1

Released: 2022-02-08

### Changes

* Update minimum support for Testbench Core v6.28.1+. ([v6.28.0...v6.28.1](https://github.com/orchestral/testbench-core/compare/v6.28.0...v6.28.1))

#### Testbench Changes

##### Changes

* Update skeleton to match v8.6.11.

## 6.24.0

Released: 2022-01-13

### Changes

* Update minimum support for Testbench Core v6.28.0+. ([v6.27.4...v6.28.0](https://github.com/orchestral/testbench-core/compare/v6.27.4...v6.28.0))

#### Testbench Changes

##### Changes

* Allow package discoveries by adding `$enablesPacakgeDiscoveries = true` property.
* Allow to run `defineCacheRoute()` before application is ready.
* Support defining custom `$basePath` when using `Orchestra\Testbench\container` function.

## 6.23.2

Released: 2021-12-23

### Changes

* Update minimum support for Testbench Core v6.27.4+. ([v6.27.3...v6.27.4](https://github.com/orchestral/testbench-core/compare/v6.27.3...v6.27.4))

#### Testbench Changes

##### Changes

* Update skeleton to match v8.6.10.

## 6.23.1

Released: 2021-12-04

### Changes

* Update minimum support for Testbench Core v6.27.3+. ([v6.27.0...v6.27.3](https://github.com/orchestral/testbench-core/compare/v6.27.0...v6.27.3))

#### Testbench Changes

##### Changes

* Improves docblock.
* Update skeleton to match v8.6.8.

## 6.23.0

Released: 2021-11-10

### Changes

* Update minimum support for Testbench Core v6.27.0+. ([v6.26.0...v6.27.0](https://github.com/orchestral/testbench-core/compare/v6.26.0...v6.27.0))

#### Testbench Changes

##### Added

* Add ability to define database migrations using `TestCase::defineDatabaseMigrationsAfterDatabaseRefreshed()` method, the method will only be executed via `Illuminate\Database\Events\DatabaseRefreshed` event.
* Add ability to destroy database migrations using `TestCase::destroyDatabaseMigrations()`.

## 6.22.0

Released: 2021-10-21

### Changes

* Update minimum support for Testbench Core v6.26.0+. ([v6.25.2...v6.26.0](https://github.com/orchestral/testbench-core/compare/v6.25.2...v6.26.0))

#### Testbench Changes

##### Added

* Added draft support for PHP 8.1.
* Added `Orchestra\Testbench\container()` function to easily create an application instance.

##### Changes

* Update skeleton to match v8.6.4.
* Improves docblock.

## 6.21.1

Released: 2021-09-18

### Changes

* Update minimum support for Testbench Core v6.25.2+. ([v6.25.0...v6.25.2](https://github.com/orchestral/testbench-core/compare/v6.25.0...v6.25.2))

#### Testbench Changes

##### Changes

* Ability to use `App\Http\Kernel` and `App\Console\Kernel` via Commander if the class exists.

## 6.21.0

Released: 2021-09-08

### Changes

* Update minimum support for Testbench Core v6.25.0+. ([v6.24.1...v6.25.0](https://github.com/orchestral/testbench-core/compare/v6.24.1...v6.25.0))

#### Testbench Changes

##### Added

* Add ability to define database seeder using `TestCase::defineDatabaseSeeders()` method.

##### Changes

* Update skeleton to match v8.6.2.

## 6.20.1

Released: 2021-08-25

### Changes

* Update minimum support for Testbench Core v6.24.1+. ([v6.24.0...v6.24.1](https://github.com/orchestral/testbench-core/compare/v6.24.0...v6.24.1))

#### Testbench Changes

##### Changes

* Update skeleton to match v8.6.1.

## 6.20.0

Released: 2021-08-12

### Changes

* Update minimum support for Testbench Core v6.24.0+. ([v6.23.0...v6.24.0](https://github.com/orchestral/testbench-core/compare/v6.23.0...v6.24.0))

#### Testbench Changes

##### Changes

* Bump minimum `laravel/framework` to `8.54`.
* Update skeleton to match v8.5.24.

## 6.19.0

Released: 2021-07-01

### Changes

* Update minimum support for Testbench Core v6.23.0+. ([v6.22.0...v6.23.0](https://github.com/orchestral/testbench-core/compare/v6.22.0...v6.23.0))

#### Testbench Changes

##### Changes

* Improves generating cached routes during testing.
* Allows to loads `.env` when using `Orchestra\Testbench\Foundation\Application`.
* Update skeleton.

## 6.18.0

Released: 2021-05-25

### Changes

* Update minimum support for Testbench Core v6.22.0+. ([v6.21.3...v6.22.0](https://github.com/orchestral/testbench-core/compare/v6.21.3...v6.22.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Foundation\Application` to allow creating remote application using Testbench.
* Added static public method `Orchestra\Testbench\Concerns\CreatesApplication::applicationBasePath()` to replace `getBasePath()`.

##### Changes

* Update skeleton.

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
