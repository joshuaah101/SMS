@extends('core::layouts.master')
@section('title') Terms and Condition @endsection

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
    @include('core::inc.header',['header_title'=>'Terms and Condition','header_class'=>'','header_sub_title'=>'','header_url'=>''])
@endsection


@section('main')

@endsection



@section('footer')
    @include('core::inc.footer')
@endsection

