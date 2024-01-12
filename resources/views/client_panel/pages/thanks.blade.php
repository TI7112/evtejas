@extends('client_panel.component.layout')

@section('title', 'Home')

@section('content')

    <div class="bg-zinc-200 flex justify-center items-center w-full h-screen">
        <div style="box-shadow: 1px 3px 5px 1px" class="relative bg-white overflow-hidden w-[60%] h-[60%] rounded-xl">
            <p class="text-5xl font-bold tracking-wider font-serif text-red-500 text-center py-5 pt-12">Thanks for Submission
            </p>
            <p class="px-10 text-xl tracking-wider">{{ $message }} We have proceed your request. Our Team will reach you within 24 hour.
            </p>
            <p class="absolute bottom-4 text-center w-full font-semibold text-lg">Redirecting to product page in <span
                    id="timer">10</span> ms</p>
            <div id="progressbar"
                class="absolute duration-1000 w-0 bottom-0 h-[6px] bg-gradient-to-r from-red-500 via-yellow-500 to-teal-500">
            </div>
        </div>
    </div>

    <script>
        setInterval(() => {
            progressbar.classList.replace('w-0', 'w-full')
            if (timer.innerText > 0) {
                timer.innerText = parseInt(timer.innerText) - 1;
            }
        }, 100);
        setTimeout(() => {
            alert('Our team will connect you within 24 hour.')
            window.open('/store', '_self')
        }, 500);
    </script>

@endsection
