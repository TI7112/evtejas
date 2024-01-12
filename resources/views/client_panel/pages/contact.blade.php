@extends('client_panel.component.layout')

@section('title', 'Home')

@section('content')

        <div id="contact" class="flex flex-col items-center md:px-0">
            <div class="md:flex w-full justify-center p-4">
                <p class="text-2xl md:text-4xl font-bold md:w-[70%]">CONTACT US</p>
            </div>
            <div class="md:w-[70%] md:py-10">
                <div class="border-red-500 md:border-2 rounded-xl w-full flex flex-col md:flex-row gap-10">
                    <div class="md:w-[50%] p-4 md:p-10 flex flex-col gap-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1496.4158931644627!2d81.0067817141245!3d26.86866373181117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1698224167370!5m2!1sen!2sin" class="w-full h-96" frameborder="0"></iframe>
                        <div class="flex gap-5">
                            <div class="bg-red-500 w-fit h-fit p-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                  </svg>
                            </div>
                            <div class="">
                                <p class="text-2xl font-bold font-mono">Location</p>
                                <p class="font-mono font-semibold text-zinc-400">Kamakhya Group, 4th Floor, TC 34,V/2, Levana Cyber Tower, Vibhuti Khand, Gomti Nagar, Lucknow, Uttar Pradesh, 226010.</p>
                            </div>
                        </div>
                        <div class="flex gap-5">
                            <div class="bg-red-500 w-fit h-fit p-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                                  </svg>
                            </div>
                            <div class="">
                                <p class="text-2xl font-bold font-mono">Email</p>
                                <a href="mailto:sales@kamakhyagroups.com" class="font-mono font-semibold text-zinc-400">sales@kamakhyagroups.com</a>
                            </div>
                        </div>
                        <div class="flex gap-5">
                            <div class="bg-red-500 w-fit h-fit p-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg>
                            </div>
                            <div class="">
                                <p class="text-2xl font-bold font-mono">Call</p>
                                <a href="tel:+9105223166636" class="font-mono font-semibold text-zinc-400">+91 0522-3166636</a>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('get_in_touch')}}" class="md:w-[50%] flex flex-col px-2 pt-10 md:py-0 pb-2 md:px-10 gap-5 bg-red-500 text-black justify-center">
                        <p class="text-3xl font-semibold">Get in Touch</p>
                        @csrf
                        <input type="text" name="name" placeholder="Enter your name....." id="name" class="bg-zinc-100 border-2 duration-500 focus:border-black px-2 py-1 rounded outline-none">
                        <input type="text" name="email" placeholder="Enter your email....." id="email" class="bg-zinc-100 border-2 duration-500 focus:border-black px-2 py-1 rounded outline-none">
                        <input type="text" name="phone" placeholder="Enter your contact number....." id="phone" class="bg-zinc-100 border-2 duration-500 focus:border-black px-2 py-1 rounded outline-none">
                        <input type="text" name="subject" placeholder="Enter your subject....." id="subject" class="bg-zinc-100 border-2 duration-500 focus:border-black px-2 py-1 rounded outline-none">
                        <textarea name="message" id="message" placeholder="Enter your concern" cols="30" rows="10" class="bg-zinc-100 border-2 duration-500 focus:border-black px-2 py-1 rounded outline-none"></textarea>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-red-600 hover:bg-red-700 duration-500 py-1 px-5 w-fit rounded font-semibold text-white">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

         

        </div>

@endsection