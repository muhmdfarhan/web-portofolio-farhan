<!DOCTYPE html>
<html lang="id" data-theme="light">

<head>
    {{-- META TAGS UTAMA --}}
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Portofolio Profesional Muhamad Farhan — Fresh Graduate Sistem Informasi & Fullstack Web Developer (Laravel, PHP, MySQL)')">
    <meta name="author" content="Muhamad Farhan">
    <meta name="keywords" content="Muhamad Farhan, Farhan Web Developer, Fullstack Developer, Laravel Developer, Fresh Graduate Sistem Informasi, PHP Developer Indonesia, Web Developer Padang">

    {{-- OPEN GRAPH META TAGS (Preview Berbagi Link di WhatsApp / LinkedIn / Twitter) --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Muhamad Farhan — Fullstack Developer | Web Developer')">
    <meta property="og:description" content="@yield('meta_description', 'Portofolio Muhamad Farhan - Fresh Graduate Sistem Informasi & Fullstack Web Developer')">
    <meta property="og:image" content="{{ asset('images/profile.jpg') }}">

    {{-- TWITTER CARD --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Muhamad Farhan — Fullstack Developer | Web Developer')">
    <meta name="twitter:description" content="@yield('meta_description', 'Portofolio Muhamad Farhan - Fresh Graduate Sistem Informasi')">
    <meta name="twitter:image" content="{{ asset('images/profile.jpg') }}">

    {{-- TITLE --}}
    <title>@yield('title', 'Muhamad Farhan — Fullstack Developer | Web Developer')</title>

    {{-- FAVICON --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    {{-- GOOGLE FONTS — Plus Jakarta Sans & JetBrains Mono --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

    {{-- FONT AWESOME ICONS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    {{-- MAIN CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('styles')
</head>

<body>

    {{-- ELEGANT NAVBAR WITH THEME SWITCHER --}}
    @include('layouts.navbar')

    {{-- MAIN CONTENT --}}
    <main id="main-content">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('layouts.footer')

    {{-- BACK TO TOP BUTTON --}}
    <button class="back-to-top" id="backToTop" aria-label="Kembali ke atas" title="Kembali ke atas">
        <i class="fas fa-arrow-up"></i>
    </button>

    {{-- TOAST NOTIFICATION CONTAINER --}}
    <div class="toast-container" id="toastContainer"></div>

    {{-- MAIN JAVASCRIPT --}}
    <script src="{{ asset('js/script.js') }}"></script>

    @stack('scripts')

</body>
</html>
