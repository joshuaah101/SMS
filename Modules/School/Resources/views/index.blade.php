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
    <div class="bg-landing-2 w-full h-screen bg-no-repeat bg-cover border-b-4 border-red-600">

    </div>
@endsection

@section('main')
    <div class="py-8 px-6">
        <div class="grid xs:grid-cols-1 md:grid-cols-2 gap-5 p-12">
            <section class="flex flex-col space-y-10 bg-white shadow-xl py-10 px-12 rounded-lg">
                <header
                    class="text-xl md:text-3xl font-black flex xs:justify-center md:justify-start text-gray-800 tracking-wide">
                    List of Schools
                </header>
                <article class="text-gray-700 text-justify text-md flex flex-col space-y-3 font-semibold">

                    @isset($schools)
                        @foreach($schools as $school_details)
                            <p class="md:-inset-y-9 ">

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





