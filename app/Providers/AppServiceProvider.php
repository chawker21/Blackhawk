<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use DB;
use Illuminate\Pagination\Paginator;
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
        view()->composer('*', function($view){
            $view_name = str_replace('.', '-', $view->getName());
            view()->share('view_name', $view_name);
        });
        Schema::defaultStringLength(191);
        DB :: disableQueryLog ();

        Paginator::useBootstrap();
    }
}
