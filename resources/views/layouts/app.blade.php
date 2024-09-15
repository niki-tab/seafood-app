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
    <header>
        <x-header />
    </header>

    <main class="flex-grow container mx-auto">
        @yield('content')
    </main>

    <footer>
        <x-footer />
    </footer>
    @livewireScripts
</body>
</html>