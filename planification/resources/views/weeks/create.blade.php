@extends('default')
@section('content')
    <div class="w-[100%] z-0 ">
        <div class="h-[100px] flex justify-around items-center  ">
            <div class="bg-indigo-300 rounded-xl h-20 text-center flex justify-center items-center w-[300px]"> Semester :
                {{ $week->semester }}</div>
            <div class="bg-indigo-300 rounded-xl h-20 text-center flex justify-center items-center w-[300px]"> Semaine :
                {{ $week->week_type }}</div>
            <div class="bg-indigo-300 rounded-xl h-20 text-center flex justify-center items-center w-[300px]">Du
                {{ $week->start_week_date }} au {{ $week->end_week_date }}</div>
        </div>
        
        <table class=" w-[100%] z-0 ">
            <tr>
                <td class=" " style="visibility: hidden">Domaine JCP</td>{{-- //vide --}}
                <td class="">
                    @php
                        $companies = $battalion->companies_ST;
                        $domaine = 'ST';
                    @endphp
                    @include('weeks.domaine', [
                        'companies' => $companies,
                        'domaine' => $domaine,
                        'week_id' => $week->id,
                    ])
                </td>
                <td class=" ">
                    @php
                        $companies = $battalion->companies_MI;
                        $domaine = 'MI';
                    @endphp
                    @include('weeks.domaine', [
                        'companies' => $companies,
                        'domaine' => $domaine,
                        'week_id' => $week->id,
                    ])
                </td>
            </tr>
            @php

                $date = $week->start_week_date;
            @endphp


            @for ($i = 0; $i < 5; $i++)
                <tr class="h-[500px]">
                    @php
                        $date = date('Y-m-d', strtotime('+1 days', strtotime($date)));
                    @endphp
                    <td class="h-[500%] ">
                        @include('weeks.day', ['date' => $date, 'timings' => $timings])
                    </td>
                    @php
                        $companies = $battalion->companies_ST;
                    @endphp
                    <td class="h-[500px]">
                        @include('weeks.domaine-day', [
                            'companies' => $companies,
                            'timings' => $timings,
                            'date' => $date,
                            'week_id' => $week->id,
                        ])
                    </td>

                    @php
                        $companies = $battalion->companies_MI;
                    @endphp
                    <td class="h-[500px] ">
                        @include('weeks.domaine-day', [
                            'companies' => $companies,
                            'timings' => $timings,
                            'date' => $date,
                            'week_id' => $week->id,
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


            const SectionButtons = document.querySelectorAll(".section-button");
            const CompanyButtons = document.querySelectorAll(".company-button");
            const sectionforms = document.querySelectorAll(".section-form");
            const companyforms = document.querySelectorAll(".company-form");
            const sectioncancels = document.querySelectorAll(".section-cancel-button");
            const companycancels = document.querySelectorAll(".company-cancel-button");
            sectionforms.forEach(form => {
                form.classList.add("hidden");
            });
            companyforms.forEach(form => {
                form.classList.add("hidden");
            });
            SectionButtons.forEach((button, index) => {
                button.addEventListener("click", function(event) {
                    sectionforms.forEach(form => {
                        form.classList.add("hidden");
                    });
                    companyforms.forEach(form => {
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
            companycancels.forEach((cancel, index) => {
                cancel.addEventListener("click", function(event) {
                    companyforms.forEach(form => {
                        form.classList.add("hidden");
                    });
                });
            });
        });
    </script>
@endpush
