<?php

namespace Porifa\ObjectBlueprintGenerator\Console\Commands;

use Illuminate\Console\Command;

class ObjectBlueprintGeneratorCommand extends Command
{
    public $signature = 'ObjectBlueprintGenerator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
