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
        @media (min-width: 768px) {
            .top-left-icon{
                left: -1px;
                top: -44px;
            
            }
            .bottom-right-icon{
                right: -44px;
                bottom: -1px;
            }
        }
        @media (max-width: 768px) {
            .top-left-icon{
                left: -1px;
                top: -44px;
                
            }
            .bottom-right-icon{
                right: -44px;
                bottom: -1px;
            }
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
            background-color: #f5b754; /* Change background color */
        }

        .about-image:hover .circle-overlay svg path {
            stroke: #292929; /* Change path color */
        }

        .curved-image{
            max-height:400px;
            max-width: 400px;
        }
        .opacity-custom{
            opacity: 1;
        }
  
    </style>



    <x-app-layout>
    <section class="relative w-full flex  items-center justify-center  bg-cover bg-center" style="min-height:700px; background-image: url('{{ asset('images/background-nav.jpg') }}');">
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


    <section class="relative w-full flex  items-center justify-center bg-gg" style="min-height:700px;');">

        <div class="bg-gg flex-col justify-between items-start py-4 px-6 bg-black text-gold space-y-4">
            <h1 class="text-3xl sm-700:text-2xl font-bold">Over onze</h1>
            <p class="text-xl sm-700:text-base text-white">Welkom bij Watan,<br> uw betrouwbare partner voor autoverhuur.</p>
        
            <div class="text-white">
                <div class="flex items-center space-x-2 sm-700:space-x-1">
                    <span class="sm-700:text-sm-0.7rem sm-700:leading-sm-1.0rem">Privéauto's</span>
                    <svg class="w-6 h-6 sm-700:w-5 sm-700:h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <div class="flex items-center space-x-2 sm-700:space-x-1">
                    <span class="sm-700:text-sm-0.7rem sm-700:leading-sm-1.0rem">Taxiauto's</span>
                    <svg class="w-6 h-6 sm-700:w-5 sm-700:h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>
        
            <button class="bg-gold text-gg font-semibold py-2 px-4 sm-700:py-1 sm-700:px-2 rounded-md hover:bg-yellow-600">
                Ontdek meer
            </button>
        </div>
        
        
        
        
        
        <div class="flex flex-wrap md:flex-nowrap items-center justify-center md:justify-evenly bg-gg">
            <div class="md:w-auto  md:p-0 right rounded-tl-lg rounded-tr-lg rounded-br-lg about-image relative overflow-hidden">
                <div class=" image-div-about md:w-auto  md:p-0 right rounded-tl-lg rounded-tr-lg rounded-br-lg about-image relative overflow-hidden">
                    <!-- Image with inverted curved bottom-left corner -->
                    <img class="rounded-tl-lg curved-image rounded-tr-lg rounded-br-lg w-full md:max-w-none" src="https://webredox.net/demo/wp/renax/wp-content/uploads/2024/04/about.jpg" alt="Curved Image" >
                </div>
                <div class="absolute bottom-0 left-0 w-24 h-28 bg-gg rounded-tr-3xl text-center">
                    <div class="circle-overlay relative arrow-icon w-16 h-16 flex items-center justify-center border border-gold rounded-full bg-gg hover:bg-gold">
                        <svg class="arrow w-10 h-10 absolute" viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd" stroke="#000000" stroke-linecap="round" stroke-linejoin="round">
                                <path file="red" d="m8.5 1.5v7h-7"/>
                                <path d="m.5.5 8 8"/>
                            </g>
                        </svg>
                    </div>
                    <div class="absolute top-left-icon text-black w-11 h-11 rotate-270">
                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#222"></path>
                        </svg>
                    </div>
                    <div class="absolute bottom-right-icon text-black w-11 h-11 rotate-270">
                        <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#222"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative flex flex-wrap w-full overflow-hidden content-center items-center justify-center bg-black" style="min-height:700px;">
        <div class="pb-12 text-center">
            <h1 class="text-3xl font-bold text-white">
                Zoek de perfecte auto
            </h1>
            <p class="text-xl text-gold">
                in ons aanbod van beschikbare auto's.
            </p>
        </div>
        
        <div class="w-full flex flex-wrap md:flex-nowrap items-center justify-center md:justify-evenly bg-black">
            <a href="{{route('private.list')}}">
                <div class="md:w-auto md:p-0 right rounded-tl-lg rounded-tr-lg  about-image relative overflow-hidden">
                    <div class="image-div md:w-auto md:p-0 right rounded-tl-lg about-image relative overflow-hidden">
                        <!-- Image with inverted curved bottom-left corner -->
                        <img class="curved-image rounded-tl-lg rounded-tr-lg w-full md:max-w-none" src="{{ asset('images/private-car.jpg') }}" alt="Curved Image">
                        <!-- Shadow Gradient with Text -->
                        <div class="absolute bottom-0 right-0 w-full h-full pointer-events-none">
                            <div class="relative text-right h-full w-full bg-gradient-to-b from-transparent via-transparent to-black flex items-end justify-end p-4 opacity-custom">
                                <div class="text-right">
                                    <h1 class="text-gold text-xl font-bold">Privéauto</h1>
                                    <p class="text-white font-bold"> de perfecte Privéauto auto voor uw reis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            
             
            
                    <!-- SVGs and Icons -->
                    <div class="absolute bottom-0 left-0 w-24 h-28 bg-black rounded-tr-3xl text-center">
                        <div class="circle-overlay relative arrow-icon w-16 h-16 flex items-center justify-center border border-gold rounded-full bg-black hover:bg-gold">
                            <svg class="arrow w-10 h-10 absolute" viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" fill-rule="evenodd" stroke="#000000" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m8.5 1.5v7h-7" />
                                    <path d="m.5.5 8 8" />
                                </g>
                            </svg>
                        </div>
                        <div class="absolute top-left-icon text-black w-11 h-11 rotate-270">
                            <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                            </svg>
                        </div>
                        <div class="absolute bottom-right-icon text-black w-11 h-11 rotate-270">
                            <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
            
            
            <!-- Repeat for the other two items with the same structure -->
            <a href="{{route('taxi.list')}}">

                <div class="md:w-auto p-6 md:p-0 right rounded-tl-lg rounded-tr-lg rounded-br-lg about-image relative overflow-hidden">
                    <div class=" image-div md:w-auto  md:p-0 right rounded-tl-lg rounded-tr-lg rounded-br-lg about-image relative overflow-hidden">
                        <!-- Image with inverted curved bottom-left corner -->
                        <img class="curved-image rounded-tl-lg rounded-tr-lg rounded-br-lg w-full md:max-w-none" src="{{asset('images/taxi-car.jpg')}}" alt="Curved Image" >
                        <div class="absolute bottom-0 right-0 w-full h-full pointer-events-none">
                            <div class="relative text-right h-full w-full bg-gradient-to-b from-transparent via-transparent to-black flex items-end justify-end p-4 opacity-custom">
                                <div class="text-right">
                                    <h1 class="text-gold text-xl font-bold">Taxi</h1>
                                    <p class="text-white font-bold"> de perfecte Taxi auto voor uw werk.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-24 h-28 bg-black rounded-tr-3xl text-center">
                        <div class="circle-overlay relative arrow-icon w-16 h-16 flex items-center justify-center border border-gold rounded-full bg-black hover:bg-gold">
                            <svg class="arrow w-10 h-10 absolute" viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" fill-rule="evenodd" stroke="#000000" stroke-linecap="round" stroke-linejoin="round">
                                    <path file="red" d="m8.5 1.5v7h-7"/>
                                    <path d="m.5.5 8 8"/>
                                </g>
                            </svg>
                        </div>
                        <div class="absolute top-left-icon text-black w-11 h-11 rotate-270">
                            <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                            </svg>
                        </div>
                        <div class="absolute bottom-right-icon text-black w-11 h-11 rotate-270">
                            <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="#1b1b1b"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>
</x-app-layout>
