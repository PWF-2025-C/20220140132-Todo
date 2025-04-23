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

        <!-- Scripts & Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-blue-950 text-gray-100">

        <div class="min-h-screen flex flex-col">
            <!-- Navigation -->
            @include('layouts.navigation')

            <!-- Page Header -->
            @isset($header)
    <header class="bg-blue-100 border-b border-blue-300 shadow-sm">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold text-blue-900">{{ $header }}</h1>
        </div>
    </header>
@endisset

<!-- Page Content -->
<main class="flex-1 px-6 py-10 sm:px-10 bg-white text-blue-900 shadow-md rounded-md">
    {{ $slot }}
</main>


            <!-- Footer -->
            <footer class="bg-blue-100 text-center text-sm text-blue-200 py-4 mt-auto border-t border-blue-700">
                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </footer>
        </div>

    </body>
</html>
