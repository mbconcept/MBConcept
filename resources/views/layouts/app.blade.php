<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/svg+xml" href="{{ Vite::asset('resources/images/logo-fin.svg') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        </style>
        <title>@yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="preload" href="{{ Vite::asset('resources/images/bg-desktop.jpg') }}" as="image">
        <link rel="preload" href="{{ Vite::asset('resources/images/bg-mobile.jpg') }}" as="image" media="(max-width: 767px)">
    </head>
    <body>
        @if(session('success') || session('error'))
            <div id="flash-message" class="flash-message @if(session('success')) flash-message-success @else flash-message-error @endif">
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
