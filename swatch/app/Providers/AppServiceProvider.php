<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ModelRepositoryInterface;
use App\Repositories\CategoryRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(ModelRepositoryInterface::class, CategoryRepository::class);
         $this->app->singleton(ModelRepositoryInterface::class, ProductRepository::class);
    }
}
