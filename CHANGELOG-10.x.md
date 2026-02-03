# Changes for 10.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 10.9.0

Released: 2026-01-14

### Changes

* Update minimum support for Testbench Core v10.9.0+. ([v10.8.0...v10.9.0](https://github.com/orchestral/testbench-core/compare/v10.8.0...v10.9.0))

#### Testbench Changes

##### Added

* Add `Orchestra\Testbench\package_version_compare()` function.
* Add `Orchestra\Testbench\Concerns\WithFixtures` to automatically loads fixtures file for test.

##### Changes

* Supports flushing `JsonResource` and `JsonApiResource` states.
* Supports PHPUnit 12.5.
* Use `Orchestra\Sidekick\package_path()` for better root package path detection.

## 10.8.0

Released: 2025-11-24

### Changes

* Update minimum support for Testbench Core v10.8.0+. ([v10.7.0...v10.8.0](https://github.com/orchestral/testbench-core/compare/v10.7.0...v10.8.0))
* Update minimum Laravel Framework version to `12.40.0`.

#### Testbench Changes

##### Changes

* PHP 8.5 Compatibility.
* Supports for Laravel Framework 12.40.0 or above.
* Fix symlink removal on Windows environment in the following classes:
    - `Orchestra\Testbench\Workbench\Actions\AddAssetSymlinkFolders`
    - `Orchestra\Testbench\Workbench\Actions\RemoveAssetSymlinkFolders`

## 10.7.0

Released: 2025-10-16

### Changes

* Update minimum support for Testbench Core v10.7.0+. ([v10.6.1...v10.7.0](https://github.com/orchestral/testbench-core/compare/v10.6.1...v10.7.0))
* Update minimum Laravel Framework version to `12.28.0`.

## 10.6.0

Released: 2025-08-20

### Changes

* Update minimum Laravel Framework version to `12.24.0`.

## 10.5.0

Released: 2025-08-20

### Changes

* Update minimum support for Testbench Core v10.6.1+. ([v10.4.0...v10.6.1](https://github.com/orchestral/testbench-core/compare/v10.4.0...v10.6.1))

#### Testbench Changes

##### Changes

* Supports for Laravel Framework 12.23.2 or above (fixed integration with PHPUnit 12.3.4).

## 10.4.0

Released: 2025-06-09

### Changes

* Update minimum support for Testbench Core v10.4.0+. ([v10.3.0...v10.4.0](https://github.com/orchestral/testbench-core/compare/v10.3.0...v10.4.0))

#### Testbench Changes

##### Changes

* Supports PHPUnit 12.2.
* `Orchestra\Foundation\Env` now extends `Orchestra\Sidekick\Env`.
* Update skeleton's configuration.

## 10.3.0

Released: 2025-05-12

### Changes

* Update minimum support for Testbench Core v10.3.0+. ([v10.2.2...v10.3.0](https://github.com/orchestral/testbench-core/compare/v10.2.2...v10.3.0))

#### Testbench Changes

##### Changes

* Requires Laravel Framework 12.8.0 and above.
* `Orchestra\Testbench\PHPUnit\TestCase` now implements `Orchestra\Testbench\Concerns\InteractsWithMockery`.
* Flush `Illuminate\Database\Eloquent\Model::automaticallyEagerLoadRelationships()` state between tests if the method exists.

##### Fixes

* Fix handling deprecations logging when logger is not not available when running tests.

## 10.2.2

Released: 2025-04-27

### Changes

* Update minimum support for Testbench Core v10.2.2+. ([v10.2.1...v10.2.2](https://github.com/orchestral/testbench-core/compare/v10.2.1...v10.2.2))

#### Testbench Changes

##### Changes

* Flush `Illuminate\Database\Eloquent\Model` states between tests.

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
