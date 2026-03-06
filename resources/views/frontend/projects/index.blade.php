@extends('frontend.layouts.app')

@section('title', 'Dự án - HZDG Việt Nam')

@section('content')
<section class="section" style="padding:40px 0;">
    <div class="container">
        <h1 style="text-align:center;margin-bottom:30px;">DỰ ÁN</h1>
        <div class="row">
            @forelse($projects as $project)
            <div class="col large-4 medium-6" style="margin-bottom:20px;">
                <div style="background:#fff;border-radius:8px;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,0.1);">
                    <a href="{{ route('projects.show', $project->slug) }}">
                        @if($project->thumbnail)
                        <img src="{{ asset('storage/'.$project->thumbnail) }}" alt="{{ $project->title }}" style="width:100%;height:220px;object-fit:cover;">
                        @endif
                    </a>
                    <div style="padding:15px;">
                        <a href="{{ route('projects.show', $project->slug) }}"><h3 style="font-size:16px;margin-bottom:8px;">{{ $project->title }}</h3></a>
                        @if($project->client_name)<p style="color:#888;font-size:13px;">🏢 {{ $project->client_name }}</p>@endif
                        @if($project->location)<p style="color:#888;font-size:13px;">📍 {{ $project->location }}</p>@endif
                        <p style="margin-top:8px;color:#666;">{{ Str::limit($project->excerpt, 120) }}</p>
                    </div>
                </div>
            </div>
            @empty
            <p style="text-align:center;">Chưa có dự án nào.</p>
            @endforelse
        </div>
        <div style="margin-top:20px;">{{ $projects->links() }}</div>
    </div>
</section>
@endsection