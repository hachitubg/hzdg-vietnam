@push('styles')
<style>

    .home4-scope .button-primary{
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
        background: linear-gradient(90deg,#f3d278 0%,#f16744 100%);
        overflow: hidden
    }

    .home4-scope .button-primary::before{
        content: "";
        position: absolute;
        top: 2px;
        left: 2px;
        right: 2px;
        bottom: 2px;
        background: transparent;
        border: 1px solid #fff;
        border-radius: 24px;
        transition: all .150s
    }

    .home4-scope .button-primary:hover{
        color: #fff;
        background: #f16744
    }

    .home4-scope .button-primary:hover::before{
        top: -1px;
        left: -1px;
        right: -1px;
        bottom: -1px
    }

    .home4-scope .heading-primary{
        font-family: inherit;
        font-size: 36px;
        font-weight: 700;
        line-height: 1.25;
        text-align: center;
        text-transform: uppercase
    }

    .home4-scope .heading-primary span{
        color: var(--color-primary)
    }

     .home4-scope .container-home4{
        --color-primary: #ff5626;
        --color-secondary: #ff7a23;
        --color-tertiary: #f44024;
        --background-page: #f5f7f9
    }

    .home4-scope .container-home4{
        max-width: 1220px !important;
        padding: 0 10px;
        margin: 0 auto
    }


    .home4-scope h2, .home4-scope h3{
        font-size: inherit
    }




    .home4-scope :-moz-focusring{
        outline: auto
    }

    .home4-scope :-moz-ui-invalid{
        box-shadow: none
    }

    .home4-scope ::-webkit-inner-spin-button, .home4-scope ::-webkit-outer-spin-button{
        height: auto
    }

    .home4-scope ::-webkit-search-decoration{
        appearance: none
    }

    .home4-scope ::-webkit-file-upload-button{
        appearance: button;
        font: inherit
    }

    .home4-scope h2, .home4-scope h3, .home4-scope p{
        margin: 0
    }

    .home4-scope ol, .home4-scope ul{
        list-style: none;
        margin: 0;
        padding: 0
    }

    .home4-scope input::placeholder, .home4-scope textarea::placeholder{
        opacity: 1;
        color: #9ca3af
    }


    .home4-scope :disabled{
        cursor: default
    }

    .home4-scope img, .home4-scope svg{
        display: block;
        vertical-align: middle;
    }

    .home4-scope img{
        max-width: 100%
    }


    .home4-scope .container-home4{
        width: 100%
    }

    @media(min-width: 640px) {
        .home4-scope .container-home4{
            max-width:640px
        }
    }

    @media(min-width: 768px) {
        .home4-scope .container-home4{
            max-width:768px
        }
    }

    @media(min-width: 1024px) {
        .home4-scope .container-home4{
            max-width:1024px
        }
    }

    @media(min-width: 1280px) {
        .home4-scope .container-home4{
            max-width:1280px
        }
    }

    @media(min-width: 1536px) {
        .home4-scope .container-home4{
            max-width:1536px
        }
    }


    .home4-scope a:hover{
        color: var(--color-primary)
    }

    .home4-scope .pointer-events-none{
        pointer-events: none
    }

    .home4-scope .absolute{
        position: absolute
    }

    .home4-scope .relative{
        position: relative
    }

    .home4-scope .sticky{
        position: sticky
    }

    .home4-scope .bottom-0{
        bottom: 0px
    }

    .home4-scope .left-0{
        left: 0px
    }

    .home4-scope .left-\[50\%\]{
        left: 50%
    }

    .home4-scope .right-0{
        right: 0px
    }

    .home4-scope .top-0{
        top: 0px
    }

    .home4-scope .top-\[49\%\]{
        top: 49%
    }

    .home4-scope .z-\[99\]{
        z-index: 99
    }

    .home4-scope .m-auto{
        margin: auto
    }

    .home4-scope .mb-\[32px\]{
        margin-bottom: 32px
    }

    .home4-scope .mt-\[-36px\]{
        margin-top: -36px
    }

    .home4-scope .mt-\[12px\]{
        margin-top: 12px
    }

    .home4-scope .mt-\[16px\]{
        margin-top: 16px
    }

    .home4-scope .mt-\[24px\]{
        margin-top: 24px
    }

    .home4-scope .mr-\[2px\]{
        margin-right: 2px
    }

    .home4-scope .block{
        display: block
    }

    .home4-scope .inline-block{
        display: inline-block
    }

    .home4-scope .grid{
        display: grid
    }

    .home4-scope .h-full{
        height: 100%
    }

    .home4-scope .w-full{
        width: 100%
    }

    .home4-scope .\!min-w-max{
        min-width: max-content !important
    }

    .home4-scope .flex-1{
        flex: 1 1 0%
    }

    .home4-scope .translate-x-\[-50\%\]{
        --tw-translate-x: -50%
    }

    .home4-scope .translate-x-\[-5px\]{
        --tw-translate-x: -5px
    }

    .home4-scope .translate-y-\[-3px\]{
        --tw-translate-y: -3px;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .home4-scope .translate-y-\[-50\%\]{
        --tw-translate-y: -50%;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .home4-scope .translate-y-\[-1px\]{
        --tw-translate-y: -1px;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .home4-scope .scroll-mt-\[87px\]{
        scroll-margin-top: 87px
    }

    .home4-scope .grid-cols-4{
        grid-template-columns: repeat(4,minmax(0,1fr))
    }

    .home4-scope .items-center{
        align-items: center
    }

    .home4-scope .justify-between{
        justify-content: space-between
    }

    .home4-scope .gap-\[12px\]{
        gap: 12px
    }

    .home4-scope .gap-\[2px\]{
        gap: 2px
    }

    .home4-scope .gap-\[36px\]{
        gap: 36px
    }

    .home4-scope .gap-\[48px\]{
        gap: 48px
    }

    .home4-scope .gap-\[20px\]{
        gap: 20px
    }

    .home4-scope .overflow-auto{
        overflow: auto
    }

    .home4-scope .overflow-hidden{
        overflow: hidden
    }

    .home4-scope .whitespace-nowrap{
        white-space: nowrap
    }

    .home4-scope .rounded-\[0_15px_0_0\]{
        border-radius: 0 15px 0 0
    }

    .home4-scope .rounded-\[100px\]{
        border-radius: 100px
    }

    .home4-scope .rounded-\[36px\]{
        border-radius: 36px
    }

    .home4-scope .rounded-\[8px\]{
        border-radius: 8px
    }

    .home4-scope .border-b{
        border-bottom-width: 1px
    }

    .home4-scope .border-b-\[--color-primary\]{
        border-bottom-color: var(--color-primary)
    }

    .home4-scope .bg-\[--color-primary\]{
        background-color: var(--color-primary)
    }

    .home4-scope .bg-white{
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255/var(--tw-bg-opacity,1))
    }

    .home4-scope .bg-\[\#f8f8f8\]{
        --tw-bg-opacity: 1;
        background-color: rgb(248 248 248/var(--tw-bg-opacity,1))
    }

    .home4-scope .bg-cover{
        background-size: cover
    }

    .home4-scope .bg-no-repeat{
        background-repeat: no-repeat
    }

    .home4-scope .object-cover{
        object-fit: cover
    }

    .home4-scope .p-\[8px_20px_8px_14px\]{
        padding: 8px 20px 8px 14px
    }

    .home4-scope .px-\[10px\]{
        padding-left: 10px;
        padding-right: 10px
    }

    .home4-scope .px-\[15\%\]{
        padding-left: 15%;
        padding-right: 15%
    }

    .home4-scope .px-\[24px\]{
        padding-left: 24px;
        padding-right: 24px
    }

    .home4-scope .py-\[12px\]{
        padding-top: 12px;
        padding-bottom: 12px
    }

    .home4-scope .py-\[40px\]{
        padding-top: 40px;
        padding-bottom: 40px
    }

    .home4-scope .py-\[5px\]{
        padding-top: 5px;
        padding-bottom: 5px
    }

    .home4-scope .py-\[80px\]{
        padding-top: 80px;
        padding-bottom: 80px
    }

    .home4-scope .\!pr-\[20px\]{
        padding-right: 20px !important
    }

    .home4-scope .pb-\[113px\]{
        padding-bottom: 113px
    }

    .home4-scope .pb-\[59\%\]{
        padding-bottom: 59%
    }

    .home4-scope .pt-\[80px\]{
        padding-top: 80px
    }

    .home4-scope .text-center{
        text-align: center
    }

    .home4-scope .text-\[13px\]{
        font-size: 13px
    }

    .home4-scope .text-\[18px\]{
        font-size: 18px
    }

    .home4-scope .text-\[20px\]{
        font-size: 20px
    }

    .home4-scope .text-\[14px\]{
        font-size: 14px
    }

    .home4-scope .font-bold{
        font-weight: 700
    }

    .home4-scope .font-medium{
        font-weight: 500
    }

    .home4-scope .uppercase{
        text-transform: uppercase
    }

    .home4-scope .capitalize{
        text-transform: capitalize
    }

    .home4-scope .leading-\[28px\]{
        line-height: 28px
    }

    .home4-scope .leading-\[48px\]{
        line-height: 48px
    }

    .home4-scope .leading-tight{
        line-height: 1.25
    }

    .home4-scope .leading-\[24px\]{
        line-height: 24px
    }

    .home4-scope .text-\[--color-primary\]{
        color: var(--color-primary)
    }

    .home4-scope .text-white{
        --tw-text-opacity: 1;
        color: rgb(255 255 255/var(--tw-text-opacity,1))
    }

    .home4-scope .shadow{
        --tw-shadow: 0 1px 3px 0 rgb(0 0 0/0.1),0 1px 2px -1px rgb(0 0 0/0.1);
        --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color),0 1px 2px -1px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow,0 0#0000),var(--tw-ring-shadow,0 0#0000),var(--tw-shadow)
    }

    .home4-scope .transition-all{
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4,0,0.2,1)
    }

    .home4-scope .duration-300{
        transition-duration: 300ms
    }

    .home4-scope .duration-500{
        transition-duration: 500ms
    }

    @theme {
        --color-primary: #f54226;
        --color-secondary: #ff7a23;
        --color-tertiary: #f44024;
        --background-page: #f5f7f9
    }

    .home4-scope .before\:absolute::before{
        content: var(--tw-content);
        position: absolute
    }

    .home4-scope .before\:bottom-\[-4\.5px\]::before{
        content: var(--tw-content);
        bottom: -4.5px
    }

    .home4-scope .before\:left-0::before{
        content: var(--tw-content);
        left: 0px
    }

    .home4-scope .before\:left-\[-4px\]::before{
        content: var(--tw-content);
        left: -4px
    }

    .home4-scope .before\:right-0::before{
        content: var(--tw-content);
        right: 0px
    }

    .home4-scope .before\:top-0::before{
        content: var(--tw-content);
        top: 0px
    }

    .home4-scope .before\:mt-\[-14px\]::before{
        content: var(--tw-content);
        margin-top: -14px
    }

    .home4-scope .before\:h-\[8px\]::before{
        content: var(--tw-content);
        height: 8px
    }

    .home4-scope .before\:w-\[84px\]::before{
        content: var(--tw-content);
        width: 84px
    }

    .home4-scope .before\:w-\[96px\]::before{
        content: var(--tw-content);
        width: 96px
    }

    .home4-scope .before\:w-\[8px\]::before{
        content: var(--tw-content);
        width: 8px
    }

    .home4-scope .before\:rounded-full::before{
        content: var(--tw-content);
        border-radius: 9999px
    }

    .home4-scope .before\:border-t-4::before{
        content: var(--tw-content);
        border-top-width: 4px
    }

    .home4-scope .before\:bg-\[\#ffbb8b\]::before{
        content: var(--tw-content);
        --tw-bg-opacity: 1;
        background-color: rgb(255 187 139/var(--tw-bg-opacity,1))
    }

    .home4-scope .before\:bg-contain::before{
        content: var(--tw-content);
        background-size: contain
    }

    .home4-scope .before\:bg-no-repeat::before{
        content: var(--tw-content);
        background-repeat: no-repeat
    }

    .home4-scope .after\:absolute::after{
        content: var(--tw-content);
        position: absolute
    }

    .home4-scope .after\:bottom-\[-4\.5px\]::after{
        content: var(--tw-content);
        bottom: -4.5px
    }

    .home4-scope .after\:bottom-\[-7px\]::after{
        content: var(--tw-content);
        bottom: -7px
    }

    .home4-scope .after\:left-\[-8px\]::after{
        content: var(--tw-content);
        left: -8px
    }

    .home4-scope .after\:left-\[3px\]::after{
        content: var(--tw-content);
        left: 3px
    }

    .home4-scope .after\:right-\[-4px\]::after{
        content: var(--tw-content);
        right: -4px
    }

    .home4-scope .after\:right-\[-8px\]::after{
        content: var(--tw-content);
        right: -8px
    }

    .home4-scope .after\:top-\[-7px\]::after{
        content: var(--tw-content);
        top: -7px
    }

    .home4-scope .after\:top-\[51px\]::after{
        content: var(--tw-content);
        top: 51px
    }

    .home4-scope .after\:h-\[14px\]::after{
        content: var(--tw-content);
        height: 14px
    }

    .home4-scope .after\:h-\[8px\]::after{
        content: var(--tw-content);
        height: 8px
    }

    .home4-scope .after\:w-\[14px\]::after{
        content: var(--tw-content);
        width: 14px
    }

    .home4-scope .after\:w-\[8px\]::after{
        content: var(--tw-content);
        width: 8px
    }

    .home4-scope .after\:rounded-full::after{
        content: var(--tw-content);
        border-radius: 9999px
    }

    .home4-scope .after\:bg-contain::after{
        content: var(--tw-content);
        background-size: contain
    }

    .home4-scope .hover\:translate-y-\[-5px\]:hover{
        --tw-translate-y: -5px;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .home4-scope .hover\:bg-\[\#9c2507\]:hover{
        --tw-bg-opacity: 1;
        background-color: rgb(156 37 7/var(--tw-bg-opacity,1))
    }

    .home4-scope .hover\:bg-white:hover{
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255/var(--tw-bg-opacity,1))
    }

    .home4-scope .group:hover .group-hover\:translate-y-\[-5px\]{
        --tw-translate-y: -5px;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .home4-scope .group:hover .group-hover\:scale-\[1\.15\]{
        --tw-scale-x: 1.15;
        --tw-scale-y: 1.15;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .home4-scope .group:hover .group-hover\:fill-\[--color-primary\]{
        fill: var(--color-primary)
    }

    @media(max-width: 992px) {
        .home4-scope .max-\[992px\]\:fixed{
            position:fixed
        }

        .home4-scope .max-\[992px\]\:bottom-0{
            bottom: 0px
        }

        .home4-scope .max-\[992px\]\:left-\[100\%\]{
            left: 100%
        }

        .home4-scope .max-\[992px\]\:top-\[87px\]{
            top: 87px
        }

        .home4-scope .max-\[992px\]\:mt-\[10px\]{
            margin-top: 10px
        }

        .home4-scope .max-\[992px\]\:block{
            display: block
        }

        .home4-scope .max-\[992px\]\:flex{
            display: flex
        }

        .home4-scope .max-\[992px\]\:w-full{
            width: 100%
        }

        .home4-scope .max-\[992px\]\:max-w-\[582px\]{
            max-width: 582px
        }

        .home4-scope .max-\[992px\]\:grid-cols-3{
            grid-template-columns: repeat(3,minmax(0,1fr))
        }

        .home4-scope .max-\[992px\]\:flex-col{
            flex-direction: column
        }

        .home4-scope .max-\[992px\]\:items-end{
            align-items: flex-end
        }

        .home4-scope .max-\[992px\]\:gap-\[24px\]{
            gap: 24px
        }

        .home4-scope .max-\[992px\]\:bg-\[\#dedede\]{
            --tw-bg-opacity: 1;
            background-color: rgb(222 222 222/var(--tw-bg-opacity,1))
        }

        .home4-scope .max-\[992px\]\:p-\[24px\]{
            padding: 24px
        }

        .home4-scope .max-\[992px\]\:px-\[5\%\]{
            padding-left: 5%;
            padding-right: 5%
        }

        .home4-scope .max-\[992px\]\:py-\[60px\]{
            padding-top: 60px;
            padding-bottom: 60px
        }

        .home4-scope .max-\[992px\]\:pb-\[96px\]{
            padding-bottom: 96px
        }

        .home4-scope .max-\[992px\]\:pt-\[60px\]{
            padding-top: 60px
        }

        .home4-scope .max-\[992px\]\:shadow{
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0/0.1),0 1px 2px -1px rgb(0 0 0/0.1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color),0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow,0 0#0000),var(--tw-ring-shadow,0 0#0000),var(--tw-shadow)
        }
    }

    @media(max-width: 768px) {
        .home4-scope .max-\[768px\]\:grid-cols-2{
            grid-template-columns:repeat(2,minmax(0,1fr))
        }
    }

    @media(max-width: 576px) {
        .home4-scope .max-\[576px\]\:top-\[68px\]{
            top:68px
        }

        .home4-scope .max-\[576px\]\:mt-\[-24px\]{
            margin-top: -24px
        }

        .home4-scope .max-\[576px\]\:mt-\[4px\]{
            margin-top: 4px
        }

        .home4-scope .max-\[576px\]\:block{
            display: block
        }

        .home4-scope .max-\[576px\]\:h-\[30px\]{
            height: 30px
        }

        .home4-scope .max-\[576px\]\:h-\[35px\]{
            height: 35px
        }

        .home4-scope .max-\[576px\]\:w-\[30px\]{
            width: 30px
        }

        .home4-scope .max-\[576px\]\:w-\[35px\]{
            width: 35px
        }

        .home4-scope .max-\[576px\]\:scroll-mt-\[68px\]{
            scroll-margin-top: 68px
        }

        .home4-scope .max-\[576px\]\:flex-col{
            flex-direction: column
        }

        .home4-scope .max-\[576px\]\:gap-\[10px\]{
            gap: 10px
        }

        .home4-scope .max-\[576px\]\:rounded-\[24px\]{
            border-radius: 24px
        }

        .home4-scope .max-\[576px\]\:rounded-\[4px\]{
            border-radius: 4px
        }

        .home4-scope .max-\[576px\]\:p-\[5px\]{
            padding: 5px
        }

        .home4-scope .max-\[576px\]\:px-\[5px\]{
            padding-left: 5px;
            padding-right: 5px
        }

        .home4-scope .max-\[576px\]\:py-\[40px\]{
            padding-top: 40px;
            padding-bottom: 40px
        }

        .home4-scope .max-\[576px\]\:py-\[20px\]{
            padding-top: 20px;
            padding-bottom: 20px
        }

        .home4-scope .max-\[576px\]\:pb-\[64px\]{
            padding-bottom: 64px
        }

        .home4-scope .max-\[576px\]\:pt-\[40px\]{
            padding-top: 40px
        }

        .home4-scope .max-\[576px\]\:text-\[11px\]{
            font-size: 11px
        }

        .home4-scope .max-\[576px\]\:text-\[12px\]{
            font-size: 12px
        }

        .home4-scope .max-\[576px\]\:text-\[18px\]{
            font-size: 18px
        }

        .home4-scope .before\:max-\[576px\]\:w-\[84px\]::before{
            content: var(--tw-content);
            width: 84px
        }
    }

    .home4-scope .\[\&\.active\]\:bg-\[linear-gradient\(90deg\2c \#f3d278_0\%\2c \#f16744_100\%\)\].active{
        background-image: linear-gradient(90deg,#f3d278 0%,#f16744 100%)
    }

    .home4-scope .\[\&\.active\]\:text-white.active{
        --tw-text-opacity: 1;
        color: rgb(255 255 255/var(--tw-text-opacity,1))
    }

</style>
@endpush

<div class="home4-scope" style="font-family: inherit;">
<div class="container-home4">
    <div class="deployment-bottom">
            <h2 class=heading-primary>
                Công trình chúng tôi <span class=max-[576px]:block>đã triển khai</span>
            </h2>
            <p class="text-center px-[15%] mt-[16px] mb-[32px] max-[992px]:px-[5%]">
                <b class=text-[--color-primary]>TCA-Trung Chính Audio</b>
                ngày càng nhận được sự tin tưởng nhiều của khách hàng trong cơ quan nhà nước, doanh nghiệp cả trong nước và nước ngoài. Bên cạnh đó, <b class=text-[--color-primary]>Trung Chính Audio</b>
                cũng là nhà phân phối thiết bị âm thanh chính hãng cấp 1 của nhiều thương hiệu âm thanh lớn trên thế giới.

            </p>
            <ul class="grid grid-cols-4 text-center text-[20px] leading-[48px] font-medium capitalize border-b border-b-[--color-primary] overflow-auto whitespace-nowrap max-[992px]:flex max-[576px]:text-[18px]">
                <li>
                    <button class="w-full rounded-[0_15px_0_0] px-[24px] [&amp;.active]:bg-[linear-gradient(90deg,#f3d278_0%,#f16744_100%)] [&amp;.active]:text-white hover:text-[--color-primary] active js-tab-button" type=button data-id=1>Cơ Quan</button>
                </li>
                <li>
                    <button class="w-full rounded-[0_15px_0_0] px-[24px] [&amp;.active]:bg-[linear-gradient(90deg,#f3d278_0%,#f16744_100%)] [&amp;.active]:text-white hover:text-[--color-primary] js-tab-button" type=button data-id=2>Tòa Nhà</button>
                </li>
                <li>
                    <button class="w-full rounded-[0_15px_0_0] px-[24px] [&amp;.active]:bg-[linear-gradient(90deg,#f3d278_0%,#f16744_100%)] [&amp;.active]:text-white hover:text-[--color-primary] js-tab-button" type=button data-id=3>Công Trình Công Cộng</button>
                </li>
                <li>
                    <button class="w-full rounded-[0_15px_0_0] px-[24px] [&amp;.active]:bg-[linear-gradient(90deg,#f3d278_0%,#f16744_100%)] [&amp;.active]:text-white hover:text-[--color-primary] js-tab-button" type=button data-id=4>Đơn vị khác</button>
                </li>
            </ul>
            <div class="js-tab-content js-list-vm-holder" data-id=1>
                <ol class="grid grid-cols-4 gap-[12px] mt-[24px] max-[992px]:grid-cols-3 max-[768px]:grid-cols-2 max-[576px]:gap-[10px] js-vm-content">
                    <li class=js-vm-list-item>
                        <a href="" class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px]" target=_blank rel="noopener noreferrer">
                            <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15] lazy loaded" src=https://trungchinhaudio.vn/media/news/2708_hoi-nghi-truyen-hinh-aver-polycom-g7500.jpg alt="BẮC SÔNG CẤM - HẢI PHÒNG" width=291 height=172 src="">
                            <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                                <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">Hệ thống âm thanh Hội Nghị</p>
                                <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px]">BẮC SÔNG CẤM - HẢI PHÒNG</h3>
                            </div>
                        </a>
                    </li>
                    <li class=js-vm-list-item>
                        <a href="" class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px]" target=_blank rel="noopener noreferrer">
                            <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15] lazy loaded" src="">
                            <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                                <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">Hệ thống âm thanh Phòng Họp</p>
                                <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px]">BAN TUYÊN GIÁO TRUNG ƯƠNG</h3>
                            </div>
                        </a>
                    </li>
                    <li class=js-vm-list-item>
                        <a href=# class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px] pointer-events-none" target=_blank rel="noopener noreferrer">
                            <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15] lazy loaded" src="">
                            <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                                <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">Hệ Thống Âm Thanh Phòng Họp</p>
                                <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px]">ĐẠI HỌC KIẾN TRÚC HÀ NỘI</h3>
                            </div>
                        </a>
                    </li>
                    <li class=js-vm-list-item>
                        <a href="" class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px]" target=_blank rel="noopener noreferrer">
                            <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15] lazy loaded" src="">
                            <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                                <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">Hệ Thống Hội Thảo Thông Minh</p>
                                <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px]">TRỤ SỞ TẬP ĐOÀN VIETTEL</h3>
                            </div>
                        </a>
                    </li>
                    <li class=js-vm-list-item>
                        <a href="" class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px]" target=_blank rel="noopener noreferrer">
                            <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15] lazy loaded" src="">
                            <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                                <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">Hệ thống âm thanh phòng họp</p>
                                <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px]">BỘ KẾ HOẠCH VÀ ĐẦU TƯ</h3>
                            </div>
                        </a>
                    </li>
                    <li class=js-vm-list-item>
                        <a href="" class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px]" target=_blank rel="noopener noreferrer">
                            <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15] lazy loaded" src="">
                            <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                                <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">Hệ thống âm thanh phòng họp</p>
                                <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px]">BỘ XÂY DỰNG - TP. HÀ NỘI</h3>
                            </div>
                        </a>
                    </li>
                    <li class=js-vm-list-item>
                        <a href="" class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px]" target=_blank rel="noopener noreferrer">
                            <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15] lazy loaded" src="">
                            <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                                <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">Hệ thống Âm thanh Hội nghị</p>
                                <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px]">CÔNG AN TỈNH HẬU GIANG</h3>
                            </div>
                        </a>
                    </li>
                    <li class=js-vm-list-item>
                        <a href="" class="group relative block pb-[59%] rounded-[8px] overflow-hidden max-[576px]:rounded-[4px]" target=_blank rel="noopener noreferrer">
                            <img class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover transition-all duration-300 group-hover:scale-[1.15] lazy loaded" src="">
                            <div class="absolute bottom-0 left-0 right-0 px-[10px] py-[5px] bg-[linear-gradient(180deg,rgba(64,64,65,0.2)_0%,rgba(35,31,32,1)_100%)] max-[576px]:px-[5px]">
                                <p class="text-[13px] text-white capitalize max-[576px]:text-[11px]">Âm thanh Phòng họp - Hội trường</p>
                                <h3 class="text-[--color-primary] leading-tight font-bold max-[576px]:text-[12px] max-[576px]:mt-[4px]">VIETCOMBANK HẢI DƯƠNG</h3>
                            </div>
                        </a>
                    </li>
                </ol>
                <div class=text-center>
                    <button class="button-primary !min-w-max !pr-[20px] mt-[24px] js-vm-btn" type=button>
                        Xem thêm
                        <svg class="inline-block translate-x-[-5px] translate-y-[-3px]" xmlns=http://www.w3.org/2000/svg height=30 viewBox="0 -960 960 960" width=30 fill=#FFFFFF>
                            <path d="M480-360 280-560h400L480-360Z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
