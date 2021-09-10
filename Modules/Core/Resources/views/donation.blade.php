@extends('core::layouts.master')
@section('title') Donate to our growth @endsection

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
    @include('core::inc.header',['header_title'=>'Donation','header_class'=>'','header_sub_title'=>'','header_url'=>''])
@endsection


@section('main')



@endsection



@section('footer')
    @include('core::inc.footer')
@endsection

