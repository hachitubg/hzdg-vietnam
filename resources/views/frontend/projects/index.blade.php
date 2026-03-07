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
<div class="banner has-hover" id="banner-1277287910">
<div class="banner-inner fill">
<div class="banner-bg fill">
<img alt="anh-tap-the-vd" class="bg attachment-large size-large" decoding="async" fetchpriority="high" height="287" src="{{ asset('wp-content/uploads/anh-tap-the-vd-1024x288.jpg') }}" title="Dự án 1" width="1020"/>
<div class="overlay"></div>
</div>
<div class="banner-layers container">
<div class="fill banner-link"></div>
<div class="text-box banner-layer x50 md-x50 lg-x50 y90 md-y90 lg-y90 res-text" id="text-box-1451662304">
<div class="text-box-content text dark">
<div class="text-inner text-center">
<h1 class="uppercase">
                        Các dự án VD-GROUP đã Hoàn thành
                      </h1>
<p>
                        VD-GROUP là đơn vị đã có hơn 10 năm kinh nghiệm trong
                        lĩnh vực âm thanh trên thị trường, chúng tôi rất tự hào
                        khi cung cấp đến cho người dùng những dự án âm thanh
                        tuyệt vời chất lượng nhất.
                      </p>
</div>
</div>

</div>
</div>
</div>

