@extends('default')
@push('header')
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
@endpush
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
    <div class=" pl-10 ml-4 pt-8 w-[100%] h-screen overflow-scroll">

        <div class="grid grid-cols-9 grid-rows-8 gap-6 h-screen w-[100%] mb-10  " style="width: calc(100% - 92px)">
            <div
                class="col-span-3  hover:shadow-2xl hover:border-slate-500 px-6 rounded-2xl shadow-2xl bg-slate-100 flex justify-between items-center col-start-1 row-start-2">
                <div class="text-2xl  font-bold w-[50%]">2em AP: <span class="text-red-500">{{ $week_2->week_type }}</span>
                </div>
                <div class="flex w-[40%] justify-between items-center">
                    <div class="text-2xl font-bold text-blue-600"> S{{ $week_2->semester }}</div>
                    @if ($week_2->cc == true)
                        <div class="h-10 w-10 bg-yellow-300 rounded-full text-xl font-bold flex justify-center items-center">
                            C
                        </div>
                    @endif
                    @if ($week_2->sport_exam == true)
                        <div class="h-10 w-10 bg-green-500 rounded-full text-xl font-bold flex justify-center items-center">
                            S
                        </div>
                    @endif
                    <a href="{{ route('weeks.show', $week_2->id) }}"
                        class="btn font-mono text-2xl flex justify-center items-center">
                        >
                    </a>
                </div>
            </div>
            <div
                class="col-span-5     hover:shadow-2xl hover:border-slate-500 rounded-2xl shadow-xl bg-slate-100 flex justify-center items-center row-span-5 col-start-1 row-start-4">
                <canvas id="barChart"></canvas>
            </div>
            <div
                class="col-span-3     hover:shadow-2xl hover:border-slate-500 rounded-2xl shadow-xl  bg-slate-100 flex justify-center items-center row-span-3 col-start-7 row-start-1">
                notes
            </div>
            <div
                class="col-span-3 p-2     hover:shadow-2xl  hover:border-slate-500 rounded-2xl shadow-xl  bg-slate-100  row-span-3 col-start-4 row-start-1">
                <div class="flex flex-col justify-start   items-center">
                    <p class="text-3xl mt-10 mb-5 font-bold  ">Next Week</p>
                    <div class="flex flex-col justify-center items-center  space-y-3   w-[100%]">
                        <div class="flex justify-between px-8 items-center w-[90%] ">
                            <p class="text-2xl font-bold shadow-sm ">3rd Battalion : <span
                                    class="text-blue-500 font-normal">Cours</span></p>
                            {{-- <button class="bg-indigo-400 text-2xl  rounded-xl h-10 w-14">></button> --}}
                            <button class="btn w-32 rounded-full">></button>
                        </div>
                        <div class="flex justify-between px-8 items-center w-[90%] ">
                            <p class="text-2xl font-bold shadow-sm ">2nd Battalion : <span
                                    class="text-blue-500 font-normal">Cours</span></p>
                            <button class="btn w-32 rounded-full">></button>
                        </div>
                        <div class="flex justify-between px-8 items-center w-[90%] ">
                            <p class="text-2xl font-bold shadow-sm ">1st Battalion : <span
                                    class="text-blue-500 font-normal">Cours</span></p>
                            <button class="btn w-32 rounded-full">></button>
                        </div>
                    </div>

                </div>
            </div>
            <div
                class="col-span-3     hover:shadow-2xl hover:border-slate-500 px-6 rounded-2xl shadow-2xl bg-slate-100 flex justify-between items-center col-start-1 row-start-1">
                <div class="text-2xl font-bold w-[80%]">3em AP : <span class="text-red-500">{{ $week_3->week_type }}</span>
                </div>
                <div class="flex w-[30%]  justify-between items-center">
                    <div class="text-2xl font-bold text-blue-600"> S{{ $week_3->semester }}</div>
                    @if ($week_3->cc == true)
                        <div
                            class="h-10 w-10 bg-yellow-300 rounded-full text-xl font-bold flex justify-center items-center">
                            C
                        </div>
                    @endif
                    @if ($week_3->sport_exam == true)
                        <div class="h-10 w-10 bg-green-500 rounded-full text-xl font-bold flex justify-center items-center">
                            S
                        </div>
                    @endif
                    <a href="{{ route('weeks.show', $week_3->id) }}"
                        class="btn font-mono text-2xl flex justify-center items-center">
                        >
                    </a>
                </div>
            </div>
            <div
                class="col-span-3     hover:shadow-2xl hover:border-slate-500 px-6 rounded-2xl shadow-2xl bg-slate-100 flex justify-between items-center col-start-1 row-start-3">
                <div class="text-2xl font-bold w-[50%]">1er AP : <span class="text-red-500">{{ $week_1->week_type }}</span>
                </div>
                <div class="flex w-[50%] justify-between items-center">
                    <div class="text-2xl font-bold text-blue-600"> S{{ $week_1->semester }}</div>
                    @if ($week_1->cc == true)
                        <div
                            class="h-10 w-10 bg-yellow-300 rounded-full text-xl font-bold flex justify-center items-center">
                            C
                        </div>
                    @endif
                    @if ($week_1->sport_exam == true)
                        <div class="h-10 w-10 bg-green-500 rounded-full text-xl font-bold flex justify-center items-center">
                            S
                        </div>
                    @endif
                    <a href="{{ route('weeks.show', $week_1->id) }}"
                        class="btn font-mono text-2xl flex justify-center items-center">
                        >
                    </a>
                </div>
            </div>
            <div
                class="col-span-2     hover:shadow-2xl hover:border-slate-500 rounded-2xl shadow-2xl bg-slate-100 flex justify-center items-center row-span-3 col-start-6 row-start-4">
                35</div>
            <div
                class="col-span-2     hover:shadow-2xl hover:border-slate-500 rounded-2xl shadow-2xl bg-slate-100 flex justify-center items-center row-span-3 col-start-8 row-start-4">
                26</div>
            <div
                class="col-span-4     hover:shadow-2xl hover:border-slate-500 rounded-2xl shadow-2xl bg-slate-100 flex justify-center items-center row-span-2 col-start-6 row-start-7">
                Events</div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="chart.js\dist\chart.umd.js"></script>
    <script>
        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($data['labels']),
                datasets: [{
                    label: 'Absences',
                    data: @json($data['data']),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 5
                }]
            },
            options: {
                layout: {
                    padding: 20
                },
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    },
                    x: {

                        ticks: {
                            autoSkip: false,
                            maxRotation: 45,
                            minRotation: 45,
                            font: {
                                size: 12,
                                family: 'Poppins',
                                weight: 'bold',
                            },
                        }


                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Absences of this year',
                        font: {
                            size: 30,
                            family: 'Poppins'
                        },
                        color: 'indigo',
                    }
                }
            }
        });
    </script>
@endpush
