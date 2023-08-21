<?php

namespace App\Providers;

use App\Models\Product;
use Illuminate\Support\Facades\App;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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

        // App::setlocale(request('locale','en'));

        View::composer('*', function ($view) {
            $products = Product::paginate(request()->page_size);
            $customer_id = Auth::id();

            // $view->withMonth($products,$customer_id);
            $view->with([
                'products' => $products,
                'customer_id' => $customer_id,
            ]);
        });

    }
}
