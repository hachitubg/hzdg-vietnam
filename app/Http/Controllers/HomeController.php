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
        $postCategories = Category::where('type', 'post')
            ->where('is_visible', true)
            ->orderBy('sort_order')
            ->get();

        $homePosts = [];
        foreach ($postCategories as $cat) {
            $homePosts[$cat->id] = Post::where('category_id', $cat->id)
                ->where('is_visible', true)
                ->orderByDesc('is_featured')
                ->orderByDesc('published_at')
                ->limit(8)
                ->get();
        }

        return view('frontend.home', compact('postCategories', 'homePosts'));
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