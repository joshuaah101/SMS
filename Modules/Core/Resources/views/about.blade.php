@extends('core::layouts.master')
@section('title') School at a glance @endsection

@section('css_links')
    @include('core::inc.links')
@endsection

@section('nav')
    @include('core::inc.nav')
@endsection

@section('header')
    <div class="flex flex-col">
        <div class="flex items-center justify-center h-80">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam facilis libero ipsam voluptate omnis ratione saepe, consectetur eos sit veritatis atque earum in architecto dolorem cupiditate fugiat illo! Est, perspiciatis!
        </div>
    </div>
@endsection
    
@section('notification')
    @include('core::inc.notification')
@endsection

@section('main')
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias dignissimos et, similique possimus inventore repudiandae quae error ut! Excepturi quam quasi praesentium nulla, maxime facere et iste corrupti animi quibusdam?
@endsection

@section('footer')
    @include('core::inc.footer')
@endsection