</div>
<section class="section" id="section_648525420">
<div class="section-bg fill"></div>
<div class="section-content relative">
<div class="row" id="row-1766957619">
<div class="col small-12 large-12" id="col-448248495">
<div class="col-inner">
<div class="portfolio-element-wrapper has-filtering" id="portfolio-429109708">
<div class="container mb-half">
<ul class="nav nav-true nav-center nav-line nav-uppercase filter-nav">
<li class="active">
<a data-filter="*" href="#">Tất cả</a>
</li>
<li>
<a data-filter="[data-terms*='&quot;Bệnh viện - Phòng khám&quot;']" href="#">Bệnh viện - Phòng khám</a>
</li>
<li>
<a data-filter="[data-terms*='&quot;Cơ quan - Doanh nghiệp&quot;']" href="#">Cơ quan - Doanh nghiệp</a>
</li>
<li>
<a data-filter="[data-terms*='&quot;Cơ sở kinh doanh - cửa hàng - shop&quot;']" href="#">Cơ sở kinh doanh - cửa hàng - shop</a>
</li>
<li>
<a data-filter="[data-terms*='&quot;Khách sạn - Resort&quot;']" href="#">Khách sạn - Resort</a>
</li>
<li>
<a data-filter="[data-terms*='&quot;Ngân hàng&quot;']" href="#">Ngân hàng</a>
</li>
<li>
<a data-filter="[data-terms*='&quot;Nhà chùa - nhà thờ&quot;']" href="#">Nhà chùa - nhà thờ</a>
</li>
<li>
<a data-filter="[data-terms*='&quot;Nhà hàng&quot;']" href="#">Nhà hàng</a>
</li>
<li>
<a data-filter="[data-terms*='&quot;Nhà xưởng&quot;']" href="#">Nhà xưởng</a>
</li>
<li>
<a data-filter="[data-terms*='&quot;Phòng họp&quot;']" href="#">Phòng họp</a>
</li>
<li>
<a data-filter="[data-terms*='&quot;Quán cafe&quot;']" href="#">Quán cafe</a>
</li>
<li>
<a data-filter="[data-terms*='&quot;Sân khấu - Hội trường&quot;']" href="#">Sân khấu - Hội trường</a>
</li>
<li>
<a data-filter="[data-terms*='&quot;Sân vườn&quot;']" href="#">Sân vườn</a>
</li>
<li>
<a data-filter="[data-terms*='&quot;Thông báo&quot;']" href="#">Thông báo</a>
</li>
</ul>
</div>
<div class="row project-grid row-isotope large-columns-3 medium-columns- small-columns-2 row-small row-full-width has-shadow row-box-shadow-2 row-masonry" data-packery-options='{"itemSelector": ".col", "gutter": 0, "presentageWidth" : true}' id="portfolio-429109708">
<div class="col" data-terms='["Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="portfolio/du-an-am-thanh-hoi-truong-bo-tu-lenh-vung-2-hai-quan/index.html">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Dự án âm thanh hội trường Bộ Tư Lệnh Vùng 2 Hải Quân" class="attachment-large size-large" decoding="async" height="432" sizes="(max-width: 768px) 100vw, 768px" src="{{ asset('wp-content/uploads/he-thong-am-Hoi-truong-Vung-2-Hai-Quan.png') }}"  title="Dự án 2" width="768"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án âm thanh hội trường Bộ Tư Lệnh Vùng
                                      2 Hải Quân
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
<div class="col" data-terms='["Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-am-thanh-phong-hop-thanh-tra-tinh-thanh-hoa') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Dự án âm thanh phòng họp" class="attachment-large size-large" decoding="async" height="432" sizes="(max-width: 768px) 100vw, 768px" src="{{ asset('wp-content/uploads/Du-an-am-thanh-phong-hop-Thanh-Tra-tinh-Thanh-Hoa-.jpg') }}"  title="Dự án 3" width="768"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án âm thanh phòng họp Thanh Tra tỉnh
                                      Thanh Hóa
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-am-thanh-phong-hop-nha-may-xi-mang-la-hien-thai-nguyen') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Dự án âm thanh phòng họp Nhà máy Xi măng La Hiên – Thái Nguyên" class="attachment-large size-large" decoding="async" height="432" sizes="(max-width: 768px) 100vw, 768px" src="{{ asset('wp-content/uploads/Du-an-am-thanh-phong-hop-Nha-may-Xi-mang-La-Hien.png') }}"  title="Dự án 4" width="768"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án âm thanh phòng họp Nhà máy Xi măng
                                      La Hiên – Thái Nguyên
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'he-thong-am-thanh-phong-hop-truong-cao-dang-nghe-so-20-bqp') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Hệ thống âm thanh phòng họp trường cao đẳng nghề số 20 - BQP" class="attachment-large size-large" decoding="async" height="432" sizes="(max-width: 768px) 100vw, 768px" src="{{ asset('wp-content/uploads/TRUONG-CAO-DANG-NGHE-SO-20-BQP-.jpg') }}"  title="Dự án 5" width="768"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Hệ thống âm thanh phòng họp trường cao
                                      đẳng nghề số 20 – BQP
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-am-thanh-phong-hop-326-hoang-quoc-viet-cau-giay-ha-noi') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Hệ thống âm thanh phòng họp tại 326 Hoàng Quốc Việt, Cầu Giấy, Hà Nội." class="attachment-large size-large" decoding="async" height="432" sizes="(max-width: 768px) 100vw, 768px" src="{{ asset('wp-content/uploads/326-Hoang-Quoc-Viet-Cau-Giay-Ha-Noi.png') }}"  title="Dự án 6" width="768"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án âm thanh phòng họp 326 Hoàng Quốc
                                      Việt, Cầu Giấy, Hà Nội
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Sân vườn"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-lap-dat-am-thanh-san-vuon-tai-ninh-binh') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Dự án lắp đặt âm thanh sân vườn tại Ninh Bình" class="attachment-large size-large" decoding="async" height="432" sizes="(max-width: 768px) 100vw, 768px" src="{{ asset('wp-content/uploads/san-vuon-ninh-binh-.jpg') }}"  title="Dự án 7" width="768"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án lắp đặt âm thanh sân vườn tại Ninh
                                      Bình
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Sân vườn
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'he-thong-am-thanh-phong-hop-toa-an-nhan-dan-tinh-ninh-binh') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Hệ Thống Âm Thanh Phòng Họp Tòa Án Nhân Dân Tỉnh Ninh Bình" class="attachment-large size-large" decoding="async" height="574" sizes="(max-width: 1020px) 100vw, 1020px" src="{{ asset('wp-content/uploads/Du-an-phong-hop-tai-toa-an-nhan-dan-tinh-ninh-binh-2-1024x576.png') }}"  title="Dự án 8" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Hệ Thống Âm Thanh Phòng Họp Tòa Án Nhân
                                      Dân Tỉnh Ninh Bình
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-phong-hop-tai-toa-an-nhan-dan-tinh-ninh-binh') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Dự án phòng họp tại toà án nhân dân tỉnh Ninh Bình" class="attachment-large size-large" decoding="async" height="574" sizes="(max-width: 1020px) 100vw, 1020px" src="{{ asset('wp-content/uploads/Du-an-phong-hop-tai-toa-an-nhan-dan-tinh-ninh-binh-1-1024x576.png') }}"  title="Dự án 9" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án phòng họp tại toà án nhân dân tỉnh
                                      Ninh Bình
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-am-thanh-phong-hop-cong-ty-co-phan-moi-truong-cnc-hoa-binh') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="công ty cổ phần môi trường CNC Hòa Bình" class="attachment-large size-large" decoding="async" height="574" sizes="(max-width: 1020px) 100vw, 1020px" src="{{ asset('wp-content/uploads/cong-ty-co-phan-moi-truong-CNC-Hoa-Binh-1024x576.jpg') }}"  title="Dự án 10" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án âm thanh phòng họp công ty cổ phần
                                      môi trường CNC Hòa Bình
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop","Quán cafe"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-am-thanh-cafe-tai-xuan-hoa-vinh-phuc') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Dự án Cafe tại Xuân Hòa, Vĩnh Phúc" class="attachment-large size-large" decoding="async" height="574" sizes="(max-width: 1020px) 100vw, 1020px" src="{{ asset('wp-content/uploads/Du-an-1024x576.jpg') }}"  title="Dự án 11" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án lắp đặt hệ thống âm thanh Cafe tại
                                      Xuân Hòa, Vĩnh Phúc
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop, Quán
                                        cafe
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop","Sân vườn","Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-lap-dat-he-thong-am-thanh-thong-bao-tai-khu-vui-choi-giai-tri-bach-thao-ngan-tai-tuyen-quang') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="khu vui chơi giải trí Bách Thảo Ngân" class="attachment-large size-large" decoding="async" height="574" sizes="(max-width: 1020px) 100vw, 1020px" src="{{ asset('wp-content/uploads/khu-vui-choi-giai-tri-Bach-Thao-Ngan-1024x576.jpg') }}"  title="Dự án 12" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án hệ thống âm thanh khu vui chơi giải
                                      trí Bách Thảo Ngân Tuyên Quang
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop, Sân
                                        vườn, Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-lap-dat-he-thong-am-thanh-phong-hop-khong-day-tai-ban-quan-ly-khu-cong-nghe-cao-hoa-lac') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="khu Công nghệ cao Hoà Lạc" class="attachment-large size-large" decoding="async" height="574" sizes="(max-width: 1020px) 100vw, 1020px" src="{{ asset('wp-content/uploads/khu-Cong-nghe-cao-Hoa-Lac-1024x576.jpg') }}"  title="Dự án 13" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án lắp đặt hệ thống âm thanh phòng họp
                                      không dây tại BQL khu CNC Hoà Lạc
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Quán cafe"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-am-thanh-cafe-duong-noi') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Âm thanh Cafe Dương nội" class="attachment-large size-large" decoding="async" height="574" sizes="(max-width: 1020px) 100vw, 1020px" src="{{ asset('wp-content/uploads/Am-thanh-Cafe-Duong-noi-1024x576.jpg') }}"  title="Dự án 14" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án lắp đặt hệ thống âm thanh Cafe tại
                                      Dương nội
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Quán cafe
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-am-thanh-phong-hop-im-vina-kcn-ba-thien-2-vinh-phuc') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Dự án âm thanh phòng họp IM VINA KCN Bá Thiện 2, Vĩnh Phúc" class="attachment-large size-large" src="{{ asset('wp-content/uploads/IM-VINA-KCN-Ba-Thien-2-Vinh-Phuc-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 15" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án âm thanh phòng họp IM VINA KCN Bá
                                      Thiện 2, Vĩnh Phúc
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-am-thanh-hoi-truong-trung-tam-chinh-tri-son-la') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="trung tâm chính trị Sơn La" class="attachment-large size-large" src="{{ asset('wp-content/uploads/trung-tam-chinh-tri-Son-La-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 16" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án âm thanh hội trường trung tâm chính
                                      trị Sơn La
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
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-am-thanh-phong-hop-huyen-uy-ha-giang') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Huyện ủy Hà Giang" class="attachment-large size-large" src="{{ asset('wp-content/uploads/Huyen-uy-Ha-Giang-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 17" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án lắp đặt hệ thống âm thanh phòng họp
                                      Huyện uỷ Hà Giang
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-am-thanh-anh-sang-cho-tt-van-hoa-huyen-ba-che-quang-ninh') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="TT Văn hoá huyện Ba Chẽ, Quảng Ninh" class="attachment-large size-large" src="{{ asset('wp-content/uploads/TT-Van-hoa-huyen-Ba-Che-Quang-Ninh-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 18" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án âm thanh ánh sáng cho TT Văn hoá
                                      huyện Ba Chẽ – Quảng Ninh
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
<div class="col" data-terms='["Cơ quan - Doanh nghiệp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-am-thanh-thong-bao-cho-toa-nha-ct2a-van-khe-ha-dong') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Toà nhà CT2A Văn Khê- Hà Đông" class="attachment-large size-large" src="{{ asset('wp-content/uploads/Toa-nha-CT2A-Van-Khe-Ha-Dong-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 19" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án âm thanh thông báo cho toà nhà CT2A
                                      Văn Khê- Hà Đông
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-loa-am-tran-blutooth-tai-aeon') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Loa âm trần Blutooth tại AEON" class="attachment-large size-large" src="{{ asset('wp-content/uploads/Loa-am-tran-Blutooth-tai-AEON-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 20" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án lắp đặt hệ thống Loa âm trần
                                      Bluetooth tại AEON
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Nhà hàng"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-am-thanh-nha-hang-zo-zo-beer-garden') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Zô Zô Beer Garden" class="attachment-large size-large" src="{{ asset('wp-content/uploads/Zo-Zo-Beer-Garden-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 21" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án Âm thanh nhà hàng Zô Zô Beer Garden
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Nhà hàng
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-lap-dat-am-thanh-anh-sang-nha-van-hoa-trung-tam-huyen-yen-dung-bac-giang') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="nhà văn hoá trung tâm huyện Yên Dũng Bắc Giang" class="attachment-large size-large" src="{{ asset('wp-content/uploads/nha-van-hoa-trung-tam-huyen-Yen-Dung-Bac-Giang-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 22" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án lắp đặt âm thanh ánh sáng nhà văn
                                      hoá trung tâm huyện Yên Dũng Bắc Giang
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
<div class="col" data-terms='["Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-am-thanh-hoi-truong-cao-dang-fpt-nhon') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Cao Đẳng FPT Nhổn" class="attachment-large size-large" src="{{ asset('wp-content/uploads/Cao-Dang-FPT-Nhon-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 23" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự án Âm thanh Hội Trường Cao Đẳng FPT
                                      Nhổn
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
<div class="col" data-terms='["Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'du-an-lap-dat-am-thanh-hoi-truong-cho-nha-van-hoa-hong-ky-soc-son') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Nhà Văn Hóa Hồng Kỳ – Sóc Sơn" class="attachment-large size-large" src="{{ asset('wp-content/uploads/Nha-Van-Hoa-Hong-Ky-–-Soc-Son.jpg') }}"  decoding="async" height="432" title="Dự án 24" width="768"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Dự Án Lắp Đặt Âm Thanh Hội Trường Cho Nhà
                                      Văn Hóa Hồng Kỳ – Sóc Sơn
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
<div class="col" data-terms='["Nhà xưởng","Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-nha-xuong-yamco-hung-yen') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh nhà xưởng Yamco Hưng Yên" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-nha-xuong-yamco-hung-yen-9-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 25" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh nhà xưởng Yamco
                                      Hưng Yên
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Nhà xưởng, Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Nhà xưởng","Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-nha-xuong-cong-ty-jochu-viet-nam') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh nhà xưởng Công ty Jochu Việt Nam" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-nha-xuong-cong-ty-jochu-viet-nam-8-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 26" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh nhà xưởng Công
                                      ty Jochu Việt Nam
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Nhà xưởng, Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-showroom-o-to-mg-long-bien') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho showroom ô tô MG Long Biên" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-showroom-o-to-mg-long-bien-4-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 27" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho showroom ô
                                      tô MG Long Biên
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Ngân hàng"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-ngan-hang-bidv-quy-nhon') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho ngân hàng BIDV Quy Nhơn" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-ngan-hang-bidv-quy-nhon-9-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 28" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho ngân hàng
                                      BIDV Quy Nhơn
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Ngân hàng
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-quan-billiards-dope') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho quán BILLIARDS DOPE" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-quan-billiards-dope-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 29" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho quán
                                      BILLIARDS DOPE
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop","Quán cafe"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-hung-coffee-nam-dinh') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho Hưng Coffee - Nam Định" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-huong-coffe-nam-dinh-9-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 30" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho Hưng Coffee
                                      – Nam Định
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop, Quán
                                        cafe
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop","Nhà hàng"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-nha-hang-tiec-cuoi-tan-truong-xanh') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho Nhà Hàng Tiệc Cưới Tân Trường Xanh" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-nha-hang-tiec-cuoi-tan-truong-xanh-16-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 31" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho Nhà Hàng
                                      Tiệc Cưới Tân Trường Xanh
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop, Nhà
                                        hàng
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Ngân hàng","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-phong-hop-cho-ngan-hang-viettinbank-chi-nhanh-hung-vuong-viet-tri') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh phòng họp cho Ngân hàng Viettinbank chi nhánh Hùng Vương - Việt Trì" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-phong-hop-cho-ngan-hang-viettinbank-chi-nhanh-hung-vuong-viet-tri-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 32" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh phòng họp cho
                                      Ngân hàng Viettinbank chi nhánh Hùng Vương
                                      – Việt Trì
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Ngân hàng, Phòng
                                        họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-phong-hop-cho-mobifone-tinh-vinh-phuc') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh phòng họp cho Mobifone Tỉnh Vĩnh Phúc" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-phong-hop-cho-mobiefone-tinh-vinh-phuc-21-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 33" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh phòng họp cho
                                      Mobifone Tỉnh Vĩnh Phúc
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-phong-hop-cho-bo-tai-nguyen-va-moi-truong') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh phòng họp cho Bộ Tài nguyên và Môi trường" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-phong-hop-cho-bo-tai-nguyen-va-moi-truong-11-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 34" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh phòng họp cho Bộ
                                      Tài nguyên và Môi trường
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-phong-hop-cong-ty-binh-hoa-thanh-hoa') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh phòng họp Công ty Bình Hòa - Thanh Hóa" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-phong-hop-cong-ty-binh-hoa-thanh-hoa-4-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 35" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh phòng họp Công
                                      ty Bình Hòa – Thanh Hóa
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-phong-hop-tai-thai-nguyen') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh phòng họp tại Thái Nguyên" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-phong-hop-tai-thai-nguyen-7-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 36" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh phòng họp tại
                                      Thái Nguyên
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-phong-hop-cho-tong-cuc-moi-truong') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh phòng họp cho Tổng cục Môi trường" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-phong-hop-cho-tong-cuc-moi-truong-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 37" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh phòng họp cho
                                      Tổng cục Môi trường
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Bệnh viện - Phòng khám","Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-phong-hop-cho-trung-tam-y-te-thanh-pho-phuc-yen-vinh-phuc') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh phòng họp cho Trung tâm Y tế Thành phố Phúc Yên, Vĩnh Phúc" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-phong-hop-cho-trung-tam-y-te-thanh-pho-phuc-yen-vinh-phuc-8-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 38" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh phòng họp cho
                                      Trung tâm Y tế Thành phố Phúc Yên, Vĩnh
                                      Phúc
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Bệnh viện - Phòng khám, Cơ quan - Doanh
                                        nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-phong-hop-tai-chung-cu-hud-giai-phong') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh phòng họp tại Chung cư HUD - Giải Phóng" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-phong-hop-tai-chung-cu-hud-giai-phong-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 39" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh phòng họp tại
                                      Chung cư HUD – Giải Phóng
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-phong-hop-tai-hai-duong') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh phòng họp tại Hải Dương" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-phong-hop-tai-hai-duong-7-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 40" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh phòng họp tại
                                      Hải Dương
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-phong-hop-cho-trung-tam-giam-sat-dieu-hanh-thong-minh-tinh-thanh-hoa') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh phòng họp cho Trung tâm giám sát, Điều hành thông minh tỉnh Thanh Hoá" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-phong-hop-cho-trung-tam-giam-sat-dieu-hanh-thong-minh-tinh-thanh-hoa-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 41" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh phòng họp cho
                                      Trung tâm giám sát, Điều hành thông minh
                                      tỉnh Thanh Hoá
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-phong-hop-tai-quan-tu-liem-ha-noi') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt thi công hệ thống âm thanh cho hội nghị tại Quận Từ Liêm, Hà Nội" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-thi-cong-he-thong-am-thanh-cho-hoi-nghi-tai-quan-tu-liem-ha-noi-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 42" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt thi công hệ thống âm thanh cho hội
                                      nghị tại Quận Từ Liêm, Hà Nội
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-phong-hop-cho-nha-may-nhiet-dien-thai-binh') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh phòng họp cho nhà máy nhiệt điện Thái Bình" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-phong-hop-cho-nha-may-nhiet-dien-thai-binh-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 43" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh phòng họp cho
                                      nhà máy nhiệt điện Thái Bình
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-phong-hop-tai-co-nhue') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh phòng họp tại Cổ Nhuế" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-phong-hop-tai-co-nhue-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 44" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh phòng họp tại Cổ
                                      Nhuế
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-phong-hop-tai-gia-lam') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh phòng họp tại Gia Lâm" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-phong-hop-tai-gia-lam-20-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 45" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh phòng họp tại
                                      Gia Lâm
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-phong-hop-cho-bo-tu-lenh-hai-quan') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh phòng họp cho Bộ tư lệnh Hải Quân" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-phong-hop-cho-bo-tu-lenh-hai-quan-8-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 46" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh phòng họp cho Bộ
                                      tư lệnh Hải Quân
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-phong-hop-cho-van-phong-bat-dong-san-cland') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh phòng họp cho văn phòng Bất động sản Cland" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-phong-hop-cho-van-phong-bat-dong-san-cland-9-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 47" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh phòng họp cho
                                      văn phòng Bất động sản Cland
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-cong-ty-duoc-pham-dong-tay') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho Công ty Dược phẩm Đông Tây" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-cong-ty-duoc-pham-dong-tay-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 48" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho Công ty Dược
                                      phẩm Đông Tây
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Sân khấu - Hội
                                        trường
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-cong-ty-honda-viet-nam') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho Công ty Honda Việt Nam" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-cong-ty-honda-viet-nam-8-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 49" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho Công ty
                                      Honda Việt Nam
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-van-phong-vietstarland-ocean-park') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho Văn phòng VietstarLand - Ocean Park" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-van-phong-vietstarland-ocean-park-5-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 50" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho Văn phòng
                                      VietstarLand – Ocean Park
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Sân khấu - Hội
                                        trường
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-tram-y-te-dong-quang') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho Trạm y tế Đông Quang" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-tram-y-te-dong-quang-3-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 51" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho Trạm y tế
                                      Đông Quang
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Sân khấu - Hội
                                        trường
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-thong-bao-cho-toa-nha-giao-hang-tiet-kiem') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh thông báo cho toà nhà Giao Hàng Tiết Kiệm" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-thong-bao-cho-toa-nha-giao-hang-tiet-kiem-38-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 52" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh thông báo cho
                                      toà nhà Giao Hàng Tiết Kiệm
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-van-phong-vhaland-chi-nhanh-ha-noi') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho Văn phòng VHALAND chi nhánh Hà Nội" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-van-phong-vhaland-chi-nhanh-ha-noi-10-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 53" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho Văn phòng
                                      VHALAND chi nhánh Hà Nội
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Sân khấu - Hội
                                        trường
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Sân khấu - Hội trường","Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-toa-nha-tungshing-square-so-2-ngo-quyen-quan-hoan-kiem-ha-noi') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho toà nhà TungShing Square số 2 Ngô Quyền - Hà Nội" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-toa-nha-tungshing-square-so-2-ngo-quyen-quan-hoan-kiem-ha-noi-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 54" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho toà nhà
                                      TungShing Square số 2 Ngô Quyền – Hà
                                      Nội
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Sân khấu - Hội
                                        trường, Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-hoi-thao-tai-so-58-to-huu-ha-noi') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh hội thảo tại số 58 Tố Hữu, Hà Nội" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-hoi-thao-tai-so-58-to-huu-ha-noi-13-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 55" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh hội thảo tại số
                                      58 Tố Hữu, Hà Nội
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Sân khấu - Hội
                                        trường
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-truong-mam-non-quoc-te-tai-thanh-tri') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho Trường Mầm non Quốc tế tại Thanh Trì" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-truong-mam-non-quoc-te-tai-thanh-tri-8-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 56" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho Trường Mầm
                                      non Quốc tế tại Thanh Trì
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-truong-dai-hoc-fpt') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho Trường Đại Học FPT" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-truong-dai-hoc-fpt-8-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 57" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho Trường Đại
                                      Học FPT
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Sân khấu - Hội
                                        trường
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-vien-nghien-cuu-de-va-tho-son-tay') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho Viện nghiên cứu dê và thỏ Sơn Tây" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-vien-nghien-cuu-de-va-tho-son-tay-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 58" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho Viện nghiên
                                      cứu dê và thỏ Sơn Tây
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Phòng họp","Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-thong-bao-cho-truong-thcs-quynh-mai') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh thông báo cho Trường THCS Quỳnh Mai" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-thong-bao-cho-truong-thcs-quynh-mai-8-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 59" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh thông báo cho
                                      Trường THCS Quỳnh Mai
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Phòng họp, Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Phòng họp","Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-phong-hop-cho-truong-thpt-phan-dinh-phung') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh phòng họp cho Trường THPT Phan Đình Phùng" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-phong-hop-cho-truong-thpt-phan-dinh-phung-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 60" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh phòng họp cho
                                      Trường THPT Phan Đình Phùng
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Phòng họp, Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-truong-cao-dang-y-te-ha-nam') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho trường Cao đẳng Y tế Hà Nam" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-truong-cao-dang-y-te-ha-nam-17-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 61" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho trường Cao
                                      đẳng Y tế Hà Nam
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-thcs-nguyen-tat-thanh-hung-yen') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho THCS Nguyễn Tất Thành, Hưng Yên" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-thcs-nguyen-tat-thanh-hung-yen-7-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 62" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho THCS Nguyễn
                                      Tất Thành, Hưng Yên
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
<div class="col" data-terms='["Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-hoi-truong-cho-truong-cao-dang-van-hoa-nghe-thuat-thai-binh') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh hội trường cho trường Cao Đẳng Văn hoá - Nghệ thuật Thái Bình" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-hoi-truong-cho-truong-cao-dang-van-hoa-nghe-thuat-thai-binh-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 63" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh hội trường cho
                                      trường Cao Đẳng Văn hoá – Nghệ thuật
                                      Thái Bình
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
<div class="col" data-terms='["Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-truong-mam-non-thanh-dong') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho trường mầm non Thành Đông" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-truong-mam-non-thanh-dong-8-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 64" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho trường mầm
                                      non Thành Đông
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Bệnh viện - Phòng khám","Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-thong-bao-cho-khu-dieu-tri-covid-benh-vien-tim') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh thông báo cho khu điều trị covid bệnh viện Tim" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-thong-bao-cho-khu-dieu-tri-covid-benh-vien-tim-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 65" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh thông báo cho
                                      khu điều trị covid bệnh viện Tim
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Bệnh viện - Phòng khám, Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Nhà chùa - nhà thờ","Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-chua-phuc-my-do-luong') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho Chùa Phúc Mỹ, Đô Lương" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-chua-phuc-my-do-luong-15-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 66" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho Chùa Phúc
                                      Mỹ, Đô Lương
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Nhà chùa - nhà thờ, Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Sân vườn","Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-san-vuon-cho-vinhomes-riverside') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Hệ thống âm thanh sân vườn" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-san-vuon-cho-vinhomes-riverside-11-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 67" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh sân vườn cho
                                      Vinhomes RiverSide
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Sân vườn, Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Khách sạn - Resort"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-villa-flc-sam-son-thanh-hoa') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho Villa FLC Sầm Sơn, Thanh Hoá" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-villa-flc-sam-son-thanh-hoa-17-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 68" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho Villa FLC
                                      Sầm Sơn, Thanh Hoá
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Khách sạn - Resort
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Nhà xưởng","Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-thong-bao-cho-xuong-thoi-trang-the-thao-giao-thuy') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh thông báo cho xưởng thời trang thể thao Giao Thủy" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-thong-bao-cho-xuong-thoi-trang-the-thao-giao-thuy-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 69" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh thông báo cho
                                      xưởng thời trang thể thao Giao Thủy
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Nhà xưởng, Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Nhà xưởng","Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-nha-xuong-thong-bao-cho-xuong-det-may-vinh-bao-hai-phong') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh nhà xưởng thông báo cho Xưởng Dệt may Vĩnh Bảo Hải Phòng" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-nha-xuong-thong-bao-cho-xuong-det-may-vinh-bao-hai-phong-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 70" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh nhà xưởng thông
                                      báo cho Xưởng Dệt may Vĩnh Bảo Hải Phòng
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Nhà xưởng, Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Sân khấu - Hội trường","Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-hoi-truong-cho-cong-ty-tnhh-sung-woo-tinh-bac-ninh') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh hội trường cho Công ty TNHH Sung Woo, tỉnh Bắc Ninh" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-hoi-truong-cho-cong-ty-tnhh-sung-woo-tinh-bac-ninh-10-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 71" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh hội trường cho
                                      Công ty TNHH Sung Woo, tỉnh Bắc Ninh
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Sân khấu - Hội trường, Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-loa-am-tran-cho-can-ho-huyndai-hillstate-ha-dong') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống loa âm trần cho căn hộ Huyndai Hillstate, Hà Đông" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-loa-am-tran-cho-can-ho-huyndai-hillstate-ha-dong-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 72" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống loa âm trần cho căn hộ
                                      Huyndai Hillstate, Hà Đông
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Thông báo
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-loa-am-tran-tai-ocean-park-sao-bien') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống loa âm trần tại Ocean Park Sao Biển" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-loa-am-tran-tai-ocean-park-sao-bien-5-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 73" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống loa âm trần tại Ocean
                                      Park Sao Biển
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-loa-am-tran-cho-biet-thu-tai-pho-ham-nghi-ha-noi') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống loa âm trần cho biệt thự tại phố Hàm Nghi, Hà Nội" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-loa-am-tran-cho-biet-thu-tai-pho-ham-nghi-ha-noi-7-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 74" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống loa âm trần cho biệt thự
                                      tại phố Hàm Nghi, Hà Nội
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-spa-shinhan-international-clinic') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho Spa Shinhan International Clinic" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-spa-shinhan-international-clinic-7-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 75" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho Spa Shinhan
                                      International Clinic
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Quán cafe"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-moc-cafe-thanh-hoa') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho Mốc Cafe, Thanh Hoá" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-moc-cafe-thanh-hoa-26-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 76" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho Mốc Cafe,
                                      Thanh Hoá
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Quán cafe
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop","Nhà hàng"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-he-thong-am-thanh-cho-nha-hang-bazanbia') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt hệ thống âm thanh cho Nhà hàng Bazanbia" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-he-thong-am-thanh-cho-nha-hang-bazanbia-2-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 77" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt hệ thống âm thanh cho Nhà hàng
                                      Bazanbia
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop, Nhà
                                        hàng
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-phat-nhac-nen-cho-hiu-fashion') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh phát nhạc nền cho Hiu Fashion" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-am-thanh-phat-nhac-nen-cho-hiu-fashion-18-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 78" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh phát nhạc nền cho Hiu
                                      Fashion
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Sân vườn"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-san-vuon-cho-biet-thu-vinhomes-oceanpark') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh sân vườn cho Biệt thự Vinhomes OceanPark" class="attachment-large size-large" src="{{ asset('wp-content/uploads/lap-dat-am-thanh-san-vuon-cho-biet-thu-vinhomes-oceanpark-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 79" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh sân vườn cho Biệt thự
                                      Vinhomes OceanPark
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Sân vườn
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop","Quán cafe"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-huong-cafe-nguyen-khanh-toan') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh Hương Cafe Nguyễn Khánh Toàn" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-huong-cafe-nguyen-khanh-toan-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 80" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh Hương Cafe Nguyễn Khánh
                                      Toàn
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop, Quán
                                        cafe
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-hoi-truong-tai-thanh-hoa') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh hội trường tại Thanh Hóa" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-hoi-truong-tai-thanh-hoa-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 81" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh hội trường tại Thanh Hóa
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
<div class="col" data-terms='["Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-hoi-truong-hoc-vien-ngan-hang') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh hội trường Học viện Ngân hàng" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-hoi-truong-hoc-vien-ngan-hang-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 82" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh hội trường Học viện Ngân
                                      hàng
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
<div class="col" data-terms='["Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-hoi-truong-nha-van-hoa-hoang-mai-ha-noi') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh hội trường Nhà văn hóa Hoàng Mai Hà Nội" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-hoi-truong-nha-van-hoa-hoang-mai-ha-noi-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 83" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh hội trường Nhà văn hóa
                                      Hoàng Mai Hà Nội
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
<div class="col" data-terms='["Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-anh-sang-hoi-truong-tai-cau-giay') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh ánh sáng hội trường tại Cầu Giấy" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-hoi-truong-tai-cau-giay-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 84" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh ánh sáng hội trường tại
                                      Cầu Giấy
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
<div class="col" data-terms='["Sân khấu - Hội trường"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'anh-sang-hoi-truong-tai-tu-liem') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh ánh sáng hội trường tại Từ Liêm" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-hoi-truong-tai-tu-liem-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 85" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh ánh sáng hội trường tại
                                      Từ Liêm
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
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop","Quán cafe"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-celine-bistro-ho-tay') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh Celine Bistro Hồ tây" class="attachment-large size-large" src="{{ asset('wp-content/uploads/LAP-DAT-AM-THANH-CELINE-BISTRO-HO-TAY-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 86" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh Celine Bistro Hồ tây
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop, Quán
                                        cafe
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop","Quán cafe"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-ocean-cafe-ocean-park') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh Ocean Cafe - Ocean Park" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-ocean-cafe-ocean-park-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 87" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh Ocean Cafe – Ocean
                                      Park
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop, Quán
                                        cafe
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop","Quán cafe"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-xuong-cafe-dieu-cay') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh Xưởng cafe Điếu Cày" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-xuong-cafe-dieu-cay-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 88" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh Xưởng cafe Điếu Cày
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop, Quán
                                        cafe
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ sở kinh doanh - cửa hàng - shop"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-mobius-game-zone-nguyen-chi-thanh') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh Mobius Game Zone Nguyễn Chí Thanh" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-mobius-game-nguyen-chi-thanh-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 89" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh Mobius Game Zone Nguyễn
                                      Chí Thanh
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ sở kinh doanh - cửa hàng - shop
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Nhà hàng"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-nha-hang-paos-sapa') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh nhà hàng Paos Sapa" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-paos-sapa-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 90" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh nhà hàng Paos Sapa
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Nhà hàng
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-phong-hop-tai-tinh-hai-duong') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh phòng họp tại tỉnh Hải Dương" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-phong-hop-tinh-hai-duong-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 91" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh phòng họp tại tỉnh Hải
                                      Dương
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-phong-hop-so-van-hoa-the-thao-va-du-lich-hai-duong') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh phòng họp Sở văn hóa thể thao và du lịch Hải Dương" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-phong-hop-so-vhtt-dl-hai-duong-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 92" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh phòng họp Sở văn hóa thể
                                      thao và du lịch Hải Dương
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-phong-hop-ubnd-huyen-phu-ninh-phu-tho') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh phòng họp UBND huyện Phù Ninh Phú Thọ" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-phong-hop-ubnd-phu-ninh-phu-tho-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 93" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh phòng họp UBND huyện Phù
                                      Ninh Phú Thọ
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-phong-hop-ubnd-huyen-luong-tai-bac-ninh') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh phòng họp UBND huyện Lương Tài Bắc Ninh" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-phong-hop-ubnd-huyen-luong-tai-bac-ninh-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 94" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh phòng họp UBND huyện
                                      Lương Tài Bắc Ninh
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-phong-hop-cong-an-tinh-lang-son') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh phòng họp Công an tỉnh Lạng Sơn" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-phong-hop-cong-an-tinh-lang-son-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 95" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh phòng họp Công an tỉnh
                                      Lạng Sơn
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Nhà chùa - nhà thờ","Sân vườn"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-san-vuon-nha-tho-ho-tai-ha-nam') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh sân vườn nhà thờ họ tại Hà Nam" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-san-vuong-nha-tho-ho-ha-nam-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 96" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh sân vườn nhà thờ họ tại
                                      Hà Nam
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Nhà chùa - nhà thờ, Sân vườn
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Bệnh viện - Phòng khám","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-phong-hop-vien-san-nhi-tp-ninh-binh') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh phòng họp Viện Sản Nhi TP. Ninh Bình" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-phong-hop-vien-san-nhi-ninh-binh-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 97" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh phòng họp Viện Sản Nhi
                                      TP. Ninh Bình
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Bệnh viện - Phòng khám, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-phong-hop-so-tai-nguyen-moi-truong-thanh-hoa') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh phòng họp Sở tài nguyên môi trường Thanh Hóa" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-phong-hop-so-tai-nguyen-moi-truong-thanh-hoa-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 98" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh phòng họp Sở tài nguyên
                                      môi trường Thanh Hóa
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Bệnh viện - Phòng khám","Cơ sở kinh doanh - cửa hàng - shop"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-phong-kham-nha-khoa-green') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh phòng khám nha khoa Green" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-nha-khoa-green-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 99" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh phòng khám nha khoa Green
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Bệnh viện - Phòng khám, Cơ sở kinh doanh
                                        - cửa hàng - shop
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Phòng họp"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-phong-hop-ubnd-huyen-tam-dao') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh phòng họp UBND huyện Tam Đảo" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-phong-hop-ubnd-huyen-tam-dao-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 100" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh phòng họp UBND huyện Tam
                                      Đảo
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Phòng họp
                                      </span>
</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="col" data-terms='["Cơ quan - Doanh nghiệp","Thông báo"]'>
<div class="col-inner">
<a class="plain" href="{{ route('projects.show', 'lap-dat-am-thanh-cho-lien-doan-bong-da-vff') }}">
<div class="portfolio-box box has-hover box-default">
<div class="box-image">
<div class="image-cover" style="padding-top: 50%">
<img alt="Lắp đặt âm thanh thông báo cho Liên Đoàn bóng đá VFF" class="attachment-large size-large" src="{{ asset('wp-content/uploads/du-an-am-thanh-thong-bao-lien-doan-bong-da-vff-01-1024x576.jpg') }}"  decoding="async" height="574" title="Dự án 101" width="1020"/>
</div>
</div>
<div class="box-text text-center">
<div class="box-text-inner">
<h6 class="uppercase portfolio-box-title">
                                      Lắp đặt âm thanh thông báo cho Liên Đoàn
                                      bóng đá VFF
                                    </h6>
<p class="uppercase portfolio-box-category is-xsmall op-6">
<span class="show-on-hover">
                                        Cơ quan - Doanh nghiệp, Thông báo
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
