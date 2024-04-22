@extends('default')

@section('content')
    @php
        $weeks = $global_week->weeks;
        foreach ($weeks as $week) {
            if ($week->battalion->battalion == 1) {
                $week_1 = $week;
            }
            if ($week->battalion->battalion == 2) {
                $week_2 = $week;
            }
            if ($week->battalion->battalion == 3) {
                $week_3 = $week;
            }
        }
    @endphp
    <div class="grid grid-cols-12 grid-rows-5 gap-10 w-[100%] h-[100%] p-10 pt-12">
        <div class="col-span-3 row-span-2 ">
            <div class="card card-compact w-[100%] h-[100%] bg-base-100 shadow-xl">
                <figure>
                    <p class="text-6xl font-bold">1st year</p>
                </figure>
                <div class="stats mt-6">

                    <div class="stat place-items-center">
                        <div class="stat-title">Sessions</div>
                        <div class="stat-value">{{ $week_1->sessions->count() }}</div>
                        <div class="stat-desc">


                        </div>
                    </div>

                    <div class="stat place-items-center">
                        <div class="stat-title">Absences</div>
                        <div class="stat-value text-primary">{{ $week_1->absences->count() }}</div>
                        <div class="stat-desc text-primary">{{ $week_1->sessions->where('caughtup', 1)->count() }} Caught
                            up</div>
                    </div>
                </div>
                <div class="card-body">
                    <h2 class="card-title text-2xl font-bold">{{ $week_1->week_type }}
                        @if ($week_1->week_type == 'Cours')
                            {{ $week_1->week_number }}
                        @endif
                    </h2>
                    <h2 class="text-xl">Semester : {{ $week_1->semester }}</h2>

                    <div class="flex flex-wrap gap-2">
                        @if ($week_1->sport_exam == 1)
                            <span
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-blue-600 text-blue-600 dark:text-blue-500">Sport
                                exam</span>
                        @endif
                        @if ($week_1->cc == 1)
                            <span
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-red-500 text-red-500">Controls</span>
                        @endif
                    </div>
                    <div class="card-actions justify-end  mt-10">
                        @if ($week_1->cc == 1)
                            <a href="{{ route('weeks.controls', $week_1->id) }}">
                                <button class="btn btn-sm btn-base-300"> Controls
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                                    </svg>

                                </button>
                            </a>
                        @endif
                        @if ($week_1->week_type == 'Cours' || $week_1->week_type == 'Cours Magistreaux')
                        <a href="{{ route('weeks.additives', $week_1->id) }}">
                            <button class="btn btn-base-300 btn-sm"> Additives
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                                </svg>

                            </button>
                        </a>
                        <a href="{{ route('weeks.show', $week_1->id) }}"><button class="btn btn-sm btn-primary"> Calendar
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                </svg>
                            </button>
                        </a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-3 row-span-2 col-start-4">
            <div class="card card-compact w-[100%] h-[100%] bg-base-100 shadow-xl">
                <figure>
                    <p class="text-6xl font-bold">2nd year</p>
                </figure>
                <div class="stats mt-6">

                    <div class="stat place-items-center">
                        <div class="stat-title">Sessions</div>
                        <div class="stat-value">{{ $week_2->sessions->count() }}</div>
                        <div class="stat-desc">


                        </div>
                    </div>

                    <div class="stat place-items-center">
                        <div class="stat-title">Absences</div>
                        <div class="stat-value text-primary">{{ $week_2->absences->count() }}</div>
                        <div class="stat-desc text-primary">{{ $week_2->sessions->where('caughtup', 1)->count() }} Caught
                            up</div>
                    </div>
                </div>
                <div class="card-body">
                    <h2 class="card-title text-2xl font-bold">{{ $week_2->week_type }}
                        @if ($week_2->week_type == 'Cours')
                            {{ $week_2->week_number }}
                        @endif
                    </h2>
                    <h2 class="text-xl">Semester : {{ $week_2->semester }}</h2>

                    <div class="flex flex-wrap gap-2">
                        @if ($week_2->sport_exam == 1)
                            <span
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-blue-600 text-blue-600 dark:text-blue-500">Sport
                                Exam</span>
                        @endif
                        @if ($week_2->cc == 1)
                            <span
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-red-500 text-red-500">Controls</span>
                        @endif
                    </div>
                    <div class="card-actions mt-10 justify-end">
                        @if ($week_2->cc == 1)
                            <a href="{{ route('weeks.controls', $week_2->id) }}">
                                <button class="btn btn-base-300 btn-sm"> Controls
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                                    </svg>

                                </button>
                            </a>
                        @endif
                        <a href="{{ route('weeks.additives', $week_2->id) }}">
                            <button class="btn btn-base-300 btn-sm"> Additives
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                                </svg>

                            </button>
                        </a>
                        <a href="{{ route('weeks.show', $week_2->id) }}"><button class="btn btn-sm  btn-primary"> Calendar
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-3 row-span-2 col-start-7">
            <div class="card card-compact w-[100%] h-[100%] bg-base-100 shadow-xl">
                <figure>
                    <p class="text-6xl font-bold">3rd year</p>
                </figure>
                <div class="stats mt-6">

                    <div class="stat place-items-center">
                        <div class="stat-title">Sessions</div>
                        <div class="stat-value">{{ $week_3->sessions->count() }}</div>
                        <div class="stat-desc">


                        </div>
                    </div>

                    <div class="stat place-items-center">
                        <div class="stat-title">Absences</div>
                        <div class="stat-value text-primary">{{ $week_3->absences->count() }}</div>
                        <div class="stat-desc text-primary">{{ $week_3->sessions->where('caughtup', 1)->count() }} Caught
                            up</div>
                    </div>
                </div>
                <div class="card-body">
                    <h2 class="card-title text-2xl font-bold">{{ $week_3->week_type }}
                        @if ($week_3->week_type == 'Cours')
                            {{ $week_3->week_number }}
                        @endif
                    </h2>
                    <h2 class="text-xl">Semester : {{ $week_3->semester }}</h2>

                    <div class="flex flex-wrap gap-2">
                        @if ($week_3->sport_exam == 1)
                            <span
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-blue-600 text-blue-600 dark:text-blue-500">Sport
                                exam</span>
                        @endif
                        @if ($week_3->cc == 1)
                            <span
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-red-500 text-red-500">Controls</span>
                        @endif
                    </div>
                    <div class="card-actions mt-10" justify-end">
                        @if ($week_3->cc == 1)
                            <a href="{{ route('weeks.controls', $week_3->id) }}">
                                <button class="btn btn-sm btn-base-300"> Controls
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                                    </svg>

                                </button>
                            </a>
                        @endif
                        <a href="{{ route('weeks.additives', $week_3->id) }}">
                            <button class="btn btn-sm btn-base-300"> Additives
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                                </svg>

                            </button>
                        </a>
                        <a href="{{ route('weeks.show', $week_3->id) }}"><button class="btn btn-sm btn-primary"> Calendar
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-6 row-span-3 col-start-1 row-start-3 card  bg-base-100 shadow-xl">
            <div class="w-[100%] flex justify-center items-center border-b-2 h-20 bg-base-200 rounded-t-xl">
                <p class="text-3xl font-bold ">Absences of this year</p>
            </div>
            <div id="barChart" class="card-body">
            </div>
        </div>
        <div class="col-span-3  row-span-3 col-start-10 row-start-1">
            <ul class="max-w-[100%] flex flex-col">
                <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg ">
                    <div class="flex justify-between w-full">
                        1st year additives
                        <span
                            class="inline-flex items-center py-1 px-2 rounded-full text-xs font-medium bg-blue-500 text-white">{{ $week_1->additives->count() }}</span>
                    </div>
                </li>
                <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg ">
                    <div class="flex justify-between w-full">
                        2nd year additives
                        <span
                            class="inline-flex items-center py-1 px-2 rounded-full text-xs font-medium bg-blue-500 text-white">{{ $week_2->additives->count() }}</span>
                    </div>
                </li>
                <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg ">
                    <div class="flex justify-between w-full">
                        3rd year additives
                        <span
                            class="inline-flex items-center py-1 px-2 rounded-full text-xs font-medium bg-blue-500 text-white">{{ $week_3->additives->count() }}</span>
                    </div>
                </li>
            </ul>
            <div id="chart"></div>
        </div>
        <div class="col-span-3 row-span-2 col-start-7 row-start-3">
            <div class="h-[100%] w-[100%] ">
                <div id="bar-chart" class="w-full h-full"></div>

            </div>
        </div>
        <div class="col-span-3 row-span-2 col-start-10 row-start-3">
            <div class="h-[100%] w-[100%] ">
                <div id="radialchart" class="w-full h-full"></div>
            </div>
        </div>
        <div class="col-span-6 row-span-1 col-start-7 row-start-5">
            <div class="h-[100%] w-[100%] ">
                <div class="stats h-[100%] w-[100%] bg-base-100 stats-vertical lg:stats-horizontal shadow">
                    @php
                        $sessions = $global_week->sessions;
                        $cours = $sessions->where('session_type', 'cour')->count();
                        $Tds = $sessions->where('session_type', 'td')->count();
                        $Tps = $sessions->where('session_type', 'tps')->count();
                    @endphp
                    <div class="stat">
                        <div class="stat-title">Total Sessions</div>
                        <div class="stat-value">{{ $sessions->count() }}</div>
                        <div class="stat-desc text-xl">{{ $cours }} Cours , {{ $Tds }} Tds,
                            {{ $Tps }} Tps</div>
                    </div>

                    <div class="stat">
                        <div class="stat-title">Total Absences</div>
                        <div class="stat-value">{{ $global_week->sessions->where('absented', 1)->count() }}</div>
                        <div class="stat-desc text-xl">{{ $global_week->sessions->where('caughtup', 1)->count() }} Caught
                            up</div>
                    </div>

                    <div class="stat">
                        <div class="stat-title">Total Aditives</div>
                        <div class="stat-value">{{ $additives }}</div>
                        <div class="stat-desc">{{ $additionals }} Additional</div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
            var options = {
                chart: {
                    type: 'area',

                },
                series: [{
                        name: 'Absences',
                        data: @json($data['data'])
                    },
                    {
                        name: 'Catch Ups',
                        data: @json($data['Rectifications']),
                    }
                ],
                stroke: {
                    curve: 'smooth'
                },

                xaxis: {
                    // labels: {
                    //     rotate: 0, // no need to rotate since hiding labels gives plenty of room
                    //     // hideOverlappingLabels: false // all labels must be rendered
                    // }
                    labels: {
                        show: false,
                    },
                    categories: @json($data['labels']),

                },

            }

            var chart = new ApexCharts(document.querySelector("#barChart"), options);

            chart.render();
        </script>
        <script>
            var options = {
                chart: {
                    type: 'line'
                },
                series: [{
                    name: 'Additives',
                    data: @json($data2['data'])
                }, {
                    name: 'Additionals',
                    data: @json($data2['aditionals'])
                }],
                xaxis: {
                    labels: {
                        show: false,
                    },
                    categories: @json($data2['labels'])
                },
                yaxis: {
                    labels: {
                        show: false,
                    }
                },
                toolbar: {
                    show: false,
                },
                legend: {
                    show: false,
                },
                stroke: {
                    curve: 'smooth'
                },

            }

            var chart = new ApexCharts(document.querySelector("#chart"), options);

            chart.render();
        </script>
        <script>
            var options = {
                chart: {
                    height: 450,
                    type: "radialBar"
                },

                series: [67],

                plotOptions: {
                    radialBar: {
                        hollow: {
                            margin: 15,
                            size: "70%"
                        },

                        dataLabels: {
                            showOn: "always",
                            name: {
                                offsetY: -10,
                                show: true,
                                color: "#888",
                                fontSize: "13px"
                            },
                            value: {
                                color: "#111",
                                fontSize: "30px",
                                show: true
                            }
                        }
                    }
                },

                stroke: {
                    lineCap: "round",
                },
                labels: ["Progress"]
            };

            var chart = new ApexCharts(document.querySelector("#radialchart"), options);

            chart.render();
        </script>
        <script>
            var options = {
                chart: {
                    type: 'bar',
                    height: 450,
                },
                plotOptions: {
                    bar: {
                        horizontal: false
                    }
                },
                series: [{
                    data: [{
                        x: '203/2024',
                        y: 10
                    }, {
                        x: '2024/2025',
                        y: 18
                    }, {
                        x: '2025/2026',
                        y: 13
                    }]
                }]
            };
            var chart = new ApexCharts(document.querySelector("#bar-chart"), options);

            chart.render();
        </script>
    @endpush
