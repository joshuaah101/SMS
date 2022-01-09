<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Faith in Christ Group of Schools') }} - @yield('title')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    @include('core::inc.links')
    {{-- @livewireStyles --}}
</head>
<body class="antialiased leading-none bg-gray-50 text-gray-700">
    @yield('top_nav')
    @yield('nav')
    @yield('header')
    @yield('notification')
    @yield('main')
    @yield('footer')
    
    @include('core::inc.scripts')
    {{-- @livewireScripts --}}
</body>
</html>
