# Changes for 8.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 8.21.1

Released: 2024-01-22

### Changes

* Update minimum support for Testbench Core v8.21.1+. ([v8.21.0...v8.21.1](https://github.com/orchestral/testbench-core/compare/v8.21.0...v8.21.1))

#### Testbench Changes

##### Changes

* Support nested configuration files.

##### Fixes

* Fixes issue with Livewire testing where calling `$router->getRoutes()->refreshActionLookups()` caused tests to fail.

## 8.21.0

Released: 2024-01-19

### Changes

* Update minimum support for Testbench Core v8.21.0+. ([v8.20.0...v8.21.0](https://github.com/orchestral/testbench-core/compare/v8.20.0...v8.21.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Attributes\WithImmutableDates` attribute to force `Illuminate\Support\Date` to use `Carbon\CarbonImmutable`.
* Added following helper functions:
    - `Orchestra\Testbench\default_skeleton_path`
    - `Orchestra\Testbench\refresh_router_lookups`

## 8.20.0

Released: 2024-01-10

### Changes

* Update minimum support for Testbench Core v8.20.0+. ([v8.19.0...v8.20.0](https://github.com/orchestral/testbench-core/compare/v8.19.0...v8.20.0))
* Bump minimum `laravel/framework` to `10.40.0`.

#### Testbench Changes

##### Added

* Flush error and exception handlers between tests using `Orchestra\Testbench\Bootstrap\HandleExceptions::forgetApp()` for PHPUnit 10.

##### Changes

* Run `route:cache` using `Orchestra\Testbench\remote` function.
* Add following traits to `setUpTheTestEnvironmentTraitToBeIgnored` method:
    - `Orchestra\Testbench\Concerns\InteractsWithPest`
    - `Orchestra\Testbench\Concerns\InteractsWithTestCase`

## 8.19.0

Released: 2023-12-28

### Changes

* Update minimum support for Testbench Core v8.19.0+. ([v8.18.0...v8.19.0](https://github.com/orchestral/testbench-core/compare/v8.18.0...v8.19.0))

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

* Bump minimum `laravel/framework` to `10.39.0`.
* Refactor `Orchestra\Testbench\Concerns\InteractsWithPHPUnit`.
* Utilise `Illuminate\Filesystem\join_paths` function.

##### Deprecated

* Deprecate `Orchestra\Testbench\Concerns\HandlesTestingFeature` trait.

## 8.18.0

Released: 2023-12-19

### Changes

* Update minimum support for Testbench Core v8.18.0+. ([v8.17.0...v8.18.0](https://github.com/orchestral/testbench-core/compare/v8.17.0...v8.18.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Attributes\RequiresEnv` attribute to force an environment variables to be required for the test.
* Added `Orchestra\Testbench\Attributes\WithConfig` attribute add a configuration value for the test.
* Added `Orchestra\Testbench\Attributes\WithEnv` attribute add an environment variable value for the test.
* Added `set()` and `forget()` methods to `Orchestra\Testbench\Foundation\Env`.
* Improves support for testing with Pest using `orchestra/pest-plugin-testbench`.

##### Changes

* Bump minimum `laravel/framework` to `10.37.3`.

## 8.17.0

Released: 2023-12-06

### Changes

* Update minimum support for Testbench Core v8.17.0+. ([v8.16.0...v8.17.0](https://github.com/orchestral/testbench-core/compare/v8.16.0...v8.17.0))

#### Testbench Changes

##### Added

* Supports Workbench `discovers.components` configuration.

##### Changes

* Sync `view.paths` configuration when Workbench discover views.

## 8.16.0

Released: 2023-12-04

### Changes

* Update minimum support for Testbench Core v8.16.0+. ([v8.15.0...v8.16.0](https://github.com/orchestral/testbench-core/compare/v8.15.0...v8.16.0))

##### Added

* Added `Orchestra\Testbench\Attributes\ResetRefreshDatabaseState` attribute to force refreshing database before executing the test.
* Added `Orchestra\Testbench\Foundation\Bootstrap\SyncDatabaseEnvironmentVariables` bootstrap class and allow database collation to be configurable via environment variables using `MYSQL_COLLATION`, `POSTGRES_COLLATION` and `MSSQL_COLLATION`.
* Added `encode()` method to `Orchestra\Testbench\Foundation\Env` class.

##### Changes

* Refactor handling attributes: 
  - Add ability to handle actions directly from the attribute.
  - Add ability to set `defer` when using `Orchestra\Testbench\Attributes\DefineDatabase`.
* Add `#[Override]` attribute to relevant methods, this require `symfony/polyfill-php83` as backward compatibility for PHP 8.1 and 8.2.
* Move `$setupHasRun` property to `Orchestra\Testbench\Concerns\ApplicationTestingHooks`.

##### Fixes

* Fixes registering discovery paths when the path doesn't exist.

##### Deprecated

* Deprecate `Orchestra\Testbench\Concerns\Database\HandlesConnections` trait.

## 8.15.0

Released: 2023-11-10

### Changes

* Update minimum support for Testbench Core v8.15.0+. ([v8.14.4...v8.15.0](https://github.com/orchestral/testbench-core/compare/v8.14.4...v8.15.0))

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

## 8.14.1

Released: 2023-11-07

### Changes

* Update minimum support for Testbench Core v8.14.4+. ([v8.14.0...v8.14.4](https://github.com/orchestral/testbench-core/compare/v8.14.0...v8.14.4))
* Add support for Workbench 8.0+.

## 8.14.0

Released: 2023-10-24

### Changes

* Update minimum support for Testbench Core v8.14.0+. ([v8.13.0...v8.14.0](https://github.com/orchestral/testbench-core/compare/v8.13.0...v8.14.0))
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

## 8.13.0

Released: 2023-10-09

### Changes

* Update minimum support for Testbench Core v8.13.0+. ([v8.12.0...v8.13.0](https://github.com/orchestral/testbench-core/compare/v8.12.0...v8.13.0))

#### Testbench Changes

##### Changes

* Code refactors.
* Mark `Orchestra\Testbench\Bootstrap\LoadEnvironmentVariables` class as `@internal`.

## 8.12.3

Released: 2023-10-08

### Changes

* Add support for Workbench 0.5.0+.

## 8.12.2

Released: 2023-10-03

### Changes

* Support Laravel Framework `10.26`.

## 8.12.1

Released: 2023-09-25

### Changes

* Support Laravel Framework `10.25`.

## 8.12.0

Released: 2023-09-25

### Changes

* Update minimum support for Testbench Core v8.12.0+. ([v8.11.1...v8.12.0](https://github.com/orchestral/testbench-core/compare/v8.11.1...v8.12.0))
* Update minimum support for Workbench 0.4.0+.

#### Testbench Changes

##### Added

* Added `cachedConfigurationForWorkbench()` to `Orchestra\Testbench\Concern\InteractsWithWorkbench` trait.
* Add the ability to read `TESTBENCH_WORKING_PATH` from environment variables for Testbench Dusk usage.
* Supports Workbench `discovers` configuration.
* Add the ability to properly forward Environment Variables.
* Add `usesSqliteInMemoryDatabaseConnection` to `Orchestra\Testbench\Concerns\HandlesDatabases` trait.

## 8.11.1

Released: 2023-09-20

### Changes

* Support Laravel Framework `10.24`.
* Update minimum support for Testbench Core v8.11.1+. ([v8.11.0...v8.11.1](https://github.com/orchestral/testbench-core/compare/v8.11.0...v8.11.1))

## 8.11.0

Released: 2023-09-19

### Changes

* Update minimum support for Laravel Framework `10.23.1`.
* Update minimum support for Testbench Core v8.11.0+. ([v8.10.0...v8.11.0](https://github.com/orchestral/testbench-core/compare/v8.10.0...v8.11.0))
* Update minimum support for Workbench 0.3.0+.

#### Testbench Changes

##### Added

* Added methods to `Orchestra\Testbench\Concerns\InteractsWithPublishedFiles` trait:
    - `assertMigrationFileExists`.
    - `assertMigrationFileNotExists`.

##### Changes

* Rename methods in `Orchestra\Testbench\Concerns\InteractsWithPublishedFiles` trait:
    - `cleanUpFiles` to `cleanUpPublishedFiles`.
    - `cleanUpMigrationFiles` to `cleanUpPublishedMigrationFiles`.
    - `getMigrationFile` to `findFirstPublishedMigrationFile`.
  
## 8.10.2

Released: 2023-09-12

### Changes

* Support Laravel Framework `10.23`.

## 8.10.1

Released: 2023-09-05

### Changes

* Support Laravel Framework `10.22`.

## 8.10.0

Released: 2023-08-29

### Changes

* Support Laravel Framework `10.21`.
* Update minimum support for Testbench Core v8.10.0+. ([v8.9.1...v8.10.0](https://github.com/orchestral/testbench-core/compare/v8.9.1...v8.10.0))

#### Testbench Changes

##### Added

* Add ability to automatically run default Laravel migrations using `Orchestra\Testbench\Concerns\WithLaravelMigrations`.
* Add Console Actions classes:
  - `Orchestra\Testbench\Foundation\Console\Actions\DeleteFiles`
  - `Orchestra\Testbench\Foundation\Console\Actions\DeleteDirectories`
  - `Orchestra\Testbench\Foundation\Console\Actions\EnsureDirectoryExists`
  - `Orchestra\Testbench\Foundation\Console\Actions\GeneratesFile`

## 8.9.1

Released: 2023-08-22

### Changes

* Support Laravel Framework `10.20`.
* Update minimum support for Testbench Core v8.9.1+. ([v8.9.0...v8.9.1](https://github.com/orchestral/testbench-core/compare/v8.9.0...v8.9.1))

#### Testbench Changes

##### Changes

* Allow using `$model` property override when extending `Orchestra\Testbench\Factories\UserFactory`.

## 8.9.0

Released: 2023-08-19

### Changes

* Update minimum support for Testbench Core v8.9.0+. ([v8.8.3...v8.9.0](https://github.com/orchestral/testbench-core/compare/v8.8.3...v8.9.0))

#### Testbench Changes

##### Added

* Added new `workbench.welcome` configuration option.

### Changes

* Allow `testbench.yaml` configuration fallback similar to `.env`.
* Utilise `Illuminate\Support\LazyCollection`.
* Skip loading `Orchestra\Workbench\WorkbenchServiceProvider` when applying `Orchestra\Testbench\Concerns\WithWorkbench`.

## 8.8.3

Released: 2023-08-17

### Changes

* Update minimum support for Testbench Core v8.8.3+. ([v8.8.2...v8.8.3](https://github.com/orchestral/testbench-core/compare/v8.8.2...v8.8.3))

#### Testbench Changes

##### Fixes

* Fixes configuration leak when running some TestCase without `Orchestra\Testbench\Concerns\WithWorkbench`.

## 8.8.2

Released: 2023-08-17

### Changes

* Update minimum support for Testbench Core v8.8.2+. ([v8.8.0...v8.8.2](https://github.com/orchestral/testbench-core/compare/v8.8.0...v8.8.2))

#### Testbench Changes

##### Added

* Readd deprecated `Orchestra\Testbench\Foundation\Console\DevToolCommand` for integration compatibility.

##### Changes

* Disable Composer default timeout when using `serve` command under Composer's script.

##### Removed

* Remove `Orchestra\Testbench\Workbench` classes and functionality is now provided from `orchestra/workbench`.

## 8.8.1

Released: 2023-08-15

### Changes

* Support Laravel Framework `10.19`.

## 8.8.0

Released: 2023-08-15

### Changes

* Update minimum support for Testbench Core v8.8.0+. ([v8.7.0...v8.8.0](https://github.com/orchestral/testbench-core/compare/v8.7.0...v8.8.0))

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

## 8.7.0

Released: 2023-08-12

### Changes

* Update minimum support for Testbench Core v8.7.0+. ([v8.6.2...v8.7.0](https://github.com/orchestral/testbench-core/compare/v8.6.2...v8.7.0))

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

## 8.6.3

Released: 2023-08-10

### Changes

* Update minimum support for Testbench Core v8.6.2+. ([v8.6.1...v8.6.2](https://github.com/orchestral/testbench-core/compare/v8.6.1...v8.6.2))

#### Testbench Changes

##### Fixes

* Fixes `app()->environment()` detection when creating application `Orchestra\Testbench\Concerns\CreatesApplication` outside of `PHPUnit`.
* Fixes error `Undefined array key "autoload-dev"` when executing `workbench:install` command.

## 8.6.2

Released: 2023-08-09

### Changes

* Update minimum support for Testbench Core v8.6.1+. ([v8.6.0...v8.6.1](https://github.com/orchestral/testbench-core/compare/v8.6.0...v8.6.1))

#### Testbench Changes

##### Added

* Add new `Orchestra\Testbench\Concerns\InteractsWithPHPUnit` to handle `CreatesApplication` within PHPUnit.

##### Fixes

* Fixes `workbench.start` path when accessing the `/` route return 404.
* Only Configure `TESTBENCH_APP_BASE_PATH` environment variable only when running under tests.

## 8.6.1

Released: 2023-08-08

### Changes

* Support Laravel Framework `10.18`.

## 8.6.0

Released: 2023-08-08

### Changes

* Update minimum support for Testbench Core v8.6.0+. ([v8.5.7...v8.6.0](https://github.com/orchestral/testbench-core/compare/v8.5.7...v8.6.0))

#### Testbench Changes

##### Added

* Added new Workbench support (experimental feature).
    - Register routes under `/_workbench` prefix.
    - Automatically run configured seeds when executing `migrate:fresh` and `migrate:refresh`
    - Bind `Orchestra\Testbench\Contracts\Config` to IoC Container and introduce the new `Orchestra\Testbench\workbench` and `Orchestra\Testbench\workbench_path` helper function.
    - Add `workbench:install`, `workbench:create-sqlite-db` and `workbench:drop-sqlite-db` commands.
* Add new `Orchestra\Testbench\Concerns\WithWorkbench` to automatically loads configuration from `testbench.yaml` when running tests.

##### Changes

* Bump minimum `laravel/framework` to `10.17.0`.

##### Deprecated

* Deprecated `package:devtool`, `package:create-sqlite-db` and `package:drop-sqlite-db` commands.

## 8.5.12

Released: 2023-08-01

### Changes

* Support Laravel Framework `10.17`.

## 8.5.11

Released: 2023-07-25

### Changes

* Support Laravel Framework `10.16`.

## 8.5.10

Released: 2023-07-11

### Changes

* Support Laravel Framework `10.15`.

## 8.5.9

Released: 2023-06-27

### Changes

* Bump minimum `laravel/framework` to `10.14.0`.

## 8.5.8

Released: 2023-06-14

### Changes

* Suspense support for Laravel Framework `10.14`.

## 8.5.7

Released: 2023-06-13

### Changes

* Bump minimum `laravel/framework` to `10.13.5`.
* Update minimum support for Testbench Core v8.5.7+. ([v8.5.6...v8.5.7](https://github.com/orchestral/testbench-core/compare/v8.5.6...v8.5.7))

## 8.5.6

Released: 2023-06-07

### Changes

* Support Laravel Framework `10.14`.
* Bump minimum `laravel/framework` to `10.10.0`.
* Update minimum support for Testbench Core v8.5.6+. ([v8.5.0...v8.5.6](https://github.com/orchestral/testbench-core/compare/v8.5.0...v8.5.6))

## 8.5.5

Released: 2023-05-30

### Changes

* Support Laravel Framework `10.13`.

## 8.5.4

Released: 2023-05-24

### Changes

* Support Laravel Framework `10.12`.

## 8.5.3

Released: 2023-05-16

### Changes

* Support Laravel Framework `10.11`.

## 8.5.2

Released: 2023-05-09

### Changes

* Support Laravel Framework `10.10`.

## 8.5.1

Released: 2023-04-25

### Changes

* Support Laravel Framework `10.9`.

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
