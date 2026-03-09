@extends('frontend.layouts.app')

@section('title', $post->title . ' – VD GROUP')
@section('body_class', 'page-template-page-blank-php')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endpush

@section('content')

<div class="container" style="max-width:1250px; margin:0 auto; padding:0 20px;">

    {{-- Breadcrumb --}}
    <nav class="pj-breadcrumb">
        <a href="{{ route('home') }}">Trang chủ</a>
        @if($post->category)
            <span class="sep">›</span>
            <a href="{{ route('posts.index', ['category' => $post->category->slug]) }}">{{ $post->category->name }}</a>
        @endif
        <span class="sep">›</span>
        <span>{{ $post->title }}</span>
    </nav>

    <h1 class="pj-article-title">{{ $post->title }}</h1>

    <div class="pj-show-layout">
        <div class="pj-show-main">
            <div class="pj-article-content">
                {!! $post->content !!}
            </div>
        </div>

        <aside class="pj-show-sidebar">
            <div class="pj-sidebar-box">
                <h3 class="pj-sidebar-title">Xem nhiều</h3>
                <div class="pj-sidebar-list">
                    @foreach($popularPosts as $i => $pop)
                    <a href="{{ route('posts.show', $pop->slug) }}" class="pj-sidebar-item">
                        <span class="pj-sidebar-num">{{ $i + 1 }}</span>
                        <span class="pj-sidebar-text">{{ $pop->title }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </aside>
    </div>

    @if(isset($relatedPosts) && $relatedPosts->count() > 0)
    <div class="pj-related-section">
        <h2 class="pj-related-title">Bài viết liên quan</h2>
        <div class="pj-related-divider"></div>
        <div class="pj-related-grid">
            @foreach($relatedPosts as $related)
            <a href="{{ route('posts.show', $related->slug) }}" class="pj-related-card">
                @if($related->thumbnail)
                    <img class="pj-related-card-img" src="{{ asset('storage/' . $related->thumbnail) }}" alt="{{ $related->title }}" loading="lazy">
                @else
                    <div class="pj-related-card-img" style="background:#eee;display:flex;align-items:center;justify-content:center;color:#bbb;">No image</div>
                @endif
                <div class="pj-related-card-title">{{ $related->title }}</div>
            </a>
            @endforeach
        </div>
    </div>
    @endif

</div>

@endsection
