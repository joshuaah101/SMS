{{-- sidebar user info display--}}
<div class="mt-4 px-5">
    <section class="flex flex-col justify-center items-center space-y-2 font-mono mb-2">
        <header class="">
            <img src="{{ asset('storage/images/jpg/user.jpg') }}" alt="parent's dp"
                class="border-4 border-pink-200 rounded-full p-1 h-32 w-32"/>
        </header>
        <p class="font-medium uppercase text-xs text-gray-500 text-center">
            Parent name
        </p>
    </section>
    <hr>
</div>
{{--            sidebar items--}}
<div class="py-2 px-2 text-blue-800 space-y-1 mt-5">
    <a href="{{url('user')}}?menu=dashboard"
    class="{{ $menuUrl == 'dashboard' ? 'shadow-xl bg-blue-700 text-blue-100 hover:bg-white hover:shadow-md' : ''}}
        text-sm px-5 py-2 font-semibold hover:bg-blue-100 hover:text-blue-900 flex items-center rounded rounded-r-full transition duration-500">
        <span class="mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
            </svg>
        </span>
        Dashboard
    </a>
    


    <a href="logout"
    class="text-sm px-5 py-2 font-semibold text-red-700 hover:text-red-600 hover:bg-red-100 rounded rounded-r-full flex items-center transition duration-500">
        <span class="mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
            </svg>
        </span>
        Logout
    </a>
</div>