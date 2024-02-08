@extends('client_panel.component.layout')

@section('title', 'Vision and Values')

@section('content')

    <div class="bg-[url('../assets/static/background.webp')] bg-fixed bg-cover w-full min-h-screen">
        <div
            class="bg-[rgba(0,0,0,0.7)] w-full gap-1 py-12 md:py-0 min-h-screen text-white flex flex-col justify-center items-center">
            <img data-aos="fade-up" class="w-40 md:w-96" src="{{ asset('assets/static/logo_white.png') }}" alt="">
            <p class="md:text-6xl text-3xl font-bold text-center">ELECTRIC VEHICLES</p>
            <p class="md:text-2xl text-sm font-">Safety | Power | Comfort</p>
            <p class="md:text-2xl text-sm font-bold text-red-500">Best Range with Comfort Ride in Slick Design</p>

        </div>
    </div>
    <div class="bg-zinc-900 w-full min-h-screen pb-10 md:px-36 ">
        <div class="flex flex-col lg:flex-row justify-between p-[1rem] md:py-20">
            <img class="w-[100%] lg:w-[45%]" src="{{ asset('assets/static/about-img3.webp')}}" alt="">
           <div class="flex flex-col w-[100%] lg:w-[50%] mt-[20px] md:mt-[0px]">
            <h1 class="text-red-500 text-[26px] md:text-[38px] font-bold">WE BELIEVE IN MOVING FORWARD WITHOUT LEAVING MOTHER NATURE BEHIND.</h1>
            <blockquote class="text-[25px] text-white leading-[33px] mt-[40px] font-thin">We’re here to nurture a lifestyle that isn’t just rich from the outside, but has deeper values rooted within it, a lifestyle that believes in giving back to the nature.</blockquote>
            <div>
                <h2 class="text-red-500 text-[33px] leading-[39px] mt-[50px] mb-[25px] ">OUR VISION</h2>
                <p class="text-white text-[18px] leading-[30px] mb-[50px]">Shaping a better tomorrow through innovations & cutting-edge technology is the vision of Tejas! Hence, it is paving the way for easing the lives of humans.</p>
            </div>
            <div>
                <h2 class="text-red-500 text-[33px] leading-[39px] mt-[0px] lg:mt-[50px]  mb-[25px]">OUR MISSION</h2>
                <p class="text-white text-[18px] leading-[30px] mb-[0px] lg:mb-[50px]">OUR mission is to enhance the quality of living of people by ensuring a smoother & better availability of Electric and Electronics Consumable Goods! Core Values.</p>
            </div>
           </div>
        </div>

        <div class="p-[1rem]">
            <h1 class="text-red-500 text-[26px] md:text-[38px] font-bold mb-[2rem]">Our Core Values: </h1>

            <div>
                <ul>
                    <li class=" mb-[2rem] text-white text-[18px] leading-[30px] mb-[0px] lg:mb-[50px]"><strong class="text-red-500 text-[26px] font-medium">Innovation: </strong>Embrace a culture of continuous improvement, fostering creativity and innovative solutions in the design, manufacturing, and functionality of home appliances and consumer electronics to meet evolving customer needs.</li>
                    <li class=" mb-[2rem] text-white text-[18px] leading-[30px] mb-[0px] lg:mb-[50px]"><strong class="text-red-500 text-[26px] font-medium">Quality Excellence: </strong>Commit to delivering high-quality products that exceed customer expectations. Uphold stringent quality standards throughout the production process, ensuring durability, reliability, and user satisfaction.</li>
                    <li class=" mb-[2rem] text-white text-[18px] leading-[30px] mb-[0px] lg:mb-[50px]"><strong class="text-red-500 text-[26px] font-medium">Customer-Centric Approach: </strong>Prioritize customer needs and satisfaction at every stage of the business. Build lasting relationships by providing exceptional customer service, addressing concerns promptly, and actively seeking feedback for continuous improvement.</li>
                    <li class=" mb-[2rem] text-white text-[18px] leading-[30px] mb-[0px] lg:mb-[50px]"><strong class="text-red-500 text-[26px] font-medium">Ethical Business Practices: </strong>Conduct business with integrity, honesty, and transparency. Adhere to ethical standards in all dealings, from sourcing raw materials to interacting with customers and partners, fostering trust and credibility.</li>
                    <li class=" mb-[2rem] text-white text-[18px] leading-[30px] mb-[0px] lg:mb-[50px]"><strong class="text-red-500 text-[26px] font-medium">Social Responsibility: </strong>We actively engage in societal well-being, taking social responsibility seriously. We follow eco-friendly practices in manufacturing and operations. Our support aligns with a commitment to a better, sustainable world.</li>
                </ul>
            </div>
        </div>
    </div>

@endsection
