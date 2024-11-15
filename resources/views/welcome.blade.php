<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-100 dark:bg-gray-900">
        <div class="min-h-screen flex flex-col items-center justify-center">
            <div class="text-center">
                <h1 class="text-5xl font-bold text-gray-800 dark:text-white mb-4">Welcome to Laravel</h1>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">A PHP Framework for Web Artisans</p>
                @if (Route::has('login'))
                    <div class="space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-700">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-700">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>