<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }} | Homepage</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Truculenta:wght@600&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
        
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="general-top-nav p-2 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="inline-links">
                            <a href="" class="">Other links</a> |
                            <a href="" class="">Donation</a> |
                            <a href="" class="">E-Journals</a> |
                            <a href="" class="">Recreation</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 text-center offset-md-4">
                        <div class="inline-links">
                            <a href="" class="">Student</a> |
                            <a href="" class="">Parent</a> |
                            <a href="" class="">Alumni</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-lg">
            <div class="container">
                {{-- <img src="{{ asset('storage/img/logo.png') }}" class="img img-fluid navbar-brand" width="6%" alt="{{ config('app.name') }} School logo" title="{{ config('app.name') }}" /> --}}
                <a href="{{ route('/') }}" class="navbar-brand">
                    {{ config('app.name') }} Logo
                </a>

                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    {{-- <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul> --}}

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <header class="mb-5">
            <div class="banner bg-white">
               <div class="container">
                   <div class="row">
                       <div class="col-12 col-sm-6 lead" style="margin-top: 4%;">
                           <div class="header-text">
                               Welcome
                           </div>
                           <div class="body-text">
                               {{ config('app.name') }}
                           </div>
                           <p class="base-text text-justify">
                            {{ config('app.school_address') }}
                            </p>
                            <figure class="mt-2">
                                <blockquote class="blockquote">
                                    Education is the passport to the future, for tomorrow belongs to those who prepare for it today. 
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    <cite title="Malcolm X">Malcolm X</cite>
                                </figcaption>
                            </figure>
                       </div>
                        <div class="col-12 col-sm-6 d-none d-sm-block d-flex mt-5 justify-content-center">
                            <figure class="figure">
                                <img src="{{ asset('storage/img/textbook.png') }}" class="figure-img img-fluid rounded" width="100%" alt="{{ config('app.name') }} School logo" />
                            </figure>
                        </div>
                   </div>
               </div>
            </div>
            @include('auth.partials.notification')
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-col-sm-6 col-md-8">
                        <div class="body-text">
                            <i class="fa fa-calendar-alt"></i>  History
                        </div>
                        <div class="main-underline"></div>
                        <p class="text-justify lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A porro ipsum numquam, sequi pariatur eos accusamus sunt veniam error placeat aspernatur aut eius reprehenderit recusandae. Distinctio recusandae est blanditiis eaque. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, qui quam dignissimos porro, excepturi molestiae sequi pariatur aliquid expedita ab, asperiores harum. Praesentium provident veritatis impedit aperiam numquam nihil veniam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos delectus incidunt optio ex sit voluptates, voluptate vitae cupiditate numquam blanditiis commodi 
                        </p>
                    </div>
                    <div class="col-12 col-col-sm-6 col-md-4 text-center">
                        <div class="mt-5">
                            <figure class="figure">
                                <img src="{{ asset('storage/img/rector.jpg') }}" class="figure-img img-fluid rounded photo-frame" width="80%" alt="__{{ "principal" }}" />
                            </figure>
                        </div>
                        <p class="base-text">
                            Principal's name
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="body-text">
                            <i class="fa fa-award"></i> Achievements
                        </div>
                        <div class="main-underline"></div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="lead">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-4">

                                </div>
                                <div class="col-12 col-sm-6 col-md-8">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, ipsum dolorem natus reprehenderit suscipit dolore voluptatibus aliquid quam quod illo itaque nostrum recusandae rem explicabo, voluptatem quas quo! At, mollitia.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="parallax1">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas eos itaque, quia porro blanditiis ullam at consequuntur dolores? Dolore debitis obcaecati voluptatem possimus ipsam quaerat quisquam voluptatum, minima magnam neque.
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5"></div>
            <div style="background-color: #8a12b9;" class="text-white p-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <div class="body-text">
                               <i class="fa fa-info"></i> News and Events
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <figure class="figure text-center">
                                <img src="{{ asset('storage/img/rector.jpg') }}" class="figure-img img-fluid rounded" width="50%" alt="__{{ "principal" }}" />
                                <figcaption class="fig-caption">Admission into Jss 1</figcaption>
                                <a href="" class="">Read more &raquo;</a>
                            </figure>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <figure class="figure text-center">
                                <img src="{{ asset('storage/img/rector.jpg') }}" class="figure-img img-fluid rounded" width="50%" alt="__{{ "principal" }}" />
                                <figcaption class="fig-caption">Admission into Jss 1</figcaption>
                                <a href="" class="">Read more &raquo;</a>
                            </figure>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <figure class="figure text-center">
                                <img src="{{ asset('storage/img/rector.jpg') }}" class="figure-img img-fluid rounded" width="50%" alt="__{{ "principal" }}" />
                                <figcaption class="fig-caption">Admission into Jss 1</figcaption>
                                <a href="" class="">Read more &raquo;</a>
                            </figure>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <figure class="figure text-center">
                                <img src="{{ asset('storage/img/rector.jpg') }}" class="figure-img img-fluid rounded" width="50%" alt="__{{ "principal" }}" />
                                <figcaption class="fig-caption">Admission into Jss 1</figcaption>
                                <a href="" class="">Read more &raquo;</a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            @include('auth.partials.footer')
        </footer>
    </body>
</html>
