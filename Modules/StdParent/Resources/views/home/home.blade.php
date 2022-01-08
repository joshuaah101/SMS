@extends('core::layouts.master')
@section('title')
    Parent Dashboard
@endsection

@section('main')
    <main class="flex">
        <div class="flex">
            {{--sidebar--}}
            <div class="hidden md:block md:w-1/6 bg-white h-full shadow-xl top-0 left-0 fixed border-r-2 border-pink-200">
                @include('stdparent::inc.sidebar')
            </div>

            <div class="md:w-5/6 dashboard-main-content w-full flex flex-col space-y-20">
                {{--fixed header navigation--}}
                @include('stdparent::inc.nav')

                <div class="px-3 py-2">
                    {{--main content attachment--}}
                    @include('stdparent::inc.main')
                </div>
            </div>
        </div>
    </main>
@endsection
