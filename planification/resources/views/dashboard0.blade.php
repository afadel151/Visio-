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

    <div class="grid grid-cols-12 grid-rows-8 gap-10 w-[100%] h-[100%] p-10 pt-12">
        <div class="col-span-3 row-span-3 ">
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
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-teal-100 text-teal-800 dark:bg-teal-800/30 dark:text-teal-500">Sport
                                exam</span>
                        @endif
                        @if ($week_1->cc == 1)
                            <span
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-white/10 dark:text-white">Controls</span>
                        @endif
                    </div>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">View</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-3 row-span-3 col-start-4">
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
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-teal-100 text-teal-800 dark:bg-teal-800/30 dark:text-teal-500">Sport
                                exam</span>
                        @endif
                        @if ($week_2->cc == 1)
                            <span
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-white/10 dark:text-white">Controls</span>
                        @endif
                    </div>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">View</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-3 row-span-3 col-start-7">
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
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-teal-100 text-teal-800 dark:bg-teal-800/30 dark:text-teal-500">Sport
                                exam</span>
                        @endif
                        @if ($week_3->cc == 1)
                            <span
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-white/10 dark:text-white">Controls</span>
                        @endif
                    </div>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">View</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-6 row-span-5 col-start-1 row-start-4 card  bg-base-100 shadow-xl">
            <div class="w-[100%] flex justify-center items-center border-b-2 h-20 bg-base-200 rounded-t-xl">
                <p class="text-3xl font-bold ">Absences of this year</p>
            </div>
            <div id="barChart" class="card-body">
            </div>
        </div>
        <div class="col-span-3 row-span-3 col-start-10 row-start-1">
            <ul class="max-w-[100%] flex flex-col">
                <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-slate-900 dark:border-gray-700 dark:text-white">
                    <div class="flex justify-between w-full">
                        1st year additives
                        <span
                            class="inline-flex items-center py-1 px-2 rounded-full text-xs font-medium bg-blue-500 text-white">{{ $week_1->additives->count() }}</span>
                    </div>
                </li>
                <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-slate-900 dark:border-gray-700 dark:text-white">
                    <div class="flex justify-between w-full">
                        2nd year additives
                        <span
                            class="inline-flex items-center py-1 px-2 rounded-full text-xs font-medium bg-blue-500 text-white">{{ $week_2->additives->count() }}</span>
                    </div>
                </li>
                <li
                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-slate-900 dark:border-gray-700 dark:text-white">
                    <div class="flex justify-between w-full">
                        3rd year additives
                        <span
                            class="inline-flex items-center py-1 px-2 rounded-full text-xs font-medium bg-blue-500 text-white">{{ $week_3->additives->count() }}</span>
                    </div>
                </li>
            </ul>
            <div id="chart"></div>
        </div>
        <div class="col-span-3 row-span-2 col-start-7 row-start-4">9</div>
        <div class="col-span-3 row-span-2 col-start-10 row-start-4">10</div>
        <div class="col-span-6 row-span-2 col-start-7 row-start-6">11</div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            chart: {
                type: 'line'
            },
            series: [{
                name: 'sales',
                data: @json($data['data'])
            }],
            xaxis: {
                categories: @json($data['labels'])
            }
        }

        var chart = new ApexCharts(document.querySelector("#barChart"), options);

        chart.render();
        </script>

@endpush
