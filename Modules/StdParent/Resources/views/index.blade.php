@extends('core::layouts.master')

@section('title') Parent Portal @endsection

@section('nav')
    @include('core::inc.nav')
@endsection

@section('header')
    @include('core::inc.header', ['header_bg'=>'','header_class'=>'mt-16','header_title'=>'Parent Portal','header_sub_title'=>'Welcome to Faith in Christ Group of Schools - Parent\'s Homepage', 'header_foot_note'=>'Reach the world with sound education', 'header_title_class'=>'text-blue-100','header_sub_title_class'=>'text-pink-600','header_foot_note_class'=>'text-white','header_url'=>'/parent/login', 'header_anchor_text'=>'Sign in', 'header_anchor_class'=>'', 'header_bg_img'=>'parent'])
@endsection

@section('notification')
    @include('core::inc.notification')
@endsection

@section('main')
    @include('core::inc.main', ['main_section_title' => 'Blog', 'blog_header' => 'This is the blog header', 'blog_body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae itaque, nihil esse repellendus beatae, velit porro soluta iste sequi exercitationem ut mollitia. Officiis sunt, culpa doloremque molestias debitis saepe corrupti!
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae itaque, nihil esse repellendus beatae, velit porro soluta iste sequi exercitationem ut mollitia. Officiis sunt, culpa doloremque molestias debitis saepe corrupti!
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae itaque, nihil esse repellendus beatae, velit porro soluta iste sequi ex', 'blog_img_name' => 'principal'])
@endsection
{{-- adding the footer --}}
@section('footer')
    @include('core::inc.footer')
@endsection
