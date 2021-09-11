<div class="px-8 py-1 border-b-4 bg-purple-200 border-purple-700 space-x-8 flex items-center">
    <span class="text-purple-900 font-bold text-md font-sans">
        Notification:
    </span>
    <marquee class="text-sm text-purple-900 font-semibold" hspace="20">
        <a href="{{ route('terms') }}" class="text-green-700  font-bold text-md font-sans border-r-2 border-current border-purple-800 px-2">
            Click on this notification to visit terms and conditions
        </a>
        <a href="{{ route('policy') }}" class="text-red-500 font-bold text-md font-sans border-r-2 border-current border-purple-800 px-2">
            Click this notification to visit our privacy policy page
        </a>
        <a href="{{ route('about') }}" class="text-yellow-500 font-bold text-md font-sans border-r-2 border-dotted border-purple-800 px-2">
            This is the rest of the notification that will lead you to our about page
        </a>
    </marquee>
</div>
