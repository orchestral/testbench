# Changes for 11.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 11.2.0

Released: 2026-08-07

### Changes

* Update minimum support for Testbench Core v11.4.0+. ([v11.2.0...v11.4.0](https://github.com/orchestral/testbench-core/compare/v11.2.0...v11.4.0))
* Supports PHPUnit 13.2 and 13.3.

#### Testbench Changes

##### Changes

* Supports for Laravel Framework 13.23.0.
* Requires `symfony/polyfill-php84` for `Pdo\Mysql` class on PHP 8.3 and below.
* Loads `Orchestra\Testbench\Attributes\WithConfig` after application has been booted to allow merging configuration via Service Provider by default. Use `defer: false` parameter to disable this.
* Add `flushState()` to `FormRequest` to reset global strict mode between tests.
* Update skeleton.

### Fixes

* Fix `Orchestra\Testbench\Attributes\WithConfig` shouldn't defer setting up framework configuration.
* Fix missing `--without-cache` option when using `package:test` command with `nunomaduro/collision` version `8.9.4+`.

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
