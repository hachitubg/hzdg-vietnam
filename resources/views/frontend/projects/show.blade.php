@extends('frontend.layouts.app')

@section('title', isset($project) ? $project->title . ' – VD GROUP' : 'Dự án – VD GROUP')
@section('body_class', 'page-template-page-blank-php')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/extracted-projects-show.css') }}">
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endpush
@push('scripts')
    <script defer src="{{ asset('assets/extracted-projects-show.js') }}"></script>
@endpush

@section('content')

<div class="container" style="max-width:1250px; margin:0 auto; padding:0 20px;">

    @if(!isset($project))
        <p style="padding:60px 0;text-align:center;color:#999;">Không tìm thấy dự án.</p>
    @else

    {{-- Breadcrumb --}}
    <nav class="pj-breadcrumb">
        <a href="{{ route('home') }}">Trang chủ</a>
        @if($project->category)
            <span class="sep">›</span>
            <a href="{{ route('projects.index', ['category' => $project->category->slug]) }}">{{ $project->category->name }}</a>
        @endif
        <span class="sep">›</span>
        <span>{{ $project->title }}</span>
    </nav>

    <h1 class="pj-article-title">{{ $project->title }}</h1>

    {{-- Main layout --}}
    <div class="pj-show-layout">
        {{-- Article content --}}
        <div class="pj-show-main">
            <div class="pj-article-content">
                {!! $project->content !!}
            </div>
        </div>

        {{-- Sidebar: Xem nhiều --}}
        <aside class="pj-show-sidebar">
            <div class="pj-sidebar-box">
                <h3 class="pj-sidebar-title">Xem nhiều</h3>
                <div class="pj-sidebar-list">
                    @foreach($popularProjects as $i => $pop)
                    <a href="{{ route('projects.show', $pop->slug) }}" class="pj-sidebar-item">
                        <span class="pj-sidebar-num">{{ $i + 1 }}</span>
                        <span class="pj-sidebar-text">{{ $pop->title }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </aside>
    </div>

    {{-- Related projects --}}
    @if(isset($relatedProjects) && $relatedProjects->count() > 0)
    <div class="pj-related-section">
        <h2 class="pj-related-title">Bài viết liên quan</h2>
        <div class="pj-related-divider"></div>
        <div class="pj-related-grid">
            @foreach($relatedProjects as $related)
            <a href="{{ route('projects.show', $related->slug) }}" class="pj-related-card">
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

    @endif

</div>

@endsection
