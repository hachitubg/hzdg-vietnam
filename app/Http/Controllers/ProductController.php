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
        return view('frontend.products.category');
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->where('is_visible', true)->with('category', 'images', 'reviews')->first();

        if (!$product) {
            return view('frontend.products.show');
        }

        $product->increment('view_count');
        $relatedProducts = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->where('is_visible', true)->limit(4)->get();

        return view('frontend.products.show', compact('product', 'relatedProducts'));
    }
}