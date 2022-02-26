@isset($main_section_title)
    <div class="px-16 py-16 flex justify-center">
        <div class="max-w-5xl">
            <div class="flex flex-col">
                <header class="text-5xl font-sans font-bold">
                    {{ $main_section_title }}
                </header>
                <div class="mt-5 text-xs font-bold font-sans w-1/2 flex justify-between text-pink-700">
                    <div class="space-x-3">
                        <span class="">#{{ config('app.name') }}</span>
                        <span class="">#Latest</span>
                    </div>
                    <span class="">Date: {{ date("d|m|Y") }}</span>
                </div>
            </div>
            <div class="flex flex-col md:flex-row md:justify-between md:space-x-12">
                <div class="mt-10 w-3/4">
                    <article class="bg-white text-gray-700 px-8 py-5 shadow-xl rounded-md flex flex-col md:flex-row md:items-center md:space-x-5">
                        <img src="{{ isset($blog_img_name) && $blog_img_name != '' ? asset('storage/images/jpg/'.$blog_img_name.'.jpg') : asset('storage/images/jpg/no-media.jpg' ) }}" alt="blog-post" class="w-1/4 h-auto">
                        
                        @if(isset($blog_header) && $blog_header != '')
                            <section class="">
                                {{-- There is no content --}}
                                @if(isset($blog_header) && $blog_header != '')
                                    <header class="text-2xl font-semibold">
                                        {{ $blog_header }}
                                        <hr class="mt-2 w-1/6 border-b-2">
                                    </header>
                                @endif
                                <div class="flex flex-col space-y-5 mt-8">
                                    <p class="text-justify tracking-wide leading-normal">
                                        {{ isset($blog_body) && $blog_body != '' ? $blog_body : 'No blog post'  }}
                                    </p>
        
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-medium ">'25 minutes ago</span>
                                        <button type="button" class="px-8 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded shadow-md">
                                          Read more &DoubleRightArrow;
                                        </button>
                                    </div>
                                </div>
        
                            </section>
                        @endif
                    </article>
                </div>
                
                <aside class="w-1/4 flex flex-col shadow-xl px-5 py-4 mt-8 bg-slate-300">
                    <header class="text-lg font-sans font-medium">
                        #SocialMedia
                    </header>
                    
                </aside>
            </div>
        </div>
    </div>
@endisset