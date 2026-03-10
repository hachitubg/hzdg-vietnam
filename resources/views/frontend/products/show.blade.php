@extends('frontend.layouts.app')

@section('title', isset($product) ? $product->name . ' – HZDG Việt Nam' : 'Sản phẩm – HZDG Việt Nam')
@section('body_class', 'page-template-page-blank-php single-product')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/extracted-products-show.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-show.css') }}">
@endpush
@push('scripts')
    <script defer src="{{ asset('assets/extracted-products-show.js') }}"></script>
@endpush

@php
    $thumb = isset($product) ? ($product->images->where('is_thumbnail', true)->first() ?? $product->images->first()) : null;
    $approvedReviews = isset($product) ? $product->reviews->where('is_approved', true) : collect();
    $avgRating = $approvedReviews->count() > 0 ? round($approvedReviews->avg('rating'), 1) : 0;
    $reviewCount = $approvedReviews->count();
    $parentCategory = isset($product) && $product->category ? ($product->category->parent ?? $product->category) : null;
@endphp

@section('content')

    <div class="content-area" id="primary">
        <main class="site-main shop-container" id="main" role="main">

            @if(!isset($product))
                <p>Không tìm thấy sản phẩm.</p>
            @else

            <!-- Breadcrumb -->
            <div class="pd-breadcrumb">
                <a href="{{ route('home') }}">Trang chủ</a>
                <span class="sep">›</span>
                @if($product->category)
                    @if($product->category->parent)
                        <a href="{{ route('products.category', $product->category->parent->slug) }}">{{ $product->category->parent->name }}</a>
                        <span class="sep">›</span>
                    @endif
                    <a href="{{ route('products.category', $product->category->slug) }}">{{ $product->category->name }}</a>
                    <span class="sep">›</span>
                @endif
                <span>{{ $product->name }}</span>
            </div>

            <!-- Parent Category Tabs -->
            @if(isset($parentTabs) && $parentTabs->count() > 1)
            <div class="pd-category-tabs">
                @foreach($parentTabs as $ptab)
                    @php
                        $isActivePtab = $parentCategory && $ptab->id === $parentCategory->id;
                    @endphp
                    <a href="{{ route('products.category', $ptab->slug) }}"
                       class="pd-category-tab {{ $isActivePtab ? 'is-active' : '' }}">
                        @if($ptab->image)
                            <img src="{{ Storage::url($ptab->image) }}" alt="{{ $ptab->name }}">
                        @endif
                        <span>{{ $ptab->name }}</span>
                    </a>
                @endforeach
            </div>
            @endif

            <div class="product type-product status-publish first instock has-post-thumbnail product-type-simple"
                id="product-{{ $product->id }}">
                <div class="custom-product-page ux-layout-2482 ux-layout-scope-global">

                    <!-- Product Title & Rating (inline) -->
                    <div class="pd-product-header">
                        <h1 class="pd-product-title">{{ $product->name }}</h1>
                        <div class="pd-rating-line">
                            <span class="pd-stars">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= floor($avgRating))★@else☆@endif
                                @endfor
                            </span>
                            <a href="#pd-reviews-section" class="pd-review-count">{{ $reviewCount }} đánh giá</a>
                        </div>
                    </div>

                    <hr style="max-width: 1250px; margin:auto" />
                    
                    <!-- THÔNG TIN SẢN PHẨM -->
                    <div class="row row-divided" id="row-2118618456">
                        <div class="col no-padding-bottom medium-4 small-12 large-4" style="padding:0px" id="col-1944821776">
                            <div class="col-inner">
                                <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" style="margin:0px"
                                    data-columns="4">
                                    <div class="badge-container is-larger absolute left top z-1"></div>
                                    <div class="image-tools absolute top show-on-hover right z-3"></div>
                                    <figure
                                        class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half">
                                        @forelse($product->images as $img)
                                        <div class="woocommerce-product-gallery__image slide {{ $loop->first ? 'first' : '' }}"
                                            data-thumb="{{ asset('storage/' . $img->image_url) }}"
                                            data-thumb-alt="{{ $img->alt_text ?? $product->name }}">
                                            <a href="{{ asset('storage/' . $img->image_url) }}">
                                                <img src="{{ asset('storage/' . $img->image_url) }}"
                                                     alt="{{ $img->alt_text ?? $product->name }}"
                                                     class="wp-post-image" width="600" height="600"
                                                     decoding="async" />
                                            </a>
                                        </div>
                                        @empty
                                        <div class="woocommerce-product-gallery__image slide first">
                                            <div style="width:100%;height:400px;background:#eee;display:flex;align-items:center;justify-content:center;color:#999;">
                                                No image
                                            </div>
                                        </div>
                                        @endforelse
                                    </figure>
                                    <div class="image-tools absolute bottom left z-3">
                                        <a class="zoom-button button is-outline circle icon tooltip hide-for-small"
                                            href="#product-zoom" title="Phóng to">
                                            <i class="icon-expand"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="pd-action-buttons">
                                    @if($product->video_url)
                                    <a href="javascript:void(0)" class="pd-action-btn" onclick="document.getElementById('videoModal').classList.add('is-open')">
                                        <span class="action-icon video"><i class="far fa-play-circle"></i></span>
                                        <span>Video sản phẩm</span>
                                    </a>
                                    @endif
                                    <a href="javascript:void(0)" class="pd-action-btn" onclick="document.querySelector('.product-gallery-slider').scrollIntoView({behavior:'smooth'})">
                                        <span class="action-icon images"><i class="far fa-images"></i></span>
                                        <span>Hình ảnh sản phẩm</span>
                                    </a>
                                    <a href="#tab-description" class="pd-action-btn">
                                        <span class="action-icon guide"><i class="far fa-book-open"></i></span>
                                        <span>Hướng dẫn sử dụng</span>
                                    </a>
                                    <a href="#product-specification" class="pd-action-btn">
                                        <span class="action-icon specs"><i class="far fa-list-alt"></i></span>
                                        <span>Thông số sản phẩm</span>
                                    </a>
                                </div>

                                <!-- Ưu điểm sản phẩm -->
                                @if(!empty($product->advantages))
                                <div class="pd-advantages">
                                    @foreach($product->advantages as $index => $adv)
                                    @php $advText = is_array($adv) ? ($adv['value'] ?? ($adv['text'] ?? '')) : $adv; @endphp
                                    @if($advText)
                                    <div class="pd-advantage-item">
                                        <span class="pd-advantage-icon" style="background: {{ ['#ffe0e0','#e3f2fd','#fff3e0','#e8f5e9','#f3e5f5','#fce4ec'][$index % 6] }}; color: {{ ['#e74c3c','#1976d2','#f57c00','#27ae60','#9c27b0','#e91e63'][$index % 6] }};">
                                            <i class="fas fa-check-circle"></i>
                                        </span>
                                        <span class="pd-advantage-text">{{ $advText }}</span>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="col medium-5 small-12 large-5" style="border: none" id="col-371777728">
                            <div class="col-inner text-left">
                                <div class="row no-padding-bottom" id="row-320635278">
                                    <div class="col small-12 large-12" id="col-756648283">
                                        <div class="col-inner">
                                            <!-- Price -->
                                            <div class="pd-price-block">
                                                <div class="pd-price-label">Giá bán:</div>
                                                <div class="pd-price-row">
                                                    <span class="pd-price-sale">
                                                        {{ number_format($product->sale_price ?? $product->price) }} <span class="dong">đ</span>
                                                    </span>
                                                    <span class="pd-price-unit">/ Chiếc</span>
                                                </div>
                                                @if($product->sale_price)
                                                <div class="pd-price-row" style="margin-top:4px;">
                                                    <span class="pd-price-original">{{ number_format($product->price) }}đ</span>
                                                    <span class="pd-price-discount">-{{ round(100 - ($product->sale_price / $product->price * 100)) }}%</span>
                                                </div>
                                                @endif
                                                <div class="pd-price-note">Giá chưa bao gồm thuế VAT</div>
                                                <div class="pd-stock-status {{ $product->in_stock ? '' : 'out-of-stock' }}">
                                                    @if($product->in_stock)
                                                        <i class="fas fa-check-circle"></i> Còn hàng
                                                    @else
                                                        <i class="fas fa-times-circle"></i> Hết hàng
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thông số tóm tắt (Key-Value) -->
                                    <div class="col small-12 large-12" id="col-2095935893">
                                        <div class="pd-specs-summary">
                                            <ul>
                                                @if($product->category && $product->category->parent)
                                                <li>
                                                    <span class="spec-icon"><i class="fas fa-circle"></i></span>
                                                    <strong>Thương hiệu:</strong>
                                                    <span>HZDG</span>
                                                </li>
                                                @endif
                                                @if(!empty($product->specs_summary))
                                                    @foreach($product->specs_summary as $spec)
                                                    <li>
                                                        <span class="spec-icon"><i class="fas fa-circle"></i></span>
                                                        <strong>{{ $spec['key'] ?? '' }}:</strong>
                                                        <span>{{ $spec['value'] ?? '' }}</span>
                                                    </li>
                                                    @endforeach
                                                @endif
                                                @if($product->category)
                                                <li>
                                                    <span class="spec-icon"><i class="fas fa-circle"></i></span>
                                                    <strong>Category:</strong>
                                                    <span>
                                                        @if($product->category->parent)
                                                            <a href="{{ route('products.category', $product->category->parent->slug) }}">{{ $product->category->parent->name }}</a>,
                                                        @endif
                                                        <a href="{{ route('products.category', $product->category->slug) }}">{{ $product->category->name }}</a>
                                                    </span>
                                                </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col small-12 large-12" id="col-1541856570">
                                        <div class="col-inner">
                                            <!-- Zalo Banner -->
                                            <div class="pd-zalo-banner">
                                                <img src="{{ asset('wp-content/uploads/zalo-banner.png') }}" alt="Tư vấn Zalo" onerror="this.parentElement.style.display='none'">
                                            </div>

                                            <!-- Contact Buttons -->
                                            <div class="row row-collapse align-center no-padding-bottom" id="row-1747863300">
                                                <div class="col medium-6 small-12 large-6" id="col-558505336">
                                                    <div class="col-inner text-center dark">
                                                        <div class="expand">
                                                            <div class="ace-iconbox--inner button" style="justify-content:center;border-radius:10px;background-color:rgb(0, 113, 210);line-height:1;padding:5px 0px 5px 0px;">
                                                                <a class="fill" href="https://zalo.me/0985133038" title="TƯ VẤN QUA ZALO">
                                                                    <div class="fill banner-link"></div>
                                                                </a>
                                                                <div class="ace-iconbox--icon type_icon">
                                                                    <div class="icon-inner">
                                                                        <i class="far fab fa-whatsapp" style="font-size:150%;line-height:1.5em;width:1.5em;height:1.5em"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="ace-iconbox--content">
                                                                    <h3 class="ace-text--head" style="font-size:100%;">TƯ VẤN QUA ZALO</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col medium-6 small-12 large-6" id="col-109649318">
                                                    <div class="col-inner text-center dark">
                                                        <div class="expand">
                                                            <div class="ace-iconbox--inner button" style="justify-content:center;border-radius:10px;background-color:rgb(0, 113, 210);line-height:1;padding:5px 0px 5px 0px;">
                                                                <a class="fill" href="tel:0967793333" title="Mr Quyết: 096.779.3333">
                                                                    <div class="fill banner-link"></div>
                                                                </a>
                                                                <div class="ace-iconbox--icon type_icon">
                                                                    <div class="icon-inner">
                                                                        <i class="far fab fa-whatsapp" style="font-size:150%;line-height:1.5em;width:1.5em;height:1.5em"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="ace-iconbox--content">
                                                                    <h3 class="ace-text--head" style="font-size:100%;">Mr Quyết: 096.779.3333</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- 2 phần thả card bên phải -->
                        <div class="col no-padding medium-3 small-12 large-3 border-none" id="col-133889202">
                            <div class="col-inner">
                                <div class="row" id="row-1119881910">
                                    <div class="col small-12 large-12" id="col-1898511685">
                                        <div class="col-inner">
                                            <div class="is-border is-dashed" style="border-radius:10px;border-width:2px 2px 2px 2px;">
                                            </div>
                                            <div class="container section-title-container ace-title" id="title-1317511182" style="margin-top:10px;margin-bottom:10px;">
                                                <heading class="section-title section-title-normal left">
                                                    <div class="section-title-main"
                                                        style="color:#254283;text-transform:inherit;font-weight:inherit;">
                                                        <b></b><span class="-style">
                                                            <p style="font-size:23px">Vì sao chọn HZDG Việt Nam</p>
                                                        </span><b></b></div>
                                                </heading>
                                            </div>
                                            <div class="expand">
                                                <div class="ace-iconbox--inner" style="justify-content:flex-start;border-radius:10px;background-color:transparent;line-height:3;">
                                                    <div class="ace-iconbox--icon type_icon" style="margin:0px 10px 0px 0px;">
                                                        <div class="icon-inner">
                                                            <i class="far fa-award" style="font-size:100%;line-height:1em;width:1em;height:1em"></i>
                                                        </div>
                                                    </div>
                                                    <div class="ace-iconbox--content">
                                                        <h3 class="ace-text--head" style="font-size:100%;text-transform:uppercase;font-weight:bold;">
                                                            Sản phẩm chất lượng</h3>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="expand">
                                                <div class="ace-iconbox--inner" style="justify-content:flex-start;border-radius:10px;background-color:transparent;line-height:3;">
                                                    <div class="ace-iconbox--icon type_icon" style="margin:0px 10px 0px 0px;">
                                                        <div class="icon-inner">
                                                            <i class="far fa-money-bill" style="font-size:100%;line-height:1em;width:1em;height:1em"></i>
                                                        </div>
                                                    </div>
                                                    <div class="ace-iconbox--content">
                                                        <h3 class="ace-text--head" style="font-size:100%;text-transform:uppercase;font-weight:bold;">
                                                            Giá tốt nhất thị trường</h3>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="expand">
                                                <div class="ace-iconbox--inner" style="justify-content:flex-start;border-radius:10px;background-color:transparent;line-height:3;">
                                                    <div class="ace-iconbox--icon type_icon" style="margin:0px 10px 0px 0px;">
                                                        <div class="icon-inner">
                                                            <i class="far fa-user-group" style="font-size:100%;line-height:1em;width:1em;height:1em"></i>
                                                        </div>
                                                    </div>
                                                    <div class="ace-iconbox--content">
                                                        <h3 class="ace-text--head" style="font-size:100%;text-transform:uppercase;font-weight:bold;">
                                                            Kỹ thuật viên chuyên nghiệp</h3>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="expand">
                                                <div class="ace-iconbox--inner" style="justify-content:flex-start;border-radius:10px;background-color:transparent;line-height:3;">
                                                    <div class="ace-iconbox--icon type_icon" style="margin:0px 10px 0px 0px;">
                                                        <div class="icon-inner">
                                                            <i class="far fa-warehouse" style="font-size:100%;line-height:1em;width:1em;height:1em"></i>
                                                        </div>
                                                    </div>
                                                    <div class="ace-iconbox--content">
                                                        <h3 class="ace-text--head" style="font-size:100%;text-transform:uppercase;font-weight:bold;">
                                                            Trải nghiệm tại Showroom</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col small-12 large-12" id="col-101204409">
                                        <div class="col-inner">
                                            <div class="is-border is-dashed" style="border-radius:10px;border-width:2px 2px 2px 2px;"></div>
                                            <div class="container section-title-container ace-title" id="title-1150521370" style="margin-top:10px;margin-bottom:10px;">
                                                <heading class="section-title section-title-normal left">
                                                    <div class="section-title-main" style="color:#254283;text-transform:inherit;font-weight:inherit;">
                                                        <b></b><span class="-style">
                                                            <p style="font-size:23px">HZDG Việt Nam Cam kết</p>
                                                        </span><b></b></div>
                                                </heading>
                                            </div>

                                            <div class="stack stack-custom row large-columns-1 stack-row justify-start items-stretch">
                                                <div class="expand">
                                                    <div class="ace-iconbox--inner" style="justify-content:flex-start;border-radius:10px;background-color:transparent;line-height:3;">
                                                        <div class="ace-iconbox--icon type_icon" style="margin:0px 10px 0px 0px;">
                                                            <div class="icon-inner">
                                                                <i class="far fas fa-shipping-fast" style="font-size:100%;line-height:1em;width:1em;height:1em"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ace-iconbox--content">
                                                            <h3 class="ace-text--head" style="font-size:100%;text-transform:uppercase;font-weight:bold;">
                                                                Giao hàng đúng hẹn</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="expand">
                                                    <div class="ace-iconbox--inner" style="justify-content:flex-start;border-radius:10px;background-color:transparent;line-height:3;">
                                                        <div class="ace-iconbox--icon type_icon" style="margin:0px 10px 0px 0px;">
                                                            <div class="icon-inner">
                                                                <i class="far fas fa-award" style="font-size:100%;line-height:1em;width:1em;height:1em"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ace-iconbox--content">
                                                            <h3 class="ace-text--head" style="font-size:100%;text-transform:uppercase;font-weight:bold;">
                                                                Bảo hành chính hãng</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="expand">
                                                    <div class="ace-iconbox--inner" style="justify-content:flex-start;border-radius:10px;background-color:transparent;line-height:3;">
                                                        <div class="ace-iconbox--icon type_icon" style="margin:0px 10px 0px 0px;">
                                                            <div class="icon-inner">
                                                                <i class="far fas fa-repeat" style="font-size:100%;line-height:1em;width:1em;height:1em"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ace-iconbox--content">
                                                            <h3 class="ace-text--head" style="font-size:100%;text-transform:uppercase;font-weight:bold;">
                                                                1 Đổi 1 trong 7 ngày</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="expand">
                                                    <div class="ace-iconbox--inner" style="justify-content:flex-start;border-radius:10px;background-color:transparent;line-height:3;">
                                                        <div class="ace-iconbox--icon type_icon" style="margin:0px 10px 0px 0px;">
                                                            <div class="icon-inner">
                                                                <i class="far fas fa-calendar-week" style="font-size:100%;line-height:1em;width:1em;height:1em"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ace-iconbox--content">
                                                            <h3 class="ace-text--head" style="font-size:100%;text-transform:uppercase;font-weight:bold;">
                                                                Tư vấn miễn phí 24/7</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr style="max-width: 1250px; margin: 25px auto; border: 0; border-top: 2px solid #6e81ad;" >

                    <!-- PHẦN MÔ TẢ + THÔNG SỐ KỸ THUẬT -->
                    <div class="row row-small align-center row-divided" id="row-1292401762">
                        <div class="col medium-8 small-12 large-8" id="col-1678164476">
                            <div class="is-sticky-column">
                                <div class="is-sticky-column__inner">
                                    <div class="col-inner">
                                        <div class="product-page-sections">
                                            <div class="product-section" id="tab-description">
                                                <div class="pd-description-content" id="descriptionContent">
                                                    {!! $product->description !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col medium-4 small-12 large-4 small-col-first" id="col-163275857">
                            <div class="is-sticky-column">
                                <div class="is-sticky-column__inner">
                                    <div class="col-inner">
                                        <!-- Thông số kỹ thuật -->
                                        <div class="pd-specs-card">
                                            <h3 class="pd-specs-card-title">Thông số kỹ thuật</h3>
                                            <div class="pd-specs-card-content" id="specsCardContent">
                                                @if(!empty($product->specs_full))
                                                    @foreach($product->specs_full as $row)
                                                        @if(!empty($row['key']))
                                                        <div class="pd-specs-card-item">
                                                            <strong>{{ $row['key'] }}:</strong> {{ $row['value'] ?? '' }}
                                                        </div>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="pd-specs-actions">
                                                <a href="#product-specification" class="btn-specs">
                                                    Xem đầy đủ thông số
                                                </a>
                                                @if($product->catalog_url)
                                                    <a href="{{ asset('storage/' . $product->catalog_url) }}" target="_blank" class="btn-catalog">
                                                        <i class="far fa-file-pdf"></i> Catalog
                                                    </a>
                                                @else
                                                    <button type="button" class="btn-catalog" onclick="alert('Sản phẩm này hiện chưa có catalog.')">
                                                        <i class="far fa-file-pdf"></i> Catalog
                                                    </button>
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Popup thông số đầy đủ -->
                                        <div class="lightbox-by-id lightbox-content mfp-hide lightbox-white product-specification"
                                            id="product-specification" style="max-width:800px;padding:20px">
                                            <div class="container section-title-container ace-title" style="margin-bottom:0px;">
                                                <h2 class="section-title section-title-normal left">
                                                    <div class="section-title-main" style="text-transform:inherit;font-weight:inherit;">
                                                        <b></b><span class="-style">
                                                            <p>Specifications</p>
                                                            <small class="sub-title after-title" style="color:rgb(219, 62, 38);">{{ $product->name }}</small>
                                                        </span><b></b>
                                                    </div>
                                                </h2>
                                            </div>
                                            <table class="specification-table">
                                            @if(!empty($product->specs_full))
                                                @php $inGroup = false; @endphp
                                                @foreach($product->specs_full as $row)
                                                    @if(!empty($row['section']))
                                                        @if($inGroup)</tbody>@php $inGroup = false; @endphp@endif
                                                        <tbody>
                                                            <tr class="sub-head table-drop"><td>{{ $row['section'] }}</td></tr>
                                                        </tbody>
                                                    @elseif(!empty($row['key']))
                                                        @if(!$inGroup)<tbody class="dropdown">@php $inGroup = true; @endphp@endif
                                                        <tr>
                                                            <td>{{ $row['key'] }}</td>
                                                            <td>{!! nl2br(e($row['value'] ?? '')) !!}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                                @if($inGroup)</tbody>@endif
                                            @endif
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ĐÁNH GIÁ SẢN PHẨM -->
                    <div class="pd-reviews-section" id="pd-reviews-section">
                        <h2 class="pd-section-title">Đánh giá sản phẩm</h2>
                        <div class="pd-reviews-box">
                            <div class="pd-reviews-header">Khách hàng đánh giá, nhận xét</div>
                            <div class="pd-reviews-summary">
                                <div class="pd-reviews-avg">
                                    <div class="avg-number">{{ $avgRating }}/5</div>
                                    <div class="avg-stars">
                                        @for($i = 1; $i <= 5; $i++)
                                            <span class="{{ $i <= floor($avgRating) ? 'filled' : '' }}">★</span>
                                        @endfor
                                    </div>
                                    <div class="avg-count">{{ $reviewCount }} đánh giá & nhận xét</div>
                                </div>
                                <div class="pd-reviews-bars">
                                    @for($star = 5; $star >= 1; $star--)
                                        @php $count = $approvedReviews->where('rating', $star)->count(); @endphp
                                        <div class="bar-row">
                                            <span class="bar-label">{{ $star }} sao</span>
                                            <div class="bar-track">
                                                <div class="bar-fill" style="width: {{ $reviewCount > 0 ? ($count / $reviewCount * 100) : 0 }}%"></div>
                                            </div>
                                            <span class="bar-count">{{ $count }} đánh giá</span>
                                        </div>
                                    @endfor
                                </div>
                                <div class="pd-reviews-cta">
                                    <p>Bạn đã dùng sản phẩm này?</p>
                                    <button class="btn-review" onclick="document.getElementById('reviewModal').classList.add('is-open')">
                                        Gửi đánh giá của bạn
                                    </button>
                                </div>
                            </div>

                            @if($approvedReviews->count() > 0)
                            <div class="pd-review-list">
                                @foreach($approvedReviews as $review)
                                <div class="pd-review-item">
                                    <div class="reviewer-name">{{ $review->reviewer_name }}</div>
                                    <div class="reviewer-stars">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= $review->rating)★@else☆@endif
                                        @endfor
                                    </div>
                                    <div class="reviewer-comment">{{ $review->comment }}</div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- SẢN PHẨM LIÊN QUAN -->
                    @if(isset($relatedProducts) && $relatedProducts->count() > 0)
                    <div class="pd-related-section">
                        <h2 class="pd-related-title">Sản phẩm liên quan</h2>
                        <div class="pd-related-grid">
                            @foreach($relatedProducts as $related)
                                @php
                                    $relThumb = $related->images->where('is_thumbnail', true)->first() ?? $related->images->first();
                                    $relReviews = $related->reviews->where('is_approved', true);
                                    $relAvg = $relReviews->count() > 0 ? round($relReviews->avg('rating'), 1) : 0;
                                    $relReviewCount = $relReviews->count();
                                    $relHasSale = $related->sale_price && $related->sale_price > 0 && $related->sale_price < $related->price;
                                    $relDiscountPct = $relHasSale ? round(($related->price - $related->sale_price) / $related->price * 100) : 0;
                                @endphp
                                <a href="{{ route('products.show', $related->slug) }}" class="cat-product-card">

                                    {{-- Badges row --}}
                                    <div class="cat-product-badges">
                                        @if($related->is_new)
                                            <span class="badge-pill badge-new"><i class="fas fa-seedling"></i> New {{ date('Y') }}</span>
                                        @endif
                                        @if($related->is_bestseller)
                                            <span class="badge-pill badge-bestseller"><i class="fas fa-medal"></i> Bán Chạy</span>
                                        @endif
                                        @if($related->is_hot)
                                            <span class="badge-pill badge-hot"><i class="fas fa-fire"></i> Hot</span>
                                        @endif
                                    </div>

                                    {{-- Image --}}
                                    <div class="cat-product-img-wrap">
                                        @if($relThumb)
                                            <img src="{{ asset('storage/' . $relThumb->image_url) }}" alt="{{ $related->name }}" loading="lazy">
                                        @else
                                            <img src="{{ asset('wp-content/uploads/logo-VD-150.png') }}" alt="{{ $related->name }}" loading="lazy">
                                        @endif
                                    </div>

                                    {{-- Info --}}
                                    <div class="cat-product-info">
                                        <div class="cat-product-name">{{ $related->name }}</div>

                                        <div class="cat-price-block">
                                            @if($related->price > 0)
                                                @if($relHasSale)
                                                    <span class="price-sale">{{ number_format($related->sale_price, 0, ',', '.') }}đ</span>
                                                    <div class="price-secondary">
                                                        <span class="price-original">{{ number_format($related->price, 0, ',', '.') }}đ</span>
                                                        <span class="price-discount">-{{ $relDiscountPct }}%</span>
                                                    </div>
                                                @else
                                                    <span class="price-sale">{{ number_format($related->price, 0, ',', '.') }}đ</span>
                                                @endif
                                            @else
                                                <span class="price-contact">Liên hệ</span>
                                            @endif
                                        </div>

                                        @if($related->is_promotion && $related->promotionProduct)
                                        <div class="cat-product-gift">
                                            <i class="fas fa-gift"></i>
                                            Tặng <strong>PMH {{ number_format($related->promotionProduct->price, 0, ',', '.') }}đ</strong>
                                        </div>
                                        @endif

                                        <div class="cat-product-rating">
                                            <span class="stars">★</span>
                                            <span>{{ $relAvg > 0 ? $relAvg : 0 }} ({{ $relReviewCount }})</span>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    @endif

                </div>
            </div>

            <!-- Video Modal -->
            @if($product->video_url)
            <div class="pd-video-modal-overlay" id="videoModal">
                <div class="pd-video-modal">
                    <button class="close-modal" onclick="closeVideoModal()">&times;</button>
                    <div class="video-wrapper">
                        <iframe id="videoIframe" src="" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            @endif

            <!-- Review Modal -->
            <div class="pd-review-modal-overlay" id="reviewModal">
                <div class="pd-review-modal">
                    <button class="close-modal" onclick="document.getElementById('reviewModal').classList.remove('is-open')">&times;</button>
                    <h3>Gửi đánh giá của bạn</h3>

                    @if(session('review_success'))
                        <div class="pd-alert pd-alert-success">{{ session('review_success') }}</div>
                    @endif
                    @if(session('review_error'))
                        <div class="pd-alert pd-alert-error">{{ session('review_error') }}</div>
                    @endif

                    <form action="{{ route('products.review', $product->slug) }}" method="POST">
                        @csrf
                        <label>Đánh giá sao <span style="color:red">*</span></label>
                        <div class="star-rating-input" id="starRatingInput">
                            @for($i = 1; $i <= 5; $i++)
                                <span class="star" data-value="{{ $i }}" onclick="setRating({{ $i }})">★</span>
                            @endfor
                        </div>
                        <input type="hidden" name="rating" id="ratingInput" value="5" required>

                        <label>Họ và tên <span style="color:red">*</span></label>
                        <input type="text" name="reviewer_name" required maxlength="255" placeholder="Nhập họ và tên">

                        <label>Email</label>
                        <input type="email" name="reviewer_email" maxlength="255" placeholder="Nhập email (không bắt buộc)">

                        <label>Số điện thoại</label>
                        <input type="tel" name="reviewer_phone" maxlength="20" placeholder="Nhập số điện thoại (không bắt buộc)">

                        <label>Nhận xét <span style="color:red">*</span></label>
                        <textarea name="comment" required maxlength="2000" placeholder="Viết nhận xét của bạn về sản phẩm..."></textarea>

                        <button type="submit" class="btn-submit-review">Gửi đánh giá</button>
                    </form>
                </div>
            </div>

            @endif

