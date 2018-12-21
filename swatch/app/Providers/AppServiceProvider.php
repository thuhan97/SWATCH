<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\RepositoryInterface;
use App\Category;
use App\Brand;
use App\Order;
use App\Contact;
use App\Customer;
use Cart;
use Illuminate\Support\Facades\Auth;
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
        $data['brand']=Brand::all(); 
        $data['count'] = count(Order::where('status',1)->get());
        $data['contact'] = count(Contact::where('status',0)->get()); 
        $data['customer']=count(Customer::all());
        $cancel= count(Order::where('status',3)->get());
        $order= count(Order::all());
        $data['cancel_rate']=( $cancel/$order)*100;
    
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
       $this->app->singleton(
        \App\Repositories\Order\OrderRepositoryInterface::class,
        \App\Repositories\Order\OrderEloquentRepository::class
    );
       $this->app->singleton(
        \App\Repositories\OrderDetail\OrderDetailRepositoryInterface::class,
        \App\Repositories\OrderDetail\OrderDetailEloquentRepository::class
    );
       $this->app->singleton(
        \App\Repositories\Comment\CommentRepositoryInterface::class,
        \App\Repositories\Comment\CommentEloquentRepository::class
    );
       $this->app->singleton(
        \App\Repositories\Contact\ContactRepositoryInterface::class,
        \App\Repositories\Contact\ContactEloquentRepository::class
    );
    }
}
