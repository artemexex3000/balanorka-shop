<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Paddle\Cashier;
use Laravel\Paddle\Receipt;
use Laravel\Paddle\Subscription;

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
        Cashier::useReceiptModel(Receipt::class);
        Cashier::useSubscriptionModel(Subscription::class);
    }
}
