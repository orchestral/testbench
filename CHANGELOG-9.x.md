# Changes for 9.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 9.17.0

Released: 2026-03-18

### Changes

* Update minimum support for Testbench Core v9.20.0+. ([v9.18.0...v9.20.0](https://github.com/orchestral/testbench-core/compare/v9.18.0...v9.20.0))

#### Testbench Changes

### Changes

* Supports for Laravel Framework 11.50.0.
* Supports PHPUnit 12.4 and 12.5.
* Run seeder when `testbench.yaml` configured with `seeders: true`.
* Use predefined `$__filename` to resolve original PestPHP's testCase file.

### Fixes

* Fix `--parallel` compatibility with `WithFixtures` trait.
* Fix `#[UsesVendor]` attribute fails due to unbooted application, causing `BindingResolutionException` to be thrown.

## 9.16.0

Released: 2026-01-14

### Changes

* Update minimum support for Testbench Core v9.18.0+. ([v9.16.0...v9.18.0](https://github.com/orchestral/testbench-core/compare/v9.16.0...v9.18.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\terminate()` and `Orchestra\Testbench\bail()` function to allow using `exit()` on `pnctl` enabled tests.
* Add `Orchestra\Testbench\uses_default_skeleton()` function.
* Supports flushing `Illuminate\Validator\Validator` state.
* Add `Orchestra\Testbench\package_version_compare()` function.
* Add `Orchestra\Testbench\Concerns\WithFixtures` to automatically loads fixtures file for test.

##### Changes

* Ability to merge Framework configurations when using custom skeleton.
* Support disabling Laravel default service providers.
* Flush `Illuminate\Support\Str` states via during test teardown.
* Use `Orchestra\Sidekick\package_path()` for better root package path detection.

##### Fixes

* fix loading framework configuration for `laravel/framework` repository.

## 9.15.0

Released: 2025-08-20

### Changes

* Update minimum support for Testbench Core v9.16.0+. ([v9.14.0...v9.16.0](https://github.com/orchestral/testbench-core/compare/v9.14.0...v9.16.0))

#### Testbench Changes

##### Changes

* Supports for Laravel Framework 11.45.2 or above (fixed integration with PHPUnit 12.3.4).
* Supports PHPUnit 12.2 and 12.3.
* Remove temporary SQLite database files available via `journal_mode` configuration.
* Convert `Collection::make()` to `new Collection()`.

## 9.14.0

Released: 2025-04-27

### Changes

* Update minimum support for Testbench Core v9.14.0+. ([v9.13.3...v9.14.0](https://github.com/orchestral/testbench-core/compare/v9.13.3...v9.14.0))

#### Testbench Changes

##### Changes

* `Orchestra\Testbench\PHPUnit\TestCase` now implements `Orchestra\Testbench\Concerns\InteractsWithMockery`.

##### Fixes

* Fix handling deprecations logging when logger is not not available when running tests.

## 9.13.1

Released: 2025-04-27

### Changes

* Update minimum support for Testbench Core v9.13.3+. ([v9.13.0...v9.13.3](https://github.com/orchestral/testbench-core/compare/v9.13.0...v9.13.3))

#### Testbench Changes

##### Changes

* Supports for Laravel Framework 11.44.7.
* Flush `Illuminate\Database\Eloquent\Model` states between tests.

## 9.13.0

Released: 2025-04-06

### Changes

* Update minimum support for Testbench Core v9.13.0+. ([v9.12.0...v9.13.0](https://github.com/orchestral/testbench-core/compare/v9.12.0...v9.13.0))

#### Testbench Changes

##### Added

* Add ability to pass `Closure` to `Orchestra\Testbench\remote()` function.

##### Changes

* Add support for PHPUnit 12.1.
* Refactor `Orchestra\Testbench\remote()` function to use `Orchestra\Testbench\Foundation\Process\RemoteCommand`.
* Rename `TESTBENCH_ENVIRONMENT_FILE_USING` to `TESTBENCH_ENVIRONMENT_FILE_USING` (internal environment variable).

## 9.12.0

Released: 2025-03-06

### Changes

* Update minimum support for Testbench Core v9.12.0+. ([v9.11.0...v9.12.0](https://github.com/orchestral/testbench-core/compare/v9.11.0...v9.12.0))

#### Testbench Changes

##### Added

* Added `resolvePhpUnitTestClassName()` and `resolvePhpUnitTestMethodName()` to `Orchestra\Testbench\Concerns\InteractsWithPHPUnit` trait.

##### Changes

* Allows `usesTestingFeature()` to register attribute directly on test method.
* Improves `vendor` detection on the default skeleton.
* Utilise `Orchestra\Sidekick\is_symlink()` function instead of `is_link()` to improves support on Windows.
* Use `::class` instead of `get_class()`.
* Delete `vendor` symlink via `package:purge-skeleton` command.

##### Fixes

* Fix static variable via `Orchestra\Testbench\Attributes\UsesVendor::beforeEach()` method.

##### Deprecate

* Deprecate following PHPUnit annotations:
  - `@environment-setup`
  - `@define-env`
  - `@define-database`
  - `@define-route`

## 9.11.0

Released: 2025-02-19

### Changes

* Update minimum support for Testbench Core v9.11.0+. ([v9.10.0...v9.11.0](https://github.com/orchestral/testbench-core/compare/v9.10.0...v9.11.0))

#### Testbench Changes

##### Added

* Use `orchestra/sidekick`.
* Implements `Illuminate\Foundation\Testing\Concerns\InteractsWithViews`.

##### Changes

* Supports for Laravel Framework 11.43.0.

##### Deprecated

* Re-add deprecated `getBasePath()` method pending removal in Testbench 10.0.

## 9.10.0

Released: 2025-02-15

### Changes

* Update minimum support for Testbench Core v9.10.0+. ([v9.9.0...v9.10.0](https://github.com/orchestral/testbench-core/compare/v9.9.0...v9.10.0))

#### Testbench Changes

##### Added

* Add `Orchestra\Testbench\Concerns\CreatesApplication::resolveApplicationFacades()` method.
* Add `Orchestra\Testbench\Concerns\CreatesApplication::getApplicationBasePath()` method as replacement to `Orchestra\Testbench\Concerns\CreatesApplication::getBasePath()`.
* Add `Orchestra\Testbench\Foundation\Application::deleteVendorSymlink()` method.

### Changes

* Dynamically resolve workbench namespace for `discover.factories`.
* Clear `vendor` symlink when terminating Testbench CLI.
* Update `config/database.php` skeleton file.

## 9.9.0

Released: 2024-12-26

### Changes

* Update minimum support for Testbench Core v9.9.0+. ([v9.8.0...v9.9.0](https://github.com/orchestral/testbench-core/compare/v9.8.0...v9.9.0))

#### Testbench Changes

##### Added

* Add ability to symlink directory in from skeleton to package.

##### Changes

* Update skeleton to match v11.5.0.
* Add `Orchestra\Testbench\Workbench\Workbench::flushCachedClassAndNamespaces()` to flush cached namespaces and classes during installation.
* Use `realpath()` on `vendor:publish` output.

## 9.8.0

Released: 2024-12-16

### Changes

* Update minimum support for Testbench Core v9.8.0+. ([v9.7.0...v9.8.0](https://github.com/orchestral/testbench-core/compare/v9.7.0...v9.8.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\transform_realpath_to_relative()` function.
* Override Laravel's `vendor:publish` command.

##### Changes

* Add `$force` parameter to `Orchestra\Testbench\Workbench\Workbench::detectNamespace()` method.

## 9.7.0

Released: 2024-12-01

### Changes

* Update minimum support for Testbench Core v9.7.0+. ([v9.6.2...v9.7.0](https://github.com/orchestral/testbench-core/compare/v9.6.2...v9.7.0))

#### Testbench Changes

##### Added

* Added ability to detect Workbench namespace via `Orchestra\Testbench\Workbench\Workbench::detectNamespace()` method.
* Added ability to detect the default user model via `Orchestra\Testbench\Workbench\Workbench::applicationUserModel()` method.
* Added support for authentication routes within Workbench by configurating `workbench.auth` config to `true`.
* Added new `package:sync-skeleton` command.

##### Changes

* Testbench Dusk integration improvements:
  - Refactor `Orchestra\Testbench\Bootstrap\LoadConfiguration` and `Orchestra\Testbench\Bootstrap\LoadConfigurationWithWorkbench` to allow being extended by Testbench Dusk.
  - Refactor `Orchestra\Testbench\Console\Commander`.
* Add `$tty` parameter to `Orchestra\Testbench\remote()` function.
* Refactor `Orchestra\Testbench\Foundation\Bootstrap\CreateVendorSymlink` class and mark it as `@api`.
* Add `$backupExistingFile` and `$resetOnTerminating` parameter to following methods in `Orchestra\Testbench\Foundation\Console\Concerns\CopyTestbenchFiles` trait:
  - `copyTestbenchConfigurationFile()`
  - `copyTestbenchDotEnvFile()`
* Supports `laravel/serializable-closure` v2.

##### Deprecated

* Deprecate `Orchestra\Testbench\Foundation\Console\Concerns\HandleTerminatingConsole` trait, use `Orchestra\Testbench\Foundation\Console\TerminatingConsole` class instead.

## 9.6.1

Released: 2024-11-20

### Changes

* Update minimum support for Testbench Core v9.6.2+. ([v9.6.0...v9.6.2](https://github.com/orchestral/testbench-core/compare/v9.6.0...v9.6.2))

#### Testbench Changes

##### Fixes

* Fixes `route:cache` when `health: true` configured using `testbench.yaml`.
* Fixes compatibility with Laravel Framework v11.33.0.

## 9.6.0

Released: 2024-11-19

### Changes

* Update minimum support for Testbench Core v9.6.0+. ([v9.5.3...v9.6.0](https://github.com/orchestral/testbench-core/compare/v9.5.3...v9.6.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Foundation\Bootstrap\DeleteVendorSymlink` class.
* Added `Orchestra\Testbench\Concerns\InteractsWithMockery` trait.
* Added `--database` option to `package:create-sqlite-db` command.
* Added `--database` and `--all` options to `package:drop-sqlite-db` command.
* Added `Orchestra\Testbench\php_binary()` function.
* Allows `laravel/serializable-closure` 2.
* Added draft support for PHP 8.4.

##### Changes

* Ensure database directory exists when running `package:create-sqlite-db`.
* Allow configuring `PHP_CLI_SERVER_WORKERS` via Composer Script.
* Improves `CTRL+C` and `CTRL+BREAK` supports on Windows without `pcntl` extension.
* `Orchestra\Testbench\Foundation\Console\Actions\GeneratesFile` should be able to handle `$from` and `$to` when given as `false` or `null`.

##### Fixed

* Fixed `#[WithMigration('queue')]` should load the default migrations.

## 9.5.2

Released: 2024-10-06

### Changes

* Update minimum support for Testbench Core v9.5.3+. ([v9.5.2...v9.5.3](https://github.com/orchestral/testbench-core/compare/v9.5.2...v9.5.3))

#### Testbench Changes

##### Fixes

*  Prevent seeder from being executed when `shouldSeed()` exists and return `false`.

## 9.5.1

Released: 2024-10-05

### Changes

* Update minimum support for Testbench Core v9.5.2+. ([v9.5.0...v9.5.2](https://github.com/orchestral/testbench-core/compare/v9.5.0...v9.5.2))

#### Testbench Changes

##### Changes

* Listen to `SIGHUP`, `SIGUSR1`, and `SIGUSR2` signals via Testbench CLI.
* Update `config/concurrency.php` configuration file.

##### Fixes

* Fixes Testbench CLI signals via `serve` command to reset published `.env` and `testbench.yaml`.

## 9.5.0

Released: 2024-09-23

### Changes

* Update minimum support for Testbench Core v9.5.0+. ([v9.4.0...v9.5.0](https://github.com/orchestral/testbench-core/compare/v9.4.0...v9.5.0))

#### Testbench Changes

##### Added

* Added `Orchestra\Testbench\Attributes\RequiresDatabase` attribute class.
* Added `markTestSkippedWhen()` and `markTestSkippedUnless()` assertion helper to conditionally handle `markTestSkipped()`.
* Added `Orchestra\Testbench\default_migration_path()` helper function.
* Added `Orchestra\Testbench\laravel_vendor_exists()` helper function.
* Allows TestCase to inherit Attributes defined on parent TestCase by @BlackLanzer in #233.

### Changes

* Allow Testbench to delete `vendor` symlink directory if it was created while running tests.

### Fixes

* Fixes `view.paths` configuration not being updated to include `workbench/resources/views` due to IoC booting sequence.

### Deprecated

* Deprecated `Orchestra\Testbench\laravel_migration_path()`, use `default_migration_path()` instead.

<!--
#### New Contributors
* @BlackLanzer made their first contribution in https://github.com/orchestral/testbench-core/pull/233
-->

## 9.4.0

Released: 2024-08-26

### Changes

* Update minimum support for Testbench Core v9.4.0+. ([v9.3.0...v9.4.0](https://github.com/orchestral/testbench-core/compare/v9.3.0...v9.4.0))

#### Testbench Changes

##### Added

* Added `artisan` binary to Laravel skeleton.
* Added `Orchestra\Testbench\join_paths()` function.
* Added `Orchestra\Testbench\Attributes\UsesVendor` attribute class.
* Added `defineStashRoutes()` method to register adhoc route for test.

### Changes

* Improvements to `Orchestra\Testbench\default_skeleton_path()`, `Orchestra\Testbench\package_path()`, and `Orchestra\Testbench\workbench_path()` usage based on new `Orchestra\Testbench\join_paths()` function.

## 9.3.0

Released: 2024-08-14

### Changes

* Update minimum support for Testbench Core v9.3.0+. ([v9.2.0...v9.3.0](https://github.com/orchestral/testbench-core/compare/v9.2.0...v9.3.0))

#### Testbench Changes

##### Changes

* Update `Orchestra\Testbench\Foundation\Console\Actions\GeneratesFile` to remove `.gitkeep` file when directory contain one or more files.
* Code Improvements.

##### Fixes

* Fixes `InteractsWithPublishedFiles` should only flush published files within `database/migrations` directory.

## 9.2.0

Released: 2024-07-13

### Changes

* Update minimum support for Testbench Core v9.2.0+. ([v9.1.3...v9.2.0](https://github.com/orchestral/testbench-core/compare/v9.1.3...v9.2.0))

#### Testbench Changes

##### Added

* Added new attributes:
    - `Orchestra\Testbench\Attributes\ResolvesLaravel`
    - `Orchestra\Testbench\Attributes\UsesFrameworkConfiguration`
* Allows to discover `factories` using Workbench to map `Workbench\App\Models` to `Workbench\Database\Factories` classes.
* Allows to auto discover console command classes from `workbench/app/Console/Commands`.

##### Changes

* Bump minimum support to Laravel Framework v11.11.
* Implements `JsonSerializable` to `Orchestra\Testbench\Foundation\UndefinedValue`.
* Update skeleton to use `workbench` as default environment value.
* Allow `Orchestra\Testbench\Attributes\Define` and `Orchestra\Testbench\Attributes\DefineEnvironment` to be used on the class level by [@danjohnson95](https://github.com/danjohnson95)

##### Fixes

* Ensure `usesTestingFeature()` attribute registration is loaded before class attributes instead of method attributes.

## 9.1.2

Released: 2024-06-04

### Changes

* Update minimum support for Testbench Core v9.1.3+. ([v9.1.2...v9.1.3](https://github.com/orchestral/testbench-core/compare/v9.1.2...v9.1.3))

#### Testbench Changes

##### Fixes

* Fixes `Orchestra\Testbench\Workench\Workbench::applicationExceptionHandler()` usage to detect `Workbench\App\Exceptions\Handler` class.
* Fixes `Orchestra\Testbench\Console\Kernel` and `Orchestra\Testbench\Foundation\Console\Kernel` unable to discover commands.

## 9.1.1

Released: 2024-06-01

### Changes

* Update minimum support for Testbench Core v9.1.2+. ([v9.1.0...v9.1.2](https://github.com/orchestral/testbench-core/compare/v9.1.0...v9.1.2))

#### Testbench Changes

##### Changes

* Utilise `Orchestra\Testbench\package_path()` function instead of `TESTBENCH_WORKING_PATH` constant.
* Update configuration to match Laravel Framework v11.8.0,

##### Fixes

* Fixes `Orchestra\Testbench\Attributes\RequiresLaravel` attribute usage.

## 9.1.0

Released: 2024-05-21

### Changes

* Update minimum support for Testbench Core v9.1.0+. ([v9.0.13...v9.1.0](https://github.com/orchestral/testbench-core/compare/v9.0.13...v9.1.0))

#### Testbench Changes

##### Changes

* Uses `TESTBENCH_WORKING_PATH` from environment variable before fallback to `getcwd()`.
* PHPStan Improvements.
* Add support for PHPUnit 11.1.
* Update skeleton to match v11.0.7.

##### Fixes

* Fixes routing registration using macro with Workbench.

## 9.0.4

Released: 2024-04-16

### Changes

* Update minimum support for Testbench Core v9.0.13+. ([v9.0.9...v9.0.13](https://github.com/orchestral/testbench-core/compare/v9.0.9...v9.0.13))

#### Testbench Changes

##### Changes

* Allows `Orchestra\Testbench\remote` to accept `$env` with either `array` or `string`.
* Includes `TESTBENCH_PACKAGE_REMOTE=true` when running command using `Orchestra\Testbench\remote`.
* Flush Static Improvements.
* Revert setting `workbench` environment variable when Testbench CLI is used outside of testing. 

##### Fixes

* Fixes `serve` command.
* Fixes `runningInUnitTests()` returning `true` when not running tests via Testbench CLI.

## 9.0.3

Released: 2024-03-27

### Changes

* Update minimum support for Testbench Core v9.0.9+. ([v9.0.7...v9.0.9](https://github.com/orchestral/testbench-core/compare/v9.0.7...v9.0.9))
* Update minimum support for Laravel Framework `11.1.0`.

#### Testbench Changes

##### Changes

* Add support for `HASH_VERIFY` environment variables.

##### Fixes

* Force reset `RefreshDatabaseState` when using `LazilyRefreshDatabase` with SQLite `:in-memory:` database connections.

## 9.0.2

Released: 2024-03-25

### Changes

* Update minimum support for Testbench Core v9.0.7+. ([v9.0.6...v9.0.7](https://github.com/orchestral/testbench-core/compare/v9.0.6...v9.0.7))

#### Testbench Changes

##### Fixes

* Fixes `RefreshDatabase` to be executed on `tearDown()` only limited when ad-hoc migrations was added during test.

## 9.0.1

Released: 2024-03-19

### Changes

* Update minimum support for Testbench Core v9.0.6+. ([v9.0.1...v9.0.6](https://github.com/orchestral/testbench-core/compare/v9.0.1...v9.0.6))

#### Testbench Changes

##### Changes

* Run `ResetRefreshDatabaseState` via `tearDownTheTestEnvironmentUsingTestCase()` method.
* Check against `RefreshDatabaseState::$migrated` and `RefreshDatabaseState::$lazilyRefreshed` before loading migration paths to the instance of `migrator`.
* Update skeleton to match v11.0.3.
* Revert default skeleton database collations to `utf8mb4_unicode_ci`.

##### Fixes

* Fixes `beforeApplicationDestroyed()` usage on `loadLaravelMigrations()` method.
* Fixes `RefreshDatabase` usage does not reset the database migrations between tests.
* Fixes `class_implements()` should only be executed if the Attribute class exists.
* Testbench CLI should prioritize application kernels defined via `bootstrap/app.php` when configured using a custom skeleton.

## 9.0.0

Released: 2024-03-13

### Added

* Added support for PHPUnit 11.

### Changes

* Update support for Laravel Framework v11.
* Increase minimum PHP version to 8.2 and above (tested with 8.2 and 8.3).

### Deprecated

* Deprecate `Orchestra\Testbench\Concerns\HandlesAnnotations` in line with PHPUnit removal support for meta-comment support using annotation.

### Removed

* Remove deprecated `Orchestra\Testbench\Concerns\Database\HandlesConnections` trait.
* Removed deprecated `create-sqlite-db` and `drop-sqlite-db` standalone commands.

