@extends('default')
@section('content')
    <div class="w-[100%] z-0 ">
        
        <div class="h-[100px] flex justify-around items-center  ">
            <a href="{{route('weeks.additives',['id'=> $week->id])}}">
                <button class="bg-indigo-300 rounded-xl p-4">Go to Additives</button>
            </a>
            <a href="{{route('battalions.show',['id'=> $week->battalion->id])}}">
                <button class="bg-indigo-300 rounded-xl p-4">Go to Battalion</button>
            </a>
            <a href="{{route('schoolyears.show',['id'=> $week->schoolyear()->id])}}">
                <button class="bg-indigo-300 rounded-xl p-4">to School Year</button>
            </a>
            <div class="bg-indigo-300 rounded-xl h-20 text-center flex justify-center items-center w-[300px]"> Semester :
                {{ $week->semester }}</div>
            <div class="bg-indigo-300 rounded-xl h-20 text-center flex justify-center items-center w-[300px]"> Semaine :
                {{ $week->week_type }}</div>
            <div class="bg-indigo-300 rounded-xl h-20 text-center flex justify-center items-center w-[300px]">Du
                {{ $week->global_week->start_week_date }} au {{ $week->global_week->end_week_date }}</div>
        </div>

        <table class=" z-0 " style="width: calc({{ $battalion->sections->count() }}*130px + 300px)">
            <tr>
                <td class=" " style="visibility: hidden">Domaine JCP</td>{{-- //vide --}}
                <td class="sticky top-0 z-10 ">
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

                <td class="sticky top-0 z-10 ">
                    @php
                        $companies_MI = $battalion->companies_MI;
                        $modules_MI = $battalion->modules_MI(1);
                        $teachers_MI = $battalion->teachers_MI(1);
                        // $teachers_MI = collect($teachers_MI)->map(function ($teacher) {
                        //     return (object) $teacher;
                        // });
                        $domaine = 'MI';
                    @endphp
                    @include('weeks.domaine', [
                        'companies' => $companies_MI,
                        'domaine' => $domaine,
                    ])
                </td>
            </tr>
            @php

                $date = $week->start_week_date;
            @endphp


            @for ($i = 0; $i < 5; $i++)
                <tr class="h-[800px] ">
                    @php
                        $date = date('Y-m-d', strtotime('+1 days', strtotime($date)));
                    @endphp
                    <td class="h-[500%]  w-[300px]">
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const UpdateForms = document.querySelectorAll(".update-form");
            const UpdateButtons = document.querySelectorAll(".update-button");
            const SectionButtons = document.querySelectorAll(".section-button");
            const CompanyButtons = document.querySelectorAll(".company-button");
            const sectionforms = document.querySelectorAll(".section-form");
            const companyforms = document.querySelectorAll(".company-form");
            const sectioncancels = document.querySelectorAll(".section-cancel-button");
            const sectionupdatecancels = document.querySelectorAll(".section-update-cancel-button");
            const companycancels = document.querySelectorAll(".company-cancel-button");
            const companyupdatecancels = document.querySelectorAll(".company-update-cancel-button");
            UpdateForms.forEach(form => {
                form.classList.add("hidden");
            });
            sectionforms.forEach(form => {
                form.classList.add("hidden");
            });
            companyforms.forEach(form => {
                form.classList.add("hidden");
            });
            UpdateButtons.forEach((Button, index) => {
                Button.addEventListener("click", function(event) {
                    UpdateForms.forEach(form => {
                        form.classList.add("hidden");
                    });
                    sectionforms.forEach(form => {
                        form.classList.add("hidden");
                    });
                    companyforms.forEach(form => {
                        form.classList.add("hidden");
                    });
                    const parents = document.querySelectorAll(".updateformparent");
                    parents.forEach(parent => {
                        parent.classList.remove("relative");
                    });
                    const parent = Button.parentElement;
                    parent.classList.add("relative");
                    const nextElementSibling = Button.nextElementSibling;
                    // Hide all forms
                    nextElementSibling.classList.remove("hidden")

                    event.preventDefault();
                });
            });
            SectionButtons.forEach((button, index) => {
                button.addEventListener("click", function(event) {
                    sectionforms.forEach(form => {
                        form.classList.add("hidden");
                    });
                    companyforms.forEach(form => {
                        form.classList.add("hidden");
                    });
                    UpdateForms.forEach(form => {
                        form.classList.add("hidden");
                    });
                    const parents = document.querySelectorAll(".sectionparentofform");
                    parents.forEach(parent => {
                        parent.classList.remove("relative");
                    });


                    const parent = button.parentElement;
                    parent.classList.add("relative");
                    const nextElementSibling = button.nextElementSibling;
                    // Hide all forms
                    nextElementSibling.classList.remove("hidden")

                    // Show only the form corresponding to the clicked button
                    // button.nextSibling.classList.remove("hidden");

                    event.preventDefault();
                });
            });
            CompanyButtons.forEach((button, index) => {
                button.addEventListener("click", function(event) {
                    sectionforms.forEach(form => {
                        form.classList.add("hidden");
                    });
                    companyforms.forEach(form => {
                        form.classList.add("hidden");
                    });
                    UpdateForms.forEach(form => {
                        form.classList.add("hidden");
                    });
                    const parents = document.querySelectorAll(".companyparentofform");
                    parents.forEach(parent => {
                        parent.classList.remove("relative");
                    });

                    const parent = button.parentElement;
                    parent.classList.add("relative");
                    const nextElementSibling = button.nextElementSibling;
                    // Hide all forms

                    nextElementSibling.classList.remove("hidden")

                    // Show only the form corresponding to the clicked button
                    // button.nextSibling.classList.remove("hidden");

                    event.preventDefault();
                });
            });
            sectioncancels.forEach((cancel, index) => {
                cancel.addEventListener("click", function(event) {
                    sectionforms.forEach(form => {
                        form.classList.add("hidden");
                    });
                });
            });
            sectionupdatecancels.forEach((cancel, index) => {
                cancel.addEventListener("click", function(event) {
                    UpdateForms.forEach(form => {
                        form.classList.add("hidden");
                    });
                });
            });
            companycancels.forEach((cancel, index) => {
                cancel.addEventListener("click", function(event) {
                    companyforms.forEach(form => {
                        form.classList.add("hidden");
                    });
                });
            });
            companyupdatecancels.forEach((cancel, index) => {
                cancel.addEventListener("click", function(event) {
                    UpdateForms.forEach(form => {
                        form.classList.add("hidden");
                    });
                });
            });
        });
    </script>
@endpush
