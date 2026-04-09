# Changes for 11.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

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
