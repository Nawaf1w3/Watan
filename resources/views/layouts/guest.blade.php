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
    <body class="font-sans  text-gray-900 antialiased">
        <div class="bg-black-dark min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
            <div class="justify-center items-center flex">
                    <div class="justifay-center items-center flex w-1/6 h-1/6">
                        <a href="/">
                            <img src="{{asset('images/logo.jpg')}}" alt="">
                        </a>
                    </div>
            </div>
            <div class="bg-gg w-full sm:max-w-md mt-6 px-6 py-4  shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
