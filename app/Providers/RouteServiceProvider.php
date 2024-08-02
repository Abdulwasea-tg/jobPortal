<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

//
use App\Http\Controllers\NewsController2;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';
    protected $namespace = "App\\Http\\Controllers";

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        //this for Regex routing paramitter lessons
        Route::pattern('userid', '[0-9]+');
        Route::pattern('userName', '[a-zA-Z]+');
        
        //this for Route Macros paramitter lessons
        Route::macro('CROUD', function($slug=''){
            Route::prefix($slug)->group(function () {
                Route::get('news', [NewsController2::class, 'index']);
                Route::post('news', [NewsController2::class, 'store']);
                Route::get('news/create', [NewsController2::class, 'create']);
                Route::get('news/{id}', [NewsController2::class, 'show']);
                Route::put('news/{id}', [NewsController2::class, 'update']);
                Route::delete('news/{id}', [NewsController2::class, 'destroy']);
                Route::get('news/{id}/edit', [NewsController2::class, 'edit']);
                
            });
        });

        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::namespace('admin')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin.php'));

            /* Route::namespace('parameterRoute')
                ->group(base_path('routes/parameterRoute.php'));
            
            Route::namespace('basicRouting')
                ->group(base_path('routes/basicRouting.php'));

            Route::namespace('namedRoutes')
                ->group(base_path('routes/namedRoutes.php')); */

            Route::namespace('route_groubs')
                ->group(base_path('routes/route_groubs.php'));

            /* Route::namespace('route_modelBinding')
                ->group(base_path('routes/route_modelBinding.php'));

            Route::namespace('fallBack_routes')
                ->group(base_path('routes/fallBack_routes.php')); */

            Route::namespace('viewRoutes')
                ->group(base_path('routes/viewRoutes.php'));
                
            /* Route::namespace('jobPortal')
                ->group(base_path('routes/jobPortal.php')); */

        });
    }
}
