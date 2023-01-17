<?php

namespace Porifa\ObjectBlueprintGenerator\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'make:action')]
class ActionMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:action {name : Create an action class}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new action class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Action';

    /**
     * STUB_PATH.
     */
    const STUB_PATH = __DIR__ . '/stubs/';

    /**
     * @return string
     */
    protected function getStub()
    {
        return self::STUB_PATH . 'action.stub';
    }

    /**
     * Execute the console command.
     *
     * @return bool|null
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     *
     * @see \Illuminate\Console\GeneratorCommand
     */
    public function handle(): bool
    {
        if ($this->isReservedName($this->getNameInput())) {
            $this->error('The name "' . $this->getNameInput() . '" is reserved by PHP.');

            return self::FAILURE;
        }

        $name = $this->qualifyClass($this->getNameInput());

        $path = $this->getPath($name);

        if ((! $this->hasOption('force') ||
                ! $this->option('force')) &&
            $this->alreadyExists($this->getNameInput())) {
            $this->error($this->type . ' already exists!');

            return self::FAILURE;
        }

        $this->makeDirectory($path);

        $this->files->put(
            $path,
            $this->sortImports(
                $this->buildServiceClass($name)
            )
        );
        $message = $this->type;

        $this->info($message . ' created successfully.');

        return self::SUCCESS;
    }

    /**
     * Build the class with the given name.
     *
     * @param  string  $name
     * @param $isInterface
     * @return string
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    protected function buildServiceClass(string $name): string
    {
        $stub = $this->files->get(
            $this->getStub()
        );

        return $this->replaceNamespace($stub, $name)->replaceClass($stub, $name);
    }

    /**
     * @param $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Actions';
    }
}
