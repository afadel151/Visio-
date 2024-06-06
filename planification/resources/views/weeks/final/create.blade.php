@extends('default')
@push('header')
    @vite('resources/js/export_excel.js')
@endpush
@section('content')
    <div class="w-[100%] z-0 ">
        <div class="h-[100px]  flex justify-around items-center  ">

            <div class="flex h-[100px] space-x-3 justify-center items-center ">
                <button class="btn glass rounded-xl " id="export_excel">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                    </svg>
                </button>

            </div>



        </div>
        <table  
            id="table2excel">
            <tr >
                <td></td>
                @if ($battalion->battalion == 1)
                    <td >
                        @php
                            $companies_PR = $battalion->companies;
                            $modules_PR = $battalion->modules_PR(1);
                            $teachers = $battalion->teachers_PR(1);
                            $teachers_PR = collect($teachers)->map(function ($teacher) {
                                return (object) $teacher;
                            });
                            $domaine = 'PR';
                        @endphp
                        @include('weeks.final.domaine', [
                            'companies' => $companies_PR,
                            'domaine' => $domaine,
                        ])
                    </td>
                @else
                    <td >
                        @php
                            $companies_ST = $battalion->companies_ST;
                            $modules_ST = $battalion->modules_ST(1);
                            $teachers_ST = $battalion->teachers_ST(1);
                            $teachers_ST = collect($teachers_ST)->map(function ($teacher) {
                                return (object) $teacher;
                            });
                            $domaine = 'ST';
                        @endphp
                        @include('weeks.final.domaine', [
                            'companies' => $companies_ST,
                            'domaine' => $domaine,
                        ])
                    </td>


                    <td >
                        @php
                            $companies_MI = $battalion->companies_MI;
                            $modules_MI = $battalion->modules_MI(1);
                            $teachers_MI = $battalion->teachers_MI(1);

                            $domaine = 'MI';
                        @endphp

                        @include('weeks.final.domaine', [
                            'companies' => $companies_MI,
                            'domaine' => $domaine,
                        ])
                    </td>
                @endif
            </tr>
            @php

                $date = date('Y-m-d', strtotime('-1 days', strtotime($week->global_week->start_week_date)));
            @endphp


            @for ($i = 0; $i < 5; $i++)
                <tr >
                    @php
                        $date = date('Y-m-d', strtotime('+1 days', strtotime($date)));
                    @endphp
                    <td data-aos="fade-right">
                        @include('weeks.final.day', ['date' => $date, 'timings' => $timings])
                    </td>
                    @if ($battalion->battalion == 1)
                        <td >
                            @include('weeks.final.domaine-day', [
                                'companies' => $companies_PR,
                                'timings' => $timings,
                                'date' => $date,
                                'sessions' => $sessions,
                                'catchups' => $week->catchups,
                                'week_id' => $week->id,
                                'modules' => $modules_PR,
                                'teachers' => $teachers_PR,
                                'rooms' => $rooms,
                            ])
                        </td>
                    @else
                        <td >
                            @include('weeks.final.domaine-day', [
                                'companies' => $companies_ST,
                                'timings' => $timings,
                                'date' => $date,
                                'sessions' => $sessions,
                                'catchups' => $week->catchups,
                                'week_id' => $week->id,
                                'modules' => $modules_ST,
                                'teachers' => $teachers_ST,
                                'rooms' => $rooms,
                            ])
                        </td>
                        <td >
                            @include('weeks.final.domaine-day', [
                                'companies' => $companies_MI,
                                'timings' => $timings,
                                'sessions' => $sessions,
                                'date' => $date,
                                'catchups' => $week->catchups,
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="
    https://cdn.jsdelivr.net/npm/jquery-table2excel@1.1.1/dist/jquery.table2excel.min.js
    "></script>
    <script>
        $("#export_excel").click(function() {
            $("#table2excel").table2excel({

                name: "Worksheet Name",
                filename: "SomeFile",
                fileext: ".xlsx",
                preserveColors: false,
                exclude_img: true,
                exclude_links: true,
                exclude_inputs: true

            });
        });
    </script>
@endpush
