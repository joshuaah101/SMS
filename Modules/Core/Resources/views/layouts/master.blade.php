<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Faith in Christ College') }} - @yield('title')</title>
    @include('core::inc.links')
</head>
<body>
<div id="app">
    @include('core::inc.top_nav')
    @include('core::inc.nav')
    @include('core::inc.notification')
    <main class="py-4">
        @yield('content')
    </main>


    @include('core::inc.footer')
    @include('core::inc.scripts')
</div>
</body>
</html>
