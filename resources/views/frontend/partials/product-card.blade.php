<div class="col large-3 medium-4 small-6" style="margin-bottom:20px;">
    <div style="background:#fff;border-radius:8px;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,0.1);height:100%;">
        <a href="{{ route('products.show', $product->slug) }}">
            @php
                $thumb = $product->images->where('is_thumbnail', true)->first() ?? $product->images->first();
            @endphp
            @if ($thumb)
                <img src="{{ asset('storage/' . $thumb->image_url) }}" alt="{{ $product->name }}"
                    style="width:100%;height:200px;object-fit:contain;padding:10px;">
            @else
                <div
                    style="width:100%;height:200px;background:#eee;display:flex;align-items:center;justify-content:center;color:#999;">
                    No image</div>
            @endif
        </a>
        <div style="padding:15px;">
            <a href="{{ route('products.show', $product->slug) }}">
                <h4 style="font-size:14px;margin-bottom:8px;min-height:40px;">{{ $product->name }}</h4>
            </a>
            <div>
                @if ($product->sale_price)
                    <span
                        style="text-decoration:line-through;color:#999;font-size:13px;">{{ number_format($product->price) }}đ</span>
                    <span
                        style="color:#e74c3c;font-weight:bold;font-size:16px;margin-left:5px;">{{ number_format($product->sale_price) }}đ</span>
                @else
                    <span
                        style="color:#e74c3c;font-weight:bold;font-size:16px;">{{ number_format($product->price) }}đ</span>
                @endif
            </div>
            @if ($product->is_hot)
                <span style="background:#e74c3c;color:#fff;padding:2px 8px;border-radius:3px;font-size:11px;">HOT</span>
            @endif
            @if ($product->is_new)
                <span style="background:#27ae60;color:#fff;padding:2px 8px;border-radius:3px;font-size:11px;">Mới</span>
            @endif
        </div>
    </div>
</div>
