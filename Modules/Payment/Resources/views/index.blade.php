@extends('core::layouts.master')

@section('title') Student Portal @endsection
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

@section('main')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('payment.name') !!}
    </p>
@endsection
