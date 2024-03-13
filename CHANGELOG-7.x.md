# Changes for 7.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 7.41.0

Released: 2024-03-13

### Changes

* Update minimum support for Testbench Core v7.42.0+. ([v7.40.1...v7.42.0](https://github.com/orchestral/testbench-core/compare/v7.40.1...v7.42.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Attributes\RequiresLaravel` attribute.
* Added `Orchestra\Testbench\Foundation\Env::has()` method.
* Added `Orchestra\Testbench\once()` function.
* Added `Orchestra\Testbench\load_migration_paths()` function.
* Added `usesRefreshDatabaseTestingConcern()` helper method to `Orchestra\Testbench\Concerns\InteractsWithTestCase` trait.

##### Changes

* Validate `MYSQL_*`, `MSSQL_*`, `SQLITE_*` and `POSTGRES_*` environment variables before trying to override the configuration values.
* Allow passing `$command` to `Orchestra\Testbench\remote()` function using `array` instead of just `string`.

##### Fixes

* Fixes `Orchestra\Testbench\Attributes\ResetRefreshDatabaseState` attribute declaration to only `Attribute::TARGET_CLASS`.

## 7.40.1

Released: 2024-01-19

### Changes

* Update minimum support for Testbench Core v7.40.1+. ([v7.40.0...v7.40.1](https://github.com/orchestral/testbench-core/compare/v7.40.0...v7.40.1))

#### Testbench Changes

##### Changes

* Support nested configuration files.

##### Fixes

* Fixes issue with Livewire testing where calling `$router->getRoutes()->refreshActionLookups()` caused tests to fail.

## 7.40.0

Released: 2024-01-19

### Changes

* Update minimum support for Testbench Core v7.40.0+. ([v7.39.0...v7.40.0](https://github.com/orchestral/testbench-core/compare/v7.39.0...v7.40.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Attributes\WithImmutableDates` attribute to force `Illuminate\Support\Date` to use `Carbon\CarbonImmutable`.
* Added following helper functions:
    - `Orchestra\Testbench\default_skeleton_path`
    - `Orchestra\Testbench\refresh_router_lookups`

## 7.39.0

Released: 2023-12-28

### Changes

* Update minimum support for Testbench Core v7.39.0+. ([v7.38.0...v7.39.0](https://github.com/orchestral/testbench-core/compare/v7.38.0...v7.39.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Features\TestingFeature` as replacement to `HandlesTestingFeature` trait.
* Added support for `LOG_DEPRECATIONS_WHILE_TESTING` (default to `true`) environment variables.
* Add following interfaces for Attribute handling:
    - `Orchestra\Testbench\Contracts\Attributes\AfterAll`
    - `Orchestra\Testbench\Contracts\Attributes\AfterEach`
    - `Orchestra\Testbench\Contracts\Attributes\BeforeAll`
    - `Orchestra\Testbench\Contracts\Attributes\BeforeEach`

##### Changes

* Refactor `Orchestra\Testbench\Concerns\InteractsWithPHPUnit`.

##### Deprecated

* Deprecate `Orchestra\Testbench\Concerns\HandlesTestingFeature` trait.

## 7.38.0

Released: 2023-12-19

### Changes

* Update minimum support for Testbench Core v7.38.0+. ([v7.37.0...v7.38.0](https://github.com/orchestral/testbench-core/compare/v7.37.0...v7.38.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Attributes\RequiresEnv` attribute to force an environment variables to be required for the test.
* Added `Orchestra\Testbench\Attributes\WithConfig` attribute add a configuration value for the test.
* Added `Orchestra\Testbench\Attributes\WithEnv` attribute add an environment variable value for the test.
* Added `set()` and `forget()` methods to `Orchestra\Testbench\Foundation\Env`.

## 7.37.0

Released: 2023-12-06

### Changes

* Update minimum support for Testbench Core v7.37.0+. ([v7.36.0...v7.37.0](https://github.com/orchestral/testbench-core/compare/v7.36.0...v7.37.0))

#### Testbench Changes

##### Added

* Supports Workbench `discovers.components` configuration.

##### Changes

* Sync `view.paths` configuration when Workbench discover views.

## 7.36.0

Released: 2023-12-04

### Changes

* Update minimum support for Testbench Core v7.36.0+. ([v7.35.0...v7.36.0](https://github.com/orchestral/testbench-core/compare/v7.35.0...v7.36.0))

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

## 7.35.0

Released: 2023-10-24

### Changes

* Update minimum support for Testbench Core v7.35.0+. ([v7.34.0...v7.35.0](https://github.com/orchestral/testbench-core/compare/v7.34.0...v7.35.0))

#### Testbench Changes

##### Added

* Added new PHPUnit Attribute to run the default `laravel`, `cache`, `notifications`, `queue` and `session` database migrations using `Orchestra\Testbench\Attributes\WithMigration`.
* Added `Orchestra\Testbench\defined_environment_variables()` function.
* Added `Orchestra\Testbench\laravel_migration_path()` function.
* Added `Orchestra\Testbench\remote()` function.

##### Changes

* Mark the following classes as `@api`:
    - `Orchestra\Testbench\Foundation\Application`
    - `Orchestra\Testbench\Foundation\Config`
    - `Orchestra\Testbench\Foundation\Env`
* Cache results from `Orchestra\Testbench\PHPUnit\AttributeParser`.

## 7.34.1

Released: 2023-11-07

### Changes

* Add support for Workbench 7.0+.

## 7.34.0

Released: 2023-10-24

### Changes

* Update minimum support for Testbench Core v7.34.0+. ([v7.33.0...v7.34.0](https://github.com/orchestral/testbench-core/compare/v7.33.0...v7.34.0))
* Add support for Workbench 1.0+.

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Workbench\Workbench` to handle integrations with Workbench.
* Added `Orchestra\Testbench\Foundation\Config::getWorkbenchDiscoversAttributes()` method.
* Added `Orchestra\Testbench\Concerns\Database\InteractsWithSqliteDatabaseFile` trait.
* Added following methods to `Orchestra\Testbench\Foundation\Application`:
  - `make()`
  - `makeFromConfig()`
  - `createFromConfig()`
* Added support for PHPUnit Attribute as replacements to Annotations:
  - `@define-env` and `@environment-setup` will be replaced with `Orchestra\Testbench\Attributes\DefineEnvironment`.
  - `@define-db` will be replaced with `Orchestra\Testbench\Attributes\DefineDatabase`.
  - `@define-route` will be replaced with `Orchestra\Testbench\Attributes\DefineRoute`.

##### Fixes

* Fixes generating path using `Orchestra\Testbench\package_path()` and `Orchestra\Testbench\workbench_path()`.

##### Deprecated

* Deprecate `Orchestra\Testbench\Concerns\WithFactories`.

##### Removed

* Remove `Orchestra\Testbench\Foundation\Bootstrap\StartWorkbench`, use `Orchestra\Testbench\Workbench\Workbench::start()` or `Orchestra\Testbench\Workbench\Workbench::startWithProviders()` instead.

## 7.33.0

Released: 2023-10-09

### Changes

* Update minimum support for Testbench Core v7.33.0+. ([v7.32.0...v7.33.0](https://github.com/orchestral/testbench-core/compare/v7.32.0...v7.33.0))
* Add support for Workbench 0.5.0+.

#### Testbench Changes

##### Changes

* Code refactors.
* Mark `Orchestra\Testbench\Bootstrap\LoadEnvironmentVariables` class as `@internal`.

## 7.32.0

Released: 2023-09-25

### Changes

* Update minimum support for Testbench Core v7.32.0+. ([v7.31.0...v7.32.0](https://github.com/orchestral/testbench-core/compare/v7.31.0...v7.32.0))
* Update minimum support for Workbench 0.4.0+.

#### Testbench Changes

##### Added

* Added `cachedConfigurationForWorkbench()` to `Orchestra\Testbench\Concern\InteractsWithWorkbench` trait.
* Add the ability to read `TESTBENCH_WORKING_PATH` from environment variables for Testbench Dusk usage.
* Supports Workbench `discovers` configuration.
* Add the ability to properly forward Environment Variables.
* Add `usesSqliteInMemoryDatabaseConnection` to `Orchestra\Testbench\Concerns\HandlesDatabases` trait.

## 7.31.0

Released: 2023-09-19

### Changes

* Update minimum support for Testbench Core v7.31.0+. ([v7.30.0...v7.31.0](https://github.com/orchestral/testbench-core/compare/v7.30.0...v7.31.0))
* Update minimum support for Workbench 0.3.0+.

#### Testbench Changes

##### Added

* Added methods to `Orchestra\Testbench\Concerns\InteractsWithPublishedFiles` trait:
    - `assertMigrationFileExists`.
    - `assertMigrationFileNotExists`.

##### Changes

* Allow passing wildcard filenames to `Orchestra\Testbench\Concerns\InteractsWithPublishedFiles::$files` property.
* Allow using custom directory on `assertMigrationFileContains` and `assertMigrationFileNotContains` from `Orchestra\Testbench\Concerns\InteractsWithPublishedFiles` trait.
* Rename methods in `Orchestra\Testbench\Concerns\InteractsWithPublishedFiles` trait:
    - `cleanUpFiles` to `cleanUpPublishedFiles`.
    - `cleanUpMigrationFiles` to `cleanUpPublishedMigrationFiles`.
    - `getMigrationFile` to `findFirstPublishedMigrationFile`.

## 7.30.0

Released: 2023-08-29

### Changes

* Update minimum support for Testbench Core v7.30.0+. ([v7.29.1...v7.30.0](https://github.com/orchestral/testbench-core/compare/v7.29.1...v7.30.0))

#### Testbench Changes

##### Added

* Add ability to automatically run default Laravel migrations using `Orchestra\Testbench\Concerns\WithLaravelMigrations`.
* Add Console Actions classes:
  - `Orchestra\Testbench\Foundation\Console\Actions\DeleteFiles`
  - `Orchestra\Testbench\Foundation\Console\Actions\DeleteDirectories`
  - `Orchestra\Testbench\Foundation\Console\Actions\EnsureDirectoryExists`
  - `Orchestra\Testbench\Foundation\Console\Actions\GeneratesFile`

## 7.29.1

Released: 2023-08-22

### Changes

* Update minimum support for Testbench Core v7.29.1+. ([v7.29.0...v7.29.1](https://github.com/orchestral/testbench-core/compare/v7.29.0...v7.29.1))

#### Testbench Changes

##### Changes

* Allow using `$model` property override when extending `Orchestra\Testbench\Factories\UserFactory`.

## 7.29.0

Released: 2023-08-19

### Changes

* Update minimum support for Testbench Core v7.29.0+. ([v7.28.3...v7.29.0](https://github.com/orchestral/testbench-core/compare/v7.28.3...v7.29.0))

#### Testbench Changes

##### Added

* Added new `workbench.welcome` configuration option.

##### Changes

* Allow `testbench.yaml` configuration fallback similar to `.env`.
* Utilise `Illuminate\Support\LazyCollection`.
* Skip loading `Orchestra\Workbench\WorkbenchServiceProvider` when applying `Orchestra\Testbench\Concerns\WithWorkbench`.

## 7.28.2

Released: 2023-08-17

### Changes

* Update minimum support for Testbench Core v7.28.3+. ([v7.28.2...v7.28.3](https://github.com/orchestral/testbench-core/compare/v7.28.2...v7.28.3))

#### Testbench Changes

##### Fixes

* Fixes configuration leak when running some TestCase without `Orchestra\Testbench\Concerns\WithWorkbench`.

## 7.28.1

Released: 2023-08-17

### Changes

* Update minimum support for Testbench Core v7.28.2+. ([v7.28.0...v7.28.2](https://github.com/orchestral/testbench-core/compare/v7.28.0...v7.28.2))

#### Testbench Changes

##### Added

* Readd deprecated `Orchestra\Testbench\Foundation\Console\DevToolCommand` for integration compatibility.

##### Changes

* Disable Composer default timeout when using `serve` command under Composer's script.

## 7.28.0

Released: 2023-08-15

### Changes

* Update minimum support for Testbench Core v7.28.0+. ([v7.27.0...v7.28.0](https://github.com/orchestral/testbench-core/compare/v7.27.0...v7.28.0))

#### Testbench Changes

##### Added

* Added `package:purge-skeleton` command.
* Added `Orchestra\Testbench\Concerns\Database\InteractsWithSqliteDatabaseFile` trait.
* Added `Orchestra\Testbench\package_path()` function.
* Added support for `orchestra/workbench`.

##### Changes

* Rename `Orchestra\Testbench\Workbench\Bootstrap\StartWorkbench` to `Orchestra\Testbench\Foundation\Bootstrap\StartWorkbench`.

##### Fixes

* Fixes `serve` command usage.
* Fixes class namespace.

## 7.27.0

Released: 2023-08-12

### Changes

* Update minimum support for Testbench Core v7.27.0+. ([v7.26.2...v7.27.0](https://github.com/orchestral/testbench-core/compare/v7.26.2...v7.27.0))

#### Testbench Changes

##### Added

* Added following events:
    - `Orchestra\Testbench\Foundation\Events\ServeCommandStarted`
    - `Orchestra\Testbench\Foundation\Events\ServeCommandEnded`
    - `Orchestra\Testbench\Workbench\Events\WorkbenchInstallStarted`
    - `Orchestra\Testbench\Workbench\Events\WorkbenchInstallEnded`

##### Changes

* Change `HandlesRoutes` loading sequence to match common Laravel bootstrap steps.
* Refactor `HandlesAnnotations` and `InteractsWithPHPUnit` traits.
* Workbench integration improvements.
* Update `workbench` configuration schema.

##### Fixes

* Fixes `Illuminate\Foundation\Application::runningUnitTests()` detection.

## 7.26.2

Released: 2023-08-10

### Changes

* Bump minimum `laravel/framework` to `9.52.15`.
* Update minimum support for Testbench Core v7.26.2+. ([v7.26.1...v7.26.2](https://github.com/orchestral/testbench-core/compare/v7.26.1...v7.26.2))

#### Testbench Changes

##### Fixes

* Fixes `app()->environment()` detection when creating application `Orchestra\Testbench\Concerns\CreatesApplication` outside of `PHPUnit`.
* Fixes error `Undefined array key "autoload-dev"` when executing `workbench:install` command.

## 7.26.1

Released: 2023-08-09

### Changes

* Update minimum support for Testbench Core v7.26.1+. ([v7.26.0...v7.26.1](https://github.com/orchestral/testbench-core/compare/v7.26.0...v7.26.1))

#### Testbench Changes

##### Added

* Add new `Orchestra\Testbench\Concerns\InteractsWithPHPUnit` to handle `CreatesApplication` within PHPUnit.

##### Fixes

* Fixes `workbench.start` path when accessing the `/` route return 404.
* Only Configure `TESTBENCH_APP_BASE_PATH` environment variable only when running under tests.

## 7.26.0

Released: 2023-08-08

### Changes

* Update minimum support for Testbench Core v7.26.0+. ([v7.25.0...v7.26.0](https://github.com/orchestral/testbench-core/compare/v7.25.0...v7.26.0))

#### Testbench Changes

##### Added

* Added new Workbench support (experimental feature).
    - Register routes under `/_workbench` prefix.
    - Automatically run configured seeds when executing `migrate:fresh` and `migrate:refresh`
    - Bind `Orchestra\Testbench\Contracts\Config` to IoC Container and introduce the new `Orchestra\Testbench\workbench` and `Orchestra\Testbench\workbench_path` helper function.
    - Add `workbench:install`, `workbench:create-sqlite-db` and `workbench:drop-sqlite-db` commands.
* Add new `Orchestra\Testbench\Concerns\WithWorkbench` to automatically loads configuration from `testbench.yaml` when running tests.

##### Deprecated

* Deprecated `package:devtool`, `package:create-sqlite-db` and `package:drop-sqlite-db` commands.

## 7.25.0

Released: 2023-06-13

### Changes

* Update minimum support for Testbench Core v7.25.0+. ([v7.24.1...v7.25.0](https://github.com/orchestral/testbench-core/compare/v7.24.1...v7.25.0))

#### Testbench Changes

##### Added

* `Orchestra\Testbench\Bootstrap\LoadEnvironmentVariables` to manage loading `.env` file during tests, backport from Testbench Core 8 releases.

##### Changes

* Bump minimum `laravel/framework` to `9.52.9`.
* Automate registering `tearDownInteractsWithPublishedFiles()` from `setUpInteractsWithPublishedFiles()` method.

## 7.24.1

Released: 2023-04-03

### Changes

* Update minimum support for Testbench Core v7.24.1+. ([v7.24.0...v7.24.1](https://github.com/orchestral/testbench-core/compare/v7.24.0...v7.24.1))

#### Testbench Changes

##### Fixes

* Fixes `Orchestra\Testbench\Foundation\Config::addProviders()` usage.
* Fixes `Orchestra\Testbench\transform_relative_path()` logic.

## 7.24.0

Released: 2023-04-01

### Changes

* Update minimum support for Testbench Core v7.24.0+. ([v7.23.0...v7.24.0](https://github.com/orchestral/testbench-core/compare/v7.23.0...v7.24.0))

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

## 7.23.0

Released: 2023-03-27

### Changes

* Update minimum support for Testbench Core v7.23.0+. ([v7.22.2...v7.23.0](https://github.com/orchestral/testbench-core/compare/v7.22.2...v7.23.0))

#### Testbench Changes

##### Added

* Add supports for `setup<Concern>` and `teardown<Concern>` with imported traits.

-------------

> **Warning**: Breaking change is possible if your package contains any traits with `setup<TraitClassName>` or `teardown<TraitClassName>`
>
> This version now will automatically run those methods during application bootstrap and terminate to be consistent with Laravel Framework implementations.

## 7.22.2

Released: 2023-03-23

### Changes

* Update minimum support for Testbench Core v7.22.2+. ([v7.22.1...v7.22.2](https://github.com/orchestral/testbench-core/compare/v7.22.1...v7.22.2))

#### Testbench Changes

##### Fixes

* Avoid database connection from eager loaded via `spatie/laravel-ray`.

## 7.22.1

Released: 2023-02-08

### Changes

* Update minimum support for Testbench Core v7.22.1+. ([v7.22.0...v7.22.1](https://github.com/orchestral/testbench-core/compare/v7.22.0...v7.22.1))

## 7.22.0

Released: 2023-02-08

### Changes

* Update minimum support for Testbench Core v7.22.0+. ([v7.21.0...v7.22.0](https://github.com/orchestral/testbench-core/compare/v7.21.0...v7.22.0))

#### Testbench Changes

##### Changes

* Improve `package:test --parallel` command usage.
* Use `$app->bootstrapPath()` instead of `$app->basePath('bootstrap')` whenever possible.

## 7.21.0

Released: 2023-02-03

### Changes

* Update minimum support for Testbench Core v7.21.0+. ([v7.20.0...v7.21.0](https://github.com/orchestral/testbench-core/compare/v7.20.0...v7.21.0))

#### Testbench Changes

##### Added

* Added support for `Illuminate\Foundation\Testing\DatabaseTruncation`.

##### Changes

* Bump minimum `laravel/framework` to `9.50.2`.

## 7.20.0

Released: 2023-02-01

### Changes

* Update minimum support for Testbench Core v7.20.0+. ([v7.19.0...v7.20.0](https://github.com/orchestral/testbench-core/compare/v7.19.0...v7.20.0))

#### Testbench Changes

##### Changes

* Improves `package:test` commands.
* Update skeleton to match v9.5.2.

## 7.19.0

Released: 2023-01-10

### Changes

* Update minimum support for Testbench Core v7.19.0+. ([v7.18.0...v7.19.0](https://github.com/orchestral/testbench-core/compare/v7.18.0...v7.19.0))

#### Testbench Changes

##### Added

* Added `Illuminate\Foundation\Testing\InteractsWithDeprecationHandling` to `Orchestra\Testbench\TestCase`.

## 7.18.0

Released: 2023-01-04

### Changes

* Update minimum support for Testbench Core v7.18.0+. ([v7.17.0...v7.18.0](https://github.com/orchestral/testbench-core/compare/v7.17.0...v7.18.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\laravel_version_compare` function as alias to `version_compare` specifically for Laravel Framework.
* Added `Orchestra\Testbench\phpunit_version_compare` function as alias to `version_compare` specifically for PHPUnit.
* Added `Orchestra\Testbench\Exceptions\PHPUnitErrorException` class.

##### Changes

* Mark `Orchestra\Testbench\Bootstrap\ConfigureRay` class as `final`.
* Refactor `Orchestra\Testbench\Concerns\HandlesAnnotations` trait.

## 7.17.0

Released: 2022-12-22

### Changes

* Update minimum support for Testbench Core v7.17.0+. ([v7.16.0...v7.17.0](https://github.com/orchestral/testbench-core/compare/v7.16.0...v7.17.0))

#### Testbench Changes

##### Changes

* Bump minimum `laravel/framework` to `9.45.0`.
* Update skeleton to match v9.4.1.

## 7.16.0

Released: 2022-12-17

### Changes

* Update minimum support for Testbench Core v7.16.0+. ([v7.15.0...v7.16.0](https://github.com/orchestral/testbench-core/compare/v7.15.0...v7.16.0))

#### Testbench Changes

##### Added

* Added `resolveApplicationEnvironmentVariables()` method.
* Added `Orchestra\Testbench\Bootstrap\HandleExceptions` bootstrap to allow catching deprecation errors during tests.
  - Throws `Orchestra\Testbench\Exceptions\DeprecatedException` exception when deprecation occured.
  - Set `logging.deprecations.trace` to `true`.
  - Set deprecations log file to `storage/logs/deprecations.log` when `LOG_DEPRECATIONS_CHANNEL=single`.

##### Changes

* Bump minimum `laravel/framework` to `9.44.0`.

## 7.15.0

Released: 2022-11-30

### Changes

* Update minimum support for Testbench Core v7.15.0+. ([v7.14.1...v7.15.0](https://github.com/orchestral/testbench-core/compare/v7.14.1...v7.15.0))

#### Testbench Changes

##### Changes

* Bump minimum `laravel/framework` to `9.41.0`.

## 7.14.1

Released: 2022-11-29

### Changes

* Update minimum support for Testbench Core v7.14.1+. ([v7.14.0...v7.14.1](https://github.com/orchestral/testbench-core/compare/v7.14.0...v7.14.1))

#### Testbench Changes

##### Fixes

* Fixes `serve` command with `no-reload` options.

## 7.14.0

Released: 2022-11-23

### Changes

* Update minimum support for Testbench Core v7.14.0+. ([v7.13.0...v7.14.0](https://github.com/orchestral/testbench-core/compare/v7.13.0...v7.14.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Exceptions\ApplicationNotAvailableException` exception when trying to access `$this->app` outside of booted application.
* Added `tests/CreatesApplication.php` to skeleton.

##### Changes

* Update skeleton to match v9.3.11.

## 7.13.0

Released: 2022-11-14

### Changes

* Update minimum support for Testbench Core v7.13.0+. ([v7.12.1...v7.13.0](https://github.com/orchestral/testbench-core/compare/v7.12.1...v7.13.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Bootstrap\ConfigureRay` and use it when creating Application.

## 7.12.1

Released: 2022-11-12

### Changes

* Update minimum support for Testbench Core v7.12.1+. ([v7.12.0...v7.12.1](https://github.com/orchestral/testbench-core/compare/v7.12.0...v7.12.1))

#### Testbench Changes

##### Fixes

* Fixes where the default database connection as `sqlite` causes an exception when the database file isn't available. The loaded application should revert to `testing` database connection for the state.

## 7.12.0

Released: 2022-11-12

### Changes

* Update minimum support for Testbench Core v7.12.0+. ([v7.11.0...v7.12.0](https://github.com/orchestral/testbench-core/compare/v7.11.0...v7.12.0))

#### Testbench Changes

##### Added

* Added support for `about` artisan command.
* Added `package:devtool` to generate `.env`, `testbench.yaml` and `database.sqlite` file.
* Added `package:create-sqlite-db` and `package:drop-sqlite-db` command.
* Improves support for `serve` command.

## 7.11.0

Released: 2022-10-19

### Changes

* Update minimum support for Testbench Core v7.11.0+. ([v7.10.2...v7.11.0](https://github.com/orchestral/testbench-core/compare/v7.10.2...v7.11.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Foundation\Application::createVendorSymlink()` method.
  - The feature uses `Orchestra\Testbench\Foundation\Bootstrap\CreateVendorSymlink`.

##### Changes

* Bump minimum `laravel/framework` to `9.36.0`
  - Forget View Component's cache and factory between tests.

## 7.10.2

Released: 2022-10-14

### Changes

* Update minimum support for Testbench Core v7.10.2+. ([v7.10.1...v7.10.2](https://github.com/orchestral/testbench-core/compare/v7.10.1...v7.10.2))

#### Testbench Changes

##### Fixes

* Don't attempt to discover any packages on vendor symlink event.
## 7.10.1

Released: 2022-10-11

### Changes

* Update minimum support for Testbench Core v7.10.1+. ([v7.10.0...v7.10.1](https://github.com/orchestral/testbench-core/compare/v7.10.0...v7.10.1))

#### Testbench Changes

##### Fixes

* Remove `bootstrap/cache/packages.php` on vendor symlink event.

## 7.10.0

Released: 2022-10-11

### Changes

* Update minimum support for Testbench Core v7.10.0+. ([v7.9.0...v7.10.0](https://github.com/orchestral/testbench-core/compare/v7.9.0...v7.10.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Foundation\Config` to read Yaml file from `testbench.yaml`.

## 7.9.0

Released: 2022-10-05

### Changes

* Update minimum support for Testbench Core v7.9.0+. ([v7.8.1...v7.9.0](https://github.com/orchestral/testbench-core/compare/v7.8.1...v7.9.0))

#### Testbench Changes

##### Added

* Added draft support for PHP 8.2.

##### Changes

* Bump minimum `laravel/framework` to `9.34.0`.
* Bump minimum `mockery/mockery` to `1.5.1`.
* Bump minimum `symfony` dependencies to `6.0.9`.

## 7.8.1

Released: 2022-10-03

### Changes

* Update minimum support for Testbench Core v7.8.1+. ([v7.8.0...v7.8.1](https://github.com/orchestral/testbench-core/compare/v7.8.0...v7.8.1))

#### Testbench Changes

##### Fixes

* Fixes missing `Illuminate\Support\Arr` import on `HandlesTestFailures` trait.

## 7.8.0

Released: 2022-09-28

### Changes

* Update minimum support for Testbench Core v7.8.0+. ([v7.7.1...v7.8.0](https://github.com/orchestral/testbench-core/compare/v7.7.1...v7.8.0))

#### Testbench Changes

##### Changes

* Bump minimum `laravel/framework` to `9.32.0`.
* Improves PHPUnit memory leaks.

## 7.7.1

Released: 2022-09-28

### Changes

* Update minimum support for Testbench Core v7.7.1+. ([v7.7.0...v7.7.1](https://github.com/orchestral/testbench-core/compare/v7.7.0...v7.7.1))

#### Testbench Changes

##### Changes

* Update skeleton to match v9.3.8.

## 7.7.0

Released: 2022-08-10

### Changes

* Update minimum support for Testbench Core v7.7.0+. ([v7.6.1...v7.7.0](https://github.com/orchestral/testbench-core/compare/v7.6.1...v7.7.0))

#### Testbench Changes

##### Added

* Added `loadLaravelMigrationsWithoutRollback()` and `runLaravelMigrationsWithoutRollback()` helpers.

##### Changes

* Update skeleton to match v9.3.5.

## 7.6.1

Released: 2022-08-10

### Changes

* Update minimum support for Testbench Core v7.6.1+. ([v7.6.0...v7.6.1](https://github.com/orchestral/testbench-core/compare/v7.6.0...v7.6.1))

#### Testbench Changes

##### Changes

* Update skeleton to match v9.3.3.

## 7.6.0

Released: 2022-06-30

### Changes

* Update minimum support for Testbench Core v7.6.0+. ([v7.5.0...v7.6.0](https://github.com/orchestral/testbench-core/compare/v7.5.0...v7.6.0))

#### Testbench Changes

##### Changes

* Bump minimum `laravel/framework` to `9.12.0`.
* Update skeleton to match v9.2.0.

## 7.5.0

Released: 2022-05-11

### Changes

* Update minimum support for Testbench Core v7.5.0+. ([v7.4.0...v7.5.0](https://github.com/orchestral/testbench-core/compare/v7.4.0...v7.5.0))

#### Testbench Changes

##### Changes

* Bump minimum `laravel/framework` to `9.12.0`.
* Update skeleton to match v9.1.8.

## 7.4.0

Released: 2022-04-13

### Changes

* Update minimum support for Testbench Core v7.4.0+. ([v7.3.0...v7.4.0](https://github.com/orchestral/testbench-core/compare/v7.3.0...v7.4.0))

#### Testbench Changes

##### Changes

* Bump minimum `laravel/framework` to `9.7.0`.
* Add support for `--drop-databases` on `package:test` command.
* Update skeleton to match v9.1.5.

## 7.3.0

Released: 2022-03-30

### Changes

* Update minimum support for Testbench Core v7.3.0+. ([v7.2.0...v7.3.0](https://github.com/orchestral/testbench-core/compare/v7.2.0...v7.3.0))

#### Testbench Changes

##### Changes

* Bump minimum `laravel/framework` to `9.6.0`.
* Update skeleton to match v9.1.3.

## 7.2.0

Released: 2022-03-20

### Changes

* Update minimum support for Testbench Core v7.2.0+. ([v7.1.0...v7.2.0](https://github.com/orchestral/testbench-core/compare/v7.1.0...v7.2.0))

#### Testbench Changes

##### Changes

* Bump minimum `laravel/framework` to `9.5.1`.
* Update skeleton to match v9.1.1.

## 7.1.0

Released: 2022-02-22

### Changes

* Update minimum support for Testbench Core v7.1.0+. ([v7.0.2...v7.1.0](https://github.com/orchestral/testbench-core/compare/v7.0.2...v7.1.0))

#### Testbench Changes

##### Changes

* Bump minimum `laravel/framework` to `9.2`.
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
