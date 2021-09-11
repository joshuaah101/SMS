<footer class="bg-purple-900 px-8 pt-5">
    <div class="grid md:grid-cols-4 xs:grid-cols-1 sm:grid-cols-2 p-3 text-purple-300 md:mb-5">
        <div class="flex flex-col mb-12 md:mb-0">
            <h4 class="font-bold text-purple-300 mb-4">
                Legal
                <hr class="border-pink-700 border-2 w-1/3 mt-2 animate-pulse">
            </h4>
            <a href="{{ route('policy') }}"
               class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">
                Privacy Policy
            </a>
            <a href="{{ route('terms') }}"
               class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">
                Terms &amp; Conditions
            </a>
        </div>
        <div class="flex flex-col mb-12 md:mb-0">
            <h4 class="font-bold text-purple-300 mb-4">
                Academics
                <hr class="border-pink-700 border-2 w-1/3 mt-2 animate-pulse">
            </h4>
            <a href="{{ route('admission.index') }}"
               class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">
               Admissions
            </a>
            <a href="{{ route('portal') }}"
               class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">
                Portal
            </a>
            <a href="{{ route('helpdesk') }}"
               class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">
               Helpdesk
            </a>
        </div>
        <div class="flex flex-col mb-12 md:mb-0">
            <h4 class="font-bold text-purple-300 mb-4">
                Schools
                <hr class="border-pink-700 border-2 w-1/3 mt-2 animate-pulse">
            </h4>
            <a href="#" class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">
                Faith in Christ College
            </a>
            <a href="#" class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">
                Faith in Christ Nur/Pry (Oke ola, ilaro)
            </a>
            <a href="#" class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">
                Faith in Christ Nur/Pry (Oja-odan)
            </a>
        </div>

        <div class="flex flex-col">
            <h4 class="font-bold text-purple-300 mb-4">
                Contact
                <hr class="border-pink-700 border-2 w-1/3 mt-2 animate-pulse">
            </h4>
            <a href="#" target="_blank"
            class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">
                Contact Us
            </a>
            <a href="#" target="_blank" class="text-sm py-1 hover:text-white hover:font-bold transition duration-500 delay-200 ease-in">
                Default School Location
            </a>
        </div>
    </div>

    <hr class="border-pink-700 border-2">
    <div class="flex md:justify-end xs:justify-start py-5 text-purple-300">
        <p class="text-xs font-bold">{{ config('app.name') }} | &copy; {{ date("Y") }}.</p>
    </div>
</footer>
