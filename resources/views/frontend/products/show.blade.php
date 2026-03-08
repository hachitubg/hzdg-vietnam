@extends('frontend.layouts.app')

@section('title', $product->name . ' – VD GROUP')

@section('content')
    <section style="max-width:1200px;margin:0 auto;padding:24px 16px;display:grid;grid-template-columns:1fr 1fr;gap:24px;">
        <div>
            @php($thumb = $product->images->where('is_thumbnail', true)->first() ?? $product->images->first())
            @if ($thumb)
                <img src="{{ asset('storage/' . $thumb->image_url) }}" alt="{{ $product->name }}"
                    style="width:100%;max-height:420px;object-fit:contain;border:1px solid #eee;border-radius:8px;">
            @endif
        </div>
        <div>
            <h1>{{ $product->name }}</h1>
            <p>Danh mục: {{ $product->category?->name ?? 'Đang cập nhật' }}</p>
            <p>Lượt xem: {{ $product->view_count }}</p>
            <div style="margin:10px 0 16px;">
                @if ($product->sale_price)
                    <span style="text-decoration:line-through;color:#888;">{{ number_format($product->price) }}đ</span>
                    <strong style="color:#db3e26;font-size:20px;">{{ number_format($product->sale_price) }}đ</strong>
                @else
                    <strong style="color:#db3e26;font-size:20px;">{{ number_format($product->price) }}đ</strong>
                @endif
            </div>
            <div>{!! $product->description !!}</div>
        </div>
    </section>

    <section style="max-width:1200px;margin:0 auto;padding:0 16px 24px;">
        <h3>Sản phẩm liên quan</h3>
        <div class="row">
            @forelse ($relatedProducts as $related)
                @include('frontend.partials.product-card', ['product' => $related])
            @empty
                <p>Không có sản phẩm liên quan.</p>
            @endforelse
        </div>
    </section>
@endsection
