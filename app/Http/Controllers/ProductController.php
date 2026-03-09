<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductReview;
use Illuminate\Http\Request;

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
        $category = Category::where('slug', $slug)
            ->where('type', 'product')
            ->where('is_visible', true)
            ->with([
                'children' => fn($q) => $q->where('is_visible', true)->orderBy('sort_order'),
                'parent',
            ])
            ->first();

        if (!$category) {
            abort(404);
        }

        $sort = request('sort', 'featured');

        // If category has sub-categories: use them as filter tabs
        if ($category->children->count() > 0) {
            $tabs = $category->children;
            $subSlug = request('sub');
            $activeTab = $subSlug ? $tabs->firstWhere('slug', $subSlug) : null;
            if (!$activeTab) {
                $activeTab = $tabs->first();
            }
            $isParentCategory = true;
        } else {
            // Leaf category: show sibling categories as tabs
            if ($category->parent_id) {
                $tabs = Category::where('parent_id', $category->parent_id)
                    ->where('is_visible', true)
                    ->orderBy('sort_order')
                    ->get();
            } else {
                $tabs = collect([$category]);
            }
            $activeTab = $category;
            $isParentCategory = false;
        }

        $query = Product::where('category_id', $activeTab->id)
            ->where('is_visible', true)
            ->with(['images', 'reviews' => fn($q) => $q->where('is_approved', true), 'promotionProduct']);

        match ($sort) {
            'price_asc'  => $query->orderBy('price'),
            'price_desc' => $query->orderByDesc('price'),
            'newest'     => $query->orderByDesc('created_at'),
            default      => $query->orderByDesc('is_hot')
                                  ->orderByDesc('is_bestseller')
                                  ->orderByDesc('is_new')
                                  ->orderBy('sort_order'),
        };

        $products = $query->paginate(20);

        return view('frontend.products.category', compact(
            'category', 'tabs', 'activeTab', 'products', 'sort', 'isParentCategory'
        ));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->where('is_visible', true)
            ->with(['category.parent', 'images', 'reviews'])
            ->first();

        if (!$product) {
            return view('frontend.products.show');
        }

        $product->increment('view_count');
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('is_visible', true)
            ->with(['images', 'reviews'])
            ->limit(10)
            ->get();

        return view('frontend.products.show', compact('product', 'relatedProducts'));
    }

    public function storeReview(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->where('is_visible', true)->first();

        if (!$product) {
            abort(404);
        }

        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'reviewer_name' => 'required|string|max:255',
            'reviewer_email' => 'nullable|email|max:255',
            'reviewer_phone' => 'nullable|string|max:20',
            'comment' => 'required|string|max:2000',
        ]);

        ProductReview::create([
            'product_id' => $product->id,
            'reviewer_name' => $validated['reviewer_name'],
            'reviewer_email' => $validated['reviewer_email'] ?? null,
            'reviewer_phone' => $validated['reviewer_phone'] ?? null,
            'rating' => $validated['rating'],
            'comment' => $validated['comment'],
            'is_approved' => false,
        ]);

        return redirect()->route('products.show', $slug)
            ->with('review_success', 'Cảm ơn bạn đã gửi đánh giá! Đánh giá sẽ được hiển thị sau khi được duyệt.');
    }
}