# Changelog for 3.5

This changelog references the relevant changes (bug and security fixes) done to `orchestra/testbench`.

## 3.5.3

Released: 2017-12-25

### Changes

* Update minimum support for Testbench Core v3.5.5+.

## 3.5.2

Released: 2017-10-08

### Changes

* Update minimum support for Testbench Core v3.5.4+.

## 3.5.1

Released: 2017-10-02

### Changes

* Add mockery expectations to the assertion count. ([@scrubmx](https://github.com/scrubmx))
* Update Laravel skeleton and `Orchestra\Testbench\Exceptions\Handler`.
* Add `Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse` to `Orchestra\Testbench\Http\Kernel`. ([@kalfheim](https://github.com/kalfheim))
* Allow to use `Illuminate\Foundation\Testing\RefreshDatabase`. ([@BertvanHoekelen](https://github.com/BertvanHoekelen))

### Fixes

* Don't enable auto discovery for every package.
* Refresh named routes when declaring new routes from within a test method.

## 3.5.0

Released: 2017-08-25

### Changes

* Update support for Laravel Framework v5.5.
* Migrate code to `orchestra/testbench-core`.
