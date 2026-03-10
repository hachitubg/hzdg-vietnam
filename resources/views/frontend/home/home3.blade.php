<div id="trungchinh-host"></div>

<template id="trungchinh-template">
    <link rel="stylesheet" href="{{ asset('css/trungchinh.css') }}">
    <style>
        /* ============================================================
           TAB DANH MỤC - hover & active effects
        ============================================================ */
        .js-tab-button {
            position: relative;
            color: #fff;
            background: transparent;
            transition: color 0.25s ease, background-image 0.25s ease, transform 0.2s ease;
            overflow: hidden;
        }
        .js-tab-button::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, #0066FF, #0044A9);
            opacity: 0;
            transition: opacity 0.25s ease;
            z-index: 0;
        }
        .js-tab-button span { position: relative; z-index: 1; }
        .js-tab-button:hover::after  { opacity: 0.25; }
        .js-tab-button:hover { transform: translateY(-2px); }
        .js-tab-button.active {
            background-image: linear-gradient(90deg, #0066FF, #0044A9) !important;
            color: #fff;
        }
        .js-tab-button.active::after { opacity: 0; }

        /* Tab content slide-in animation */
        .js-tab-content { animation: none; }
        .js-tab-content.tab-enter {
            animation: tabFadeIn 0.35s ease forwards;
        }
        @keyframes tabFadeIn {
            from { opacity: 0; transform: translateY(12px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        /* ============================================================
           BRAND MARQUEE - 2 rows, opposite directions
        ============================================================ */
        .js-brand-top-slider,
        .js-brand-top-slider-2 {
            overflow: hidden !important;
        }
        .js-brand-top-slider .swiper-wrapper {
            transform: translateX(0) !important;
            transition: none !important;
            animation: brand-scroll-left 22s linear infinite;
            will-change: transform;
        }
        .js-brand-top-slider-2 .swiper-wrapper {
            transform: translateX(-1144px) !important;
            transition: none !important;
            animation: brand-scroll-right 22s linear infinite;
            will-change: transform;
        }
        @keyframes brand-scroll-left {
            0%   { transform: translateX(0); }
            100% { transform: translateX(-1144px); }
        }
        @keyframes brand-scroll-right {
            0%   { transform: translateX(-1144px); }
            100% { transform: translateX(0); }
        }
        .js-brand-top-slider:hover .swiper-wrapper,
        .js-brand-top-slider-2:hover .swiper-wrapper {
            animation-play-state: paused;
        }
    </style>

     <main class=global-main>
    <div class="section-deployment overflow-hidden">
        <div class=container>

            <!-- Thế mạnh của chúng tôi  -->
            <div class="deployment-middle py-[80px] max-[992px]:py-[60px] max-[576px]:py-[40px]">
                <h2 class="heading-primary !text-left" style="background: linear-gradient(90deg, #0066FF, #0044A9); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                    Thế mạnh của chúng tôi 
                </h2>
                <hr class="hr-20 mb-[24px]">
				<div class="grid grid-cols-2 gap-[36px] text-white max-[992px]:gap-[24px] max-[768px]:grid-cols-1 padding-20">
                    
                    <a href="" class="solution-item relative rounded-[12px_12px_12px_0] overflow-hidden" target=_blank rel="noopener noreferrer">
                        <img class="w-full lazy loading" src="{{ asset('wp-content/uploads/images_hzdg/themanh_001.png') }}" alt="Ánh sáng hội trường" width=582 height=316 data-was-processed=true>
                        <div class="absolute bottom-0 left-0 right-0 flex bg-[linear-gradient(180deg,rgba(64,64,65,0.1)_0%,rgba(35,31,32,1)_100%)] before:w-[96px] before:mt-[-14px] before:bg-[url(/media/lib/15-01-2026/tca-svg-frame-13012026-1.png)] before:bg-no-repeat before:bg-contain before:max-[576px]:w-[84px]">
                            <i class="absolute top-[16px] left-0 inline-flex w-[65px] h-[65px] bg-[url(/media/lib/15-01-2026/tca-section-solution-icon-27122025-5.png)] bg-no-repeat bg-contain max-[576px]:w-[55px] max-[576px]:h-[55px ]"></i>
                            <div class="flex-1 p-[10px_10px_10px_0]">
                                <h3 class="text-[20px] font-bold uppercase line-clamp-1 max-[576px]:text-[16px]">Ánh sáng hội trường </h3>
                                <p class="text-white text-[15px] leading-tight mt-[6px] line-clamp-2 max-[576px]:text-[13px]">Giải pháp ánh sáng hội trường phục vụ hội nghị hội thảo cho Bộ, Sở, Ban, Ngành các cấp</p>
                            </div>
                        </div>
                    </a>

                    <a href="" class="solution-item relative rounded-[12px_12px_12px_0] overflow-hidden" target=_blank rel="noopener noreferrer">
                        <img class="w-full lazy loading" src="{{ asset('wp-content/uploads/images_hzdg/themanh_02.png') }}" alt="Ánh sáng sân khấu" width=582 height=316 data-was-processed=true>
                        <div class="absolute bottom-0 left-0 right-0 flex bg-[linear-gradient(180deg,rgba(64,64,65,0.1)_0%,rgba(35,31,32,1)_100%)] before:w-[96px] before:mt-[-14px] before:bg-[url(/media/lib/15-01-2026/tca-svg-frame-13012026-1.png)] before:bg-no-repeat before:bg-contain before:max-[576px]:w-[84px]">
                            <i class="absolute top-[16px] left-0 inline-flex w-[65px] h-[65px] bg-[url(/media/lib/15-01-2026/tca-section-solution-icon-27122025-5.png)] bg-no-repeat bg-contain max-[576px]:w-[55px] max-[576px]:h-[55px ]"></i>
                            <div class="flex-1 p-[10px_10px_10px_0]">
                                <h3 class="text-[20px] font-bold uppercase line-clamp-1 max-[576px]:text-[16px]">Ánh sáng sân khấu</h3>
                                <p class="text-white text-[15px] leading-tight mt-[6px] line-clamp-2 max-[576px]:text-[13px]">Giải pháp ánh sáng phòng trà, ca nhạc công cộng, phát nhạc nền BGM cho tòa nhà chung cư</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="flex gap-[24px] text-white max-[992px]:hidden">
                    <a href="" class="project-item relative w-[34.5%] rounded-[12px_12px_12px_0] m-auto overflow-hidden" target=_blank rel="noopener noreferrer">
                        <img class="w-full lazy loaded" src="{{ asset('wp-content/uploads/images_hzdg/themanh_01.png') }}" data-was-processed=true>
                        <div class="absolute bottom-0 left-0 right-0 flex bg-[linear-gradient(180deg,rgba(64,64,65,0.1)_0%,rgba(35,31,32,1)_100%)] before:w-[84px] before:mt-[-14px] before:bg-[url(/media/lib/15-01-2026/tca-svg-frame-13012026-1.png)] before:bg-no-repeat before:bg-contain">
                            <i class="absolute top-[16px] left-0 inline-flex w-[55px] h-[55px] bg-no-repeat bg-contain" style="background-image: url('{{ asset('wp-content/uploads/images_hzdg/themanh_icon_01.png') }}')"></i>
                            <div class="flex-1 p-[10px_10px_10px_0]">
                                <h3 class="font-bold uppercase line-clamp-1">Ánh sáng sự kiện</h3>
                                <p class="text-[13px] text-white leading-tight mt-[6px] line-clamp-2">Thiết bị âm thanh phục vụ cơ quan, doanh nghiệp hội họp, họp giao ban</p>
                            </div>
                        </div>
                    </a>
                    <div class="flex-1 flex flex-wrap gap-[24px]">
                        <a href="" class="project-item relative rounded-[12px_12px_12px_0] overflow-hidden w-[calc(50%-12px)]" target=_blank rel="noopener noreferrer">
                            <img class="w-full lazy loaded" src="{{ asset('wp-content/uploads/images_hzdg/themanh_02.png') }}" data-was-processed=true>
                            <div class="absolute bottom-0 left-0 right-0 flex bg-[linear-gradient(180deg,rgba(64,64,65,0.1)_0%,rgba(35,31,32,1)_100%)] before:w-[84px] before:mt-[-14px] before:bg-[url(/media/lib/15-01-2026/tca-svg-frame-13012026-1.png)] before:bg-no-repeat before:bg-contain">
                                <i class="absolute top-[16px] left-0 inline-flex w-[55px] h-[55px] bg-no-repeat bg-contain" style="background-image: url('{{ asset('wp-content/uploads/images_hzdg/themanh_icon_01.png') }}')"></i>
                                <div class="flex-1 p-[10px_10px_10px_0]">
                                    <h3 class="font-bold uppercase line-clamp-1">Ánh sáng phòng trà, ca nhạc</h3>
                                    <p class="text-[13px] text-white leading-tight mt-[6px] line-clamp-2">Ánh sáng phòng trà, ca nhạc công cộng, phát nhạc nền BGM cho tòa nhà chung cư</p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="project-item relative rounded-[12px_12px_12px_0] overflow-hidden w-[calc(50%-12px)]" target=_blank rel="noopener noreferrer">
                            <img class="w-full lazy loaded" src="{{ asset('wp-content/uploads/images_hzdg/themanh_03.png') }}" data-was-processed=true>
                            <div class="absolute bottom-0 left-0 right-0 flex bg-[linear-gradient(180deg,rgba(64,64,65,0.1)_0%,rgba(35,31,32,1)_100%)] before:w-[84px] before:mt-[-14px] before:bg-[url(/media/lib/15-01-2026/tca-svg-frame-13012026-1.png)] before:bg-no-repeat before:bg-contain">
                                <i class="absolute top-[16px] left-0 inline-flex w-[55px] h-[55px] bg-no-repeat bg-contain" style="background-image: url('{{ asset('wp-content/uploads/images_hzdg/themanh_icon_01.png') }}"></i>
                                <div class="flex-1 p-[10px_10px_10px_0]">
                                    <h3 class="font-bold uppercase line-clamp-1">Ánh sáng quán bar pub</h3>
                                    <p class="text-[13px] text-white leading-tight mt-[6px] line-clamp-2">Ánh sáng quán bar pub công cộng, phát nhạc nền BGM cho tòa nhà chung cư</p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="project-item relative rounded-[12px_12px_12px_0] overflow-hidden w-full" target=_blank rel="noopener noreferrer">
                            <img class="w-full lazy loaded" src="{{ asset('wp-content/uploads/images_hzdg/themanh_04.png') }}" data-was-processed=true>
                            <div class="absolute bottom-0 left-0 right-0 flex bg-[linear-gradient(180deg,rgba(64,64,65,0.1)_0%,rgba(35,31,32,1)_100%)] before:w-[84px] before:mt-[-14px] before:bg-[url(/media/lib/15-01-2026/tca-svg-frame-13012026-1.png)] before:bg-no-repeat before:bg-contain">
                                <i class="absolute top-[16px] left-0 inline-flex w-[55px] h-[55px] bg-no-repeat bg-contain" style="background-image: url('{{ asset('wp-content/uploads/images_hzdg/themanh_icon_01.png') }}')"></i>
                                <div class="flex-1 p-[10px_10px_10px_0]">
                                    <h3 class="font-bold uppercase line-clamp-1">Ánh sáng nhà hàng - bar bia - karaoke</h3>
                                    <p class="text-[13px] text-white leading-tight mt-[6px] line-clamp-2">Âm thanh và hình ảnh kết hợp cho giải pháp AV tích hợp hoàn chỉnh cung cấp audio &amp;video và giải pháp truyền hình trực tuyến trên nền tảng internet</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="hidden flex-wrap gap-[24px] text-white max-[992px]:flex sf-hidden"></div>
            </div>
            

            <!-- DỰ ÁN ÁNH SÁNG TIÊU BIỂU -->
            <div class="deployment-bottom js-tab-container">
                <h2 class="heading-primary !text-left" style="background: linear-gradient(90deg, #0066FF, #0044A9); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                    DỰ ÁN ÁNH SÁNG TIÊU BIỂU
                </h2>
                <hr class="hr-20 mb-[24px]">
                <p class="mt-[16px] mb-[32px] max-[992px]:px-[5%]" style="padding-right: 40%;">
                Sản phẩm và thiết bị của chúng tôi được sử dụng rộng rãi trong các nhà hát, quán bar, hội trường đa năng, đài truyền hình, địa điểm biểu diễn lưu động, khu du lịch văn hóa và các địa điểm văn hóa giải trí khác.    
                </p>
                <ul class="grid text-center text-[20px] leading-[48px] font-medium capitalize border-b border-b-[--color-primary] overflow-auto whitespace-nowrap max-[992px]:flex max-[576px]:text-[18px]" style="grid-template-columns: repeat({{ $postCategories->count() }}, 1fr)">
                    @foreach($postCategories as $catIndex => $cat)
                    <li>
                        <button class="w-full rounded-[0_15px_0_0] px-[24px] js-tab-button{{ $catIndex === 0 ? ' active' : '' }}" type="button" data-id="{{ $cat->id }}"><span>{{ $cat->name }}</span></button>
                    </li>
                    @endforeach
                </ul>
                @foreach($postCategories as $catIndex => $cat)
                <div class="js-tab-content js-list-vm-holder{{ $catIndex > 0 ? ' hidden' : ''}}" data-id="{{ $cat->id }}">
                    @if(isset($homePosts[$cat->id]) && $homePosts[$cat->id]->count() > 0)
                    <ol class="grid grid-cols-4 gap-[12px] mt-[24px] max-[992px]:grid-cols-3 max-[768px]:grid-cols-2 max-[576px]:gap-[10px] js-vm-content">
                        @foreach($homePosts[$cat->id] as $post)
                        <li class="js-vm-list-item">
                            <a href="{{ route('posts.show', $post->slug) }}" class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px]">
                                <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15]" src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : asset('wp-content/uploads/images_hzdg/baiviet_01.jpg') }}" alt="{{ $post->title }}" loading="lazy">
                                <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                                    <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">{{ $cat->name }}</p>
                                    <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px] line-clamp-2">{{ $post->title }}</h3>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ol>
                    @else
                    <p class="mt-[24px] text-center" style="color:#aaa">Chưa có bài viết nào trong danh mục này.</p>
                    @endif
                    <div class="text-center">
                        <a href="{{ route('posts.index') }}" class="button-primary mt-[24px] inline-flex items-center gap-[6px] no-underline">
                            Xem thêm
                            <svg class="inline-block translate-x-[-5px] translate-y-[-3px]" xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30" fill="#FFFFFF">
                                <path d="M480-360 280-560h400L480-360Z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <!-- KHÁCH HÀNG - ĐỐI TÁC -->
    <div class="section-brand bg-[--background-page] max-[992px]:pt-[60px] max-[576px]:pt-[40px]">
        <div class="container" style="padding: 30px 0px;">
            <h2 class="heading-primary !text-left" style="background: linear-gradient(90deg, #0066FF, #0044A9); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                KHÁCH HÀNG - ĐỐI TÁC
            </h2>
            <hr class="hr-20 mb-[24px]">
            <div class="text-white text-center py-[33px] px-[36px] bg-black rounded-[24px] max-[576px]:px-[10px]">
                <p class="heading-primary !normal-case">Được sự tin tưởng từ những đối tác hàng đầu</p>
                <p class="font-light mt-[20px] mb-[28px]">
                    Sự tin tưởng của những thương hiệu danh tiếng toàn cầu là minh chứng rõ nét nhất cho chất lượng dịch vụ của chúng tôi.<br>Chúng tôi cam kết mang đến những giải pháp âm thanh và công nghệ tốt nhất
                </p>
                <div class="swiper swiper-brand-top js-brand-top-slider mb-[12px] swiper-initialized swiper-horizontal swiper-pointer-events">
                    <div class=swiper-wrapper id=swiper-wrapper-99588e68b39c16c5 aria-live=off style=transform:translate3d(-2288px,0px,0px);transition-duration:0ms>
                        <div class="swiper-slide h-auto swiper-slide-duplicate" data-swiper-slide-index=0 role=group aria-label="1 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="305" height="104"><rect fill-opacity="0"/></svg>' alt=Bosch width=146 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-25) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate" data-swiper-slide-index=1 role=group aria-label="2 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="292" height="104"><rect fill-opacity="0"/></svg>' alt=TOA width=146 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-28) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate" data-swiper-slide-index=2 role=group aria-label="3 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="294" height="104"><rect fill-opacity="0"/></svg>' alt=Yamaha width=147 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-64) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate" data-swiper-slide-index=3 role=group aria-label="4 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="561" height="156"><rect fill-opacity="0"/></svg>' alt=Keenfinity width=187 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-65) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index=4 role=group aria-label="5 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="460" height="104"><rect fill-opacity="0"/></svg>' alt="Electro Voice" width=230 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-26) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate-active" data-swiper-slide-index=0 role=group aria-label="1 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="305" height="104"><rect fill-opacity="0"/></svg>' alt=Bosch width=146 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-25) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate-next" data-swiper-slide-index=1 role=group aria-label="2 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="292" height="104"><rect fill-opacity="0"/></svg>' alt=TOA width=146 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-28) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto" data-swiper-slide-index=2 role=group aria-label="3 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="294" height="104"><rect fill-opacity="0"/></svg>' alt=Yamaha width=147 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-64) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto" data-swiper-slide-index=3 role=group aria-label="4 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="561" height="156"><rect fill-opacity="0"/></svg>' alt=Keenfinity width=187 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-65) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-prev" data-swiper-slide-index=4 role=group aria-label="5 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="460" height="104"><rect fill-opacity="0"/></svg>' alt="Electro Voice" width=230 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-26) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index=0 role=group aria-label="1 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="305" height="104"><rect fill-opacity="0"/></svg>' alt=Bosch width=146 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-25) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index=1 role=group aria-label="2 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="292" height="104"><rect fill-opacity="0"/></svg>' alt=TOA width=146 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-28) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate" data-swiper-slide-index=2 role=group aria-label="3 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="294" height="104"><rect fill-opacity="0"/></svg>' alt=Yamaha width=147 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-64) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate" data-swiper-slide-index=3 role=group aria-label="4 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="561" height="156"><rect fill-opacity="0"/></svg>' alt=Keenfinity width=187 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-65) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index=4 role=group aria-label="5 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="460" height="104"><rect fill-opacity="0"/></svg>' alt="Electro Voice" width=230 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-26) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification sf-hidden" aria-live=assertive aria-atomic=true></span>
                </div>
				
                <div class="swiper swiper-brand-top js-brand-top-slider-2 swiper-initialized swiper-horizontal swiper-pointer-events">
                    <div class=swiper-wrapper id=swiper-wrapper-8447ecc60a42d60c aria-live=off style=transform:translate3d(-1144px,0px,0px);transition-duration:0ms>
                        <div class="swiper-slide h-auto swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index=0 role=group aria-label="1 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="456" height="104"><rect fill-opacity="0"/></svg>' alt=Sennheiser width=228 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-66) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index=1 role=group aria-label="2 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="318" height="104"><rect fill-opacity="0"/></svg>' alt=Dynacord width=159 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-27) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate" data-swiper-slide-index=2 role=group aria-label="3 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="254" height="104"><rect fill-opacity="0"/></svg>' alt=Shure width=127 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-67) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate" data-swiper-slide-index=3 role=group aria-label="4 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="268" height="104"><rect fill-opacity="0"/></svg>' alt="Inter M" width=134 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-68) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index=4 role=group aria-label="5 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="140" height="104"><rect fill-opacity="0"/></svg>' alt=JBL width=70 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-69) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-active" data-swiper-slide-index=0 role=group aria-label="1 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="456" height="104"><rect fill-opacity="0"/></svg>' alt=Sennheiser width=228 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-66) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-next" data-swiper-slide-index=1 role=group aria-label="2 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="318" height="104"><rect fill-opacity="0"/></svg>' alt=Dynacord width=159 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-27) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto" data-swiper-slide-index=2 role=group aria-label="3 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="254" height="104"><rect fill-opacity="0"/></svg>' alt=Shure width=127 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-67) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto" data-swiper-slide-index=3 role=group aria-label="4 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="268" height="104"><rect fill-opacity="0"/></svg>' alt="Inter M" width=134 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-68) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate-prev" data-swiper-slide-index=4 role=group aria-label="5 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="140" height="104"><rect fill-opacity="0"/></svg>' alt=JBL width=70 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-69) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index=0 role=group aria-label="1 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="456" height="104"><rect fill-opacity="0"/></svg>' alt=Sennheiser width=228 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-66) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index=1 role=group aria-label="2 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="318" height="104"><rect fill-opacity="0"/></svg>' alt=Dynacord width=159 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-27) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate" data-swiper-slide-index=2 role=group aria-label="3 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="254" height="104"><rect fill-opacity="0"/></svg>' alt=Shure width=127 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-67) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate" data-swiper-slide-index=3 role=group aria-label="4 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="268" height="104"><rect fill-opacity="0"/></svg>' alt="Inter M" width=134 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-68) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                        <div class="swiper-slide h-auto swiper-slide-duplicate" data-swiper-slide-index=4 role=group aria-label="5 / 5" style=width:212.8px;margin-right:16px>
                            <div class="flex justify-center items-center h-full">
                                <img src='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="140" height="104"><rect fill-opacity="0"/></svg>' alt=JBL width=70 height=52 style="background-blend-mode:normal !important;background-clip:content-box !important;background-position:50% 50% !important;background-color:rgba(0,0,0,0) !important;background-image:var(--sf-img-69) !important;background-size:100% 100% !important;background-origin:content-box !important;background-repeat:no-repeat !important">
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification sf-hidden" aria-live=assertive aria-atomic=true></span>
                </div>
            </div>
			
        </div>
    </div>
    
