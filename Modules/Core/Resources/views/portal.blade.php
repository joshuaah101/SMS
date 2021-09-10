@extends('core::layouts.master')
@section('title') Portal Webpage @endsection

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
    @include('core::inc.header',['header_title'=>'School Portal','header_class'=>'','header_sub_title'=>'','header_url'=>''])
@endsection

@section('main')
    <h3>Portal</h3>
@endsection



@section('footer')
    @include('core::inc.footer')
@endsection


