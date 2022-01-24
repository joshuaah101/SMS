@extends('core::layouts.master')
@section('title') Admissions @endsection

@section('nav')
    @include('core::inc.nav')
@endsection


@section('header')
    @include('core::inc.header',['header_bg'=>'','header_class'=>'mt-16','header_title'=>'Admissions Portal','header_sub_title'=>'Welcome to Faith in Christ Group of Schools ', 'header_foot_note'=>'Reach the world with sound education', 'header_title_class'=>'text-blue-100','header_sub_title_class'=>'text-pink-600','header_foot_note_class'=>'text-white','header_url'=>'', 'header_anchor_text'=>'', 'header_anchor_class'=>'', 'header_bg_img'=>'school-work.jpg'])
@endsection

@section('notification')
    @include('core::inc.notification')
@endsection

@section('main')
<main class="w-full px-2 md:px-8 my-10 md:my-12">
        <div class="flex flex-col space-y-3 text-gray-700">
            <h1 class="text-2xl font-bold">
                Admission Procedure!
            </h1>
            <p class="text-lg font-semibold text-gray-500">
                Our admission procedure is divided into stages and steps and they are outlined below:
            </p>
        </div>
            
        <div class="px-4 md:px-8 py-10 shadow-xl my-1 space-y-5 font-semibold">
            <div class="flex flex-col space-y-3 text-sm">
                <header class="uppercase text-pink-700">
                    Step 1
                </header>
                <p class="">
                    Fill in the fields provided on the registration portion of this page.
                </p>
            </div>

            <div class="flex flex-col space-y-3 text-sm">
                <header class="uppercase text-pink-700">
                    Step 2
                </header>
                <p class="">
                    Fill in the fields provided on the Bio Data portion of this page, which should contain all the details of the child you are registering and please fill them accurately.
                </p>
            </div>
            
            <div class="flex flex-col space-y-3 text-sm">
                <header class="uppercase text-pink-700">
                    Step 3
                </header>
                <p class="">
                    Confirm your registration information and ready to make payment.
                </p>
            </div>

            <div class="flex flex-col space-y-3 text-sm">
                <header class="uppercase text-pink-700">
                    Step 4
                </header>
                <p class="">
                    Payment is expected to be made here.
                </p>
            </div>
        </div>
        
        <div class="mt-5">
            <div class="py-2 flex justify-end">
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

