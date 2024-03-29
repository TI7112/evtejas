@extends('client_panel.component.layout')

@section('title', 'Home')

@section('content')


    <!--<div class="hidden md:flex">-->
    <!--    <div class="swiper mySwiper">-->
    <!--        <div class="swiper-wrapper">-->
    <!--            <div class="swiper-slide w-full bg-red-500">-->
    <!--                <img class="w-full" src="{{ asset('assets/static/homepage_banner_1.png') }}" alt="">-->
    <!--            </div>-->
    <!--            <div class="swiper-slide w-full bg-red-500">-->
    <!--                <img class="w-full" src="{{ asset('assets/static/homepage_banner_2.png') }}" alt="">-->
    <!--            </div>-->

    <!--        </div>-->
    <!--        <div class="swiper-button-next hidden md:block"></div>-->
    <!--        <div class="swiper-button-prev hidden md:block"></div>-->
    <!--        <div class="swiper-pagination md:hidden"></div>-->
    <!--    </div>-->
    <!--</div>-->
    <div class="bg-[url('assets/static/background.webp')] bg-fixed bg-cover w-full min-h-screen">
        <div
            class="bg-[rgba(0,0,0,0.7)] w-full gap-1 py-12 pt-48 md:py-0 min-h-screen text-white flex flex-col justify-center items-center">
            <img data-aos="fade-up" class="w-40 md:w-96" src="{{ asset('assets/static/logo_white.png')}}" alt="">
            <p class="md:text-6xl text-3xl font-bold text-center">ELECTRIC VEHICLES</p>
            <p class="md:text-2xl text-sm font-">Safety | Power | Comfort</p>
            <p class="md:text-2xl text-sm font-bold text-red-500">Best Range with Comfort Ride in Slick Design</p>

            <div class="flex flex-col md:flex-row justify-center md:gap-10 gap-5 py-16">
                <div data-aos="zoom-in-up"
                    class="flex flex-col items-center rounded-xl gap-1 text-red-500 text-center border border-zinc-500 px-10 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
                        <path
                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5" />
                    </svg>
                    <a class="text-xl text-white font-bold" href="">Smart Electric <br> Vehicle</a>
                </div>
                <div data-aos="zoom-in-up"
                    class="flex flex-col items-center rounded-xl gap-1 text-red-500 text-center border border-zinc-500 px-10 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="w-8 h-8 border rounded pt-1 border-red-500" viewBox="0 0 24 24">
                        <path d="M3 12H7V21H3V12ZM17 8H21V21H17V8ZM10 2H14V21H10V2Z"></path>
                    </svg>
                    <a class="text-xl text-white font-bold" href="">High Speed</a>
                </div>
                <div data-aos="zoom-in-up"
                    class="flex flex-col items-center rounded-xl gap-1 text-red-500 text-center border border-zinc-500 px-10 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="w-8 h-8 border rounded pt-1 border-red-500" viewBox="0 0 24 24">
                        <path d="M3 12H7V21H3V12ZM17 8H21V21H17V8ZM10 2H14V21H10V2Z"></path>
                    </svg>
                    <a class="text-xl text-white font-bold" href="">Low Speed</a>
                </div>
                <div data-aos="zoom-in-up"
                    class="flex flex-col items-center rounded-xl gap-1 text-red-500 text-center border border-zinc-500 px-10 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
                        <path
                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5" />
                    </svg>
                    <a class="text-xl text-white font-bold" href="">Eco Friendly</a>
                </div>
                <div data-aos="zoom-in-up"
                    class="flex flex-col items-center rounded-xl gap-1 text-red-500 text-center border border-zinc-500 px-10 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
                        <path
                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5" />
                    </svg>
                    <a class="text-xl text-white font-bold" href="">Li-ion Battery</a>
                </div>
                <div data-aos="zoom-in-up"
                    class="flex flex-col items-center rounded-xl gap-1 text-red-500 text-center border border-zinc-500 px-10 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
                        <path
                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5" />
                    </svg>
                    <a class="text-xl text-white font-bold" href="">Lead Batteries </a>
                </div>
            </div>
        </div>
    </div>

    <div id="popup"
        class="hidden fixed flex justify-center items-center left-0 top-0 z-50 bg-[rgba(0,0,0,0.8)] w-full h-screen">
        <div class="bg-white w-[40vh] overflow-hidden rounded-xl">
            <div class="text-lg px-3 py-1 bg-zinc-800 flex justify-between text-white">
                <p class=" ">Get in touch....</p>
                <button onclick="handlePopupClose()">x</button>
            </div>
            <form method="post" action="{{ route('get_in_touch') }}" class="flex flex-col gap-5 bg-slate-200 p-5">
                @csrf
                <div class="">
                    <p class="text-base font-semibold">First Name</p>
                    <input class="w-full border-2 outline-none rounded-lg bg-white focus:border-red-500 px-3 py-2"
                        placeholder="Enter your first name" type="text" name="fname" id="name">
                </div>
                <div class="">
                    <p class="text-base font-semibold">Last Name</p>
                    <input class="w-full border-2 outline-none rounded-lg bg-white focus:border-red-500 px-3 py-2"
                        placeholder="Enter your last name" type="text" name="lname" id="name">
                </div>
                <div class="">
                    <p class="text-base font-semibold">Mobile Number</p>
                    <input class="w-full border-2 outline-none rounded-lg bg-white focus:border-red-500 px-3 py-2"
                        placeholder="Enter your phone no" type="text" name="phone" id="name">
                </div>
                <div class="">
                    <p class="text-base font-semibold">Email ID</p>
                    <input class="w-full border-2 outline-none rounded-lg bg-white focus:border-red-500 px-3 py-2"
                        placeholder="Enter your email id" type="text" name="email" id="name">
                </div>
                <div class="">
                    <p class="text-base font-semibold">Pin Code</p>
                    <input class="w-full border-2 outline-none rounded-lg bg-white focus:border-red-500 px-3 py-2"
                        placeholder="Enter your pincode" type="text" name="pincode" id="name">
                </div>
                <button type="submit" class="bg-red-500 rounded-full text-white px-10 py-1">Submit</button>
            </form>
        </div>
    </div>

    <div class="bg-white text-black">
        <div class="">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-full bg-red-500">
                        <img class="w-full" src="{{ asset('assets/static/homepage_banner_1.png') }}" alt="">
                    </div>
                    <div class="swiper-slide w-full bg-red-500">
                        <img class="w-full" src="{{ asset('assets/static/homepage_banner_2.png') }}" alt="">
                    </div>

                </div>
                <div class="swiper-button-next hidden md:block"></div>
                <div class="swiper-button-prev hidden md:block"></div>
                <div class="swiper-pagination md:hidden"></div>
            </div>
        </div>

        {{-- product  --}}

        {{-- <div class="py-10 md:py-0 px-4 md:px-0">
            <div class="md:flex justify-center">
                <p class="text-2xl md:text-4xl font-bold md:w-[70%]">Our Collections</p>
            </div>
            <div class="flex flex-col gap-12 py-10">
                <div class="flex flex-col md:flex-row justify-center">
                    <div class="md:w-[35%] flex justify-center h-96 rounded-t-xl md:rounded-l-xl overflow-hidden bg-white">
                        <img class="h-full" src="{{asset('assets/uploads/products/arjun.png')}}" alt="">
                    </div>
                    <div class="md:w-[35%] p-8 md:h-96 md:rounded-r-xl rounded-b-xl overflow-hidden border-2 border-red-500 border-t-0 md:border-l-0">
                        <p class="text-3xl font-bold">Arjun Series - Smart Urban Ride</p>
                        <p class="font-mono py-5 text-lg">Now you take charge of charging - We designed your electric
                            scooter so you don't worry about the range, just take the battery out and charge at any 5A
                            Plug-point close to you</p>
                        <p class="font-mono pb-5 text-lg">Now you take charge of charging - We designed your electric
                            scooter so you don't worry about the range, just take the battery out and charge at any 5A
                            Plug-point close to you</p>
                        <div class="">
                            <a class="text-lg border-red-500 border-2 hover:text-red-500 bg-red-500 hover:bg-transparent duration-500 px-5 rounded-xl py-1"
                                href="">Checkout</a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col-reverse md:flex-row justify-center">
                    <div class="md:w-[35%] p-8 md:h-96 rounded-b-xl md:rounded-l-xl overflow-hidden border-2 border-red-500 border-t-0 md:border-r-0">
                        <p class="text-3xl font-bold">Bharat Series - Basic Urban Ride</p>
                        <p class="font-mono py-5 text-lg">Now you take charge of charging - We designed your electric
                            scooter so you don't worry about the range, just take the battery out and charge at any 5A
                            Plug-point close to you</p>
                        <p class="font-mono pb-5 text-lg">Now you take charge of charging - We designed your electric
                            scooter so you don't worry about the range, just take the battery out and charge at any 5A
                            Plug-point close to you</p>
                        <div class="">
                            <a class="text-lg border-red-500 border-2 hover:text-red-500 bg-red-500 hover:bg-transparent duration-500 px-5 rounded-xl py-1"
                                href="">Checkout</a>
                        </div>
                    </div>
                    <div class="md:w-[35%] flex justify-center h-96 rounded-t-xl md:rounded-r-xl overflow-hidden bg-white">
                        <img class="h-full" src="{{asset('assets/uploads/products/bharat.png')}}" alt="">
                    </div>
                </div>
                <div class="flex flex-col md:flex-row justify-center">
                    <div class="md:w-[35%] flex justify-center h-96 rounded-t-xl md:rounded-l-xl overflow-hidden bg-white">
                        <img class="h-full" src="{{asset('assets/uploads/products/gamma-pro.png')}}" alt="">
                    </div>
                    <div class="md:w-[35%] p-8 md:h-96 md:rounded-r-xl rounded-b-xl overflow-hidden border-2 border-red-500 border-t-0 md:border-l-0">
                        <p class="text-3xl font-bold">Gamma Series - Vibrant Ride</p>
                        <p class="font-mono py-5 text-lg">Now you take charge of charging - We designed your electric
                            scooter so you don't worry about the range, just take the battery out and charge at any 5A
                            Plug-point close to you</p>
                        <p class="font-mono pb-5 text-lg">Now you take charge of charging - We designed your electric
                            scooter so you don't worry about the range, just take the battery out and charge at any 5A
                            Plug-point close to you</p>
                        <div class="">
                            <a class="text-lg border-red-500 border-2 hover:text-red-500 bg-red-500 hover:bg-transparent duration-500 px-5 rounded-xl py-1"
                                href="">Checkout</a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col-reverse md:flex-row justify-center">
                    <div class="md:w-[35%] p-8 md:h-96 rounded-b-xl md:rounded-l-xl overflow-hidden border-2 border-red-500 border-t-0 md:border-r-0">
                        <p class="text-3xl font-bold">Nickel Series - Stylish Urban Ride</p>
                        <p class="font-mono py-5 text-lg">Now you take charge of charging - We designed your electric
                            scooter so you don't worry about the range, just take the battery out and charge at any 5A
                            Plug-point close to you</p>
                        <p class="font-mono pb-5 text-lg">Now you take charge of charging - We designed your electric
                            scooter so you don't worry about the range, just take the battery out and charge at any 5A
                            Plug-point close to you</p>
                        <div class="">
                            <a class="text-lg border-red-500 border-2 hover:text-red-500 bg-red-500 hover:bg-transparent duration-500 px-5 rounded-xl py-1"
                                href="">Checkout</a>
                        </div>
                    </div>
                    <div class="md:w-[35%] flex justify-center h-96 rounded-t-xl md:rounded-r-xl overflow-hidden bg-white">
                        <img class="h-full" src="{{asset('assets/uploads/products/nickle.png')}}" alt="">
                    </div>
                </div>
                <div class="flex justify-center">
                    <a class="text-xl font-mono font-semibold uppercase hover:underline bg-red-500 px-10 py-1 rounded-lg" href="">View all</a>
                </div>
            </div>
        </div> --}}
            </div>

        {{-- Services  --}}

        <div id="service" class="md:pt-20 pt-10 px-4 bg-black text-white">
            <!--<div class="md:flex justify-center">-->
            <!--    <p class="text-2xl md:text-4xl font-bold pb-4 md:w-[70%]">CHECK OUR SERVICES</p>-->
            <!--</div>-->
            <div class="flex flex-col md:flex-row justify-between md:px-20 pb-10 gap-5 md:py-10">
                <div data-aos="zoom-in-up"
                    class="border-red-500 border-2 hover:scale-110 duration-500 rounded-lg md:w-[20%] flex flex-col justify-center items-center py-12">
                    <div class="bg-red-500 p-3 w-fit rounded text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
                            <path
                                d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                        </svg>
                    </div>
                    <a href="" class="text-2xl hover:text-red-500 duraton-500 font-bold uppercase py-2">Sales</a>
                    <p class="text-center px-4 pt-2">The best thing you get with Tejas is easy availability of the spares
                        throughouth the country. Spare availability plays a major role to increase the life of your electric
                        vehicle.</p>
                </div>
                <div data-aos="zoom-in-up"
                    class="border-red-500 border-2 hover:scale-110 duration-500 rounded-lg md:w-[20%] flex flex-col justify-center items-center py-12">
                    <div class="bg-red-500 p-3 w-fit rounded text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
                            <path
                                d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z" />
                        </svg>
                    </div>
                    <a href="" class="text-2xl hover:text-red-500 duraton-500 font-bold uppercase py-2">Spares</a>
                    <p class="text-center px-4 pt-2">Tejas E-Scooty has a very wide range of dealer network. You will get
                        the dealers through out INDIA. Our parthers & sales at stores provide you with best GUIDANCE &
                        ASSISTANCE.</p>
                </div>
                <div data-aos="zoom-in-up"
                    class="border-red-500 border-2 hover:scale-110 duration-500 rounded-lg md:w-[20%] flex flex-col justify-center items-center py-12">
                    <div class="bg-red-500 p-3 w-fit rounded text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
                            <path
                                d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z" />
                        </svg>
                    </div>
                    <a href="" class="text-2xl hover:text-red-500 duraton-500 font-bold uppercase py-2">Charging Station</a>
                    <p class="text-center px-4 pt-2">Tejas E-Scooty has a very wide range of dealer network. You will get
                        the dealers through out INDIA. Our parthers & sales at stores provide you with best GUIDANCE &
                        ASSISTANCE.</p>
                </div>
                <div data-aos="zoom-in-up"
                    class="border-red-500 hover:scale-110 duration-500 border-2 rounded-lg md:w-[20%] flex flex-col justify-center items-center py-12">
                    <div class="bg-red-500 p-3 w-fit rounded text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                            <path fill-rule="evenodd"
                                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3" />
                        </svg>
                    </div>
                    <a href="" class="text-2xl hover:text-red-500 duraton-500 font-bold uppercase py-2">Service</a>
                    <p class="text-center px-4 pt-2">We have wide network of Technician & WORKSHOP and home services. You
                        will eacily get the service and maintenance for your electric vehicle nearby you. All you have to
                        dois to Call our helpline number 011-47095975 , +91-9870368567.</p>
                </div>
        </div>

        {{-- Contact --}}

        <!--<div class="flex justify-center pb-10 p-4">-->
        <!--    <div data-aos="zoom-in-up"-->
        <!--        class="bg-zinc-800 py-5 md:py-0 text-white md:w-[80%] rounded-b-2xl justify-between md:flex items-center">-->
        <!--        <div class="md:p-12 p-4">-->
        <!--            <p class="text-red-500">OVERCOME BARRIERS TO ADOPTION</p>-->
        <!--            <p class="text-3xl font-bold">Remain focused on your core business</p>-->
        <!--        </div>-->
        <!--        <div class="md:p-10 p-5">-->
        <!--            <a class="bg-red-500 border-red-500 border-2 hover:bg-transparent px-10 py-1 rounded-full duration-500"-->
        <!--                href="{{ route('contact') }}">Get in touch</a>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>

    <script>
        // $(document).on({
        //     ajaxStart: function() {
        //         $("body").addClass("loading");
        //     },
        //     ajaxStop: function() {
        //         $("body").removeClass("loading");
        //     }
        // });


        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },

        });

        // setTimeout(() => {
        //     $('#popup').removeClass('hidden')
        // }, 10000);

        const handlePopupClose = () => {
            $('#popup').addClass('hidden')
        };
    </script>
@endsection
