@extends('frontend.layouts.app')

@section('title', 'Dự án – VD GROUP')

@section('content')
    <section style="max-width:1200px;margin:0 auto;padding:24px 16px;">
        <h1>Danh sách dự án</h1>
        <div style="display:flex;gap:10px;flex-wrap:wrap;margin:12px 0 20px;">
            @foreach ($categories as $category)
                <span style="padding:6px 12px;border:1px solid #ddd;border-radius:999px;">{{ $category->name }}</span>
            @endforeach
        </div>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:16px;">
            @forelse ($projects as $project)
                <article style="border:1px solid #eee;border-radius:8px;padding:12px;">
                    @if ($project->thumbnail)
                        <a href="{{ route('projects.show', $project->slug) }}"><img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}" style="width:100%;height:180px;object-fit:cover;border-radius:6px;"></a>
                    @endif
                    <h3 style="margin:10px 0;"><a href="{{ route('projects.show', $project->slug) }}">{{ $project->title }}</a></h3>
                    <p>{{ $project->excerpt }}</p>
                </article>
            @empty
                <p>Chưa có dự án.</p>
            @endforelse
        </div>

        <div style="margin-top:16px;">{{ $projects->links() }}</div>
    </section>
@endsection
