@extends('frontend.layouts.app')

@section('title', 'Dự án âm thanh hội trường Bộ tư lệnh Vùng 2 Hải quân – VD GROUP')
@section('body_class', 'page-template-page-blank-php')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/extracted-projects-show.css') }}">
@endpush
@push('scripts')
    <script defer src="{{ asset('assets/extracted-projects-show.js') }}"></script>
@endpush

@section('content')

    <div class="portfolio-page-wrapper portfolio-single-page">

        <div class="portfolio-top">
            <div class="page-wrapper row">
                <div class="large-3 col">
                    <div class="portfolio-summary entry-summary">
                        <p data-end="3053" data-start="3008">
                            Danh sách thiết bị chính trong dự án bao gồm:
                        </p>
                        <ul>
                            <li data-end="3098" data-start="3057">
                                <a href="loa-array-suim-la10mk/">Loa line array SUIM LA10MK</a>
                            </li>
                            <li data-end="3142" data-start="3101">
                                <a href="loa-sub-suim-la182mka/">Loa subwoofer SUIM LA182MK</a>
                            </li>
                            <li data-end="3185" data-start="3145">
                                <a href="loa-hoi-truong-suim-rqs15/">Loa full-range SUIM RQS15</a>
                            </li>
                            <li data-end="3231" data-start="3188">
                                <a href="cuc-day-cong-suat-hd-cdi4190/">Cục đẩy công suất HD CDI4190</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="large-9 col col-first col-divided" id="portfolio-content" role="main">
                    <!-- Nội dung bài viết -->
                    <div class="portfolio-inner">
                        Nội dung bài viết
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
