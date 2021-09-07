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

@section('header')
    <div class="bg-landing-2 w-full h-auto bg-no-repeat border-b-4 border-red-600">
        <ul>
            <li><h2 class="font-extrabold lg">Student Menu</h2></li>
            <li>Attendance</li>
            <li>Assessments</li>
            <li>Practicals</li>
            <li>Exams</li>
        </ul>
    </div>
@endsection
@section('main')
    <h1>Hello World</h1>
    <p>
        This view is loaded from module: {!! config('student.name') !!}
    </p>
@endsection
