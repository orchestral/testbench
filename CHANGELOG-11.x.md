# Changes for 11.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 11.1.0

Released: 2026-04-09

### Changes

* Update minimum support for Testbench Core v11.2.0+. ([v11.0.0...v11.2.0](https://github.com/orchestral/testbench-core/compare/v11.0.0...v11.2.0))
* Supports PHPUnit 13.1.

#### Testbench Changes

##### Changes

* Removed no longer relevants `method_exists()` and `class_exists()` usage.
* Add `flushState()` to `FormRequest` to reset global strict mode between tests.

## 11.0.0

Released: 2026-03-16

### Changes

* Update support for Laravel Framework v13.

### Removed

* Remove deprecated `Orchestra\Testbench\Foundation\Env` class.
* Remove deprecated `Orchestra\Testbench\Foundation\Console\Concerns\HandleTerminatingConsole` trait.
* Remove deprecated `Orchestra\Testbench\Foundation\Console\Actions\Action::pathLocation()` method.
* Remove deprecated `Orchestra\Testbench\laravel_migration_path()` function.
* Remove supports for deprecated annotations: 
  - `@define-env`
  - `@environment-setup`
  - `@define-db`
  - `@define-route`
