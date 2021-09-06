<header class="bg-purple-100">
    <div class="border-b-4 border-purple-700">
        <div class="">
            <div class="flex justify-between items-center mx-8 xs:py-0 md:py-1">
                <a href="#" class="space-x-3 xs:hidden md:flex">
                    <img src="{{ asset(config('app.college_logo_png')) }}" class="xs:w-8 xs:h-8 md:w-24 md:h-20"
                         alt="{{ config('app.name') }} logo" title="{{ config('app.name') }}"/>
                </a>

                <div class="md:flex space-x-3 xs:hidden">
                    <a href="#"
                       class="bg-purple-100 text-purple-900 border-2 border-purple-900 py-2 px-4 text-xs md:text-sm rounded-full hover:bg-purple-900 hover:text-white shadow-xl transition duration-500 delay-200 ease-in">
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
                <div class="flex justify-between items-center space-x-8 bg-purple-900 px-8 xs:py-2 md:py-1">
                    <div class="text-purple-300 font-bold text-md">
                        <div class="xs:hidden md:flex">
                            {{ config('app.name') }}
                        </div>

                        <a href="#" class="space-x-3 xs:flex md:hidden">
                            <img src="{{ asset(config('app.college_logo_png')) }}" class="w-20 h-20"
                                 alt="{{ config('app.name') }} logo" title="{{ config('app.name') }}"/>
                        </a>
                    </div>

                    <div class="md:flex space-x-3 text-sm items-center xs:hidden p-2">
                        <a href="{{ url('/') }}"
                           class="{{ request()->is('/') ? 'text-white hover:text-purple-300 font-bold' : 'text-purple-300 hover:text-white transition duration-500 ease-in-out' }}  font-semibold">Home</a>
                        <a href="{{ route('about') }}"
                           class="{{ request()->is('about') ? 'text-white hover:text-purple-300 font-bold' : 'text-purple-300 hover:text-white transition duration-500 ease-in-out' }}  font-semibold">About
                            us</a>
                        {{-- <a href="#" class="{{ request()->is('grad') ? 'text-white hover:text-purple-300 font-bold' : 'text-purple-300 hover:text-white tranistion duration-500 ease-in-out' }}  font-semibold">Graduations</a> --}}
                        <a href="{{ route('curriculum') }}"
                           class="{{ request()->is('curriculum') ? 'text-white hover:text-purple-300 font-bold' : 'text-purple-300 hover:text-white transition duration-500 ease-in-out' }}  font-semibold">Schools
                            at a glance</a>
                    </div>

                    {{-- secondary nav --}}
                    {{-- mobile button goes here --}}
                    <div class="md:hidden flex items-center">
                        <button class="mobile-menu-button text-purple-300">
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
                       class="{{ request()->is('/') ? 'text-purple-700 hover:text-blue-100 font-bold' : '' }} flex justify-center w-full items-center text-md px-5 py-2 text-blue-700 hover:text-blue-600 font-semibold">
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
                       class="{{ request()->is('ticket') ? 'text-purple-700 hover:text-blue-100 font-bold' : '' }} flex justify-center w-full items-center text-md px-5 py-2 text-blue-700 hover:text-blue-600 font-semibold">
                        <span class="mr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                            </svg>
                        </span>
                        About us
                    </a>
                    <a href=""
                       class="{{ request()->is('ticket') ? 'text-purple-700 hover:text-blue-100 font-bold' : '' }} flex justify-center w-full items-center text-md px-5 py-2 text-blue-700 hover:text-blue-600 font-semibold">
                        <span class="mr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                            </svg>
                        </span>
                        Admissions
                    </a>
                    <a href=""
                       class="{{ request()->is('ticket') ? 'text-purple-700 hover:text-blue-100 font-bold' : '' }} flex justify-center w-full items-center text-md px-5 py-2 text-blue-700 hover:text-blue-600 font-semibold">
                        <span class="mr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                            </svg>
                        </span>
                        Student Portal
                    </a>
                    <a href=""
                       class="{{ request()->is('login') ? 'text-purple-700 hover:text-blue-100 font-bold' : '' }} flex justify-center w-full items-center text-md px-5 py-2 text-blue-700 hover:text-blue-600 font-semibold">
                        <span class="mr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                            </svg>
                        </span>
                        Some menu
                    </a>
                    <a href=""
                       class="{{ request()->is('register') ? 'text-purple-700 hover:text-blue-100 font-bold' : '' }} flex justify-center w-full items-center text-md px-5 py-2 text-blue-700 hover:text-blue-600 font-semibold">
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
</header>
