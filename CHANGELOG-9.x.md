# Changes for 9.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

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

