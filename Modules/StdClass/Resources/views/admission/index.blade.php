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
<main class="w-full px-8">
        <div class="py-3 my-5">
            <div class="flex space-x-1 border space-x-5 rounded p-5 divide-x-2 border-gray-300 py-1 uppercase xs:overflow-x-scroll md:overflow-x-auto">
                <a href="#" class="inline-block text-blue-700 px-2 py-3 text-md font-medium text-center transition duration-500">
                    Admission procedure
                </a>
                <a href="#" class="inline-block text-gray-600 hover:text-blue-700 px-2 py-3 text-md font-medium text-center transition duration-500">
                    Registration
                </a>
                <a href="#" class="inline-block text-gray-600 hover:text-blue-700 px-2 py-3 text-md font-medium text-center transition duration-500">
                    Bio data
                </a>
                <a href="#" class="inline-block text-gray-600 hover:text-blue-700 px-2 py-3 text-md font-medium text-center transition duration-500">
                    Preview and Confirmation  
                </a>
                <a href="#" class="inline-block text-gray-600 hover:text-blue-700 px-2 py-3 text-md font-medium text-center transition duration-500">
                    Payment
                </a>
            </div>
            
            <div class="xs:px-2 md:px-12">
                <div class="mt-5">
                    <header class="py-4 uppercase text-blue-700 font-semibold text-md">
                        Admission Procedure
                    </header>
                    <p class="">
                        Our admission procedure is divided into stages or steps
                    </p>
                </div>

                <div class="mt-5">
                    <header class="py-4 uppercase text-blue-700 font-semibold text-md">
                        Step 1
                    </header>
                    <p class="">
                        Fill in the fields provided on the registration portion of this page.
                    </p>
                </div>

                <div class="mt-5">
                    <header class="py-4 uppercase text-blue-700 font-semibold text-md">
                        Step 2
                    </header>
                    <p class="">
                        Fill in the fields provided on the Bio Data portion of this page, which should contain all the details of the child you are registering and please fill them accurately.
                    </p>
                </div>
                
                <div class="mt-5">
                    <header class="py-4 uppercase text-blue-700 font-semibold text-md">
                        Step 3
                    </header>
                    <p class="">
                        Confirm your registration information and ready to make payment.
                    </p>
                </div>

                <div class="mt-5">
                    <header class="py-4 uppercase text-blue-700 font-semibold text-md">
                        Step 4
                    </header>
                    <p class="">
                        Payment is expected to be made here.
                    </p>
                </div>


                <div class="flex justify-between">
                    <div class="mt-12 py-2">
                        <button onclick="window.history.back()" class="px-8 py-4 bg-red-600 hover:bg-red-800 transition duration-300 text-red-100 text-xs font-mono font-bold" type="button">
                            &DoubleLeftArrow; Back
                        </button>
                    </div>
    
                    <div class="mt-12 py-2">
                        <button class="px-8 py-4 bg-blue-800 hover:bg-blue-600 transition duration-300 text-blue-100 text-xs font-mono font-bold" type="button">
                            Proceed &DoubleRightArrow;
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection



@section('footer')
    @include('core::inc.footer')
@endsection

