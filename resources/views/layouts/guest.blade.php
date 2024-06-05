<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col pt-6 sm:pt-0 bg-gray-100">
        <nav class="flex items-center justify-between bg-white shadow-sm px-4 sm:px-6 py-4">
            <a href="{{ url('/') }}" class="text-lg font-medium text-gray-900">Laravel</a>
            <div class="flex items-center space-x-4">
                <a href="{{ url('/') }}" class="text-gray-900">Welcome</a>
                <a href="{{ url('/about') }}" class="text-gray-900">About</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-gray-900">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-900">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-gray-900">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </nav>

        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
