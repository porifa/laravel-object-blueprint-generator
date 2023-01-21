<?php

use Illuminate\Foundation\Testing\Concerns\InteractsWithConsole;
use Porifa\ObjectBlueprintGenerator\Tests\TestCase;

uses(TestCase::class, InteractsWithConsole::class)->in(__DIR__);

uses()->afterEach(function () {
    $configPath = app_path('Actions\FooAction.php');

    if (file_exists($configPath)) {
        unlink($configPath);
    }
})->in(__DIR__);
