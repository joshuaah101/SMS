@extends('core::layouts.master')
@section('title') Staff Sign In @endsection
@section('top_nav')
    @include('core::inc.top_nav')
@endsection

@section('nav')
    @include('core::inc.nav')
@endsection
@section('content')

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
                <form action="{{ route('staff.login') }}" method="POST" id="std-login-form">
                    @csrf
                    <div class="flex flex-col space-y-4">
                        <label for="email" class="text-xl font-semibold font-serif">
                            Username
                        </label>
                        <input type="text" name="email" placeholder="email@example.com" id="email"
                               class="placeholder-gray-700 focus:bg-purple-200 rounded-br-xl focus:outline-none"/>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="flex flex-col space-y-4 mt-5">
                        <label for="password" class="text-xl font-semibold font-serif">
                            Password
                        </label>
                        <input type="password" name="password" placeholder="******************" id=""
                               class="placeholder-gray-700 focus:bg-purple-200 rounded-br-xl focus:outline-none  @error('email') is-invalid @enderror"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col space-y-4 mt-5">
                        <button class="px-5 py-3 bg-purple-900 text-purple-300 font-bold rounded-br-full tracking-widest hover:bg-purple-700
                        hover:text-white" type="submit">
                            Login
                        </button>


                        @if (Route::has('staff.password.request'))
                            <a class="btn btn-link" href="{{ route('staff.password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
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
