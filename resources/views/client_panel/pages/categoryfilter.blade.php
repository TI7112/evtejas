@extends('client_panel.component.layout')

@section('title', 'Home')

@section('content')

<div class="bg-[url('../assets/static/background.webp')] bg-fixed bg-cover w-full min-h-screen">
    <div
        class="bg-[rgba(0,0,0,0.7)] w-full gap-1 py-12 md:py-0 min-h-screen text-white flex flex-col justify-center items-center">
        <img data-aos="fade-up" class="w-96" src="{{ asset('assets/static/logo_white.png')}}" alt="">
        <p class="md:text-6xl text-3xl font-bold text-center">ELECTRIC VEHICLES</p>
        <p class="md:text-2xl text-sm font-">Safety | Power | Comfort</p>
        <p class="md:text-2xl text-sm font-bold text-red-500">Best Range with Comfort Ride in Slick Design</p>

    </div>
</div>
    <div class="bg-zinc-900 w-full min-h-screen pb-10">
        <div class="text-white">
            <section class=" body-font">
                <div class="container px-5 mx-auto">
                    <div class="flex justify-between">
                        <p class="text-4xl font-bold py-10 font-mono">Tejas Collections</p>
                        <div class="hidden md:flex gap-5 items-center">
                            <p class="text-sm md:text-xl font-bold pb-2 uppercase">Select Category</p>
                            <select class="evcategory capitalize bg-zinc-900 outline-none border-2 p-2 text-xs md:text-lg rounded-lg font-bold" name="evcategory"
                                >
                                @foreach ($category as $value)
                                    @if ($cat->id == $value->id)
                                        <option selected value="{{ $value->cat_slug }}">{{ $value->cat_title }}</option>
                                    @else
                                        <option value="{{ $value->cat_slug }}">{{ $value->cat_title }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @if (count($product) > 0)
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 -m-4">
                        @foreach ($product as $value)
                            <div data-aos="fade-up" class="p-4 ">
                                <div
                                    class="bg-white h-full border-2 border-red-500 border-opacity-60 rounded-lg overflow-hidden">
                                    <div class="flex justify-center bg-white">
                                        @if (strlen($value->img) > 0)
                                            <img class="h-96 rounded-lg"
                                                src="{{ asset('assets/uploads/products/' . $value->img) }}"
                                                alt="">
                                        @else
                                            <img class="w-full rounded-lg" src="//picsum.photos/500/500" alt="">
                                        @endif
                                    </div>
                                    <div class="p-6">
                                        <h2
                                            class="uppercase tracking-widest text-xs title-font font-medium text-gray-900 mb-1">
                                            {{ $value->getCategory->cat_title }}
                                        </h2>
                                        <a href="/product/{{ $value->getModel->slug }}"
                                            class="title-font text-red-500 text-xl font-medium mb-3">{{ $value->getModel->title }}</a>
                                        {{-- <p class="leading-relaxed mb-3 text-zinc-800">Motor :
                                            {{ $value->getfeatures->motor }} || Range : {{ $value->getfeatures->range }} ||
                                            Capacity : {{ $value->getfeatures->capacity }}</p> --}}
                                        <div class="flex items-center flex-wrap ">
                                            <a href="/product/{{ $value->getModel->slug }}"
                                                class="text-red-500 inline-flex items-center md:mb-2 lg:mb-0">Checkout
                                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                            {{-- <span
                                                class="text-gray-900 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-red-500">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-900 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                    </path>
                                                </svg>6
                                            </span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pt-5">
                        {{-- {{ $product->links() }} --}}
                    </div>
                    @else
                    <div class="">
                        <p class="px-2 text-zinc-300">No product found</p>
                    </div>
                    @endif
                </div>
            </section>
        </div>
    </div>

    <script>
         $('.evcategory').on('change', function() {
            window.open('/category/' + this.value, '_self')
        })
    </script>

@endsection
