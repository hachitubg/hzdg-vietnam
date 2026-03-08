<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::query()
            ->where('is_visible', true)
            ->with('images')
            ->latest()
            ->limit(8)
            ->get();

        $featuredProjects = Project::query()
            ->where('is_visible', true)
            ->latest()
            ->limit(6)
            ->get();

        $latestPosts = Post::query()
            ->where('is_visible', true)
            ->latest('published_at')
            ->limit(6)
            ->get();

        return view('frontend.home', compact('featuredProducts', 'featuredProjects', 'latestPosts'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function capability()
    {
        return view('frontend.capability');
    }

    public function audioSystem()
    {
        return view('frontend.audio-system');
    }
}
