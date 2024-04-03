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
                    data-tip="School year">
                    <button class="btn glass rounded-xl ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                        </svg>

                    </button>
                </a>
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

        <table class="mt-4" style="width: calc({{ $battalion->sections->count() }}*140px + 122px);z-index : 60;">
            <tr class="" style="z-index: 60;">
                <td class="" style="visibility: hidden">Domaine JCP</td>{{-- //vide --}}
                <td class="sticky top-0 " style="z-index: 60;">
                    @php
                        $companies_ST = $battalion->companies_ST;
                        $modules_ST = $battalion->modules_ST(1);
                        $teachers_ST = $battalion->teachers_ST(1);
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
                        $modules_MI = $battalion->modules_MI(1);
                        $teachers_MI = $battalion->teachers_MI(1);
                        // $teachers_MI = collect($teachers_MI)->map(function ($teacher) {
                        //     return (object) $teacher;
                        // });
                        $domaine = 'MI';
                    @endphp
                    <script>
                        const teachers_MI = @json($teachers_MI);
                        const modules_MI = @json($modules_MI);
                    </script>
                    @include('weeks.domaine', ['companies' => $companies_MI, 'domaine' => $domaine])
                </td>
            </tr>
            @php

                $date = $week->global_week->start_week_date;
            @endphp


            @for ($i = 0; $i < 5; $i++)
                <tr class="h-[800px]">
                    @php
                        $date = date('Y-m-d', strtotime('+1 days', strtotime($date)));
                    @endphp
                    <td class="h-[500%]  w-[300px]" data-aos="fade-right">
                        @include('weeks.day', ['date' => $date, 'timings' => $timings])
                    </td>

                    <td class="h-[800px]">
                        @include('weeks.domaine-day', [
                            'companies' => $companies_ST,
                            'timings' => $timings,
                            'date' => $date,
                            'sessions' => $sessions,
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
                            'week_id' => $week->id,
                            'modules' => $modules_MI,
                            'teachers' => $teachers_MI,
                            'rooms' => $rooms,
                        ])
                    </td>
                </tr>
            @endfor

        </table>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/mark-absence.ts')
@endpush
