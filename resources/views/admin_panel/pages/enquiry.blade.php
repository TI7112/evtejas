@extends('admin_panel.component.layout')
@section('content')
    <style>
        #myTable_paginate>a {
            color: white !important;
            background: rgb(34, 34, 43)
        }
    </style>
    <section id="content"
        class="print:hidden w-[100wh-60px] lg:w-[100wh-250px] ml-[60px] lg:ml-[240px] p-5 right-0 transition-all duration-500 ease-in-out">
        <table id="myTable" class="display border-x-2">
            <thead>
                <tr class="bg-slate-800 text-white">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>product</th>
                    <th>status</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enquiry as $value)
                    <tr class="">
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->phone }}</td>
                        <td>{{ $value->getProduct->title }}</td>
                        <td>
                            @if ($value->status == 'resolved')
                                <p class="text-center py-1 rounded-xl font-semibold bg-red-500 text-white">resolved</p>
                            @elseif ($value->status == 'pending')
                                <p class="text-center py-1 rounded-xl font-semibold bg-orange-500 text-white">pending</p>
                            @else
                                <p class="text-center py-1 rounded-xl font-semibold bg-green-500 text-white">active</p>
                            @endif
                        </td>
                        <td>{{ $value->created_at }}</td>
                        <td class="flex gap-5">
                            <button id="{{ $value->id }}" onclick="handleShow(this)"
                                class="bg-green-500 w-fit my-2 text-white font-semibold px-5 py-1 rounded-xl uppercase">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                </svg>
                            </button>
                            <button id="{{ $value->id }}" onclick="handleShowInfo(this)"
                                class="bg-green-500 w-fit my-2 text-white font-semibold px-5 py-1 rounded-xl uppercase">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                    <path
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                </svg>
                            </button>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    <div id="showUpdate" style="background:rgba(0, 0, 0, 0.568)"
        class="hidden w-full flex justify-center items-center h-screen fixed top-0 z-20 left-0">
        <div class="w-[35vw] bg-white rounded-xl overflow-hidden">
            <div class="bg-slate-800 text-white flex justify-between items-center">
                <p class="text-xl font-semibold px-5">Enter Details</p>
                <button onclick="handleShow()" class="bg-red-500 px-5 py-2 text-xl">x</button>
            </div>
            <form action="{{ route('update_enquiry') }}" method="post" class="">
                @csrf
                <input type="hidden" name="id" id="uid" />
                <div class="flex justify-between px-5 pt-5 gap-5">
                    <div class="flex flex-col gap-2 w-1/2">
                        <p>Name</p>
                        <input type="text" name="username" id="username"
                            class="outline-none border-2 rounded py-1 px-2 focus:border-slate-800 duration-500">
                    </div>
                    <div class="flex flex-col gap-2 w-1/2">
                        <p>Status</p>
                        <select id="ustatus" name="status"
                            class="capitalize outline-none border-2 rounded py-1 px-2 focus:border-slate-800 duration-500">
                            <option value="active">Active</option>
                            <option value="pending">Pending</option>
                            <option value="resolved">Resolved</option>
                        </select>
                    </div>
                </div>
                <div class="px-5 pt-2 flex gap-5">
                    <div class="flex flex-col gap-2 w-1/2">
                        <p>Email</p>
                        <input type="text" name="email"
                            class="outline-none border-2 rounded py-1 px-2 focus:border-slate-800 duration-500"
                            id="email">
                    </div>
                    <div class="flex flex-col gap-2 w-1/2">
                        <p>Phone</p>
                        <input type="text" name="phone"
                            class="outline-none border-2 rounded py-1 px-2 focus:border-slate-800 duration-500"
                            id="phone">
                    </div>
                </div>
                <div class="flex flex-col gap-2 px-5 py-2">
                    <p>Product</p>
                    <p id="product" class="text-sm border-2 p-2"></p>
                </div>
                <div class="flex flex-col gap-2 px-5 py-2">
                    <p>Message</p>
                    <p id="msg" class="text-sm border-2 p-2"></p>
                </div>
                <div class="flex flex-col gap-2 px-5 py-2">
                    <p>Remark</p>
                    <textarea name="remark" cols="30" rows="4"
                        class="outline-none border-2 rounded py-1 px-2 focus:border-slate-800 duration-500"></textarea>
                </div>
                <div class="flex justify-center py-3">
                    <button class="bg-slate-800 text-white px-10 py-1 rounded-xl">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div id="showInfo" style="background:rgba(0, 0, 0, 0.568)"
        class="print:block hidden w-full flex justify-center h-screen print:relative fixed top-0 z-20 left-0">
        <div class="print:w-full print:h-auto w-[45vw] h-[95vh] bg-white rounded-xl overflow-hidden">
            <div class="print:hidden bg-slate-800 text-white flex justify-between items-center">
                <p class="text-xl font-semibold px-5">Enquiry Report</p>
                <button onclick="handleShowInfo()" class="bg-red-500 px-5 py-2 text-xl">x</button>
            </div>
            <div id="content" class="flex flex-col gap-2 py-6 px-10">
                <div class="flex justify-between">
                    <div class="">
                        <div class="flex gap-2">
                            <h2 id="ViewName" class="text-3xl font-bold tracking-wider">Ayush Jha</h2>
                            <p id="ViewStatus" class="bg-green-500 h-fit px-5 py-0.5 text-white rounded-xl">active</p>
                        </div>
                        <div class="leading-5 py-4">
                            <p>Phone : <span id="ViewPhone"></span></p>
                            <p>Email : <span id="ViewEmail"></span></p>
                        </div>
                    </div>
                    <div class="text-xl font-bold">
                        <h3 id="ViewModel"></h3>
                    </div>
                </div>
                <div class="">
                    <p class="text-xl font-bold pb-2">Message</p>
                    <p id="ViewMessage"></p>
                </div>
                <div class="py-4">
                    <p class="text-xl font-bold pb-2">Remarks</p>

                    <style>
                        #hideScroll::-webkit-scrollbar {
                            display: none;
                        }
                    </style>

                    <div id="hideScroll"
                        class="border-2 p-2 pt-0 print:border-0 print:p-0 rounded border-slate-300 overflow-y-scroll print:h-auto max-h-[50vh] print:overflow-none ">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let table = new DataTable('#myTable');
        let tableSearch = myTable_filter.children[0].children[0];
        document.getElementsByName('myTable_length')[0].style.background = 'white'
        document.getElementsByName('myTable_length')[0].style.border = '1px solid gray'

        tableSearch.style.background = 'white'
        tableSearch.style.border = '1px solid gray'
        tableSearch.style.borderRadius = '10px'
        tableSearch.style.margin = '0px 0px 10px 10px'
        tableSearch.style.outline = 'none'
        tableSearch.style.padding = '5px 10px'
        tableSearch.size = '40'

        const handleShow = (e) => {
            if (showUpdate.classList.contains('hidden')) {
                $.post(
                    "{{ route('get_enquiry_by_id') }}", {
                        _token: "{{ csrf_token() }}",
                        id: e.id,
                    },
                    function(data) {
                        showUpdate.classList.remove('hidden')

                        $('#username').val(data.name)
                        $('#email').val(data.email)
                        $('#phone').val(data.phone)
                        $('#product').text(data.get_product.title)
                        $('#msg').text(data.message)
                        ustatus.innerHTML +=
                            `<option selected value="${data.status}">${data.status}</option>`;
                        $('#uid').val(data.id)
                        showUpdate.classList.remove('hidden')

                    }
                );
            } else {
                showUpdate.classList.add('hidden')
            }
        }

        const handleShowInfo = (e) => {
            if (showInfo.classList.contains('hidden')) {
                $.post(
                    "{{ route('get_enquiry_by_id') }}", {
                        _token: "{{ csrf_token() }}",
                        id: e.id,
                    },
                    function(data) {
                        showInfo.classList.remove('hidden')

                        console.log(data);

                        $('#ViewName').text(data.name)
                        $('#ViewStatus').text(data.status)
                        $('#ViewPhone').text(data.phone)
                        $('#ViewEmail').text(data.email)
                        $('#ViewModel').text(data.get_product.title)
                        $('#ViewMessage').text(data.message)

                        if (data.status == 'resolved') {
                            ViewStatus.classList.replace('bg-green-500', 'bg-red-500')
                        } else {
                            ViewStatus.classList.replace('bg-red-500', 'bg-green-500')
                        }

                        if(data.get_remarks.length > 0) {
                            let str = ""

                            data.get_remarks.forEach(element => {

                                let date = new Date(element.created_at);
                                let month = ""
                                if (date.getMonth() < 10) {
                                    month = '0' + (date.getMonth() + 1)
                                } else {
                                    month = date.getMonth()
                                }

                                str += `<div class="px-2">
                                        <div class="flex justify-between py-3">
                                            <p class="font-semibold">Date : ${date.getDate() + '-' + month  + '-' + date.getFullYear()}</p>
                                            <p class="font-semibold">Time : ${date.getHours() + ':' + date.getMinutes()}</p>
                                        </div>
                                        <p class="">${element.remark}</p>
                                    </div>`


                            });
                            $('#hideScroll').html(str)
                        }
                        else{
                            $('#hideScroll').text('No remarks found')
                        }
                        showInfo.classList.remove('hidden')

                    }
                );
            } else {
                showInfo.classList.add('hidden')
            }
        };
    </script>
@endsection
