<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('*', function($view)
        {
            $nav = DB::table('pages')
                ->select('*')
                ->get();
            $view->with('nav', $nav);
        });

        View::composer('*', function($view)
        {
            $adminnav = DB::table('adminpages')
                ->select('*')
                ->get();
            $view->with('adminnav', $adminnav);
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
