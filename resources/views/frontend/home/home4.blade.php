@push('styles')
<style>
    /* === Variables - Blue theme === */
    :root {
        --color-primary: #0066FF;
        --color-secondary: #0044A9;
        --background-page: #f5f7f9
    }

    /* === Base Reset === */
    *, ::after, ::before {
        box-sizing: border-box;
        border-width: 0;
        border-style: solid;
        border-color: #e5e7eb
    }

    ::after, ::before {
        --tw-content: ""
    }

    a {
        color: inherit;
        text-decoration: inherit;
        outline: 0
    }

    a:hover {
        color: var(--color-primary)
    }

    h2, h3, p {
        margin: 0
    }

    ol, ul {
        list-style: none;
        margin: 0;
        padding: 0
    }

    button {
        font-family: inherit;
        font-size: 100%;
        font-weight: inherit;
        line-height: inherit;
        color: inherit;
        margin: 0;
        padding: 0;
        text-transform: none;
        appearance: button;
        background-color: transparent;
        background-image: none;
        cursor: pointer
    }

    img {
        max-width: 100%;
        display: block;
        vertical-align: middle
    }

    /* === Container === */
    .container-home4 {
        width: 100%;
        max-width: 1220px !important;
        padding: 0 10px;
        margin: 0 auto
    }

    /* === Heading === */
    .heading-primary {
        font-family: "Gilroy", sans-serif;
        font-size: 36px;
        font-weight: 700;
        line-height: 1.25;
        text-transform: uppercase;
        color: #333
    }

    .heading-primary span {
        color: var(--color-primary)
    }

    /* === Button Primary - Blue gradient === */
    .button-primary {
        position: relative;
        display: inline-block;
        font-size: 14px;
        font-weight: 700;
        line-height: 43px;
        text-transform: uppercase;
        text-align: center;
        letter-spacing: 1px;
        border-radius: 24px;
        color: #fff;
        padding: 0 40px;
        background: linear-gradient(90deg, #0066FF 0%, #0044A9 100%);
        overflow: hidden;
        transition: all 0.3s ease
    }

    .button-primary::before {
        content: "";
        position: absolute;
        top: 2px;
        left: 2px;
        right: 2px;
        bottom: 2px;
        background: transparent;
        border: 1px solid #fff;
        border-radius: 24px;
        transition: all .15s
    }

    .button-primary:hover {
        color: #fff;
        background: #0044A9;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 68, 169, 0.35)
    }

    .button-primary:hover::before {
        top: -1px;
        left: -1px;
        right: -1px;
        bottom: -1px
    }

    /* === Layout Utilities === */
    .absolute { position: absolute }
    .relative { position: relative }
    .block { display: block }
    .inline-block { display: inline-block }
    .grid { display: grid }
    .top-0 { top: 0 }
    .left-0 { left: 0 }
    .right-0 { right: 0 }
    .bottom-0 { bottom: 0 }
    .w-full { width: 100% }
    .h-full { height: 100% }
    .overflow-hidden { overflow: hidden }
    .overflow-auto { overflow: auto }
    .pointer-events-none { pointer-events: none }

    .grid-cols-4 { grid-template-columns: repeat(4, minmax(0, 1fr)) }
    .gap-\[12px\] { gap: 12px }
    .items-center { align-items: center }
    .whitespace-nowrap { white-space: nowrap }

    /* === Spacing === */
    .mb-\[32px\] { margin-bottom: 32px }
    .mt-\[16px\] { margin-top: 16px }
    .mt-\[24px\] { margin-top: 24px }
    .pb-\[59\%\] { padding-bottom: 59% }
    .px-\[10px\] { padding-left: 10px; padding-right: 10px }
    .px-\[15\%\] { padding-left: 15%; padding-right: 15% }
    .px-\[24px\] { padding-left: 24px; padding-right: 24px }
    .py-\[5px\] { padding-top: 5px; padding-bottom: 5px }
    .\!pr-\[20px\] { padding-right: 20px !important }
    .\!min-w-max { min-width: max-content !important }

    /* === Typography === */
    .text-center { text-align: center }
    .text-\[13px\] { font-size: 13px }
    .text-\[20px\] { font-size: 20px }
    .font-bold { font-weight: 700 }
    .font-medium { font-weight: 500 }
    .uppercase { text-transform: uppercase }
    .capitalize { text-transform: capitalize }
    .leading-\[48px\] { line-height: 48px }
    .leading-tight { line-height: 1.25 }

    /* === Colors === */
    .text-white { color: #fff }
    .text-\[--color-primary\] { color: var(--color-primary) }
    .border-b { border-bottom-width: 1px }
    .border-b-\[--color-primary\] { border-bottom-color: var(--color-primary) }

    /* === Backgrounds === */
    .bg-\[linear-gradient\(180deg\2c rgba\(64\2c 64\2c 65\2c 0\.2\)_0\%\2c rgba\(35\2c 31\2c 32\2c 1\)_100\%\)\] {
        background-image: linear-gradient(180deg, rgba(64,64,65,0.2) 0%, rgba(35,31,32,1) 100%)
    }

    .object-cover { object-fit: cover }

    /* === Border Radius === */
    .rounded-\[0_15px_0_0\] { border-radius: 0 15px 0 0 }
    .rounded-\[8px\] { border-radius: 8px }

    /* === Transitions === */
    .transition-all {
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1)
    }
    .duration-300 { transition-duration: 300ms }

    /* === Transforms === */
    .translate-x-\[-5px\] { transform: translateX(-5px) }
    .translate-y-\[-3px\] { transform: translateY(-3px) }

    /* === Group hover effects === */
    .group:hover .group-hover\:scale-\[1\.15\] {
        transform: scale(1.15)
    }

    /* === Hover === */
    .hover\:text-\[--color-primary\]:hover {
        color: var(--color-primary)
    }

    /* === Tab active state - Blue gradient === */
    .\[\&\.active\]\:bg-\[linear-gradient\(90deg\2c \#f3d278_0\%\2c \#f16744_100\%\)\].active {
        background-image: linear-gradient(90deg, #0066FF 0%, #0044A9 100%)
    }

    .\[\&\.active\]\:text-white.active {
        color: #fff
    }

    /* === Project card effects === */
    .group {
        transition: transform 0.3s ease, box-shadow 0.3s ease
    }

    .group:hover {
        box-shadow: 0 8px 24px rgba(0, 68, 169, 0.18)
    }

    /* === Responsive: 992px === */
    @media (max-width: 992px) {
        .max-\[992px\]\:flex { display: flex }
        .max-\[992px\]\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)) }
        .max-\[992px\]\:px-\[5\%\] { padding-left: 5%; padding-right: 5% }
    }

    /* === Responsive: 768px === */
    @media (max-width: 768px) {
        .max-\[768px\]\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)) }
    }

    /* === Responsive: 576px === */
    @media (max-width: 576px) {
        .max-\[576px\]\:block { display: block }
        .max-\[576px\]\:gap-\[10px\] { gap: 10px }
        .max-\[576px\]\:rounded-\[4px\] { border-radius: 4px }
        .max-\[576px\]\:px-\[5px\] { padding-left: 5px; padding-right: 5px }
        .max-\[576px\]\:mt-\[4px\] { margin-top: 4px }
        .max-\[576px\]\:text-\[11px\] { font-size: 11px }
        .max-\[576px\]\:text-\[12px\] { font-size: 12px }
        .max-\[576px\]\:text-\[18px\] { font-size: 18px }

        .heading-primary {
            font-size: 26px
        }
    }
