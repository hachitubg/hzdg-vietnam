<div id="wrapper">
    <img alt="ĐÓN TẾT RỘN RÀNG" class="attachment-full size-full" src="{{ asset('wp-content/uploads/DON-TET-RON-RANG-scaled.png') }}" decoding="async" fetchpriority="high" height="93" width="2560" />
    <header class="header has-sticky sticky-jump" id="header">
        <div class="header-wrapper">
            <div class="header-top hide-for-sticky nav-dark" id="top-bar">
                <div class="flex-row container">
                    <div class="flex-col hide-for-medium flex-left">
                        <ul class="nav nav-left medium-nav-center nav-small nav-divided">
                            <li class="html custom html_topbar_left"><strong class="uppercase">Công ty cổ phần HZDG VIỆT NAM</strong></li>
                        </ul>
                    </div>
                    <div class="flex-col hide-for-medium flex-center">
                        <ul class="nav nav-center nav-small nav-divided">
                        </ul>
                    </div>
                    <div class="flex-col hide-for-medium flex-right">
                        <ul class="nav top-bar-nav nav-right nav-small nav-divided">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41048 menu-item-design-default"
                                id="menu-item-41048">
                                <a class="nav-top-link" href="kien-thuc-am-thanh-anh-sang/">Blog</a>
                            </li>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-43560 menu-item-design-default"
                                id="menu-item-43560">
                                <a class="nav-top-link" href="tuyen-dung/">Tuyển dụng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-col show-for-medium flex-grow">
                        <ul class="nav nav-center nav-small mobile-nav nav-divided">
                            <li class="html custom html_topbar_left"><strong class="uppercase">Công ty cổ phần HZDG VIỆT NAM</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-main" id="masthead">
                <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                    <!-- Logo -->
                    <div class="flex-col logo" id="logo">
                        <!-- Header logo -->
                        <a href="{{ route('home') }}" rel="home" title="HZDG VIỆT NAM - CÔNG TY CỔ PHẦN HZDG VIỆT NAM">
                            <img alt="HZDG VIỆT NAM" class="header_logo header-logo"
                                src="{{ asset('wp-content/uploads/logo_icon/logo_blue.png') }}" height="150"
                                width="150" /><img alt="HZDG VIỆT NAM" class="header-logo-dark"
                                src="{{ asset('wp-content/uploads/logo_icon/logo_blue.png') }}" height="150"
                                width="150" /></a>
                    </div>
                    <!-- Mobile Left Elements -->
                    <div class="flex-col show-for-medium flex-left">
                        <ul class="mobile-nav nav nav-left">
                            <li class="nav-icon has-icon">
                                <a aria-controls="main-menu" aria-expanded="false" aria-label="Menu" class="is-small"
                                    id="mobile-menu-toggle" href="#">
                                    <i class="icon-menu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Left Elements -->
                    <div class="flex-col hide-for-medium flex-left flex-grow">
                        <ul class="header-nav header-nav-main nav nav-left nav-line-grow nav-size-xlarge nav-spacing-xlarge nav-uppercase">
                        </ul>
                    </div>
                    <!-- Right Elements -->
                    <div class="flex-col hide-for-medium flex-right">
                        <style>
                            /* Dropdown base */
                            .header-nav li.has-dropdown {
                                position: relative;
                            }
                            .header-nav li.has-dropdown > .nav-dropdown {
                                position: absolute;
                                top: 100%;
                                left: 0;
                                z-index: 9999;
                                min-width: 240px;
                                padding: 8px 0;
                                margin: 0;
                                list-style: none;
                                background: #fff;
                                border-radius: 0 0 8px 8px;
                                box-shadow: 0 8px 24px rgba(0,0,0,.12);
                                opacity: 0;
                                visibility: hidden;
                                transform: translateY(6px);
                                transition: opacity .25s ease, transform .25s ease, visibility .25s;
                                pointer-events: none;
                            }
                            /* Show on hover – with invisible bridge to prevent gap */
                            .header-nav li.has-dropdown::after {
                                content: '';
                                position: absolute;
                                top: 100%;
                                left: 0;
                                width: 100%;
                                height: 12px;
                            }
                            .header-nav li.has-dropdown:hover > .nav-dropdown {
                                left: 0;
                                max-height: inherit;
                                opacity: 1;
                                visibility: visible;
                                transform: translateY(0);
                                pointer-events: auto;
                            }
                            /* Right-aligned dropdown when near edge */
                            .header-nav .nav-right li.has-dropdown:nth-last-child(-n+4):hover > .nav-dropdown {
                                left: auto;
                                right: 0;
                            }
                            /* Item styling */
                            .header-nav .nav-dropdown > li {
                                display: block;
                                margin: 0;
                            }
                            .header-nav .nav-dropdown > li > a {
                                display: flex;
                                align-items: center;
                                gap: 10px;
                                padding: 10px 20px;
                                color: #555;
                                font-size: 14px;
                                font-weight: 500;
                                text-decoration: none;
                                text-transform: none;
                                transition: background .2s, color .2s, padding-left .2s;
                                white-space: nowrap;
                            }
                            .header-nav .nav-dropdown > li > a:hover {
                                background: #f5f7fa;
                                color: #1a3b8a;
                                padding-left: 26px;
                            }
                            .header-nav .nav-dropdown > li > a img {
                                width: 32px;
                                height: 32px;
                                object-fit: cover;
                                border-radius: 6px;
                                flex-shrink: 0;
                            }
                            /* Arrow indicator */
                            .header-nav li.has-dropdown > a .icon-angle-down {
                                font-size: 10px;
                                margin-left: 3px;
                                transition: transform .25s;
                            }
                            .header-nav li.has-dropdown:hover > a .icon-angle-down {
                                transform: rotate(180deg);
                            }
                        </style>
                        <ul class="header-nav header-nav-main nav nav-right nav-line-grow nav-size-xlarge nav-spacing-xlarge nav-uppercase">
                            {{-- Trang chủ --}}
                            <li class="only-icon menu-item menu-item-design-default has-icon-left {{ request()->routeIs('home') ? 'active current-menu-item' : '' }}">
                                <a class="nav-top-link" href="{{ route('home') }}"><i class="fas fa-home"></i></a>
                            </li>

                            {{-- Sản phẩm (dropdown danh mục sản phẩm kèm hình ảnh) --}}
                            <li class="menu-item has-dropdown {{ request()->routeIs('products.*') ? 'active' : '' }}">
                                <a aria-expanded="false" aria-haspopup="menu" class="nav-top-link" href="{{ route('products.index') }}">Sản phẩm<i class="icon-angle-down"></i></a>
                                <ul class="nav-dropdown nav-dropdown-default">
                                    @if(isset($productCategories) && $productCategories->count())
                                    @foreach($productCategories as $cat)
                                    <li class="menu-item">
                                        <a href="{{ route('products.category', $cat->slug) }}">
                                            @if($cat->image)
                                            <img src="{{ Storage::url($cat->image) }}" alt="{{ $cat->name }}" />
                                            @endif
                                            {{ $cat->name }}
                                        </a>
                                    </li>
                                    @endforeach
                                    @else
                                    <li class="menu-item">
                                        <a href="{{ route('products.index') }}">Xem tất cả sản phẩm</a>
                                    </li>
                                    @endif
                                </ul>
                            </li>

                            {{-- Dịch vụ (dropdown danh mục dự án) --}}
                            <li class="menu-item has-dropdown {{ request()->routeIs('projects.*') ? 'active' : '' }}">
                                <a aria-expanded="false" aria-haspopup="menu" class="nav-top-link" href="{{ route('projects.index') }}">Dịch vụ<i class="icon-angle-down"></i></a>
                                <ul class="nav-dropdown nav-dropdown-default">
                                    @if(isset($projectCategories) && $projectCategories->count())
                                    @foreach($projectCategories as $cat)
                                    <li class="menu-item">
                                        <a href="{{ route('projects.index') }}?cat={{ $cat->slug }}">{{ $cat->name }}</a>
                                    </li>
                                    @endforeach
                                    @else
                                    <li class="menu-item">
                                        <a href="{{ route('projects.index') }}">Xem tất cả dự án</a>
                                    </li>
                                    @endif
                                </ul>
                            </li>

                            {{-- Dự án tiêu biểu (scroll tới section trên trang chủ) --}}
                            <li class="menu-item menu-item-design-default">
                                <a class="nav-top-link" href="{{ route('home') }}#du-an-tieu-bieu">Dự án tiêu biểu</a>
                            </li>

                            {{-- Giới thiệu về HZDG (scroll tới section trên trang chủ) --}}
                            <li class="menu-item menu-item-design-default">
                                <a class="nav-top-link" href="{{ route('home') }}#gioi-thieu-hzdg">Giới thiệu về HZDG</a>
                            </li>

                            {{-- Tin tức --}}
                            <li class="menu-item menu-item-design-default {{ request()->routeIs('posts.*') ? 'active' : '' }}">
                                <a class="nav-top-link" href="{{ route('posts.index') }}">Tin tức</a>
                            </li>

                            {{-- Hotline --}}
                            <li class="html header-button-1">
                                <div class="header-button">
                                    <a class="button alert is-large box-shadow-2" href="tel:0967793333"
                                        style="border-radius:99px;">
                                        <span>Hotline: 096.779.3333</span>
                                    </a>
                                </div>
                            </li>

                            {{-- Tìm kiếm --}}
                            <li class="header-search header-search-lightbox has-icon">
                                <a aria-label="Tìm kiếm" class="is-small" data-focus="input.search-field" data-open="#search-lightbox" href="#search-lightbox">
                                    <i class="icon-search" style="font-size:16px;"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Mobile Right Elements -->
                    <div class="flex-col show-for-medium flex-right">
                        <ul class="mobile-nav nav nav-right">
                            <li class="header-search header-search-lightbox has-icon">
                                <a aria-label="Tìm kiếm" class="is-small" data-focus="input.search-field"
                                    data-open="#search-lightbox" href="#search-lightbox">
                                    <i class="icon-search" style="font-size:16px;"></i></a>
                                <div class="mfp-hide dark text-center" id="search-lightbox">
                                    <div class="searchform-wrapper ux-search-box relative form-flat is-large">
                                        <form action="index.html" class="searchform" method="get"
                                            role="search">
                                            <div class="flex-row relative">
                                                <div class="flex-col flex-grow">
                                                    <label class="screen-reader-text"
                                                        for="woocommerce-product-search-field-1">Tìm kiếm:</label>
                                                    <input class="search-field mb-0"
                                                        id="woocommerce-product-search-field-1" name="s"
                                                        placeholder="Tìm kiếm thiết bị, hệ thống âm thanh"
                                                        type="search" value="" />
                                                    <input name="post_type" type="hidden" value="product" />
                                                </div>
                                                <div class="flex-col">
                                                    <button aria-label="Gửi"
                                                        class="ux-search-submit submit-button secondary button icon mb-0"
                                                        type="submit" value="Tìm kiếm">
                                                        <i class="icon-search"></i> </button>
                                                </div>
                                            </div>
                                            <div class="live-search-results text-left z-top"></div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container">
                    <div class="top-divider full-width"></div>
                </div>
            </div>
            <div class="header-bg-container fill">
                <div class="header-bg-image fill"></div>
                <div class="header-bg-color fill"></div>
            </div>
        </div>
    </header>

    {{-- Mobile Sidebar Menu --}}
    <div id="main-menu" class="mobile-sidebar mfp-hide">
        <div class="mobile-sidebar-overlay" id="main-menu-overlay"></div>
        <div class="mobile-sidebar-inner">
            <div class="mobile-sidebar-header">
                <a href="{{ route('home') }}" class="mobile-sidebar-logo">
                    <img src="{{ asset('wp-content/uploads/logo_icon/logo_blue.png') }}" alt="HZDG" height="40" />
                </a>
                <button class="mobile-sidebar-close" aria-label="Đóng">
                    <i class="icon-close"></i>
                </button>
            </div>
            <ul class="nav nav-sidebar nav-vertical nav-uppercase">
                {{-- Trang chủ --}}
                <li class="menu-item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}"><i class="fas fa-home" style="margin-right:8px;"></i>Trang chủ</a>
                </li>

                {{-- Sản phẩm --}}
                <li class="menu-item has-child">
                    <a href="{{ route('products.index') }}">Sản phẩm</a>
                    <button class="toggle" aria-label="Mở rộng"><i class="icon-angle-down"></i></button>
                    <ul class="sub-menu">
                        @if(isset($productCategories) && $productCategories->count())
                        @foreach($productCategories as $cat)
                        <li class="menu-item">
                            <a href="{{ route('products.category', $cat->slug) }}">
                                @if($cat->image)
                                <img src="{{ Storage::url($cat->image) }}" alt="{{ $cat->name }}" />
                                @endif
                                {{ $cat->name }}
                            </a>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </li>

                {{-- Dịch vụ --}}
                <li class="menu-item has-child">
                    <a href="{{ route('projects.index') }}">Dịch vụ</a>
                    <button class="toggle" aria-label="Mở rộng"><i class="icon-angle-down"></i></button>
                    <ul class="sub-menu">
                        @if(isset($projectCategories) && $projectCategories->count())
                        @foreach($projectCategories as $cat)
                        <li class="menu-item">
                            <a href="{{ route('projects.index') }}?cat={{ $cat->slug }}">{{ $cat->name }}</a>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </li>

                {{-- Dự án tiêu biểu --}}
                <li class="menu-item">
                    <a href="{{ route('home') }}#du-an-tieu-bieu">Dự án tiêu biểu</a>
                </li>

                {{-- Giới thiệu --}}
                <li class="menu-item">
                    <a href="{{ route('home') }}#gioi-thieu-hzdg">Giới thiệu về HZDG</a>
                </li>

                {{-- Tin tức --}}
                <li class="menu-item {{ request()->routeIs('posts.*') ? 'active' : '' }}">
                    <a href="{{ route('posts.index') }}">Tin tức</a>
                </li>

                {{-- Hotline --}}
                <li class="menu-item menu-item-hotline">
                    <a href="tel:0967793333"><i class="fas fa-phone-alt" style="margin-right:8px;"></i>Hotline: 096.779.3333</a>
                </li>
            </ul>
        </div>
    </div>

    <style>
        /* ===== Mobile Sidebar ===== */
        .mobile-sidebar {
            position: fixed;
            inset: 0;
            z-index: 99999;
            visibility: hidden;
            pointer-events: none;
        }
        .mobile-sidebar.is-open {
            visibility: visible;
            pointer-events: auto;
        }
        .mobile-sidebar-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,.45);
            opacity: 0;
            transition: opacity .3s;
        }
        .mobile-sidebar.is-open .mobile-sidebar-overlay {
            opacity: 1;
        }
        .mobile-sidebar-inner {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 300px;
            max-width: 85vw;
            background: #fff;
            box-shadow: 2px 0 12px rgba(0,0,0,.15);
            transform: translateX(-100%);
            transition: transform .3s ease;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            display: flex;
            flex-direction: column;
        }
        .mobile-sidebar.is-open .mobile-sidebar-inner {
            transform: translateX(0);
        }
        .mobile-sidebar-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 20px;
            border-bottom: 1px solid #eee;
        }
        .mobile-sidebar-logo img {
            height: 40px;
            width: auto;
        }
        .mobile-sidebar-close {
            background: none;
            border: none;
            font-size: 22px;
            cursor: pointer;
            padding: 4px;
            color: #333;
            line-height: 1;
        }
        /* Nav items */
        .mobile-sidebar .nav-sidebar {
            list-style: none;
            margin: 0;
            padding: 8px 0;
        }
        .mobile-sidebar .nav-sidebar > li {
            border-bottom: 1px solid #f0f0f0;
            position: relative;
        }
        .mobile-sidebar .nav-sidebar > li > a {
            display: block;
            padding: 14px 20px;
            color: #333;
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: .03em;
        }
        .mobile-sidebar .nav-sidebar > li > a:hover,
        .mobile-sidebar .nav-sidebar > li.active > a {
            color: #1a3b8a;
        }
        /* Toggle button */
        .mobile-sidebar .has-child {
            display: flex;
            flex-wrap: wrap;
        }
        .mobile-sidebar .has-child > a {
            flex: 1;
        }
        .mobile-sidebar .toggle {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            background: none;
            border: none;
            border-left: 1px solid #f0f0f0;
            cursor: pointer;
            color: #666;
            font-size: 14px;
            transition: transform .3s;
            padding: 0;
        }
        .mobile-sidebar .has-child.is-toggled > .toggle {
            transform: rotate(180deg);
        }
        /* Sub-menu */
        .mobile-sidebar .sub-menu {
            display: none;
            list-style: none;
            margin: 0;
            padding: 0;
            width: 100%;
            background: #f8f9fb;
        }
        .mobile-sidebar .has-child.is-toggled > .sub-menu {
            display: block;
        }
        .mobile-sidebar .sub-menu > li > a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px 12px 32px;
            color: #555;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            transition: background .2s, color .2s;
        }
        .mobile-sidebar .sub-menu > li > a:hover {
            background: #eef1f6;
            color: #1a3b8a;
        }
        .mobile-sidebar .sub-menu > li > a img {
            width: 28px;
            height: 28px;
            object-fit: cover;
            border-radius: 5px;
            flex-shrink: 0;
        }
        /* Hotline item */
        .mobile-sidebar .menu-item-hotline > a {
            color: #e53e3e;
            font-weight: 700;
        }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var sidebar = document.getElementById('main-menu');
        if (!sidebar) return;

        // Open sidebar
        var toggleBtn = document.getElementById('mobile-menu-toggle');
        if (toggleBtn) {
            toggleBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                sidebar.classList.add('is-open');
                document.body.style.overflow = 'hidden';
            });
        }

        // Close sidebar
        function closeSidebar() {
            sidebar.classList.remove('is-open');
            document.body.style.overflow = '';
        }
        sidebar.querySelector('.mobile-sidebar-close').addEventListener('click', closeSidebar);
        sidebar.querySelector('.mobile-sidebar-overlay').addEventListener('click', closeSidebar);

        // Toggle sub-menus
        sidebar.querySelectorAll('.toggle').forEach(function(toggle) {
            toggle.addEventListener('click', function() {
                this.parentElement.classList.toggle('is-toggled');
            });
        });

        // Close sidebar when clicking a nav link (except toggle)
        sidebar.querySelectorAll('.nav-sidebar a').forEach(function(link) {
            link.addEventListener('click', function() {
                closeSidebar();
            });
        });
    });
    </script>
