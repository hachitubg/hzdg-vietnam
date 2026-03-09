@extends('frontend.layouts.app')

@section('title', 'Dự án – VD GROUP')
@section('body_class', 'page-template-page-blank-php')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/extracted-projects-index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endpush
@push('scripts')
    <script defer src="{{ asset('assets/extracted-projects-index.js') }}"></script>
@endpush

@section('content')

<div class="container" style="max-width:1250px; margin:0 auto; padding:0 20px;">

    <h1 class="pj-section-title">Công trình ánh sáng đã làm</h1>

    {{-- Category filter tabs --}}
    @if($categories->count() > 0)
    <div class="pj-filter-tabs">
        <a href="{{ route('projects.index') }}"
           class="pj-filter-tab {{ !request('category') ? 'is-active' : '' }}">All</a>
        @foreach($categories as $cat)
            <a href="{{ route('projects.index', ['category' => $cat->slug]) }}"
               class="pj-filter-tab {{ request('category') === $cat->slug ? 'is-active' : '' }}">
                {{ $cat->name }}
            </a>
        @endforeach
    </div>
    @endif

    {{-- Project Grid --}}
    @if($projects->count() > 0)
    <div class="pj-grid">
        @foreach($projects as $project)
        <a href="{{ route('projects.show', $project->slug) }}" class="pj-card">
            @if($project->thumbnail)
                <img class="pj-card-img" src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}" loading="lazy">
            @else
                <div class="pj-card-img" style="background:#eee;display:flex;align-items:center;justify-content:center;color:#bbb;font-size:14px;">No image</div>
            @endif
            <div class="pj-card-body">
                <div class="pj-card-title">{{ $project->title }}</div>
                @if($project->excerpt)
                    <div class="pj-card-excerpt">{{ $project->excerpt }}</div>
                @endif
            </div>
        </a>
        @endforeach
    </div>

    <div class="pj-pagination">
        {{ $projects->appends(request()->query())->links() }}
    </div>
    @else
    <div class="pj-empty">
        <p>Chưa có dự án nào.</p>
    </div>
    @endif

</div>

@endsection
