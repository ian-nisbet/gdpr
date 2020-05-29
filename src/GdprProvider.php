<?php

namespace IanNisbet\Gdpr;

use Illuminate\Support\ServiceProvider;

class GdprProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../migrations');

        $this->loadRoutesFrom(__DIR__.'/../routes/gdpr.php');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/gdpr.php', 'gdpr');
    }
}
