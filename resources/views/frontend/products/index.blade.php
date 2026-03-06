@extends('frontend.layouts.app')

@section('title', 'Sản phẩm - HZDG Việt Nam')

@section('content')
<section class="section" style="padding:40px 0;">
    <div class="container">
        <div class="row">

            {{-- Sidebar danh mục --}}
            <div class="col large-3">
                <div style="background:#f5f5f5;padding:20px;border-radius:8px;">
                    <h3 style="margin-bottom:15px;">Danh mục</h3>
                    <ul style="list-style:none;padding:0;">
                        @foreach($categories as $cat)
                        <li style="margin-bottom:8px;">
                            <a href="{{ route('products.category', $cat->slug) }}" style="font-weight:bold;">{{ $cat->name }}</a>
                            @if($cat->children->count())
                            <ul style="list-style:none;padding-left:15px;margin-top:5px;">
                                @foreach($cat->children as $child)
                                <li style="margin-bottom:5px;">
                                    <a href="{{ route('products.category', $child->slug) }}">{{ $child->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- Danh sách sản phẩm --}}
            <div class="col large-9">
                <h1 style="margin-bottom:20px;">Tất cả sản phẩm</h1>
                <div class="row">
                    @forelse($products as $product)
                    @include('frontend.partials.product-card', ['product' => $product])
                    @empty
                    <p>Chưa có sản phẩm nào.</p>
                    @endforelse
                </div>
                <div style="margin-top:20px;">
                    {{ $products->links() }}
                </div>
            </div>

        </div>
    </div>
</section>
@endsection