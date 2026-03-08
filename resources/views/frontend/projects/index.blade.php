@extends('frontend.layouts.app')

@section('title', 'Dự án – VD GROUP')
@section('body_class', 'page-template-page-blank-php')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/extracted-projects-index.css') }}">
@endpush
@push('scripts')
    <script defer src="{{ asset('assets/extracted-projects-index.js') }}"></script>
@endpush

@section('content')

    <div class="content-area" id="content" role="main">
        
        <section class="section" id="section_648525420">
            <div class="section-bg fill"></div>
            <div class="section-content relative">
                <div class="row" id="row-1766957619">
                    <div class="col small-12 large-12" id="col-448248495">
                        <div class="col-inner">
                            <div class="portfolio-element-wrapper has-filtering" id="portfolio-429109708">
                                <!-- Lọc theo danh mục dự án -->
                                <div class="container mb-half">
                                    <ul class="nav nav-true nav-center nav-line nav-uppercase filter-nav">
                                        <li class="active">
                                            <a data-filter="*" href="#">Tất cả</a>
                                        </li>
                                        <li>
                                            <a data-filter="[data-terms*='&quot;Bệnh viện - Phòng khám&quot;']" href="#">Bệnh viện - Phòng khám</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="row project-grid row-isotope large-columns-3 medium-columns- small-columns-2 row-small row-full-width has-shadow row-box-shadow-2 row-masonry" data-packery-options='{"itemSelector": ".col", "gutter": 0, "presentageWidth" : true}' id="portfolio-429109708">
                                    <div class="col" data-terms='["Sân khấu - Hội trường"]'>
                                        <div class="col-inner">
                                            <a class="plain"
                                                href="portfolio/du-an-am-thanh-hoi-truong-bo-tu-lenh-vung-2-hai-quan/index.html">
                                                <div class="portfolio-box box has-hover box-default">
                                                    <div class="box-image">
                                                        <div class="image-cover" style="padding-top: 50%">
                                                            <img alt="Dự án âm thanh hội trường Bộ Tư Lệnh Vùng 2 Hải Quân"
                                                                class="attachment-large size-large" decoding="async"
                                                                height="432" sizes="(max-width: 768px) 100vw, 768px"
                                                                src="{{ asset('wp-content/uploads/he-thong-am-Hoi-truong-Vung-2-Hai-Quan.png') }}"
                                                                title="Dự án 2" width="768" />
                                                        </div>
                                                    </div>
                                                    <div class="box-text text-center">
                                                        <div class="box-text-inner">
                                                            <h6 class="uppercase portfolio-box-title">
                                                                Dự án âm thanh hội trường Bộ Tư Lệnh Vùng 2 Hải Quân
                                                            </h6>
                                                            <p class="uppercase portfolio-box-category is-xsmall op-6">
                                                                <span class="show-on-hover">
                                                                    Sân khấu - Hội trường
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

@endsection
