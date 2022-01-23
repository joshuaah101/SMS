@extends('core::layouts.master')
@section('title') Admissions @endsection

@section('nav')
    @include('core::inc.nav')
@endsection

@section('header')
@include('core::inc.header',['header_bg'=>'bg-blue-100','header_class'=>'','header_title'=>'Admissions Portal','header_sub_title'=>'Welcome to Faith in Christ Group of Schools ', 'header_foot_note'=>'Reach the world with sound education', 'header_text_color'=>'','header_url'=>'', 'header_anchor_text'=>'', 'header_anchor_class'=>''])
@endsection

@section('notification')
    @include('core::inc.notification')
@endsection

@section('main')
<main class="w-full px-2 md:px-8 my-10 md:my-12">
        <div class="w-full lg:w-2/3">
            <div class="flex border-2 border-blue-700 rounded uppercase overflow-x-scroll md:overflow-x-auto">
                <a href="#" class="inline-block text-gray-600 hover:text-blue-100 w-full hover:bg-blue-700 text-sm py-2 px-5  md:py-3 border-l-2 border-blue-700 font-mono font-bold text-center transition duration-500">
                    Registration
                </a>
                <a href="#" class="inline-block text-gray-600 hover:text-blue-100  w-full hover:bg-blue-700 text-sm py-2 px-5  md:py-3 border-l-2 border-blue-700 font-mono font-bold text-center transition duration-500">
                    Bio data
                </a>
                <a href="#" class="inline-block text-blue-100 w-full bg-blue-700 text-sm py-2 px-5  md:py-3 border-l-2 border-blue-700 font-mono font-bold text-center transition duration-500">
                    Preview  
                </a>
                <a href="#" class="inline-block text-gray-600 hover:text-blue-100  w-full hover:bg-blue-700 text-sm py-2 px-5  md:py-3 border-l-2 border-blue-700 font-mono font-bold text-center transition duration-500">
                    Payment
                </a>
            </div>
        </div>
            
        <div class="px-4 md:px-8 py-10 shadow-xl my-1">
            <header class="text-pink-700 font-semibold font-mono">
               * Check to confirm the details and information you have entered
            </header>
            <div class="mt-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                    <div class="flex flex-col md:space-y-0 md:flex-row space-y-2 md:items-center w-full">
                        <label class="text-sm font-mono font-semibold w-full text-pink-700">
                            Surname:
                        </label>
                        <span class="w-full px-5 py-2 bg-gray-10 border rounded text-gray-700 bg-gray-100 text-sm">surname</span>
                    </div>
                    <div class="flex flex-col md:space-y-0 md:flex-row space-y-2 md:items-center w-full">
                        <label class="text-sm font-mono font-semibold w-full text-pink-700">
                            First name:
                        </label>
                        <span class="w-full px-5 py-2 bg-gray-10 border rounded text-gray-700 bg-gray-100 text-sm">First name</span>
                    </div>
                    <div class="flex flex-col md:space-y-0 md:flex-row space-y-2 md:items-center w-full">
                        <label class="text-sm font-mono font-semibold w-full text-pink-700">
                            Middle name:
                        </label>
                        <span class="w-full px-5 py-2 bg-gray-10 border rounded text-gray-700 bg-gray-100 text-sm">Middle name</span>
                    </div>
                    <div class="flex flex-col md:space-y-0 md:flex-row space-y-2 md:items-center w-full">
                        <label class="text-sm font-mono font-semibold w-full text-pink-700">
                            Gender:
                        </label>
                        <span class="w-full px-5 py-2 bg-gray-10 border rounded text-gray-700 bg-gray-100 text-sm">Gender</span>
                    </div>
                    <div class="flex flex-col md:space-y-0 md:flex-row space-y-2 md:items-center w-full">
                        <label class="text-sm font-mono font-semibold w-full text-pink-700">
                            State of origin:
                        </label>
                        <span class="w-full px-5 py-2 bg-gray-10 border rounded text-gray-700 bg-gray-100 text-sm">State of origin</span>
                    </div>
                    <div class="flex flex-col md:space-y-0 md:flex-row space-y-2 md:items-center w-full">
                        <label class="text-sm font-mono font-semibold w-full text-pink-700">
                            Previous school:
                        </label>
                        <span class="w-full px-5 py-2 bg-gray-10 border rounded text-gray-700 bg-gray-100 text-sm">Previous school</span>
                    </div>
                    <div class="flex flex-col md:space-y-0 md:flex-row space-y-2 md:items-center w-full">
                        <label class="text-sm font-mono font-semibold w-full text-pink-700">
                            Class in previous school:
                        </label>
                        <span class="w-full px-5 py-2 bg-gray-10 border rounded text-gray-700 bg-gray-100 text-sm">Class in previous school</span>
                    </div>
                    <div class="flex flex-col md:space-y-0 md:flex-row space-y-2 md:items-center w-full">
                        <label class="text-sm font-mono font-semibold w-full text-pink-700">
                            Date of birth:
                        </label>
                        <span class="w-full px-5 py-2 bg-gray-10 border rounded text-gray-700 bg-gray-100 text-sm">Date of birth</span>
                    </div>
                    <div class="flex flex-col space-y-2 md:justify-center">
                        <canvas class="px-4 py-3 rounded bg-gray-200"></canvas>
                        <label class="text-sm font-mono font-semibold w-full text-pink-700">
                            Passport
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-between mt-5">
            <div class="py-2">
                <button onclick="window.history.back()" class="px-8 py-4 bg-pink-600 hover:bg-pink-800 transition duration-300 text-red-100 text-xs font-mono font-bold" type="button">
                    &DoubleLeftArrow; Back
                </button>
            </div>

            <div class="py-2">
                <button class="px-8 py-4 bg-blue-800 hover:bg-blue-600 transition duration-300 text-blue-100 text-xs font-mono font-bold" type="button">
                    Proceed &DoubleRightArrow;
                </button>
            </div>
        </div>
    </main>
@endsection



@section('footer')
    @include('core::inc.footer')
@endsection

