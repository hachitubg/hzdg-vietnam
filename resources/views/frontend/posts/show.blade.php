@extends('frontend.layouts.app')

@section('title', $post->title . ' - HZDG Việt Nam')

@section('content')
    <section class="section" style="padding:40px 0;">
        <div class="container">
            <div style="max-width:900px;margin:0 auto;">
                <h1 style="margin-bottom:15px;">{{ $post->title }}</h1>
                <div style="color:#888;margin-bottom:20px;">
                    @if ($post->author)
                        <span>✍️ {{ $post->author }}</span>
                    @endif
                    @if ($post->published_at)
                        <span style="margin-left:15px;">📅 {{ $post->published_at->format('d/m/Y') }}</span>
                    @endif
                    <span style="margin-left:15px;">👁️ {{ number_format($post->view_count) }} lượt xem</span>
                </div>
                @if ($post->thumbnail)
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}"
                        style="width:100%;border-radius:8px;margin-bottom:20px;">
                @endif
                <div class="post-content" style="line-height:1.8;">{!! $post->content !!}</div>
            </div>

            @if ($relatedPosts->count())
                <div style="margin-top:40px;max-width:900px;margin-left:auto;margin-right:auto;">
                    <h2 style="margin-bottom:20px;">Bài viết liên quan</h2>
                    <div class="row">
                        @foreach ($relatedPosts as $rp)
                            <div class="col large-6" style="margin-bottom:15px;">
                                <a href="{{ route('posts.show', $rp->slug) }}"
                                    style="display:flex;gap:15px;align-items:center;">
                                    @if ($rp->thumbnail)
                                        <img src="{{ asset('storage/' . $rp->thumbnail) }}"
                                            style="width:120px;height:80px;object-fit:cover;border-radius:5px;">
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
