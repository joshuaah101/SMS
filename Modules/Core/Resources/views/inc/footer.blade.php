<footer class="bg-purple-900 px-8 pt-5">
    <div class="grid md:grid-cols-4 xs:grid-cols-2 p-3 text-purple-300 md:mb-5">
        <div class="flex flex-col mb-12 md:mb-0">
            <h4 class="border-b-2 border-purple-700 w-1/3 pb-2 font-bold text-purple-300 mb-4">Legal</h4>
            <a href="{{ route('policy') }}"
               class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">Privacy
                Policy</a>
            <a href="{{ route('terms') }}"
               class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">Terms
                &amp; Conditions</a>
        </div>
        <div class="flex flex-col mb-12 md:mb-0">
            <h4 class="border-b-2 border-purple-700 w-1/3 pb-2 font-bold text-purple-300 mb-4">Academics</h4>
            <a href="{{ route('admission.index') }}"
               class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">Admissions</a>
            <a href="{{ route('portal') }}"
               class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">Portal</a>
            <a href="{{ route('helpdesk') }}"
               class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">Helpdesk</a>
        </div>
        <div class="flex flex-col mb-12 md:mb-0">
            <h4 class="border-b-2 border-purple-700 w-1/3 pb-2 font-bold text-purple-300 mb-4">Schools</h4>
            <a href="#" class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">Faith
                in Christ College</a>
            <a href="#" class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">Faith
                in Christ Nur/Pry (Oke ola, ilaro)</a>
            <a href="#" class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">Faith
                in Christ Nur/Pry (Oja-odan)</a>
        </div>
        <div class="flex flex-col mb-12 md:mb-0">
            <h4 class="border-b-2 border-purple-700 w-1/3 pb-2 font-bold text-purple-300 mb-4">Find us</h4>
{{--            <a href="#" target="_blank" class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">School Location </a>--}}

            {{--            For map location, you can either use the embedded style or the paid version of using longitude latitude--}}
            <div style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:500px;height:100px;"><div id="googlemaps-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Faith+in+Christ+College+ilaro&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlemaps-html" rel="nofollow" href="https://www.embed-map.com" id="get-data-forembedmap">https://www.embed-map.com</a><style>#googlemaps-canvas .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;}</style></div>
            {{--            If embedded is not null, use it--}}

            {{--            else use the longitude, latitude if available--}}
            <div id="map"></div>

            <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
{{--            <script--}}
{{--                src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"--}}
{{--                async--}}
{{--            ></script>--}}
{{--            <script>--}}
{{--                // Initialize and add the map--}}
{{--                function initMap() {--}}
{{--                    // The location of Uluru--}}
{{--                    const uluru = { lat: -25.344, lng: 131.036 };--}}
{{--                    // The map, centered at Uluru--}}
{{--                    const map = new google.maps.Map(document.getElementById("map"), {--}}
{{--                        zoom: 4,--}}
{{--                        center: uluru,--}}
{{--                    });--}}
{{--                    // The marker, positioned at Uluru--}}
{{--                    const marker = new google.maps.Marker({--}}
{{--                        position: uluru,--}}
{{--                        map: map,--}}
{{--                    });--}}
{{--                }--}}
{{--            </script>--}}
            <a href="#" target="_blank"
               class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">Contact
                Us</a>
        </div>
    </div>
    <hr class="border-purple-700">
    <div class="flex md:justify-end xs:justify-start py-3 text-purple-300">
        <p class="text-xs font-bold">{{ config('app.name') }} | &copy; {{ date("Y") }}.</p>
    </div>
</footer>
