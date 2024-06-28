@extends('default')
@push('header')
    @vite('resources/js/app.js')
    <script>
        const openModal = (button) => {
            const modal = button.nextElementSibling;
            modal.showModal();
        }

        function closeModal(button) {
            const modal = button.closest('.modal');
            modal.close();
        }

        function ShowTpForm(button) {
            const form = button.nextElementSibling;
            form.classList.remove("hidden");


        }

        function HideTpForm(button) {
            const form = button.parentNode;
            form.classList.add("hidden");
        }

        function ShowTdForm(button) {
            const form = button.nextElementSibling;
            form.classList.remove("hidden");

        }

        function HideTdForm(button) {
            const form = button.parentNode;
            form.classList.add("hidden");
        }

        function ShowCourForm(button) {
            const form = button.nextElementSibling;
            form.classList.remove("hidden");
        }

        function HideCourForm(button) {
            const form = button.parentNode;
            form.classList.add("hidden");
        }
    </script>
@endpush
@section('content')
    <div class="w-[100%]  z-0 ">
        <script>
            const rooms = @json($rooms);
            const timings = @json($timings);
        </script>

        <div class="h-[100px]  flex justify-around items-center  ">
            <label class="flex cursor-pointer gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="5" />
                    <path
                        d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
                </svg>
                <input type="checkbox" value="synthwave" class="toggle theme-controller" />
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
            </label>
            <div class="flex h-[100px] space-x-3 justify-center items-center ">
                <a href="{{ route('weeks.additives', ['id' => $week->id]) }}" class="tooltip" data-tip="additifs">
                    <button class="btn glass rounded-xl ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                        </svg>
                    </button>
                </a>

                <a href="{{ route('battalions.show', ['id' => $week->battalion->id]) }}" class="tooltip"
                    data-tip="battalion">
                    <button class="btn glass rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                    </button>
                </a>
                <a href="{{ route('schoolyears.show', ['id' => $week->schoolyear()->id]) }}" class="tooltip"
                    data-tip="Schoolyear">
                    <button class="btn glass rounded-xl ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                        </svg>

                    </button>
                </a>
                <a href="{{ route('weeks.export_pdf', $week->id) }}" class="tooltip" data-tip="Export PDF">
                    <button class="btn glass rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>

                    </button>
                </a>
                    <button class="btn glass rounded-xl" id="Export_Excel">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                          </svg>
                    </button>
                @if ($week->cc == 1)
                    <a href="{{ route('weeks.controls', ['id' => $week->id]) }}" class="tooltip" data-tip="Controls">
                        <button class="btn glass rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z"
                                    clip-rule="evenodd" />
                            </svg>


                        </button>
                    </a>
                @endif
                <div class="drawer  drawer-end" style="z-index: 100;">
                    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                    <div class="drawer-content tooltip" data-tip="Available Rooms">

                        <label for="my-drawer" class="btn btn-ghost drawer-button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                            </svg>

                        </label>
                    </div>
                    <div class="drawer-side "style="z-index: 100;">
                        <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                        <ul class="menu p-4 w-96 min-h-full bg-base-200 text-base-content" style="z-index: 100;">
                            <!-- Sidebar content here -->
                            <p class="text-center text-3xl font-bold">Available Rooms</p>
                            <li>
                                <div class=" w-full h-full flex flex-col items-center justify-between">
                                    <form @submit.prevent="submit" id="available_rooms_form"
                                        class="flex   w-full h-full space-y-4 flex-col justify-center items-stretch">
                                        <div class="flex items-center justify-between w-full">
                                            <p>Date</p>
                                            <input type="date" name="date" class="input input-bordered">
                                        </div>
                                        <div class="flex items-center justify-between w-full">
                                            <p>Timing</p>
                                            <select name="timing_id" id="" class="select select-bordered">
                                                @foreach ($timings as $timing)
                                                    <option value="{{ $timing->id }}">{{ $timing->session_start }} ->
                                                        {{ $timing->session_finish }} </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </form>
                                    <button class="btn btn-primary" id="get_available_rooms">Search</button>
                                </div>
                            </li>
                            <li id="available_rooms_result">

                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Open the modal using ID.showModal() method -->
                <button class="btn glass" onclick="openModal(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </button>
                <dialog id="my_modal_1" class="modal">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg">Hello!</h3>
                        <form class="py-4 flex flex-col gap-6 justify-center items-stretch" id="is_teacher_available_form">
                            <div class="flex justify-between gap-4 items-center w-full">
                                <label class="w-20" for="">Date</label>
                                <input type="date" name="date" class="input input-bordered w-full">
                            </div>
                            <div class="flex justify-between gap-4 items-center w-full">
                                <label class="w-20" for="">Date</label>
                                <select name="timing_id"class="input input-bordered  w-full">
                                    @foreach ($timings as $timing)
                                        <option value="{{ $timing->id }}">{{ $timing->session_start }} ->
                                            {{ $timing->session_finish }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if ($battalion->battalion == 1)
                                <div class="flex justify-between gap-4 items-center w-full">
                                    <label class="w-20" for="">Teacher</label>
                                    <select name="teacher_id" id="" class="input input-bordered  w-full">
                                        @foreach ($battalion->teachers_PR($week->semester) as $teacher)
                                            <option value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @else
                                <div class="flex justify-between gap-4 items-center w-full">
                                    <label class="w-20" for="">Teacher</label>
                                    <select name="teacher_id" id="" class="input input-bordered  w-full">
                                        @foreach ($battalion->teachers_MI($week->semester) as $teacher)
                                            <option value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
                                        @endforeach
                                        @foreach ($battalion->teachers_ST($week->semester) as $teacher)
                                            <option value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif
                                <button type="button" id="submit_is_teacher_available" class="btn btn-outline">
                                    Sumbit
                                </button>

                        </form>
                        <div id="is_teacher_available_result"
                            class="py-4 flex flex-col gap-6 justify-center items-stretch">
                            <div class="flex justify-around gap-4 items-center w-full">
                                <label class="w-20" for="">Result</label>
                                <p id="is_teacher_available_result" class="text-xl font-bold"></p>
                            </div>
                        </div>
                        <div class="modal-action">
                            <form method="dialog">
                                <button class="btn">Close</button>
                            </form>
                        </div>
                    </div>
                </dialog>
            </div>

            <div class="stats stats-vertical lg:stats-horizontal shadow">
                <div class="stat">
                    <div class="stat-title">Week Number</div>
                    <div class="stat-value">{{ $week->week_number }}</div>
                    <div class="stat-desc">{{ $week->global_week->start_week_date }} ->
                        {{ $week->global_week->end_week_date }}</div>
                </div>

                <div class="stat">
                    <div class="stat-title">Semester</div>
                    <div class="stat-value">{{ $week->semester }}</div>
                    <div class="stat-desc">↗︎ 400 (22%)</div>
                </div>

                <div class="stat">
                    <div class="stat-title">Battalion</div>
                    <div class="stat-value">{{ $week->battalion->battalion }}</div>
                    <div class="stat-desc">↘︎ 90 (14%)</div>
                </div>

            </div>
            <div class="stats shadow">

                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>

                    </div>
                    <div class="stat-title">Total Sessions</div>
                    <div class="stat-value">{{ $sessions->where('week_id', $week->id)->count() }}</div>
                    <div class="stat-desc">{{ $week->global_week->start_week_date }} ->
                        {{ $week->global_week->start_week_date }}</div>
                </div>

                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M22 10.5h-6m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM4 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 10.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                        </svg>

                    </div>
                    <div class="stat-title">Absences</div>
                    <div class="stat-value">{{ $week->absences()->count() }}</div>
                    <div class="stat-desc">{{ $week->sessions->where('caughtup', 1)->count() }} Caught up</div>
                </div>
            </div>
        </div>

        <table class="mt-4" style="width: calc({{ $battalion->sections->count() }}*140px + 122px);z-index : 60;" id="main_table">
            <tr class="" style="z-index: 60;">
                <td class="" style="visibility: hidden">Domaine JCP</td>{{-- //vide --}}
                @if ($battalion->battalion == 1)
                    <td class="sticky top-0 " style="z-index: 60;">
                        @php
                            $companies_PR = $battalion->companies;
                            $modules_PR = $battalion->modules_PR->where('semester',$week->semester);
                            $teachers_PR = $battalion->teachers_PR($week->semester);
                           
                            $domaine = 'PR';
                        @endphp
                        @include('weeks.domaine', [
                            'companies' => $companies_PR,
                            'domaine' => $domaine,
                        ])
                    </td>
                @else
                    <td class="sticky top-0 " style="z-index: 60;">
                        @php
                            $companies_ST = $battalion->companies_ST;
                            $modules_ST = $battalion->modules_ST->where('pivot.semester',$week->semester);
                            $teachers_ST = $battalion->teachers_ST($week->semester);
                            $teachers_ST = collect($teachers_ST)->map(function ($teacher) {
                                return (object) $teacher;
                            });
                            $domaine = 'ST';
                        @endphp
                        @include('weeks.domaine', [
                            'companies' => $companies_ST,
                            'domaine' => $domaine,
                        ])
                    </td>

                    <script>
                        const teachers_ST = @json($teachers_ST);
                        const modules_ST = @json($modules_ST);
                    </script>
                    <td class="sticky top-0 z-10  " style="z-index: 60;">
                        @php
                            $companies_MI = $battalion->companies_MI;
                            $modules_MI = $battalion->modules_MI->where('pivot.semester',$week->semester);
                            $teachers_MI = $battalion->teachers_MI($week->semester);
                            $teachers_MI = collect($teachers_MI)->map(function ($teacher) {
                                return (object) $teacher;
                            });
                            $domaine = 'MI';
                        @endphp
                        @include('weeks.domaine', ['companies' => $companies_MI, 'domaine' => $domaine])
                    </td>
                @endif
            </tr>
            @php

                $date = date('Y-m-d', strtotime('-1 days', strtotime($week->global_week->start_week_date)));
            @endphp

554
            @for ($i = 0; $i < 5; $i++)
                <tr class="h-[800px]">
                    @php
                        $date = date('Y-m-d', strtotime('+1 days', strtotime($date)));
                    @endphp
                    <td class="h-[500%]  w-[300px]" data-aos="fade-right">
                        @include('weeks.day', ['date' => $date, 'timings' => $timings])
                    </td>
                    @if ($battalion->battalion == 1)
                        <td class="h-[800px]">
                            @include('weeks.domaine-day', [
                                'companies' => $companies_PR,
                                'timings' => $timings,
                                'date' => $date,
                                'sessions' => $sessions,
                                'catchups'=> $week->catchups,
                                'week_id' => $week->id,
                                'modules' => $modules_PR,
                                'teachers' => $teachers_PR,
                                'rooms' => $rooms,
                            ])
                        </td>
                    @else
                        <td class="h-[800px]">
                            @include('weeks.domaine-day', [
                                'companies' => $companies_ST,
                                'timings' => $timings,
                                'date' => $date,
                                'sessions' => $sessions,
                                'catchups'=> $week->catchups,
                                'week_id' => $week->id,
                                'modules' => $modules_ST,
                                'teachers' => $teachers_ST,
                                'rooms' => $rooms,
                            ])
                        </td>
                        <td class="h-[800px] ">
                            @include('weeks.domaine-day', [
                                'companies' => $companies_MI,
                                'timings' => $timings,
                                'sessions' => $sessions,
                                'date' => $date,
                                'catchups'=> $week->catchups,
                                'week_id' => $week->id,
                                'modules' => $modules_MI,
                                'teachers' => $teachers_MI,
                                'rooms' => $rooms,
                            ])
                        </td>
                    @endif
                </tr>
            @endfor

        </table>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/mark-absence.ts')
@endpush
