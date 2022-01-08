@extends('core::layouts.master')
@section('title') Staff Sign In @endsection

@section('main')
<div class="xs:px-2 md:px-8 py-3">
    <button class="px-4 py-3 bg-red-700 hover:bg-red-800 text-red-100 text-xs rounded font-semibold" type="button" onclick="window.history.back()">
        &DoubleLongLeftArrow; Back
    </button>
</div>
<div class="flex flex-col justify-center items-center md:p-1 xs:p-2">
    <div class="flex flex-col justify-center items-center space-y-6">
        <a href="/" class="">
            <img src="{{ asset('storage/images/school/png/college-logo.png') }}" alt="logo" class="w-24 h-24">
        </a>
        <header class="font-bold font-sans text-xl">
            Account login
        </header>
    </div>
    <div class="flex flex-col xs:w-full md:w-1/4 mt-2">
        <form action="" method="POST">
            @csrf
            <div class="flex flex-col py-1">
                <label for="username" class="py-1 font-medium">
                   Username/E-mail
                </label>
                <input type="text" id="username" name="username"  placeholder="adamsmith123" class="border border-gray-400 placeholder-gray-800 rounded-lg w-full p-2">
            </div>

            <div class="flex flex-col py-1">
                <label for="password" class="py-1 font-medium">
                    Password
                </label>
                <div class="">
                    <input type="password" id="password" name="password" placeholder="Password" class="border border-gray-400 placeholder-gray-800 rounded-lg w-full p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 cursor-pointer float-right relative right-3" style="margin-left: -25px; margin-top: 13px;" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <div class="flex flex-col py-4">
                <button type="submit" class="bg-pink-600 hover:bg-pink-700 px-5 py-4 w-full text-white font-semibold rounded-full">
                    Log in
                </button>
            </div>

            <div class="flex justify-center space-x-3 py-2 items-center">
                <input type="checkbox" class="">
                <span class="">
                    Keep me logged in
                </span>
            </div>

            <div class="flex flex-col justify-center items-center text-sm font-sans mt-5 space-y-3">
                <a href="#" class="underline hover:no-underline text-red-600">Forgot login credentials?</a>

                <span class="">
                    Don't have an account?
                    <a href="register" class="underline hover:no-underline text-blue-600">
                        Sign up
                    </a>
                </span>
            </div>

            <div class="mt-5">
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <li class="list-none leading-6">{{ $error }}</li>
                    @endforeach
                @endif
            </div>
        </form>
    </div>
</div>    
@endsection
