@extends('core::layouts.master')
@section('title') Welcome @endsection

{{-- @section('top_nav')
    @include('core::inc.top_nav')
@endsection --}}

@section('nav')
    @include('core::inc.nav')
@endsection

@section('header')
<div class="sliderAx">
    <div id="slider-1">
        <div class="bg-cover bg-top h-screen object-cover bg-no-repeat" style="background-image: url({{ asset('storage/images/jpg/pic4.jpg') }})">
            {{-- <div class="md:w-1/2">
                <p class="font-bold text-sm uppercase">Services</p>
                <p class="text-3xl font-bold">Hello world</p>
                <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
            </div>   --}}
        </div>
    </div>

    <div id="slider-2">
        <div class="bg-cover bg-top h-screen object-cover bg-no-repeat" style="background-image: url({{ asset('storage/images/jpg/pic2.jpg') }})">
            {{-- <p class="font-bold text-sm uppercase">Services</p>
            <p class="text-3xl font-bold">Hello world</p>
            <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
            <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a> --}}
        </div>
    </div>
    
    {{-- <div class="flex justify-between w-12 mx-auto space-x-2 absolute top-0">
        <button id="sButton1" onclick="sliderButton1()" class="bg-pink-300 rounded-full w-4 p-2 " ></button>
        <button id="sButton2" onclick="sliderButton2() " class="bg-pink-300 rounded-full w-4 p-2"></button>
    </div> --}}
</div>
@endsection

@section('notification')
    @include('core::inc.notification')
@endsection

