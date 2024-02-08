@extends('client_panel.component.layout')

@section('title', 'About Tejas EV')

@section('content')

<div class="bg-[url('../assets/static/background.webp')] bg-fixed bg-cover w-full min-h-screen">
    <div
        class="bg-[rgba(0,0,0,0.7)] w-full gap-1 py-12 md:py-0 min-h-screen text-white flex flex-col justify-center items-center">
        <img data-aos="fade-up" class="w-60 md:w-96" src="{{ asset('assets/static/logo_white.png') }}" alt="">
        <p class="md:text-6xl text-3xl font-bold text-center">ELECTRIC VEHICLES</p>
        <p class="md:text-2xl text-sm font-">Safety | Power | Comfort</p>
        <p class="md:text-2xl text-sm font-bold text-red-500">Best Range with Comfort Ride in Slick Design</p>

    </div>
</div>

@endsection