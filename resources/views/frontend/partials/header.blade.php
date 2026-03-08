<header style="border-bottom:1px solid #eee;background:#fff;position:sticky;top:0;z-index:30;">
    <div style="max-width:1200px;margin:0 auto;padding:14px 16px;display:flex;align-items:center;justify-content:space-between;gap:16px;">
        <a href="{{ route('home') }}" style="font-weight:700;font-size:20px;color:#db3e26;">VD GROUP</a>

        <nav style="display:flex;gap:14px;flex-wrap:wrap;align-items:center;font-size:14px;">
            <a href="{{ route('home') }}">Trang chủ</a>
            <a href="{{ route('products.index') }}">Sản phẩm</a>
            <a href="{{ route('projects.index') }}">Dự án</a>
            <a href="{{ route('posts.index') }}">Tin tức</a>
            <a href="{{ route('about') }}">Giới thiệu</a>
            <a href="{{ route('contact.index') }}">Liên hệ</a>
        </nav>
    </div>

    @if (!empty($globalProductCategories) && $globalProductCategories->isNotEmpty())
        <div style="max-width:1200px;margin:0 auto;padding:0 16px 12px;display:flex;gap:10px;flex-wrap:wrap;">
            @foreach ($globalProductCategories as $menuCategory)
                <a href="{{ route('products.category', $menuCategory->slug) }}"
                    style="font-size:12px;padding:4px 10px;border:1px solid #ddd;border-radius:999px;">{{ $menuCategory->name }}</a>
            @endforeach
        </div>
    @endif
</header>
