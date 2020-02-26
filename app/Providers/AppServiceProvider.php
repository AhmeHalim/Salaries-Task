<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App;


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
        //
        Schema::defaultStringLength(191);

        view()->composer('*', function($view)
        {
            $lang = 'en';
            if(session()->has('lang'))
            {
                $lang = session()->get('lang');
            }
            App::setlocale($lang);
        });
    }
}
