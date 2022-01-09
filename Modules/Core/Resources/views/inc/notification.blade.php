<div class="px-4 py-4 bg-blue-900">
    @php
        $marquee = [
        ['url'=>route('terms'),'title'=>'Click on this notification to visit terms and conditions','class'=>'text-white  '],
        ['url'=>route("policy"),'title'=>'Click this notification to visit our privacy policy page','class'=>'text-gray-100'],
        ['url'=>route('about'),'title'=>'This is the rest of the notification that will lead you to our about page','class'=>'text-gray-50'],
    ];
    @endphp
    <marquee class="text-sm text-black font-semibold" hspace="20">
        @isset($marquee)
            @foreach($marquee as $item)
                <a href="{{ $item['url'] }}"
                   class="font-bold text-md font-sans border-r-2
                @if($loop->first) border-l-2  @elseif($loop->last) border-dotted @else border-current @endif border-blue-800 px-2 {{ $item['class'] }}">
                    {{ $item['title'] }}
                </a>
            @endforeach
        @endisset
    </marquee>
</div>
