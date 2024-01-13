@extends('client_panel.component.layout')

@section('title', 'Home')

@section('content')

    <div class="bg-[url('assets/static/background.webp')] bg-fixed bg-cover w-full h-[30vh] md:h-screen">
        <div data-aos="fade-up"
            class="bg-[rgba(0,0,0,0.6)] text-white text-center flex justify-center items-center h-full w-full text-3xl md:text-8xl tracking-wider font-bold">
            <p>About Us</p>
        </div>
    </div>
    <div class="py-4 md:py-20">
        <p data-aos="fade-up" class="text-2xl md:text-5xl md:text-center font-bold md:pt-10 px-4 md:px-0">Manufacturing
            Happiness Since 2019</p>
        <p data-aos="fade-up" class="text-lg px-3 md:text-xl py-1 md:text-center pb-4">With Innovation at its core, Tejas EV
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
                <p class="text-xl md:text-5xl font-bold text-center">186+</p>
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
                    <p class="text-xl md:text-5xl font-bold text-center">37+</p>
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
        <div class="flex items-center pt-10 md:pt-0">
            <div class="w-[32%] md:w-[42%] h-[2px] bg-zinc-400"></div>
            <P class="w-[80%] md:w-[25%] text-center text-xl md:text-4xl font-bold">BE THE FUTURE OF EV</P>
            <div class="w-[32%] md:w-[42%] h-[2px] bg-zinc-400"></div>
        </div>
        <div class="flex justify-center">
            <div class="md:w-[70%] w-[90%] flex flex-col md:flex-row justify-center gap-10 md:py-20 py-10">
                <div style="box-shadow: 1px 1px 4px 1px" class="border-2 border-zinc-300 rounded-xl p-5">
                    <p class="text-3xl font-bold tracking-wider uppercase py-2">Our Vision</p>
                    <p class="text-lg text-zinc-600 px-2">Shaping a better tomorrow through
                        innovations & cutting-edge technology
                        is the vision of Tejas! Hence, it is paving
                        the way for easing the lives of humans.
                    </p>
                </div>
                <div style="box-shadow: 1px 1px 4px 1px" class="border-2 border-zinc-300 rounded-xl p-5">
                    <p class="text-3xl font-bold tracking-wider uppercase py-2">Our Mission</p>
                    <p class="text-lg text-zinc-600 px-2">Our mission is to enhance the quality of
                        living of people by ensuring a smoother
                        & better availability of Electric and
                        Electronics Consumable Goods!
                        Core Values.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="flex items-center">
            <div class="w-[32%] md:w-[42%] h-[2px] bg-zinc-400"></div>
            <P class="w-[36%] md:w-[16%] text-center text-xl md:text-4xl font-bold">OUR MOTO</P>
            <div class="w-[32%] md:w-[42%] h-[2px] bg-zinc-400"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 md:px-32 px-4 md:pt-20 md:pb-12 py-10 gap-8 md:gap-5">
            <div data-aos="zoom-in-up" class="">
                <img src="{{ asset('assets/static/create.png') }}" alt="">
                <p
                    class="text-2xl text-2xl md:text-3xl font-semibold md:py-2 pt-2 w-fit uppercase border-b-2 border-red-500">
                    Create</p>
                <ul class="text-lg text-slate-800 list-disc py-2 md:py-8 p-8 md:text-xl flex flex-col gap-3">
                    <li>Re-define mobility through the creation of a mobility roadmap.</li>
                    <li>Set best practice and benchmarks for the industry.</li>
                </ul>
            </div>
            <div data-aos="zoom-in-up" class="">
                <img src="{{ asset('assets/static/collaborate-05.png') }}" alt="">
                <p
                    class="text-2xl text-2xl md:text-3xl font-semibold md:py-2 pt-2 w-fit uppercase border-b-2 border-red-500">
                    COLLABORATE</p>
                <ul class="text-lg text-slate-800 list-disc py-2 md:py-8 p-8 md:text-xl flex flex-col gap-3">
                    <li>Leverage partnerships and exhibit Teamwork.</li>
                    <li>Co-create solutions that benefit the community, while caring for both the internal and external
                        environmental ecosystems and support sustainability.</li>
                </ul>
            </div>
            <div data-aos="zoom-in-up" class="">
                <img src="{{ asset('assets/static/inspire.png') }}" alt="">
                <p
                    class="text-2xl text-2xl md:text-3xl font-semibold md:py-2 pt-2 w-fit uppercase border-b-2 border-red-500">
                    INSPIRE</p>
                <ul class="text-lg text-slate-800 list-disc py-2 md:py-8 p-8 md:text-xl flex flex-col gap-3">
                    <li>Move forward with purpose.</li>
                    <li>Inspire our colleagues, customers and communities.</li>
                    <li>Thrive on the local and global stage.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="">
        <div class="flex items-center">
            <div class="w-[14%] md:w-[42%] h-[2px] bg-zinc-400"></div>
            <P class="w-[80%] md:w-[30%] text-center text-xl md:text-4xl font-bold">OUR MANAGEMENT TEAM</P>
            <div class="w-[14%] md:w-[42%] h-[2px] bg-zinc-400"></div>
        </div>
        <div class="flex flex-col items-center py-10 md:py-20">
            <p class="md:text-lg md:text-center md:w-[60%] w-[90%] md:pb-20 pb-5 font-semibold">Under the skilled
                stewardship of some brilliant minds, <span class="text-red-500 font-bold">Tejas- Kamakhya Group</span> is
                witnessing rapid growth and has crossed several milestones. Consequently, the
                company is expected to reach new heights in the future. In a nutshell, if we say, the
                future of Kamakhya Group is in safe hands!</p>
            <div class="md:w-[70%] w-[90%] flex flex-col md:gap-10 gap-5">
                <div data-aos="zoom-in-up"
                    class="flex flex-col items-center md:items-start md:flex-row gap-5 md:gap-10">
                    <div class="rounded-xl overflow-hidden border-2 border-red-500 md:w-[25%]">
                        <img class="w-full h-full" src="{{ asset('assets/static/vivek_sir.png') }}" alt="">
                    </div>
                    <div class="md:w-[60%] w-[95%] flex flex-col justify-between h-full">
                        <p
                            class="text-2xl md:text-3xl font-semibold md:py-2 pt-2 w-fit uppercase border-b-2 border-red-500">
                            <span class="text-red-500 font-bold">FOUNDER & MANAGING DIRECTOR (MD)</span> – <br
                                class="md:hidden"> Mr. Vivek Kumar</p>
                        <p class="text-lg py-5">Vivek Mishra, Managing Director at Kamakhya Worldwide Business Private
                            Limited, has led the organization for over two decades, focusing on quality,
                            customer experience, and expanding the product/service portfolio of Tejas.</p>
                    </div>
                </div>
                <div data-aos="zoom-in-up"
                    class="flex flex-col items-center md:items-start md:flex-row gap-5 md:gap-10">
                    <div class="rounded-xl overflow-hidden border-2 border-red-500 md:w-[25%]">
                        <img class="w-full h-full" src="{{ asset('assets/static/vivek_sir.png') }}" alt="">
                    </div>
                    <div class="md:w-[60%] w-[95%] flex flex-col justify-between h-full">
                        <p
                            class="text-2xl md:text-3xl font-semibold md:py-2 pt-2 w-fit uppercase border-b-2 border-red-500">
                            <span class="text-red-500 font-bold">CO-FOUNDER & CEO </span> - <br class="md:hidden"> Mrs.
                            Archana Mishra</p>
                        <p class="text-lg py-5">Mrs. Archana Mishra, Co-Founder & CEO of Kamakhya Worldwide Business
                            Limited, manages the Electronics Consumable Goods and Electric Vehicles
                            unit and is crucial in executing organizational operations</p>
                    </div>
                </div>
                <div data-aos="zoom-in-up"
                    class="flex flex-col items-center md:items-start md:flex-row gap-5 md:gap-10">
                    <div class="rounded-xl overflow-hidden border-2 border-red-500 md:w-[25%]">
                        <img class="w-full h-full" src="{{ asset('assets/static/vivek_sir.png') }}" alt="">
                    </div>
                    <div class="md:w-[60%] w-[95%] flex flex-col justify-between h-full">
                        <p
                            class="text-2xl md:text-3xl font-semibold md:py-2 pt-2 w-fit uppercase border-b-2 border-red-500">
                            <span class="text-red-500 font-bold">BUSINESS HEAD</span> – <br class="md:hidden"> Mr. Ashish
                            Gupta</p>
                        <p class="text-lg py-5">Ashish Gupta, with industry experience, has been appointed as Business
                            Head at Kamakhya Group, tasked with expanding the company's customer base and enhancing customer
                            experience</p>
                    </div>
                </div>
                <div data-aos="zoom-in-up"
                    class="flex flex-col items-center md:items-start md:flex-row gap-5 md:gap-10">
                    <div class="rounded-xl overflow-hidden border-2 border-red-500 md:w-[25%]">
                        <img class="w-full h-full" src="{{ asset('assets/static/vivek_sir.png') }}" alt="">
                    </div>
                    <div class="md:w-[60%] w-[95%] flex flex-col justify-between h-full">
                        <p
                            class="text-2xl md:text-3xl font-semibold md:py-2 pt-2 w-fit uppercase border-b-2 border-red-500">
                            <span class="text-red-500 font-bold">CHAIRMAN</span> - <br class="md:hidden"> Mr. Sunil Kumar
                        </p>
                        <p class="text-lg py-5">Mr. Sunil Kumar is the chairman of Kamakhya Worldwide Business Pvt. Ltd.
                            Under his tactical and visionary guidance, the future plans of the
                            organization are taken into light. His futuristic strategies and guidance
                            are nurturing almost every unit of the company.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="flex items-center">
            <div class="w-[32%] md:w-[42%] h-[2px] bg-zinc-400"></div>
            <P class="w-[36%] md:w-[16%] text-center text-xl md:text-4xl font-bold">OUR VALUES</P>
            <div class="w-[32%] md:w-[42%] h-[2px] bg-zinc-400"></div>
        </div>
        <div class="flex justify-center py-10 md:py-20">
            <div class="grid grid-cols-1 md:grid-cols-3 px-4 md:w-[60vw] gap-10">
                <div data-aos="fade-up" style="box-shadow: 2px 2px 10px 2px"
                    class="flex flex-col items-center bg-white rounded-lg p-4">
                    <img src="{{ asset('assets/static/PASSION.png') }}" alt="">
                    <p class="text-2xl font-semibold pt-5 text-zinc-800">PASSION</p>
                    <p class="text-zinc-700 py-2">We have the ‘JOSH’– we are driven to deliver our best every day; loving
                        what we do, be bold and
                        have
                        fun</p>
                </div>
                <div data-aos="fade-up" style="box-shadow: 2px 2px 10px 2px"
                    class="flex flex-col items-center bg-white rounded-lg p-4">
                    <img src="{{ asset('assets/static/INTEGRITY.png') }}" alt="">
                    <p class="text-2xl font-semibold pt-5 text-zinc-800">INTEGRITY</p>
                    <p class="text-zinc-700 py-2">Our behavior is ethical and do the right thing when no one is watching.
                    </p>
                </div>
                <div data-aos="fade-up" style="box-shadow: 2px 2px 10px 2px"
                    class="flex flex-col items-center bg-white rounded-lg p-4">
                    <img src="{{ asset('assets/static/RESPECT.png') }}" alt="">
                    <p class="text-2xl font-semibold pt-5 text-zinc-800">RESPECT</p>
                    <p class="text-zinc-700 py-2">We show regard and appreciation for everyone; celebrate diversity, act
                        with confidence yet humility.</p>
                </div>
                <div data-aos="fade-up" style="box-shadow: 2px 2px 10px 2px"
                    class="flex flex-col items-center bg-white rounded-lg p-4">
                    <img src="{{ asset('assets/static/COURAGE.png') }}" alt="">
                    <p class="text-2xl font-semibold pt-5 text-zinc-800">COURAGE</p>
                    <p class="text-zinc-700 py-2">We are Risk-takers, pioneers, unafraid to question the status-quo.</p>
                </div>
                <div data-aos="fade-up" style="box-shadow: 2px 2px 10px 2px"
                    class="flex flex-col items-center bg-white rounded-lg p-4">
                    <img src="{{ asset('assets/static/RESPONSIBLE.png') }}" alt="">
                    <p class="text-2xl font-semibold pt-5 text-zinc-800">RESPONSIBLE</p>
                    <p class="text-zinc-700 py-2">We are Accountable for our actions and performance; delivering outcomes
                        as a team, caring for each other and the environment.</p>
                </div>
                <div data-aos="fade-up" style="box-shadow: 2px 2px 10px 2px"
                    class="flex flex-col items-center bg-white rounded-lg p-4">
                    <img src="{{ asset('assets/static/RESPONSIBLE.png') }}" alt="">
                    <p class="text-2xl font-semibold pt-5 text-zinc-800">RESPONSIBLE</p>
                    <p class="text-zinc-700 py-2">We are Accountable for our actions and performance; delivering outcomes
                        as a team, caring for each other and the environment.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="flex items-center">
            <div class="w-[32%] md:w-[42%] h-[2px] bg-zinc-400"></div>
            <P class="w-[36%] md:w-[16%] text-center text-xl md:text-4xl font-bold">WHO WE ARE</P>
            <div class="w-[32%] md:w-[42%] h-[2px] bg-zinc-400"></div>
        </div>
        <div class="md:px-32 py-20 px-4 flex flex-col md:gap-20 gap-10">
            <div data-aos="fade-up" class="md:flex">
                <div class="md:w-1/2 flex items-center">
                    <img class="w-full" src="{{ asset('assets/static/about_banner.jpg') }}" alt="">
                </div>
                <div data-aos="fade-in" class="md:w-1/2 px-5">
                    <p class="text-xl md:text-3xl font-bold">TEJAS EV CORP: EXPANDING HORIZONS. SHAPING TOMORROW</p>
                    <div class="whoweare1 text-sm md:text-base line-clamp-[8] md:pt-4 pt-2">
                        <p class="py-1">With the immense credibility of a global brand and the trust of more than 110
                            million customers,
                            Tejas EV is riding into the future to address the personal mobility needs – traditional and
                            electric – of a bold new world.</p>
                        <p class="py-1">The company is constantly expanding horizons and strengthening its capabilities.
                        </p>
                        <p class="py-1">Riding on product innovation and its ever-expanding ecosystem, Tejas EV is
                            determined to
                            stay at the forefront of the transformational shift in the personal mobility space.</p>
                        <p class="py-1">Leveraging its brand credibility, R&D capabilities and technology prowess, it is
                            now geared up to
                            redefine the electric mobility space with its new brand — VIDA, Powered by Tejas.</p>
                        <p class="py-1">The company has set well-defined aspirational sustainability targets, with
                            Diversity & Inclusion
                            (D&I) at the heart of its efforts. It has adopted the Women’s Empowerment Principles, and
                            socialisation programmes for specially-abled associates.</p>
                        <p class="py-1">Tejas EV is shaping a greener, safer and equitable future.</p>
                        <p class="py-1">After all, a Tejas is what a Tejas does!</p>
                    </div>
                    <button class="text-red-500 hover:underline duration-500" name="whoweare1"
                        onclick="handleReadMore(this)">Read More</button>
                </div>
            </div>
            <div data-aos="fade-up" class="md:flex flex-row-reverse">
                <div class="md:w-1/2 flex items-center">
                    <img class="w-full" src="{{ asset('assets/static/about_banner.jpg') }}" alt="">
                </div>
                <div class="md:w-1/2 px-5">
                    <p class="text-xl md:text-3xl font-bold">TEJAS EV CORP: EXPANDING HORIZONS. SHAPING TOMORROW</p>
                    <div data-aos="fade-in" class="whoweare2 text-sm md:text-base line-clamp-[8] md:pt-4 pt-2">
                        <p class="py-1">With the immense credibility of a global brand and the trust of more than 110
                            million customers,
                            Tejas EV is riding into the future to address the personal mobility needs – traditional and
                            electric – of a bold new world.</p>
                        <p class="py-1">The company is constantly expanding horizons and strengthening its capabilities.
                        </p>
                        <p class="py-1">Riding on product innovation and its ever-expanding ecosystem, Tejas EV is
                            determined to
                            stay at the forefront of the transformational shift in the personal mobility space.</p>
                        <p class="py-1">Leveraging its brand credibility, R&D capabilities and technology prowess, it is
                            now geared up to
                            redefine the electric mobility space with its new brand — VIDA, Powered by Tejas.</p>
                        <p class="py-1">The company has set well-defined aspirational sustainability targets, with
                            Diversity & Inclusion
                            (D&I) at the heart of its efforts. It has adopted the Women’s Empowerment Principles, and
                            socialisation programmes for specially-abled associates.</p>
                        <p class="py-1">Tejas EV is shaping a greener, safer and equitable future.</p>
                        <p class="py-1">After all, a Tejas is what a Tejas does!</p>
                    </div>
                    <button class="text-red-500 hover:underline duration-500" name="whoweare2"
                        onclick="handleReadMore(this)">Read More</button>
                </div>
            </div>
            <div data-aos="fade-up" class="md:flex ">
                <div class="md:w-1/2 flex items-center">
                    <img class="w-full" src="{{ asset('assets/static/about_banner.jpg') }}" alt="">
                </div>
                <div data-aos="fade-in" class="md:w-1/2 px-5">
                    <p class="text-xl md:text-3xl font-bold">TEJAS EV CORP: EXPANDING HORIZONS. SHAPING TOMORROW</p>
                    <div class="whoweare3 text-sm md:text-base line-clamp-[8] md:pt-4 pt-2">
                        <p class="py-1">With the immense credibility of a global brand and the trust of more than 110
                            million customers,
                            Tejas EV is riding into the future to address the personal mobility needs – traditional and
                            electric – of a bold new world.</p>
                        <p class="py-1">The company is constantly expanding horizons and strengthening its capabilities.
                        </p>
                        <p class="py-1">Riding on product innovation and its ever-expanding ecosystem, Tejas EV is
                            determined to
                            stay at the forefront of the transformational shift in the personal mobility space.</p>
                        <p class="py-1">Leveraging its brand credibility, R&D capabilities and technology prowess, it is
                            now geared up to
                            redefine the electric mobility space with its new brand — VIDA, Powered by Tejas.</p>
                        <p class="py-1">The company has set well-defined aspirational sustainability targets, with
                            Diversity & Inclusion
                            (D&I) at the heart of its efforts. It has adopted the Women’s Empowerment Principles, and
                            socialisation programmes for specially-abled associates.</p>
                        <p class="py-1">Tejas EV is shaping a greener, safer and equitable future.</p>
                        <p class="py-1">After all, a Tejas is what a Tejas does!</p>
                    </div>
                    <button class="text-red-500 hover:underline duration-500" name="whoweare3"
                        onclick="handleReadMore(this)">Read More</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const handleReadMore = (params) => {
            let target = document.getElementsByClassName(params.name)[0];
            if (target.classList.contains('line-clamp-[8]')) {
                target.classList.remove('line-clamp-[8]')
                params.innerText = "Read Less"
            } else {
                target.classList.add('line-clamp-[8]')
                params.innerText = "Read More"

            }
        };
    </script>

@endsection
