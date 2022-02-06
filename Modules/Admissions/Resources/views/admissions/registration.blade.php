@extends('core::layouts.master')
@section('title') Admissions @endsection

@section('nav')
    @include('core::inc.nav')
@endsection

@section('header')
    @include('core::inc.header',['header_bg'=>'','header_class'=>'mt-16','header_title'=>'Admissions Portal','header_sub_title'=>'Welcome to Faith in Christ Group of Schools ', 'header_foot_note'=>'Reach the world with sound education', 'header_title_class'=>'text-blue-100','header_sub_title_class'=>'text-pink-600','header_foot_note_class'=>'text-blue-800','header_url'=>'', 'header_anchor_text'=>'', 'header_anchor_class'=>'', 'header_bg_img'=>'open-book.jpg'])
@endsection

@section('notification')
    @include('core::inc.notification')
@endsection

@section('main')
<main class="w-full px-2 md:px-8 my-10 md:my-12">
        <div class="w-full lg:w-2/3">
            <div class="flex border-2 border-blue-700 rounded uppercase overflow-x-scroll md:overflow-x-auto">
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
            
        <div class="px-4 md:px-8 py-10 shadow-xl my-1 font-sans">
            <header class="text-pink-700 font-semibold">
               * Give accurate details of your child or ward
            </header>
            <div class="mt-8">
                <form action="" method="POST" class="grid grid-cols-1 md:grid-cols-3 gap-5 space-x-5">
                    @csrf
                    <div class="flex flex-col md:flex-row space-y-2 md:items-center w-full">
                        <label for="entry-type" class="text-sm font-semibold w-full">
                            Entry type:
                        </label>
                        <select name="" class="w-full px-4 py-2 border-2 focus:border-transparent placeholder-blue-100 rounded" id="entry-type" required>
                            <option value="">Entry type...</option>
                            <option value="">Entry type will be loaded from entry schema</option>
                        </select>
                    </div>

                    <div class="flex flex-col md:flex-row space-y-2 md:items-center w-full">
                        <label for="entry-class" class="text-sm font-semibold w-full">
                            Entry class:
                        </label>
                        <select name="" class="w-full px-4 py-2 border-2 focus:border-transparent placeholder-blue-100 rounded" id="entry-class" required>
                            <option value="">Entry class...</option>
                            <option value="">classes will be loaded from class schema</option>
                        </select>
                    </div>

                    <div class="flex flex-col md:flex-row space-y-2 md:items-center w-full">
                        <label for="entry-mode" class="text-sm font-semibold w-full">
                            Entry mode:
                        </label>
                        <select name="" class="w-full px-4 py-2 border-2 focus:border-transparent placeholder-blue-100 rounded" id="entry-mode" required>
                            <option value="">Entry mode...</option>
                            <option value="Day">Day</option>
                            <option value="Boarden">Boarden</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>

        
        <div class="flex justify-between mt-5">
            <div class="py-2">
                <button onclick="window.history.back()" class="px-8 py-4 bg-pink-600 hover:bg-pink-800 transition duration-300 text-red-100 text-xs font-bold" type="button">
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

