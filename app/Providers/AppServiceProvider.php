<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('frontend.*', function ($view) {
            $view->with([
                'globalProductCategories' => Category::query()
                    ->where('type', 'product')
                    ->where('is_visible', true)
                    ->orderBy('sort_order')
                    ->get(),
                'globalLatestProducts' => Product::query()
                    ->where('is_visible', true)
                    ->with('images')
                    ->latest()
                    ->limit(6)
                    ->get(),
                'globalLatestPosts' => Post::query()
                    ->where('is_visible', true)
                    ->latest('published_at')
                    ->limit(4)
                    ->get(),
                'globalLatestProjects' => Project::query()
                    ->where('is_visible', true)
                    ->latest()
                    ->limit(4)
                    ->get(),
            ]);
        });
    }
}
