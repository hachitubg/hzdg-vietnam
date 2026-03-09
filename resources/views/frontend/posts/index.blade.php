@extends('frontend.layouts.app')

@section('title', 'Tin tức – VD GROUP')
@section('body_class', 'page-template-page-blank-php')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endpush

@section('content')

<div class="container" style="max-width:1250px; margin:0 auto; padding:0 20px;">

    <h1 class="pj-section-title">Tin tức</h1>

    @if($categories->count() > 0)
    <div class="pj-filter-tabs">
        <a href="{{ route('posts.index') }}"
           class="pj-filter-tab {{ !request('category') ? 'is-active' : '' }}">All</a>
        @foreach($categories as $cat)
            <a href="{{ route('posts.index', ['category' => $cat->slug]) }}"
               class="pj-filter-tab {{ request('category') === $cat->slug ? 'is-active' : '' }}">
                {{ $cat->name }}
            </a>
        @endforeach
    </div>
    @endif

    @if($posts->count() > 0)
    <div class="pj-grid">
        @foreach($posts as $post)
        <a href="{{ route('posts.show', $post->slug) }}" class="pj-card">
            @if($post->thumbnail)
                <img class="pj-card-img" src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" loading="lazy">
            @else
                <div class="pj-card-img" style="background:#eee;display:flex;align-items:center;justify-content:center;color:#bbb;font-size:14px;">No image</div>
            @endif
            <div class="pj-card-body">
                <div class="pj-card-title">{{ $post->title }}</div>
                @if($post->excerpt)
                    <div class="pj-card-excerpt">{{ $post->excerpt }}</div>
                @endif
            </div>
        </a>
        @endforeach
    </div>

    <div class="pj-pagination">
        {{ $posts->appends(request()->query())->links() }}
    </div>
    @else
    <div class="pj-empty">
        <p>Chưa có bài viết nào.</p>
    </div>
    @endif

</div>

@endsection
