@extends('frontend.layouts.app')

@section('title', $product->name . ' - HZDG Việt Nam')

@section('content')
<section class="section" style="padding:40px 0;">
    <div class="container">

        <div class="row">
            {{-- Ảnh sản phẩm --}}
            <div class="col large-5">
                @php $thumb = $product->images->where('is_thumbnail', true)->first() ?? $product->images->first(); @endphp
                <div id="main-image" style="border:1px solid #eee;border-radius:8px;padding:20px;text-align:center;margin-bottom:15px;">
                    @if($thumb)
                    <img src="{{ asset('storage/'.$thumb->image_url) }}" alt="{{ $product->name }}" style="max-width:100%;max-height:400px;object-fit:contain;" id="current-image">
                    @else
                    <div style="height:400px;display:flex;align-items:center;justify-content:center;color:#999;">No image</div>
                    @endif
                </div>
                @if($product->images->count() > 1)
                <div style="display:flex;gap:10px;flex-wrap:wrap;">
                    @foreach($product->images as $img)
                    <img src="{{ asset('storage/'.$img->image_url) }}" alt="{{ $img->alt_text }}"
                         style="width:70px;height:70px;object-fit:contain;border:1px solid #ddd;border-radius:5px;cursor:pointer;padding:5px;"
                         onclick="document.getElementById('current-image').src=this.src">
                    @endforeach
                </div>
                @endif
            </div>

            {{-- Thông tin sản phẩm --}}
            <div class="col large-7">
                <h1 style="font-size:1.8em;margin-bottom:10px;">{{ $product->name }}</h1>

                {{-- Giá --}}
                <div style="margin-bottom:20px;">
                    @if($product->sale_price)
                    <span style="text-decoration:line-through;color:#999;font-size:18px;">{{ number_format($product->price) }}đ</span>
                    <span style="color:#e74c3c;font-weight:bold;font-size:28px;margin-left:10px;">{{ number_format($product->sale_price) }}đ</span>
                    @else
                    <span style="color:#e74c3c;font-weight:bold;font-size:28px;">{{ number_format($product->price) }}đ</span>
                    @endif
                </div>

                {{-- Trạng thái --}}
                <div style="margin-bottom:15px;">
                    @if($product->in_stock)
                    <span style="background:#27ae60;color:#fff;padding:4px 12px;border-radius:3px;">✅ Còn hàng</span>
                    @else
                    <span style="background:#e74c3c;color:#fff;padding:4px 12px;border-radius:3px;">❌ Hết hàng</span>
                    @endif
                    @if($product->is_hot) <span style="background:#e74c3c;color:#fff;padding:4px 12px;border-radius:3px;margin-left:5px;">HOT</span> @endif
                    @if($product->is_new) <span style="background:#27ae60;color:#fff;padding:4px 12px;border-radius:3px;margin-left:5px;">Mới</span> @endif
                </div>

                {{-- Thông số tóm tắt --}}
                @if($product->specs_summary && count($product->specs_summary))
                <table style="width:100%;margin-bottom:20px;border-collapse:collapse;">
                    @foreach($product->specs_summary as $spec)
                    <tr>
                        <td style="padding:8px 12px;border:1px solid #eee;background:#f9f9f9;width:40%;font-weight:bold;">{{ $spec['key'] }}</td>
                        <td style="padding:8px 12px;border:1px solid #eee;">{{ $spec['value'] }}</td>
                    </tr>
                    @endforeach
                </table>
                @endif

                {{-- Nút liên hệ --}}
                <div style="display:flex;gap:10px;margin-bottom:20px;">
                    <a href="tel:0946780404" style="display:inline-block;padding:12px 30px;background:#e74c3c;color:#fff;border-radius:5px;text-decoration:none;font-weight:bold;">📞 Gọi ngay</a>
                    <a href="https://zalo.me/0946780404" target="_blank" style="display:inline-block;padding:12px 30px;background:#0068ff;color:#fff;border-radius:5px;text-decoration:none;font-weight:bold;">💬 Zalo</a>
                </div>

                {{-- Form yêu cầu mua hàng --}}
                <div style="background:#f5f5f5;padding:20px;border-radius:8px;">
                    <h3 style="margin-bottom:15px;">📋 Yêu cầu tư vấn / Đặt hàng</h3>
                    @if(session('success'))
                    <div style="background:#d4edda;color:#155724;padding:10px;border-radius:5px;margin-bottom:15px;">{{ session('success') }}</div>
                    @endif
                    <form action="{{ route('contact.purchase') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div style="margin-bottom:10px;">
                            <input type="text" name="full_name" placeholder="Họ tên *" required style="width:100%;padding:10px;border:1px solid #ddd;border-radius:5px;">
                        </div>
                        <div style="margin-bottom:10px;">
                            <input type="tel" name="phone" placeholder="Số điện thoại *" required style="width:100%;padding:10px;border:1px solid #ddd;border-radius:5px;">
                        </div>
                        <div style="margin-bottom:10px;">
                            <input type="email" name="email" placeholder="Email" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:5px;">
                        </div>
                        <div style="margin-bottom:10px;">
                            <textarea name="message" placeholder="Nội dung yêu cầu..." rows="3" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:5px;"></textarea>
                        </div>
                        <button type="submit" style="width:100%;padding:12px;background:#e74c3c;color:#fff;border:none;border-radius:5px;font-size:16px;cursor:pointer;font-weight:bold;">Gửi yêu cầu</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- Tabs chi tiết --}}
        <div style="margin-top:40px;">
            <div style="display:flex;border-bottom:2px solid #e74c3c;margin-bottom:20px;">
                <button class="tab-btn active" onclick="showTab('desc')" style="padding:12px 25px;border:none;background:#e74c3c;color:#fff;cursor:pointer;font-weight:bold;">Mô tả</button>
                <button class="tab-btn" onclick="showTab('specs')" style="padding:12px 25px;border:none;background:#eee;cursor:pointer;font-weight:bold;">Thông số</button>
                <button class="tab-btn" onclick="showTab('advantages')" style="padding:12px 25px;border:none;background:#eee;cursor:pointer;font-weight:bold;">Ưu điểm</button>
                <button class="tab-btn" onclick="showTab('reviews')" style="padding:12px 25px;border:none;background:#eee;cursor:pointer;font-weight:bold;">Đánh giá ({{ $product->reviews->where('is_approved', true)->count() }})</button>
                @if($product->video_url)
                <button class="tab-btn" onclick="showTab('video')" style="padding:12px 25px;border:none;background:#eee;cursor:pointer;font-weight:bold;">Video</button>
                @endif
            </div>

            {{-- Tab Mô tả --}}
            <div id="tab-desc" class="tab-content">
                <div class="product-description">{!! $product->description !!}</div>
            </div>

            {{-- Tab Thông số --}}
            <div id="tab-specs" class="tab-content" style="display:none;">
                @if($product->specs_full && count($product->specs_full))
                <ul style="list-style:disc;padding-left:20px;">
                    @foreach($product->specs_full as $spec)
                    <li style="margin-bottom:8px;">{{ $spec['value'] }}</li>
                    @endforeach
                </ul>
                @else
                <p>Chưa có thông số.</p>
                @endif
            </div>

            {{-- Tab Ưu điểm --}}
            <div id="tab-advantages" class="tab-content" style="display:none;">
                @if($product->advantages && count($product->advantages))
                <ul style="list-style:none;padding:0;">
                    @foreach($product->advantages as $adv)
                    <li style="margin-bottom:8px;padding:8px 12px;background:#f0fff0;border-left:3px solid #27ae60;">✅ {{ $adv['value'] }}</li>
                    @endforeach
                </ul>
                @else
                <p>Chưa có thông tin.</p>
                @endif
            </div>

            {{-- Tab Đánh giá --}}
            <div id="tab-reviews" class="tab-content" style="display:none;">
                @php $approvedReviews = $product->reviews->where('is_approved', true); @endphp
                @if($approvedReviews->count())
                    @foreach($approvedReviews as $review)
                    <div style="border-bottom:1px solid #eee;padding:15px 0;">
                        <div style="display:flex;justify-content:space-between;margin-bottom:5px;">
                            <strong>{{ $review->reviewer_name }}</strong>
                            <span style="color:#f39c12;">{{ str_repeat('⭐', $review->rating) }}</span>
                        </div>
                        <p style="color:#666;">{{ $review->comment }}</p>
                        <small style="color:#999;">{{ $review->created_at->format('d/m/Y') }}</small>
                    </div>
                    @endforeach
                @else
                <p>Chưa có đánh giá nào.</p>
                @endif
            </div>

            {{-- Tab Video --}}
            @if($product->video_url)
            <div id="tab-video" class="tab-content" style="display:none;">
                @php
                    preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $product->video_url, $matches);
                    $videoId = $matches[1] ?? null;
                @endphp
                @if($videoId)
                <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;border-radius:8px;">
                    <iframe src="https://www.youtube.com/embed/{{ $videoId }}" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allowfullscreen></iframe>
                </div>
                @endif
            </div>
            @endif
        </div>

        {{-- Sản phẩm liên quan --}}
        @if($relatedProducts->count())
        <div style="margin-top:40px;">
            <h2 style="margin-bottom:20px;">Sản phẩm liên quan</h2>
            <div class="row">
                @foreach($relatedProducts as $rp)
                @include('frontend.partials.product-card', ['product' => $rp])
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>

@push('scripts')
<script>
function showTab(name) {
    document.querySelectorAll('.tab-content').forEach(el => el.style.display = 'none');
    document.querySelectorAll('.tab-btn').forEach(el => { el.style.background = '#eee'; el.style.color = '#333'; });
    document.getElementById('tab-' + name).style.display = 'block';
    event.target.style.background = '#e74c3c';
    event.target.style.color = '#fff';
}
</script>
@endpush
@endsection