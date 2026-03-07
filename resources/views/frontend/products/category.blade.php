@extends('frontend.layouts.app')

@section('title', 'Loa Array – VD GROUP')
@section('body_class', 'page-template-page-blank-php')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/extracted-products-category.css') }}">
@endpush
@push('scripts')
    <script defer src="{{ asset('assets/extracted-products-category.js') }}"></script>
@endpush

@section('content')

    <div class="row category-page-row">
        <div class="col large-12">
            <div class="content-area" id="primary">
                <main class="site-main shop-container" id="main" role="main">
                    <button class="btn btn-primary yith-wcan-filters-opener" data-target="" type="button">
                        <i class="filter-icon"></i>
                        Filters
                    </button>
                    <div class="woocommerce-notices-wrapper"></div>
                    <div class="flex-row medium-flex-wrap medium-text-center items-start">
                        <div class="yith-wcan-filters horizontal no-title" data-preset-id="12809" data-target=""
                            id="preset_12809">
                            <div class="filters-container">
                                <form method="POST">
                                    <h3 class="mobile-only">Filter products</h3>
                                    <div class="yith-wcan-filter filter-tax label-design" data-filter-id="0"
                                        data-filter-type="tax" data-multiple="no" data-relation="and"
                                        data-taxonomy="filter_brand" id="filter_12809_0">
                                        <h4 class="filter-title collapsable closed">
                                            Thương hiệu
                                        </h4>
                                        <div class="filter-content">
                                            <ul class="filter-items filter-label with-images level-0">
                                                <li
                                                    class="filter-item label level-0 with-image filter-has-8-column label-hide">
                                                    <a data-term-id="254" data-term-slug="itc" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        <span class="term-image">
                                                            <img alt="logo-ITC" class="attachment-thumbnail size-thumbnail"
                                                                src="{{ asset('wp-content/uploads/logo-ITC-e1691053418536-150x94.png') }}"
                                                                decoding="async" height="94" width="150" />
                                                        </span>
                                                        <span class="term-label"> ITC </span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="filter-item label level-0 with-image filter-has-8-column label-hide">
                                                    <a data-term-id="255" data-term-slug="fony" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        <span class="term-image">
                                                            <img alt="logo-fony-audio-B"
                                                                class="attachment-thumbnail size-thumbnail"
                                                                src="{{ asset('wp-content/uploads/logo-fony-audio-B-150x65.png') }}"
                                                                decoding="async" height="65" width="150" />
                                                        </span>
                                                        <span class="term-label"> FONY </span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="filter-item label level-0 with-image filter-has-8-column label-hide">
                                                    <a data-term-id="257" data-term-slug="bosch" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        <span class="term-image">
                                                            <img alt="Bosch-logo"
                                                                class="attachment-thumbnail size-thumbnail"
                                                                src="{{ asset('wp-content/uploads/bosch-logo-150x38.png') }}"
                                                                decoding="async" height="38" width="150" />
                                                        </span>
                                                        <span class="term-label"> BOSCH </span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="filter-item label level-0 with-image filter-has-8-column label-hide">
                                                    <a data-term-id="261" data-term-slug="eudac" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        <span class="term-image">
                                                            <img alt="eudac-logo"
                                                                class="attachment-thumbnail size-thumbnail"
                                                                src="{{ asset('wp-content/uploads/eudac-logo-e1691998851954-150x49.png') }}"
                                                                decoding="async" height="49" width="150" />
                                                        </span>
                                                        <span class="term-label"> EUDAC </span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="filter-item label level-0 with-image filter-has-8-column label-hide">
                                                    <a data-term-id="262" data-term-slug="pedro" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        <span class="term-image">
                                                            <img alt="logo-pedro-sm"
                                                                class="attachment-thumbnail size-thumbnail"
                                                                src="{{ asset('wp-content/uploads/logo-pedro-sm-150x58.png') }}"
                                                                decoding="async" height="58" width="150" />
                                                        </span>
                                                        <span class="term-label"> PEDRO </span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="filter-item label level-0 with-image filter-has-8-column label-hide">
                                                    <a data-term-id="264" data-term-slug="king-pro" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        <span class="term-image">
                                                            <img alt="king-audio-logo"
                                                                class="attachment-thumbnail size-thumbnail"
                                                                src="{{ asset('wp-content/uploads/king-audio-logo-150x150.png') }}"
                                                                decoding="async" height="150" width="150" />
                                                        </span>
                                                        <span class="term-label"> KING PRO </span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="filter-item label level-0 with-image filter-has-8-column label-hide">
                                                    <a data-term-id="296" data-term-slug="jbl" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        <span class="term-image">
                                                            <img alt="jbl-logo-air"
                                                                class="attachment-thumbnail size-thumbnail"
                                                                src="{{ asset('wp-content/uploads/jbl-logo-air-150x84.png') }}"
                                                                decoding="async" height="84" width="150" />
                                                        </span>
                                                        <span class="term-label"> JBL </span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="filter-item label level-0 with-image filter-has-8-column label-hide">
                                                    <a data-term-id="306" data-term-slug="caf" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        <span class="term-image">
                                                            <img alt="CAF-500"
                                                                class="attachment-thumbnail size-thumbnail"
                                                                src="{{ asset('wp-content/uploads/CAF-500-150x150.png') }}"
                                                                decoding="async" height="150" width="150" />
                                                        </span>
                                                        <span class="term-label"> CAF </span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="filter-item label level-0 with-image filter-has-8-column label-hide">
                                                    <a data-term-id="313" data-term-slug="nexo" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        <span class="term-image">
                                                            <img alt="nexo-logo"
                                                                class="attachment-thumbnail size-thumbnail"
                                                                src="{{ asset('wp-content/uploads/nexo-logo-150x53.png') }}"
                                                                decoding="async" height="53" width="150" />
                                                        </span>
                                                        <span class="term-label"> NEXO </span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="filter-item label level-0 with-image filter-has-8-column label-hide">
                                                    <a data-term-id="319" data-term-slug="rcf" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        <span class="term-image">
                                                            <img alt="RCF_Audio_Logo_2021"
                                                                class="attachment-thumbnail size-thumbnail"
                                                                src="{{ asset('wp-content/uploads/RCF_Audio_Logo_2021-150x150.png') }}"
                                                                decoding="async" height="150" width="150" />
                                                        </span>
                                                        <span class="term-label"> RCF </span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="filter-item label level-0 with-image filter-has-8-column label-hide">
                                                    <a data-term-id="320" data-term-slug="suim" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        <span class="term-image">
                                                            <img alt="SUIM-500"
                                                                class="attachment-thumbnail size-thumbnail"
                                                                src="{{ asset('wp-content/uploads/SUIM-500-150x150.png') }}"
                                                                decoding="async" height="150" width="150" />
                                                        </span>
                                                        <span class="term-label"> SUIM </span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="filter-item label level-0 with-image filter-has-8-column label-hide">
                                                    <a data-term-id="374" data-term-slug="fill-acoustic" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        <span class="term-image">
                                                            <img alt="fill-acoustic-logo"
                                                                class="attachment-thumbnail size-thumbnail"
                                                                src="{{ asset('wp-content/uploads/fill-acoustic-logo-150x116.png') }}"
                                                                decoding="async" height="116" width="150" />
                                                        </span>
                                                        <span class="term-label">
                                                            Fill Acoustic
                                                        </span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="filter-item label level-0 with-image filter-has-8-column label-hide">
                                                    <a data-term-id="375" data-term-slug="db-acoustic" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        <span class="term-image">
                                                            <img alt="logo-dbacoustic"
                                                                class="attachment-thumbnail size-thumbnail"
                                                                src="{{ asset('wp-content/uploads/logo-dbacoustic-150x57.png') }}"
                                                                decoding="async" height="57" width="150" />
                                                        </span>
                                                        <span class="term-label"> DB Acoustic </span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="filter-item label level-0 with-image filter-has-8-column label-hide">
                                                    <a data-term-id="389" data-term-slug="hd-acoustic" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        <span class="term-image">
                                                            <img alt="hd-acoustic-logo"
                                                                class="attachment-thumbnail size-thumbnail"
                                                                src="{{ asset('wp-content/uploads/hd-acoustic-logo-150x146.png') }}"
                                                                decoding="async" height="146" width="150" />
                                                        </span>
                                                        <span class="term-label"> HD Acoustic </span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="filter-item label level-0 with-image filter-has-8-column label-hide">
                                                    <a data-term-id="395" data-term-slug="up" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        <span class="term-image">
                                                            <img alt="logo-UP"
                                                                class="attachment-thumbnail size-thumbnail"
                                                                src="{{ asset('wp-content/uploads/logo-UP-150x150.png') }}"
                                                                decoding="async" height="150" width="150" />
                                                        </span>
                                                        <span class="term-label"> UP </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- .filter-items -->
                                        </div>
                                    </div>
                                    <div class="yith-wcan-filter filter-tax text-design" data-filter-id="1"
                                        data-filter-type="tax" data-multiple="yes" data-relation="and"
                                        data-taxonomy="product_cat" id="filter_12809_1">
                                        <h4 class="filter-title collapsable closed">
                                            Danh mục
                                        </h4>
                                        <div class="filter-content">
                                            <ul class="filter-items filter-text level-0">
                                                <li class="filter-item text level-0 no-color">
                                                    <a class="term-label" data-term-id="44" data-term-slug="loa"
                                                        href="loa-array" rel="nofollow" role="button">
                                                        Loa
                                                    </a>
                                                </li>
                                                <li class="filter-item text active level-0">
                                                    <a class="term-label" data-term-id="79" data-term-slug="loa-array"
                                                        href="loa-array" rel="nofollow" role="button">
                                                        Loa Array
                                                    </a>
                                                </li>
                                                <li class="filter-item text level-0 no-color">
                                                    <a class="term-label" data-term-id="49" data-term-slug="loa-cot"
                                                        href="loa-array" rel="nofollow" role="button">
                                                        Loa Cột
                                                    </a>
                                                </li>
                                                <li class="filter-item text level-0 no-color">
                                                    <a class="term-label" data-term-id="267" data-term-slug="loa-di-dong"
                                                        href="loa-array" rel="nofollow" role="button">
                                                        Loa Di Động
                                                    </a>
                                                </li>
                                                <li class="filter-item text level-0">
                                                    <a class="term-label" data-term-id="104" data-term-slug="loa-full"
                                                        href="loa-array" rel="nofollow" role="button">
                                                        Loa Full
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- .filter-items -->
                                        </div>
                                    </div>
                                    <div class="yith-wcan-filter filter-tax text-design" data-filter-id="2"
                                        data-filter-type="tax" data-multiple="yes" data-relation="and"
                                        data-taxonomy="product_tag" id="filter_12809_2">
                                        <h4 class="filter-title collapsable closed">
                                            Phân loại
                                        </h4>
                                        <div class="filter-content">
                                            <ul class="filter-items filter-text level-0">
                                                <li class="filter-item text level-0 no-color">
                                                    <a class="term-label" data-term-id="335"
                                                        data-term-slug="loa-array-db-acoustic" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        Loa array DB Acoustic
                                                    </a>
                                                </li>
                                                <li class="filter-item text level-0 no-color">
                                                    <a class="term-label" data-term-id="334"
                                                        data-term-slug="loa-array-fill-acoustic" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        Loa array Fill Acoustic
                                                    </a>
                                                </li>
                                                <li class="filter-item text level-0 no-color">
                                                    <a class="term-label" data-term-id="333"
                                                        data-term-slug="loa-array-jbl" href="loa-array" rel="nofollow"
                                                        role="button">
                                                        Loa array JBL
                                                    </a>
                                                </li>
                                                <li class="filter-item text level-0 no-color">
                                                    <a class="term-label" data-term-id="331"
                                                        data-term-slug="loa-array-nexo" href="loa-array" rel="nofollow"
                                                        role="button">
                                                        Loa array NEXO
                                                    </a>
                                                </li>
                                                <li class="filter-item text level-0 no-color">
                                                    <a class="term-label" data-term-id="332"
                                                        data-term-slug="loa-array-rcf" href="loa-array" rel="nofollow"
                                                        role="button">
                                                        Loa array RCF
                                                    </a>
                                                </li>
                                                <li class="filter-item text level-0 no-color">
                                                    <a class="term-label" data-term-id="454" data-term-slug="loa-e3"
                                                        href="loa-array" rel="nofollow" role="button">
                                                        Loa E3
                                                    </a>
                                                </li>
                                                <li class="filter-item text level-0 no-color">
                                                    <a class="term-label" data-term-id="228"
                                                        data-term-slug="loa-sub-array" href="loa-array" rel="nofollow"
                                                        role="button">
                                                        Loa sub array
                                                    </a>
                                                </li>
                                                <li class="filter-item text level-0 no-color">
                                                    <a class="term-label" data-term-id="294"
                                                        data-term-slug="thiet-bi-hoi-truong-eudac" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        Thiết bị hội trường EUDAC
                                                    </a>
                                                </li>
                                                <li class="filter-item text level-0 no-color">
                                                    <a class="term-label" data-term-id="293"
                                                        data-term-slug="thiet-bi-hoi-truong-fony" href="loa-array"
                                                        rel="nofollow" role="button">
                                                        Thiết bị hội trường Fony
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- .filter-items -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <p class="woocommerce-result-count hidden">
                            Hiển thị 1–30 của 353 kết quả
                        </p>
                        <form class="woocommerce-ordering" method="get">
                            <select aria-label="Đơn hàng của cửa hàng" class="orderby" name="orderby">
                                <option selected="selected" value="menu_order">
                                    Sắp xếp mặc định
                                </option>
                                <option value="popularity">
                                    Sắp xếp theo mức độ phổ biến
                                </option>
                                <option value="rating">
                                    Sắp xếp theo xếp hạng trung bình
                                </option>
                                <option value="date">Sắp xếp theo mới nhất</option>
                                <option value="price">
                                    Sắp xếp theo giá: thấp đến cao
                                </option>
                                <option value="price-desc">
                                    Sắp xếp theo giá: cao đến thấp
                                </option>
                            </select>
                            <input name="paged" type="hidden" value="1" />
                        </form>
                    </div>
                    <div
                        class="products row row-small large-columns-5 medium-columns-3 small-columns-2 has-shadow row-box-shadow-1 row-box-shadow-2-hover has-equal-box-heights equalize-box">
                        <div
                            class="product-small col has-hover product type-product post-60018 status-publish first instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/martin/"><img alt="Martin" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/martin.png') }}" decoding="async"
                                        height="144" width="199" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Arary Martin MLA"
                                                href="../loa-arary-martin-mla/index.html">
                                                <img alt="Loa Arary Martin MLA" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Arary-Martin-MLA-mini-2.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Arary Martin MLA"
                                                href="../loa-arary-martin-mla/index.html">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Arary Martin MLA
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-60020 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/martin/"><img alt="Martin" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/martin.png') }}" decoding="async"
                                        height="144" width="199" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Arary Martin MLA Compact"
                                                href="loa-arary-martin-mla-compact/">
                                                <img alt="Loa Arary Martin MLA Compact" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Arary-Martin-MLA-Compact.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Arary Martin MLA Compact"
                                                href="loa-arary-martin-mla-compact/">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Arary Martin MLA Compact
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-60015 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable purchasable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/martin/"><img alt="Martin" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/martin.png') }}" decoding="async"
                                        height="144" width="199" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Arary Martin MLA mini" href="loa-arary-martin-mla-mini/">
                                                <img alt="Loa Arary Martin MLA mini" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Arary-Martin-MLA-mini.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Arary Martin MLA mini" href="loa-arary-martin-mla-mini/">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Arary Martin MLA mini
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-60022 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/martin/"><img alt="Martin" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/martin.png') }}" decoding="async"
                                        height="144" width="199" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Arary Martin MLD" href="loa-arary-martin-mld/">
                                                <img alt="Loa Arary Martin MLD" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Arary-Martin-MLD.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Arary Martin MLD" href="loa-arary-martin-mld/">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Arary Martin MLD
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-49723 status-publish last instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/eudac/"><img alt="EUDAC" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/eudac-logo-e1691998851954.png') }}"
                                        decoding="async" height="164" width="500" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array 10 inch EUDAC VX-210"
                                                href="loa-array-10-inch-eudac-vx-210/">
                                                <img alt="Loa Array 10 inch EUDAC VX-210" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-10-inch-EUDAC-VX-210.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array 10 inch EUDAC VX-210"
                                                href="loa-array-10-inch-eudac-vx-210/">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array 10 inch EUDAC VX-210
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-49715 status-publish first instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/eudac/"><img alt="EUDAC" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/eudac-logo-e1691998851954.png') }}"
                                        decoding="async" height="164" width="500" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array 12 inch EUDAC SC-112"
                                                href="loa-array-12-inch-eudac-sc-112/">
                                                <img alt="Loa Array 12 inch EUDAC SC-112" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-12-inch-EUDAC-SC-112.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array 12 inch EUDAC SC-112"
                                                href="loa-array-12-inch-eudac-sc-112/">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array 12 inch EUDAC SC-112
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-52103 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/adamson/"><img alt="ADAMSON" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/logo-adamson.jpg') }}" decoding="async"
                                        height="500" width="500" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Adamson E12" href="loa-array-adamson-e12/">
                                                <img alt="Loa Array Adamson E12" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Adamson-E12.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Adamson E12" href="loa-array-adamson-e12/">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Adamson E12
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-52109 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/adamson/"><img alt="ADAMSON" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/logo-adamson.jpg') }}" decoding="async"
                                        height="500" width="500" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Adamson E15" href="loa-array-adamson-e15/">
                                                <img alt="Loa Array Adamson E15" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Adamson-E15.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Adamson E15" href="loa-array-adamson-e15/">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Adamson E15
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-52240 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/adamson/"><img alt="ADAMSON" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/logo-adamson.jpg') }}" decoding="async"
                                        height="500" width="500" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Adamson IS10" href="loa-array-adamson-is10/">
                                                <img alt="Loa Array Adamson IS10" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Adamson-IS10.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Adamson IS10" href="loa-array-adamson-is10/">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Adamson IS10
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-52232 status-publish last instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/adamson/"><img alt="ADAMSON" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/logo-adamson.jpg') }}" decoding="async"
                                        height="500" width="500" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Adamson IS10n" href="loa-array-adamson-is10n/">
                                                <img alt="Loa Array Adamson IS10n" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Adamson-IS10n.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Adamson IS10n" href="loa-array-adamson-is10n/">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Adamson IS10n
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-52253 status-publish first instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/adamson/"><img alt="ADAMSON" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/logo-adamson.jpg') }}" decoding="async"
                                        height="500" width="500" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Adamson IS7" href="loa-array-adamson-is7/">
                                                <img alt="Loa Array Adamson IS7" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Adamson-IS7.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Adamson IS7" href="loa-array-adamson-is7/">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Adamson IS7
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-52169 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/adamson/"><img alt="ADAMSON" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/logo-adamson.jpg') }}" decoding="async"
                                        height="500" width="500" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Adamson S10" href="loa-array-adamson-s10/">
                                                <img alt="Loa Array Adamson S10" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Adamson-IS7-1.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Adamson S10" href="loa-array-adamson-s10/">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Adamson S10
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-52163 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/adamson/"><img alt="ADAMSON" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/logo-adamson.jpg') }}" decoding="async"
                                        height="500" width="500" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Adamson S10n" href="loa-array-adamson-s10n/">
                                                <img alt="Loa Array Adamson S10n" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Adamson-S10n.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Adamson S10n" href="loa-array-adamson-s10n/">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Adamson S10n
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-52180 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/adamson/"><img alt="ADAMSON" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/logo-adamson.jpg') }}" decoding="async"
                                        height="500" width="500" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Adamson S7" href="loa-array-adamson-s7/">
                                                <img alt="Loa Array Adamson S7" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Line-Array-Adamson-S7.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Adamson S7" href="loa-array-adamson-s7/">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Adamson S7
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-53166 status-publish last instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/amate/"><img alt="Amate" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/amate.jpg') }}" decoding="async"
                                        height="120" width="120" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Amate Nitid N208" href="loa-array-amate-nitid-n208/">
                                                <img alt="Loa Array Amate Nitid N208" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Amate-Nitid-N208-7.jpg') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Amate Nitid N208" href="loa-array-amate-nitid-n208/">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Amate Nitid N208
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-53178 status-publish first instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/amate/"><img alt="Amate" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/amate.jpg') }}" decoding="async"
                                        height="120" width="120" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Amate Nitid N208P"
                                                href="loa-array-amate-nitid-n208p/">
                                                <img alt="Loa Array Amate Nitid N208P" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Line-Array-Adamson-S7-2.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Amate Nitid N208P"
                                                href="loa-array-amate-nitid-n208p/">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Amate Nitid N208P
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-53125 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/amate/"><img alt="Amate" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/amate.jpg') }}" decoding="async"
                                        height="120" width="120" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Amate Xcellence X212AFD"
                                                href="loa-array-amate-xcellence-x212afd/">
                                                <img alt="Loa Array Amate Xcellence X212AFD" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Amate-Xcellence-X212AFD.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Amate Xcellence X212AFD"
                                                href="loa-array-amate-xcellence-x212afd/">
                                                <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Amate Xcellence X212AFD
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-53139 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/amate/"><img alt="Amate" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/amate.jpg') }}" decoding="async"
                                        height="120" width="120" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Amate Xcellence XA211"
                                                href="loa-array-amate-xcellence-xa211/">
                                                <img alt="Loa Array Amate Xcellence XA211" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Amate-Xcellence-XA211.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Amate Xcellence XA211"
                                                href="loa-array-amate-xcellence-xa211/">
                                                <p
                                                    class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Amate Xcellence XA211
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-53153 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/amate/"><img alt="Amate" class="brand-logo"
                                        src="{{ asset('wp-content/uploads/amate.jpg') }}" decoding="async"
                                        height="120" width="120" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Amate Xcellence XA211P"
                                                href="loa-array-amate-xcellence-xa211p/">
                                                <img alt="Loa Array Amate Xcellence XA211P" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Amate-Xcellence-XA211P.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Amate Xcellence XA211P"
                                                href="loa-array-amate-xcellence-xa211p/">
                                                <p
                                                    class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Amate Xcellence XA211P
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-56495 status-publish last instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/audiocenter/"><img alt="Audiocenter"
                                        class="brand-logo" src="{{ asset('wp-content/uploads/audiocenter.png') }}"
                                        decoding="async" height="64" width="222" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Audiocenter Artist T45-DSP"
                                                href="loa-array-audiocenter-artist-t45-dsp/">
                                                <img alt="Loa Array Audiocenter Artist T45-DSP"
                                                    class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Audiocenter-Artist-T45-DSP.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Audiocenter Artist T45-DSP"
                                                href="loa-array-audiocenter-artist-t45-dsp/">
                                                <p
                                                    class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Audiocenter Artist T45-DSP
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-56515 status-publish first instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/audiocenter/"><img alt="Audiocenter"
                                        class="brand-logo" src="{{ asset('wp-content/uploads/audiocenter.png') }}"
                                        decoding="async" height="64" width="222" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Audiocenter Artist T4L"
                                                href="loa-array-audiocenter-artist-t4l/">
                                                <img alt="Loa Array Audiocenter Artist T4L" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Audiocenter-Artist-T4L.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Audiocenter Artist T4L"
                                                href="loa-array-audiocenter-artist-t4l/">
                                                <p
                                                    class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Audiocenter Artist T4L
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-56503 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/audiocenter/"><img alt="Audiocenter"
                                        class="brand-logo" src="{{ asset('wp-content/uploads/audiocenter.png') }}"
                                        decoding="async" height="64" width="222" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Audiocenter Artist T8"
                                                href="loa-array-audiocenter-artist-t8/">
                                                <img alt="Loa Array Audiocenter Artist T8" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Audiocenter-Artist-T8.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Audiocenter Artist T8"
                                                href="loa-array-audiocenter-artist-t8/">
                                                <p
                                                    class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Audiocenter Artist T8
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-56465 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/audiocenter/"><img alt="Audiocenter"
                                        class="brand-logo" src="{{ asset('wp-content/uploads/audiocenter.png') }}"
                                        decoding="async" height="64" width="222" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Audiocenter ASTRA 210A"
                                                href="loa-array-audiocenter-astra-210a/">
                                                <img alt="Loa Array Audiocenter ASTRA 210A" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Audiocenter-ASTRA-210A.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Audiocenter ASTRA 210A"
                                                href="loa-array-audiocenter-astra-210a/">
                                                <p
                                                    class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Audiocenter ASTRA 210A
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-56457 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/audiocenter/"><img alt="Audiocenter"
                                        class="brand-logo" src="{{ asset('wp-content/uploads/audiocenter.png') }}"
                                        decoding="async" height="64" width="222" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Audiocenter ASTRA 212A"
                                                href="loa-array-audiocenter-astra-212a/">
                                                <img alt="Loa Array Audiocenter ASTRA 212A" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Audiocenter-ASTRA-212A.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Audiocenter ASTRA 212A"
                                                href="loa-array-audiocenter-astra-212a/">
                                                <p
                                                    class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Audiocenter ASTRA 212A
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-56403 status-publish last instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/audiocenter/"><img alt="Audiocenter"
                                        class="brand-logo" src="{{ asset('wp-content/uploads/audiocenter.png') }}"
                                        decoding="async" height="64" width="222" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Audiocenter Avanda 210A"
                                                href="loa-array-audiocenter-avanda-210a/">
                                                <img alt="Loa Array Audiocenter Avanda 210A" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Audiocenter-SA312-2.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Audiocenter Avanda 210A"
                                                href="loa-array-audiocenter-avanda-210a/">
                                                <p
                                                    class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Audiocenter Avanda 210A
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-56422 status-publish first instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/audiocenter/"><img alt="Audiocenter"
                                        class="brand-logo" src="{{ asset('wp-content/uploads/audiocenter.png') }}"
                                        decoding="async" height="64" width="222" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Audiocenter Avanda 212A"
                                                href="loa-array-audiocenter-avanda-212a/">
                                                <img alt="Loa Array Audiocenter Avanda 212A" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Audiocenter-SA312-3.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Audiocenter Avanda 212A"
                                                href="loa-array-audiocenter-avanda-212a/">
                                                <p
                                                    class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Audiocenter Avanda 212A
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-56551 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/audiocenter/"><img alt="Audiocenter"
                                        class="brand-logo" src="{{ asset('wp-content/uploads/audiocenter.png') }}"
                                        decoding="async" height="64" width="222" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Audiocenter Butterfly 4CA"
                                                href="loa-array-audiocenter-butterfly-4ca/">
                                                <img alt="Loa Array Audiocenter Butterfly 4CA" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Audiocenter-Butterfly-4CA.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Audiocenter Butterfly 4CA"
                                                href="loa-array-audiocenter-butterfly-4ca/">
                                                <p
                                                    class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Audiocenter Butterfly 4CA
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-56523 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/audiocenter/"><img alt="Audiocenter"
                                        class="brand-logo" src="{{ asset('wp-content/uploads/audiocenter.png') }}"
                                        decoding="async" height="64" width="222" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Audiocenter Butterfly 4Pro"
                                                href="loa-array-audiocenter-butterfly-4pro/">
                                                <img alt="Loa Array Audiocenter Butterfly 4Pro"
                                                    class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Audiocenter-Artist-T4L-3.jpg') }}"
                                                    decoding="async" height="500" width="800" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Audiocenter Butterfly 4Pro"
                                                href="loa-array-audiocenter-butterfly-4pro/">
                                                <p
                                                    class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Audiocenter Butterfly 4Pro
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-56473 status-publish instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/audiocenter/"><img alt="Audiocenter"
                                        class="brand-logo" src="{{ asset('wp-content/uploads/audiocenter.png') }}"
                                        decoding="async" height="64" width="222" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Audiocenter K-LA12A"
                                                href="loa-array-audiocenter-k-la12a/">
                                                <img alt="Loa Array Audiocenter K-LA12A" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Audiocenter-K-LA12A.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Audiocenter K-LA12A"
                                                href="loa-array-audiocenter-k-la12a/">
                                                <p
                                                    class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Audiocenter K-LA12A
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="product-small col has-hover product type-product post-56441 status-publish last instock product_cat-loa product_cat-loa-array has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <a class="tb-brand-logo" href="brand/audiocenter/"><img alt="Audiocenter"
                                        class="brand-logo" src="{{ asset('wp-content/uploads/audiocenter.png') }}"
                                        decoding="async" height="64" width="222" /></a>
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a aria-label="Loa Array Audiocenter K-LA210-DSP"
                                                href="loa-array-audiocenter-k-la210-dsp/">
                                                <img alt="Loa Array Audiocenter K-LA210-DSP" class="attachment- size-"
                                                    src="{{ asset('wp-content/uploads/Loa-Array-Audiocenter-K-LA210-DSP.png') }}"
                                                    decoding="async" height="600" width="600" />
                                            </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover"></div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <a aria-label="Loa Array Audiocenter K-LA210-DSP"
                                                href="loa-array-audiocenter-k-la210-dsp/">
                                                <p
                                                    class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                    Loa
                                                </p>
                                                <h3 class="product-title">
                                                    Loa Array Audiocenter K-LA210-DSP
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="amount"><a class="is-medium"
                                                        href="#contact-popup">Liên hệ</a></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="container">
                        <nav aria-label="Phân trang sản phẩm" class="woocommerce-pagination">
                            <ul class="page-numbers nav-pagination links text-center">
                                <li>
                                    <span aria-current="page" class="page-number current">1</span>
                                </li>
                                <li>
                                    <a class="page-number" href="loa-array/page/2/">2</a>
                                </li>
                                <li>
                                    <a class="page-number" href="loa-array/page/3/">3</a>
                                </li>
                                <li>
                                    <a class="page-number" href="loa-array/page/4/">4</a>
                                </li>
                                <li><span class="page-number dots">…</span></li>
                                <li>
                                    <a class="page-number" href="loa-array/page/10/">10</a>
                                </li>
                                <li>
                                    <a class="page-number" href="loa-array/page/11/">11</a>
                                </li>
                                <li>
                                    <a class="page-number" href="loa-array/page/12/">12</a>
                                </li>
                                <li>
                                    <a aria-label="Tiếp theo" class="next page-number" href="loa-array/page/2/"><i
                                            class="icon-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <p class="text-center">
                        <button class="view-more-button products-archive button primary hidden">
                            Tải thêm
                        </button>
                    </p>

                @endsection
