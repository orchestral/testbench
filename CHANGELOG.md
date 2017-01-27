# Changelog

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 3.4.0

Date: 2017-01-27

### Changes

* Update support for Laravel Framework v5.4.
* `Orchestra\Testbench\Http\Kernel` now runs `TrimStrings`, `ValidatePostSize`, `ConvertEmptyStringsToNull` as global middleware, consider replacing the HTTP Kernel if you need to setup different expectation.

### Removed

* Browser Kit related testing is now has been removed, if you need such feature do instead require `orchestra/testbench-browser-kit`.

### Deprecation 

* `--realpath` for migration is now deprecated. All package developer should be utilizing the available `loadMigrationFroms()` under the package service provider, refer to [Migration for Packages documentation)[https://laravel.com/docs/5.4/packages#migrations].
