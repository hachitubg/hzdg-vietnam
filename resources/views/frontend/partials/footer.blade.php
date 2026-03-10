<footer class="footer-wrapper" id="footer">
    <section class="section dark" id="section_1095671931">
        <div class="section-bg fill">
        </div>
        <div class="section-content relative">
            <div class="container section-title-container ace-title" id="title-165342514" style="margin-top:30px;">
                <h2 class="section-title section-title-normal center">
                    <div class="section-title-main" style="text-transform:inherit;font-weight:inherit;">
                        <b></b><span class="column-style"><small class="sub-title before-title stroke" style="color:rgb(255,255,255);-webkit-text-stroke-color:rgb(255,255,255);">Tư vấn</small>
                            <p>giải pháp âm thanh trọn gói</p>
                        </span><b></b>
                    </div>
                </h2>
            </div>

            <div class="row align-center margin-top-20" id="row-381513746">
                <div class="col medium-6 small-12 large-6" id="col-1237370123">
                    <div class="col-inner">
                        <div class="wpcf7 no-js" data-wpcf7-id="67806" dir="ltr" id="wpcf7-f67806-o1"
                            lang="vi">
                            <div class="screen-reader-response">
                                <p aria-atomic="true" aria-live="polite" role="status"></p>
                                <ul></ul>
                            </div>
                            @if(session('success'))
                                <div class="wpcf7-response-output" style="color:#46b450;border-color:#46b450;padding:10px;margin-bottom:15px;text-align:center;">{{ session('success') }}</div>
                            @endif
                            @if($errors->any())
                                <div class="wpcf7-response-output" style="color:#dc3232;border-color:#dc3232;padding:10px;margin-bottom:15px;">
                                    <ul style="margin:0;padding-left:15px;">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('contact.store') }}" aria-label="Form liên hệ"
                                class="wpcf7-form init" method="post" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="flex-col mb-half">
                                        <p><span class="wpcf7-form-control-wrap" data-name="full_name"><input
                                                    aria-invalid="false" aria-required="true"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    maxlength="255" name="full_name" placeholder="Họ Tên (bắt buộc)"
                                                    size="40" type="text" value="{{ old('full_name') }}" /></span>
                                        </p>
                                    </div>
                                    <div class="flex-col flex-grow mb-half">
                                        <p><span class="wpcf7-form-control-wrap" data-name="phone"><input
                                                    aria-invalid="false" aria-required="true"
                                                    class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel"
                                                    maxlength="20" name="phone"
                                                    placeholder="Số điện thoại (bắt buộc)" size="40" type="tel"
                                                    value="{{ old('phone') }}" /></span>
                                        </p>
                                    </div>
                                    <div class="flex-col flex-grow ml-half mb-half">
                                        <p><span class="wpcf7-form-control-wrap" data-name="email"><input
                                                    aria-invalid="false"
                                                    class="wpcf7-form-control wpcf7-email wpcf7-text wpcf7-validates-as-email"
                                                    maxlength="255" name="email" placeholder="Email" size="40"
                                                    type="email" value="{{ old('email') }}" /></span>
                                        </p>
                                    </div>
                                    <div class="flex-col">
                                        <p><span class="wpcf7-form-control-wrap" data-name="message">
                                                <textarea aria-invalid="false" class="wpcf7-form-control wpcf7-textarea" cols="40" maxlength="2000"
                                                    name="message" placeholder="Nội dung" rows="10">{{ old('message') }}</textarea>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="flex-col" style="text-align:center">
                                        <p><input
                                                class="wpcf7-form-control wpcf7-submit has-spinner button secondary expand"
                                                type="submit" value="TƯ VẤN MIỄN PHÍ" />
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col medium-6 small-12 large-6" id="col-1425103224">
                    <div class="col-inner">
                        <div class="container section-title-container ace-title" id="title-242512354"
                            style="margin-top:10px;margin-bottom:0px;">
                            <h3 class="section-title section-title-no-line center">
                                <div class="section-title-main" style="text-transform:inherit;font-weight:inherit;">
                                    <b></b><span class="-style">
                                        <p>HZDG VIỆT NAM cam kết</p>
                                    </span><b></b></div>
                            </h3>
                        </div>
                        <div class="ux-menu stack stack-col justify-center">
                            <div class="ace-box-wrap expand" id="iconbox-411873120">
                                <div class="ace-iconbox--inner"
                                    style="justify-content:flex-start;background-color:transparent;line-height:2;margin:3px 0px 3px 0px!important;">
                                    <div class="ace-iconbox--icon type_icon" style="margin:0px 10px 0px 0px;">
                                        <div class="icon-inner">
                                            <i class="far fas fa-circle" style="font-size:100%;line-height:1em;width:1em;height:1em"></i>
                                        </div>
                                    </div>
                                    <div class="ace-iconbox--content">
                                        <p class="ace-text--head" style="font-size:100%;">Sản phẩm chính hãng,
                                            đầy đủ giấy tờ Co, Cq.<b style="background-color:"></b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ace-box-wrap expand" id="iconbox-1565290827">
                                <div class="ace-iconbox--inner"
                                    style="justify-content:flex-start;background-color:transparent;line-height:2;margin:3px 0px 3px 0px!important;">
                                    <div class="ace-iconbox--icon type_icon" style="margin:0px 10px 0px 0px;">
                                        <div class="icon-inner">
                                            <i class="far fas fa-circle" style="font-size:100%;line-height:1em;width:1em;height:1em"></i>
                                        </div>
                                    </div>
                                    <div class="ace-iconbox--content">
                                        <p class="ace-text--head" style="font-size:100%;">Chế độ bảo hành hấp dẫn, ít nhất từ 24 tháng trở lên.<b style="background-color:"></b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="ace-box-wrap expand" id="iconbox-2084304532">
                                <div class="ace-iconbox--inner"
                                    style="justify-content:flex-start;background-color:transparent;line-height:2;margin:3px 0px 3px 0px!important;">
                                    <div class="ace-iconbox--icon type_icon" style="margin:0px 10px 0px 0px;">
                                        <div class="icon-inner">
                                            <i class="far fas fa-circle" style="font-size:100%;line-height:1em;width:1em;height:1em"></i>
                                        </div>
                                    </div>
                                    <div class="ace-iconbox--content">
                                        <p class="ace-text--head" style="font-size:100%;">Dịch vụ hậu mãi khách hàng sau mua.<b style="background-color:"></b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ace-box-wrap expand" id="iconbox-976225905">
                                <div class="ace-iconbox--inner"
                                    style="justify-content:flex-start;background-color:transparent;line-height:2;margin:3px 0px 3px 0px!important;">
                                    <div class="ace-iconbox--icon type_icon" style="margin:0px 10px 0px 0px;">
                                        <div class="icon-inner">
                                            <i class="far fas fa-circle"
                                                style="font-size:100%;line-height:1em;width:1em;height:1em"></i>
                                        </div>
                                    </div>
                                    <div class="ace-iconbox--content">
                                        <p class="ace-text--head" style="font-size:100%;">Giá cả ưu đãi nhất thị trường.<b style="background-color:"></b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ace-box-wrap expand" id="iconbox-723836282">
                                <div class="ace-iconbox--inner"
                                    style="justify-content:flex-start;background-color:transparent;line-height:2;margin:3px 0px 3px 0px!important;">
                                    <div class="ace-iconbox--icon type_icon" style="margin:0px 10px 0px 0px;">
                                        <div class="icon-inner">
                                            <i class="far fas fa-circle"
                                                style="font-size:100%;line-height:1em;width:1em;height:1em"></i>
                                        </div>
                                    </div>
                                    <div class="ace-iconbox--content">
                                        <p class="ace-text--head" style="font-size:100%;">Đội ngũ nhân viên tư vấn nhiệt tình, kỹ thuật dày dặn kinh nghiệm.<b style="background-color:"></b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ace-box-wrap expand" id="iconbox-868190568">
                                <div class="ace-iconbox--inner"
                                    style="justify-content:flex-start;background-color:transparent;line-height:2;margin:3px 0px 3px 0px!important;">
                                    <div class="ace-iconbox--icon type_icon" style="margin:0px 10px 0px 0px;">
                                        <div class="icon-inner">
                                            <i class="far fas fa-circle"
                                                style="font-size:100%;line-height:1em;width:1em;height:1em"></i>
                                        </div>
                                    </div>
                                    <div class="ace-iconbox--content">
                                        <p class="ace-text--head" style="font-size:100%;">Dịch vụ vận chuyển tận nơi, lắp đặt trọn gói toàn lãnh thổ Việt Nam.<b style="background-color:"></b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom Footer -->
    <section class="section dark" style="background-color:#1a1f36;padding:40px 0 0;">
        <div class="section-content">
            <div class="container">
                <div class="row" style="border-bottom:1px solid rgba(255,255,255,0.1);padding-bottom:30px;">
                    <!-- Cột 1: Logo & Mô tả -->
                    <div class="col medium-3 small-12 large-3">
                        <div class="col-inner" style="padding-right:20px;">
                            <div style="margin-bottom:15px;">
                                <img src="{{ asset('wp-content/uploads/logo_icon/logo_white.png') }}" alt="HZDG Việt Nam" style="max-width:80px;margin-bottom:5px;" />
                                <p style="color:#fff;font-weight:bold;font-size:16px;margin:0;">HZDG VIỆT NAM</p>
                            </div>
                            <p style="color:rgba(255,255,255,0.7);font-size:13px;line-height:1.6;">
                                HZDG VIỆT NAM tôi cam kết đảm bảo chất lượng, sẵn sàng hỗ trợ nhanh chóng để ánh sáng của bạn luôn bền đẹp theo thời gian
                            </p>
                        </div>
                    </div>

                    <!-- Cột 2: Dịch vụ nổi bật -->
                    <div class="col medium-3 small-12 large-3">
                        <div class="col-inner">
                            <h4 style="color:#d4a843;font-size:22px;font-weight:700;margin-bottom:15px;text-transform:uppercase;">Dịch vụ nổi bật</h4>
                            <ul style="list-style:none;padding:0;margin:0;">
                                <li style="margin-left:0px;margin-bottom:20px;">
                                    <a href="#" style="color:rgba(255,255,255,0.7);text-decoration:none;font-size:16px;"><i class="far fa-play-circle" style="margin-right:8px;color:#d4a843;"></i>Thiết kế hệ thống ánh sáng</a>
                                </li>
                                <li style="margin-left:0px;margin-bottom:20px;">
                                    <a href="#" style="color:rgba(255,255,255,0.7);text-decoration:none;font-size:16px;"><i class="far fa-play-circle" style="margin-right:8px;color:#d4a843;"></i>Bảo trì hệ thống ánh sáng</a>
                                </li>
                                <li style="margin-left:0px;margin-bottom:20px;">
                                    <a href="#" style="color:rgba(255,255,255,0.7);text-decoration:none;font-size:16px;"><i class="far fa-play-circle" style="margin-right:8px;color:#d4a843;"></i>Sửa chữa thiết bị ánh sáng</a>
                                </li>
                                <li style="margin-left:0px;margin-bottom:20px;">
                                    <a href="#" style="color:rgba(255,255,255,0.7);text-decoration:none;font-size:16px;"><i class="far fa-play-circle" style="margin-right:8px;color:#d4a843;"></i>Công trình ánh sáng nổi bật</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Cột 3: Về HZDG Việt Nam -->
                    <div class="col medium-3 small-12 large-3">
                        <div class="col-inner">
                            <h4 style="color:#d4a843;font-size:22px;font-weight:700;margin-bottom:15px;text-transform:uppercase;">Về HZDG Việt Nam</h4>
                            <ul style="list-style:none;padding:0;margin:0;">
                                <li style="margin-left:0px;margin-bottom:20px;">
                                    <a href="{{ route('about') }}" style="color:rgba(255,255,255,0.7);text-decoration:none;font-size:16px;"><i class="far fa-play-circle" style="margin-right:8px;color:#d4a843;"></i>Giới thiệu</a>
                                </li>
                                <li style="margin-left:0px;margin-bottom:20px;">
                                    <a href="{{ route('posts.index') }}" style="color:rgba(255,255,255,0.7);text-decoration:none;font-size:16px;"><i class="far fa-play-circle" style="margin-right:8px;color:#d4a843;"></i>Tin tức</a>
                                </li>
                                <li style="margin-left:0px;margin-bottom:20px;">
                                    <a href="#" style="color:rgba(255,255,255,0.7);text-decoration:none;font-size:16px;"><i class="far fa-play-circle" style="margin-right:8px;color:#d4a843;"></i>Tuyển dụng</a>
                                </li>
                                <li style="margin-left:0px;margin-bottom:20px;">
                                    <a href="{{ route('contact.index') }}" style="color:rgba(255,255,255,0.7);text-decoration:none;font-size:16px;"><i class="far fa-play-circle" style="margin-right:8px;color:#d4a843;"></i>Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Cột 4: Thông tin liên hệ -->
                    <div class="col medium-3 small-12 large-3">
                        <div class="col-inner">
                            <h4 style="color:#d4a843;font-size:22px;font-weight:700;margin-bottom:15px;text-transform:uppercase;">Thông tin liên hệ</h4>
                            <ul style="list-style:none;padding:0;margin:0;">
                                <li style="margin-bottom:20px;color:rgba(255,255,255,0.7);font-size:16px;">
                                    <i class="fas fa-phone-alt" style="margin-right:8px;color:#d4a843;"></i>
                                    <a href="tel:0967793333" style="color:rgba(255,255,255,0.7);text-decoration:none;">096 779 3333</a>
                                </li>
                                <li style="margin-bottom:20px;color:rgba(255,255,255,0.7);font-size:16px;">
                                    <i class="fas fa-envelope" style="margin-right:8px;color:#d4a843;"></i>
                                    <a href="mailto:audiokhangphudat@gmail.com" style="color:rgba(255,255,255,0.7);text-decoration:none;">audiokhangphudat@gmail.com</a>
                                </li>
                                <li style="margin-bottom:15px;color:rgba(255,255,255,0.7);font-size:16px;">
                                    <i class="fas fa-map-marker-alt" style="margin-right:8px;color:#d4a843;"></i>
                                    Số 8, Phố Hồng Đô, Phường Từ Liêm, Hà Nội
                                </li>
                                <!-- <li style="margin-bottom:8px;">
                                    <img src="{{ asset('wp-content/uploads/bo-cong-thuong.png') }}" alt="Đã thông báo Bộ Công Thương" style="max-width:150px;" />
                                </li>
                                <li>
                                    <img src="{{ asset('wp-content/uploads/dmca-protected.png') }}" alt="DMCA Protected" style="max-width:150px;" />
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Copyright Bar -->
                <div class="row align-middle" style="padding:20px 0;">
                    <div class="col medium-6 small-12 large-6">
                        <p style="color:rgba(255,255,255,0.5);font-size:13px;margin:0;">Copyright &copy; {{ date('Y') }} HZDG Việt Nam All Rights Reserved.</p>
                    </div>
                    <div class="col medium-6 small-12 large-6" style="text-align:right;">
                        <div style="display:inline-flex;gap:10px;">
                            <a href="#" style="display:inline-flex;align-items:center;justify-content:center;width:36px;height:36px;border:1px solid rgba(255,255,255,0.3);border-radius:50%;color:#fff;text-decoration:none;font-size:16px;" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" style="display:inline-flex;align-items:center;justify-content:center;width:36px;height:36px;border:1px solid rgba(255,255,255,0.3);border-radius:50%;color:#fff;text-decoration:none;font-size:16px;" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                            <a href="#" style="display:inline-flex;align-items:center;justify-content:center;width:36px;height:36px;border:1px solid rgba(255,255,255,0.3);border-radius:50%;color:#fff;text-decoration:none;font-size:16px;" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

<style>
    .section.dark {
        background-color: #254283;
    }

    .section-title-main span {
        display: inline-flex;
        flex-direction: column;
    }

    .margin-top-20 {
        margin-top: 20px !important;
    }
</style>