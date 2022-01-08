@isset($header_title)
    <div class="w-full {{ isset($header_bg)&&$header_bg!=''?$header_bg:'bg-blue-800 ' }}">
        <div
            class="w-full h-full flex {{ isset($header_class)&&$header_class!=''?$header_class:' items-center py-8' }} ">

            @if(isset($header_image)&&$header_image!='')
                <img
                    src="{{ isset($header_image)&&$header_image!='' ? $header_image:'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1200' }}"
                    alt="header_image"
                    class="w-full h-full object-cover opacity-50">

            @endif
            <div class="max-w-4xl px-8">
                <h1 class="text-3xl md:text-4xl font-black text-white leading-tight mb-2">{{  $header_title  }}</h1>
                @if(isset($header_sub_title)&&$header_sub_title!='')
                    <h2 class="text-lg md:text-2xl font-condensed text-white leading-tight mb-8">{{ isset($header_sub_title)&&$header_sub_title!=''?$header_sub_title:'' }}</h2>

                @endif

                @if(isset($header_url)&&$header_url!='')
                    <a href="{{ isset($header_url)&&$header_url!=''?$header_url:'#' }}"
                       class="inline-block bg-white font-condensed text-primary py-2 px-5 text-base rounded-full hover:shadow-lg hover:bg-blue-600 hover:text-white">Find
                        out more</a>
                @endif
            </div>
        </div>
    </div>
@endisset
