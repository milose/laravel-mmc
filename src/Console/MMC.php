<?php

namespace Milose\LaravelMMC\Console;

use Illuminate\Console\Command;

class MMC extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mmc {name* : Name of object to create}';

    protected $name;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a singular Model / Migration / Controller classes.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = snake_case(implode('_', $this->argument('name')));

        $migration_name = 'create_' . $name . '_table';

        $model = studly_case($name);

        $controller = $model . 'Controller';

        $this->callSilent('make:migration', [
            'name' => $migration_name,
            '--create' => $name,
        ]);

        $this->callSilent('make:model', [
            'name' => $model,
        ]);

        $this->callSilent('make:controller', [
            'name' => $controller,
             '--resource' => true,
        ]);

        $this->info('Created: ' . $model . ' model, migration and controller.');

    }
}
