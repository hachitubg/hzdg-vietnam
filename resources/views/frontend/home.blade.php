@extends('frontend.layouts.app')

@section('title', 'VD GROUP – Phân phối âm thanh CHÍNH HÃNG, CHUYÊN NGHIỆP')
@section('body_class', 'home page-template-page-blank-php')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/extracted-home.css') }}">
@endpush
@push('scripts')
    <script defer src="{{ asset('assets/extracted-home.js') }}"></script>
@endpush

@section('content')

	<div class="content-area" id="content" role="main">

		<!-- HEADER BANNER -->
        <div class="slider-wrapper relative" id="slider-933773118">
            <div class="slider slider-nav-dots-dashes-spaced slider-nav-simple slider-nav-large slider-nav-light slider-style-normal"
                data-flickity-options='{
            "cellAlign": "center",
            "imagesLoaded": true,
            "lazyLoad": 1,
            "freeScroll": false,
            "wrapAround": true,
            "autoPlay": 5000,
            "pauseAutoPlayOnHover" : true,
            "prevNextButtons": true,
            "contain" : true,
            "adaptiveHeight" : true,
            "dragThreshold" : 10,
            "percentPosition": true,
            "pageDots": true,
            "rightToLeft": false,
            "draggable": true,
            "selectedAttraction": 0.1,
            "parallax" : 0,
            "friction": 0.6        }'>
                <div class="banner has-hover" id="banner-1679806962">
                    <div class="banner-inner fill">
                        <div class="banner-bg fill">
                            <img alt="VD-GROUP" class="bg attachment-2048x2048 size-2048x2048"
                                src="{{ asset('wp-content/uploads/images_hzdg/banner_trangchu_01.png') }}" decoding="async" height="551"
                                title="Trang chủ 1" width="1449" />
                        </div>
                    </div>
                </div>
                <div class="banner has-hover" id="banner-1560587182">
                    <div class="banner-inner fill">
                        <div class="banner-bg fill">
                            <img alt="5365597" class="bg attachment-large size-large"
                                src="{{ asset('wp-content/uploads/images_hzdg/banner_trangchu_02.jpg') }}" decoding="async"
                                height="680" title="Trang chủ 3" width="1020" />
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="banner has-hover" id="banner-850021743">
                    <div class="banner-inner fill">
                        <div class="banner-bg fill">
                            <img alt="abstract hexagon gray gradient white_1296664" class="bg attachment-large size-large"
                                src="{{ asset('wp-content/uploads/images_hzdg/banner_trangchu_03.png') }}"
                                decoding="async" height="372" title="Trang chủ 5" width="1020" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="loading-spin dark large centered"></div>
        </div>

        @include('frontend.home.home1')

        @include('frontend.home.home2')

        @include('frontend.home.home3')

    </div>

@endsection
