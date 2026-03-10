@extends('frontend.layouts.app')

@section('title', 'Danh mục sản phẩm – HZDG Việt Nam')
@section('body_class', 'page-template-page-blank-php woocommerce-page')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/extracted-products-category.css') }}">
@endpush
@push('scripts')
    <script defer src="{{ asset('assets/extracted-products-category.js') }}"></script>
@endpush

@section('content')

{{-- ===================== BANNER ===================== --}}
<div class="cat-banner">
    <img class="cat-banner__img" src="{{ asset('wp-content/uploads/images_hzdg/danhmuc_01.png') }}" alt="Danh mục sản phẩm">
</div>

{{-- ===================== MAIN CONTENT ===================== --}}
<div class="container" style="max-width:1250px; margin:0 auto; padding:0 20px;">

    {{-- Breadcrumb --}}
    <nav class="cat-breadcrumb">
        <a href="{{ route('home') }}">Trang chủ</a>
        <span class="sep">»</span>
        <span>Danh mục sản phẩm</span>
    </nav>

    {{-- Parent Category Tabs --}}
    <div class="cat-tabs-wrap">
        @foreach($tabs as $tab)
            @php
                $isActiveTab = $activeTab && $activeTab->id === $tab->id;
                $hasChildren = $tab->children->count() > 0;

                if ($hasChildren) {
                    // Has children → link to /danh-muc/slug
                    $tabUrl = route('products.category', $tab->slug);
                } else {
                    // No children → toggle filter on current page
                    $tabUrl = $isActiveTab
                        ? route('products.index') . ($sort !== 'featured' ? '?sort=' . $sort : '')
                        : route('products.index') . '?cat=' . $tab->slug . ($sort !== 'featured' ? '&sort=' . $sort : '');
                }
            @endphp
            <a href="{{ $tabUrl }}" class="cat-tab {{ $isActiveTab ? 'is-active' : '' }}">
                @if($tab->image)
                    <img class="cat-tab__icon" src="{{ Storage::url($tab->image) }}" alt="{{ $tab->name }}">
                @endif
                {{ $tab->name }}
                @if($hasChildren)
                    <i class="fas fa-chevron-right" style="margin-left:4px;font-size:10px;opacity:.5;"></i>
                @elseif($isActiveTab)
                    <i class="fas fa-times" style="margin-left:6px;font-size:11px;opacity:.6;"></i>
                @endif
            </a>
        @endforeach
    </div>

    {{-- Section header: title + sort --}}
    <div class="cat-section-header">
        <h2 class="cat-section-title">{{ $activeTab ? $activeTab->name : 'Tất cả sản phẩm' }}</h2>
        <div>
            <select class="cat-sort-select" style="width:200px" onchange="window.location.href=this.value">
                @php
                    $sortBase = route('products.index') . ($activeTab ? '?cat=' . $activeTab->slug . '&' : '?');
                @endphp
                <option value="{{ $sortBase . 'sort=featured' }}" {{ $sort === 'featured' ? 'selected' : '' }}>Sắp xếp theo: Nổi bật</option>
                <option value="{{ $sortBase . 'sort=newest' }}" {{ $sort === 'newest' ? 'selected' : '' }}>Mới nhất</option>
                <option value="{{ $sortBase . 'sort=price_asc' }}" {{ $sort === 'price_asc' ? 'selected' : '' }}>Giá tăng dần</option>
                <option value="{{ $sortBase . 'sort=price_desc' }}" {{ $sort === 'price_desc' ? 'selected' : '' }}>Giá giảm dần</option>
            </select>
        </div>
    </div>

    {{-- Product Grid --}}
    @if($products->count() > 0)
    <div class="cat-products-grid">
        @foreach($products as $product)
            @php
                $thumb = $product->images->firstWhere('is_thumbnail', true) ?? $product->images->first();
                $hasSale = $product->sale_price && $product->sale_price > 0 && $product->sale_price < $product->price;
                $discountPct = $hasSale ? round(($product->price - $product->sale_price) / $product->price * 100) : 0;
                $approvedReviews = $product->reviews;
                $reviewCount = $approvedReviews->count();
                $avgRating = $reviewCount > 0 ? round($approvedReviews->avg('rating'), 1) : 0;
            @endphp
            <a href="{{ route('products.show', $product->slug) }}" class="cat-product-card">

                {{-- Badges row --}}
                <div class="cat-product-badges">
                    @if($product->is_new)
                        <span class="badge-pill badge-new"><i class="fas fa-seedling"></i> New {{ date('Y') }}</span>
                    @endif
                    @if($product->is_bestseller)
                        <span class="badge-pill badge-bestseller"><i class="fas fa-medal"></i> Bán Chạy</span>
                    @endif
                    @if($product->is_hot)
                        <span class="badge-pill badge-hot"><i class="fas fa-fire"></i> Hot</span>
                    @endif
                </div>

                {{-- Image --}}
                <div class="cat-product-img-wrap">
                    @if($thumb)
                        <img src="{{ asset('storage/' . $thumb->image_url) }}" alt="{{ $product->name }}" loading="lazy">
                    @else
                        <img src="{{ asset('wp-content/uploads/logo-VD-150.png') }}" alt="{{ $product->name }}" loading="lazy">
                    @endif
                </div>

                {{-- Info --}}
                <div class="cat-product-info">
                    <div class="cat-product-name">{{ $product->name }}</div>

                    <div class="cat-price-block">
                        @if($product->price > 0)
                            @if($hasSale)
                                <span class="price-sale">{{ number_format($product->sale_price, 0, ',', '.') }}đ</span>
                                <div class="price-secondary">
                                    <span class="price-original">{{ number_format($product->price, 0, ',', '.') }}đ</span>
                                    <span class="price-discount">-{{ $discountPct }}%</span>
                                </div>
                            @else
                                <span class="price-sale">{{ number_format($product->price, 0, ',', '.') }}đ</span>
                            @endif
                        @else
                            <span class="price-contact">Liên hệ</span>
                        @endif
                    </div>

                    @if($product->is_promotion && $product->promotionProduct)
                    <div class="cat-product-gift">
                        <i class="fas fa-gift"></i>
                        Tặng <strong>PMH {{ number_format($product->promotionProduct->price, 0, ',', '.') }}đ</strong>
                    </div>
                    @endif

                    <div class="cat-product-rating">
                        <span class="stars">★</span>
                        <span>{{ $avgRating > 0 ? $avgRating : 0 }} ({{ $reviewCount }})</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="cat-pagination">
        {{ $products->appends(request()->query())->links() }}
    </div>

    @else
    <div class="cat-empty">
        <p>Chưa có sản phẩm trong danh mục này.</p>
    </div>
    @endif

</div>
@endsection
