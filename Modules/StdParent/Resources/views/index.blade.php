@extends('core::layouts.master')

@section('nav')
    <nav class="px-8 py-1 bg-blue-800 border-b-4 border-white">
        <div class="flex justify-between items-center">
            <a href="parent" class="ml-5 py-1">
                <img src="{{ asset('storage/images/school/png/college-logo.png') }}" alt="logo" class="h-12 w-16" />
            </a>
            <div class="xs:hidden md:flex space-x-5 text-blue-300 text-sm">
                <a href="{{ url('/') }}" class="{{ request()->is('parent') ? 'text-white hover:text-blue-300 font-bold' : 'hover:text-white' }}  font-semibold flex items-center justify-between transition duration-500 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    Home
                </a>

                {{-- this button will display a logout button when logged in and login button by default --}}
                <a href="parent/login"
                    class="{{ request()->is('') ? 'text-white hover:text-blue-300 font-bold' : 'hover:text-white' }}  font-semibold flex items-center justify-between transition duration-500 ease-in-out">
                    <span class="mr-1">
                        {{-- svg --}}
                    </span>
                    Login
                </a>
            
                {{-- <a href="{{ url('/') }}" class="{{ request()->is('register') ? 'text-white hover:text-blue-300 font-bold' : 'hover:text-white' }}  font-semibold flex items-center justify-between transition duration-500 ease-in-out">
                    
                    Register your child
                </a>

                <a href="{{ url('/') }}" class="{{ request()->is('view_ca') ? 'text-white hover:text-blue-300 font-bold' : 'hover:text-white' }}  font-semibold flex items-center justify-between transition duration-500 ease-in-out">
                    
                    View CA
                </a> --}}
            </div>
    
            {{-- secondary nav --}}
            {{-- mobile button goes here --}}
            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button text-blue-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- mobile menu --}}
        <div class="mobile-menu md:hidden py-3 hidden">
            <a href="{{ url('/') }}"
                class="{{ request()->is('/') ? 'text-blue-700 hover:text-blue-100 font-bold' : '' }} flex justify-center w-full items-center text-md px-5 py-2 text-blue-700 hover:text-blue-600 font-semibold">
                <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                </span>
                Home
            </a>
            {{-- <a href="{{ route('about') }}"
                class="{{ request()->is('ticket') ? 'text-blue-700 hover:text-blue-100 font-bold' : '' }} flex justify-center w-full items-center text-md px-5 py-2 text-blue-700 hover:text-blue-600 font-semibold">
                <span class="mr-1">
                    menu item
                </span>
                Register a pupil
            </a>
            <a href="{{ route('admission.index') }}"
                class="{{ request()->is('ticket') ? 'text-blue-700 hover:text-blue-100 font-bold' : '' }} flex justify-center w-full items-center text-md px-5 py-2 text-blue-700 hover:text-blue-600 font-semibold">
                <span class="mr-1">
                    menu item
                </span>
                View CA
            </a> --}}

            <a href="{{ route('about') }}"
                class="{{ request()->is('ticket') ? 'text-blue-700 hover:text-blue-100 font-bold' : '' }} flex justify-center w-full items-center text-md px-5 py-2 text-blue-700 hover:text-blue-600 font-semibold">
                <span class="mr-1">
                    {{-- svg --}}
                </span>
                Login
            </a>
        </div>
    </nav>
@endsection

@section('notification')
    @include('core::inc.notification')
@endsection

@section('header')
    @include('core::inc.header',['header_title'=>'Parent / Guardian Portal','header_sub_title'=>'','header_url'=>''])
@endsection

@section('main')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {{ config('stdparent.name') }}
    </p>
@endsection
{{-- adding the footer --}}
@section('footer')
    @include('core::inc.footer')
@endsection
