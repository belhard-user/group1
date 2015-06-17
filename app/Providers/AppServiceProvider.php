<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*view()->composer('index', function($view){
            $view->with('name', new \App\Name);
        });*/

        \Validator::extend('foo', function($attribute, $value, $parameters)
        {
            return $value == 'foo';
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
