<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Laravel\Ui\AuthCommand::class,
                \Laravel\Ui\ControllersCommand::class,
                \Laravel\Ui\UiCommand::class,
            ]);
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::mixin(new \Laravel\Ui\AuthRouteMethods);
    }
}
