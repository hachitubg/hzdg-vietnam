@push('styles')
<style>

     .home3-scope .section-deployment{
        --color-primary: #ff5626;
        --color-secondary: #ff7a23;
        --color-tertiary: #f44024;
        --background-page: #f5f7f9
    }

    .home3-scope .container-home3{
        max-width: 1220px !important;
        padding: 0 10px;
        margin: 0 auto
    }

    .home3-scope .heading-primary{
        font-family: inherit;
        font-size: 36px;
        font-weight: 700;
        line-height: 1.25;
        text-transform: uppercase
    }

    .home3-scope .heading-primary span{
        color: var(--color-primary)
    }


    .home3-scope h2, .home3-scope h3{
        font-size: inherit
    }


    .home3-scope h2, .home3-scope h3, .home3-scope p{
        margin: 0
    }

    .home3-scope ul{
        list-style: none;
        margin: 0;
        padding: 0
    }

    .home3-scope input::placeholder, .home3-scope textarea::placeholder{
        opacity: 1;
        color: #9ca3af
    }

    .home3-scope img{
        max-width: 100%;
        height: auto
    }

    .home3-scope .container-home3{
        width: 100%
    }

    @media(min-width: 640px) {
        .home3-scope .container-home3{
            max-width:640px
        }
    }

    @media(min-width: 768px) {
        .home3-scope .container-home3{
            max-width:768px
        }
    }

    @media(min-width: 1024px) {
        .home3-scope .container-home3{
            max-width:1024px
        }
    }

    @media(min-width: 1280px) {
        .home3-scope .container-home3{
            max-width:1280px
        }
    }

    @media(min-width: 1536px) {
        .home3-scope .container-home3{
            max-width:1536px
        }
    }


    .home3-scope a:hover{
        color: var(--color-primary)
    }

    .home3-scope .absolute{
        position: absolute
    }

    .home3-scope .relative{
        position: relative
    }

    .home3-scope .sticky{
        position: sticky
    }

    .home3-scope .bottom-0{
        bottom: 0px
    }

    .home3-scope .left-0{
        left: 0px
    }

    .home3-scope .left-\[50\%\]{
        left: 50%
    }

    .home3-scope .right-0{
        right: 0px
    }

    .home3-scope .top-0{
        top: 0px
    }

    .home3-scope .top-\[16px\]{
        top: 16px
    }

    .home3-scope .top-\[49\%\]{
        top: 49%
    }

    .home3-scope .z-\[99\]{
        z-index: 99
    }

    .home3-scope .m-auto{
        margin: auto
    }

    .home3-scope .mb-\[24px\]{
        margin-bottom: 24px
    }

    .home3-scope .mt-\[-36px\]{
        margin-top: -36px
    }

    .home3-scope .mt-\[12px\]{
        margin-top: 12px
    }

    .home3-scope .mt-\[24px\]{
        margin-top: 24px
    }

    .home3-scope .mt-\[6px\]{
        margin-top: 6px
    }

    .home3-scope .mr-\[2px\]{
        margin-right: 2px
    }

    .home3-scope .line-clamp-1{
        overflow: hidden;
        -webkit-box-orient: vertical;
        -webkit-line: 1
    }

    .home3-scope .line-clamp-2{
        overflow: hidden;
        -webkit-box-orient: vertical;
        -webkit-line: 2
    }

    .home3-scope .inline-block{
        display: inline-block
    }

    .home3-scope .flex{
        display: flex
    }

    .home3-scope .inline-flex{
        display: inline-flex
    }

    .home3-scope .h-\[55px\]{
        height: 55px
    }

    .home3-scope .w-\[34\.5\%\]{
        width: 34.5%
    }

    .home3-scope .w-\[55px\]{
        width: 55px
    }

    .home3-scope .w-\[calc\(50\%-12px\)\]{
        width: calc(50% - 12px)
    }

    .home3-scope .w-full{
        width: 100%
    }

    .home3-scope .\!min-w-max{
        min-width: max-content !important
    }

    .home3-scope .flex-1{
        flex: 1 1 0%
    }

    .home3-scope .translate-x-\[-50\%\]{
        --tw-translate-x: -50%
    }

    .home3-scope .translate-x-\[-5px\]{
        --tw-translate-x: -5px
    }

    .home3-scope .translate-y-\[-3px\]{
        --tw-translate-y: -3px;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .home3-scope .translate-y-\[-50\%\]{
        --tw-translate-y: -50%;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .home3-scope .translate-y-\[-1px\]{
        --tw-translate-y: -1px;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .home3-scope .scroll-mt-\[87px\]{
        scroll-margin-top: 87px
    }

    .home3-scope .flex-wrap{
        flex-wrap: wrap
    }

    .home3-scope .items-center{
        align-items: center
    }

    .home3-scope .justify-between{
        justify-content: space-between
    }

    .home3-scope .gap-\[24px\]{
        gap: 24px
    }

    .home3-scope .gap-\[2px\]{
        gap: 2px
    }

    .home3-scope .gap-\[36px\]{
        gap: 36px
    }

    .home3-scope .gap-\[48px\]{
        gap: 48px
    }

    .home3-scope .gap-\[20px\]{
        gap: 20px
    }

    .home3-scope .overflow-hidden{
        overflow: hidden
    }

    .home3-scope .rounded-\[100px\]{
        border-radius: 100px
    }

    .home3-scope .rounded-\[12px_12px_12px_0\]{
        border-radius: 12px 12px 12px 0
    }

    .home3-scope .rounded-\[36px\]{
        border-radius: 36px
    }

    .home3-scope .rounded-\[8px\]{
        border-radius: 8px
    }

    .home3-scope .bg-\[--color-primary\]{
        background-color: var(--color-primary)
    }

    .home3-scope .bg-white{
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255/var(--tw-bg-opacity,1))
    }

    .home3-scope .bg-\[\#f8f8f8\]{
        --tw-bg-opacity: 1;
        background-color: rgb(248 248 248/var(--tw-bg-opacity,1))
    }

    .home3-scope .bg-\[linear-gradient\(180deg\2c rgba\(64\2c 64\2c 65\2c 0\.1\)_0\%\2c rgba\(35\2c 31\2c 32\2c 1\)_100\%\)\]{
        background-image: linear-gradient(180deg,rgba(64,64,65,0.1) 0%,rgba(35,31,32,1) 100%)
    }

    .home3-scope .bg-\[url\(\/media\/lib\/15-01-2026\/tca-section-deployment-bg-12012026-1\.png\)\]{
        background-image: url({{ asset('wp-content/uploads/images_hzdg/themanh_icon.png') }})
    }

    .home3-scope .bg-\[url\(\/media\/lib\/15-01-2026\/tca-section-hero-bg-14012026-1\.png\)\]{
        background-image: url({{ asset('wp-content/uploads/images_hzdg/themanh_icon.png') }})
    }

    .home3-scope .bg-\[url\(\/media\/lib\/15-01-2026\/tca-section-solution-icon-27122025-5\.png\)\]{
        background-image: url({{ asset('wp-content/uploads/images_hzdg/themanh_icon.png') }})
    }

    .home3-scope .bg-contain{
        background-size: contain
    }

    .home3-scope .bg-cover{
        background-size: cover
    }

    .home3-scope .bg-no-repeat{
        background-repeat: no-repeat
    }

    .home3-scope .p-\[10px_10px_10px_0\]{
        padding: 10px 10px 10px 0
    }

    .home3-scope .p-\[8px_20px_8px_14px\]{
        padding: 8px 20px 8px 14px
    }

    .home3-scope .py-\[12px\]{
        padding-top: 12px;
        padding-bottom: 12px
    }

    .home3-scope .py-\[40px\]{
        padding-top: 40px;
        padding-bottom: 40px
    }

    .home3-scope .py-\[80px\]{
        padding-top: 80px;
        padding-bottom: 80px
    }

    .home3-scope .\!pr-\[20px\]{
        padding-right: 20px !important
    }

    .home3-scope .pb-\[113px\]{
        padding-bottom: 113px
    }

    .home3-scope .pb-\[59\%\]{
        padding-bottom: 59%
    }

    .home3-scope .pt-\[80px\]{
        padding-top: 80px
    }

    .home3-scope .\!text-left{
        text-align: left !important
    }

    .home3-scope .text-center{
        text-align: center
    }

    .home3-scope .text-\[13px\]{
        font-size: 13px
    }

    .home3-scope .text-\[18px\]{
        font-size: 18px
    }

    .home3-scope .text-\[14px\]{
        font-size: 14px
    }

    .home3-scope .font-bold{
        font-weight: 700
    }

    .home3-scope .font-medium{
        font-weight: 500
    }

    .home3-scope .uppercase{
        text-transform: uppercase
    }

    .home3-scope .capitalize{
        text-transform: capitalize
    }

    .home3-scope .leading-\[28px\]{
        line-height: 28px
    }

    .home3-scope .leading-tight{
        line-height: 1.25
    }

    .home3-scope .leading-\[24px\]{
        line-height: 24px
    }

    .home3-scope .text-white{
        --tw-text-opacity: 1;
        color: rgb(255 255 255/var(--tw-text-opacity,1))
    }

    .home3-scope .shadow{
        --tw-shadow: 0 1px 3px 0 rgb(0 0 0/0.1),0 1px 2px -1px rgb(0 0 0/0.1);
        --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color),0 1px 2px -1px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow,0 0#0000),var(--tw-ring-shadow,0 0#0000),var(--tw-shadow)
    }

    .home3-scope .transition-all{
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4,0,0.2,1)
    }

    .home3-scope .duration-500{
        transition-duration: 500ms
    }

    @theme {
        --color-primary: #f54226;
        --color-secondary: #ff7a23;
        --color-tertiary: #f44024;
        --background-page: #f5f7f9
    }

    .home3-scope .before\:absolute::before{
        content: var(--tw-content);
        position: absolute
    }

    .home3-scope .before\:bottom-\[-4\.5px\]::before{
        content: var(--tw-content);
        bottom: -4.5px
    }

    .home3-scope .before\:left-0::before{
        content: var(--tw-content);
        left: 0px
    }

    .home3-scope .before\:left-\[-4px\]::before{
        content: var(--tw-content);
        left: -4px
    }

    .home3-scope .before\:right-0::before{
        content: var(--tw-content);
        right: 0px
    }

    .home3-scope .before\:top-0::before{
        content: var(--tw-content);
        top: 0px
    }

    .home3-scope .before\:mt-\[-14px\]::before{
        content: var(--tw-content);
        margin-top: -14px
    }

    .home3-scope .before\:h-\[8px\]::before{
        content: var(--tw-content);
        height: 8px
    }

    .home3-scope .before\:w-\[84px\]::before{
        content: var(--tw-content);
        width: 84px
    }

    .home3-scope .before\:w-\[96px\]::before{
        content: var(--tw-content);
        width: 96px
    }

    .home3-scope .before\:w-\[8px\]::before{
        content: var(--tw-content);
        width: 8px
    }

    .home3-scope .before\:rounded-full::before{
        content: var(--tw-content);
        border-radius: 9999px
    }

    .home3-scope .before\:border-t-4::before{
        content: var(--tw-content);
        border-top-width: 4px
    }

    .home3-scope .before\:bg-\[\#ffbb8b\]::before{
        content: var(--tw-content);
        --tw-bg-opacity: 1;
        background-color: rgb(255 187 139/var(--tw-bg-opacity,1))
    }

    .home3-scope .before\:bg-\[url\(\/media\/lib\/15-01-2026\/tca-svg-frame-13012026-1\.png\)\]::before{
        content: var(--tw-content);
        background-image: url({{ asset('wp-content/uploads/images_hzdg/themanh_00.png') }})
    }

    .home3-scope .before\:bg-contain::before{
        content: var(--tw-content);
        background-size: contain
    }

    .home3-scope .before\:bg-no-repeat::before{
        content: var(--tw-content);
        background-repeat: no-repeat
    }

    .home3-scope .after\:absolute::after{
        content: var(--tw-content);
        position: absolute
    }

    .home3-scope .after\:bottom-\[-4\.5px\]::after{
        content: var(--tw-content);
        bottom: -4.5px
    }

    .home3-scope .after\:bottom-\[-7px\]::after{
        content: var(--tw-content);
        bottom: -7px
    }

    .home3-scope .after\:left-\[-8px\]::after{
        content: var(--tw-content);
        left: -8px
    }

    .home3-scope .after\:left-\[3px\]::after{
        content: var(--tw-content);
        left: 3px
    }

    .home3-scope .after\:right-\[-4px\]::after{
        content: var(--tw-content);
        right: -4px
    }

    .home3-scope .after\:right-\[-8px\]::after{
        content: var(--tw-content);
        right: -8px
    }

    .home3-scope .after\:top-\[-7px\]::after{
        content: var(--tw-content);
        top: -7px
    }

    .home3-scope .after\:top-\[51px\]::after{
        content: var(--tw-content);
        top: 51px
    }

    .home3-scope .after\:h-\[14px\]::after{
        content: var(--tw-content);
        height: 14px
    }

    .home3-scope .after\:h-\[8px\]::after{
        content: var(--tw-content);
        height: 8px
    }

    .home3-scope .after\:w-\[14px\]::after{
        content: var(--tw-content);
        width: 14px
    }

    .home3-scope .after\:w-\[8px\]::after{
        content: var(--tw-content);
        width: 8px
    }

    .home3-scope .after\:rounded-full::after{
        content: var(--tw-content);
        border-radius: 9999px
    }

    .home3-scope .after\:bg-\[url\(\/media\/lib\/27-01-2026\/tca-static-star-icon-27012026-1\.png\)\]::after{
        content: var(--tw-content);
        background-image: url({{ asset('wp-content/uploads/images_hzdg/themanh_00.png') }})
    }

    .home3-scope .after\:bg-contain::after{
        content: var(--tw-content);
        background-size: contain
    }

    .home3-scope .hover\:translate-y-\[-5px\]:hover{
        --tw-translate-y: -5px;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .home3-scope .hover\:bg-\[\#9c2507\]:hover{
        --tw-bg-opacity: 1;
        background-color: rgb(156 37 7/var(--tw-bg-opacity,1))
    }

    .home3-scope .hover\:bg-white:hover{
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255/var(--tw-bg-opacity,1))
    }

    .home3-scope .hover\:text-\[--color-primary\]:hover{
        color: var(--color-primary)
    }

    @media(max-width: 992px) {
        .home3-scope .max-\[992px\]\:fixed{
            position:fixed
        }

        .home3-scope .max-\[992px\]\:bottom-0{
            bottom: 0px
        }

        .home3-scope .max-\[992px\]\:left-\[100\%\]{
            left: 100%
        }

        .home3-scope .max-\[992px\]\:top-\[87px\]{
            top: 87px
        }

        .home3-scope .max-\[992px\]\:mt-\[10px\]{
            margin-top: 10px
        }

        .home3-scope .max-\[992px\]\:block{
            display: block
        }

        .home3-scope .max-\[992px\]\:flex{
            display: flex
        }

        .home3-scope .max-\[992px\]\:hidden{
            display: none
        }

        .home3-scope .max-\[992px\]\:w-full{
            width: 100%
        }

        .home3-scope .max-\[992px\]\:max-w-\[582px\]{
            max-width: 582px
        }

        .home3-scope .max-\[992px\]\:flex-col{
            flex-direction: column
        }

        .home3-scope .max-\[992px\]\:items-end{
            align-items: flex-end
        }

        .home3-scope .max-\[992px\]\:gap-\[24px\]{
            gap: 24px
        }

        .home3-scope .max-\[992px\]\:bg-\[\#dedede\]{
            --tw-bg-opacity: 1;
            background-color: rgb(222 222 222/var(--tw-bg-opacity,1))
        }

        .home3-scope .max-\[992px\]\:p-\[24px\]{
            padding: 24px
        }

        .home3-scope .max-\[992px\]\:py-\[60px\]{
            padding-top: 60px;
            padding-bottom: 60px
        }

        .home3-scope .max-\[992px\]\:pb-\[96px\]{
            padding-bottom: 96px
        }

        .home3-scope .max-\[992px\]\:pt-\[60px\]{
            padding-top: 60px
        }

        .home3-scope .max-\[992px\]\:shadow{
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0/0.1),0 1px 2px -1px rgb(0 0 0/0.1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color),0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow,0 0#0000),var(--tw-ring-shadow,0 0#0000),var(--tw-shadow)
        }
    }

    @media(max-width: 576px) {
        .home3-scope .max-\[576px\]\:top-\[68px\]{
            top:68px
        }

        .home3-scope .max-\[576px\]\:mt-\[-24px\]{
            margin-top: -24px
        }

        .home3-scope .max-\[576px\]\:h-\[30px\]{
            height: 30px
        }

        .home3-scope .max-\[576px\]\:h-\[35px\]{
            height: 35px
        }

        .home3-scope .max-\[576px\]\:w-\[30px\]{
            width: 30px
        }

        .home3-scope .max-\[576px\]\:w-\[35px\]{
            width: 35px
        }

        .home3-scope .max-\[576px\]\:scroll-mt-\[68px\]{
            scroll-margin-top: 68px
        }

        .home3-scope .max-\[576px\]\:flex-col{
            flex-direction: column
        }

        .home3-scope .max-\[576px\]\:rounded-\[24px\]{
            border-radius: 24px
        }

        .home3-scope .max-\[576px\]\:p-\[5px\]{
            padding: 5px
        }

        .home3-scope .max-\[576px\]\:py-\[40px\]{
            padding-top: 40px;
            padding-bottom: 40px
        }

        .home3-scope .max-\[576px\]\:py-\[20px\]{
            padding-top: 20px;
            padding-bottom: 20px
        }

        .home3-scope .max-\[576px\]\:pb-\[64px\]{
            padding-bottom: 64px
        }

        .home3-scope .max-\[576px\]\:pt-\[40px\]{
            padding-top: 40px
        }

        .home3-scope .before\:max-\[576px\]\:w-\[84px\]::before{
            content: var(--tw-content);
            width: 84px
        }
    }

