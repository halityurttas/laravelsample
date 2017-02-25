<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TodoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    //public function boot()
    //{
        //
    //}

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Models\Todos::class, function ($app) {
            return new \App\Models\Todos();
        });
    }
}
