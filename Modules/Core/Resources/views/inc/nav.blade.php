<div class="border-b-2 border-pink-700">
    <div class="">
        <div class="flex justify-between items-center mx-8 py-0 md:py-2">
            <a href="{{ url('/') }}" class="space-x-3 hidden md:flex">
                <img src="{{ asset('/storage/images/png/college-logo.png') }}" class="w-6 h-6 md:w-20 md:h-16"
                        alt="{{ config('app.name') }} logo" title="{{ config('app.name') }}"/>
            </a>

            <div class="md:flex space-x-3 hidden">
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
            </div>
        </div>

        <div class="">
            <div class="flex justify-between items-center space-x-8 bg-blue-900 px-8 py-2 md:py-1 border-t-2 border-pink-700">
                <div class="text-blue-300 font-bold">
                    <div class="hidden md:flex text-lg">
                        {{ config('app.name') }}
                    </div>

                    <a href="{{ url('/') }}" class="space-x-3 flex md:hidden">
                        <img src="{{ asset('/storage/images/png/college-logo.png') }}" class="w-16 h-12"
                                alt="{{ config('app.name') }} logo" title="{{ config('app.name') }}"/>
                    </a>
                </div>

                <div class="md:flex space-x-5 text-sm items-center hidden p-2">
                    <a href="{{ url('/') }}"
                        class="{{ request()->is('/') ? 'text-white hover:text-blue-300 font-bold' : 'text-blue-300 hover:text-white transition duration-500 ease-in-out' }} space-x-2 font-semibold flex items-center justify-between">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg> --}}
                        Home
                    </a>
                    <a href="{{ route('about') }}"
                        class="{{ request()->is('about') ? 'text-white hover:text-blue-300 font-bold' : 'text-blue-300 hover:text-white transition duration-500 ease-in-out' }} space-x-2 font-semibold flex items-center justify-between">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg> --}}
                            About
                    </a>

                    {{-- <a href="#" class="{{ request()->is('grad') ? 'text-white hover:text-blue-300 font-bold' : 'text-blue-300 hover:text-white tranistion duration-500 ease-in-out' }} space-x-2 font-semibold flex items-center justify-between">Graduations</a> --}}
                    <a href="#"
                        class="{{ request()->is('') ? 'text-white hover:text-blue-300 font-bold' : 'text-blue-300 hover:text-white transition duration-500 ease-in-out' }} space-x-2 font-semibold flex items-center justify-between">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                        </svg> --}}
                        Administration
                    </a>

                    <a href="#"
                        class="{{ request()->is('') ? 'text-white hover:text-blue-300 font-bold' : 'text-blue-300 hover:text-white transition duration-500 ease-in-out' }} space-x-2 font-semibold flex items-center justify-between">
                        Academics
                    </a>

                    <a href="#"
                        class="{{ request()->is('') ? 'text-white hover:text-blue-300 font-bold' : 'text-blue-300 hover:text-white transition duration-500 ease-in-out' }} space-x-2 font-semibold flex items-center justify-between">
                        Gallery
                    </a>

                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="relative inline-block text-left">
                        <div>
                            <a href="#" class="inline-flex justify-center w-full text-sm text-blue-300 space-x-2 font-semibold items-center hover:text-white transition duration-500 ease-in-out" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                Units
                                <!-- Heroicon name: solid/chevron-down -->
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    
                        <!--
                        Dropdown menu, show/hide based on menu state.
                    
                        Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                        Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                        <div class="origin-top-right absolute z-10 right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Edit</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Duplicate</a>
                            </div>
                            <div class="py-1" role="none">
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Archive</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Move</a>
                            </div>
                            <div class="py-1" role="none">
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4">Share</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-5">Add to favorites</a>
                            </div>
                            <div class="py-1" role="none">
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-6">Delete</a>
                            </div>
                        </div>
                    </div> 
                </div>




                {{-- secondary nav --}}
                {{-- mobile button goes here --}}
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button text-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                                fill="currentColor">
                            <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"/>
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
</div>
