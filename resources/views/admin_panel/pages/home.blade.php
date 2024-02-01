@extends('admin_panel.component.layout')
@section('content')
    <!-- main content -->
    <section id="content"
        class="w-[100wh-60px] lg:w-[100wh-250px] ml-[60px] lg:ml-[240px] p-5 right-0 transition-all duration-500 ease-in-out">
        <!-- user summary -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
            <div class="bg-slate-50 p-5 m-2 rounded-md flex justify-between items-center shadow">
                <div>
                    <h3 class="font-bold">Total Enquiry</h3>
                    <p class="text-gray-500">{{ count($enquiry) }}</p>
                </div>
                <i class="fa-solid fa-users p-4 bg-gray-200 rounded-md"></i>
            </div>

            <div class="bg-slate-50 p-5 m-2 flex justify-between items-center shadow">
                @php
                    $activeCount = 0;
                    $resolvedCount = 0;
                    $pendingCount = 0;
                    foreach ($enquiry as $value) {
                        if ($value->status == 'active') {
                            $activeCount = $activeCount + 1;
                        } elseif ($value->status == 'resolved') {
                            $resolvedCount = $resolvedCount + 1;
                        } elseif ($value->status == 'pending') {
                            $pendingCount = $pendingCount + 1;
                        }
                    }
                @endphp
                <div>
                    <h3 class="font-bold">Total Active Enquiry</h3>
                    <p class="text-gray-500">{{ $activeCount }}</p>
                </div>
                <i class="fa-solid fa-users p-4 bg-green-200 rounded-md"></i>
            </div>

            <div class="bg-slate-50 p-5 m-2 flex justify-between items-center shadow">
                <div>
                    <h3 class="font-bold">Total Pending Enquiry</h3>
                    <p class="text-gray-500"> {{ $pendingCount }}</p>
                </div>
                <i class="fa-solid fa-users p-4 bg-yellow-200 rounded-md"></i>
            </div>

            <div class="bg-slate-50 p-5 m-2 flex justify-between items-center shadow">
                <div>
                    <h3 class="font-bold">Resolved Enquiry</h3>
                    <p class="text-gray-500">{{ $resolvedCount }}</p>
                </div>
                <i class="fa-solid fa-users p-4 bg-red-200 rounded-md"></i>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2">
            <!-- chart  -->
            <div class="m-2 shadow-md">
                <h2 class="text-xl p-2 font-bold tracking-wider">Enquiry Reports</h2>
                <div id="chart" class="w-full "></div>
            </div>
            <!-- //user list -->
            <div class="overflow-x-auto m-2 shadow-md p-2">
                <h2 class="text-xl pb-2 font-bold tracking-wider">Latest Reports</h2>

                <table class="w-full">
                    <thead class="bg-gray-100 rounded-sm py-2 bg-slate-300">
                        <tr>
                            {{-- <th class="text-left">Avatar</th> --}}
                            <th class="text-left">User Name</th>
                            <th class="text-left">Email</th>
                            <th class="text-left">Phone</th>
                            <th class="text-left">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($enquiry as $value)
                            <tr>
                                {{-- {{-- <td>
                                    <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                        src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                                        alt="">
                                </td> --}}
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>+91 {{ $value->phone }}</td>
                                <td class="p-1">
                                    @if ($value->status == 'active')
                                        <span
                                            class="bg-green-50 text-green-700 px-3 py-1 ring-1 ring-green-200 text-xs rounded-md">{{ $value->status }}</span>
                                    @elseif ($value->status == 'pending')
                                        <span
                                            class="bg-yellow-50 text-yellow-700 px-3 py-1 ring-1 ring-yellow-200 text-xs rounded-md">{{ $value->status }}</span>
                                    @else
                                        <span
                                            class="bg-red-50 text-red-700 px-3 py-1 ring-1 ring-red-200 text-xs rounded-md">{{ $value->status }}</span>
                                    @endif

                                </td>
                                <td>
                                    <div class="flex justify-between gap-1">
                                        <i title="Edit"
                                            class="fa-solid fa-pencil p-1 text-green-500 rounded-full cursor-pointer"></i>
                                        <i title="View"
                                            class="fa-solid fa-eye p-1 text-violet-500 rounded-full cursor-pointer"></i>
                                        <i title="Delete"
                                            class="fa-solid fa-trash p-1 text-red-500 rounded-full cursor-pointer"></i>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
            <!-- chart  -->
            <div class="m-2 lg:col-span-1 shadow-md">
                <h2 class="text-xl p-2">Last Monthly Report</h2>
                <div id="pie_chart_1" class="w-full"></div>
            </div>

            <div class="m-2 lg:col-span-1 shadow-md">
                <h2 class="text-xl p-2">Total Report</h2>
                <div id="pie_chart_2" class="w-full"></div>
            </div>

            {{-- <!-- candle list -->
                <div class="m-2 lg:col-span-2 shadow-md">
                    <h2 class="text-xl p-2">Candle Stick Chart</h2>
                    <div id="candle_chart" class="w-full"></div>
                </div> --}}
        </div>

        {{-- <div class="grid grid-cols-1">
                <!-- heatmap list -->
                <div class="m-2 shadow-md">
                    <h2 class="text-xl p-2">Heatmap Chart</h2>
                    <div id="heatmap_chart" class="w-full"></div>
                </div>
            </div> --}}
    </section>

    <script>
        var options = {
            chart: {
                height: 350,
                type: "line",
                stacked: false
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#FF1654", "#00ff5e"],
            series: [{
                    name: "Enquiry",
                    data: [{{ $enquiryReportData }}]
                },
                {
                    name: "Enquiry Resolve",
                    data: [{{ $enquiryResolvedData }}]
                }
            ],
            stroke: {
                width: [4, 4]
            },
            plotOptions: {
                bar: {
                    columnWidth: "20%"
                }
            },
            xaxis: {
                categories: ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                    "October", "November", "December"
                ]
            },
            yaxis: [{
                    axisTicks: {
                        show: true
                    },
                    axisBorder: {
                        show: true,
                        color: "#FF1654"
                    },
                    labels: {
                        style: {
                            colors: "#FF1654"
                        }
                    },
                    title: {
                        text: "Monthly Enquiry",
                        style: {
                            color: "#FF1654"
                        }
                    }
                },
                {
                    opposite: true,
                    axisTicks: {
                        show: true
                    },
                    axisBorder: {
                        show: true,
                        color: "#247BA0"
                    },
                    labels: {
                        style: {
                            colors: "#247BA0"
                        }
                    },
                    title: {
                        text: "Monthly Enquiry",
                        style: {
                            color: "#247BA0"
                        }
                    }
                }
            ],
            tooltip: {
                shared: false,
                intersect: true,
                x: {
                    show: false
                }
            },
            legend: {
                horizontalAlign: "left",
                offsetX: 40
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();
    </script>

    <!-- pie chart  -->
    <script>
        var options = {
            chart: {
                height: 350,
                type: "pie",
                stacked: false
            },
            colors: ["#FF1654", "#247BA0"],
            series: [{{100 - $last_month_resolved_report}}, {{ $last_month_resolved_report}}],
            labels: ['open enquiry', 'resolved enquiry']
        };

        var chart = new ApexCharts(document.querySelector("#pie_chart_1"), options);

        chart.render();
    </script>

    <script>
        var options = {
            chart: {
                height: 350,
                type: "pie",
                stacked: false
            },
            colors: ["#FF1654", "#247BA0"],
            series: [{{100 - $total_enquiry_report}}, {{$total_enquiry_report}}],
            labels: ['open enquiry', 'resolved enquiry']
        };

        var chart = new ApexCharts(document.querySelector("#pie_chart_2"), options);

        chart.render();
    </script>

    <!-- candle stick chart -->
    {{-- <script>
            var options = {
                chart: {
                    height: 350,
                    type: "candlestick",
                    stacked: false
                },
                colors: ["#FF1654", "#247BA0"],
                series: [{
                    data: [
                        [1538856000000, [6593.34, 6600, 6582.63, 6600]],
                        [1538856900000, [6595.16, 6604.76, 6590.73, 6593.86]]
                    ]
                }]
            };
    
            var chart = new ApexCharts(document.querySelector("#candle_chart"), options);
    
            chart.render();
        </script> --}}


    <!-- heatmap chart -->
    {{-- <script>
            var options = {
                chart: {
                    height: 350,
                    type: "heatmap",
                    stacked: false
                },
                colors: ["#FF1654", "#247BA0"],
                series: [{
                        name: "Series 1",
                        data: [{
                            x: 'W1',
                            y: 22
                        }, {
                            x: 'W2',
                            y: 29
                        }, {
                            x: 'W3',
                            y: 13
                        }, {
                            x: 'W4',
                            y: 32
                        }]
                    },
                    {
                        name: "Series 2",
                        data: [{
                            x: 'W1',
                            y: 43
                        }, {
                            x: 'W2',
                            y: 43
                        }, {
                            x: 'W3',
                            y: 43
                        }, {
                            x: 'W4',
                            y: 43
                        }]
                    }
                ]
            };
    
            var chart = new ApexCharts(document.querySelector("#heatmap_chart"), options);
    
            chart.render();
        </script> --}}
@endsection
