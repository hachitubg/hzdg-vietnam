@extends('frontend.layouts.app')

@section('title', $project->title . ' - HZDG Việt Nam')

@section('content')
<section class="section" style="padding:40px 0;">
    <div class="container">
        <div style="max-width:900px;margin:0 auto;">
            <h1 style="margin-bottom:15px;">{{ $project->title }}</h1>
            <div style="color:#888;margin-bottom:20px;">
                @if($project->client_name)<span>🏢 {{ $project->client_name }}</span>@endif
                @if($project->location)<span style="margin-left:15px;">📍 {{ $project->location }}</span>@endif
                @if($project->completed_at)<span style="margin-left:15px;">📅 {{ $project->completed_at->format('d/m/Y') }}</span>@endif
            </div>
            @if($project->thumbnail)
            <img src="{{ asset('storage/'.$project->thumbnail) }}" alt="{{ $project->title }}" style="width:100%;border-radius:8px;margin-bottom:20px;">
            @endif
            <div class="project-content" style="line-height:1.8;">{!! $project->content !!}</div>
        </div>

        @if($relatedProjects->count())
        <div style="margin-top:40px;max-width:900px;margin-left:auto;margin-right:auto;">
            <h2 style="margin-bottom:20px;">Dự án liên quan</h2>
            <div class="row">
                @foreach($relatedProjects as $rp)
                <div class="col large-6" style="margin-bottom:15px;">
                    <a href="{{ route('projects.show', $rp->slug) }}" style="display:flex;gap:15px;align-items:center;">
                        @if($rp->thumbnail)
                        <img src="{{ asset('storage/'.$rp->thumbnail) }}" style="width:120px;height:80px;object-fit:cover;border-radius:5px;">
                        @endif
                        <div>
                            <h4 style="font-size:14px;">{{ $rp->title }}</h4>
                            <p style="color:#888;font-size:13px;">{{ Str::limit($rp->excerpt, 60) }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@endsection