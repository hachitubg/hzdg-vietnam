@push('styles')
<style>
    /* === Variables === */
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

    h2, h3, p {
        margin: 0
    }

    img {
        max-width: 100%;
        height: auto
    }

    /* === Container === */
    .container-home3 {
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

    /* === Layout Utilities === */
    .absolute { position: absolute }
    .relative { position: relative }
    .bottom-0 { bottom: 0 }
    .left-0 { left: 0 }
    .right-0 { right: 0 }
    .top-0 { top: 0 }
    .top-\[16px\] { top: 16px }
    .m-auto { margin: auto }
    .mb-\[24px\] { margin-bottom: 24px }
    .mt-\[6px\] { margin-top: 6px }
    .overflow-hidden { overflow: hidden }

    .flex { display: flex }
    .inline-flex { display: inline-flex }
    .flex-1 { flex: 1 1 0% }
    .flex-wrap { flex-wrap: wrap }
    .items-center { align-items: center }
    .gap-\[24px\] { gap: 24px }
    .font-bold { font-weight: 700 }
    .uppercase { text-transform: uppercase }
    .\!text-left { text-align: left !important }

    /* === Sizing === */
    .w-full { width: 100% }
    .w-\[34\.5\%\] { width: 34.5% }
    .w-\[55px\] { width: 55px }
    .h-\[55px\] { height: 55px }
    .w-\[calc\(50\%-12px\)\] { width: calc(50% - 12px) }

    /* === Spacing === */
    .py-\[80px\] { padding-top: 80px; padding-bottom: 80px }
    .p-\[10px_10px_10px_0\] { padding: 10px 10px 10px 0 }

    /* === Colors & Text === */
    .text-white { color: #fff }
    .text-\[13px\] { font-size: 13px }
    .leading-tight { line-height: 1.25 }

    /* === Border Radius === */
    .rounded-\[12px_12px_12px_0\] { border-radius: 12px 12px 12px 0 }

    /* === Backgrounds === */
    .bg-\[linear-gradient\(180deg\2c rgba\(64\2c 64\2c 65\2c 0\.1\)_0\%\2c rgba\(35\2c 31\2c 32\2c 1\)_100\%\)\] {
        background-image: linear-gradient(180deg, rgba(64,64,65,0.1) 0%, rgba(35,31,32,1) 100%)
    }

    .bg-\[url\(\/media\/lib\/15-01-2026\/tca-section-solution-icon-27122025-5\.png\)\] {
        background-image: url({{ asset('wp-content/uploads/images_hzdg/themanh_icon.png') }})
    }

    .bg-contain { background-size: contain }
    .bg-no-repeat { background-repeat: no-repeat }

    /* === Before pseudo (frame decoration) === */
    .before\:w-\[84px\]::before {
        content: var(--tw-content);
        width: 84px
    }

    .before\:mt-\[-14px\]::before {
        content: var(--tw-content);
        margin-top: -14px
    }

    .before\:bg-\[url\(\/media\/lib\/15-01-2026\/tca-svg-frame-13012026-1\.png\)\]::before {
        content: var(--tw-content);
        background-image: url({{ asset('wp-content/uploads/images_hzdg/themanh_00.png') }})
    }

    .before\:bg-contain::before {
        content: var(--tw-content);
        background-size: contain
    }

    .before\:bg-no-repeat::before {
        content: var(--tw-content);
        background-repeat: no-repeat
    }

    /* === Line Clamp === */
    .line-clamp-1 {
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1
    }

    .line-clamp-2 {
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2
    }

    /* === Project Items - Effects === */
    .project-item {
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        cursor: pointer
    }

    .project-item:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 32px rgba(0, 68, 169, 0.2)
    }

    .project-item img {
        transition: transform 0.5s ease;
        width: 100%;
        height: 100%;
        object-fit: cover
    }

    .project-item:hover img {
        transform: scale(1.05)
    }

    .project-item h3 {
        transition: color 0.3s ease;
        color: white;
    }

    .project-item:hover h3 {
        color: var(--color-primary)
    }

    /* === Fade-in on scroll animation === */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px)
        }
        to {
            opacity: 1;
            transform: translateY(0)
        }
    }

    .section-deployment {
        animation: fadeInUp 0.6s ease-out both
    }

    .project-item {
        animation: fadeInUp 0.6s ease-out both
    }

    .project-item:nth-child(1) { animation-delay: 0.1s }
    .project-item:nth-child(2) { animation-delay: 0.2s }
    .project-item:nth-child(3) { animation-delay: 0.3s }

    /* === Responsive === */
    @media (max-width: 992px) {
        .max-\[992px\]\:hidden { display: none }
        .max-\[992px\]\:py-\[60px\] { padding-top: 60px; padding-bottom: 60px }
    }

    @media (max-width: 576px) {
        .max-\[576px\]\:py-\[40px\] { padding-top: 40px; padding-bottom: 40px }

        .heading-primary {
            font-size: 26px
        }
    }
</style>
@endpush

