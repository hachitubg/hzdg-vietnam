@extends('frontend.layouts.app')

@section('title', $category->name . ' – Sản phẩm')

@section('content')
    <section style="max-width:1200px;margin:0 auto;padding:24px 16px;">
        <h1 style="margin-bottom:8px;">{{ $category->name }}</h1>
        @if ($category->description)
            <p style="margin-bottom:16px;">{{ $category->description }}</p>
        @endif

        <div style="display:flex;gap:10px;flex-wrap:wrap;margin-bottom:20px;">
            @foreach ($categories as $item)
                <a href="{{ route('products.category', $item->slug) }}"
                    style="padding:6px 12px;border:1px solid #ddd;border-radius:999px;{{ $item->id === $category->id ? 'background:#db3e26;color:#fff;border-color:#db3e26;' : '' }}">{{ $item->name }}</a>
            @endforeach
        </div>

        <div class="row">
            @forelse ($products as $product)
                @include('frontend.partials.product-card', ['product' => $product])
            @empty
                <p>Không có sản phẩm trong danh mục này.</p>
            @endforelse
        </div>

        <div style="margin-top:16px;">{{ $products->links() }}</div>
    </section>
@endsection
