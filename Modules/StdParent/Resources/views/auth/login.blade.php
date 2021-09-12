@extends('core::layouts.master')
@section('title') Parent/Guardian Sign In @endsection
@section('top_nav')
    @include('core::inc.top_nav')
@endsection

@section('nav')
    @include('core::inc.nav')
@endsection
@section('main')
    {{--    <div class="xs:block md:flex w-full">--}}
    {{--        <div class="w-full h-screen bg-purple-900 flex flex-col items-center justify-center ">--}}
    {{--            <header class="text-purple-300 font-bold text-6xl">--}}
    {{--                Parent / Guardian Portal--}}
    {{--            </header>--}}
    {{--            <p class="mt-5 text-purple-200 text-2xl font-semibold">--}}
    {{--                Login here ...--}}
    {{--            </p>--}}
    {{--            <p class="xs:hidden md:flex mt-5 text-purple-200 text-2xl font-semibold">--}}
    {{--                &DoubleLongRightArrow;--}}
    {{--            </p>--}}
    {{--            <p class="md:hidden xs:flex mt-5 text-purple-200 text-2xl font-semibold">--}}
    {{--                &DoubleDownArrow;--}}
    {{--            </p>--}}
    {{--        </div>--}}

    {{--        <div class="w-full flex-col justify-center items-center p-12">--}}
    {{--            <header class="tracking-wider text-4xl font-bold font-serif">--}}
    {{--                Enter Login Credentials--}}
    {{--            </header>--}}

    {{--            <div class="mt-12 bg-white p-8 rounded-md shadow-lg">--}}
    {{--                <form action="{{ route('parent.login') }}" method="POST" id="std-login-form">--}}
    {{--                    @csrf--}}
    {{--                    <div class="flex flex-col space-y-4">--}}
    {{--                        <label for="email" class="text-xl font-semibold font-serif">--}}
    {{--                            Username--}}
    {{--                        </label>--}}
    {{--                        <input type="text" name="email" placeholder="adamSmith125" id="email" class="placeholder-gray-700 focus:bg-purple-200 rounded-br-xl focus:outline-none  @error('email') is-invalid @enderror" />--}}

    {{--                        @error('email')--}}
    {{--                        <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                        @enderror--}}
    {{--                    </div>--}}

    {{--                    <div class="flex flex-col space-y-4 mt-5">--}}
    {{--                        <label for="password" class="text-xl font-semibold font-serif">--}}
    {{--                            Password--}}
    {{--                        </label>--}}
    {{--                        <input type="password" name="password" placeholder="******************" id="password" class="placeholder-gray-700 focus:bg-purple-200 rounded-br-xl focus:outline-none @error('password') is-invalid @enderror" />--}}
    {{--                        @error('password')--}}
    {{--                        <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                        @enderror--}}
    {{--                    </div>--}}
    {{--                    <div class="form-group row">--}}
    {{--                        <div class="col-md-6 offset-md-4">--}}
    {{--                            <div class="form-check">--}}
    {{--                                <input class="form-check-input" type="checkbox" name="remember"--}}
    {{--                                       id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

    {{--                                <label class="form-check-label" for="remember">--}}
    {{--                                    {{ __('Remember Me') }}--}}
    {{--                                </label>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div class="flex flex-col space-y-4 mt-5">--}}
    {{--                        <button class="px-5 py-3 bg-purple-900 text-purple-300 font-bold rounded-br-full tracking-widest hover:bg-purple-700--}}
    {{--                        hover:text-white" type="submit">--}}
    {{--                            Login--}}
    {{--                        </button>--}}

    {{--                        @if (Route::has('parent.password.request'))--}}
    {{--                            <a class="btn btn-link" href="{{ route('parent.password.request') }}">--}}
    {{--                                {{ __('Forgot Your Password?') }}--}}
    {{--                            </a>--}}
    {{--                        @endif--}}
    {{--                    </div>--}}
    {{--                </form>--}}
    {{--            </div>--}}


    {{--        </div>--}}
    {{--    </div>--}}


    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 px-4 py-8">
        <div class="inline-flex">
            <div class="inline-flex flex-row items-center">
                <svg class="w-10 h-10 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        fill-rule="evenodd"
                        d="M11.757 2.034a1 1 0 01.638.519c.483.967.844 1.554 1.207 2.03.368.482.756.876 1.348 1.467A6.985 6.985 0 0117 11a7.002 7.002 0 01-14 0c0-1.79.684-3.583 2.05-4.95a1 1 0 011.707.707c0 1.12.07 1.973.398 2.654.18.374.461.74.945 1.067.116-1.061.328-2.354.614-3.58.225-.966.505-1.93.839-2.734.167-.403.356-.785.57-1.116.208-.322.476-.649.822-.88a1 1 0 01.812-.134zm.364 13.087A2.998 2.998 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879.586.585.879 1.353.879 2.121s-.293 1.536-.879 2.121z"
                        clip-rule="evenodd"
                    />
                </svg>
                <span
                    class="leading-10 text-gray-800 text-4xl font-bold ml-1 uppercase">Parent and Guardian Login Page</span>
            </div>
        </div>

        <div class="text-sm sm:text-base text-gray-600 my-4">{{__('Enter Your login email or phone number')}}</div>

        <div
            class="rounded-md bg-white w-full max-w-sm sm:max-w-md border border-gray-200 shadow-md px-4 py-6 sm:p-8"
        >
            <form action="{{ route('parent.login') }}" method="post">
                @csrf
                <div class="flex flex-col mb-6">
                    <label
                        for="email"
                        class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600"
                    >E-Mail / Phone:</label>
                    <div class="relative">
                        <div
                            class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400"
                        >
                            <svg
                                class="h-6 w-6"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                                />
                            </svg>
                        </div>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-indigo-400"
                            placeholder="E-Mail Address"
                        />
                    </div>
                </div>
                <div class="flex flex-col mb-6">
                    <label
                        for="password"
                        class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600"
                    >Password:</label>
                    <div class="relative">
                        <div
                            class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400"
                        >
              <span>
                <svg
                    class="h-6 w-6"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                  <path
                      d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                  />
                </svg>
              </span>
                        </div>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-indigo-400"
                            placeholder="Password"
                        />
                    </div>
                </div>

                <div class="flex items-center mb-6 -mt-4">
                    <div class="flex ml-auto">
                        <a
                            href="{{ route('parent.password.forgot') }}"
                            class="inline-flex text-xs sm:text-sm text-indigo-500 hover:text-indigo-700"
                        >Forgot Your Password?</a>
                    </div>
                </div>

                <div class="flex w-full">
                    <button
                        type="submit"
                        class="flex items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-indigo-600 hover:bg-indigo-700 rounded py-2 w-full transition duration-150 ease-in"
                    >
                        <span class="mr-2 uppercase">Login</span>
                        <span>
              <svg
                  class="h-6 w-6"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
              >
                <path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </span>
                    </button>
                </div>
            </form>
        </div>
        <div class="flex justify-center items-center mt-6">
            <a
                href="{{route('parent.register')}}"
                target="_blank"
                class="inline-flex items-center font-bold text-indigo-500 hover:text-indigo-700 text-sm text-center"
            >
        <span>
          <svg
              class="h-6 w-6"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              stroke="currentColor"
          >
            <path
                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"
            />
          </svg>
        </span>
                <span class="ml-2">You don't have an account?</span>
            </a>
        </div>
    </div>
@endsection
{{-- adding the footer --}}
@section('footer')
    @include('core::inc.footer')
@endsection
