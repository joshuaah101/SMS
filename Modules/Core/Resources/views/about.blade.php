@extends('core::layouts.master')
@section('title') School at a glance @endsection

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
    @include('core::inc.header',['header_title'=>'About Us','header_class'=>'','header_sub_title'=>'','header_url'=>''])
    <div class="py-8 xs:px-2 md:px-6">
        <div class="grid xs:grid-cols-1 md:grid-cols-2 gap-5 xs:p-0 md:p-12">
            <section class="flex flex-col space-y-6 bg-white shadow-xl py-10 px-12 rounded-lg">
                <header class="text-xl md:text-3xl font-black flex xs:justify-center md:justify-start text-gray-800 tracking-wide">
                    Principal's Message
                </header>
                <hr class="border-pink-700 border-2 w-1/3 mt-2 mr-auto animate-pulse">
                <article class="text-gray-700 text-justify text-md flex flex-col space-y-3 font-semibold">
                    <p class="">
                        It is with great pleasure and admiration to introduce our schools to you on this site.
                    </p>
                    <p class="">
                        The various Schools that make up the Faith in Christ Schools are very rare Schools.
                    </p>
                    <p class="">
                        One reason they are so rare is that the founding purpose of the first school (Nur/Pry) set more than 24years ago, remains at the core of everything that we aim to achieve today. We are notfor-profit, which means that every fund realized from our stakeholders is invested for the progress of our students and Staff.
                    </p>
                    It is our aim to provide world class teaching that would stir a desire for ever increasing knowledge in our students through outstanding teachers. We put you, our parents and students at the centre of our activities here. Education is a partnership between home and school and we put a great deal of emphasis on our partnership with you, our stakeholders (Parents/Guardians). It is not a gain-saying that children learn best when parents and teachers collaborate. When your Child/Ward(s) starts School it is not where your responsibilities end and School's begin, it is where Ours begin and yours continue. Our sole goal and objective is for every one of our students to achieve outstanding achievement in their education. Wherever they come from, their level, they should achieve better result in Faith in Christ Schools and anywhere else.
                </article>
            </section>
            <div class="xs:order-first md:order-none flex-col flex items-center justify-center">
                <img src="{{ asset('/storage/images/admin/dp/user.jpg') }}" class="w-80 h-80 object-cover border-4 border-red-200 rounded-full bg-cover" alt="principal">
                <p class="mt-5 text-xl font-semi-bold tracking-wider text-gray-700">
                    Principal's name
                </p>
            </div>
        </div>
    </div>

    <div class="bg-banner1 bg-no-repeat bg-fixed bg-cover object-cover bg-center h-72 w-full z-0 opacity-75">
        <div class="flex justify-center items-center">
            {{-- {{ config("app.name") }} --}}
        </div>
    </div>

    <div class="py-8 xs:px-2 md:px-6">
        <div class="grid xs:grid-cols-1 md:grid-cols-2 gap-5 xs:p-0 md:p-12">
            <div class="xs:order-first md:order-none flex flex-col items-center justify-center">
                <img src="{{ asset('/storage/images/admin/dp/user.jpg') }}" class="w-80 h-80 object-cover border-4 border-red-200 rounded-full bg-cover" alt="principal">
                <p class="mt-5 text-xl font-semi-bold tracking-wider text-gray-700">
                    Proprietress name
                </p>
            </div>
            <section class="flex flex-col space-y-6 bg-white shadow-xl py-10 px-12 rounded-lg">
                <header class="text-xl md:text-3xl font-black flex xs:justify-center md:justify-end text-gray-800 tracking-wide">
                    Proprietress's Message
                </header>
                <hr class="border-pink-700 border-2 w-1/3 mt-2 ml-auto animate-pulse">
                <article class="text-gray-700 text-justify text-md flex flex-col space-y-3 font-semibold">
                    <p class="">
                        It is with great pleasure and admiration to introduce our schools to you on this site.
                    </p>
                    <p class="">
                        The various Schools that make up the Faith in Christ Schools are very rare Schools.
                    </p>
                    <p class="">
                        One reason they are so rare is that the founding purpose of the first school (Nur/Pry) set more than 24years ago, remains at the core of everything that we aim to achieve today. We are notfor-profit, which means that every fund realized from our stakeholders is invested for the progress of our students and Staff.
                    </p>
                    It is our aim to provide world class teaching that would stir a desire for ever increasing knowledge in our students through outstanding teachers. We put you, our parents and students at the centre of our activities here. Education is a partnership between home and school and we put a great deal of emphasis on our partnership with you, our stakeholders (Parents/Guardians). It is not a gain-saying that children learn best when parents and teachers collaborate. When your Child/Ward(s) starts School it is not where your responsibilities end and School's begin, it is where Ours begin and yours continue. Our sole goal and objective is for every one of our students to achieve outstanding achievement in their education. Wherever they come from, their level, they should achieve better result in Faith in Christ Schools and anywhere else.
                </article>
            </section>
        </div>
    </div>
@endsection
