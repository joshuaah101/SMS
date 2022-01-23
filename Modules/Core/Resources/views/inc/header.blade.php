@isset($header_title)
    <div class="w-full {{ isset($header_bg)&&$header_bg!=''?$header_bg:'bg-blue-800 ' }}">
        <div
            class="w-full h-full flex {{ isset($header_class)&&$header_class!=''?$header_class:' items-center py-12' }} ">

            {{-- @if(isset($header_image)&&$header_image!='')
                <img
                    src="{{ isset($header_image)&&$header_image!='' ? $header_image:'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1200' }}"
                    alt="header_image"
                    class="w-full h-full object-cover opacity-50">

            @endif --}}
            <div class="max-w-4xl px-8 flex flex-col {{ isset($header_text_color) && $header_text_color != '' ? $header_text_color : 'text-blue-800' }}">
                <h1 class="text-3xl md:text-4xl font-black leading-tight mb-2">{{  $header_title  }}</h1>
                @if(isset($header_sub_title)&&$header_sub_title!='')
                    <h2 class="text-lg md:text-2xl leading-tight">{{ isset($header_sub_title)&&$header_sub_title!=''?$header_sub_title:'' }}</h2>
                    <h3 class="text-sm font-semibold leading-tight mt-2 mb-8">{{ isset($header_foot_note)&&$header_foot_note!=''?$header_foot_note:'' }}</h3>
                @endif

                @if(isset($header_url)&&$header_url!='')
                    <div class="flex">
                        <a href="{{ isset($header_url)&&$header_url!=''?$header_url:'#' }}"
                       class="{{ isset($header_anchor_class) && $header_anchor_class != '' ? $header_anchor_class : 'inline-block bg-blue-800 py-3 px-5 text-base rounded shadow-lg hover:bg-blue-700 text-blue-100' }}">
                       {{ isset($header_anchor_text) && $header_anchor_text != ''? $header_anchor_text : '' }}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endisset
