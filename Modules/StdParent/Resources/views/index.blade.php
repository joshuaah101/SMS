@extends('core::layouts.master')

@section('nav')
    @include('core::inc.nav')
@endsection

@section('header')
    @include('core::inc.header', ['header_bg'=>'','header_class'=>'mt-16','header_title'=>'Parent Portal','header_sub_title'=>'Welcome to Faith in Christ Group of Schools - Parent\'s Homepage', 'header_foot_note'=>'Reach the world with sound education', 'header_title_class'=>'text-blue-100','header_sub_title_class'=>'text-pink-600','header_foot_note_class'=>'text-white','header_url'=>'/parent/login', 'header_anchor_text'=>'Sign in', 'header_anchor_class'=>'', 'header_bg_img'=>'parent.jpg'])
@endsection

@section('notification')
    @include('core::inc.notification')
@endsection

@section('header')
    @include('core::inc.header',['header_title'=>'Parent / Guardian Portal','header_sub_title'=>'','header_url'=>''])
@endsection

@section('main')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {{ config('stdparent.name') }}
    </p>
@endsection
{{-- adding the footer --}}
@section('footer')
    @include('core::inc.footer')
@endsection
