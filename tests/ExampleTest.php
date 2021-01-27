<?php

namespace Jmurphy\LaravelPascal\Tests;

use Orchestra\Testbench\TestCase;
use Jmurphy\LaravelPascal\LaravelPascalServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelPascalServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