<div id="du-an-tieu-bieu" class="section-deployment overflow-hidden">
    <div class="container-home3">
        <div class="deployment-middle py-[80px] max-[992px]:py-[60px] max-[576px]:py-[40px]">
            <h2 class="heading-primary !text-left mb-[24px]">
                Thế mạnh <span>của chúng tôi</span>
            </h2>
            <div class="flex gap-[24px] text-white max-[992px]:hidden">
                <a href="" class="project-item relative w-[34.5%] rounded-[12px_12px_12px_0] m-auto overflow-hidden" target="_blank" rel="noopener noreferrer">
                    <img class="w-full" src="{{ asset('wp-content/uploads/images_hzdg/themanh_01.png') }}">
                    <div class="absolute bottom-0 left-0 right-0 flex bg-[linear-gradient(180deg,rgba(64,64,65,0.1)_0%,rgba(35,31,32,1)_100%)] before:w-[84px] before:mt-[-14px] before:bg-[url(/media/lib/15-01-2026/tca-svg-frame-13012026-1.png)] before:bg-no-repeat before:bg-contain">
                        <i class="absolute top-[16px] left-0 inline-flex w-[55px] h-[55px] bg-[url(/media/lib/15-01-2026/tca-section-solution-icon-27122025-5.png)] bg-no-repeat bg-contain"></i>
                        <div class="flex-1 p-[10px_10px_10px_0]">
                            <h3 class="font-bold uppercase line-clamp-1">Ánh sáng hội trường</h3>
                            <p class="text-[13px] text-white leading-tight mt-[6px] line-clamp-2">Giải pháp âm thanh phòng họp phục vụ hội nghị hội thảo cho Bộ, Sở, Ban, Ngành các cấp, công ty tập đoàn và cơ quan nhà nước tr...</p>
                        </div>
                    </div>
                </a>
                <div class="flex-1 flex flex-wrap gap-[24px]">
                    <a href="" class="project-item relative rounded-[12px_12px_12px_0] overflow-hidden w-[calc(50%-12px)]" target="_blank" rel="noopener noreferrer">
                        <img class="w-full" src="{{ asset('wp-content/uploads/images_hzdg/themanh_02.png') }}">
                        <div class="absolute bottom-0 left-0 right-0 flex bg-[linear-gradient(180deg,rgba(64,64,65,0.1)_0%,rgba(35,31,32,1)_100%)] before:w-[84px] before:mt-[-14px] before:bg-[url(/media/lib/15-01-2026/tca-svg-frame-13012026-1.png)] before:bg-no-repeat before:bg-contain">
                            <i class="absolute top-[16px] left-0 inline-flex w-[55px] h-[55px] bg-[url(/media/lib/15-01-2026/tca-section-solution-icon-27122025-5.png)] bg-no-repeat bg-contain"></i>
                            <div class="flex-1 p-[10px_10px_10px_0]">
                                <h3 class="font-bold uppercase line-clamp-1">Ánh sáng sân khấu</h3>
                                <p class="text-[13px] text-white leading-tight mt-[6px] line-clamp-2">Giải pháp âm thanh thông báo công cộng, phát nhạc nền BGM cho tòa nhà chung cư, văn phòng, nhà máy nhà xưởng tích hợp hệ thốn...</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="project-item relative rounded-[12px_12px_12px_0] overflow-hidden w-[calc(50%-12px)]" target="_blank" rel="noopener noreferrer">
                        <img class="w-full" src="{{ asset('wp-content/uploads/images_hzdg/themanh_03.png') }}">
                        <div class="absolute bottom-0 left-0 right-0 flex bg-[linear-gradient(180deg,rgba(64,64,65,0.1)_0%,rgba(35,31,32,1)_100%)] before:w-[84px] before:mt-[-14px] before:bg-[url(/media/lib/15-01-2026/tca-svg-frame-13012026-1.png)] before:bg-no-repeat before:bg-contain">
                            <i class="absolute top-[16px] left-0 inline-flex w-[55px] h-[55px] bg-[url(/media/lib/15-01-2026/tca-section-solution-icon-27122025-5.png)] bg-no-repeat bg-contain"></i>
                            <div class="flex-1 p-[10px_10px_10px_0]">
                                <h3 class="font-bold uppercase line-clamp-1">Ánh sáng phòng trà, ca nhạc</h3>
                                <p class="text-[13px] text-white leading-tight mt-[6px] line-clamp-2">Âm thanh phục vụ báo cháy, thông báo khẩn cấp kết hợp phát nhạc nền BGM cho các tò...</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="project-item relative rounded-[12px_12px_12px_0] overflow-hidden w-full" target="_blank" rel="noopener noreferrer">
                        <img class="w-full" src="{{ asset('wp-content/uploads/images_hzdg/themanh_04.png') }}">
                        <div class="absolute bottom-0 left-0 right-0 flex bg-[linear-gradient(180deg,rgba(64,64,65,0.1)_0%,rgba(35,31,32,1)_100%)] before:w-[84px] before:mt-[-14px] before:bg-[url(/media/lib/15-01-2026/tca-svg-frame-13012026-1.png)] before:bg-no-repeat before:bg-contain">
                            <i class="absolute top-[16px] left-0 inline-flex w-[55px] h-[55px] bg-[url(/media/lib/15-01-2026/tca-section-solution-icon-27122025-5.png)] bg-no-repeat bg-contain"></i>
                            <div class="flex-1 p-[10px_10px_10px_0]">
                                <h3 class="font-bold uppercase line-clamp-1">Ánh sáng nhà hàng - bar bia - karaoke</h3>
                                <p class="text-[13px] text-white leading-tight mt-[6px] line-clamp-2">Âm thanh và hình ảnh kết hợp cho giải pháp AV tích hợp hoàn chỉnh cung cấp audio &amp; video và giải pháp truyền hình trực tuyến trên nền tảng internet</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>