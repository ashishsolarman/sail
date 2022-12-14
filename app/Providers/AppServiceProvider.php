<?php

namespace App\Providers;

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
        //
//   if (!Collection::hasMacro('paginate')) {
        //     Collection::macro('paginate', 
        //         function ($perPage = 15, $page = null, $options = []) {
        //         $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        //         return (new LengthAwarePaginator(
        //             $this-(&gt;)forPage($page, $perPage), $this-(&gt;)count(), $perPage, $page, $options))
        //             -(&gt;)withPath('');
        //     });
        // }


        
    }
}