</style>
@endpush

<div class="home3-scope" style="font-family: inherit;">
<div class="section-deployment overflow-hidden">
    <div class=container-home3>
        <div class="deployment-middle py-[80px] max-[992px]:py-[60px] max-[576px]:py-[40px]">
            <h2 class="heading-primary !text-left mb-[24px]">
                Lĩnh vực <span>triển khai</span>
            </h2>
            <div class="flex gap-[24px] text-white max-[992px]:hidden">
                <a href="" class="project-item relative w-[34.5%] rounded-[12px_12px_12px_0] m-auto overflow-hidden" target=_blank rel="noopener noreferrer">
                    <img class="w-full lazy loaded" src="{{ asset('wp-content/uploads/images_hzdg/themanh_01.png') }}">
                    <div class="absolute bottom-0 left-0 right-0 flex bg-[linear-gradient(180deg,rgba(64,64,65,0.1)_0%,rgba(35,31,32,1)_100%)] before:w-[84px] before:mt-[-14px] before:bg-[url(/media/lib/15-01-2026/tca-svg-frame-13012026-1.png)] before:bg-no-repeat before:bg-contain">
                        <i class="absolute top-[16px] left-0 inline-flex w-[55px] h-[55px] bg-[url(/media/lib/15-01-2026/tca-section-solution-icon-27122025-5.png)] bg-no-repeat bg-contain"></i>
                        <div class="flex-1 p-[10px_10px_10px_0]">
                            <h3 class="font-bold uppercase line-clamp-1">Âm thanh hội nghị, phòng họp</h3>
                            <p class="text-[13px] text-white leading-tight mt-[6px] line-clamp-2">Thiết bị âm thanh phục vụ cơ quan, doanh nghiệp hội họp, họp giao ban, kết nối họp trực tuyến từ xa đa điểm cầu</p>
                        </div>
                    </div>
                </a>
                <div class="flex-1 flex flex-wrap gap-[24px]">
                    <a href="" class="project-item relative rounded-[12px_12px_12px_0] overflow-hidden w-[calc(50%-12px)]" target=_blank rel="noopener noreferrer">
                        <img class="w-full lazy loaded" src="{{ asset('wp-content/uploads/images_hzdg/themanh_02.png') }}">
                        <div class="absolute bottom-0 left-0 right-0 flex bg-[linear-gradient(180deg,rgba(64,64,65,0.1)_0%,rgba(35,31,32,1)_100%)] before:w-[84px] before:mt-[-14px] before:bg-[url(/media/lib/15-01-2026/tca-svg-frame-13012026-1.png)] before:bg-no-repeat before:bg-contain">
                            <i class="absolute top-[16px] left-0 inline-flex w-[55px] h-[55px] bg-[url(/media/lib/15-01-2026/tca-section-solution-icon-27122025-5.png)] bg-no-repeat bg-contain"></i>
                            <div class="flex-1 p-[10px_10px_10px_0]">
                                <h3 class="font-bold uppercase line-clamp-1">Âm thanh thông báo</h3>
                                <p class="text-[13px] text-white leading-tight mt-[6px] line-clamp-2">Âm thanh phục vụ báo cháy, thông báo khẩn cấp kết hợp phát nhạc nền BGM cho các tòa nhà, bệnh viện, khu đô thị và nhà máy nhà xưởng</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="project-item relative rounded-[12px_12px_12px_0] overflow-hidden w-[calc(50%-12px)]" target=_blank rel="noopener noreferrer">
                        <img class="w-full lazy loaded" src="{{ asset('wp-content/uploads/images_hzdg/themanh_03.png') }}">
                        <div class="absolute bottom-0 left-0 right-0 flex bg-[linear-gradient(180deg,rgba(64,64,65,0.1)_0%,rgba(35,31,32,1)_100%)] before:w-[84px] before:mt-[-14px] before:bg-[url(/media/lib/15-01-2026/tca-svg-frame-13012026-1.png)] before:bg-no-repeat before:bg-contain">
                            <i class="absolute top-[16px] left-0 inline-flex w-[55px] h-[55px] bg-[url(/media/lib/15-01-2026/tca-section-solution-icon-27122025-5.png)] bg-no-repeat bg-contain"></i>
                            <div class="flex-1 p-[10px_10px_10px_0]">
                                <h3 class="font-bold uppercase line-clamp-1">Âm thanh hội trường, sân khấu</h3>
                                <p class="text-[13px] text-white leading-tight mt-[6px] line-clamp-2">Âm thanh phục vụ sân khấu biểu diễn, sự kiện ngoài trời với tính di động cao và lắp đặt linh hoạt, đồng thời vẫn cung cấp chất lượng âm thanh chuyên nghiệp</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="project-item relative rounded-[12px_12px_12px_0] overflow-hidden w-full" target=_blank rel="noopener noreferrer">
                        <img class="w-full lazy loaded" src="{{ asset('wp-content/uploads/images_hzdg/themanh_04.png') }}">
                        <div class="absolute bottom-0 left-0 right-0 flex bg-[linear-gradient(180deg,rgba(64,64,65,0.1)_0%,rgba(35,31,32,1)_100%)] before:w-[84px] before:mt-[-14px] before:bg-[url(/media/lib/15-01-2026/tca-svg-frame-13012026-1.png)] before:bg-no-repeat before:bg-contain">
                            <i class="absolute top-[16px] left-0 inline-flex w-[55px] h-[55px] bg-[url(/media/lib/15-01-2026/tca-section-solution-icon-27122025-5.png)] bg-no-repeat bg-contain"></i>
                            <div class="flex-1 p-[10px_10px_10px_0]">
                                <h3 class="font-bold uppercase line-clamp-1">Hệ thống tích hợp công nghệ</h3>
                                <p class="text-[13px] text-white leading-tight mt-[6px] line-clamp-2">Âm thanh và hình ảnh kết hợp cho giải pháp AV tích hợp hoàn chỉnh cung cấp audio &amp;video và giải pháp truyền hình trực tuyến trên nền tảng internet</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
