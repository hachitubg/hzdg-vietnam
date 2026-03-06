@extends('frontend.layouts.app')

@section('title', 'Liên hệ - HZDG Việt Nam')

@section('content')
<section class="section" style="padding:40px 0;">
    <div class="container">
        <h1 style="text-align:center;margin-bottom:30px;">LIÊN HỆ</h1>
        <div class="row">

            {{-- Thông tin liên hệ --}}
            <div class="col large-5" style="margin-bottom:20px;">
                <div style="background:#1a1a2e;color:#fff;padding:30px;border-radius:8px;height:100%;">
                    <h2 style="margin-bottom:20px;">HZDG VIỆT NAM</h2>
                    <p style="margin-bottom:15px;">📞 Hotline: <a href="tel:0946780404" style="color:#e74c3c;font-weight:bold;">094 678 04 04</a></p>
                    <p style="margin-bottom:15px;">📧 Email: info@hazdgvietnam.com</p>
                    <p style="margin-bottom:15px;">🌐 Website: hazdgvietnam.com</p>
                    <p style="margin-bottom:15px;">📘 Facebook: <a href="https://www.facebook.com/hzdgvietnam" target="_blank" style="color:#4267B2;">facebook.com/hzdgvietnam</a></p>
                </div>
            </div>

            {{-- Form liên hệ --}}
            <div class="col large-7">
                <div style="background:#f5f5f5;padding:30px;border-radius:8px;">
                    <h2 style="margin-bottom:20px;">Gửi tin nhắn cho chúng tôi</h2>
                    @if(session('success'))
                    <div style="background:#d4edda;color:#155724;padding:10px;border-radius:5px;margin-bottom:15px;">{{ session('success') }}</div>
                    @endif
                    @if($errors->any())
                    <div style="background:#f8d7da;color:#721c24;padding:10px;border-radius:5px;margin-bottom:15px;">
                        @foreach($errors->all() as $error)<p>{{ $error }}</p>@endforeach
                    </div>
                    @endif
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div style="margin-bottom:15px;">
                            <label style="display:block;margin-bottom:5px;font-weight:bold;">Họ tên *</label>
                            <input type="text" name="full_name" value="{{ old('full_name') }}" required style="width:100%;padding:12px;border:1px solid #ddd;border-radius:5px;">
                        </div>
                        <div style="margin-bottom:15px;">
                            <label style="display:block;margin-bottom:5px;font-weight:bold;">Số điện thoại *</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" required style="width:100%;padding:12px;border:1px solid #ddd;border-radius:5px;">
                        </div>
                        <div style="margin-bottom:15px;">
                            <label style="display:block;margin-bottom:5px;font-weight:bold;">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" style="width:100%;padding:12px;border:1px solid #ddd;border-radius:5px;">
                        </div>
                        <div style="margin-bottom:15px;">
                            <label style="display:block;margin-bottom:5px;font-weight:bold;">Nội dung</label>
                            <textarea name="message" rows="5" style="width:100%;padding:12px;border:1px solid #ddd;border-radius:5px;">{{ old('message') }}</textarea>
                        </div>
                        <button type="submit" style="width:100%;padding:14px;background:#e74c3c;color:#fff;border:none;border-radius:5px;font-size:16px;cursor:pointer;font-weight:bold;">Gửi liên hệ</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection