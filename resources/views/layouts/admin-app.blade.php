<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @vite('resources/css/app.css') <!-- Vite loading CSS -->
    @vite('resources/js/app.js') <!-- Vite loading JS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" href="{{ url()->current() }}" hreflang="{{app()->getLocale()}}">
    <title>{{ config('app.name', 'Seafood Shop') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset("images/icons/favicon.ico") }}" type="image/x-icon">
    @livewireStyles
</head>
<body class="min-h-screen flex flex-col bg-broken-white-color">
    @livewireScripts

    @auth
        <header class="z-10">
            @livewire('sidebar')
        </header>
    @endauth

    <main class="flex-grow container mx-auto z-0 mt-24">
        @yield('content')
    </main>

</body>
</html>