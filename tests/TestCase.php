<?php

namespace Porifa\ObjectBlueprintGenerator\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Porifa\ObjectBlueprintGenerator\ObjectBlueprintGeneratorServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Porifa\\ObjectBlueprintGenerator\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            ObjectBlueprintGeneratorServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_ObjectBlueprintGenerator_table.php.stub';
        $migration->up();
        */
    }
}
