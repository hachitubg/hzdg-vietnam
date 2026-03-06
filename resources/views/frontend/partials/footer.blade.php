<footer id="footer" class="footer-wrapper">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">

                <div class="col large-4">
                    <h4>HZDG VIỆT NAM</h4>
                    <p>Chuyên cung cấp thiết bị âm thanh chuyên nghiệp cho karaoke, sân khấu, hội trường.</p>
                    <p>📞 Hotline: <a href="tel:0946780404"><strong>094 678 04 04</strong></a></p>
                    <p>📧 Email: info@hazdgvietnam.com</p>
                </div>

                <div class="col large-4">
                    <h4>DANH MỤC SẢN PHẨM</h4>
                    <ul>
                        @php
                            $footerCats = \App\Models\Category::where('type','product')->where('is_visible',true)->whereNull('parent_id')->orderBy('sort_order')->get();
                        @endphp
                        @foreach($footerCats as $cat)
                        <li><a href="{{ route('products.category', $cat->slug) }}">{{ $cat->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col large-4">
                    <h4>LIÊN KẾT</h4>
                    <ul>
                        <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                        <li><a href="{{ route('projects.index') }}">Dự án</a></li>
                        <li><a href="{{ route('posts.index') }}">Tin tức</a></li>
                        <li><a href="{{ route('contact.index') }}">Liên hệ</a></li>
                    </ul>
                    <div style="margin-top:15px;">
                        <a href="https://www.facebook.com/hzdgvietnam" target="_blank">Facebook</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="absolute-footer dark medium-text-center text-center">
        <div class="container clearfix">
            <div class="footer-primary pull-left">
                <p>© {{ date('Y') }} HZDG Việt Nam. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Nút gọi điện + Zalo cố định -->
<div style="position:fixed;bottom:20px;right:20px;z-index:9999;">
    <a href="tel:0946780404" style="display:block;width:50px;height:50px;background:#e74c3c;border-radius:50%;text-align:center;line-height:50px;color:#fff;font-size:24px;margin-bottom:10px;text-decoration:none;">📞</a>
    <a href="https://zalo.me/0946780404" target="_blank" style="display:block;width:50px;height:50px;background:#0068ff;border-radius:50%;text-align:center;line-height:50px;color:#fff;font-size:14px;font-weight:bold;text-decoration:none;">Zalo</a>
</div>