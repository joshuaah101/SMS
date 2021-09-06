@extends('core::layouts.master')
@section('title') Student Sign In @endsection
@section('top_nav')
    @include('core::inc.top_nav')
@endsection

@section('nav')
    @include('core::inc.nav')
@endsection

@section('main')
    <div class="xs:block md:flex w-full">
        <div class="w-full h-screen bg-purple-900 flex flex-col items-center justify-center ">
            <header class="text-purple-300 font-bold text-6xl">
                Student Portal
            </header>
            <p class="mt-5 text-purple-200 text-2xl font-semibold">
                Login here ...
            </p>
            <p class="xs:hidden md:flex mt-5 text-purple-200 text-2xl font-semibold">
                &DoubleLongRightArrow;
            </p>
            <p class="md:hidden xs:flex mt-5 text-purple-200 text-2xl font-semibold">
                &DoubleDownArrow;
            </p>
        </div>

        <div class="w-full flex-col justify-center items-center p-12">
            <header class="tracking-wider text-4xl font-bold font-serif">
                Student login area
            </header>

            <div class="mt-12 bg-white p-8 rounded-md shadow-lg">
                <form action="" method="POST" id="std-login-form">
                    @csrf
                    <div class="flex flex-col space-y-4">
                        <label for="" class="text-xl font-semibold font-serif">
                            Username
                        </label>
                        <input type="text" name="" placeholder="adamSmith125" id="" class="placeholder-gray-700 focus:bg-purple-200 rounded-br-xl focus:outline-none" />
                    </div>

                    <div class="flex flex-col space-y-4 mt-5">
                        <label for="" class="text-xl font-semibold font-serif">
                            Password
                        </label>
                        <input type="password" name="" placeholder="******************" id="" class="placeholder-gray-700 focus:bg-purple-200 rounded-br-xl focus:outline-none" />
                    </div>

                    <div class="flex flex-col space-y-4 mt-5">
                        <button class="px-5 py-3 bg-purple-900 text-purple-300 font-bold rounded-br-full tracking-widest hover:bg-purple-700
                        hover:text-white" type="submit">
                            Login
                        </button>
                    </div>
                </form>
            </div>


        </div>
    </div>

@endsection
{{-- adding the footer --}}
@section('footer')
    @include('core::inc.footer')
@endsection
