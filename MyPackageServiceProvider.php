<?php

namespace mido\mypackage;

use Illuminate\Support\ServiceProvider;


class MyPackageServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'mypackage');
        $this->mergeConfigFrom(__DIR__ . '/config/contact.php', 'contact');
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
        ]);

    }

    public function register()
    {

    }
}