<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Faith in Christ Group of Schools') }} - @yield('title')</title>
    @include('core::inc.links')
</head>
<body class="bg-purple-100">
    @yield('top_nav')
    @yield('nav')
    @yield('notification')
    @yield('header')
    @yield('content')
    @yield('footer')
    @include('core::inc.scripts')
</body>
</html>
