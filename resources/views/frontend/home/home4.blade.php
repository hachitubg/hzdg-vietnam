@push('styles')
<style>
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
        background: linear-gradient(90deg,#f3d278 0%,#f16744 100%);
        overflow: hidden
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
        transition: all .150s
    }

    .button-primary:hover {
        color: #fff;
        background: #f16744
    }

    .button-primary:hover::before {
        top: -1px;
        left: -1px;
        right: -1px;
        bottom: -1px
    }

    .heading-primary {
        font-family: "Gilroy",sans-serif;
        font-size: 36px;
        font-weight: 700;
        line-height: 1.25;
        text-align: center;
        text-transform: uppercase
    }

    .heading-primary span {
        color: var(--color-primary)
    }

    .home4 {
        --color-primary: #ff5626;
        --color-secondary: #ff7a23;
        --color-tertiary: #f44024;
        --background-page: #f5f7f9
    }

    .container-home4 {
        max-width: 1220px !important;
        padding: 0 10px;
        margin: 0 auto
    }
    
    .home4, .home4 *, .home4 *::before, .home4 *::after {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-gradient-from-position: ;
        --tw-gradient-via-position: ;
        --tw-gradient-to-position: ;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246/0.5);
        --tw-ring-offset-shadow: 0 0#0000;
        --tw-ring-shadow: 0 0#0000;
        --tw-shadow: 0 0#0000;
        --tw-shadow-colored: 0 0#0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
        --tw-contain-size: ;
        --tw-contain-layout: ;
        --tw-contain-paint: ;
        --tw-contain-style:
    }

    .home4 ::backdrop {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-gradient-from-position: ;
        --tw-gradient-via-position: ;
        --tw-gradient-to-position: ;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246/0.5);
        --tw-ring-offset-shadow: 0 0#0000;
        --tw-ring-shadow: 0 0#0000;
        --tw-shadow: 0 0#0000;
        --tw-shadow-colored: 0 0#0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
        --tw-contain-size: ;
        --tw-contain-layout: ;
        --tw-contain-paint: ;
        --tw-contain-style:
    }

    .home4, .home4 *, .home4 *::after, .home4 *::before {
        box-sizing: border-box;
        border-width: 0;
        border-style: solid;
        border-color: #e5e7eb
    }

    .home4 *::after, .home4 *::before {
        --tw-content: ""
    }

    .home4 {
        line-height: 1.5;
        -webkit-text-size-adjust: 100%;
        -moz-tab-size: 4;
        tab-size: 4;
        font-family: ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        font-feature-settings: normal;
        font-variation-settings: normal;
        -webkit-tap-highlight-color: transparent
    }

    .home4 {
        margin: 0;
        line-height: inherit
    }

    .home4 h2, .home4 h3 {
        font-size: inherit
    }

    .home4 a {
        color: inherit;
        text-decoration: inherit
    }

    .home4 b {
        font-weight: bolder
    }

    .home4 button {
        font-family: inherit;
        font-feature-settings: inherit;
        font-variation-settings: inherit;
        font-size: 100%;
        font-weight: inherit;
        line-height: inherit;
        letter-spacing: inherit;
        color: inherit;
        margin: 0;
        padding: 0
    }

    .home4 button {
        text-transform: none
    }

    .home4 button {
        appearance: button;
        background-color: transparent;
        background-image: none
    }

    :-moz-focusring {
        outline: auto
    }

    :-moz-ui-invalid {
        box-shadow: none
    }

    ::-webkit-inner-spin-button,::-webkit-outer-spin-button {
        height: auto
    }

    ::-webkit-search-decoration {
        appearance: none
    }

    ::-webkit-file-upload-button {
        appearance: button;
        font: inherit
    }

    .home4 h2, .home4 h3, .home4 p {
        margin: 0
    }

    .home4 ol, .home4 ul {
        list-style: none;
        margin: 0;
        padding: 0
    }

    .home4 input::placeholder, .home4 textarea::placeholder {
        opacity: 1;
        color: #9ca3af
    }

    .home4 button {
        cursor: pointer
    }

    .home4 :disabled {
        cursor: default
    }

    .home4 img, .home4 svg {
        display: block;
        vertical-align: middle;
    }

    .home4 img {
        max-width: 100%
    }

    .home4 {
        scroll-behavior: smooth;
        font-family: "TikTok Sans",sans-serif
    }

    .container-home4 {
        width: 100%
    }

    @media(min-width: 640px) {
        .container-home4 {
            max-width:640px
        }
    }

    @media(min-width: 768px) {
        .container-home4 {
            max-width:768px
        }
    }

    @media(min-width: 1024px) {
        .container-home4 {
            max-width:1024px
        }
    }

    @media(min-width: 1280px) {
        .container-home4 {
            max-width:1280px
        }
    }

    @media(min-width: 1536px) {
        .container-home4 {
            max-width:1536px
        }
    }

    .home4 a {
        outline: 0
    }

    .home4 a:hover {
        color: var(--color-primary)
    }

    .pointer-events-none {
        pointer-events: none
    }

    .absolute {
        position: absolute
    }

    .relative {
        position: relative
    }

    .sticky {
        position: sticky
    }

    .bottom-0 {
        bottom: 0px
    }

    .left-0 {
        left: 0px
    }

    .left-\[50\%\] {
        left: 50%
    }

    .right-0 {
        right: 0px
    }

    .top-0 {
        top: 0px
    }

    .top-\[49\%\] {
        top: 49%
    }

    .z-\[99\] {
        z-index: 99
    }

    .m-auto {
        margin: auto
    }

    .mb-\[32px\] {
        margin-bottom: 32px
    }

    .mt-\[-36px\] {
        margin-top: -36px
    }

    .mt-\[12px\] {
        margin-top: 12px
    }

    .mt-\[16px\] {
        margin-top: 16px
    }

    .mt-\[24px\] {
        margin-top: 24px
    }

    .mr-\[2px\] {
        margin-right: 2px
    }

    .block {
        display: block
    }

    .inline-block {
        display: inline-block
    }

    .grid {
        display: grid
    }

    .h-full {
        height: 100%
    }

    .w-full {
        width: 100%
    }

    .\!min-w-max {
        min-width: max-content !important
    }

    .flex-1 {
        flex: 1 1 0%
    }

    .translate-x-\[-50\%\] {
        --tw-translate-x: -50%
    }

    .translate-x-\[-5px\] {
        --tw-translate-x: -5px
    }

    .translate-y-\[-3px\] {
        --tw-translate-y: -3px;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .translate-y-\[-50\%\] {
        --tw-translate-y: -50%;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .translate-y-\[-1px\] {
        --tw-translate-y: -1px;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .scroll-mt-\[87px\] {
        scroll-margin-top: 87px
    }

    .grid-cols-4 {
        grid-template-columns: repeat(4,minmax(0,1fr))
    }

    .items-center {
        align-items: center
    }

    .justify-between {
        justify-content: space-between
    }

    .gap-\[12px\] {
        gap: 12px
    }

    .gap-\[2px\] {
        gap: 2px
    }

    .gap-\[36px\] {
        gap: 36px
    }

    .gap-\[48px\] {
        gap: 48px
    }

    .gap-\[20px\] {
        gap: 20px
    }

    .overflow-auto {
        overflow: auto
    }

    .overflow-hidden {
        overflow: hidden
    }

    .whitespace-nowrap {
        white-space: nowrap
    }

    .rounded-\[0_15px_0_0\] {
        border-radius: 0 15px 0 0
    }

    .rounded-\[100px\] {
        border-radius: 100px
    }

    .rounded-\[36px\] {
        border-radius: 36px
    }

    .rounded-\[8px\] {
        border-radius: 8px
    }

    .border-b {
        border-bottom-width: 1px
    }

    .border-b-\[--color-primary\] {
        border-bottom-color: var(--color-primary)
    }

    .bg-\[--color-primary\] {
        background-color: var(--color-primary)
    }

    .bg-white {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255/var(--tw-bg-opacity,1))
    }

    .bg-\[\#f8f8f8\] {
        --tw-bg-opacity: 1;
        background-color: rgb(248 248 248/var(--tw-bg-opacity,1))
    }

    .bg-cover {
        background-size: cover
    }

    .bg-no-repeat {
        background-repeat: no-repeat
    }

    .object-cover {
        object-fit: cover
    }

    .p-\[8px_20px_8px_14px\] {
        padding: 8px 20px 8px 14px
    }

    .px-\[10px\] {
        padding-left: 10px;
        padding-right: 10px
    }

    .px-\[15\%\] {
        padding-left: 15%;
        padding-right: 15%
    }

    .px-\[24px\] {
        padding-left: 24px;
        padding-right: 24px
    }

    .py-\[12px\] {
        padding-top: 12px;
        padding-bottom: 12px
    }

    .py-\[40px\] {
        padding-top: 40px;
        padding-bottom: 40px
    }

    .py-\[5px\] {
        padding-top: 5px;
        padding-bottom: 5px
    }

    .py-\[80px\] {
        padding-top: 80px;
        padding-bottom: 80px
    }

    .\!pr-\[20px\] {
        padding-right: 20px !important
    }

    .pb-\[113px\] {
        padding-bottom: 113px
    }

    .pb-\[59\%\] {
        padding-bottom: 59%
    }

    .pt-\[80px\] {
        padding-top: 80px
    }

    .text-center {
        text-align: center
    }

    .text-\[13px\] {
        font-size: 13px
    }

    .text-\[18px\] {
        font-size: 18px
    }

    .text-\[20px\] {
        font-size: 20px
    }

    .text-\[14px\] {
        font-size: 14px
    }

    .font-bold {
        font-weight: 700
    }

    .font-medium {
        font-weight: 500
    }

    .uppercase {
        text-transform: uppercase
    }

    .capitalize {
        text-transform: capitalize
    }

    .leading-\[28px\] {
        line-height: 28px
    }

    .leading-\[48px\] {
        line-height: 48px
    }

    .leading-tight {
        line-height: 1.25
    }

    .leading-\[24px\] {
        line-height: 24px
    }

    .text-\[--color-primary\] {
        color: var(--color-primary)
    }

    .text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255/var(--tw-text-opacity,1))
    }

    .shadow {
        --tw-shadow: 0 1px 3px 0 rgb(0 0 0/0.1),0 1px 2px -1px rgb(0 0 0/0.1);
        --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color),0 1px 2px -1px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow,0 0#0000),var(--tw-ring-shadow,0 0#0000),var(--tw-shadow)
    }

    .transition-all {
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4,0,0.2,1)
    }

    .duration-300 {
        transition-duration: 300ms
    }

    .duration-500 {
        transition-duration: 500ms
    }

    @theme {
        --color-primary: #f54226;
        --color-secondary: #ff7a23;
        --color-tertiary: #f44024;
        --background-page: #f5f7f9
    }

    .before\:absolute::before {
        content: var(--tw-content);
        position: absolute
    }

    .before\:bottom-\[-4\.5px\]::before {
        content: var(--tw-content);
        bottom: -4.5px
    }

    .before\:left-0::before {
        content: var(--tw-content);
        left: 0px
    }

    .before\:left-\[-4px\]::before {
        content: var(--tw-content);
        left: -4px
    }

    .before\:right-0::before {
        content: var(--tw-content);
        right: 0px
    }

    .before\:top-0::before {
        content: var(--tw-content);
        top: 0px
    }

    .before\:mt-\[-14px\]::before {
        content: var(--tw-content);
        margin-top: -14px
    }

    .before\:h-\[8px\]::before {
        content: var(--tw-content);
        height: 8px
    }

    .before\:w-\[84px\]::before {
        content: var(--tw-content);
        width: 84px
    }

    .before\:w-\[96px\]::before {
        content: var(--tw-content);
        width: 96px
    }

    .before\:w-\[8px\]::before {
        content: var(--tw-content);
        width: 8px
    }

    .before\:rounded-full::before {
        content: var(--tw-content);
        border-radius: 9999px
    }

    .before\:border-t-4::before {
        content: var(--tw-content);
        border-top-width: 4px
    }

    .before\:bg-\[\#ffbb8b\]::before {
        content: var(--tw-content);
        --tw-bg-opacity: 1;
        background-color: rgb(255 187 139/var(--tw-bg-opacity,1))
    }

    .before\:bg-contain::before {
        content: var(--tw-content);
        background-size: contain
    }

    .before\:bg-no-repeat::before {
        content: var(--tw-content);
        background-repeat: no-repeat
    }

    .after\:absolute::after {
        content: var(--tw-content);
        position: absolute
    }

    .after\:bottom-\[-4\.5px\]::after {
        content: var(--tw-content);
        bottom: -4.5px
    }

    .after\:bottom-\[-7px\]::after {
        content: var(--tw-content);
        bottom: -7px
    }

    .after\:left-\[-8px\]::after {
        content: var(--tw-content);
        left: -8px
    }

    .after\:left-\[3px\]::after {
        content: var(--tw-content);
        left: 3px
    }

    .after\:right-\[-4px\]::after {
        content: var(--tw-content);
        right: -4px
    }

    .after\:right-\[-8px\]::after {
        content: var(--tw-content);
        right: -8px
    }

    .after\:top-\[-7px\]::after {
        content: var(--tw-content);
        top: -7px
    }

    .after\:top-\[51px\]::after {
        content: var(--tw-content);
        top: 51px
    }

    .after\:h-\[14px\]::after {
        content: var(--tw-content);
        height: 14px
    }

    .after\:h-\[8px\]::after {
        content: var(--tw-content);
        height: 8px
    }

    .after\:w-\[14px\]::after {
        content: var(--tw-content);
        width: 14px
    }

    .after\:w-\[8px\]::after {
        content: var(--tw-content);
        width: 8px
    }

    .after\:rounded-full::after {
        content: var(--tw-content);
        border-radius: 9999px
    }

    .after\:bg-contain::after {
        content: var(--tw-content);
        background-size: contain
    }

    .hover\:translate-y-\[-5px\]:hover {
        --tw-translate-y: -5px;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .hover\:bg-\[\#9c2507\]:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(156 37 7/var(--tw-bg-opacity,1))
    }

    .hover\:bg-white:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255/var(--tw-bg-opacity,1))
    }

    .group:hover .group-hover\:translate-y-\[-5px\] {
        --tw-translate-y: -5px;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .group:hover .group-hover\:scale-\[1\.15\] {
        --tw-scale-x: 1.15;
        --tw-scale-y: 1.15;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .group:hover .group-hover\:fill-\[--color-primary\] {
        fill: var(--color-primary)
    }

    @media(max-width: 992px) {
        .max-\[992px\]\:fixed {
            position:fixed
        }

        .max-\[992px\]\:bottom-0 {
            bottom: 0px
        }

        .max-\[992px\]\:left-\[100\%\] {
            left: 100%
        }

        .max-\[992px\]\:top-\[87px\] {
            top: 87px
        }

        .max-\[992px\]\:mt-\[10px\] {
            margin-top: 10px
        }

        .max-\[992px\]\:block {
            display: block
        }

        .max-\[992px\]\:flex {
            display: flex
        }

        .max-\[992px\]\:w-full {
            width: 100%
        }

        .max-\[992px\]\:max-w-\[582px\] {
            max-width: 582px
        }

        .max-\[992px\]\:grid-cols-3 {
            grid-template-columns: repeat(3,minmax(0,1fr))
        }

        .max-\[992px\]\:flex-col {
            flex-direction: column
        }

        .max-\[992px\]\:items-end {
            align-items: flex-end
        }

        .max-\[992px\]\:gap-\[24px\] {
            gap: 24px
        }

        .max-\[992px\]\:bg-\[\#dedede\] {
            --tw-bg-opacity: 1;
            background-color: rgb(222 222 222/var(--tw-bg-opacity,1))
        }

        .max-\[992px\]\:p-\[24px\] {
            padding: 24px
        }

        .max-\[992px\]\:px-\[5\%\] {
            padding-left: 5%;
            padding-right: 5%
        }

        .max-\[992px\]\:py-\[60px\] {
            padding-top: 60px;
            padding-bottom: 60px
        }

        .max-\[992px\]\:pb-\[96px\] {
            padding-bottom: 96px
        }

        .max-\[992px\]\:pt-\[60px\] {
            padding-top: 60px
        }

        .max-\[992px\]\:shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0/0.1),0 1px 2px -1px rgb(0 0 0/0.1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color),0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow,0 0#0000),var(--tw-ring-shadow,0 0#0000),var(--tw-shadow)
        }
    }

    @media(max-width: 768px) {
        .max-\[768px\]\:grid-cols-2 {
            grid-template-columns:repeat(2,minmax(0,1fr))
        }
    }

    @media(max-width: 576px) {
        .max-\[576px\]\:top-\[68px\] {
            top:68px
        }

        .max-\[576px\]\:mt-\[-24px\] {
            margin-top: -24px
        }

        .max-\[576px\]\:mt-\[4px\] {
            margin-top: 4px
        }

        .max-\[576px\]\:block {
            display: block
        }

        .max-\[576px\]\:h-\[30px\] {
            height: 30px
        }

        .max-\[576px\]\:h-\[35px\] {
            height: 35px
        }

        .max-\[576px\]\:w-\[30px\] {
            width: 30px
        }

        .max-\[576px\]\:w-\[35px\] {
            width: 35px
        }

        .max-\[576px\]\:scroll-mt-\[68px\] {
            scroll-margin-top: 68px
        }

        .max-\[576px\]\:flex-col {
            flex-direction: column
        }

        .max-\[576px\]\:gap-\[10px\] {
            gap: 10px
        }

        .max-\[576px\]\:rounded-\[24px\] {
            border-radius: 24px
        }

        .max-\[576px\]\:rounded-\[4px\] {
            border-radius: 4px
        }

        .max-\[576px\]\:p-\[5px\] {
            padding: 5px
        }

        .max-\[576px\]\:px-\[5px\] {
            padding-left: 5px;
            padding-right: 5px
        }

        .max-\[576px\]\:py-\[40px\] {
            padding-top: 40px;
            padding-bottom: 40px
        }

        .max-\[576px\]\:py-\[20px\] {
            padding-top: 20px;
            padding-bottom: 20px
        }

        .max-\[576px\]\:pb-\[64px\] {
            padding-bottom: 64px
        }

        .max-\[576px\]\:pt-\[40px\] {
            padding-top: 40px
        }

        .max-\[576px\]\:text-\[11px\] {
            font-size: 11px
        }

        .max-\[576px\]\:text-\[12px\] {
            font-size: 12px
        }

        .max-\[576px\]\:text-\[18px\] {
            font-size: 18px
        }

        .before\:max-\[576px\]\:w-\[84px\]::before {
            content: var(--tw-content);
            width: 84px
        }
    }

    .\[\&\.active\]\:bg-\[linear-gradient\(90deg\2c \#f3d278_0\%\2c \#f16744_100\%\)\].active {
        background-image: linear-gradient(90deg,#f3d278 0%,#f16744 100%)
    }

    .\[\&\.active\]\:text-white.active {
        --tw-text-opacity: 1;
        color: rgb(255 255 255/var(--tw-text-opacity,1))
    }
</style>
@endpush

<div class="container-home4 home4">
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
