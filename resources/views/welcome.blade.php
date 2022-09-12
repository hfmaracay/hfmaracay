<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon-96x96.png') }}" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="border border-red-600">
            <h2>Solid</h2>
            <i class="fa-solid fa-house"></i> - <i class="fa-solid fa-user"></i> - <i class="fa-solid fa-phone"></i>
        </div>

        <div class="border border-blue-600">
            <h2>Brands</h2>
            <i class="fa-brands fa-facebook"></i> - <i class="fa-brands fa-twitter"></i>
        </div>

        <div class="border border-green-600">
            <h2>Regular</h2>
            <i class="fa-regular fa-star"></i> - <i class="fa-regular fa-image"></i> - <i class="fa-regular fa-heart"></i>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>
</html>
