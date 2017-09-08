<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('age',function($expression){
            dd($expression);
            return "<php  ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $age = Carbon::createFromDate(1989,6,5)->age;

        View::share('age',$age);
        View::share('myname','wilmer');

        View::composer('*', function($view)
            {$view->with('auth',Auth::user());
        });
    }
}