@endsection

@push('scripts')
<script>
    // Star rating
    function setRating(val) {
        document.getElementById('ratingInput').value = val;
        var stars = document.querySelectorAll('#starRatingInput .star');
        stars.forEach(function(s, i) {
            s.classList.toggle('active', i < val);
        });
    }
    // Init 5 stars
    document.addEventListener('DOMContentLoaded', function() { setRating(5); });

    @if(isset($product) && $product->video_url)
    // Video modal
    function closeVideoModal() {
        document.getElementById('videoModal').classList.remove('is-open');
        document.getElementById('videoIframe').src = '';
    }
    document.getElementById('videoModal').addEventListener('click', function(e) {
        if (e.target === this) closeVideoModal();
    });
    // Open video
    var videoBtn = document.querySelector('.pd-action-btn .action-icon.video');
    if (videoBtn) {
        videoBtn.closest('.pd-action-btn').addEventListener('click', function() {
            var url = @json($product->video_url);
            // Convert YouTube URL to embed
            var embedUrl = url;
            var match = url.match(/(?:youtube\.com\/watch\?v=|youtu\.be\/)([^&]+)/);
            if (match) embedUrl = 'https://www.youtube.com/embed/' + match[1];
            document.getElementById('videoIframe').src = embedUrl;
        });
    }
    @endif

    // Review modal close on overlay click
    document.getElementById('reviewModal').addEventListener('click', function(e) {
        if (e.target === this) this.classList.remove('is-open');
    });

    @if(session('review_success') || session('review_error'))
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('reviewModal').classList.add('is-open');
    });
    @endif
</script>
@endpush
