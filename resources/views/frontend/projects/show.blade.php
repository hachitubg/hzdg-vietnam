@extends('frontend.layouts.app')

@section('title', $project->title . ' – Dự án')

@section('content')
    <section style="max-width:900px;margin:0 auto;padding:24px 16px;">
        <h1>{{ $project->title }}</h1>
        <p>Danh mục: {{ $project->category?->name ?? 'Đang cập nhật' }} | Lượt xem: {{ $project->view_count }}</p>
        @if ($project->thumbnail)
            <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}" style="width:100%;margin:16px 0;border-radius:8px;">
        @endif
        <div>{!! $project->content !!}</div>

        <h3 style="margin-top:32px;">Dự án liên quan</h3>
        <ul>
            @forelse ($relatedProjects as $item)
                <li><a href="{{ route('projects.show', $item->slug) }}">{{ $item->title }}</a></li>
            @empty
                <li>Không có dự án liên quan.</li>
            @endforelse
        </ul>
    </section>
@endsection