</style>
@endpush

<div class="container-home4">
    <div class="deployment-bottom">
        <h2 class="heading-primary">
            Dự án ánh sáng <span class="max-[576px]:block">tiêu biểu</span>
        </h2>
        <p class="text-center px-[15%] mt-[16px] mb-[32px] max-[992px]:px-[5%]">
            Sản phẩm và thiết bị của chúng tôi được sử dụng rộng rãi trong các nhà hát, quán bar, hội trường đa năng, đài truyền hình, địa điểm biểu diễn lưu động, khu du lịch văn hóa và các địa điểm văn hóa giải trí khác.
        </p>
        <ul class="grid grid-cols-4 text-center text-[20px] leading-[48px] font-medium capitalize border-b border-b-[--color-primary] overflow-auto whitespace-nowrap max-[992px]:flex max-[576px]:text-[18px]">
            <li>
                <button class="w-full rounded-[0_15px_0_0] px-[24px] [&amp;.active]:bg-[linear-gradient(90deg,#f3d278_0%,#f16744_100%)] [&amp;.active]:text-white hover:text-[--color-primary] active js-tab-button" type="button" data-id="1">Hội trường</button>
            </li>
            <li>
                <button class="w-full rounded-[0_15px_0_0] px-[24px] [&amp;.active]:bg-[linear-gradient(90deg,#f3d278_0%,#f16744_100%)] [&amp;.active]:text-white hover:text-[--color-primary] js-tab-button" type="button" data-id="2">Sự kiện</button>
            </li>
            <li>
                <button class="w-full rounded-[0_15px_0_0] px-[24px] [&amp;.active]:bg-[linear-gradient(90deg,#f3d278_0%,#f16744_100%)] [&amp;.active]:text-white hover:text-[--color-primary] js-tab-button" type="button" data-id="3">Nhà hàng - Quán bar</button>
            </li>
            <li>
                <button class="w-full rounded-[0_15px_0_0] px-[24px] [&amp;.active]:bg-[linear-gradient(90deg,#f3d278_0%,#f16744_100%)] [&amp;.active]:text-white hover:text-[--color-primary] js-tab-button" type="button" data-id="4">Công trình khác</button>
            </li>
        </ul>
        <div class="js-tab-content js-list-vm-holder" data-id="1">
            <ol class="grid grid-cols-4 gap-[12px] mt-[24px] max-[992px]:grid-cols-3 max-[768px]:grid-cols-2 max-[576px]:gap-[10px] js-vm-content">
                <li class="js-vm-list-item">
                    <a href="" class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px]" target="_blank" rel="noopener noreferrer">
                        <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15]" src="" alt="BẮC SÔNG CẤM - HẢI PHÒNG">
                        <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                            <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">Hệ Thống Âm Thanh Hội Nghị</p>
                            <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px]">BẮC SÔNG CẤM - HẢI PHÒNG</h3>
                        </div>
                    </a>
                </li>
                <li class="js-vm-list-item">
                    <a href="" class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px]" target="_blank" rel="noopener noreferrer">
                        <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15]" src="" alt="BAN TUYÊN GIÁO TRUNG ƯƠNG">
                        <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                            <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">Hệ Thống Âm Thanh Phòng Họp</p>
                            <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px]">BAN TUYÊN GIÁO TRUNG ƯƠNG</h3>
                        </div>
                    </a>
                </li>
                <li class="js-vm-list-item">
                    <a href="#" class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px] pointer-events-none" target="_blank" rel="noopener noreferrer">
                        <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15]" src="" alt="ĐẠI HỌC KIẾN TRÚC HÀ NỘI">
                        <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                            <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">Hệ Thống Âm Thanh Phòng Họp</p>
                            <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px]">ĐẠI HỌC KIẾN TRÚC HÀ NỘI</h3>
                        </div>
                    </a>
                </li>
                <li class="js-vm-list-item">
                    <a href="" class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px]" target="_blank" rel="noopener noreferrer">
                        <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15]" src="" alt="TRỤ SỞ TẬP ĐOÀN VIETTEL">
                        <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                            <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">Hệ Thống Hội Thảo Thông Minh</p>
                            <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px]">TRỤ SỞ TẬP ĐOÀN VIETTEL</h3>
                        </div>
                    </a>
                </li>
                <li class="js-vm-list-item">
                    <a href="" class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px]" target="_blank" rel="noopener noreferrer">
                        <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15]" src="" alt="BỘ KẾ HOẠCH VÀ ĐẦU TƯ">
                        <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                            <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">Hệ Thống Âm Thanh Phòng Họp</p>
                            <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px]">BỘ KẾ HOẠCH VÀ ĐẦU TƯ</h3>
                        </div>
                    </a>
                </li>
                <li class="js-vm-list-item">
                    <a href="" class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px]" target="_blank" rel="noopener noreferrer">
                        <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15]" src="" alt="BỘ XÂY DỰNG - TP. HÀ NỘI">
                        <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                            <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">Hệ Thống Âm Thanh Phòng Họp</p>
                            <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px]">BỘ XÂY DỰNG - TP. HÀ NỘI</h3>
                        </div>
                    </a>
                </li>
                <li class="js-vm-list-item">
                    <a href="" class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px]" target="_blank" rel="noopener noreferrer">
                        <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15]" src="" alt="CÔNG AN TỈNH HẬU GIANG">
                        <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                            <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">Hệ Thống Âm Thanh Hội Nghị</p>
                            <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px]">CÔNG AN TỈNH HẬU GIANG</h3>
                        </div>
                    </a>
                </li>
                <li class="js-vm-list-item">
                    <a href="" class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px]" target="_blank" rel="noopener noreferrer">
                        <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15]" src="" alt="VIETCOMBANK HẢI DƯƠNG">
                        <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                            <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">Âm Thanh Phòng Họp - Hội Trường</p>
                            <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px]">VIETCOMBANK HẢI DƯƠNG</h3>
                        </div>
                    </a>
                </li>
            </ol>
            <div class="text-center">
                <button class="button-primary !min-w-max !pr-[20px] mt-[24px] js-vm-btn" type="button">
                    Xem thêm
                    <svg class="inline-block translate-x-[-5px] translate-y-[-3px]" xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30" fill="#FFFFFF">
                        <path d="M480-360 280-560h400L480-360Z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>