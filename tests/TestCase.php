<?php

namespace Porifa\ObjectBlueprintGenerator\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Porifa\ObjectBlueprintGenerator\ObjectBlueprintGeneratorServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            ObjectBlueprintGeneratorServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
