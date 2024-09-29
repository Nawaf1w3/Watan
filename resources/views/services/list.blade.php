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
            .curved-image {
                transition: transform 0.3s ease; /* Smooth transition */
                }
            .opacity-custom{
                opacity: 1;
            }
            .image-div {
                position: relative;
                overflow: hidden;
                /* Set the initial size and dimensions of the div */
                /* width: 400px;
                height: 300px; */
            }
            .image-div:hover .curved-image {
                transform: scale(1.1); /* Scale the svg on hover */
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
    
    
        <section class="relative flex flex-wrap w-full overflow-hidden content-center items-center justify-center bg-black" style="min-height:700px;">
            <div class="pb-12 text-center md:w-1/2 pt-10">
                <h1 class="text-3xl font-bold text-gold">
                    Onze Diensten en Meer
                </h1>
                <p class="text-white text-[1.10rem] leading-[1.20rem] md:text-[1.25rem] md:leading-[1.75rem]">
                    Bij [Bedrijfsnaam] gaan we verder dan alleen autoverhuur. Wij bieden een breed scala aan diensten die uw reiservaring naar een hoger niveau tillen. Of u nu op zoek bent naar een luxe voertuig, een betrouwbare stadsauto, of extra opties zoals GPS en kinderzitjes, wij hebben alles wat u nodig heeft. Kies voor gemak, flexibiliteit en een ongeëvenaarde klantenservice. Ontdek onze uitgebreide mogelijkheden en ervaar het verschil!
                </p>
            </div>
            
            <div class="w-full flex flex-wrap md:flex-nowrap items-center justify-center md:justify-evenly bg-black">
                <a class="pb-10 " href="{{route('private.list')}}">
                    <div class="md:w-auto md:p-0 right rounded-tl-lg rounded-tr-lg  about-image relative overflow-hidden bg-black-dark">
                        <div class="image-div md:w-auto md:p-0 right rounded-tl-lg about-image relative overflow-hidden">
                            <!-- Image with inverted curved bottom-left corner -->
                            <div class="curved-image rounded-tl-lg rounded-tr-lg rounded-br-lg w-full md:max-w-none">
                                <svg id="fi_10049513" enable-background="new 0 0 347.455 293.036" class="w-[350px] h-[200px] md:w-[300px] md:h-[200px] lg:w-[500px] lg:h-[300px]"  viewBox="0 0 347.455 293.036"  xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="gold" d="m105.919 263.49h9.29v19.656c0 5.131 4.149 9.283 9.295 9.283h18.564c5.14 0 9.298-4.152 9.298-9.283v-19.656h148.641v19.656c0 5.131 4.152 9.283 9.288 9.283h18.574c5.14 0 9.297-4.152 9.297-9.283v-19.656h9.289v-26.797h-241.536z"></path>
                                        <path fill="gold" d="m303.056 179.592c-25.491-3.255-56.705-6.501-79.363-6.499-34.021-.006-87.213 7.31-111.615 10.971-2.333.35-4.393.664-6.158.937v46.537h241.536v-45.588c-1.764-.284-6.066-.97-12.187-1.887-8.137-1.221-19.464-2.846-32.213-4.471zm-161.551 41.601c-8.653 0-15.657-7.008-15.657-15.654 0-8.648 7.004-15.658 15.657-15.658 8.64 0 15.653 7.01 15.653 15.658 0 8.647-7.013 15.654-15.653 15.654zm170.364 0c-8.64 0-15.649-7.008-15.649-15.654 0-8.648 7.01-15.658 15.649-15.658 8.653 0 15.655 7.01 15.655 15.658.001 8.647-7.001 15.654-15.655 15.654z"></path>
                                        <path fill="gold" d="m223.693 169.093c20.162.004 46.722 2.514 70.198 5.331l18.869-79.36-2.073-21.564h-92.148c-.212 10.167-6.893 18.991-16.563 21.978.064.647.097 1.299.097 1.955 0 1.735-.232 3.43-.666 5.052 4.257 2.887 6.849 7.717 6.849 12.905 0 4.126-1.621 7.871-4.245 10.664 4.643 2.704 7.778 7.725 7.778 13.475 0 .03-.004.059-.005.089 1.502-.619 3.144-.966 4.865-.966 7.057 0 12.8 5.74 12.8 12.797 0 7.059-5.743 12.801-12.8 12.801-6.52 0-11.906-4.903-12.691-11.214-2.29 1.322-4.938 2.091-7.767 2.091-8.601 0-15.598-6.998-15.598-15.598 0-4.126 1.621-7.872 4.246-10.664-4.357-2.538-7.388-7.113-7.742-12.422-8.327-2.307-14.46-9.955-14.46-19.01 0-7.223 3.966-13.716 9.991-17.149-.187-.572-.349-1.155-.491-1.742-.517.033-1.035.051-1.557.051-5.344 0-10.464-1.857-14.564-5.092h-13.33l-9.808 102h-4.018l3.794-39.449-16.242 43.328c26.147-3.833 74.939-10.281 107.281-10.287zm50.784-20.336-19.225 9.803-.479-.664 15.009-9.861-6.436-3.791 15.319-12.012 2.221 2.816-13.248 9.012zm-12.121-34.783-8.297 17.025 9.769.805-13.962 21.35-.883-.402 9.607-18.934-8.827-.109 8.66-21.318zm-26.474 5.328-.128 15.773 7.633-2.898-2.838 21.059-.803.012.428-17.678-6.677 3.083-1.144-19.132z"></path>
                                        <path fill="gold" d="m320.494 175.499-6.748-70.179-16.526 69.508c16.165 1.984 30.611 4.066 40.107 5.501l-16.612-44.329 3.799 39.499z"></path>
                                        <circle fill="gold" cx="196.19" cy="139.526" r="10.597"></circle><circle fill="gold" cx="216.648" cy="151.448" r="7.8"></circle>
                                        <path fill="gold" d="m213.095 68.929c7.953-1.539 14.581-6.796 17.993-13.895.896.197 1.825.308 2.781.308 6.384 0 11.676-4.624 12.743-10.702.129-.732.208-1.482.208-2.251 0-7.152-5.799-12.951-12.951-12.951-5.306 0-9.86 3.192-11.862 7.759.659-3.756 2.932-6.945 6.08-8.842-4.637-5.84-11.793-9.588-19.829-9.588-3.88 0-7.556.876-10.843 2.437-2.975-6.098-9.217-10.31-16.458-10.31-.497 0-.985.035-1.472.074-9.432.752-16.853 8.627-16.853 18.249 0 9.624 7.421 17.497 16.853 18.249-.487.039-.976.074-1.473.074-6.727 0-12.591-3.635-15.777-9.037-6.046 3.056-10.199 9.308-10.199 16.544 0 3.423.943 6.618 2.561 9.371 3.223 5.481 9.165 9.173 15.984 9.173 8.573 0 15.767-5.826 17.89-13.729.438.548.896 1.076 1.377 1.585-1.496 6.715-6.628 12.041-13.226 13.832.346 2.824 1.325 5.448 2.795 7.732-6.721 1.362-11.779 7.302-11.779 14.423 0 8.129 6.589 14.719 14.718 14.719.073 0 .143-.01.218-.011-.33 1.024-.513 2.114-.513 3.248 0 5.853 4.745 10.597 10.597 10.597 5.854 0 10.598-4.744 10.598-10.597 0-3.979-2.197-7.443-5.442-9.255-2.692 3.476-6.894 5.723-11.631 5.723-.247 0-.488-.025-.732-.037 6.643-1.422 11.624-7.32 11.624-14.387 0-2.111-.452-4.113-1.252-5.928 1.275-.055 2.514-.236 3.71-.537 8.054-2.021 14.026-9.287 14.026-17.967-.001-1.401-.17-2.761-.464-4.073z"></path>
                                        <circle fill="gold" cx="204.432" cy="7.359" r="7.358"></circle><circle fill="gold" cx="233.426" cy="10.45" r="10.45"></circle>
                                        <ellipse fill="gold" cx="60.49" cy="83.065" rx="22.493" ry="22.495" transform="matrix(.227 -.974 .974 .227 -34.13 123.139)"></ellipse>
                                        <path fill="gold" d="m21.901 116.158c1.625-2.185 4.006-3.607 6.702-4.001.493-.073.994-.11 1.492-.11 5.008 0 9.341 3.743 10.076 8.708.043.243.093.5.168.854.227 1.07.523 2.254.878 3.511.578 2.052 1.517 4.994 2.93 8.597.391-1.92.766-3.764 1.108-5.512 2.869-9.953-.885-21.865-9.42-23.992-8.537-2.129-20.912 2.508-25.947 17.15-6.805 20.174-8.268 33.305-5.682 55.52 2.112 10.871 7.83 15.151 14.142 16.752 2.546 8.388 5.723 22.193 5.7 38.758-.004 13.217-1.979 28.171-7.764 43.799-2.398 6.475.906 13.667 7.382 16.064 1.43.529 2.896.78 4.337.78 5.08 0 9.858-3.119 11.725-8.162 6.956-18.783 9.323-36.778 9.32-52.481-.032-25.047-5.912-44.313-9.09-52.938-.472-3.529-.63-7.182-.579-10.876-16.712-25.986-19.363-44.632-19.395-44.886-.388-2.66.29-5.348 1.917-7.535z"></path>
                                        <path fill="gold" d="m44.363 139.895c-2.731-6.051-4.343-10.908-5.264-14.177-.46-1.632-.746-2.868-.913-3.658-.082-.393-.136-.675-.164-.84-.013-.068-.021-.115-.025-.143-.648-4.366-4.706-7.386-9.074-6.743-4.371.641-7.396 4.703-6.754 9.074h-.002c.159 1.226 5.523 35.244 43.873 75.127 1.569 1.635 3.667 2.457 5.767 2.457 1.994 0 3.991-.741 5.543-2.231 3.187-3.062 3.288-8.125.226-11.313-17.843-18.566-27.752-35.45-33.213-47.553z"></path>
                                        <path fill="gold" d="m3.95 72.708c.506-.104 1.1-.477 1.77-1.119.672-.644.979-1.43.922-2.364l-.055-1.319c-.063-.314-.491-.629-1.283-.941-.793-.313-1.422-.422-1.891-.326-.713.141-1.297.688-1.752 1.64-.449.948-.613 1.739-.486 2.372.338 1.677 1.262 2.361 2.775 2.057z"></path>
                                        <path fill="gold" d="m1.601 62.431c.869.412 1.99.478 3.366.203.292-.831.35-1.738.183-2.719-.232-1.297-.278-3.085-.135-5.359.131-2.187.227-4.566.286-7.148.063-2.58.052-4.063-.025-4.445-.096-.48-.438-.877-1.022-1.18-.582-.303-1.148-.401-1.699-.293-.508.105-1.074.492-1.698 1.16-.622.668-.905 1.516-.849 2.543.059 1.023.1 1.613.131 1.767.305 1.524.432 3.888.377 7.087-.036 2.95.325 5.751 1.085 8.384z"></path>
                                        <path fill="gold" d="m20.515 65.681c-.764-.331-1.373-.453-1.813-.365-.63.127-1.097.371-1.394.73-.103.139-.243.294-.423.474-.947.976-1.356 1.781-1.231 2.414.154.769.584 1.352 1.274 1.739.693.389 1.475.5 2.339.325.825-.167 1.653-.652 2.483-1.46.834-.801 1.166-1.632.992-2.481-.216-1.087-.96-1.545-2.227-1.376z"></path>
                                        <path fill="gold" d="m13.746 42.145c-.612 1.105-.846 2.021-.7 2.749.242 1.209.998 1.687 2.262 1.434 1.943-.391 2.873-1.215 2.806-2.475-.003-.373.222-.797.677-1.273.453-.48 1.424-.866 2.91-1.166.506-.104 1.035-.125 1.574-.061.541.063.925.174 1.139.338.221.166.519.622.892 1.378.374.756.606 1.365.699 1.832.134.659.104 1.36-.087 2.099-.196.742-.514 1.264-.954 1.564l-2.564 1.655c-1.62 1.042-2.711 1.788-3.273 2.247-.557.453-1.15 1.076-1.779 1.861-.494 1.871-.785 3.107-.873 3.704-.086.595-.065 1.22.065 1.864.121.605.35 1.162.683 1.676.333.512.69.731 1.075.65 1.18-.236 1.983-.578 2.412-1.021.424-.441.633-1.035.627-1.777.003-1.4.098-2.623.272-3.657 3.209-1.891 5.313-3.206 6.31-3.944.991-.736 1.773-1.836 2.336-3.303.564-1.465.64-3.223.225-5.268l-.002-.021c-.4-1.853-.895-3.169-1.48-3.952-.589-.784-1.734-1.525-3.432-2.226-1.037-.449-2.317-.486-3.844-.107-.791.189-1.584.371-2.379.543-1.136.258-2.152.807-3.059 1.647l.019-.005c-1.09.91-1.942 1.912-2.557 3.015z"></path>
                                    </g>
                                </svg>
                            </div>
                            <!-- Shadow Gradient with Text -->
                            <div class="absolute bottom-0 right-0 w-full h-full pointer-events-none">
                                <div class="relative text-right h-full w-full bg-gradient-to-b from-transparent via-transparent to-black flex items-end justify-end p-4 opacity-custom">
                                    <div class="text-right ml-24"> <!-- Added margin-left to shift it right -->
                                        <h1 class="text-gold text-xl font-bold">Pechhulp</h1>
                                        <p class="text-white font-bold">waar en wanneer u het nodig heeft. Wij zorgen ervoor dat u veilig en snel weer op weg kunt.</p>
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
                <a class="pb-10" href="{{route('private.list')}}">
                    <div class="md:w-auto md:p-0 right rounded-tl-lg rounded-tr-lg  about-image relative overflow-hidden bg-black-dark">
                        <div class="image-div md:w-auto md:p-0 right rounded-tl-lg about-image relative overflow-hidden">
                            <!-- Image with inverted curved bottom-left corner -->
                            <div class="curved-image rounded-tl-lg rounded-tr-lg rounded-br-lg w-full md:max-w-none">
                                <svg id="fi_11823575" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" class="w-[350px] h-[200px] md:w-[300px] md:h-[200px] lg:w-[500px] lg:h-[300px]" >
                                    <path fill="gold" d="m51.613 12-3.105-9.316c-.137-.409-.519-.684-.949-.684h-25.117c-.431 0-.812.275-.949.684l-3.105 9.316h33.226z"></path>
                                    <path fill="gold" d="m18 22h-2c0 1.103.897 2 2 2h2c0-1.103-.897-2-2-2z"></path>
                                    <path fill="gold" d="m15 10h-2c-.552 0-1 .449-1 1s.448 1 1 1h3v-1c0-.551-.448-1-1-1z"></path>
                                    <path fill="gold" d="m57 10h-2c-.552 0-1 .449-1 1v1h3c.552 0 1-.449 1-1s-.448-1-1-1z"></path>
                                    <path fill="gold" d="m50 24h2c1.103 0 2-.897 2-2h-2c-1.103 0-2 .897-2 2z"></path>
                                    <path fill="gold" d="m13.105 16.065c-.682.341-1.105 1.026-1.105 1.789v10.146c0 .551.448 1 1 1h10v-2c0-1.103.897-2 2-2h20c1.103 0 2 .897 2 2v2h10c.552 0 1-.449 1-1v-10.146c0-.762-.424-1.448-1.105-1.789l-4.131-2.065h-35.528zm6.895 9.935h-2c-2.206 0-4-1.794-4-4 0-1.103.897-2 2-2h2c2.206 0 4 1.794 4 4 0 1.103-.897 2-2 2zm24-3h-18c-.553 0-1-.448-1-1s.447-1 1-1h18c.553 0 1 .448 1 1s-.447 1-1 1zm12-1c0 2.206-1.794 4-4 4h-2c-1.103 0-2-.897-2-2 0-2.206 1.794-4 4-4h2c1.103 0 2 .897 2 2zm-2-6c.553 0 1 .448 1 1s-.447 1-1 1h-38c-.553 0-1-.448-1-1s.447-1 1-1z"></path>
                                    <path fill="gold" d="m2 58h13.542l3.533-3.533c.241-.24.585-.341.923-.27l16.514 3.643c1.289.319 2.624.152 3.78-.459l16.936-9.174c.66-.35.944-1.138.669-1.837-.274-.699-1.013-1.059-1.707-.845l-16.842 5.567c-.484.151-1 .138-1.463-.033l-7.525-2.785c-1.066-.395-1.68-1.49-1.46-2.604l.434-2.206c.18-.918.885-1.627 1.795-1.804l6.383-1.125c.614-.141 1.043-.819.908-1.504-.117-.6-.636-1.031-1.222-1.031-.023 0-.048 0-.071.002l-11.543.732c-.86.052-1.701.316-2.436.765l-21.148 12.081z"></path>
                                    <path fill="gold" d="m50 33c0 .552.448 1 1 1h4c.552 0 1-.448 1-1v-2h-6z"></path>
                                    <path fill="gold" d="m25 27h20v2h-20z"></path>
                                    <path fill="gold" d="m19 34c.552 0 1-.448 1-1v-2h-6v2c0 .552.448 1 1 1z"></path>
                                </svg>
                            </div>
                            <!-- Shadow Gradient with Text -->
                            <div class="absolute bottom-0 right-0 w-full h-full pointer-events-none">
                                <div class="relative text-right h-full w-full bg-gradient-to-b from-transparent via-transparent to-black flex items-end justify-end p-4 opacity-custom">
                                    <div class="text-right ml-24"> <!-- Added margin-left to shift it right -->
                                        <h1 class="text-gold text-xl font-bold">Autobezorging en Ophalen</h1>
                                        <p class="text-white font-bold">Gemakkelijke bezorgen en ophalen van uw auto.</p>
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
                <a class="pb-10" href="{{route('private.list')}}">
                    <div class="md:w-auto md:p-0 right rounded-tl-lg rounded-tr-lg  about-image relative overflow-hidden bg-black-dark">
                        <div class="image-div md:w-auto md:p-0 right rounded-tl-lg about-image relative overflow-hidden">
                            <!-- Image with inverted curved bottom-left corner -->
                            <div class="curved-image rounded-tl-lg rounded-tr-lg rounded-br-lg w-full md:max-w-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[350px] h-[200px] md:w-[500px] md:h-[300px] lg:w-[500px] lg:h-[300px]" viewBox="0 0 64 64" id="fi_14422400">
                                    <g id="line_cp">
                                        <path fill="gold"  d="M32,18a1,1,0,0,0,1-1V7a1,1,0,0,0-2,0V17A1,1,0,0,0,32,18Z"></path>
                                        <circle fill="gold"  cx="32" cy="21" r="1"></circle>
                                        <path fill="gold"  d="M8,25h6a1,1,0,0,0,0-2H8a3,3,0,0,0-3,3V48a3,3,0,0,0,3,3h5a1,1,0,0,0,0-2H8a1,1,0,0,1-1-1V26A1,1,0,0,1,8,25Z"></path>
                                        <path fill="gold"  d="M57,18H55.249a5.148,5.148,0,0,0-.62.039l-5.753.719a1,1,0,0,0,.248,1.984l5.752-.719A3.112,3.112,0,0,1,55.249,20H57a3,3,0,0,1,3,3V51a3,3,0,0,1-3,3H55.249a3.083,3.083,0,0,1-.372-.023L42.628,52.445A3,3,0,0,1,40,49.469V46h2.774c1.679,3.769,4.346,6,7.226,6,5.047,0,9-6.589,9-15s-3.953-15-9-15a1,1,0,0,0,0,2,5.142,5.142,0,0,1,3.919,2.306A6.39,6.39,0,0,0,52,26a5.44,5.44,0,0,0-4.054,2H31.863a12.934,12.934,0,0,0-12.425,9.177L14.877,52H7a3,3,0,0,1-3-3V25a3,3,0,0,1,3-3h9.828a2.985,2.985,0,0,0,2.816,4H44.356a3,3,0,0,0,2.532-4.611L35.917,4.15a4.643,4.643,0,0,0-7.834,0L18,20H7a5.006,5.006,0,0,0-5,5V49a5.006,5.006,0,0,0,5,5h7.893a2.99,2.99,0,0,0,.4.782A2.957,2.957,0,0,0,16.679,55.8l-1.628,4.884A1,1,0,0,0,16,62h5a1,1,0,0,0,.949-.684l1.774-5.322a2.982,2.982,0,0,0,2.709-1.88L26.477,54H31a5.009,5.009,0,0,0,4.9-4h2.15a4.994,4.994,0,0,0,4.331,4.43l12.249,1.531a5.148,5.148,0,0,0,.62.039H57a5.006,5.006,0,0,0,5-5V23A5.006,5.006,0,0,0,57,18ZM29.77,5.225a2.642,2.642,0,0,1,4.46,0L45.2,22.463A1,1,0,0,1,44.356,24H19.644a1,1,0,0,1-.844-1.537ZM38,48H36V46h2Zm12,2c-1.871,0-3.677-1.475-5-4h2.947A5.44,5.44,0,0,0,52,48a6.39,6.39,0,0,0,1.919-.306A5.142,5.142,0,0,1,50,50Zm6.2-18.925a22.261,22.261,0,0,1,0,11.85A4.414,4.414,0,0,1,52,46a3.168,3.168,0,0,1-2-.783A3,3,0,0,0,50.816,44H52a3,3,0,0,0,3-3V33a3,3,0,0,0-3-3H50.816A3,3,0,0,0,50,28.783,3.168,3.168,0,0,1,52,28,4.414,4.414,0,0,1,56.2,31.075ZM52,32a1,1,0,0,1,1,1v8a1,1,0,0,1-1,1H51V32ZM20.279,60H17.387l1.334-4h2.892Zm3.367-6H17.708a1,1,0,0,1-.956-1.294l4.6-14.941A10.944,10.944,0,0,1,31.863,30H48a1,1,0,0,1,1,1V43a1,1,0,0,1-1,1H34.417a8.956,8.956,0,0,0-8.357,5.658l-1.485,3.713A1,1,0,0,1,23.646,54ZM31,52H27.277l.64-1.6A6.954,6.954,0,0,1,31,46.9V48a1,1,0,0,1-1,1,1,1,0,0,0,0,2,3,3,0,0,0,3-3V46.16a7.028,7.028,0,0,1,1-.129V49A3,3,0,0,1,31,52Z"></path><path d="M35,38h2l-1.8,2.4a1,1,0,1,0,1.6,1.2l3-4A1,1,0,0,0,39,36H37l1.8-2.4a1,1,0,0,0-1.6-1.2l-3,4A1,1,0,0,0,35,38Z"></path>
                                    </g>
                                </svg>
                            </div>
                            <!-- Shadow Gradient with Text -->
                            <div class="absolute bottom-0 right-0 w-full h-full pointer-events-none">
                                <div class="relative text-right h-full w-full bg-gradient-to-b from-transparent via-transparent to-black flex items-end justify-end p-4 opacity-custom">
                                    <div class="text-right ml-24"> <!-- Added margin-left to shift it right -->
                                        <h1 class="text-gold text-xl font-bold">autolader</h1>
                                        <p class="text-white font-bold">Snelle en betrouwbare oplaadservice voor elektrische voertuigen</p>
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
            </div>
        </section>
    </x-app-layout>
    