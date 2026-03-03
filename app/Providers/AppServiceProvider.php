<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        //
    }

    public function boot()
{
    parent::boot();

    \Illuminate\Support\Facades\Route::pattern('name', '[a-zA-Z0-9_-]+');
}
}
