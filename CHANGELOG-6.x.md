# Change for 6.x

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 6.2.0

Released: 2020-09-28

### Changes

* Update minimum support for Testbench Core v6.2.0+. ([v6.1.0...v6.2.0](https://github.com/orchestral/testbench-core/compare/v6.1.0...v6.2.0))

## 6.1.0

Released: 2020-09-24

### Added

Added experimental support for running artisan commands outside of Laravel. e.g:

    ./vendor/bin/testbench migrate

This would allows you to setup the testing environment before running `phpunit` instead of executing everything from within `TestCase::setUp()`.

### Changes

* Update minimum support for Testbench Core v6.1.0+. ([v6.0.0...v6.1.0](https://github.com/orchestral/testbench-core/compare/v6.0.0...v6.1.0))

## 6.0.0

Released: 2020-09-08

### Added

* Added `Orchestra\Testbench\Factories\UserFactory` to handle `Illuminate\Foundation\Auth\User` model.
* Automatically autoloads `Illuminate\Database\Eloquent\LegacyFactoryServiceProvider` if the service provider exists.

### Changes

* Update support for Laravel Framework v8.
* Increase minimum PHP version to 7.3 and above (tested with 7.3 and 7.4).
* Configuration changes:
    - Changed `auth.providers.users.model` to `Illuminate\Foundation\Auth\User`.
    - Changed `queue.failed.driver` to `database-uuid`.
