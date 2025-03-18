<?php

namespace App\Providers;

use App\Interfaces\barberShopInterface;
use App\Repositories\barberShopRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(barberShopInterface::class, barberShopRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
