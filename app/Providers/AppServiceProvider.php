<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

// for composer globalr var lesson
use Illuminate\Support\Facades\view;
use Illuminate\View\View as MyView;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::composer('employer.jobs.Datagridview', function(MyView $view){
            return $view->with(['i'=>0]);
        });

        Blade::directive('gridView', function($dataset){
        
            //return view('seeker.educations.Datagridview', ['item'=>$dataset['data']]);

            /* return "<?php 
                        \$dataset=$dataset; 
                        \$data = \$dataset['data'];
                        \$item = \$dataset['item'];
                        \$emptyPath = \$dataset['emptyPath'];
                        \$tb='<table class=\"tb2\">';
                        \$tb.='<thead>';
                        \$tb.='<tr>';
                        foreach(\$dataset['attributes'] as \$key=>\$val){ \$tb.='<th>'.\$val.'</th>'; }
                        \$tb.='</tr>';
                        \$tb.='<tbody  id=\"tableBody\">';
                        foreach(\$data as \$key=>\$item){ 
                        include(base_path(\$dataset['path']));
                        \$tb.='\$tr';}
                        

                        //@each(\$dataset['path'], \$data, \$item, \$emptyPath)

                        \$tb.='</tbody>';
                        \$tb.='</table>';

                        echo \$tb;
                    

                    ?>
                     "
                    ; */

                

        });
    }
}
