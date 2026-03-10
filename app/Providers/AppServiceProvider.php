<?php

namespace App\Providers;

use App\Models\Category;
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
        View::composer('frontend.partials.header', function ($view) {
            $view->with('productCategories', Category::where('type', 'product')->where('is_visible', true)->whereNull('parent_id')->orderBy('sort_order')->get());
            $view->with('projectCategories', Category::where('type', 'project')->where('is_visible', true)->whereNull('parent_id')->orderBy('sort_order')->get());
        });
    }
}
