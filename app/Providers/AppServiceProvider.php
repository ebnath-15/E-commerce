<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Settings;
use App\Models\Wishlist;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
        Paginator::useBootstrap();

        if (Schema::hasTable('categories')) {

            $categories = Category::all();
            View::share('categories', $categories);
        }
        

        if (Schema::hasTable('wishlists')) {
           
            $wishlist = Wishlist::all();        
            View::share('wishlists', $wishlist); 
           
         } 
    }
}
