<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Finder\SplFileInfo;

class MakeCostemClass extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-costem-class';

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
        if (! is_dir($directory = base_path('vendor/laravel/jobPortal'))) {
            mkdir($directory, 0755, true);
            mkdir($directory.'/Controllers/Seeker', 0755, true);
            mkdir($directory.'/models', 0755, true);
            mkdir($directory.'/views', 0755, true);
            mkdir($directory.'/routes', 0755, true);
        
        }

        $filesystem = new Filesystem;

        collect($filesystem->allFiles(app_path('Http/Controllers/Auth/')))
            ->each(function (SplFileInfo $file) use ($filesystem) {
                $filesystem->copy(
                    $file->getPathname(),
                    base_path('vendor/laravel/jobPortal/Controllers/Seeker/'.Str::replaceLast('.php', '.stub', $file->getFilename()))
                );
            });

        $this->components->info('Seeker scaffolding generated successfully.');
    }
}
