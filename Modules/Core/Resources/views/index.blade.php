@extends('core::layouts.master')
@section('title') Welcome @endsection

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
    <div class="sliderAx">
        <div id="slider-1">
            <div class="bg-cover bg-center h-screen object-cover bg-no-repeat" style="background-image: url({{ asset('storage/images/jpg/pic4.jpg') }})">
                {{-- <div class="md:w-1/2">
                    <p class="font-bold text-sm uppercase">Services</p>
                    <p class="text-3xl font-bold">Hello world</p>
                    <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                    <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
                </div>   --}}
            </div> <!-- -->
            <br>
        </div>

        <div id="slider-2">
            <div class="bg-cover bg-top h-screen object-cover bg-no-repeat" style="background-image: url({{ asset('storage/images/jpg/pic2.jpg') }})">
                {{-- <p class="font-bold text-sm uppercase">Services</p>
                <p class="text-3xl font-bold">Hello world</p>
                <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a> --}}
            </div> <!-- -->
            <br>
        </div>
    </div>

    <div  class="flex justify-between w-12 mx-auto space-x-2 pb-2">
        <button id="sButton1" onclick="sliderButton1()" class="bg-pink-300 rounded-full w-4 p-2 " ></button>
        <button id="sButton2" onclick="sliderButton2() " class="bg-pink-300 rounded-full w-4 p-2"></button>
    </div>
@endsection

