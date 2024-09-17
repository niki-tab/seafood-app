<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @vite('resources/css/app.css') <!-- Vite loading CSS -->
    @vite('resources/js/app.js') <!-- Vite loading JS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Seafood Shop') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    @livewireStyles
</head>
<body class="min-h-screen flex flex-col">
    <header class="z-10">
        <x-header-desktop/>
        <x-header-mobile/>
    </header>

    <main class="flex-grow container mx-auto z-0 mt-24">
        @yield('content')
    </main>

    <footer>
        <x-footer-desktop />
        <x-footer-mobile />
    </footer>
    @livewireScripts
</body>
</html>