@section('main')
<main class="w-full">
    <section class="grid grid-cols-1 md:grid-cols-3 gap-y-5 md:gap-y-0 px-8 py-12 md:gap-x-8">
        <div class="flex flex-col justify-center items-center space-y-3 hover:bg-blue-700 hover:text-white p-8 transition duration-500">
            <div class="bg-white p-2 rounded">
                <img src="{{ asset('storage/images/png/nursery-logo.png') }}" class="w-32 h-auto" alt="Faith in Christ Nursery School" title="Faith in Christ Nursery School">
            </div>
            <header class="text-xl uppercase font-bold font-mono text-center">
               Faith in Christ Nursery School
            </header>
            <p class="text-center font-medium text-sm">
                Children admitted are usually between the ages of two and five (2 – 5 year olds) for the Pre-school and Reception classes
            </p>
        </div>
        <div class="flex flex-col justify-center items-center space-y-3 hover:bg-pink-700 hover:text-white p-8 transition duration-500">
            <div class="bg-white p-2 rounded">
                <img src="{{ asset('storage/images/png/college-logo.png') }}" class="w-32 h-auto" alt="Faith in Christ Primary School" title="Faith in Christ Primary School">
            </div>
            <header class="text-xl uppercase font-bold font-mono text-center">
                Faith in Christ Primary School
            </header>
            <p class="text-center font-medium text-sm">
                The ages for the Primary classes are between five and six years (5 – 6 year olds).
            </p>
        </div>
        <div class="flex flex-col justify-center items-center space-y-3 hover:bg-blue-700 hover:text-white p-8 transition duration-500">
            <div class="bg-white p-2 rounded">
                <img src="{{ asset('storage/images/png/college-logo.png') }}" class="w-32 h-auto" alt="Faith in Christ College" title="Faith in Christ College">
            </div>
            <header class="text-xl uppercase font-bold font-mono text-center">
                Faith in Christ College
            </header>
            <p class="text-center font-medium text-sm">
                The prospective candidate must have completed at least year 5 (or its equivalent) in a recognized primary school within or outside the country. 
            </p>
        </div>
    </section>

    <div class="flex flex-col px-8 py-24 font-sans bg-no-repeat bg-fixed bg-center bg-cover" style="background: url({{ asset('storage/images/jpg/pic3.jpg') }})">
        <div class="flex flex-col space-y-5">
            <div class="flex flex-col space-y-2">
                <h1 class="font-semibold text-blue-100 text-4xl">
                    Admissions
                </h1>
                <p class="text-blue-300 font-semibold text-lg">
                    Apply for {{ date('Y') }} admission 
                </p>
            </div>
                
            <div class="leading-7 text-blue-100 text-lg mt-5 text-justify">
                We don{{ '\'' }}t just give students an education and experiences that set them up for success in a career. We help them succeed in their career—to discover a field they{{ '\'' }}re passionate about and dare to lead it.
            </div>
        </div>
        
        <a href="#" class="bg-pink-700 text-blue-100 text-md font-medium mt-8 px-4 py-3 rounded md:rounded-none md:px-5 md:py-4 hover:bg-pink-800 w-1/2 md:w-1/6 transition duration-300 text-center flex items-center justify-center">
            Apply Now
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-24 px-6 md:px-16">
        <div class="flex flex-col space-y-5 py-4 px-5 rounded shadow-lg">
            <div class="uppercase">
                <header class="font-semibold text-2xl text-gray-700">
                    meet the proprietress
                </header>
                <p class="font-bold text-md font-sans text-blue-700 mt-2">
                    Pastor Mrs. Christiana Abosede Ojo-akinyemi
                    <hr class="border-pink-700 border mt-2 w-1/3">
                </p>
            </div>

            <div class="flex flex-col md:flex-row items-center space-y-5 md:space-x-5">
                <p class="text-justify text-sm leading-6">
                    The principal, Pastor Mrs. Christiana Abosede Ojo-akinyemi, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The principal, Pastor Mrs. Christiana Abosede Ojo-akinyemi, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The t. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The principal, Pastor Mrs. Christiana Abosede Ojo-akinyemi, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.
                </p>
                <img src="{{ asset('storage/images/jpg/proprietress.jpg') }}" alt="The proprietress - Pastor Mrs. Christiana Abosede Ojo-akinyemi" class="border-2 border-pink-700 rounded-lg md:w-1/3 h-auto"  title="Pastor Mrs. Christiana Abosede Ojo-akinyemi">
            </div>
        </div>
        
        <div class="flex flex-col space-y-5 py-4 px-5 rounded shadow-lg">
            <div class="uppercase">
                <header class="font-semibold text-2xl text-gray-700">
                    meet the principal
                </header>
                <p class="font-bold text-md font-sans text-blue-700 mt-2">
                    mr. afolabi sunday paul
                    <hr class="border-pink-700 border mt-2 w-1/3">
                </p>
            </div>

            <div class="flex flex-col md:flex-row items-center space-y-5 md:space-x-5">
                <img src="{{ asset('storage/images/jpg/principal.jpg') }}" alt="The Principal - Mr. Afolabi Sunday Paul" class="border-2 border-pink-700 rounded-lg md:w-1/3 h-auto"  title="Mr. Afolabi Sunday Paul">
                <p class="text-justify text-sm leading-6">
                    The principal, Mr. Afolabi Sunday Paul, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The principal, Mr. Afolabi Sunday Paul, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The t. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The principal, Mr. Afolabi Sunday Paul, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.
                </p>
            </div>
        </div>
    </div>


    <header class="font-semibold text-2xl md:text-4xl text-gray-700 uppercase px-8 md:ml-10 mt-24">
        News and events
        <hr class="border-pink-700 border mt-2 w-1/3">
    </header>

    <div class="p-6 md:px-8 md:py-2 mt-2">
        <div class="md:px-8 mt-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
                <div class="flex flex-col space-y-3">
                    <div class="w-full h-auto flex justify-center items-center p-2">
                        <img src="{{ asset('storage/images/jpg/pic1.jpg') }}" alt="News and events" class="w-full bg-contain h-auto rounded">
                    </div>
                    <div class="text-justify leading-relaxed tracking-normal text-xs font-medium text-gray-700">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat iste libero ipsam ipsum doloremque deserunt eius quam qui sint dolorem repellendus, laudantium, recusandae sed, expedita molestias est. Quia, iure non.
                    </div>

                    <a href="#" class="py-3 px-3 md:py-3 md:px-5 bg-blue-800 w-1/2 hover:bg-blue-600 hover:text-blue-100 rounded text-xs font-medium text-center text-blue-100 transition duration-300">
                        Read more &DoubleRightArrow;
                    </a>
                </div>
                <div class="flex flex-col space-y-3">
                    <div class="w-full h-auto flex justify-center items-center p-2">
                        <img src="{{ asset('storage/images/jpg/pic2.jpg') }}" alt="News and events" class="w-full bg-contain h-auto rounded">
                    </div>
                    <div class="text-justify leading-relaxed tracking-normal text-xs font-medium text-gray-700">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat iste libero ipsam ipsum doloremque deserunt eius quam qui sint dolorem repellendus, laudantium, recusandae sed, expedita molestias est. Quia, iure non.
                    </div>

                    <a href="#" class="py-3 px-3 md:py-3 md:px-5 bg-blue-800 w-1/2 hover:bg-blue-600 hover:text-blue-100 rounded text-xs font-medium text-center text-blue-100 transition duration-300">
                        Read more &DoubleRightArrow;
                    </a>
                </div>
                <div class="flex flex-col space-y-3">
                    <div class="w-full h-auto flex justify-center items-center p-2">
                        <img src="{{ asset('storage/images/jpg/pic3.jpg') }}" alt="News and events" class="w-full bg-contain h-auto rounded">
                    </div>
                    <div class="text-justify leading-relaxed tracking-normal text-xs font-medium text-gray-700">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat iste libero ipsam ipsum doloremque deserunt eius quam qui sint dolorem repellendus, laudantium, recusandae sed, expedita molestias est. Quia, iure non.
                    </div>

                    <a href="#" class="py-3 px-3 md:py-3 md:px-5 bg-blue-800 w-1/2 hover:bg-blue-600 hover:text-blue-100 rounded text-xs font-medium text-center text-blue-100 transition duration-300">
                        Read more &DoubleRightArrow;
                    </a>
                </div>
            </div>
        </div>
    </div>
         
</main>
@endsection

@section('footer')
    @include('core::inc.footer')
@endsection
