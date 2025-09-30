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
    <body class="flex items-center  font-sans text-zinc-900 antialiased bg-zinc-100 min-h-screen">
        
        <div class="w-full min-h-screen h-full bg-gradient-to-tr from-indigo-600 to-rose-600">
            <p class="text-6xl text-white p-5">
                Belanja lebih cepat lebih murah hanya di BelanjaKu
            </p>
        </div>
        
        <div class="flex flex-col sm:justify-center items-center w-full pt-6 sm:pt-0 ">
            <div>
                <a href="/">
                    <x-application-logo class="text-3xl md:text-4xl lg:text-6xl xl:text-8xl h-32" />
                </a>
            </div>

            <div class="w-full max-w-lg py-4">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
