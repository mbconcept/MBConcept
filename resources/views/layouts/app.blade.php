<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="@yield('description', "Spécialiste de la rénovation tous corps d'état pour professionnels et particuliers.")">
        <meta property="og:title" content="@yield('title') | MB CONCEPT - Rénovation Bâtiment">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:description" content="@yield('description', "Spécialiste de la rénovation tous corps d'état pour professionnels et particuliers.")">
        <meta property="og:image" content="{{ Vite::asset('resources/images/logo-carré-v2.png') }}">
        <meta property="og:type" content="website">
        <meta name="twitter:card" content="summary_large_image">
        <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/logo-carré-v2.png') }}">
        <link rel="apple-touch-icon" href="{{ Vite::asset('resources/images/logo-carré-v2.png') }}">
        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "Organization",
          "name": "MB CONCEPT",
          "url": "{{ url('/') }}",
          "logo": "{{ Vite::asset('resources/images/logo-carré-v2.png') }}"
        }
        </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        </style>
        <title>@yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="preload" href="{{ Vite::asset('resources/images/bg-desktop.webp') }}" as="image">
        <link rel="preload" href="{{ Vite::asset('resources/images/bg-mobile.webp') }}" as="image" media="(max-width: 767px)">
    </head>
    <body>
        @if(session('success') || session('error'))
            <div id="flash-message" class="flash-message {{ session('success') ? 'flash-message-success' : 'flash-message-error' }}">
                {{ session('success') ?? session('error') }}
            </div>
        @endif

        @include('includes.header')

        <main>
            @yield('content')
        </main>

        @include('includes.footer')
    </body>
</html>
