<?php

namespace Porifa\ObjectBlueprintGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Porifa\ObjectBlueprintGenerator\ObjectBlueprintGenerator
 */
class ObjectBlueprintGenerator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Porifa\ObjectBlueprintGenerator\ObjectBlueprintGenerator::class;
    }
}
