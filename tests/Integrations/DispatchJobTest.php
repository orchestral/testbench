<?php

namespace Orchestra\Testbench\Tests;

use Orchestra\Testbench\TestCase;
use Orchestra\Testbench\Tests\Stubs\Jobs\RegisterUser;

class DispatchJobTest extends TestCase
{
    /**
     * Test job is expected.
     *
     * @test
     */
    public function testJobIsExpected()
    {
        $this->expectsJobs(RegisterUser::class);

        dispatch(new RegisterUser());
    }
}
