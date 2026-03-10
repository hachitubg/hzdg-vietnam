<!-- 3 thẻ card -->
<div id="gioi-thieu-hzdg" class="container home1">
    <ul class="service hidemb">
        <li>
            <div class="grid">
                <a href="https://www.facebook.com/people/Decox-Consulting/61583914532146/" title="Decox Consulting">
                    <img src="{{ asset('wp-content/uploads/images_hzdg/trangchu_header_00.jpg') }}">
                </a>
            </div>
        </li>
        <li>
            <div class="grid">
                <div class="center">
                    <img src="{{ asset('wp-content/uploads/images_hzdg/trangchu_header_01.jpg') }}">
                </div>
                <p>Tư vấn thiết kế hệ thống ánh sáng</p>
                <span>Bạn sắp về nhà mới và cần được tư vấn? Chia sẻ những tâm tư và ý tưởng tuyệt vời cho ngôi nhà tương lai, Decox luôn lắng nghe bạn.</span>
                <a href="https://decoxdesign.com/dang-ky-tu-van-va-nhan-phac-thao" title="1 giờ trò chuyện cùng chuyên gia" class="send">LIÊN HỆ TƯ VẤN</a>
            </div>
        </li>
        <li>
            <div class="grid">
                <div class="center">
                    <img src="{{ asset('wp-content/uploads/images_hzdg/trangchu_header_02.jpg') }}">
                </div>
                <p>Lợi ích cho nhà thầu - dự án</p>
                <span>Bạn sắp về nhà mới và đã có bản vẽ thiết kế nội thất, bạn đang cần tìm một nhà thầu uy tín để thi công?</span>
                <a href="https://decoxdesign.com/bao-gia-thiet-ke-noi-that" title="Bạn cần thi công theo bản vẽ?" class="send">HỒ SƠ NĂNG LỰC</a>
            </div>
        </li>
    </ul>
</div>

@push('styles')
	<style>
        .home1 {
            padding: 20px 0px;
        }

        *, *:before, *:after {
            box-sizing: border-box;
            outline: none !important;
        }

        html, body, p, a, img, ul, li {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            font-style: inherit;
            line-height: inherit;
            vertical-align: baseline;
            border: 0;
            padding: 0;
            margin: 0;
        }

        body {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            background: #fff;
            font-size: 14px;
            color: #484338;
            min-height: 700px;
        }

        html {
            -webkit-text-size-adjust: none;
            height: 100%;
        }

        .container {
            width: 98%;
            max-width: 1360px;
            margin: 0 auto;
            position: relative;
        }

        a {
            text-decoration: none;
            color: #333;
        }

        a:hover {
            color: #5e5e5e;
        }

        p {
            margin: 0;
            padding: 0;
        }

        li, ul {
            list-style: none;
        }

        .center {
            text-align: center;
        }

        img {
            max-width: 100%;
        }

        .service {
            margin-right: -5px;
            margin-left: -5px;
        }

        .service::after {
            content: " ";
            display: block;
            clear: both;
        }

        .service li {
            float: left;
            width: 33.333%;
            padding: 0 5px;
            padding-top: 10px;
        }

        .service li .grid {
            height: 245px;
            overflow: hidden;
            position: relative;
            border-radius: 5px;
            border: 1px solid #e9ecef;
            background: #fff;
            box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, .16);
            padding: 5px 10px;
        }

        .service li p {
            color: #264c5d;
            font-weight: bold;
            font-size: 24px;
            line-height: 30px;
            margin-bottom: 10px;
        }

        .service li span {
            line-height: 24px;
        }

        .service li a.send {
            background: #fff;
            border-radius: 5px;
            text-align: center;
            color: #264c5d;
            border: 1px solid #264c5d;
            text-transform: uppercase;
            margin: auto;
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            width: 161px;
            height: 39px;
            line-height: 37px;
            font-weight: bold;
        }

        .service li a.send:hover {
            background: #264c5d;
            color: #fff;
        }

        .service li:nth-child(1) img {
            width: 100%;
            height: 100%;
            border-radius: 5px;
        }

        .service li:nth-child(1) .grid {
            padding: 0;
        }

        @media screen and (max-width: 840px) {
            .container {
                width: 99%;
            }

            .service li {
                width: 50%;
            }
        }

        @media screen and (max-width: 640px) {
            .hidemb {
                display: none;
            }

            .service li {
                width: 100%;
            }
        }

        @media screen and (max-width: 480px) {
            .service {
                margin: 0;
            }

            .container {
                width: 100%;
            }

            .service li .grid {
                height: auto;
            }

            .service li a.send {
                position: relative;
                display: block;
                bottom: 0;
                margin: 10px auto 5px;
            }
        }
    </style>
@endpush