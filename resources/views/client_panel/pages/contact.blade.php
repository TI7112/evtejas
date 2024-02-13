@extends('client_panel.component.layout')

@section('title', 'Contact')

@section('content')

<div class="bg-[url('../public/assets/static/background.webp')] bg-fixed bg-cover w-full min-h-screen">
    <div
        class="bg-[rgba(0,0,0,0.7)] w-full gap-1 py-12 md:py-0 min-h-screen text-white flex flex-col justify-center items-center">
        <img data-aos="fade-up" class="w-60 md:w-96" src="{{ asset('assets/static/logo_white.png') }}" alt="">
        <p class="md:text-6xl text-3xl font-bold text-center">ELECTRIC VEHICLES</p>
        <p class="md:text-2xl text-sm font-">Safety | Power | Comfort</p>
        <p class="md:text-2xl text-sm font-bold text-red-500">Best Range with Comfort Ride in Slick Design</p>
    </div>
</div>
<div class="bg-zinc-800 w-full h-[90vh]">
    <p class="text-4xl font-bold tracking-wider text-center text-white py-6">Contact Us</p>
    <div class="flex gap-10 mx-44 p-5 rounded-xl bg-zinc-900">
        <div class="w-1/2 pt-5">
            <form action="{{ route('get_in_touch')}}" method="POST" class="text-white p-5 flex flex-col gap-4">
                <div class="flex flex-col gap-1">
                    <p class="text-sm">Name</p>
                    <input name="name" placeholder="Enter your name" type="text" class="outline-none border-2 text-black rounded px-1.5 py-0.5">
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-sm">Email</p>
                    <input name="email" placeholder="Enter your email" type="text" class="outline-none border-2 text-black rounded px-1.5 py-0.5">
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-sm">Contact No</p>
                    <input name="phone" placeholder="Enter your phone no" type="text" class="outline-none border-2 text-black rounded px-1.5 py-0.5">
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-sm">Subject</p>
                    <input name="Subject" placeholder="Enter your Subject" type="text" class="outline-none border-2 text-black rounded px-1.5 py-0.5">
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-sm">Concern</p>
                    <textarea name="message" placeholder="Enter your Concern" rows="4" class="outline-none border-2 text-black rounded px-1.5 py-0.5"></textarea>
                </div>
                <div class="">
                    <button type="submit" class="bg-zinc-700 px-10 py-0.5 rounded hover:bg-zinc-800 duration-500">Submit</button>
                </div>

            </form>
        </div>
        <div class="w-1/2 flex flex-col gap-5 text-white">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1496.4158931644627!2d81.0067817141245!3d26.86866373181117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1698224167370!5m2!1sen!2sin" class="w-full h-80" frameborder="0"></iframe>
            <div class="flex gap-5">
                <div class="bg-red-500 w-fit h-fit p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                      </svg>
                </div>
                <div class="">
                    <p class="font-bold font-mono">Location</p>
                    <p class=" text-sm font-mono text-zinc-400">Kamakhya Group, 4th Floor, TC 34,V/2, Levana Cyber Tower, Vibhuti Khand, Gomti Nagar, Lucknow, Uttar Pradesh, 226010.</p>
                </div>
            </div>
            <div class="flex gap-5">
                <div class="bg-red-500 w-fit h-fit p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                      </svg>
                </div>
                <div class="">
                    <p class="font-bold font-mono">Email</p>
                    <a href="mailto:sales@kamakhyagroups.com" class=" text-sm font-mono text-zinc-400">sales@kamakhyagroups.com</a>
                </div>
            </div>
            <div class="flex gap-5">
                <div class="bg-red-500 w-fit h-fit p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                </div>
                <div class="">
                    <p class="font-bold font-mono">Call</p>
                    <a href="tel:+918527124824" class="font-mono text-sm  text-zinc-400">+91 8527124824</a>
                </div>
            </div>
        </div>
    </div>
</div>        

@endsection