<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<style>
       #loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #fff; /* Change this to your desired background color */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000; /* Ensures loader is on top */
            background-color: black;
        }
</style>
<head>
    {{-- hi --}}
    {{-- hi --}}
    {{-- hi --}}
    {{-- hi --}}
    {{-- hi --}}
    {{-- hi --}}
    {{-- hi --}}
    {{-- hi --}}
    {{-- hi --}}
    {{-- hi --}}
    {{-- hi --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
      
        <div id="loader">
            <img src="{{ asset('gifs/speed.gif') }}" alt="Loading...">
        </div>
    
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <div class="min-h-screen bg-gg">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <div class="pl-10 bg-black-dark">
            <div class="bg-black-dark py-12">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-evenly">
                        <div class="w-full md:w-1/3 mb-8 md:mb-0">
                            <h2 class="text-white text-2xl font-bold mb-4">CONTACT</h2>
                            <ul>
                                <li class="mb-4">
                                    <a href="tel:+31624136771" target="_blank" class="flex items-center text-white">
                                        <svg width="27" height="27" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mr-3">
                                            <circle cx="256" cy="256" r="256" class="fill-blue-600" />
                                            <path d="M384,308.928c-27.616,0-53.952-6.016-78.24-17.888c-3.808-1.824-8.224-2.112-12.256-0.736
                                            c-4.032,1.408-7.328,4.352-9.184,8.16l-11.52,23.84c-34.56-19.84-63.232-48.544-83.104-83.104l23.872-11.52
                                            c3.84-1.856,6.752-5.152,8.16-9.184c1.376-4.032,1.12-8.448-0.736-12.256c-11.904-24.256-17.92-50.592-17.92-78.24
                                            c0-8.832-7.168-16-16-16H128c-8.832,0-16,7.168-16,16c0,149.984,122.016,272,272,272c8.832,0,16-7.168,16-16v-59.072
                                            C400,316.096,392.832,308.928,384,308.928z" class="fill-white" />
                                        </svg>
                                        TN 06-24136771
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="mailto:info@watan.nl" target="_blank" class="flex items-center text-white">
                                        <svg height="35" width="35" xmlns="http://www.w3.org/2000/svg" class="mr-3  rounded">
                                            <path fill="white" d="m31.348 13.8a15.5 15.5 0 0 0 -30.721 4.215 15.614 15.614 0 0 0 13.31 13.351 16.058 16.058 0 0 0 2.08.136 15.351 15.351 0 0 0 7.972-2.217 1.5 1.5 0 0 0 -1.548-2.57 12.5 12.5 0 1 1 -4.789-23.109 12.5 12.5 0 0 1 10.162 16.488 2.166 2.166 0 0 1 -2.079 1.406 2.238 2.238 0 0 1 -2.235-2.235v-9.265a1.5 1.5 0 0 0 -3 0v.014a7.5 7.5 0 1 0 .541 11.523 5.224 5.224 0 0 0 4.694 2.963 5.167 5.167 0 0 0 4.914-3.424 15.535 15.535 0 0 0 .699-7.276zm-15.348 6.7a4.5 4.5 0 1 1 4.5-4.5 4.505 4.505 0 0 1 -4.5 4.5z"></path>
                                        </svg>
                                        info@watan.nl
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="https://maps.app.goo.gl/xJRFc7W8r2VQWFtP8" target="_blank" class="flex items-center text-white">
                                        <svg height="25" width="25" xmlns="http://www.w3.org/2000/svg" class="mr-3 rounded">
                                            <path fill="white" d="m12 0c-4.962 0-9 4.066-9 9.065 0 7.103 8.154 14.437 8.501 14.745.143.127.321.19.499.19s.356-.063.499-.189c.347-.309 8.501-7.643 8.501-14.746 0-4.999-4.038-9.065-9-9.065zm0 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z"></path>
                                        </svg>
                                        Tappersweg 3, 2031 ET Haarlem
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="https://wa.me/+31611169596" target="_blank" class="flex items-center text-white">
                                            <svg height="25" viewBox="-23 -21 682 682.66669" width="25" xmlns="http://www.w3.org/2000/svg" id="fi_1384023" class="mr-3 rounded">
                                                <path  fill="green" d="m544.386719 93.007812c-59.875-59.945312-139.503907-92.9726558-224.335938-93.007812-174.804687 0-317.070312 142.261719-317.140625 317.113281-.023437 55.894531 14.578125 110.457031 42.332032 158.550781l-44.992188 164.335938 168.121094-44.101562c46.324218 25.269531 98.476562 38.585937 151.550781 38.601562h.132813c174.785156 0 317.066406-142.273438 317.132812-317.132812.035156-84.742188-32.921875-164.417969-92.800781-224.359376zm-224.335938 487.933594h-.109375c-47.296875-.019531-93.683594-12.730468-134.160156-36.742187l-9.621094-5.714844-99.765625 26.171875 26.628907-97.269531-6.269532-9.972657c-26.386718-41.96875-40.320312-90.476562-40.296875-140.28125.054688-145.332031 118.304688-263.570312 263.699219-263.570312 70.40625.023438 136.589844 27.476562 186.355469 77.300781s77.15625 116.050781 77.132812 186.484375c-.0625 145.34375-118.304687 263.59375-263.59375 263.59375zm144.585938-197.417968c-7.921875-3.96875-46.882813-23.132813-54.148438-25.78125-7.257812-2.644532-12.546875-3.960938-17.824219 3.96875-5.285156 7.929687-20.46875 25.78125-25.09375 31.066406-4.625 5.289062-9.242187 5.953125-17.167968 1.984375-7.925782-3.964844-33.457032-12.335938-63.726563-39.332031-23.554687-21.011719-39.457031-46.960938-44.082031-54.890626-4.617188-7.9375-.039062-11.8125 3.476562-16.171874 8.578126-10.652344 17.167969-21.820313 19.808594-27.105469 2.644532-5.289063 1.320313-9.917969-.664062-13.882813-1.976563-3.964844-17.824219-42.96875-24.425782-58.839844-6.4375-15.445312-12.964843-13.359374-17.832031-13.601562-4.617187-.230469-9.902343-.277344-15.1875-.277344-5.28125 0-13.867187 1.980469-21.132812 9.917969-7.261719 7.933594-27.730469 27.101563-27.730469 66.105469s28.394531 76.683594 32.355469 81.972656c3.960937 5.289062 55.878906 85.328125 135.367187 119.648438 18.90625 8.171874 33.664063 13.042968 45.175782 16.695312 18.984374 6.03125 36.253906 5.179688 49.910156 3.140625 15.226562-2.277344 46.878906-19.171875 53.488281-37.679687 6.601563-18.511719 6.601563-34.375 4.617187-37.683594-1.976562-3.304688-7.261718-5.285156-15.183593-9.253906zm0 0" fill-rule="evenodd">
                                                </path>
                                            </svg>
                                        WhatsApp +31624136771
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full md:w-1/6 mb-8 md:mb-0">
                            <h2 class="text-white text-2xl font-bold mb-4">SITE MENUE</h2>
                            <ul class="flex flex-wrap">
                                <li class="w-1/2 mb-4">
                                    <a href="{{route('dashboard')}}" class="block  text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gold md:p-0 text-white md:dark:hover:text-gold dark:hover:text-gold" aria-current="page">Home</a>
                                </li>
                                <li class="w-1/2 mb-4">
                                    <a href="#" class="block  text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gold md:p-0 text-white md:dark:hover:text-gold dark:hover:text-gold">About</a>
                                </li>
                                <li class="w-1/2 mb-4">
                                    <a href="#" class="block  text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gold md:p-0 text-white md:dark:hover:text-gold dark:hover:text-gold">Services</a>
                                </li>
                                <li class="w-1/2 mb-4">
                                    <a href="#" class="block  text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gold md:p-0 text-white md:dark:hover:text-gold dark:hover:text-gold">Contact</a>
                                </li>
                                <li class="relative group w-full ">
                                    <button class="flex items-center text-white rounded-lg focus:outline-none ">
                                        Cars
                                        <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <!-- Dropdown Menu -->
                                    <ul class="absolute left-0 mt-2 w-48 bg-gg border border-gg rounded-lg shadow-lg z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <li class="">
                                            <a href="{{route('private.list')}}" class="block hover:text-gold px-4 py-2 text-white transition-transform duration-300 hover:animate-move-right">Private</a>
                                        </li>
                                        <li class="">
                                            <a href="{{route('taxi.list')}}" class="block hover:text-gold px-4 py-2 text-white transition-transform duration-300 hover:animate-move-right">Taxi</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="w-full md:w-1/6 mb-8 md:mb-0">
                            <h2 class="text-white text-2xl font-bold mb-4">Bezorging/Ophalen of inlever gebieden</h2>
                            <ul class="flex flex-wrap">
                                <li class="w-1/2 mb-4">
                                    <p class="block  text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 text-white " aria-current="page">Amsterdam</p>
                                </li>
                                <li class="w-1/2 mb-4">
                                    <p class="block  text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 text-white " aria-current="page">Harlem</p>

                                </li>
                                <li class="w-1/2 mb-4">
                                    <p class="block  text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 text-white " aria-current="page">Leiden</p>
                                </li>
                                <li class="w-1/2 mb-4">
                                    <p class="block  text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 text-white " aria-current="page">Zandaam</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gg pt-2 pb-2">
            <div class="pb-2 ">
                <div class="flex justify-evenly items-center text-gray-500">
                <div class="flex">
                    <p class="text-gold">Watan Bedrijf</p> 
                    | KVK nr: 324234234 | BTW nr: Nl1111111111122
                </div>
            
                    <div class="text-right">
                        <p class="text-gray-500">Ontwikeld bij <a href="https://nawaf.nl" class="text-gold"> Nawaf Alkhalaf</a></p>
                    </div>
                </div>
          
            </div>
        </div>
        <script>
          window.addEventListener('load', function () {
            document.getElementById('loader').style.display = 'none';
            document.getElementById('content').style.display = 'block';
        });
        </script>
    </body>
</html>
