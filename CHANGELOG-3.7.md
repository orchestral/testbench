# Change for 3.7

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

### 3.7.0

Released: 2018-08-23

### Added

* Added `Orchestra\Testbench\Http\Middleware\Authenticate` middleware.

### Changes

* Update support for Laravel Framework v5.7.
* `Orchestra\Testbench\Concerns\Testing::setUpTheTestEnvironmentTraits()` should always accept an array of `$uses` from `Orchestra\Testbench\TestCase::setUpTraits()`.
