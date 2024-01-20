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
                    <img class="w-40" src="{{ asset('assets/static/kamakhya_logo.png') }}" alt="">
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
            <a class="hover:underline hover:text-white duration-500" href="{{ route('services') }}">Services</a>
            <a class="hover:underline hover:text-white duration-500" href="{{ route('contact') }}">Contact us</a>
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
            <div class="md:w-[20%]">
                <p class="text-2xl font-semibold font-mono uppercase">CONNECT US</p>
                <div class="flex flex-col gap-3 pt-3 px-2">
                    <a class="flex items-center gap-2 hover:underline hover:text-red-500 duration-500" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                        <p>Facebook</p>
                    </a>
                    <a class="flex items-center gap-3 hover:underline hover:text-red-500 duration-500" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-twitter" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                        </svg>
                        <p>Twitter</p>
                    </a>
                    <a class="flex items-center gap-3 hover:underline hover:text-red-500 duration-500" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg>
                        <p>Whatsapp</p>
                    </a>
                    <a class="flex items-center gap-3 hover:underline hover:text-red-500 duration-500" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                        </svg>
                        <p>Linkedin</p>
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
