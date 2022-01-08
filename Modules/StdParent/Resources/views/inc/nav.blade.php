<nav class="shadow-lg border-b-2 bg-white border-pink-200 w-full fixed">
    <div class="flex justify-between items-center py-2 px-5 dashboard-nav-bar">
        <a href="#" class="flex items-center space-x-2">
            <img src="{{ asset('storage/images/png/college-logo.png') }}" alt="logo" class="w-8 h-8">
            <span class="text-sm font-mono font-semibold">
                {{ config('app.name') }}
            </span>
        </a>

        <div class="flex justify-between items-center space-x-5">
            <div class="text-blue-700 text-md hidden md:flex md:items-center md:space-x-1">
                <span class="p-2 bg-green-400 rounded-full animate-pulse"></span>
                <img src="{{ asset('storage/images/jpg/user.jpg') }}" alt="" class="border-2 border-blue-200 rounded-full h-8 w-8" />
            </div>
            
            <span class="text-blue-700 text-sm hidden md:block" id="dashboard-time">
                {{-- time display --}}
            </span>

            {{-- mobile dashboard menu button --}}
            <div class="md:hidden flex">
                <button class="mobile-menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-10 text-blue-700" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- mobile dashboard menu --}}
    <div class="p-4 hidden md:hidden mobile-menu transition duration-1000 ease-in-out">
        <div class="flex items-center justify-between px-5 py-3">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('storage/images/jpg/user.jpg') }}" alt="" class="border-2 border-blue-200 rounded-full h-10 w-12" />
                <div class="flex flex-col space-y-1">
                    <span class="text-blue-700 font-semibold">
                        Parent name
                    </span>
                    <div class="flex items-center space-x-2 text-xs">
                        <span class="text-xs text-gray-500 font-bold">#Username</span>
                        <span class="h-2 w-2 bg-green-400 rounded-full animate-pulse"></span>
                    </div>
                </div>
            </div>

        </div>


        <a href="?menu=dash" class="{{ $menuUrl == 'dash' ? 'hover:bg-blue-100 hover:text-blue-900 rounded rounded-r-full shadow-outline-blue' : '' }} flex items-center text-md px-5 py-3 text-blue-700 hover:text-blue-600 font-semibold mt-3">
            <span class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                </svg>
            </span>
            Dashboard
        </a>
        
        <a href="logout" class="flex items-center text-md px-5 py-3 text-red-700 hover:text-red-600 font-semibold">
            <span class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </span>
            Logout
        </a>
    </div>
</nav>
