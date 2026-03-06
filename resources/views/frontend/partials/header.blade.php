<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">
        <div id="masthead" class="header-main">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <a href="{{ route('home') }}" title="HZDG Việt Nam" rel="home">
                        <img width="150" height="150" src="{{ asset('wp-content/uploads/logo-VD-150.png') }}" class="header_logo header-logo" alt="HZDG Việt Nam">
                    </a>
                </div>

                <!-- Menu -->
                <div class="flex-col show-for-medium flex-grow">
                    <ul class="nav header-nav header-bottom-nav nav-left nav-size-xlarge nav-spacing-xlarge">
                        <li class="menu-item"><a href="{{ route('home') }}" class="nav-top-link">Trang chủ</a></li>
                        <li class="menu-item"><a href="{{ route('about') }}" class="nav-top-link">Giới thiệu</a></li>
                        <li class="menu-item has-dropdown">
                            <a href="{{ route('products.index') }}" class="nav-top-link">Sản phẩm</a>
                            <ul class="sub-menu nav-dropdown">
                                @php
                                    $menuCategories = \App\Models\Category::where('type','product')->where('is_visible',true)->whereNull('parent_id')->orderBy('sort_order')->get();
                                @endphp
                                @foreach($menuCategories as $cat)
                                <li><a href="{{ route('products.category', $cat->slug) }}">{{ $cat->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item"><a href="{{ route('projects.index') }}" class="nav-top-link">Dự án</a></li>
                        <li class="menu-item"><a href="{{ route('posts.index') }}" class="nav-top-link">Tin tức</a></li>
                        <li class="menu-item"><a href="{{ route('contact.index') }}" class="nav-top-link">Liên hệ</a></li>
                    </ul>
                </div>

                <!-- Hotline -->
                <div class="flex-col">
                    <a href="tel:0946780404" class="nav-top-link" style="color:#e74c3c;font-weight:bold;">
                        📞 094 678 04 04
                    </a>
                </div>

            </div>
        </div>
    </div>
</header>