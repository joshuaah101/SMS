@extends('core::layouts.master')
@section('title') Admissions @endsection

@section('nav')
    @include('core::inc.nav')
@endsection


@section('header')
    @include('core::inc.header',['header_bg'=>'','header_class'=>'mt-16','header_title'=>'Admissions Portal','header_sub_title'=>'Welcome to Faith in Christ Group of Schools ', 'header_foot_note'=>'Reach the world with sound education', 'header_title_class'=>'text-blue-100','header_sub_title_class'=>'text-pink-600','header_foot_note_class'=>'text-white','header_url'=>'', 'header_anchor_text'=>'', 'header_anchor_class'=>'', 'header_bg_img'=>'school-work.jpg'])
@endsection

@section('notification')
    @include('core::inc.notification')
@endsection

@section('main')
    <main class="w-full px-6 md:px-32 my-10 md:my-12">
        <div class="flex flex-col space-y-3 text-blue-700">
            <h1 class="text-4xl font-bold uppercase">
                Admission Policy!
                <hr class="border-b-2 border-blue-700 mt-5">
            </h1>
            <p class="text-lg font-semibold text-gray-500">
                Our admissions policy states the criteria and standards required for students to gain admissions to the College. Students must meet the following:
            </p>
        </div>

        <div class="flex flex-col mt-8">
            <header class="font-semibold text-2xl font-sans text-blue-700">
                Academic Requirements
            </header>
            <ul class="mt-5 space-y-4 text-sm ml-5 font-semibold list-disc leading-loose text-justify">
                <li class="">
                    Students seeking admissions to Year 7 must be 10 years or older by September of their admission year
                </li>
                <li class="">
                    All applicants must have at minimum a score of 60% in their previous session reports
                </li>
                <li class="">
                    Students seeking entrance must also score an average of 60% on their Entrance Examination
                </li>
                <li class="">
                    {{ config('app.name') }} is an English speaking school and all students must demonstrate proficiency in the English language prior to admission.
                </li>
                <li class="">
                    All previous school records must be officially submitted in original versions
                </li>
                <li class="">
                    Parents and Guardians are required to submit and acknowledge all documentations pertaining to their child’s admissions to the college including child’s medical history, emergency contact numbers, etc.
                </li>
            </ul>
        </div>

        <div class="flex flex-col mt-8">
            <header class="font-semibold text-2xl font-sans text-blue-700">
                Academic Criteria
            </header>
            <p class="text-sm font-semibold mt-2">
                Please note that candidates seeking admission into Year 7 must take the following exams:
            </p>
            <ul class="mt-5 space-y-4 text-sm ml-5 font-semibold list-disc leading-loose text-justify">
                <li class="">
                    English Language, Mathematics, Verbal Aptitude, Quantitative Aptitude and General Paper (consisting of Science, Current Affairs and Reasoning Skills questions).
                </li>
                <li class="">
                    Students transferring to the College (Year 8 and Year 10) must sit for English Language, Mathematics, Biology and any other subject deemed necessary.
                </li>
                <li class="">
                    Oral Interviews are compulsory for every student before admission.
                </li>
                <li class="">
                    The College reserves the right to ask for additional information/document from previous schools
                </li>
            </ul>
        </div>

        <div class="flex flex-col mt-8">
            <header class="font-semibold text-2xl font-sans text-blue-700">
                How To Apply
            </header>
            <p class="text-sm font-semibold mt-2">
                Parents/Guardian of prospective candidates are required to follow these steps:
            </p>
            <ul class="mt-5 space-y-4 text-sm ml-5 font-semibold list-disc leading-loose text-justify">
                <li class="">
                    <header class="">
                        <span class="text-pink-700">Step 1: </span> Fill in the fields provided on the registration portion of this page.
                    </header>
                </li>
                <li class="">
                    <header class="">
                        <span class="text-pink-700">Step 2: </span> Fill in the fields provided on the Bio Data portion of this page, which should contain all the details of the child you are registering and please fill them accurately.
                    </header>
                </li>
                <li class="">
                    <header class="">
                        <span class="text-pink-700">Step 3: </span> Confirm your registration information and ready to make payment.
                    </header>
                </li>
                <li class="">
                    <header class="">
                        <span class="text-pink-700">Step 4: </span> Payment is expected to be made here.
                    </header>
                </li>
            </ul>
        </div>

        <div class="flex flex-col mt-8">
            <header class="font-semibold text-2xl font-sans text-blue-700">
                How To Apply
            </header>
            <p class="text-sm font-semibold mt-2 leading-loose text-justify">
                At {{ config('app.name') }}, we take great pride in our ability to help our pupils reach their full potential and prepare for life ahead. By adopting both the British and Nigerian curricula, our pupils can gain valuable educational certification for use domestically and around the world. We firmly believe in providing our pupils with a unified British and Nigerian curriculum. Our educational establishment provides the possibility to take exams from 5 different leading examination bodies.
            </p>
            <p class="text-sm font-semibold mt-2 leading-loose text-justify">
                Academic life at {{ config('app.name') }} begins in Junior Secondary School (JSS) for pupils aged 12 – 14 (Years 7, 8 and 9). Our curriculum has 12 Core Subjects for our pupils in Junior Secondary School and we also have 3 Elective Options available. By giving our pupils a strong educational foundation in Junior Secondary School, they are fully prepared for their exams and Senior Secondary School.
            </p>
            <p class="text-sm font-semibold mt-2 leading-loose text-justify">
                At the age of 15 our pupils move to {{ config('app.name') }}’s Senior Secondary School (SSS) until they graduate at 17. Our Senior Secondary School curriculum is split over 3 years (Years 10, 11 and 12) and is renowned for being exceptionally comprehensive. Here, our faculty teach 12 Core Subjects and build on the strong educational foundation our pupils’ already have. Our Senior Secondary School pupils select 3-4 School Specialization Subjects from the 20 our modern curricula make available. We also offer 5 Trade and Entrepreneurship Options for pupils who wish to peruse more traditional routes in the future.
            </p>
        </div>
                    
        <div class="mt-5">
            <div class="py-8 flex justify-start">
                <a href="/admissions/registration" class="px-8 py-4 bg-blue-800 hover:bg-blue-600 transition duration-300 text-blue-100 text-xs font-mono font-bold" type="button">
                    Proceed to Apply &DoubleRightArrow;
                </a>
            </div>
        </div>
    </main>
@endsection



@section('footer')
    @include('core::inc.footer')
@endsection

