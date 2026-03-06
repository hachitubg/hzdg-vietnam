<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Project;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $hotProducts = Product::where('is_visible', true)->where('is_hot', true)->limit(8)->get();
        $newProducts = Product::where('is_visible', true)->where('is_new', true)->limit(8)->get();
        $bestsellerProducts = Product::where('is_visible', true)->where('is_bestseller', true)->limit(8)->get();
        $categories = Category::where('type', 'product')->where('is_visible', true)->whereNull('parent_id')->with('children')->orderBy('sort_order')->get();
        $featuredProjects = Project::where('is_visible', true)->where('is_featured', true)->limit(6)->get();
        $latestPosts = Post::where('is_visible', true)->orderByDesc('published_at')->limit(6)->get();

        return view('frontend.home', compact('hotProducts', 'newProducts', 'bestsellerProducts', 'categories', 'featuredProjects', 'latestPosts'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function capability()
    {
        return view('frontend.capability');
    }
}