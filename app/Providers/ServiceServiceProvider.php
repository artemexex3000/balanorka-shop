<?php

namespace App\Providers;

use App\Contracts\UserServicesInterface;
use App\Services\UserServices;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(
            UserServicesInterface::class,
            UserServices::class
        );
    }
}
