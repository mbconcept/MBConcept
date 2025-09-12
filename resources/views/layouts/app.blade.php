<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/svg+xml" href="{{ Vite::asset('resources/images/logo.svg') }}">
        <title>@yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex-body">
        @include('includes.header')

        <main class="flex-main">
            @yield('content')
        </main>

        @include('includes.footer')
    </body>
</html>
