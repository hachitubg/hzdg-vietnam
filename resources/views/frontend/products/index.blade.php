@extends('frontend.layouts.app')

@section('title', 'Sản phẩm – VD GROUP')

@section('content')
    <section style="max-width:1200px;margin:0 auto;padding:24px 16px;">
        <h1 style="margin-bottom:12px;">Danh mục sản phẩm</h1>
        <div style="display:flex;gap:10px;flex-wrap:wrap;margin-bottom:20px;">
            @foreach ($categories as $category)
                <a href="{{ route('products.category', $category->slug) }}"
                    style="padding:6px 12px;border:1px solid #ddd;border-radius:999px;">{{ $category->name }}</a>
            @endforeach
        </div>

        <div class="row">
            @forelse ($products as $product)
                @include('frontend.partials.product-card', ['product' => $product])
            @empty
                <p>Chưa có sản phẩm nào.</p>
            @endforelse
        </div>

        <div style="margin-top:16px;">{{ $products->links() }}</div>
    </section>
@endsection
