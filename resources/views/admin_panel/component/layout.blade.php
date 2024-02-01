<!DOCTYPE html>
<html class="dark scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/dist/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="//cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
</head>

<body class="h-screen">

    <header class="h-14 bg-gray-100 top-0 w-full fixed shadow" style="z-index: 10;">
        <div class="flex justify-between items-center px-10 h-14">
            <div class="flex justify-between items-center gap-x-14">
                <div class="w-40">
                    <h2 class="text-md font-bold" href="#">{{ $sessionUser -> name}}</h2>
                    <p class="capitalize text-gray-400 text-[12px]">
                        {{$sessionUser -> designation}}
                    </p>
                </div>

                <a id="toggle-button"
                    class="hidden lg:block bg-gray-200 rounded-full transition-all duration-500 ease-in-out"
                    onclick="collapseSidebar()" href="#"><i class="fa-solid fa-arrow-left p-3"></i></a>
            </div>

            <ul class="flex items-center gap-5">
                <li class=""><a class="bg-gray-200 px-3 py-2 rounded-sm" href="#"><i
                            class="fa-regular fa-bell"></i></a>
                </li>
                <li class="" onclick="openUserDropdown()">
                    <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white cursor-pointer"
                        src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                    <ul id="user-dropdown" class="absolute hidden bg-white right-4 top-14 w-28 rounded shadow-md">
                        <li class="mb-1 hover:bg-gray-50 text-gray-700 hover:text-gray-900"><a class="block px-5 py-2"
                                href="#">Profile</a></li>
                        <li class="mb-1 hover:bg-gray-50 text-gray-700 hover:text-gray-900"><a class="block px-5 py-2"
                                href="#">Settings</a></li>
                        <li class="mb-1 hover:bg-gray-50 text-gray-700 hover:text-gray-900"><a class="block px-5 py-2"
                                href="{{route('admin_logout')}}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    <!-- main content -->
    <main class="h-[calc(100vh-120px)] w-full absolute top-14">
        <!-- left sidebar -->
        <aside id="sidebar"
            class="w-[60px] lg:w-[240px] h-[calc(100vh-120px)] whitespace-nowrap fixed shadow overflow-x-hidden transition-all duration-500 ease-in-out">
            <div class="flex flex-col justify-between h-full">
                <ul class="flex flex-col gap-1 mt-2">
                    <li class="text-gray-500 hover:bg-gray-100 hover:text-gray-900">
                        <a href="{{route('admin_homepage')}}" class="w-full flex items-center py-3" href="#">
                            <i class="fa-solid fa-house text-center px-5"></i>
                            <span class="whitespace-nowrap pl-1">Dashboard</span>
                        </a>
                    </li>

                    <li class="text-gray-500 hover:bg-gray-100 hover:text-gray-900">
                        <a href="{{route('admin_enquiry')}}" class="w-full flex items-center py-3" href="#">
                            <i class="fa-solid fa-chart-line text-center px-5"></i>
                            <span class="whitespace-nowrap pl-1">Reports</span>
                        </a>
                    </li>

                    <li class="text-gray-500 hover:bg-gray-100 hover:text-gray-900">
                        <a class="w-full flex items-center py-3" href="#">
                            <i class="fa-solid fa-users text-center px-5"></i>
                            <span class="whitespace-nowrap pl-1">Contact us</span>
                        </a>
                    </li>
                </ul>

                <ul class="flex flex-col gap-1 mt-2">
                    <li class="text-gray-500 hover:bg-gray-100 hover:text-gray-900">
                        <a class="w-full flex items-center py-3" href="#">
                            <i class="fa-solid fa-right-from-bracket text-center px-5"></i>
                            <span class="pl-1">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        @yield('content')

    </main>

    <footer class="bg-gray-800 p-2 bottom-0 text-white font-bold tracking-wider fixed w-full">
        <p class="text-center">All Right Reaserved by Tejas</p>
    </footer>

    <script>
        function collapseSidebar() {
            let sidebar = document.getElementById('sidebar')
            let content = document.getElementById('content')
            let toggle = document.getElementById('toggle-button')
            let titles = sidebar.querySelectorAll('span')

            if (sidebar.classList.contains('lg:w-[240px]')) {
                //sidebar
                sidebar.classList.remove('lg:w-[240px]')
                sidebar.classList.add('w-[60px]')

                //content
                content.classList.remove('lg:w-[100wh-250px]')
                content.classList.remove('lg:ml-[240px]')
                content.classList.add('lg:w-[100wh-100px]')
                content.classList.add('ml-[60px]')

                //toggle
                toggle.classList.remove('rotate-0')
                toggle.classList.add('rotate-180')
            } else {
                //sidebar
                sidebar.classList.remove('w-[60px]')
                sidebar.classList.add('lg:w-[240px]')

                //content
                content.classList.remove('lg:w-[100wh-100px]')
                content.classList.remove('ml-[60px]')
                content.classList.add('lg:w-[100wh-250px]')
                content.classList.add('lg:ml-[240px]')

                //toggle
                toggle.classList.remove('rotate-180')
                toggle.classList.add('rotate-0')
            }
        }

        // toggle user dropdown
        function openUserDropdown() {
            document.getElementById('user-dropdown').classList.toggle('hidden')
        }
    </script>
</body>

</html>
