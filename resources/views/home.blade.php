<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rapidez</title>
    <meta name="description" content="Headless Magento - with Laravel, Vue and Reactive Search">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#27ae60">
    <meta name="msapplication-TileColor" content="#27ae60">
    <meta name="theme-color" content="#27ae60">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body x-data="{solutions_menu:false, mobile_menu:false}" class="min-h-screen flex flex-col flex-1 font-body overflow-x-hidden antialiased">
    <div class="overflow-x-hidden">
        @include('partials.nav')
        @include('partials.hero')
        @include('partials.logos')
        @include('partials.features')
        @include('partials.seperator-logo')
        @include('partials.faq')
        @include('partials.seperator-clouds')
        @include('partials.call-to-action')
        @include('partials.footer')
    </div>
</body>
</html>
