<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::where('type', 'post')->where('is_visible', true)->orderBy('sort_order')->get();
        $posts = Post::where('is_visible', true)->with('category')->orderByDesc('published_at')->paginate(12);

        return view('frontend.posts.index', compact('categories', 'posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->where('is_visible', true)->with('category')->firstOrFail();
        $post->increment('view_count');
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->where('is_visible', true)
            ->latest('published_at')
            ->limit(4)
            ->get();

        return view('frontend.posts.show', compact('post', 'relatedPosts'));
    }
}
