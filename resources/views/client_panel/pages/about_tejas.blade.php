@extends('client_panel.component.layout')

@section('title', 'About Tejas')

@section('content')

    <div class="bg-[url('assets/static/background.webp')] bg-fixed bg-cover w-full min-h-screen">
        <div
            class="bg-[rgba(0,0,0,0.7)] w-full gap-1 py-12 md:py-0 min-h-screen text-white flex flex-col justify-center items-center">
            <img data-aos="fade-up" class="w-40 md:w-96" src="{{ asset('assets/static/logo_white.png') }}" alt="">
            <p class="md:text-6xl text-3xl font-bold text-center">ELECTRIC VEHICLES</p>
            <p class="md:text-2xl text-sm font-">Safety | Power | Comfort</p>
            <p class="md:text-2xl text-sm font-bold text-red-500">Best Range with Comfort Ride in Slick Design</p>

        </div>
    </div>

    <div class="bg-zinc-900 w-full min-h-screen pb-10 md:px-20 "> 


        <div class="flex flex-col md:pt-[4rem] justify-evenly items-center lg:flex-row">

            <div class="w-[100%] p-[1rem] lg:w-[40%] lg:p-[0rem]">
                <img src="{{asset('assets/static/about.webp')}}" alt="" class="lg:mt-[5rem]">
            </div>
            <div class="lg:w-[50%] w-[100%] p-[1rem] lg:p-[0rem]">
                <h1 class="text-red-500 text-[26px] md:text-[50px] font-bold">About Us</h1>

                <ul class="mt-[2rem]">
                    <li class="text-[20px] leading-[30px] mb-[2rem] text-white font-sans">Experience the epitome of
                        excellence with Kamakhya Group, a distinguished player in the realms of construction and
                        manufacturing. At the forefront of our innovative endeavors is Tejas, our flagship brand that stands
                        as a beacon of sophistication in the domains of manufacturing, sales, and service of cutting-edge
                        home appliances, consumer electronics and electrical vehicles.</li>
                    <li class="text-[20px] leading-[30px] mb-[2rem] text-white font-sans">Unleashing a nationwide presence,
                        Tejas is not just a brand; it's a commitment to unparalleled quality and continual expansion. Our
                        unwavering dedication to growth is evident as we forge strategic collaborations with the
                        international technology companies, ensuring that our customers receive nothing short of the
                        best-in-class technology and groundbreaking innovation. </li>
                    <li class="text-[20px] leading-[30px] mb-[2rem] text-white font-sans">Tejas has established a
                        comprehensive business model that encompasses manufacturing, sales, and after-sales service,
                        delivering a complete solution to its customers. This integrated approach has emerged as a notable
                        differentiator in the market. By upholding ethical standards, maintaining ISO 9001:2015 quality, and
                        staying abreast of the latest industry trends, we are pioneering a new benchmark in the sector.</li>
                    <li class="text-[20px] leading-[30px] mb-[2rem] text-white font-sans">The company is relentlessly
                        working to align itself with the Indian government’s ‘Make in India’ initiative of creating
                        best-in-class manufacturing capabilities. We aim to improve people's lives through innovation and
                        technological advancement. At Tejas, we are committed to becoming the most reliable home appliances
                        brand in the country.</li>
                </ul>
            </div>

        </div>

        <div class="py-4 md:py-20">
            <p data-aos="fade-up" class="text-white text-2xl md:text-5xl md:text-center font-bold md:pt-10 px-4 md:px-0">
                Manufacturing
                Happiness Since 2019</p>
            <p data-aos="fade-up" class="text-white text-lg px-3 md:text-xl py-1 md:text-center pb-4">With Innovation at its
                core, Tejas EV
                continues to
                provide
                mobility to the aspirations of millions around the world.</p>
            <div data-aos="fade-up" class="hidden md:grid grid-cols-5 items-top gap-5 text-white md:px-32 py-10">
                <div class="bg-red-500 p-5 md:h-48 flex flex-col justify-center items-center">
                    <p class="text-xl md:text-5xl font-bold text-center">25+</p>
                    <p class="text-xs font-semibold text-center uppercase">State & UT</p>
                </div>
                <div class="relative bg-red-500 h-fit">
                    <img class="w-full" src="{{ asset('assets/static/image-2022.png') }}" alt="">
                    <div class="absolute p-5 bottom-0 bg-[rgba(0,0,0,0.6)] w-full">
                        <p class="text-5xl font-bold">1<span class="text-sm">lakh +</span></p>
                        <p class="font-semibold">SATISFIED CUSTOMERS</p>
                    </div>
                </div>
                <div class="relative bg-red-500 h-fit">
                    <img class="w-full" src="{{ asset('assets/static/image-1422.png') }}" alt="">
                    <div class="absolute p-5 bottom-0 bg-[rgba(0,0,0,0.6)] w-full">
                        <p class="text-5xl font-bold">#1<span class="text-sm"></span></p>
                        <p class="font-semibold">INNOVATIVE MANUFACTURER</p>
                    </div>
                </div>
                <div class="relative bg-red-500 h-fit">
                    <img class="w-full" src="{{ asset('assets/static/image-2024.png') }}" alt="">
                    <div class="absolute p-5 bottom-0 bg-[rgba(0,0,0,0.6)] w-full">
                        <p class="text-5xl font-bold">9000<span class="text-sm">+</span></p>
                        <p class="font-semibold">CUSTOMER TOUCH POINTS</p>
                    </div>
                </div>
                <div class="bg-red-500 p-5 md:h-48 flex flex-col justify-center items-center">
                    <p class="text-xl md:text-5xl font-bold text-center">6+</p>
                    <p class="text-xs font-semibold text-center uppercase">Year of Excellent Service</p>
                </div>
            </div>
            <div data-aos="fade-up" class="md:hidden px-2 py-4 grid grid-cols-3 text-white gap-2">
                <div class="flex flex-col gap-3 h-full">
                    <div class="bg-red-500 p-5 md:h-48 flex flex-col justify-center items-center">
                        <p class="text-xl md:text-5xl font-bold text-center">40+</p>
                        <p class="text-xs font-semibold text-center uppercase">More Country</p>
                    </div>
                    <div class="relative bg-red-500 h-full">
                        <img class="w-full h-full" src="{{ asset('assets/static/image-2024.png') }}" alt="">
                        <div class="absolute p-5 bottom-0 bg-[rgba(0,0,0,0.6)] w-full">
                            <p class="text-xl font-bold">9000<span class="text-sm">+</span></p>
                            <p class="text-[10px] font-semibold">CUSTOMER TOUCH POINTS</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="relative bg-red-500 ">
                        <img class="w-full" src="{{ asset('assets/static/image-2022.png') }}" alt="">
                        <div class="absolute p-5 bottom-0 bg-[rgba(0,0,0,0.6)] w-full">
                            <p class="text-xl font-bold">110<span class="text-sm">million</span></p>
                            <p class="text-[10px] font-semibold">SATISFIED CUSTOMERS</p>
                        </div>
                    </div>
                    <div class="bg-red-500 p-5 md:h-48 flex flex-col justify-center items-center">
                        <p class="text-xl md:text-5xl font-bold text-center">7+</p>
                        <p class="text-xs font-semibold text-center uppercase">Year of Excellent Service</p>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="relative bg-red-500 h-full">
                        <img class="w-full h-full" src="{{ asset('assets/static/image-1422.png') }}" alt="">
                        <div class="absolute p-5 bottom-0 bg-[rgba(0,0,0,0.6)] w-full">
                            <p class="text-xl font-bold">#1<span class="text-sm"></span></p>
                            <p class="text-[10px] font-semibold">EV MANUFACTURER</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="">
            <div class="flex items-center">
                <div class="w-[14%] md:w-[42%] h-[2px] bg-zinc-400"></div>
                <P class="text-white w-[80%] md:w-[30%] text-center text-xl md:text-4xl font-bold">OUR MANAGEMENT TEAM</P>
                <div class="w-[14%] md:w-[42%] h-[2px] bg-zinc-400"></div>
            </div>
            <div class="text-white flex flex-col items-center py-10 md:py-20">
                <p class="md:text-lg md:text-center md:w-[60%] w-[90%] md:pb-20 pb-5 font-semibold">Under the skilled
                    stewardship of some brilliant minds, <span class="text-red-500 font-bold">Tejas- Kamakhya Group</span>
                    is
                    witnessing rapid growth and has crossed several milestones. Consequently, the
                    company is expected to reach new heights in the future. In a nutshell, if we say, the
                    future of Kamakhya Group is in safe hands!</p>


                <div class="flex flex-col sm:flex-row justify-center gap-8 flex-wrap px-8">

                    <div data-aos="zoom-in-up" class="group cursor-pointer w-[100%] md:w-[30%] bg-zinc-800 rounded-xl">
                        <div class="rounded-xl overflow-hidden relative">
                            <img class="w-full h-full" src="{{ asset('assets/static/vivek_sir.png') }}" alt="">
                            <div class="min-h-full group-hover:bg-[rgba(0,0,0,0.8)] duration-300 p-5 absolute top-0 flex items-center">
                                <p class="text-2xl hidden group-hover:block font-semibold duration-300 text-center">Managing
                                    Director at Kamakhya Worldwide Business Private
                                    Limited, has led the organization for over two decades, focusing on quality,
                                    customer experience, and expanding the product/service portfolio of Tejas.</p>
                            </div>

                        </div>
                        <div class="2xl:text-[1.8rem] text-center mt-[1rem] text-white p-[1rem] font-bold">
                            <p class=""> FOUNDER & MANAGING DIRECTOR (MD) </p>
                            <p class="">Mr.Vivek Kumar</p>
                        </div>
                    </div>

                    {{-- <div data-aos="zoom-in-up" class="group cursor-pointer w-[100%] md:w-[30%] bg-zinc-800 rounded-xl">
                        <div class="rounded-xl overflow-hidden relative">
                            <img class="w-full h-full" src="{{ asset('assets/static/vivek_sir.png') }}" alt="">
                            <div class="min-h-full group-hover:bg-[rgba(0,0,0,0.8)] duration-300 p-5 absolute top-0 flex items-center">
                                <p class="text-2xl hidden group-hover:block font-semibold duration-300 text-center">
                                    Mrs. Archana Mishra, Co-Founder & CEO of Kamakhya Worldwide Business
                                    Limited, manages the Electronics Consumable Goods and Electric Vehicles
                                    unit and is crucial in executing organizational operations</p></div>

                        </div>
                        <div class="2xl:text-[1.8rem] text-center mt-[1rem] text-white p-[1rem] font-bold">
                            <p class=""> CO-FOUNDER & CEO </p>
                            <p class=""> Mrs. Archana Mishra</p>
                        </div>
                    </div>

                    <div data-aos="zoom-in-up" class="group cursor-pointer w-[100%] md:w-[30%] bg-zinc-800 rounded-xl">
                        <div class="rounded-xl overflow-hidden relative">
                            <img class="w-full h-full" src="{{ asset('assets/static/vivek_sir.png') }}" alt="">
                            <div class="min-h-full group-hover:bg-[rgba(0,0,0,0.8)] duration-300 p-5 absolute top-0 flex items-center">
                                <p class="text-2xl hidden group-hover:block font-semibold duration-300 text-center">
                                    Ashish Gupta, with industry experience, has been appointed as Business
                                    Head at Kamakhya Group, tasked with expanding the company's customer base and enhancing customer
                                    experience</p>
                                </div>

                        </div>
                        <div class="2xl:text-[1.8rem] text-center mt-[1rem] text-white p-[1rem] font-bold">
                            <p class=""> BUSINESS HEAD</p>
                            <p class="">Mr. Ashish Gupta</p>
                        </div>
                    </div>

                    <div data-aos="zoom-in-up" class="group cursor-pointer w-[100%] md:w-[30%] bg-zinc-800 rounded-xl">
                        <div class="rounded-xl overflow-hidden relative">
                            <img class="w-full h-full" src="{{ asset('assets/static/vivek_sir.png') }}" alt="">
                            <div class="min-h-full group-hover:bg-[rgba(0,0,0,0.8)] duration-300 p-5 absolute top-0 flex items-center">
                                <p class="text-2xl hidden group-hover:block font-semibold duration-300 text-center">
                                    Mr. Sunil Kumar is the chairman of Kamakhya Worldwide Business Pvt. Ltd.
                                    Under his tactical and visionary guidance, the future plans of the
                                    organization are taken into light. His futuristic strategies and guidance
                                    are nurturing almost every unit of the company.</p>
                            </div>

                        </div>
                        <div class="2xl:text-[1.8rem] text-center mt-[1rem] text-white p-[1rem] font-bold">
                            <p class=""> CHAIRMAN </p>
                            <p class="">Mr. Sunil Kumar</p>
                        </div>
                    </div> --}}
                </div>

            </div>
        </div>









        <div class="px-3 md:px-10">
            <div class="w-full md:h-96 p-4 py-10 flex justify-center">
                <div class="bg-zinc-800 rounded-xl">
                    <div class="flex flex-col md:flex-row p-4 justify-between md:px-10 items-center text-white h-full">
                        <div class="md:w-[60%] flex flex-col gap-4">
                            <p class="text-3xl md:text-5xl font-bold tracking-wider ">Have any doubt?</p>
                            <p class="md:text-xl md:font-semibold text-slate-400">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Illum autem saepe neque quisquam
                                quibusdam alias eveniet cumque hic reiciendis. Porro, mollitia id dolores ducimus ea enim
                                sed
                                deserunt est possimus!</p>
                        </div>
                        <div class="md:w-[40%] pt-5 md:pt-0 flex justify-end">
                            <a class="bg-red-500 px-10 md:text-2xl text-sm py-2 rounded-xl border-2 font-semibold border-red-500 hover:bg-zinc-900 hover:text-red-500 duration-500"
                                href="">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>



@endsection
