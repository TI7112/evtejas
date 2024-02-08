@extends('client_panel.component.layout')

@section('title', 'Store')

@section('content')

<div class="bg-[url('../assets/static/background.webp')] bg-fixed bg-cover w-full min-h-screen">
    <div
        class="bg-[rgba(0,0,0,0.7)] w-full gap-1 py-12 md:py-0 min-h-screen text-white flex flex-col justify-center items-center">
        <img data-aos="fade-up" class="w-40 md:w-96" src="{{ asset('assets/static/logo_white.png')}}" alt="">
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
                        <p class="text-2xl md:text-4xl font-bold py-10 font-mono">Tejas Collections - {{ $product[0]->getCategory->cat_title }}</p>
                        <div class="hidden md:flex gap-5 items-center">
                            <p class="text-sm md:text-xl font-bold pb-2 uppercase">Select Category</p>
                            <select class="evcategory capitalize bg-zinc-900  outline-none border-2 p-2 text-xs md:text-lg rounded-lg font-bold" name="evcategory"
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
                            <div data-aos="fade-up" class="p-4">
                                <div
                                    class="group h-full border-2 border-red-500 border-opacity-60 rounded-lg overflow-hidden">
                                    <div class="relative flex justify-center overflow-hidden bg-gradient-to-r from-zinc-800 via-zinc-300 to-zinc-800">
                                        @if (strlen($value->img) > 0)
                                            <img class="h-96 rounded-lg group-hover:scale-110 duration-500"
                                                src="{{ asset('assets/uploads/products/' . $value->img) }}"
                                                alt="">
                                        @else
                                            <img class="w-full rounded-lg" src="//picsum.photos/500/500" alt="">
                                        @endif
                                        <div class="absolute top-0 w-full px-5 py-2 text-xl font-bold tracking-wider">{{ $value->getModel->title }}</div>
                                        <div class="absolute flex justify-between bottom-0 w-full px-5 py-4 text-xl bg-[rgba(0,0,0,0.6)] font-bold tracking-wider">
                                            <p>{{ $value->getCategory->cat_title  }}</p>
                                            <a class="flex items-center text-red-500 font-medium" href="/product/{{ $value->getModel->slug }}">
                                                    <h2>Checkout</h2>
                                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
