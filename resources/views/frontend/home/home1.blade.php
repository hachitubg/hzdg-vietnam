<!-- 3 thẻ card -->
<div class="container home1">
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

        .home1.container {
            width: 98%;
            max-width: 1360px;
            margin: 0 auto;
            position: relative;
        }

        .home1 .center {
            text-align: center;
        }

        .home1 img {
            max-width: 100%;
        }

        .home1 .service {
            margin-right: -5px;
            margin-left: -5px;
        }

        .home1 .service::after {
            content: " ";
            display: block;
            clear: both;
        }

        .home1 .service li {
            float: left;
            width: 33.333%;
            padding: 0 5px;
            padding-top: 10px;
        }

        .home1 .service li .grid {
            height: 245px;
            overflow: hidden;
            position: relative;
            border-radius: 5px;
            border: 1px solid #e9ecef;
            background: #fff;
            box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, .16);
            padding: 5px 10px;
        }

        .home1 .service li p {
            color: #264c5d;
            font-weight: bold;
            font-size: 24px;
            line-height: 30px;
            margin-bottom: 10px;
        }

        .home1 .service li span {
            line-height: 24px;
        }

        .home1 .service li a.send {
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

        .home1 .service li a.send:hover {
            background: #264c5d;
            color: #fff;
        }

        .home1 .service li:nth-child(1) img {
            width: 100%;
            height: 100%;
            border-radius: 5px;
        }

        .home1 .service li:nth-child(1) .grid {
            padding: 0;
        }

        @media screen and (max-width: 840px) {
            .home1.container {
                width: 99%;
            }

            .home1 .service li {
                width: 50%;
            }
        }

        @media screen and (max-width: 640px) {
            .home1 .hidemb {
                display: none;
            }

            .home1 .service li {
                width: 100%;
            }
        }

        @media screen and (max-width: 480px) {
            .home1 .service {
                margin: 0;
            }

            .home1.container {
                width: 100%;
            }

            .home1 .service li .grid {
                height: auto;
            }

            .home1 .service li a.send {
                position: relative;
                display: block;
                bottom: 0;
                margin: 10px auto 5px;
            }
        }
    </style>
@endpush