<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Tejas EV</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="//cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</head>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body>
    {{-- header  --}}
    <div class="fixed w-full z-50 flex justify-between bg-[rgba(0,0,0,0.8)] bg-blur py-2 md:px-36 px-4">
        <div class="flex w-full gap-4">
            <button onclick="handlemobilemenu()" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-10 h-10 text-sky-700"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
            </button>
            <div id="mobilemenu"
                class="duration-500 bg-zinc-800 -translate-x-full w-full h-screen bg-transparent fixed top-[72px] left-0">
                <div class="grid grid-cols-2">
                    <div class="">
                        <p class="text-2xl text-white px-5 pt-6">Quicklinks</p>
                        <div class="text-zinc-300 px-8 py-2 flex flex-col">
                            <a href="/" class="text-lg hover:underline">Home</a>
                            <a href="{{ route('about') }}" class="text-lg hover:underline">About</a>
                            <a href="{{ route('store') }}" class="text-lg hover:underline">Products</a>
                            <a href="{{ route('services') }}" class="text-lg hover:underline">Services</a>
                            <a href="{{ route('contact') }}" class="text-lg hover:underline">Contact</a>
                        </div>
                    </div>
                    <div class="">
                        <p class="text-2xl text-white px-5 pt-6">Category</p>
                        <div class="text-zinc-300 px-8 py-2 flex flex-col">
                            @foreach ($category as $value)
                                <a href="/category/{{ $value->cat_slug }}"
                                    class="text-lg hover:underline capitalize ">{{ $value->cat_title }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center w-full lg:w-auto">
                <a href="{{ route('home') }}">
                    <img class="w-40" src="{{ asset('assets/static/logo_white.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="hidden w-full justify-end md:flex text-white font-semibold items-center gap-5">
            <a class="hover:underline hover:text-white duration-500" href="/">Home</a>
            <div x-data="{ open: false }">
                <button @click="open = !open" class="hover:underline hover:text-white duration-500">About</button>
                <div x-show="open" class="absolute top-[74px] bg-zinc-900 w-60 rounded -ml-8">
                    <div class="flex flex-col py-4">
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="{{ route('about') }}">About Tejas</a>
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="{{ route('about') }}">About TEJAS EV</a>
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="{{ route('about') }}">Vision & Value</a>
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="{{ route('about') }}">Mission</a>
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="{{ route('about') }}">Tejas Offices</a>
                    </div>
                </div>
            </div>
            <div x-data="{ open: false }">
                <button @click="open = !open" class="hover:underline hover:text-white duration-500">Products</button>
                <div x-show="open" class="absolute top-[74px] bg-zinc-900 w-60 rounded -ml-8">
                    <div class="flex flex-col py-4">
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="/category/low-speed">Low Speed</a>
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="/category/high-speed">Hign Speed</a>
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="/category/spares-and-parts">Spares and
                            Parts</a>
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="/category/battery">Battery</a>
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="/category/charger">Charger</a>
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="/category/helmet">Helmet</a>
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="/category/jacket">Jacket</a>
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="/category/charging-station">Charging
                            Station</a>
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="/category/swapping-station">Swapping
                            Station</a>
                    </div>
                </div>
            </div>
            <div x-data="{ open: false }">
                <button @click="open = !open" class="hover:underline hover:text-white duration-500">Shop Now</button>
                <div x-show="open" class="absolute top-[74px] bg-zinc-900 w-60 rounded -ml-8">
                    <div class="flex flex-col py-4">
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="{{ route('store') }}">E-store</a>
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="">Store Locator</a>
                    </div>
                </div>
            </div>
            <div x-data="{ open: false }">
                <button @click="open = !open" class="hover:underline hover:text-white duration-500">Services</button>
                <div x-show="open" class="absolute top-[74px] bg-zinc-900 w-60 rounded -ml-8">
                    <div class="flex flex-col py-4">
                        <a class="py-2 pl-8 uppercase hover:bg-zinc-800" href="{{ route('services') }}">EV
                            Services</a>
                    </div>
                </div>
            </div>
            <a class="hover:underline hover:text-white duration-500" href="{{ route('contact') }}">Consumer Care</a>
        </div>
    </div>
    {{-- body  --}}
    <div class="min-h-[80vh]">
        @yield('content')
    </div>
    {{-- footer  --}}
    <div class="">
        <!--<div class="flex justify-center">-->
        <!--    <img class="md:w-[70%] grayscale h-60" src="https://www.evhero.co.uk/wp-content/uploads/2018/11/New-eco-illo@2x.png" alt="">-->
        <!--</div>-->
        <div class="flex flex-col md:flex-row md:gap-20 gap-5 px-4 md:px-20 bg-zinc-900 py-4 md:py-8 text-white">
            <div class="md:w-[30%]">
                <p class="text-2xl font-semibold font-mono uppercase">ABOUT US</p>
                <div class="flex flex-col gap-1 pt-3 px-2">
                    <div class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="red" class="w-6 h-6" viewBox="0 0 16 16">
                            <path
                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg>
                        <a class="hover:underline hover:text-red-500 duration-500"
                            href="https://maps.app.goo.gl/TXekDoftvV6DywsD6.">
                            <p> 23, Panchkuia Road, R.K. Ashram Marg, <br>
                                New Delhi, Delhi - 110001 </p>
                        </a>
                    </div>
                    <div class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="red" class="w-4 h-4" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <p class="flex flex-wrap">
                            <a class="hover:underline hover:text-red-500 duration-500"
                                href="tel:01147095975">011-47095975</a>
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="red" class="w-4 h-4 mt-1"
                            viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg>
                        <p class="flex flex-wrap">
                            <a class="hover:underline hover:text-red-500 duration-500"
                                href="tel:+919870368567">+91-9870368567</a>
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="red" class="w-4 h-4" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                        </svg>
                        <a class="hover:underline hover:text-red-500 duration-500"
                            href="mailto:sales@kamakhyagroups.com">
                            <p>sales@kamakhyagroups.com</p>
                        </a>
                    </div>

                </div>
            </div>
            <div class="md:w-[20%]">
                <p class="text-2xl font-semibold font-mono uppercase">OUR BUSINESS</p>
                <div class="flex flex-col gap-1 pt-3 px-2">
                    <a class="hover:underline hover:text-red-500 duration-500" href="">Home Appliances</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="">Electric Vehicles</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="">Renewable Energy</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="">Construction</a>
                </div>
            </div>
            <div class="md:w-[20%]">
                <p class="text-2xl font-semibold font-mono uppercase">OUR SERVICES</p>
                <div class="flex flex-col gap-1 pt-3 px-2">
                    <a class="hover:underline hover:text-red-500 duration-500" href="/contact">Book Demo</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="/contact">Sales</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="/contact">Service</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="/contact">Suggestion</a>
                </div>
            </div>
            <div class="md:w-[20vw] flex flex-col justify-center w-full lg:w-auto">
                <a href="{{ route('home') }}">
                    <img class="w-80" src="{{ asset('assets/static/kamakhya_logo.png') }}" alt="">
                </a>
                <p class="pl-16 pt-2">A unit of <a href="{{ route('home') }}">Kamakhya Group</a></p>
                <div class="pl-8 flex gap-2 justify-center py-2">
                    <a class="flex items-center gap-2 hover:underline hover:text-red-500 duration-500" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                    </a>
                    <a class="flex items-center gap-2 hover:underline hover:text-red-500 duration-500" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg>
                    </a>
                    <a class="flex items-center gap-2 hover:underline hover:text-red-500 duration-500" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                        </svg>
                    </a>
                    <a class="flex items-center gap-2 hover:underline hover:text-red-500 duration-500" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-youtube" viewBox="0 0 16 16">
                            <path
                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                        </svg>
                    </a>
                    <a class="flex items-center gap-2 hover:underline hover:text-red-500 duration-500" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-pinterest" viewBox="0 0 16 16">
                            <path
                                d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0" />
                        </svg>
                    </a>
                    <a class="flex items-center gap-2 hover:underline hover:text-red-500 duration-500" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div
            class="md:flex-row flex flex-col items-center gap-2 justify-center py-3 text-white text-sm bg-slate-800 md:px-20 px-4">
            <p class="">© 2023 All rights reserved | <a href="{{ route('home') }}">Kamakhya Group</a></p>
            <!--{{-- =<img src="{{ asset('/assets/static/payments.webp') }}" alt=""> --}}-->
        </div>
    </div>
    <script>
        AOS.init();
        const handlemobilemenu = () => {
            if (mobilemenu.classList.contains('translate-x-0')) {
                mobilemenu.classList.replace('translate-x-0', '-translate-x-full')
            } else {
                mobilemenu.classList.replace('-translate-x-full', 'translate-x-0')

            }
        };
    </script>
</body>

</html>
