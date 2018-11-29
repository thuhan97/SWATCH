<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\RepositoryInterface;
use App\Category;
use Cart;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $data['categories']= Category::all();                     
        view()->share($data);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
       $this->app->singleton(
        \App\Repositories\Category\CategoryRepositoryInterface::class,
        \App\Repositories\Category\CategoryEloquentRepository::class
    );
       $this->app->singleton(
        \App\Repositories\Brand\BrandRepositoryInterface::class,
        \App\Repositories\Brand\BrandEloquentRepository::class
    );
       $this->app->singleton(
        \App\Repositories\Product\ProductRepositoryInterface::class,
        \App\Repositories\Product\ProductEloquentRepository::class
    );
       $this->app->singleton(
        \App\Repositories\Sale\SaleRepositoryInterface::class,
        \App\Repositories\Sale\SaleEloquentRepository::class
    );
       $this->app->singleton(
        \App\Repositories\User\UserRepositoryInterface::class,
        \App\Repositories\User\UserEloquentRepository::class
    );
       $this->app->singleton(
        \App\Repositories\Customer\CustomerRepositoryInterface::class,
        \App\Repositories\Customer\CustomerEloquentRepository::class
    );
    }
}
