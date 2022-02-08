@isset($main_section_title)
    <div class="px-16 py-16">
        <div class="flex flex-col">
            <header class="text-5xl font-sans font-bold">
                {{ $main_section_title }}
            </header>
            <div class="mt-5 text-xs font-bold font-sans w-1/2 flex space-x-10 items-center">
                <span class="">#{{ config('app.name') }}</span>
                <span class="">Date: {{ date("d|m|Y") }}</span>
            </div>
        </div>
        <div class="flex flex-col md:flex-row md:justify-between md:space-x-24">
            <article class="mt-20 w-3/4 bg-white text-gray-700 px-8 py-5 shadow-xl rounded-md flex flex-col md:flex-row md:items-center md:space-x-5">
                <img src="{{ isset($blog_img_name) && $blog_img_name != '' ? asset('storage/images/jpg/'.$blog_img_name.'.jpg') : asset('storage/images/jpg/no-media.jpg' ) }}" alt="blog-post" class="w-1/4 h-auto">
                
                @if(isset($blog_header) && $blog_header != '')
                    <section class="">
                        {{-- There is no content --}}
                        @if(isset($blog_header) && $blog_header != '')
                            <header class="text-2xl font-sans font-bold">
                                {{ $blog_header }}
                                <hr class="mt-2 w-1/6 border-b-2">
                            </header>
                        @endif
                        <div class="flex flex-col space-y-5 mt-5">
                            <p class="text-justify tracking-wide leading-normal">
                                {{ isset($blog_body) && $blog_body != '' ? $blog_body : 'No blog post'  }}
                            </p>

                            <div class="flex justify-between items-center">
                                <span>'25 minutes ago</span>
                                <button type="button" class="px-8 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded shadow-md">
                                  Read more &DoubleRightArrow;
                                </button>
                            </div>
                        </div>

                    </section>
                @endif
            </article>
            
            @if(isset($blog_aside_section) && $blog_aside_section != '')
                <section class="w-1/4">
                    {{ $blog_aside_section }}
                </section>
            @endif
        </div>
    </div>
@endisset