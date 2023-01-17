<?php

namespace Porifa\ObjectBlueprintGenerator;

use Porifa\LaravelPackageKit\Package;
use Porifa\LaravelPackageKit\PackageServiceProvider;
use Porifa\ObjectBlueprintGenerator\Console\Commands\ActionMakeCommand;

class ObjectBlueprintGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/porifa/laravel-package-kit
         */
        $package
            ->name('laravel-object-blueprint-generator')
            ->hasCommands(ActionMakeCommand::class);
    }
}
