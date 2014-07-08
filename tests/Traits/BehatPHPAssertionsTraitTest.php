<?php namespace Orchestra\Testbench\TestCase\Traits;

use Mockery as m;
use Orchestra\Testbench\Testing\UnitAssertionTrait;
use Orchestra\Testbench\Traits\BehatPHPUnitAssertionsTrait;

class BehatPHPAssertionsTraitTest extends \PHPUnit_Framework_TestCase
{
    use BehatPHPUnitAssertionsTrait, UnitAssertionTrait;
}
