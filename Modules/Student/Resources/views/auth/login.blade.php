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

            
            {{-- adding the footer --}}
            @section('footer')
                @include('core::inc.footer')
            @endsection
        </div>
    </div>
    

    {{-- <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white"
                         style="font-size: 1.2rem; font-weight: 600;">{{ __('Student Login here .') }}</div>

                    <div class="card-body" style="background-color: #fdf4f4c9;">
                        <form method="POST" action="{{ route('student.login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           placeholder="Something@example.com" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password" placeholder="password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
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

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Student Login') }}
                                    </button>

                                    @if (Route::has('student.password.request'))
                                        <a class="btn btn-link" href="{{ route('student.password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection