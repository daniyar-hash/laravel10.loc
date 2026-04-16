<?php

namespace App\Providers;

use App\View\Composers\ProfileComposer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use Illuminate\View\ViewException;

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


    

       FacadesView::share('site_title','Title Page');

       FacadesView::composer(['greeting.test','greeting.contact'],ProfileComposer::class);

       view()->composer('greeting.test', function(View $view){

            $view->with('test1','Test1')->with('test2','Test2');

       });

    //     view()->composer('greeting.test', function(View $view){

    //         $view->with('test2','Test2');

    //    });

    view()->composer('greeting.*', function(View $view){

        $menu ='<ul>';
        $menu.='<li><a href="'.route('greeting.index') .'">Home</a></li>';
        $menu.='<li><a href="'.route('greeting.test') .'">Test</a></li>';
        $menu.='<li><a href="'.route('greeting.contact') .'">Contact</a></li>';
        $menu.='</ul>';

        $view->with('menu',$menu);

    });






    }
}
