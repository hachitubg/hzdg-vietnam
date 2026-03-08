@extends('frontend.layouts.app')

@section('title', 'VD GROUP – Trang chủ')

@section('content')
    <section style="max-width:1200px;margin:0 auto;padding:24px 16px;">
        <h1>Giải pháp âm thanh chuyên nghiệp</h1>
        <p style="margin-bottom:20px;">Dữ liệu sản phẩm, dự án và tin tức được đồng bộ trực tiếp từ database.</p>

        <h2 style="margin-top:24px;">Sản phẩm mới</h2>
        <div class="row">
            @forelse ($featuredProducts as $product)
                @include('frontend.partials.product-card', ['product' => $product])
            @empty
                <p>Chưa có sản phẩm.</p>
            @endforelse
        </div>

        <h2 style="margin-top:32px;">Dự án mới</h2>
        <ul>
            @foreach ($featuredProjects as $project)
                <li><a href="{{ route('projects.show', $project->slug) }}">{{ $project->title }}</a></li>
            @endforeach
        </ul>

        <h2 style="margin-top:32px;">Tin tức mới</h2>
        <ul>
            @foreach ($latestPosts as $post)
                <li><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    </section>
@endsection
