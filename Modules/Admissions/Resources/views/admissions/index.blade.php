@extends('core::layouts.master')
@section('title') Admissions @endsection

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
    @include('core::inc.header',['header_title'=>'Admissions Portal','header_sub_title'=>'Reach the world with sound education','header_url'=>'','header_class'=>'justify-start items-center py-16'])
@endsection


@section('main')
<main class="w-full px-2 md:px-8 my-10 md:my-12">
        <div class="w-full lg:w-2/3">
            <div class="flex border-2 border-blue-700 rounded uppercase overflow-x-scroll md:overflow-x-auto">
                <a href="#" class="inline-block text-blue-100 bg-blue-700 w-full text-sm py-2 px-5 md:py-3 font-mono font-bold text-center transition duration-500">
                    Procedure
                </a>
                <a href="#" class="inline-block text-gray-600 hover:text-blue-100  w-full hover:bg-blue-700 text-sm py-2 px-5 md:py-3 border-l-2 border-blue-700 font-mono font-bold text-center transition duration-500">
                    Registration
                </a>
                <a href="#" class="inline-block text-gray-600 hover:text-blue-100  w-full hover:bg-blue-700 text-sm py-2 px-5 md:py-3 border-l-2 border-blue-700 font-mono font-bold text-center transition duration-500">
                    Bio data
                </a>
                <a href="#" class="inline-block text-gray-600 hover:text-blue-100  w-full hover:bg-blue-700 text-sm py-2 px-5 md:py-3 border-l-2 border-blue-700 font-mono font-bold text-center transition duration-500">
                    Preview  
                </a>
                <a href="#" class="inline-block text-gray-600 hover:text-blue-100  w-full hover:bg-blue-700 text-sm py-2 px-5 md:py-3 border-l-2 border-blue-700 font-mono font-bold text-center transition duration-500">
                    Payment
                </a>
            </div>
        </div>
            
        <div class="px-4 md:px-8 py-10 shadow-xl my-1 space-y-5">
            <div class="flex flex-col space-y-3 text-sm">
                <header class="uppercase text-pink-700 font-semibold">
                    Admission Procedure
                </header>
                <p class="">
                    Our admission procedure is divided into stages or steps
                </p>
            </div>

            <div class="flex flex-col space-y-3 text-sm">
                <header class="uppercase text-pink-700 font-semibold">
                    Step 1
                </header>
                <p class="">
                    Fill in the fields provided on the registration portion of this page.
                </p>
            </div>

            <div class="flex flex-col space-y-3 text-sm">
                <header class="uppercase text-pink-700 font-semibold">
                    Step 2
                </header>
                <p class="">
                    Fill in the fields provided on the Bio Data portion of this page, which should contain all the details of the child you are registering and please fill them accurately.
                </p>
            </div>
            
            <div class="flex flex-col space-y-3 text-sm">
                <header class="uppercase text-pink-700 font-semibold">
                    Step 3
                </header>
                <p class="">
                    Confirm your registration information and ready to make payment.
                </p>
            </div>

            <div class="flex flex-col space-y-3 text-sm">
                <header class="uppercase text-pink-700 font-semibold">
                    Step 4
                </header>
                <p class="">
                    Payment is expected to be made here.
                </p>
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

