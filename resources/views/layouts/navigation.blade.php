<nav class="bg-black  ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/dashboard" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo.jpg') }}" class="h-16" alt="Watan Logo" />
        </a>

        <!-- Mobile Menu Button -->
        <button id="menu-button" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="#FFD700" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        

        <!-- Navigation Menu -->
        <div id="navbar-menu" class="hidden w-full md:block md:w-auto">
            <ul class="bg-gg border-gg p-4 md:p-0 mt-4 md:mt-0 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:bg-transparent md:border-transparent font-medium flex flex-col">
                <li>
                    <a href="/dashboard" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gold md:p-0 dark:text-white md:dark:hover:text-gold dark:hover:text-gold" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gold md:p-0 dark:text-white md:dark:hover:text-gold dark:hover:text-gold">About</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gold md:p-0 dark:text-white md:dark:hover:text-gold dark:hover:text-gold">Services</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gold md:p-0 dark:text-white md:dark:hover:text-gold dark:hover:text-gold">Pricing</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gold md:p-0 dark:text-white md:dark:hover:text-gold dark:hover:text-gold">Contact</a>
                </li>     
                <li>
                    <a href="/admin" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gold md:p-0 dark:text-white md:dark:hover:text-gold dark:hover:text-gold">Admin</a>
                </li>
                <!-- Dropdown Button as List Item -->
     
            </ul>
        </div>
         <!-- User Dropdown -->
        <div class="relative">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div class="text-gray-900 hover:text-gray-700">{{ Auth::user()->name }}</div>
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
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
    