<?php

namespace App\Providers;

use App\Externals;
use App\Observers\DocExternalObserver;
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
        // Externals::observe(DocExternalObserver::class);
    }
}
