<!DOCTYPE html>
<html lang="vi">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title','HZDG Việt Nam')</title>

<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- Fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;500;700&display=swap" rel="stylesheet">


{{-- FLATSOME CSS --}}
<link rel="stylesheet" href="{{ asset('wp-content/themes/flatsome/assets/css/flatsome.css') }}">
<link rel="stylesheet" href="{{ asset('wp-content/themes/flatsome/assets/css/flatsome-shop.css') }}">
<link rel="stylesheet" href="{{ asset('wp-content/themes/flatsome-child/style.css') }}">


{{-- FONT AWESOME --}}
<link rel="stylesheet" href="{{ asset('wp-content/themes/flatsome-child/font-awesome-pro-6.4.0-web/css/all.css') }}">

@stack('styles')

</head>


<body>

@include('frontend.partials.header')


<main id="main">

@yield('content')

</main>


@include('frontend.partials.footer')


{{-- JQuery --}}
<script src="{{ asset('wp-includes/js/jquery/jquery.min.js') }}"></script>

{{-- Flatsome JS --}}
<script src="{{ asset('wp-content/themes/flatsome/assets/js/flatsome.js') }}"></script>

@stack('scripts')

</body>
</html>