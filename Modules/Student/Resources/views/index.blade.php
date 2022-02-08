@extends('core::layouts.master')

@section('title') Student Portal @endsection

@section('nav')
    @include('core::inc.nav')
@endsection

@section('header')
    @include('core::inc.header', ['header_bg'=>'','header_class'=>'mt-16','header_title'=>'Student Portal','header_sub_title'=>'Welcome to Faith in Christ Group of Schools - Student\'s Homepage', 'header_foot_note'=>'Reach the world with sound education', 'header_title_class'=>'text-blue-100','header_sub_title_class'=>'text-pink-600','header_foot_note_class'=>'text-white','header_url'=>'/parent/login', 'header_anchor_text'=>'Sign in', 'header_anchor_class'=>'', 'header_bg_img'=>'boy-reading'])
@endsection

@section('notification')
    @include('core::inc.notification')
@endsection

@section('main')
    @include('core::inc.main', ['main_section_title' => '', 'blog_header' => '', 'blog_aside_section' => 'Blog aside section appears here', 'blog_body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae itaque, nihil esse repellendus beatae, velit porro soluta iste sequi exercitationem ut mollitia. Officiis sunt, culpa doloremque molestias debitis saepe corrupti!
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae itaque, nihil esse repellendus beatae, velit porro soluta iste sequi exercitationem ut mollitia. Officiis sunt, culpa doloremque molestias debitis saepe corrupti!
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae itaque, nihil esse repellendus beatae, velit porro soluta iste sequi ex', 'blog_img_name' => ''])

    <div class="bg-landing-2 w-full h-auto bg-no-repeat border-b-4 border-red-600">
        <h2>WELCOME TO FEDERAL POLYTECHNIC ILARO</h2>
        <h3>UNARGUABLY THE BEST POLYTECHNIC IN WEST AFRICA</h3>

        <img src=""  alt="Rector of FPI" />
       <p> Welcome to the world of the Federal Polytechnic, Ilaro. The institution was established by law on July 25, 1979 and opened her gates to the public on November 15, 1979. The Polytechnic has since then acquired the reputation of a quintessential institution educating and training students in five schools or faculties. These are Engineering, Environmental Studies, Communication and Information Technology, Management Studies and Pure and Applied Sciences.</p>

       <h3>Why Federal Polytechnic Ilaro?</h3>
        <ul>
            <li>
                <img src="images/mark.png" width="30" height="30" class="pull-left mr-2" alt="placeholder+image">
                Best Polytechnic In Nigeria, Best Polytechnic In West Africa.

            </li>
            <li>
                <img src="images/mark.png" width="30" height="30" class="pull-left mr-2" alt="placeholder+image">
                Awards: (Just A Few), Best Polytechnic In Nigeria, Best Rector In Nigeria, Best Polytechnic In West Africa
            </li>
            <li>
                <img src="images/mark.png" width="30" height="30" class="pull-left mr-2" alt="placeholder+image">
                Most Sought After Polytechnic By Jamb Candidates

            </li>
            <li>
                <img src="images/mark.png" width="30" height="30" class="pull-left mr-2" alt="placeholder+image">
                Smart Running Academic Calendar For Over 13 Years
            </li>
            <li>
                <img src="images/mark.png" width="30" height="30" class="pull-left mr-2" alt="placeholder+image">
                Orderly Conduct, Student Welfare, Service Delivery, Excellence Are Core Pursuits
            </li>
        </ul>

    </div>
@endsection


@section('main')
    <h1>Hello World</h1>
    <p>
        This view is loaded from module: {!! config('student.name') !!}
    </p>
@endsection


@section('footer')
    @include('core::inc.footer')
@endsection
