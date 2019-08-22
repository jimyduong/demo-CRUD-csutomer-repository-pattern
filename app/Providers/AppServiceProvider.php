<?php

namespace App\Providers;

use App\Repositories\CustomersRepositoryInterface;
use App\Repositories\Ipm\CustomerRepositoryIpm;
use App\Services\CustomerServiceInterface;
use App\Services\Ipm\CustomerServiceIpm;
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
        $this->app->singleton(
            CustomersRepositoryInterface::class,
            CustomerRepositoryIpm::class
        );
        $this->app->singleton(
            CustomerServiceInterface::class,
            CustomerServiceIpm::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
