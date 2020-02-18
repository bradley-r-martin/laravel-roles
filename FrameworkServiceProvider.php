<?php

namespace BRM\Roles;

use Illuminate\Support\ServiceProvider;

class FrameworkServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (!class_exists('\BRM\Tenants\FrameworkServiceProvider')) {
            $this->loadMigrationsFrom(__DIR__.'/app/Database/Migrations');
        }

        $this->loadRoutesFrom(__DIR__.'/app/routes.php');
    }
}
