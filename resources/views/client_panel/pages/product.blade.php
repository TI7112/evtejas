@extends('client_panel.component.layout')

@section('title', 'Home')

@section('content')

    <div class="relative bg-white h-screen md:h-[125vh] border-b-4">
        <div
        class="w-full h-screen pt-52 md:pt-0 bg-cover bg-no-repeat flex justify-between gap-10 bg-[url('/assets/static/product_bg.jpg')] md:px-32 px-4">
        <p class="md:hidden absolute top-2 font-bold text-white text-sm tracking-wider pl-2">{{$product->title}} </p>
            <div class="flex flex-col text-white py-10 gap-2 md:gap-5 h-full md:w-96">
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold uppercase">{{ $product->getfeatures->battery }}</p>
                        <p class="text-[8px] md:text-xs">Battery Power</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->motor }}</p>
                        <p class="text-[8px] md:text-xs">Motor (watt)</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->capacity }}</p>
                        <p class="text-[8px] md:text-xs">Capacity</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->range }}</p>
                        <p class="text-[8px] md:text-xs">Range</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->charging_time }}</p>
                        <p class="text-[8px] md:text-xs">Charging Time</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->fast_charging_time }}</p>
                        <p class="text-[8px] md:text-xs">Fast Charging Time</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->front_suspension }}</p>
                        <p class="text-[8px] md:text-xs">Front Suspension</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->rear_suspension }}</p>
                        <p class="text-[8px] md:text-xs">Rear Suspension</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->brakes_type }}</p>
                        <p class="text-[8px] md:text-xs">Brake Type</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->loading_capacity }}</p>
                        <p class="text-[8px] md:text-xs">Loading Capacity</p>
                    </div>
                </div>
            </div>
            <div class="hidden lg:flex flex-col text-white py-10 gap-5 h-full md:w-96">
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->tyre }}</p>
                        <p class="text-[8px] md:text-xs">Tyre Type</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->alloy_type }}</p>
                        <p class="text-[8px] md:text-xs">Alloy Type</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->tyre_size }}</p>
                        <p class="text-[8px] md:text-xs">Tyre Size</p>
                    </div>
                </div>
            </div>
            <div class="hidden lg:flex flex-col text-white py-10 gap-5 h-full md:w-96">
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->head_lights }}</p>
                        <p class="text-[8px] md:text-xs">Headlight</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->back_light }}</p>
                        <p class="text-[8px] md:text-xs">Tail-light</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->light }}</p>
                        <p class="text-[8px] md:text-xs">Light</p>
                    </div>
                </div>
            </div>

            <div class="w-1/2 flex flex-col text-white py-10 gap-2 md:gap-5 h-full md:w-96">
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->dimension }}</p>
                        <p class="text-[8px] md:text-xs">Dimension</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->body_type }}</p>
                        <p class="text-[8px] md:text-xs">Body TYPE</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->ground_clearance }}</p>
                        <p class="text-[8px] md:text-xs">Ground Clearance</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->speed_mode }} Speed Mode</p>
                        <p class="text-[8px] md:text-xs">Speed Sport Mode</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex items-center gap-4 p-2 md:p-3 rounded-lg">
                    <div class="bg-[rgba(255,255,255,0.3)] rounded-full p-3">
                        <p class="font-bold text-[8px] md:text-sm">KM</p>
                    </div>
                    <div class="">
                        <p class="text-[10px] md:text-sm font-bold">{{ $product->getfeatures->warrenty }}</p>
                        <p class="text-[8px] md:text-xs">Warrenty</p>
                    </div>
                </div>
                <div class="bg-[rgba(0,0,0,0.6)] flex flex-col justify-center  p-3 rounded-lg">
                    <div class="flex items-center gap-4">
                        <div class="bg-[rgba(255,255,255,0.3)] rounded-full w-6 h-6 flex items-center justify-center">
                            <p class="font-bold text-[10px] sm:text-sm text-center">#</p>
                        </div>
                        <p class="font-bold text-xs md:text-base">Additional Featues</p>
                    </div>
                    @php
                        $feature = explode(',', $product->getfeatures->additional_features);
                    @endphp
                    <ul class="list-disc md:px-16 pl-7 py-4">
                        @foreach ($feature as $value)
                            <li class="capitalize text-[10px] md:text-base">{{ $value }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="md:absolute hidden md:flex pt-10 z-10 md:bottom-16 bottom-2 md:px-32 px-3 w-full justify-between">
            <div class="md:w-1/4">
                <p class="text-sm md:text-xl font-bold pb-2 uppercase">Select Model</p>
                <select class="evmodel w-full outline-none border-2 p-2 text-xs md:text-2xl font-bold" name="evmodel"
                    >
                    @foreach ($relatedproduct as $value)
                        @if ($product->slug == $value->slug)
                            <option selected value="{{ $value->slug }}">{{ $value->title }}</option>
                        @else
                            <option value="{{ $value->slug }}">{{ $value->title }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="md:w-1/4">
                <p class="font-bold uppercase">Price</p>
                <p class="font-bold pb-2 uppercase text-sm md:text-3xl text-red-500">Rs. {{$product->Price}} /- <del
                        class="text-[8px] md:text-xs text-slate-600">Rs. {{ floor(intval($product->Price) * (intval(str_replace('%' , '' ,$product->discount)) / 100)) }} /-</del> </p>
                <button onclick="handleEnquiry()"
                    class="md:text-xl text-sm border-2 border-red-500 hover:text-red-500 hover:bg-white duration-500 bg-red-500 text-white md:px-10 md:py-2 px-4 py-0.5 rounded">Enquiry
                    Now</button>
            </div>
        </div>
        <div class="absolute p-4 bg-[rgba(0,0,0,0.6)] md:bg-transparent flex md:justify-center w-full md:top-auto top-10 md:bottom-20">
            <div class="md:bg-[rgba(255,255,255,0.3)] bg-white rounded-full w-[40vw] h-[40vw] flex justify-center items-end border-2">
                <img class="absolute -bottom-2 md:-bottom-16 w-[30vw]" src="{{ asset('assets/uploads/products/'.$product->img) }}" alt="">
            </div>
            <div class="pl-5 md:hidden text-white flex flex-col gap-2">
                <div class="md:w-1/4 ">
                    <p class="text-sm md:text-xl font-bold pb-2 uppercase">Select Model</p>
                    <select class="evmodel w-full bg-transparent outline-none md:border-2 border rounded p-2 text-xs md:text-2xl font-bold" name="evmodel"
                        >
                        @foreach ($relatedproduct as $value)
                            @if ($product->slug == $value->slug)
                                <option selected value="{{ $value->slug }}">{{ $value->title }}</option>
                            @else
                                <option class="text-black" value="{{ $value->slug }}">{{ $value->title }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="md:w-1/4">
                    <p class="font-bold uppercase">Price</p>
                    <p class="font-bold pb-2 uppercase text-sm md:text-3xl text-red-500">Rs. {{$product->Price}} /- <del
                            class="text-[8px] md:text-xs text-slate-600">Rs. {{ floor(intval($product->Price) * (intval(str_replace('%' , '' ,$product->discount)) / 100)) }} /-</del> </p>
                    <button onclick="handleEnquiry()"
                        class="md:text-xl text-sm border-2 border-red-500 hover:text-red-500 hover:bg-white duration-500 bg-red-500 text-white md:px-10 md:py-2 px-4 py-0.5 rounded">Enquiry
                        Now</button>
                </div>
            </div>
        </div>
    </div>
    <div id="enquiry"
        class="hidden fixed flex justify-center px-4 items-center top-0 left-0 z-50 w-full h-screen bg-[rgba(0,0,0,0.6)]">
        <div class="bg-white w-full md:w-[30vw] rounded-xl overflow-hidden">
            <div class="bg-red-500 flex justify-between font-bold text-xl text-white">
                <p class="py-2 px-4">Enquiry now</p>
                <button onclick="handleEnquiry()" class="py-2 px-4 hover:bg-red-600">x</button>
            </div>
            <form method="post" action="{{ route('enquire') }}"
                class="flex flex-col px-4 md:py-5 pb-2 gap-5 justify-center">
                @csrf
                <div class="flex flex-col gap-5 md:flex-row gap-2">
                    <div class="w-full">
                        <p class="text-sm font-semibold p-0.5">Name</p>
                        <input required type="text" name="name" placeholder="Enter your name....." id="name"
                            class="w-full border-2 duration-500 focus:border-red-500 px-2 py-2 rounded outline-none">
                    </div>
                    <div class="w-full">
                        <p class="text-sm font-semibold p-0.5">Email</p>
                        <input required type="text" name="email" placeholder="Enter your email....." id="email"
                            class="w-full border-2 duration-500 focus:border-red-500 px-2 py-2 rounded outline-none">
                    </div>
                </div>
                <div class="w-full">
                    <p class="text-sm font-semibold p-0.5">Model</p>
                    <input required type="text" name="model" readonly value="{{ $product->title }}"
                        placeholder="Enter your model....." id="model"
                        class="border-2 duration-500 w-full focus:border-red-500 px-2 py-1 rounded outline-none">
                </div>
                <div class="w-full">
                    <p class="text-sm font-semibold p-0.5">Message</p>
                    <textarea required name="message" id="message" placeholder="Enter your concern" rows="4"
                        class="border-2 duration-500 w-full focus:border-red-500 px-2 py-1 rounded outline-none"></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-red-600 text-white hover:bg-red-700 duration-500 py-1 px-5 w-fit rounded font-semibold">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function handleEnquiry() {
            if (enquiry.classList.contains('hidden')) {
                enquiry.classList.remove('hidden')
            } else {
                enquiry.classList.add('hidden')
            }
        }
        $('.evmodel').on('change', function() {
            window.open('/product/' + this.value, '_self')
        })
    </script>
@endsection
