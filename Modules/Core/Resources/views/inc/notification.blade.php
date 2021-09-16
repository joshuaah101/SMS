<div class="px-8 py-1 border-b-2 bg-purple-200 border-purple-700 space-x-8 flex items-center">
    <span class="text-purple-900 font-bold text-md font-sans">
        Notification:
    </span>
    @php
        $marquee = [
        ['url'=>route('terms'),'title'=>'Click on this notification to visit terms and conditions','class'=>'text-green-700  '],
        ['url'=>route("policy"),'title'=>'Click this notification to visit our privacy policy page','class'=>'text-red-500'],
        ['url'=>route('about'),'title'=>'This is the rest of the notification that will lead you to our about page','class'=>'text-yellow-500'],
    ];
    @endphp
    <marquee class="text-sm text-black font-semibold" hspace="20">
        @isset($marquee)
            @foreach($marquee as $item)
                <a href="{{ $item['url'] }}"
                   class="font-bold text-md font-sans border-r-2
                @if($loop->first) border-l-2  @elseif($loop->last) border-dotted @else border-current @endif border-purple-800 px-2 {{ $item['class'] }}">
                    {{ $item['title'] }}
                </a>
            @endforeach
        @endisset
    </marquee>
</div>
