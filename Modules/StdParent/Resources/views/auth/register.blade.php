@extends('core::layouts.master')
@section('title') Staff Register @endsection

@section('css_links')
    @include('core::inc.links')
@endsection

@section('header')
    @include('core::inc.header',['header_title'=>'Parent / Guardian Registration Page','header_sub_title'=>'','header_url'=>''])
@endsection

@section('main')
    <div class="flex flex-col justify-center items-center md:p-3 xs:p-7">
        <div class="flex flex-col justify-center items-center space-y-4">
            <a href="/" class="">
                <img src="{{ asset('storage/images/school/png/college-logo.png') }}" alt="logo" class="w-24 h-24">
            </a>
            <header class="font-bold font-sans text-xl">
                Sign up
            </header>
        </div>
        <div class="flex flex-col xs:w-full md:w-1/4 mt-2">
            <form action="" method="POST">
                @csrf
                <div class="flex flex-col py-1">
                    <label for="lastname" class="py-1 font-medium">
                        {{ __('Last name') }}:
                    </label>
                    <input type="text" id="lastname" name="lastname"  placeholder="Last name" class="border border-gray-400 placeholder-gray-800 rounded-lg w-full p-2
                    @error('lastname')  border-red-500 @enderror">

                    @error('lastname')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col py-1">
                    <label for="firstname" class="py-1 font-medium">
                        {{ __('First name') }}:
                    </label>
                    <input type="text" id="firstname" name="firstname"  placeholder="First name" class="border border-gray-400 placeholder-gray-800 rounded-lg w-full p-2
                    @error('firstname')  border-red-500 @enderror">

                    @error('firstname')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col py-1">
                    <label for="email" class="py-1 font-medium">
                        {{ __('E-mail address') }}:
                    </label>
                    <input type="text" id="email" name="email"  placeholder="eg. johndoe34@example.com" class="border border-gray-400 placeholder-gray-800 rounded-lg w-full p-2
                    @error('email')  border-red-500 @enderror">

                    @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                        
                <div class="flex flex-col py-1">
                    <label for="password" class="py-1 font-medium">
                        {{ __('Password') }}:
                    </label>
                    <input type="password" id="password" name="password"  placeholder="Password" class="border border-gray-400 placeholder-gray-800 rounded-lg w-full p-2
                    @error('password')  border-red-500 @enderror">

                    @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col py-1">
                    <label for="confirmPassword" class="py-1 font-medium">
                        {{ __('Confirm password') }}:
                    </label>
                    <input type="password" id="confirmPassword" name="confirmPassword"  placeholder="Password again" class="border border-gray-400 placeholder-gray-800 rounded-lg w-full p-2
                    @error('confirmPassword')  border-red-500 @enderror">

                    @error('confirmPassword')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col py-1">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 px-5 py-3 w-full text-white font-semibold rounded-full">
                        {{ __('Register') }}
                    </button>

                    <p class="w-full text-xs text-center text-gray-700 my-2 sm:text-sm sm:my-8">
                        {{ __('Already have an account?') }}
                        <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="login">
                            {{ __('Login') }}
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
