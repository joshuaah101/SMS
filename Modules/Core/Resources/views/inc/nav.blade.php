<div class="flex justify-between items-center py-0 md:py-2 shadow-2xl w-full px-8">
    <div class="flex items-center justify-start space-x-2">
        <a href="{{ url('/') }}">
            <img src="{{ asset('/storage/images/png/college-logo.png') }}" class="w-6 h-6 md:w-20 md:h-16"
            alt="{{ config('app.name') }} logo" title="{{ config('app.name') }}"/>
        </a>
    </div>

    {{--<div class="md:flex space-x-3 hidden">
        <a href="{{ route('admission.index') }}"
            class="bg-blue-100 text-blue-900 border-2 border-blue-900 py-2 px-4 text-xs md:text-sm rounded-full hover:bg-blue-900 hover:text-white shadow-xl transition duration-500 delay-200 ease-in">
            Admissions
        </a>

        @auth('student')
            <a class="dropdown-item" href="{{ route('student.logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('student.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @else
            <a href="{{ route('student.login') }}" class="bg-blue-100 border-2 border-blue-600 text-blue-700 py-2 px-4 text-xs md:text-sm rounded-full shadow-xl
            hover:bg-blue-800 hover:text-blue-100 transition duration-500 delay-200 ease-out">
                Student portal
            </a>
        @endauth 
    </div>--}}

    <div class="">
        <div class="flex justify-between items-center space-x-8 px-8 md:py-1">
            <div class="md:flex space-x-5 text-sm items-center hidden p-2">
                <a href="{{ url('/') }}"
                    class="{{ request()->is('/') ? 'text-pink-700 hover:text-gray-900 font-bold' : 'text-blue-700 hover:text-pink-700 py-3 transition duration-500 ease-in-out' }} space-x-2 font-semibold flex items-center justify-between">
                    Home
                </a>

                <div class="inline-block text-left">
                    <button type="button" class="{{ request()->is('') ? 'text-pink-700 hover:text-gray-900 font-bold' : 'text-blue-700 hover:text-pink-700 py-3 transition duration-500 ease-in-out' }} space-x-2 font-semibold flex items-center justify-between" data-dropdown-toggle="dropdownAbout">
                        About
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    {{-- dropdown menu --}}
                    <div id="dropdownAbout" class="origin-top-right z-10 right-0 mt-8 rounded shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="grid grid-cols-1 gap-8 px-6 py-4">
                            <div class="space-y-8">
                                <div class="py-1">
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-0">
                                        About Faith in Christ Group Of Schools
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-1">
                                        Our Philosophy
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-1">
                                        Objectives
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-1">
                                        Vision
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-1">
                                        Management
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="inline-block text-left">
                    <button type="button" class="{{ request()->is('') ? 'text-pink-700 hover:text-gray-900 font-bold' : 'text-blue-700 hover:text-pink-700 py-3 transition duration-500 ease-in-out' }} space-x-2 font-semibold flex items-center justify-between" data-dropdown-toggle="dropdownAdministration">
                        Administration
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    {{-- dropdown menu --}}
                    <div id="dropdownAdministration" class="origin-top-right z-10 right-0 mt-8 rounded shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="grid grid-cols-1 gap-8 px-6 py-4">
                            <div class="space-y-8">
                                <div class="py-1">
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-0">
                                        Registry
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-1">
                                        Library
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-1">
                                        Bursary
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-1">
                                        Proprietry
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-1">
                                        Student Affairs
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#" class="{{ request()->is('') ? 'text-pink-700 hover:text-gray-900 font-bold' : 'text-blue-700 hover:text-pink-700 py-3 transition duration-500 ease-in-out' }} space-x-2 font-semibold flex items-center justify-between">
                    Academics
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>

                <div class="inline-block text-left">
                    <button type="button" class="{{ request()->is('') ? 'text-pink-700 hover:text-gray-900 font-bold' : 'text-blue-700 hover:text-pink-700 py-3 transition duration-500 ease-in-out' }} space-x-2 font-semibold flex items-center justify-between" data-dropdown-toggle="dropdownAdmissions">
                        Admissions
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    {{-- dropdown menu --}}
                    <div id="dropdownAdmissions" class="origin-top-right z-10 right-0 mt-8 w-2/6 rounded shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="grid grid-cols-1 gap-8 px-6 py-4">
                            <div class="space-y-8">
                                <div class="py-1">
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-xs hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-0">
                                        ADMISSION POLICY
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-xs hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-1">
                                        FAITH IN CHRIST COLLEGE
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-xs hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-1">
                                        FAITH IN CHRIST NUR/PRY (OKE OLA, ILARO)
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-xs hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-1">
                                        FAITH IN CHRIST NUR/PRY (OJA-ODAN)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="inline-block text-left">
                    <button type="button" class="inline-flex justify-center w-full text-blue-700 hover:text-pink-700 py-3 space-x-2 font-semibold items-center transition duration-500 ease-in-out" id="menu-button" aria-expanded="true" aria-haspopup="true" data-dropdown-toggle="dropdownUnit">
                        Units
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    {{-- dropdown menu --}}
                    <div id="dropdownUnit" class="origin-top-right z-10 right-0 mt-8 w-1/2 rounded shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-6 py-4">
                            <div class="space-y-8">
                                <div class="py-1">
                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                    <span class="py-5 px-2 text-lg text-gray-800 font-sans font-bold uppercase">
                                        Services
                                    </span>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-0">
                                        Medical centre
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-1">
                                        Cafeteria
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-1">
                                        Entreprenuership Development
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-1">
                                        Library
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-1">
                                        Laboratories
                                    </a>
                                </div>
                                <div class="py-1">
                                    <span class="py-5 px-2 text-lg text-gray-800 font-sans font-bold uppercase">
                                        counselling
                                    </span>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-2">
                                        Guidiance and counselling
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-3">
                                        Servicom
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-1">
                                        Career management
                                    </a>
                                </div>
                            </div>
                            <div class="space-y-8">
                                <div class="py-1">
                                    <span class="py-5 px-2 text-lg text-gray-800 font-sans font-bold uppercase">
                                        arts
                                    </span>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-4">
                                        Museum
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-5">
                                        Sculptural practices
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-5">
                                        Music
                                    </a>
                                </div>
                                <div class="py-1">
                                    <span class="py-5 px-2 text-lg text-gray-800 font-sans font-bold uppercase">
                                        others
                                    </span>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-6">
                                        Research
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-5">
                                        Cafe
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-1 text-sm hover:text-pink-700 transition duration-300 ease-linear hover:rounded" tabindex="-1" id="menu-item-5">
                                        Internet services
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>




            {{-- secondary nav --}}
            {{-- mobile button goes here --}}
            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button text-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- mobile menu --}}
        <div class="mobile-menu md:hidden py-3 hidden">
            <a href="{{ url('/') }}"
                class="{{ request()->is('/') ? 'text-blue-700 hover:text-blue-100 font-bold' : '' }} flex justify-center w-full items-center text-md px-5 py-2 text-blue-700 hover:text-blue-600 font-semibold">
                <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                </span>
                Home
            </a>
            <a href="{{ route('about') }}"
                class="{{ request()->is('about') ? 'text-blue-700 hover:text-blue-100 font-bold' : '' }} flex justify-center w-full items-center text-md px-5 py-2 text-blue-700 hover:text-blue-600 font-semibold">
                <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                    </svg>
                </span>
                About us
            </a>
            <a href="{{ route('admission.index') }}"
                class="{{ request()->is('admission') ? 'text-blue-700 hover:text-blue-100 font-bold' : '' }} flex justify-center w-full items-center text-md px-5 py-2 text-blue-700 hover:text-blue-600 font-semibold">
                <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                    </svg>
                </span>
                Admissions
            </a>
            <a href="{{ route('student') }}"
                class="{{ request()->is('student') ? 'text-blue-700 hover:text-blue-100 font-bold' : '' }} flex justify-center w-full items-center text-md px-5 py-2 text-blue-700 hover:text-blue-600 font-semibold">
                <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                    </svg>
                </span>
                Student Portal
            </a>

            <a href="{{ route('curriculum') }}"
                class="{{ request()->is('curriculum') ? 'text-blue-700 hover:text-blue-100 font-bold' : '' }} flex justify-center w-full items-center text-md px-5 py-2 text-blue-700 hover:text-blue-600 font-semibold">
                <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                    </svg>
                </span>
                Schools at a glance
            </a>
        </div>
    </div>
</div>   