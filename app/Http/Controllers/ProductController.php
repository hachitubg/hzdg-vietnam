<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::where('type', 'product')
            ->where('is_visible', true)
            ->whereNull('parent_id')
            ->with('children')
            ->orderBy('sort_order')
            ->get();

        $products = Product::where('is_visible', true)
            ->with('category', 'images')
            ->orderByDesc('created_at')
            ->paginate(12);

        return view('frontend.products.index', compact('categories', 'products'));
    }

    public function category($slug)
    {
        $category = Category::query()
            ->where('type', 'product')
            ->where('slug', $slug)
            ->where('is_visible', true)
            ->firstOrFail();

        $categories = Category::query()
            ->where('type', 'product')
            ->where('is_visible', true)
            ->orderBy('sort_order')
            ->get();

        $products = Product::query()
            ->where('is_visible', true)
            ->where(function ($query) use ($category) {
                $query->where('category_id', $category->id)
                    ->orWhereHas('category', fn($q) => $q->where('parent_id', $category->id));
            })
            ->with('category', 'images')
            ->latest()
            ->paginate(12);

        return view('frontend.products.category', compact('category', 'categories', 'products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->where('is_visible', true)
            ->with('category', 'images', 'reviews')
            ->firstOrFail();

        $product->increment('view_count');

        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('is_visible', true)
            ->with('images')
            ->latest()
            ->limit(4)
            ->get();

        return view('frontend.products.show', compact('product', 'relatedProducts'));
    }
}
