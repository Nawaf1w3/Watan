<style>

    .about-image {
                position: relative;
                display: inline-block;
                overflow: hidden;
                max-height: 350px;
                /* border-radius: 50%; */
                transition: transform 0.3s ease;
            }
    
            .about-image img {
    
                transition: transform 0.3s ease;
            }
            /* Custom inverted rounded curve for the bottom-left corner */
            .clip-path-inverted-curve-left {
                /* clip-path: polygon(0 100%, 100% 100%, 100% 0, 0% 75%, 25% 100%); */
            }
    
            .top-left-icon{
                left: -1px;
                top: -44px;
                
            }
            .bottom-right-icon{
                right: -44px;
                bottom: -1px;
            }
            .arrow {
                transform: rotate(260deg); /* Rotate arrow to point top-right */
                stroke-width: 1.5; /* Adjust the thickness of the arrow lines */
            }
            .svg-container {
                width: 100%; /* Ensure SVG scales properly */
                height: 100%; /* Ensure SVG scales properly */
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .arrow g {
                transform: translate(5px, 5px); /* Adjust as necessary to center g element */
            }
            .arrow path {
                stroke: rgb(255, 255, 255); /* Change the color of the arrow paths */
            }
            .arrow-icon{
                top:14px;
                left:12px;
            }
            /* .arrow-icon:hover svg path {
                stroke: #2f2f2f;
            } */
            .about-image:hover img{
               
                transform: scale(1.11); 
            }
    
            .about-image:hover .circle-overlay {
                background-color: #FFCC00; /* Change background color */
            }
    
            .about-image:hover .circle-overlay svg path {
                stroke: #292929; /* Change path color */
            }
      
        </style>
    
    
    
        <x-app-layout>
        <section class="relative w-full flex  items-center justify-center  bg-cover bg-center" style="min-height:700px; background-image: url('{{ asset('images/background-admin.jpg') }}');">
            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <!-- Banner Content -->
            <div class="relative z-10 flex items-center justify-center w-full h-full">
                <div class="text-center text-white px-4 md:px-8">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome bij Watan auto huur bedrijf</h1>
                    <p class="text-lg md:text-xl mb-8">Huur premium auto's, Voor betaalbare prijzen.</p>
                    <a href="#" class="bg-yellow-500 text-black py-2 px-6 rounded-lg text-lg font-semibold hover:bg-yellow-600">Meer weten</a>
                </div>
            </div>
        </section>

        <section class="relative flex flex-wrap items-center justify-center w-full bg-black min-h-[700px] overflow-hidden">
            <div class="w-full md:flex justify-center px-4">
                <!-- Left Side: Search and Categories -->
                <div class="bg-gg rounded-lg shadow-lg md:w-1/3 lg:w-1/5 p-6 mb-6 md:mb-0">
                    <!-- Search Widget -->
                    <div class="rounded-t-lg mb-6 p-6 bg-gold">
                        <form role="search" method="get" class="flex items-center" action="#">
                            <input type="text" class="w-full p-2 border border-gray-300 rounded-l-lg focus:outline-none" placeholder="Search products…" name="s">
                            <input type="hidden" name="post_type" value="product">
                        </form>
                    </div>
        
                    <!-- Categories Widget -->
                    <div class="mb-6">
                        <h6 class="text-lg font-semibold mb-4 text-white">Categories</h6>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <span class="w-3 h-3 mr-2 rounded-full border border-gold bg-gg"></span>
                                <a href="#" class="text-gray-400 hover:text-gold">Convertible</a>
                            </li>
                            <li class="flex items-center">
                                <span class="w-3 h-3 mr-2 rounded-full border border-gold bg-gg"></span>
                                <a href="#" class="text-gray-400 hover:text-gold">Luxury Cars</a>
                            </li>
                        </ul>
                    </div>
        
                    <!-- Pickup Locations Widget -->
                    <div class="mb-6">
                        <h6 class="text-lg font-semibold text-white mb-4">Pickup Locations</h6>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <span class="w-3 h-3 mr-2 rounded-full border border-gold bg-gg"></span>
                                <a href="#" class="text-gray-400 hover:text-gold">Abu Dhabi</a>
                            </li>
                        </ul>
                    </div>
        
                    <!-- Dropoff Locations Widget -->
                    <div class="text-white">
                        <h6 class="text-lg font-semibold mb-4">Dropoff Locations</h6>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <span class="w-3 h-3 mr-2 rounded-full border border-gold bg-gg"></span>
                                <a href="#" class="text-gray-400 hover:text-gold">Abu Dhabi</a>
                            </li>
                        </ul>
                    </div>
                </div>
        

                <!-- Right Side: Text and Images -->
                <div class="w-full lg:w-1/2 md:w-2/3 flex flex-col justify-center items-center md:items-start">
                    <ul class="flex flex-wrap gap-6 p-4 lg:flex-nowrap lg:gap-6">
                        <!-- List Item 1 -->
                        <li class="relative bg-gg text-white rounded-lg overflow-hidden w-full md:w-1/2 lg:w-1/2">
                            <!-- Image Section -->
                            <div class="relative overflow-hidden rounded-t-lg">
                                <img class="w-full h-64 object-cover" src="{{ asset('images/background-admin.jpg') }}" alt="Car Image">
                            </div>
                            <!-- Information Section -->
                            <div class="p-4 bg-gg text-white">
                                <h4 class="text-xl font-bold mb-2">
                                    <a href="#" class="text-white hover:underline">
                                        Bentley Continental
                                    </a>
                                </h4>
                                <div class="mb-2">
                                    <div class="flex items-center mb-1">
                                        <i class="omfi-door mr-2"></i>
                                        <span>Doors:</span>
                                        <p class="ml-2">4</p>
                                    </div>
                                    <div class="flex items-center mb-1">
                                        <i class="omfi-passengers mr-2"></i>
                                        <span>Passengers:</span>
                                        <p class="ml-2">5</p>
                                    </div>
                                    <div class="flex items-center mb-1">
                                        <i class="omfi-transmission mr-2"></i>
                                        <span>Transmission:</span>
                                        <p class="ml-2">Auto</p>
                                    </div>
                                    <div class="flex items-center mb-1">
                                        <i class="omfi-luggage mr-2"></i>
                                        <span>Luggage:</span>
                                        <p class="ml-2">2 Bags</p>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-4">
                                    <div class="text-lg font-bold">
                                        <span>$500</span> / day
                                    </div>
                                    <a href="#" class="bg-white text-black py-2 px-4 rounded-lg hover:bg-gray-200">
                                        Book
                                    </a>
                                </div>
                            </div>
                        </li>
                    
                        <!-- List Item 2 (Repeat the above structure for more items) -->
                        <li class="relative bg-gg text-white rounded-lg overflow-hidden w-full md:w-1/2 lg:w-1/2">
                            <!-- Image Section -->
                            <div class="relative overflow-hidden rounded-t-lg">
                                <img class="w-full h-64 object-cover" src="{{ asset('images/background-nav.jpg') }}" alt="Car Image">
                            </div>
                            <!-- Information Section -->
                            <div class="p-4 bg-gg text-white">
                                <h4 class="text-xl font-bold mb-2">
                                    <a href="#" class="text-white hover:underline">
                                        Bentley Continental
                                    </a>
                                </h4>
                                <div class="mb-2">
                                    <div class="flex items-center mb-1">
                                        <i class="omfi-door mr-2"></i>
                                        <span>Doors:</span>
                                        <p class="ml-2">4</p>
                                    </div>
                                    <div class="flex items-center mb-1">
                                        <i class="omfi-passengers mr-2"></i>
                                        <span>Passengers:</span>
                                        <p class="ml-2">5</p>
                                    </div>
                                    <div class="flex items-center mb-1">
                                        <i class="omfi-transmission mr-2"></i>
                                        <span>Transmission:</span>
                                        <p class="ml-2">Auto</p>
                                    </div>
                                    <div class="flex items-center mb-1">
                                        <i class="omfi-luggage mr-2"></i>
                                        <span>Luggage:</span>
                                        <p class="ml-2">2 Bags</p>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-4">
                                    <div class="text-lg font-bold">
                                        <span>$500</span> / day
                                    </div>
                                    <a href="#" class="bg-white text-black py-2 px-4 rounded-lg hover:bg-gray-200">
                                        Book
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    
                    
                </div>


            </div>
        </section>
        
    </x-app-layout>
    