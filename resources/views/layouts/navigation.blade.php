<nav class="bg-black-dark sticky top-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/dashboard" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo.jpg') }}" class="h-16" alt="Watan Logo" />
        </a>

        <!-- Mobile Menu Button -->
        <button id="menu-button" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-500 rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="#FFD700" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        

        <!-- Navigation Menu -->
        <div id="navbar-menu" class="hidden w-full md:block md:w-auto">
            <ul class="bg-gg border-gg p-4 md:p-0 mt-4 md:mt-0 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:bg-transparent md:border-transparent font-medium flex flex-col">
                <li>
                    <a href="{{route('home')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gold md:p-0 text-white md:dark:hover:text-gold dark:hover:text-gold" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gold md:p-0 text-white md:dark:hover:text-gold dark:hover:text-gold">About</a>
                </li>
                <li>
                    <a href="{{route('services')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gold md:p-0 text-white md:dark:hover:text-gold dark:hover:text-gold">Services</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gold md:p-0 text-white md:dark:hover:text-gold dark:hover:text-gold">Contact</a>
                </li>
                    @auth
                        @if (auth()->user()->isAdmin())
                            <li>
                                <a href="{{ url('/admin') }}" class="text-white hover:text-yellow-400">Admin Panel</a>
                            </li>
                        @endif
                    @endauth   
                {{-- <li>
                    <a href="{{route('admin.list')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gold md:p-0 text-white md:dark:hover:text-gold dark:hover:text-gold">Admin</a>
                </li> --}}
                <!-- Dropdown Button -->
                <li class="relative group">
                    <button class="flex items-center text-white rounded-lg  focus:outline-none pl-2">
                        Cars
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
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
         
                <!-- Dropdown Button as List Item -->
            </ul>
        </div>
        
         <!-- User Dropdown -->
         @if(Auth::check())
            <div class="relative">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-white rounded-lg focus:outline-none pl-2">
                            <!-- Display user name if it is not null -->
                            {{ Auth::user()->name ?? 'User' }}
                            
                            <svg class="fill-current h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>
        
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">{{ __('Profile') }}</x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        @else
            <a href="/login" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gold md:p-0 text-white md:dark:hover:text-gold dark:hover:text-gold">
                Login
            </a>
        @endif
     
    </div>
</nav>




  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const menuButton = document.getElementById('menu-button');
      const navbarMenu = document.getElementById('navbar-menu');
    
      menuButton.addEventListener('click', function () {
        const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
        
        menuButton.setAttribute('aria-expanded', !isExpanded);
        navbarMenu.classList.toggle('hidden');
      });
    });
    </script>
    