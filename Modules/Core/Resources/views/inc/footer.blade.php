<footer class="bg-blue-800 xs:px-2 md:px-8 pt-5 space-y-3">
    <div class="grid xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-6 p-3 gap-y-7 gap-x-12 xs:mb-3 border-b border-blue-600 text-blue-300">
        <div class="xs:mx-0 h-80 xs:row-span-2 md:col-span-2 order-last">
            <div class="w-full h-80 rounded border">
                <div id="googlemaps-canvas" class="h-80 w-full max-w-full">
                    <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                            src="https://www.google.com/maps/embed/v1/place?q=Faith+in+Christ+College+ilaro&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
                    </iframe>
                </div>
            </div>         
        </div>

        <div class="flex flex-col md:mx-auto xs:mx-0">
            <div class="flex mb-5 items-center space-x-4">
                <div class="flex flex-col space-y-4">
                    <div class="flex flex-col space-y-3">
                        <h4 class="text-lg font-mono font-bold text-blue-100">
                            Contact
                            <hr class="border-pink-700 border mt-2 w-1/2">
                        </h4>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center space-x-2">
                            <img src="{{ asset('storage/images/svg/phone.svg') }}" class="h-4 w-4">
                            <span class="text-sm font-mono font-bold text-blue-300">
                                Phone
                            </span>
                        </div>
                       <div class="flex flex-col">
                            <a href="tel:+2348068885591" target="_blank" class="text-xs py-1 hover:text-blue-100 font-bold font-mono uppercase transition duration-300">
                                Principal : +234 806 888 5591 
                            </a>
                            <a href="tel:+2348060089898" target="_blank" class="text-xs py-1 hover:text-blue-100 font-bold font-mono uppercase transition duration-300">
                                Proprietress : +234 806 008 9898  
                            </a>
                       </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center space-x-2">
                            <img src="{{ asset('storage/images/svg/whatsapp.svg') }}" class="h-4 w-4">
                            <span class="text-sm font-mono font-bold text-blue-300">
                                Whatsapp
                            </span>
                        </div>
                       <div class="flex flex-col">
                            <a href="https://wa.me/2348068885591" target="_blank" class="text-xs py-1 hover:text-blue-100 font-bold font-mono uppercase transition duration-300">
                                Whatsapp 1: 08068885591
                            </a>
                            <a href="https://wa.me/2348177558888" target="_blank" class="text-xs py-1 hover:text-blue-100 font-bold font-mono uppercase transition duration-300">
                                Whatsapp 2: 08177558888
                            </a>
                       </div>
                    </div>

                    <div class="flex flex-col">
                        <div class="flex items-center space-x-2">
                            <img src="{{ asset('storage/images/svg/mail.svg') }}" class="h-4 w-4">
                            <span class="text-sm font-mono font-bold text-blue-300">
                                E-mail
                            </span>
                        </div>
                       <div class="flex">
                            <a href="mailto:faithinchristcollegeilaro@gmail.com" target="_blank" class="text-xs py-1 hover:text-blue-100 font-bold font-mono uppercase transition duration-300">
                                faithinchristcollegeilaro@gmail.com
                            </a>
                       </div>
                    </div>

                    <div class="flex flex-col">
                        <h4 class="text-lg font-mono font-bold text-blue-100 mb-2">
                            <div class="flex space-x-2 items-center">
                                <span>Location</span> 
                                <img src="{{ asset('storage/images/svg/location-marker-1.svg') }}" class="h-4 w-4" alt="location_marker">
                            </div>
                            <hr class="border-pink-700 border mt-2 w-1/2">
                        </h4>
                        <small class="text-xs py-1 hover:text-blue-100 font-bold font-mono uppercase transition duration-300 cursor-pointer">
                            Opposite Jimtex block Industry, Oke Ola, Ilaro, Ogun State, Nigeria.
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:mb-0 md:mx-auto xs:mx-0">
            <h4 class="text-lg font-mono font-bold text-blue-100 mb-4">
                Legal
                <hr class="border-pink-700 border mt-2 w-1/2">
            </h4>
            <a href="{{ route('policy') }}"
               class="py-1 hover:text-blue-100 font-bold font-mono uppercase transition duration-300 text-xs">
                Privacy Policy
            </a>
            <a href="{{ route('terms') }}"
               class="py-1 hover:text-blue-100 font-bold font-mono uppercase transition duration-300 text-xs">
                Terms &amp; Conditions
            </a>
            <a href="{{ route('helpdesk') }}"
               class="py-1 hover:text-blue-100 font-bold font-mono uppercase transition duration-300 text-xs">
                Helpdesk
            </a>
        </div>

        <div class="flex flex-col md:mb-0 md:mx-auto xs:mx-0">
            <h4 class="text-lg font-mono font-bold text-blue-100 mb-4">
                Academics
                <hr class="border-pink-700 border mt-2 w-1/2">
            </h4>
            <a href="{{ route('admission.index') }}"
               class="py-1 hover:text-blue-100 font-bold font-mono uppercase transition duration-300 text-xs">
               Academics options on this column
            </a>
        </div>

        <div class="flex flex-col xs:justify-center md:justify-start xs:items-center md:items-start space-y-5 md:mb-0 md:mx-auto xs:mx-0 order-first">
            <img src="{{ asset('/storage/images/png/college-logo.png') }}" alt="school logo" class="w-32">
            
            <div class="flex flex-col space-y-2">
                <a href="#" class="text-xs py-1 hover:text-blue-100 font-bold font-mono uppercase transition duration-300">
                    Faith in Christ College
                </a>
                <a href="#" class="text-xs py-1 hover:text-blue-100 font-bold font-mono uppercase transition duration-300">
                    Faith in Christ Nur/Pry (Oke ola, ilaro)
                </a>
                <a href="#" class="text-xs py-1 hover:text-blue-100 font-bold font-mono uppercase transition duration-300">
                    Faith in Christ Nur/Pry (Oja-odan)
                </a>
            </div>

            {{-- <div class="flex flex-col">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('storage/images/svg/location-marker-1.svg') }}" class="h-4 w-4" alt="location_marker">
                    <span class="text-sm font-mono font-bold text-blue-300">
                        Address:
                    </span>
                </div>
                <div class="text-xs py-1 hover:text-blue-100 font-bold font-mono uppercase transition duration-300 cursor-pointer">
                    Opposite Jimtex block Industry, Oke Ola, Ilaro, Ogun State, Nigeria.
               </div>
            </div> --}}
        </div>
    </div>

    
    <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 justify-between p-3 text-blue-300 uppercase items-center">
        <p class="text-xs font-semibold font-mono">
            {{ config('app.name') }} | &copy; {{ date("Y") }}.
        </p>

        <div class="flex items-center space-x-2">
            <p class="text-sm font-mono font-bold text-blue-300">
                Follow us:
            </p>
            <div class="flex space-x-2">
                <a href="https://facebook.com/" class="rounded-full p-1 bg-blue-100 text-pink-700 hover:text-pink-100 hover:bg-blue-800 font-sans text-xs flex justify-center items-center transition duration-300 ease-in">
                    <img src="{{ asset('storage/images/svg/facebook-1.svg') }}" class="h-4 w-4">
                </a>
                <a href="https://instagram.com/" class="rounded-full p-1 bg-blue-100 text-pink-700 hover:text-pink-100 hover:bg-blue-800 font-sans text-xs flex justify-center items-center transition duration-300 ease-in">
                    <img src="{{ asset('storage/images/svg/instagram-1.svg') }}" class="h-4 w-4">
                </a>
                <a href="https://twitter.com/" class="rounded-full p-1 bg-blue-100 text-pink-700 hover:text-pink-100 hover:bg-blue-800 font-sans text-xs flex justify-center items-center transition duration-300 ease-in">
                    <img src="{{ asset('storage/images/svg/twitter-1.svg') }}" class="h-4 w-4">
                </a>
                <a href="https://linkedin.com/" class="rounded-full p-1 bg-blue-100 text-pink-700 hover:text-pink-100 hover:bg-blue-800 font-sans text-xs flex justify-center items-center transition duration-300 ease-in">
                    <img src="{{ asset('storage/images/svg/linkedin-3.svg') }}" class="h-4 w-4">
                </a>
            </div>
        </div>
    </div>
</footer>
