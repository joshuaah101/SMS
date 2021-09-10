@extends('core::layouts.master')

@section('title') Pupil / Student Registration @endsection
@section('css_links')
    @include('core::inc.links')
@endsection

@section('top_nav')
    @include('core::inc.top_nav')
@endsection

@section('nav')
    @include('core::inc.nav')
@endsection

@section('notification')
    @include('core::inc.notification')
@endsection

@section('header')
    <div class="bg-landing-2 w-full h-auto bg-no-repeat border-b-4 border-red-600">
        <h2>WELCOME TO REGISTRATION PAGE</h2>
        <h3>REGISTER YOUR CHILDREN</h3>

    </div>
@endsection
@section('main')
    <h1>Hello World</h1>
    <p>
        This view is loaded from module: {!! config('student.name') !!}
    </p>
@endsection
