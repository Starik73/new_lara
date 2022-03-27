<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Astashenkov.ru, сайт о программировании и мире IT, Асташенков Алексей Ульяновск HTML CSS JavaScript PHP LARAVEL +79021290036' }}</title>
    <meta content="{{ $description ?? 'Astashenkov.ru, сайт о программировании и мире IT, Асташенков Алексей Ульяновск HTML CSS JavaScript PHP LARAVEL +79021290036' }}" name="description">
    <meta content="{{ $keywords ?? 'Astashenkov.ru, сайт о программировании и мире IT, Асташенков Алексей Ульяновск HTML CSS JavaScript PHP LARAVEL +79021290036' }}" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    {{-- <!-- Google Fonts --> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/opensans/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/raleway/stylesheet.css') }}">
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>

<body>
    @include('frontend.site.components.header')
    {{-- Flash --}}
    <div class="container">
        <div class="col-md-4 offset-md-8">
            <div class="absolute mt-5">
                {{-- @include('components.flash-message') --}}
            </div>
        </div>
    </div>
    {{-- Main --}}
    <main id="main">
        {{ $slot }}
    </main>
    <!-- End #main -->
    @include('frontend.site.components.footer')
    <!-- Vendor JS Files -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}" defer></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}" defer></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}" defer></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}" defer></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}" defer></script>
    <script src="{{ asset('js/lazysizes.min.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    {{-- <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}" defer></xscript> --}}
</body>

</html>
