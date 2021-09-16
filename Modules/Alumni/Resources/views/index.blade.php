@extends('core::layouts.master')

@section('title') Welcome @endsection

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
    @include('core::inc.header',['header_title'=>'Alumni Page','header_bg'=>'bg-landing-2 w-full h-screen bg-no-repeat border-b-4 bg-green-400 border-red-600','header_sub_title'=>'','header_url'=>''])
@endsection


@section('main')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('alumni.name') !!}
    </p>
@endsection

@section('footer')
    @include('core::inc.footer')
@endsection
