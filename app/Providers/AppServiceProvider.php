<?php

namespace App\Providers;

use App\Models\Rubric;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*DB::listen(function ($query){
            Log::info($query->sql);
        });*/

        //afisarea sau urmarirea interogarilor catre baza de date. dump($query->sql); //afisarea interogarilor catre baza de date
        DB::listen(function ($query){
            Log::channel('sqllogs')->info($query->sql);
        });

        view()->composer('layouts.footer', function ($view){
            $view->with('rubrics', Rubric::all());
        });
    }
}
