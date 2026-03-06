@extends('frontend.layouts.app')

@section('title', 'HZDG Việt Nam - Thiết bị âm thanh chuyên nghiệp')

@section('content')

{{-- Banner --}}
<section class="section" style="background:#1a1a2e;padding:60px 0;color:#fff;text-align:center;">
    <div class="container">
        <h1 style="font-size:2.5em;margin-bottom:10px;">HZDG VIỆT NAM</h1>
        <p style="font-size:1.2em;">Phân phối thiết bị âm thanh chính hãng, chuyên nghiệp</p>
        <a href="{{ route('products.index') }}" style="display:inline-block;margin-top:20px;padding:12px 30px;background:#e74c3c;color:#fff;border-radius:5px;text-decoration:none;">Xem sản phẩm</a>
    </div>
</section>

{{-- Danh mục sản phẩm --}}
<section class="section" style="padding:40px 0;">
    <div class="container">
        <h2 style="text-align:center;margin-bottom:30px;">DANH MỤC SẢN PHẨM</h2>
        <div class="row">
            @foreach($categories as $category)
            <div class="col large-2 medium-4 small-6" style="text-align:center;margin-bottom:20px;">
                <a href="{{ route('products.category', $category->slug) }}">
                    @if($category->image)
                    <img src="{{ asset('storage/'.$category->image) }}" alt="{{ $category->name }}" style="width:100px;height:100px;object-fit:contain;">
                    @endif
                    <p style="margin-top:10px;font-weight:bold;">{{ $category->name }}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Sản phẩm HOT --}}
@if($hotProducts->count())
<section class="section" style="padding:40px 0;background:#f5f5f5;">
    <div class="container">
        <h2 style="text-align:center;margin-bottom:30px;color:#e74c3c;">🔥 SẢN PHẨM HOT</h2>
        <div class="row">
            @foreach($hotProducts as $product)
            @include('frontend.partials.product-card', ['product' => $product])
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- Sản phẩm mới --}}
@if($newProducts->count())
<section class="section" style="padding:40px 0;">
    <div class="container">
        <h2 style="text-align:center;margin-bottom:30px;color:#27ae60;">🆕 SẢN PHẨM MỚI</h2>
        <div class="row">
            @foreach($newProducts as $product)
            @include('frontend.partials.product-card', ['product' => $product])
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- Sản phẩm bán chạy --}}
@if($bestsellerProducts->count())
<section class="section" style="padding:40px 0;background:#f5f5f5;">
    <div class="container">
        <h2 style="text-align:center;margin-bottom:30px;color:#f39c12;">⭐ BÁN CHẠY NHẤT</h2>
        <div class="row">
            @foreach($bestsellerProducts as $product)
            @include('frontend.partials.product-card', ['product' => $product])
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- Dự án nổi bật --}}
@if($featuredProjects->count())
<section class="section" style="padding:40px 0;">
    <div class="container">
        <h2 style="text-align:center;margin-bottom:30px;">DỰ ÁN TIÊU BIỂU</h2>
        <div class="row">
            @foreach($featuredProjects as $project)
            <div class="col large-4 medium-6" style="margin-bottom:20px;">
                <a href="{{ route('projects.show', $project->slug) }}">
                    @if($project->thumbnail)
                    <img src="{{ asset('storage/'.$project->thumbnail) }}" alt="{{ $project->title }}" style="width:100%;height:200px;object-fit:cover;border-radius:8px;">
                    @endif
                    <h4 style="margin-top:10px;">{{ $project->title }}</h4>
                    <p style="color:#888;">{{ Str::limit($project->excerpt, 100) }}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- Tin tức mới --}}
@if($latestPosts->count())
<section class="section" style="padding:40px 0;background:#f5f5f5;">
    <div class="container">
        <h2 style="text-align:center;margin-bottom:30px;">TIN TỨC MỚI NHẤT</h2>
        <div class="row">
            @foreach($latestPosts as $post)
            <div class="col large-4 medium-6" style="margin-bottom:20px;">
                <a href="{{ route('posts.show', $post->slug) }}">
                    @if($post->thumbnail)
                    <img src="{{ asset('storage/'.$post->thumbnail) }}" alt="{{ $post->title }}" style="width:100%;height:200px;object-fit:cover;border-radius:8px;">
                    @endif
                    <h4 style="margin-top:10px;">{{ $post->title }}</h4>
                    <p style="color:#888;">{{ Str::limit($post->excerpt, 100) }}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection