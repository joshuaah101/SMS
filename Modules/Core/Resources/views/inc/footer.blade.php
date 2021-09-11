<footer class="bg-purple-900 md:px-8 pt-5 pt-2">
    <div class="grid md:grid-cols-4 xs:grid-cols-1 sm:grid-cols-2 p-3 text-purple-300 md:mb-5">
        <div class="flex flex-col mb-12 md:mb-0 px-2">
            <h4 class="border-b-2 border-purple-700 w-1/3 pb-2 font-bold text-purple-300 mb-4">
                Legal
            </h4>
            <a href="{{ route('policy') }}"
               class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-100 ease-in">
                Privacy Policy
            </a>
            <a href="{{ route('terms') }}"
               class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-100 ease-in">
                Terms &amp; Conditions
            </a>
        </div>
        <div class="flex flex-col mb-12 md:mb-0 px-2">
            <h4 class="border-b-2 border-purple-700 w-1/3 pb-2 font-bold text-purple-300 mb-4">
                Academics
            </h4>
            <a href="{{ route('admission.index') }}"
               class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-100 ease-in">
                Admissions
            </a>
            <a href="{{ route('portal') }}"
               class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-100 ease-in">
                Portal
            </a>
            <a href="{{ route('helpdesk') }}"
               class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-100 ease-in">
                Helpdesk
            </a>
        </div>
        <div class="flex flex-col mb-12 md:mb-0 px-2">
            <h4 class="border-b-2 border-purple-700 w-1/3 pb-2 font-bold text-purple-300 mb-4">
                Schools
            </h4>
            @isset($schools)
                @if(count($schools) > 0)
                    @foreach($schools as $school_details)
                        <a href="{{ route('school.show',$school_details[0]['slug']) }}"
                           class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-100 ease-in">
                            @if(count($school_details) > 1)
                                @php
                                    $title = isset($school_details[0]->title)?explode(" ",$school_details[0]->title):'';
                                $filtered = convert_school_names($school_details,$title);
                                @endphp

                                {{ $filtered.' School' }}
                                ({{ isset($school_details[0]->location)?$school_details[0]->location:'' }})
                            @else
                                {{ isset($school_details[0]->title)?$school_details[0]->title:'' }}
                                ({{ isset($school_details[0]->location)?$school_details[0]->location:'' }})
                            @endif
                        </a>
                    @endforeach
                @else
                    <p class="mx-1"> Schools not available right now.</p>
                @endif
            @endisset

            <div class="flex flex-col">
                <h4 class="border-b-2 border-purple-700 w-1/3 pb-2 font-bold text-purple-300 mt-4">Contact</h4>
                @isset($site_settings)
                    @isset($site_settings->email_address)
                        <i class="fas fa-map-marker"></i>  <a href="mailto:{{ $site_settings->email_address }}" class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 hover:translate-x-1.5 delay-100 ease-in">
                            {{ $site_settings->email_address }}
                        </a>
                    @endisset
                    @isset($site_settings->phone_number)
                        <i class="fas fa-phone"></i> <a href="tel:{{ remove_spaces($site_settings->phone_number) }}"

                                                        class="text-sm py-1 hover:text-white hover:font-bold hover:translate-x-1.5 transition duration-500 delay-100 ease-in">
                            {{ $site_settings->phone_number }}
                        </a>
                    @endisset
                @endisset
            </div>
        </div>
        <div class="flex flex-col mb-12 md:mb-0 px-2">
            <h4 class="border-b-2 border-purple-700 w-1/3 pb-2 font-bold text-purple-300 mb-4">Find us</h4>
            {{--            <a href="#" target="_blank" class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-100 ease-in">School Location </a>--}}

            {{--            For map location, you can either use the embedded style or the paid version of using longitude latitude--}}
            @isset($site_settings->embedded)
                {{--            If embedded is not null, use it--}}
                {!! html_entity_decode($site_settings->embedded) !!}
            @else

                {{--            else use the longitude, latitude if available--}}
                @isset($site_settings->lon ,$site_settings->lat,$site_settings->map_key)
                    <div id="map"></div>

                    <script
                        src="https://maps.googleapis.com/maps/api/js?key={{$site_settings->map_key}}&callback=initMap&libraries=&v=weekly"
                        async
                    ></script>
                    <script>
                        // Initialize and add the map
                        function initMap() {
                            // The location of School
                            const school = {lat: {{$site_settings->lat}}, lng: {{$site_settings->lon}}};
                            // The map, centered at School
                            const map = new google.maps.Map(document.getElementById("map"), {
                                zoom: 4,
                                center: school,
                            });
                            // The marker, positioned at School
                            const marker = new google.maps.Marker({
                                position: school,
                                map: map,
                            });
                        }
                    </script>
                @endisset
            @endisset
        </div>
    </div>

    <hr class="border-purple-700">
    <div class="flex md:justify-end xs:justify-start py-3 text-purple-300">
        <p class="text-xs font-bold">{{ isset($site_settings->school_name)? $site_settings->school_name : config('app.name') }}
            | &copy; {{ date("Y") }}.</p>
    </div>
</footer>
