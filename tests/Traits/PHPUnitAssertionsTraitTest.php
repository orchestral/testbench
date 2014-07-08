<?php namespace Orchestra\Testbench\TestCase\Traits;

use Mockery as m;
use Orchestra\Testbench\Testing\UnitAssertionTrait;
use Orchestra\Testbench\Traits\PHPUnitAssertionsTrait;

class PHPUnitAssertionsTraitTest extends \PHPUnit_Framework_TestCase
{
    use PHPUnitAssertionsTrait, UnitAssertionTrait;
}
