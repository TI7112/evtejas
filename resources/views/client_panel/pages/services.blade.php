@extends('client_panel.component.layout')

@section('title', 'Home')

@section('content')

    <div class="">
        <img class="w-full" src="{{ asset('assets/static/services_image_1.png') }}" alt="">
    </div>
    <div class="w-full flex flex-col items-center">
        <div class="flex md:w-[80%]    px-4 md:px-0 bg-white items-center md:h-[70vh]">
            <div class="md:w-1/2">
                <p data-aos="fade-up" class="text-2xl md:text-4xl font-bold tracking-wider uppercase pt-4 md:py-4"><span
                        class="text-red-500">Best</span> Ev service provider</p>
                <p data-aos="fade-up" class="py-2 text-lg text-zinc-800">Empowering the future of mobility with unparalleled
                    excellence! We are not just a service provider; we are pioneers in redefining electric vehicle
                    experiences. From cutting-edge technology to eco-friendly solutions, we deliver a seamless journey
                    toward sustainable transportation. Join us as we lead the charge for a cleaner, greener tomorrow. Your
                    trust, our drive. <span class="font-semibold">#TEJASEV #EVInnovation #TejasInnovation</span></p>
                <p data-aos="fade-up" class="py-2 text-lg text-zinc-800">Leading the charge as the #1 EV service provider,
                    we redefine excellence in electric mobility. Unmatched innovation, unparalleled service – your journey,
                    our priority. Transforming the way you move with cutting-edge technology, exceptional customer care, and
                    a commitment to sustainability. Join the revolution, where the future of transportation begins. <span
                        class="font-semibold">#TEJASEV #NumberOneEV #InnovationInMotion</span>.</p>

            </div>
            <div class="hidden md:block w-1/2">
                <img data-aos="fade-up" src="{{ asset('assets/static/services_image_1.png') }}" alt="">
            </div>
        </div>
        <div class="flex flex-col items-center md:h-[85vh] justify-center bg-zinc-300 w-full">
            <div class="flex flex-col items-center px-4 md:px-10 py-10 md:w-[80%]">
                <p data-aos="fade-up" class="text-2xl md:text-4xl font-bold tracking-wide md:pb-20 pb-10 uppercase">What we do for you?</p>
                <div class="flex flex-col md:flex-row justify-between gap-5 w-full">
                    <div data-aos="fade-up" class="md:w-[30%] bg-white rounded-xl pb-4">
                        <div class="flex p-4 w-full">
                            <img class="bg-white w-full rounded-xl"
                                src="{{ asset('assets/static/innovative_design.webp') }}" alt="">
                        </div>
                        <p class="text-2xl font-bold pl-5">Innovation in Technology</p>
                        <ul class="pl-12 pr-8 flex flex-col gap-2 py-3 list-disc ">
                            <li>Continuous improvement in battery technology for longer range and faster charging.</li>
                            <li>Integration of smart features, such as app connectivity, GPS tracking, and anti-theft
                                systems.</li>
                        </ul>
                    </div>
                    <div data-aos="fade-up" class="md:w-[30%] bg-white rounded-xl pb-4">
                        <div class="flex p-4 w-full">
                            <img class="bg-white w-full rounded-xl" src="{{ asset('assets/static/support.webp') }}"
                                alt="">
                        </div>
                        <p class="text-2xl pl-5 font-bold">Customer Support and Service</p>
                        <ul class="pl-12 pr-8 flex flex-col gap-2 py-3 list-disc ">
                            <li>Establish a responsive customer support system to address queries, issues, and maintenance
                                needs promptly.</li>
                            <li>Provide warranty and after-sales service to build trust and loyalty.</li>
                        </ul>
                    </div>
                    <div data-aos="fade-up" class="md:w-[30%] bg-white rounded-xl pb-4">
                        <div class="flex justify-center w-full p-4">
                            <img class="bg-white w-full rounded-xl" src="{{ asset('assets/static/safety_service.png') }}"
                                alt="">
                        </div>
                        <p class="text-2xl pl-5 font-bold">User Experience and Safety</p>
                        <ul class="pl-12 pr-8 flex flex-col gap-2 py-3 list-disc ">
                            <li>Prioritize user safety through features like Anti theft alarm, Central locking, and responsive braking
                                systems.</li>
                            <li>Invest in user-friendly interfaces and controls for a seamless riding experience.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
         {{-- Contact --}}

         <div class="flex justify-center w-full pb-10 p-4">
            <div data-aos="zoom-in-up"
                class="bg-zinc-800 py-5 md:py-0 text-white md:w-[80%] rounded-b-2xl justify-between md:flex items-center">
                <div class="md:p-12 p-4">
                    <p class="text-red-500">OVERCOME BARRIERS TO ADOPTION</p>
                    <p class="text-3xl font-bold">Remain focused on your core business</p>
                </div>
                <div class="md:p-10 p-5">
                    <a class="bg-red-500 border-red-500 border-2 hover:bg-transparent px-10 py-1 rounded-full duration-500"
                        href="{{ route('contact') }}">Get in touch</a>
                </div>
            </div>
        </div>
    </div>

    {{-- services page design here --}}

@endsection
