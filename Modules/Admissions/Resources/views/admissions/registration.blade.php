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
                <a href="#" class="inline-block text-gray-600 hover:text-blue-100 hover:bg-blue-700 w-full text-sm py-2 px-5 md:py-3 font-mono font-bold text-center transition duration-500">
                    Procedure
                </a>
                <a href="#" class="inline-block text-blue-100  w-full bg-blue-700 text-sm py-2 px-5 md:py-3 border-l-2 border-blue-700 font-mono font-bold text-center transition duration-500">
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
            
        <div class="px-4 md:px-8 py-10 shadow-xl my-1">
            <header class="text-pink-700 font-semibold font-mono">
               * Give accurate details of your child or ward
            </header>
            <div class="mt-8">
                <form action="" method="POST" class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    @csrf
                    <div class="flex flex-col md:flex-row space-y-2 md:items-center w-full">
                        <label for="" class="text-sm font-mono font-semibold w-full">
                            Entry type
                        </label>
                        <select name="" class="w-full px-4 py-2 border-2 focus:border-transparent placeholder-blue-100 rounded" id="" required>
                            <option value="">Entry type...</option>
                        </select>
                    </div>

                    <div class="flex flex-col md:flex-row space-y-2 md:items-center w-full">
                        <label for="" class="text-sm font-mono font-semibold w-full">
                            Entry type
                        </label>
                        <select name="" class="w-full px-4 py-2 border-2 focus:border-transparent placeholder-blue-100 rounded" id="" required>
                            <option value="">Entry type...</option>
                        </select>
                    </div>

                    <div class="flex flex-col md:flex-row space-y-2 md:items-center w-full">
                        <label for="" class="text-sm font-mono font-semibold w-full">
                            Entry type
                        </label>
                        <select name="" class="w-full px-4 py-2 border-2 focus:border-transparent placeholder-blue-100 rounded" id="" required>
                            <option value="">Entry type...</option>
                        </select>
                    </div>
                </form>
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

