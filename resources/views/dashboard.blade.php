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
        <div class=" rounded-xl about-image relative overflow-hidden">
            <!-- Image with inverted curved bottom-left corner -->
            <img class=" rounded-xl" src="https://webredox.net/demo/wp/renax/wp-content/uploads/2024/04/about.jpg" alt="Curved Image" class="right" style="max-height:400px;">
            <div class=" absolute bottom-0 left-0 w-24 h-28 bg-gg rounded-tr-xl text-center">
                <div class="circle-overlay relative arrow-icon w-16 h-16 flex items-center justify-center border border-gold rounded-full bg-gg hover:bg-gold">
                    <svg class="arrow w-10 h-10 absolute" viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" fill-rule="evenodd" stroke="#000000" stroke-linecap="round" stroke-linejoin="round">
                            <path file="red" d="m8.5 1.5v7h-7"/>
                            <path d="m.5.5 8 8"/>
                        </g>
                    </svg>
                </div>
                <div class="absolute top-left-icon text-gg w-11 h-11 rotate-270">
                    <svg  viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" >
                        <path  d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="rgb(28, 28, 28)"></path>
                    </svg>
                </div>
                <div class="absolute bottom-right-icon text-gg w-11 h-11 rotate-270">
                    <svg  viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path  d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z" fill="rgb(28, 28, 28)"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
