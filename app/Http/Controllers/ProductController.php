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

    public function allCategories()
    {
        $categories = Category::where('type', 'product')->where('is_visible', true)->whereNull('parent_id')->with('children')->orderBy('sort_order')->get();

        // Collect all leaf category IDs
        $allCatIds = [];
        foreach ($categories as $cat) {
            if ($cat->children->count() > 0) {
                foreach ($cat->children as $child) {
                    $allCatIds[] = $child->id;
                }
            } else {
                $allCatIds[] = $cat->id;
            }
        }

        $sort = request('sort', 'featured');
        $activeSlug = request('cat');
        $activeTab = null;

        if ($activeSlug) {
            $activeTab = Category::where('slug', $activeSlug)->where('is_visible', true)->whereNull('parent_id')->first();
            if ($activeTab && $activeTab->children->count() === 0) {
                // Leaf parent category — filter on this page
                $query = Product::where('category_id', $activeTab->id)->where('is_visible', true);
            } else {
                // Has children or not found - show all (parent with children should use /danh-muc/slug instead)
                $query = Product::whereIn('category_id', $allCatIds)->where('is_visible', true);
                $activeTab = null;
            }
        } else {
            $query = Product::whereIn('category_id', $allCatIds)->where('is_visible', true);
        }

        $query->with(['images', 'reviews' => fn($q) => $q->where('is_approved', true), 'promotionProduct']);

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
        $tabs = $categories;

        return view('frontend.products.all', compact('categories', 'tabs', 'activeTab', 'products', 'sort'));
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

        // All top-level parent categories (for navigation when no subcategories)
        $parentTabs = Category::whereNull('parent_id')
            ->where('type', 'product')
            ->where('is_visible', true)
            ->orderBy('sort_order')
            ->get();

        // If category has sub-categories: show child tabs with toggle
        if ($category->children->count() > 0) {
            $tabs = $category->children;
            $subSlug = request('sub');
            $activeTab = $subSlug ? $tabs->firstWhere('slug', $subSlug) : null;
            // activeTab = null means "show all" (no child filter)
            $isParentCategory = true;

            if ($activeTab) {
                $query = Product::where('category_id', $activeTab->id)->where('is_visible', true);
            } else {
                // Show all products from all children
                $childIds = $tabs->pluck('id')->toArray();
                $query = Product::whereIn('category_id', $childIds)->where('is_visible', true);
            }
        } else {
            // Leaf category or parent with no children
            if ($category->parent_id) {
                // Leaf category: show sibling categories as tabs
                $tabs = Category::where('parent_id', $category->parent_id)
                    ->where('is_visible', true)
                    ->orderBy('sort_order')
                    ->get();
                $activeTab = $category;
                $isParentCategory = false;
                $query = Product::where('category_id', $activeTab->id)->where('is_visible', true);
            } else {
                // Parent category with no children: show own products
                $tabs = collect();
                $activeTab = null;
                $isParentCategory = true;
                $query = Product::where('category_id', $category->id)->where('is_visible', true);
            }
        }

        $query->with(['images', 'reviews' => fn($q) => $q->where('is_approved', true), 'promotionProduct']);

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
            'category', 'tabs', 'activeTab', 'products', 'sort', 'isParentCategory', 'parentTabs'
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
            ->with(['images', 'reviews', 'promotionProduct'])
            ->limit(10)
            ->get();

        // All top-level parent categories for navigation
        $parentTabs = Category::whereNull('parent_id')
            ->where('type', 'product')
            ->where('is_visible', true)
            ->orderBy('sort_order')
            ->get();

        return view('frontend.products.show', compact('product', 'relatedProducts', 'parentTabs'));
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