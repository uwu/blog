<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
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
        URL::forceRootUrl(env('APP_URL'));

        /**
         * HACK: Force the paginator to generate proper URLs, as it does not
         * respect the above `forceRootUrl` invocation
         * @see https://github.com/laravel/framework/issues/15361#issuecomment-543840548
         */
        Paginator::currentPathResolver(function () {
            return $this->app['url']->current();
        });
    }
}
