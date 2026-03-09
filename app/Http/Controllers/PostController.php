<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::where('type', 'post')->where('is_visible', true)->orderBy('sort_order')->get();

        $query = Post::where('is_visible', true);

        if ($request->filled('category')) {
            $cat = Category::where('slug', $request->input('category'))->where('type', 'post')->first();
            if ($cat) {
                $query->where('category_id', $cat->id);
            }
        }

        $posts = $query->orderByDesc('is_featured')->orderByDesc('published_at')->paginate(12);

        return view('frontend.posts.index', compact('categories', 'posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->where('is_visible', true)->with('category')->firstOrFail();
        $post->increment('view_count');

        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->where('is_visible', true)
            ->orderByDesc('published_at')
            ->limit(4)
            ->get();

        $popularPosts = Post::where('is_visible', true)
            ->orderByDesc('view_count')
            ->limit(6)
            ->get();

        return view('frontend.posts.show', compact('post', 'relatedPosts', 'popularPosts'));
    }
}