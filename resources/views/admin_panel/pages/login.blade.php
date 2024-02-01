<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login | TEJAS EV</title>
    <script src="//cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center pt-40 min-h-screen bg-zinc-900">
        <div class="text-white w-[90%] md:w-[25vw] md:h-[40vh] flex flex-col md:justify-between">
            @if (Session::has('fail'))
            <span class="bg-red-500 text-sm px-2 py-1 mb-10">{{ Session::get('fail') }}</span>
        @endif
        <div class="flex justify-center pb-10 md:pb-20">
            <img class="w-40" src="{{ asset('assets/static/logo.png') }}" alt="">
            </div>
            {{-- <p class="font-semibold text-4xl text-center py-10 uppercase">Admin Login</p> --}}
            <form action="{{route('admin_login_auth')}}" method="post" class="p-5 flex flex-col gap-5">
                @csrf
                <div class="flex flex-col gap-1">
                    <p class="text-zinc-300 px-1">Email address or Phone no</p>
                    <input type="text" class="py-2 px-3 rounded-lg bg-zinc-800 outline-none" name="email">
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-zinc-300 px-1">Password</p>
                    <input type="password" class="py-2 px-3 rounded-lg bg-zinc-800 outline-none" name="password">
                </div>
                <button
                class="bg-blue-600 font-bold py-1 rounded-lg text-lg hover:bg-blue-700 duration-500">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
