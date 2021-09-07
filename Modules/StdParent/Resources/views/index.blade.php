@extends('core::layouts.master')
@section('top_nav')
    @include('core::inc.top_nav')
@endsection

@section('nav')
    @include('core::inc.nav')
@endsection
@section('main')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('stdparent.name') !!}
    </p>
@endsection
{{-- adding the footer --}}
@section('footer')
    @include('core::inc.footer')
@endsection
