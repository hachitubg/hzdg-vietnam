@extends('frontend.layouts.app')

@section('title', 'Tin tức - HZDG Việt Nam')

@section('content')
    <section class="section" style="padding:40px 0;">
        <div class="container">
            <h1 style="text-align:center;margin-bottom:30px;">TIN TỨC</h1>
            <div class="row">
                @forelse($posts as $post)
                    <div class="col large-4 medium-6" style="margin-bottom:20px;">
                        <div style="background:#fff;border-radius:8px;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,0.1);">
                            <a href="{{ route('posts.show', $post->slug) }}">
                                @if ($post->thumbnail)
                                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}"
                                        style="width:100%;height:220px;object-fit:cover;">
                                @endif
                            </a>
                            <div style="padding:15px;">
                                <a href="{{ route('posts.show', $post->slug) }}">
                                    <h3 style="font-size:16px;margin-bottom:8px;">{{ $post->title }}</h3>
                                </a>
                                @if ($post->published_at)
                                    <p style="color:#888;font-size:13px;">📅 {{ $post->published_at->format('d/m/Y') }}</p>
                                @endif
                                <p style="margin-top:8px;color:#666;">{{ Str::limit($post->excerpt, 120) }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p style="text-align:center;">Chưa có bài viết nào.</p>
                @endforelse
            </div>
            <div style="margin-top:20px;">{{ $posts->links() }}</div>
        </div>
    </section>
@endsection
