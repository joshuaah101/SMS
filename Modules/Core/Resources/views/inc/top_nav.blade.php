<nav class="flex flex-col md:flex-row md:justify-between text-xs md:text-sm font-semibold space-y-5 md:space-y-0 bg-blue-800 px-4 py-2 md:px-8 md:py-2 text-center">
    <div class="flex items-center space-x-2">
        <div class="flex justify-center items-center space-x-2">
            <img src="{{ asset('storage/images/svg/phone.svg') }}" class="h-4 w-4">
            <span class="text-sm font-mono font-bold text-blue-300">
                Hotlines:
            </span>
        </div>
        <div class="flex md:flex-col md:space-y-1 text-xs">
            <a href="tel:+2348068885591" class="text-blue-300 hover:text-white tranistion duration-500 ease-in-out">+234 806 888 5591</a>
            <a href="tel:+2348060089898" class="text-blue-300 hover:text-white tranistion duration-500 ease-in-out">+234 806 008 9898</a>
        </div>
    </div>

    <div class="flex items-center space-x-4">
        <div class="flex justify-center items-center space-x-2">
            <img src="{{ asset('storage/images/svg/location-marker-1.svg') }}" class="h-4 w-4" alt="location_marker">
            <span class="text-sm font-mono font-bold text-blue-300">
                Address:
            </span>
        </div>
        <marquee direction="left" class="text-blue-300 hover:text-white tranistion duration-500 ease-in-out text-xs">
            Opposite Jimtex block Industry, Oke Ola, Ilaro, Ogun State, Nigeria.
        </marquee>
    </div>

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
</nav>
