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
    @include('core::inc.header',['header_title'=>'Administrator Page','header_bg'=>'bg-green-400','header_class'=>'','header_sub_title'=>'','header_url'=>''])
@endsection

@section('main')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('administrator.name') !!}
    </p>
@endsection

@section('footer')
    @include('core::inc.footer')
@endsection