</main>
</template>

<script>
    (function () {
        const host = document.getElementById('trungchinh-host');
        const shadow = host.attachShadow({ mode: 'open' });
        const template = document.getElementById('trungchinh-template');
        shadow.appendChild(template.content.cloneNode(true));

        // ── TAB SWITCHING ─────────────────────────────────────────
        const container = shadow.querySelector('.js-tab-container');
        if (container) {
            const buttons  = container.querySelectorAll('.js-tab-button');
            const contents = container.querySelectorAll('.js-tab-content');

            function switchTab(targetId) {
                buttons.forEach(btn => {
                    const isActive = String(btn.dataset.id) === String(targetId);
                    btn.classList.toggle('active', isActive);
                    btn.style.backgroundImage = isActive
                        ? 'linear-gradient(90deg, #0066FF, #0044A9)'
                        : '';
                });
                contents.forEach(pane => {
                    const show = String(pane.dataset.id) === String(targetId);
                    pane.classList.toggle('hidden', !show);
                    if (show) {
                        pane.classList.remove('tab-enter');
                        void pane.offsetWidth; // reflow
                        pane.classList.add('tab-enter');
                    }
                });
            }

            buttons.forEach(btn => {
                btn.addEventListener('click', () => switchTab(btn.dataset.id));
            });

            // Initialise first active
            const firstActive = container.querySelector('.js-tab-button.active');
            if (firstActive) switchTab(firstActive.dataset.id);
        }
    })();
</script>