<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::where('type', 'product')->where('is_visible', true)->whereNull('parent_id')->with('children')->orderBy('sort_order')->get();
        $products = Product::where('is_visible', true)->with('category', 'images')->orderByDesc('created_at')->paginate(12);

        return view('frontend.products.index', compact('categories', 'products'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->where('type', 'product')->firstOrFail();
        $categoryIds = $category->children->pluck('id')->push($category->id);
        $products = Product::whereIn('category_id', $categoryIds)->where('is_visible', true)->with('images')->paginate(12);
        $categories = Category::where('type', 'product')->where('is_visible', true)->whereNull('parent_id')->with('children')->orderBy('sort_order')->get();

        return view('frontend.products.category', compact('category', 'categories', 'products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->where('is_visible', true)->with('category', 'images', 'reviews')->firstOrFail();
        $product->increment('view_count');
        $relatedProducts = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->where('is_visible', true)->limit(4)->get();

        return view('frontend.products.show', compact('product', 'relatedProducts'));
    }
}