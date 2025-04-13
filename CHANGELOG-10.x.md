# Changes for 10.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 10.2.1

Released: 2025-04-06

### Changes

* Update minimum support for Testbench Core v10.2.1+. ([v10.2.0...v10.2.1](https://github.com/orchestral/testbench-core/compare/v10.2.0...v10.2.1))

#### Testbench Changes

##### Changes

* Remove `symfony/polyfill-php84`.

## 10.2.0

Released: 2025-04-06

### Changes

* Update minimum support for Testbench Core v10.2.0+. ([v10.1.0...v10.2.0](https://github.com/orchestral/testbench-core/compare/v10.1.0...v10.2.0))

#### Testbench Changes

##### Added

* Add ability to pass `Closure` to `Orchestra\Testbench\remote()` function.

##### Changes

* Add support for PHPUnit 12.1.
* Refactor `Orchestra\Testbench\remote()` function to use `Orchestra\Testbench\Foundation\Process\RemoteCommand`.
* Rename `TESTBENCH_ENVIRONMENT_FILE_USING` to `TESTBENCH_ENVIRONMENT_FILE_USING` (internal environment variable).

## 10.1.0

Released: 2025-03-06

### Changes

* Update minimum support for Testbench Core v10.1.0+. ([v10.0.0...v10.1.0](https://github.com/orchestral/testbench-core/compare/v10.0.0...v10.1.0))

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

## 10.0.0

Released: 2025-02-24

### Changes

* Update support for Laravel Framework v12.
* Update `Orchestra\Testbench\TestCase` to use `Illuminate\Foundation\Testing\Concerns\InteractsWithViews` trait.

### Removed

* Remove deprecated functions:
    - `Orchestra\Testbench\once()`
    - `Orchestra\Testbench\transform_relative_path()`
* Remove deprecated methods in `Orchestra\Testbench\Concerns\CreatesApplication` trait:
    - `getBasePath()`
    - `getDefaultApplicationBootstrapFile()`
* Remove deprecated methods in `Orchestra\Testbench\Concerns\InteractsWithMigrations` trait:
    - `loadMigrationsWithoutRollbackFrom()`
    - `loadLaravelMigrationsWithoutRollback()`
    - `runLaravelMigrationsWithoutRollback()`
