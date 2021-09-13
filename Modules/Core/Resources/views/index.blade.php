@extends('core::layouts.master')
@section('title') Welcome @endsection

@section('css_links')
    @include('core::inc.links')
@endsection

@section('top_nav')
    @include('core::inc.top_nav')
@endsection

@section('nav')
    @include('core::inc.nav')
@endsection

@section('notification')
    @include('core::inc.notification')
@endsection

@section('header')
    <div class="bg-landing-2 w-full h-screen bg-no-repeat bg-cover shadow-lg border-b-2 border-pink-700">
        {{-- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia nobis, pariatur esse nostrum earum adipisci! Rem, perferendis? Quas suscipit quidem iusto corporis magnam nobis tempora ex aliquam error. Magnam, totam. --}}
    </div>
@endsection

@section('main')
    <div class="py-8 px-6">
        <div class="grid xs:grid-cols-1 md:grid-cols-2 gap-5 p-12">
            <section class="flex flex-col space-y-6 bg-white shadow-xl py-10 px-12 rounded-lg">
                <header class="text-xl md:text-3xl font-black flex xs:justify-center md:justify-start text-gray-800 tracking-wide">
                    Principal's Message
                </header>
                <hr class="border-pink-700 border-2 w-1/3 mt-2 mr-auto animate-pulse">
                <article class="text-gray-700 text-justify text-md flex flex-col space-y-3 font-semibold">
                    <p class="">
                        It is with great pleasure and admiration to introduce our schools to you on this site.
                    </p>
                    <p class="">
                        The various Schools that make up the Faith in Christ Schools are very rare Schools.
                    </p>
                    <p class="">
                        One reason they are so rare is that the founding purpose of the first school (Nur/Pry) set more than 24years ago, remains at the core of everything that we aim to achieve today. We are notfor-profit, which means that every fund realized from our stakeholders is invested for the progress of our students and Staff.
                    </p>
                    It is our aim to provide world class teaching that would stir a desire for ever increasing knowledge in our students through outstanding teachers. We put you, our parents and students at the centre of our activities here. Education is a partnership between home and school and we put a great deal of emphasis on our partnership with you, our stakeholders (Parents/Guardians). It is not a gain-saying that children learn best when parents and teachers collaborate. When your Child/Ward(s) starts School it is not where your responsibilities end and School's begin, it is where Ours begin and yours continue. Our sole goal and objective is for every one of our students to achieve outstanding achievement in their education. Wherever they come from, their level, they should achieve better result in Faith in Christ Schools and anywhere else.
                </article>
            </section>
            <div class="xs:order-first md:order-none flex-col flex items-center justify-center">
                <img src="{{ asset(config('app.principal_jpg')) }}" class="w-80 h-80 object-cover border-4 border-red-200 rounded-full bg-cover" alt="principal">
                <p class="mt-5 text-xl font-semi-bold tracking-wider text-gray-700">
                    Principal's name
                </p>
            </div>
        </div>
    </div>

    <div class="bg-landing-1 bg-no-repeat bg-fixed bg-center h-72 w-full z-0 opacity-75">
        <div class="flex justify-center items-center">
            {{-- {{ config("app.name") }} --}}
        </div>
    </div>

    <div class="py-8 px-6">
        <div class="grid xs:grid-cols-1 md:grid-cols-2 gap-5 p-12">
            <div class="xs:order-first md:order-none flex flex-col items-center justify-center">
                <img src="{{ asset(config('app.proper_jpg')) }}" class="w-80 h-80 object-cover border-4 border-red-200 rounded-full bg-cover" alt="principal">
                <p class="mt-5 text-xl font-semi-bold tracking-wider text-gray-700">
                    Proprietress name
                </p>
            </div>
            <section class="flex flex-col space-y-6 bg-white shadow-xl py-10 px-12 rounded-lg">
                <header class="text-xl md:text-3xl font-black flex xs:justify-center md:justify-end text-gray-800 tracking-wide">
                    Proprietress's Message
                </header>
                <hr class="border-pink-700 border-2 w-1/3 mt-2 ml-auto animate-pulse">

                <article class="text-gray-700 text-justify text-md flex flex-col space-y-3 font-semibold">
                    <p class="">
                        It is with great pleasure and admiration to introduce our schools to you on this site.
                    </p>
                    <p class="">
                        The various Schools that make up the Faith in Christ Schools are very rare Schools.
                    </p>
                    <p class="">
                        One reason they are so rare is that the founding purpose of the first school (Nur/Pry) set more than 24years ago, remains at the core of everything that we aim to achieve today. We are notfor-profit, which means that every fund realized from our stakeholders is invested for the progress of our students and Staff.
                    </p>
                    It is our aim to provide world class teaching that would stir a desire for ever increasing knowledge in our students through outstanding teachers. We put you, our parents and students at the centre of our activities here. Education is a partnership between home and school and we put a great deal of emphasis on our partnership with you, our stakeholders (Parents/Guardians). It is not a gain-saying that children learn best when parents and teachers collaborate. When your Child/Ward(s) starts School it is not where your responsibilities end and School's begin, it is where Ours begin and yours continue. Our sole goal and objective is for every one of our students to achieve outstanding achievement in their education. Wherever they come from, their level, they should achieve better result in Faith in Christ Schools and anywhere else.
                </article>
            </section>
        </div>
    </div>


    {{-- This part will be updated dynamically according to the season of admission --}}
    <div class="py-16 px-12 bg-purple-900">
        <header class="animate-pulse text-6xl text-purple-100 font-semibold font-mono flex justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
              </svg>
            Admissions!!!
        </header>
        <p class="text-purple-200 mt-8 text-3xl font-semibold">
            We are currently admitting students into the following classes:
            <header class="text-2xl mt-5 font-semibold text-purple-200">
                <div class="flex justify-around">
                    <div class="p-5 w-full">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                            </svg>
                              Junior secondary school
                        </div>
                        <hr class="border-pink-700 border-2 w-1/3 mt-2 mr-auto animate-pulse">

                        <ul class="text-xl mt-5">
                            <li class="flex space-x-5 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-700" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                </svg>
                                  JSS 1
                            </li>
                            <li class="flex space-x-5 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-700" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                </svg>
                                JSS 2
                            </li>
                            <li class="flex space-x-5 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-700" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                </svg>
                                JSS 3
                            </li>
                        </ul>
                    </div>

                    <div class="p-5 w-full">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                            </svg>
                              Senior secondary school
                        </div>
                        <hr class="border-pink-700 border-2 w-1/3 mt-2 mr-auto animate-pulse">

                        <ul class="text-xl mt-5">
                            <li class="flex space-x-5 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-700" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                </svg>
                                  SSS 1
                            </li>
                            <li class="flex space-x-5 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-700" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                </svg>
                                SSS 2
                            </li>
                            <li class="flex space-x-5 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-700" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                </svg>
                                SSS 3
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
        </p>

        <div class="flex justify-center text-white font-bold text-2xl animate-pulse mt-12">
            Admission fliers can be displayed here
        </div>
    </div>

    <div class="py-12 px-8 bg-white shadow-lg">
        <header class="text-3xl font-bold animate-pulse flex justify-center font-mono text-purple-700">
            Faces of {{ strtoupper(config('app.name')) }}
        </header>

        <div class="flex justify-around space-x-4 mt-8">
            <div class="grid xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5">
                @for ($i = 0; $i <= 11; $i++)
                    <img src="{{ asset(config('app.principal_jpg')) }}" class="w-40 h-40 object-cover border-4 border-pink-700 p-1 rounded-full bg-cover" alt="" />
                @endfor
            </div>
        </div>

        <p class="flex justify-center font-bold text-purple-900 text-lg mt-8 animate-pulse">
            Join us today and we guarantee you quality education at its best...
        </p>
    </div>

    <div class="py-12 px-8 bg-purple-900 shadow-lg">
        <header class="text-3xl font-bold animate-pulse flex justify-center font-mono text-purple-100">
            Our partners
        </header>

        <div class="flex justify-around mt-8">
            @for ($i = 0; $i <= 4; $i++)
                <img src="{{ asset(config('app.principal_jpg')) }}" class="w-40 h-40 object-cover border-4 border-pink-700 p-1 rounded-full bg-cover" alt="" />
            @endfor
        </div>

        <p class="flex justify-center font-bold text-purple-100 text-lg mt-8 animate-pulse">
            We value your trust in us and your unwavering support...
        </p>
    </div>

    <div class="mb-12 py-16 px-12 md:mb-0">
        <h4 class="font-bold text-purple-700 mb-4 text-2xl">
            We are also registered on google maps
            <hr class="border-pink-700 border-2 w-1/2 mt-3 animate-pulse">
        </h4>
        {{-- For map location, you can either use the embedded style or the paid version of using longitude latitude--}}
        <div class="w-full h-screen mt-8" {{-- style="max-width:100%;list-style:none;transition:none;overflow:hidden;width:300px;height:250px;" --}}>
            <div id="googlemaps-canvas" style="height:100%; width:100%;max-width:100%;">
                <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                        src="https://www.google.com/maps/embed/v1/place?q=Faith+in+Christ+College+ilaro&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
                </iframe>
            </div>
            <style>
                #googlemaps-canvas .text-marker {

                }

                .map-generator {
                    max-width: 100%;
                    max-height: 100%;
                    background: none;
                }
            </style>
        </div>
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
    </div>
@endsection

@section('footer')
    @include('core::inc.footer')
@endsection
