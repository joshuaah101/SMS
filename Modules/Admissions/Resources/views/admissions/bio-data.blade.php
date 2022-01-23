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
                <a href="#" class="inline-block text-gray-600 hover:text-blue-100 w-full hover:bg-blue-700 text-sm py-2 px-5 md:py-3 border-l-2 border-blue-700 font-mono font-bold text-center transition duration-500">
                    Registration
                </a>
                <a href="#" class="inline-block text-blue-100 w-full bg-blue-700 text-sm py-2 px-5 md:py-3 border-l-2 border-blue-700 font-mono font-bold text-center transition duration-500">
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
                        <label for="surname" class="text-sm font-mono font-semibold w-full">
                           Surname
                        </label>
                        <input type="text" name="" class="w-full px-4 py-2 border-2 focus:border-transparent placeholder-gray-400 text-sm rounded" placeholder="Surname" id="surname" required>
                    </div>

                    <div class="flex flex-col md:flex-row space-y-2 md:items-center w-full">
                        <label for="firstname" class="text-sm font-mono font-semibold w-full">
                           First name
                        </label>
                        <input type="text" name="" class="w-full px-4 py-2 border-2 focus:border-transparent placeholder-gray-400 text-sm rounded" placeholder="First name" id="firstname" required>
                    </div>

                    <div class="flex flex-col md:flex-row space-y-2 md:items-center w-full">
                        <label for="midname" class="text-sm font-mono font-semibold w-full">
                           Middle name
                        </label>
                        <input type="text" name="" class="w-full px-4 py-2 border-2 focus:border-transparent placeholder-gray-400 text-sm rounded" placeholder="Middle name" id="midname">
                    </div>

                    <div class="flex flex-col md:flex-row space-y-2 md:items-center w-full">
                        <label for="gender" class="text-sm font-mono font-semibold w-full">
                           Gender
                        </label>
                        <select name="" class="w-full px-4 py-2 border-2 focus:border-transparent placeholder-gray-400 text-sm rounded" id="gender" required>
                            <option value="">Gender ...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="flex flex-col md:flex-row space-y-2 md:items-center w-full">
                        <label for="state-of-origin" class="text-sm font-mono font-semibold w-full">
                           State of origin
                        </label>
                        <select name="" class="w-full px-4 py-2 border-2 focus:border-transparent placeholder-gray-400 text-sm rounded" id="state-of-origin" required>
                            <option value="">State ...</option>
                            <option value="Abuja">Abuja</option>
                            <option value="Edo">Edo</option>
                            <option value="Etc">Etc</option>
                        </select>
                    </div>

                    <div class="flex flex-col md:flex-row space-y-2 md:items-center w-full">
                        <label for="previous-school" class="text-sm font-mono font-semibold w-full">
                           Previous school
                        </label>
                        <input type="text" name="" class="w-full px-4 py-2 border-2 focus:border-transparent placeholder-gray-400 text-sm rounded" placeholder="Middle name" id="previous-school">
                    </div>

                    <div class="flex flex-col md:flex-row space-y-2 md:items-center w-full">
                        <label for="class-previous-school" class="text-sm font-mono font-semibold w-full">
                           Class in previous school
                        </label>
                        <select class="w-full px-4 py-2 border-2 focus:border-transparent placeholder-gray-400 text-sm rounded" placeholder="Middle name" id="class-previous-school">
                            <option value="">Class ...</option>
                            <option value="">dynamic from entry level</option>
                        </select>
                    </div>

                    <div class="flex flex-col md:flex-row space-y-2 md:items-center w-full">
                        <label for="dob" class="text-sm font-mono font-semibold w-full">
                           Date of birth
                        </label>
                        <input type="date" name="" class="w-full px-4 py-2 border-2 focus:border-transparent placeholder-gray-400 text-sm rounded" placeholder="Middle name" id="dob">
                    </div>

                    <div class="flex flex-col md:flex-row space-y-2 items-center">
                        <div class="flex flex-col w-full">
                            <label for="passport" class="text-sm font-mono font-semibold w-full">
                            Passport
                            </label>
                            <span class="text-xs font-mono italic text-pink-700">
                                Not more than 10kb size
                            </span>
                        </div>
                        <input type="file" name="" class="w-full px-4 py-2 border-2 border-gray-600 focus:border-transparent placeholder-gray-400 text-sm rounded" placeholder="Middle name" id="passport">
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

