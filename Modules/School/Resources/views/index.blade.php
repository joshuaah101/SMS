@extends('core::layouts.master')
@section('title') Schools @endsection

@section('css_links')
    @include('core::inc.links')
@endsection

@section('top_nav')
    @include('core::inc.top_nav')
@endsection

@section('nav')
    @include('core::inc.nav')
@endsection

@section('notification')
    @include('core::inc.notification')
@endsection

@section('header')
    @include('core::inc.header',['header_title'=>'List of Schools','header_sub_title'=>'','header_url'=>''])
@endsection

@section('main')
    <div class="py-8 px-6">
        <div class="grid xs:grid-cols-1 md:grid-cols-1 gap-5 p-12">
            <section class="flex flex-col space-y-10 bg-white shadow-xl py-10 px-12 rounded-lg">
                <header
                    class="text-3xl md:text-4xl font-black flex xs:justify-center md:justify-start text-gray-800 tracking-wide ">
                    List of Schools
                </header>
                <article class="text-gray-700 text-justify text-md flex flex-col space-y-3 font-semibold">

                    @isset($schools)
                        @foreach($schools as $school_details)
                            <p class="md:-inset-y-9 ">
                                <a href="{{ route('school.show',$school_details[0]['slug']) }}"
                                   class="text-sm py-1 hover:text-red-700 hover:font-bold transition duration-500 delay-100 ease-in">
                                    @if(count($school_details) > 1)
                                        @php
                                            $title = isset($school_details[0]->title)?explode(" ",$school_details[0]->title):'';
                                        $filtered = convert_school_names($school_details,$title);
                                        @endphp

                                        {{ $filtered.' School' }}
                                        ({{ isset($school_details[0]->location)?$school_details[0]->location:'' }})
                                    @else
                                        {{ isset($school_details[0]->title)?$school_details[0]->title:'' }}
                                        ({{ isset($school_details[0]->location)?$school_details[0]->location:'' }})
                                    @endif
                                </a>
                            </p>
                        @endforeach

                    @endisset
                </article>
            </section>

        </div>
    </div>
@endsection


@section('footer')
    @include('core::inc.footer')
@endsection





