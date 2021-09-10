@isset($header_title)
    <div class="w-full bg-blue-600">
        <div
            class="{{ isset($header_class)&&$header_class!=''?$header_class:'w-full h-full relative flex items-center justify-center py-24' }}">

            @if(isset($header_image)&&$header_image!='')
                <img
                    src="{{ isset($header_image)&&$header_image!=''?$header_image:'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1200' }}"
                    alt="header_image"
                    class="absolute top-0 left-0 w-full h-full object-cover opacity-50">

            @endif
            <div class="px-6 max-w-4xl relative z-10 text-center">
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
