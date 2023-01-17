<?php

it('make an action class', function () {
    $this->artisan('make:action FooAction')->assertSuccessful();
});

test('action stub exists', function () {
    $this->assertFileExists(__DIR__ . '/../src/Console/Commands/stubs/action.stub');
});
