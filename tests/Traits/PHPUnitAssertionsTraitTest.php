<?php namespace Orchestra\Testbench\TestCase\Traits;

use Orchestra\Testbench\Traits\PHPUnitAssertionsTrait;
use Orchestra\Testbench\Testing\Support\UnitAssertionTrait;

class PHPUnitAssertionsTraitTest extends \PHPUnit_Framework_TestCase
{
    use PHPUnitAssertionsTrait, UnitAssertionTrait;
}
