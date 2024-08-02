<?php

namespace App\Console\Commands;
use Laravel\Ui\Presets;
use Illuminate\Console\Command;
use InvalidArgumentException;
use Symfony\Component\Console\Attribute\AsCommand;


class myComandAbdu extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ui
                    { type : The preset type (bootstrap, vue, react) }
                    { --auth : Install authentication UI scaffolding }
                    { --option=* : Pass an option to the preset command }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (static::hasMacro($this->argument('type'))) {
            return call_user_func(static::$macros[$this->argument('type')], $this);
        }

        if (! in_array($this->argument('type'), ['bootstrap', 'vue', 'react'])) {
            throw new InvalidArgumentException('Invalid preset.');
        }

        if ($this->option('auth')) {
            $this->call('ui:auth');
        }

        $this->{$this->argument('type')}();
    }


    
    /**
     * Install the "bootstrap" preset.
     *
     * @return void
     */
    protected function bootstrap()
    {
        Presets\Bootstrap::install();

        $this->components->info('Bootstrap scaffolding installed successfully.');
        $this->components->warn('Please run [npm install && npm run dev] to compile your fresh scaffolding.');
    }

    /**
     * Install the "vue" preset.
     *
     * @return void
     */
    protected function vue()
    {
        Presets\Bootstrap::install();
        Presets\Vue::install();

        $this->components->info('Vue scaffolding installed successfully.');
        $this->components->warn('Please run [npm install && npm run dev] to compile your fresh scaffolding.');
    }

    /**
     * Install the "react" preset.
     *
     * @return void
     */
    protected function react()
    {
        Presets\Bootstrap::install();
        Presets\React::install();

        $this->components->info('React scaffolding installed successfully.');
        $this->components->warn('Please run [npm install && npm run dev] to compile your fresh scaffolding.');
    }
    
}
