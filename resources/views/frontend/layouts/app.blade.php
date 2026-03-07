<!DOCTYPE html>
<html class="loading-site no-js" lang="vi">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title', 'VD GROUP – Phân phối âm thanh CHÍNH HÃNG, CHUYÊN NGHIỆP')</title>

{{-- Favicons --}}
<link href="{{ asset('wp-content/uploads/cropped-favicon-32x32.png') }}" rel="icon" sizes="32x32"/>
<link href="{{ asset('wp-content/uploads/cropped-favicon-192x192.png') }}" rel="icon" sizes="192x192"/>
<link href="{{ asset('wp-content/uploads/logo-VD-150.png') }}" rel="apple-touch-icon"/>

{{-- Google Fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+3:regular,500,regular,700|Dancing+Script:regular,regular&display=swap" rel="stylesheet"/>

{{-- Plugin CSS (từ cache/min của WP Rocket) --}}
<link rel="stylesheet" href="{{ asset('wp-content/cache/min/1/wp-content/plugins/woo-product-bundle/assets/css/blocks.css') }}">
<link rel="stylesheet" href="{{ asset('wp-content/cache/min/1/wp-content/plugins/visual-link-preview/dist/public.css') }}">
<link rel="stylesheet" href="{{ asset('wp-content/cache/min/1/wp-content/plugins/yith-woocommerce-ajax-product-filter-premium/assets/css/ion.range-slider.css') }}">
<link rel="stylesheet" href="{{ asset('wp-content/cache/min/1/wp-content/plugins/yith-woocommerce-ajax-product-filter-premium/assets/css/shortcodes.css') }}">
<link rel="stylesheet" href="{{ asset('wp-content/cache/min/1/wp-content/plugins/woocommerce/assets/css/brands.css') }}">
<link rel="stylesheet" href="{{ asset('wp-content/cache/min/1/wp-content/plugins/woo-product-bundle/assets/css/frontend.css') }}">

{{-- Theme CSS (từ cache/min của WP Rocket) --}}
<link rel="stylesheet" href="{{ asset('wp-content/cache/min/1/wp-content/themes/flatsome-child/acf/acf-custom.css') }}">
<link rel="stylesheet" href="{{ asset('wp-content/cache/min/1/wp-content/themes/flatsome-child/font-awesome-pro-6.4.0-web/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('wp-content/cache/min/1/wp-content/themes/flatsome/assets/css/extensions/flatsome-swatches-frontend.css') }}">
<link rel="stylesheet" href="{{ asset('wp-content/cache/min/1/wp-content/themes/flatsome/assets/css/flatsome.css') }}">
<link rel="stylesheet" href="{{ asset('wp-content/cache/min/1/wp-content/themes/flatsome/assets/css/flatsome-shop.css') }}">
<link rel="stylesheet" href="{{ asset('wp-content/cache/min/1/wp-content/themes/flatsome-child/style.css') }}">

{{-- Contact Form 7 CSS --}}
<link rel="stylesheet" href="{{ asset('wp-content/cache/min/1/wp-content/plugins/contact-form-7/includes/css/styles.css') }}">

{{-- Extracted clone CSS --}}
<link rel="stylesheet" href="{{ asset('assets/extracted.css') }}">

@stack('styles')
</head>

<body class="wp-theme-flatsome wp-child-theme-flatsome-child theme-flatsome lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border @yield('body_class')">

@include('frontend.partials.header')

<main id="main">
@yield('content')
</main>

@include('frontend.partials.footer')

{{-- jQuery --}}
<script src="{{ asset('wp-includes/js/jquery/jquery.min.js') }}" defer></script>
<script src="{{ asset('wp-includes/js/jquery/jquery-migrate.min.js') }}" defer></script>

{{-- flatsomeVars: phải khai báo trước flatsome.js --}}
<script>
var flatsomeVars = {
    "theme": { "version": "3.19.15" },
    "ajaxurl": "{{ url('/wp-admin/admin-ajax.php') }}",
    "rtl": "",
    "sticky_height": "50",
    "stickyHeaderHeight": "0",
    "scrollPaddingTop": "0",
    "assets_url": "{{ asset('wp-content/themes/flatsome/assets') }}/",
    "lightbox": {
        "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg></button>",
        "close_btn_inside": false
    },
    "user": { "can_edit_pages": false },
    "i18n": { "mainMenu": "Menu chính", "toggleButton": "Chuyển đổi" },
    "options": {
        "cookie_notice_version": "1",
        "swatches_layout": false,
        "swatches_disable_deselect": false,
        "swatches_box_select_event": false,
        "swatches_box_behavior_selected": false,
        "swatches_box_update_urls": "1",
        "swatches_box_reset": false,
        "swatches_box_reset_limited": false,
        "swatches_box_reset_extent": false,
        "swatches_box_reset_time": 300,
        "search_result_latency": "0"
    },
    "is_mini_cart_reveal": "1"
};
</script>

{{-- Flatsome JS --}}
<script src="{{ asset('wp-content/themes/flatsome/assets/js/flatsome.js') }}" defer></script>

{{-- WP Rocket LazyLoad --}}
<script async src="{{ asset('wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js') }}"></script>

{{-- Extracted clone JS --}}
<script defer src="{{ asset('assets/extracted.js') }}"></script>

@stack('scripts')

</body>
</html>
