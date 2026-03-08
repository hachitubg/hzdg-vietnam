@extends('frontend.layouts.app')

@section('title', $post->title . ' – Tin tức')

@section('content')
    <section style="max-width:900px;margin:0 auto;padding:24px 16px;">
        <h1>{{ $post->title }}</h1>
        <p>Chuyên mục: {{ $post->category?->name ?? 'Đang cập nhật' }} | Lượt xem: {{ $post->view_count }}</p>
        @if ($post->thumbnail)
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" style="width:100%;margin:16px 0;border-radius:8px;">
        @endif
        <div>{!! $post->content !!}</div>

        <h3 style="margin-top:32px;">Bài viết liên quan</h3>
        <ul>
            @forelse ($relatedPosts as $rp)
                <li><a href="{{ route('posts.show', $rp->slug) }}">{{ $rp->title }}</a></li>
            @empty
                <li>Không có bài liên quan.</li>
            @endforelse
        </ul>
    </section>
@endsection
