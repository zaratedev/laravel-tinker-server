<?php

namespace Zaratedev\LaravelTinkerServer\Tests;

use Orchestra\Testbench\TestCase;
use Zaratedev\LaravelTinkerServer\LaravelTinkerServerServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelTinkerServerServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