@section('main')
<main class="w-full">
    <section class="grid xs:grid-cols-1 md:grid-cols-3 xs:gap-y-5 md:gap-y-0 px-8 py-12 md:gap-x-8">
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

    <div class="flex flex-col bg-blue-900 px-8 py-24 font-sans">
        <div class="flex flex-col space-y-5">
            <div class="flex flex-col space-y-2">
                <h1 class="font-semibold text-white text-4xl">
                    Admissions
                </h1>
                <p class="text-blue-300 font-semibold text-lg">
                    Apply for {{ date('Y') }} admission 
                </p>
            </div>
                
            <div class="leading-7 text-white text-lg mt-5 text-justify">
                We don{{ '\'' }}t just give students an education and experiences that set them up for success in a career. We help them succeed in their career—to discover a field they{{ '\'' }}re passionate about and dare to lead it.
            </div>
        </div>
        
        <a href="#" class="bg-pink-700 text-white text-md font-medium mt-8 xs:px-3 xs:py-2 xs:rounded md:rounded-none md:px-5 md:py-4 hover:bg-pink-800 xs:w-1/2 md:w-1/6 transition duration-300 text-center">
            Apply Now
        </a>
    </div>

    <div class="py-12 px-8 shadow-lg flex xs:flex-col md:flex-row xs:space-y-5 md:space-y-0 md:space-x-12 mt-12 items-center">
        <div class="flex flex-col md:w-2/3 space-y-5 xs:w-full px-8">
            <div class="uppercase flex flex-col space-y-8 border-b py-1">
                <header class="font-semibold text-2xl text-gray-700">
                    meet our principal
                </header>
                <p class="font-bold text-md font-sans text-blue-700">
                    mr. adu paul okoye
                </p>
            </div>
            <p class="text-sm font-medium text-justify leading-relaxed  text-gray-700">
                The principal, Mr. Adee thompson, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The principal, Mr. Adee thompson, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The principal, Mr. Adee thompson, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The principal, Mr. Adee thompson, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The principal, Mr. Adee thompson, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The principal, Mr. Adee thompson, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The principal, Mr. Adee thompson, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.
            </p>
        </div>

        <img src="{{ asset('storage/images/jpg/user.jpg') }}" alt="The Principal - Mr. Adu Paul Okoye" class="border-4 border-yellow-700 rounded-full xs:w-full md:w-1/3 h-auto"  title="Mr. Adu Paul Okoye">
    </div>

    <div class="py-12 px-8 shadow-lg flex xs:flex-col md:flex-row xs:space-y-5 md:space-y-0 md:space-x-12 mt-12 items-center">
        <img src="{{ asset('storage/images/jpg/user.jpg') }}" alt="The Principal - Mr. Adu Paul Okoye" class="border-4 border-yellow-700 rounded-full xs:w-full md:w-1/3 h-auto xs:order-2 md:order-none xs:mt-5"  title="Mr. Adu Paul Okoye">
        <div class="flex flex-col md:w-2/3 space-y-8 xs:w-full px-8">
            <div class="uppercase flex flex-col xs:items-start md:items-end space-y-4 border-b py-1">
                <header class="font-semibold text-2xl text-gray-700">
                    meet our proprietress
                </header>
                <p class="font-bold text-sm font-sans text-blue-700">
                    mrs. adu paul okoye
                </p>
            </div>
            <p class="text-sm font-medium text-justify leading-relaxed  text-gray-700">
                The principal, Mr. Adee thompson, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The principal, Mr. Adee thompson, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The principal, Mr. Adee thompson, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The principal, Mr. Adee thompson, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The principal, Mr. Adee thompson, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The principal, Mr. Adee thompson, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.The principal, Mr. Adee thompson, is a renowned educationist. A Phd. holder in physical education and also a motivator with several years of teaching, lecturing and educational experience.
                
            </p>
        </div>
    </div>

    <div class="my-12 px-12">
        <header class="font-semibold text-2xl text-gray-700 uppercase">
            News and events
        </header>
        <div class="p-8 shadow-xl mt-8">
            <div class="grid xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5">
                <div class="flex flex-col space-y-3">
                    <div class="w-full h-auto flex justify-center items-center p-2">
                        <img src="{{ asset('storage/images/png/college-logo.png') }}" alt="News and events" class="w-8/12 bg-contain h-auto rounded">
                    </div>
                    <div class="text-justify leading-relaxed tracking-normal text-xs font-medium text-gray-700">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat iste libero ipsam ipsum doloremque deserunt eius quam qui sint dolorem repellendus, laudantium, recusandae sed, expedita molestias est. Quia, iure non.
                    </div>

                    <a href="" class="py-3 px-5 bg-blue-600 w-1/2 hover:bg-blue-800 rounded text-xs font-medium text-center text-blue-100 transition duration-300">
                        Read more &DoubleRightArrow;
                    </a>
                </div>
                <div class="flex flex-col space-y-3">
                    <div class="w-full h-auto flex justify-center items-center p-2">
                        <img src="{{ asset('storage/images/png/college-logo.png') }}" alt="News and events" class="w-8/12 bg-contain h-auto rounded">
                    </div>
                    <div class="text-justify leading-relaxed tracking-normal text-xs font-medium text-gray-700">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat iste libero ipsam ipsum doloremque deserunt eius quam qui sint dolorem repellendus, laudantium, recusandae sed, expedita molestias est. Quia, iure non.
                    </div>

                    <a href="" class="py-3 px-5 bg-blue-600 w-1/2 hover:bg-blue-800 rounded text-xs font-medium text-center text-blue-100 transition duration-300">
                        Read more &DoubleRightArrow;
                    </a>
                </div>
                <div class="flex flex-col space-y-3">
                    <div class="w-full h-auto flex justify-center items-center p-2">
                        <img src="{{ asset('storage/images/png/college-logo.png') }}" alt="News and events" class="w-8/12 bg-contain h-auto rounded">
                    </div>
                    <div class="text-justify leading-relaxed tracking-normal text-xs font-medium text-gray-700">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat iste libero ipsam ipsum doloremque deserunt eius quam qui sint dolorem repellendus, laudantium, recusandae sed, expedita molestias est. Quia, iure non.
                    </div>

                    <a href="" class="py-3 px-5 bg-blue-600 w-1/2 hover:bg-blue-800 rounded text-xs font-medium text-center text-blue-100 transition duration-300">
                        Read more &DoubleRightArrow;
                    </a>
                </div>
                <div class="flex flex-col space-y-3">
                    <div class="w-full h-auto flex justify-center items-center p-2">
                        <img src="{{ asset('storage/images/png/college-logo.png') }}" alt="News and events" class="w-8/12 bg-contain h-auto rounded">
                    </div>
                    <div class="text-justify leading-relaxed tracking-normal text-xs font-medium text-gray-700">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat iste libero ipsam ipsum doloremque deserunt eius quam qui sint dolorem repellendus, laudantium, recusandae sed, expedita molestias est. Quia, iure non.
                    </div>

                    <a href="" class="py-3 px-5 bg-blue-600 w-1/2 hover:bg-blue-800 rounded text-xs font-medium text-center text-blue-100 transition duration-300">
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
