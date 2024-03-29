@extends('default')
@section('content')
    <div class="w-[100%] z-0 ">
        <script>
            const rooms = @json($rooms);
            const timings = @json($timings);
        </script>
        
        <div class="h-[100px]  flex justify-around items-center  ">
            <input type="checkbox" value="cupcake" class="toggle theme-controller  justify-self-start" />
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
                
                <a href="{{ route('battalions.show', ['id' => $week->battalion->id]) }}" class="tooltip" data-tip="battalion">
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
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  </div>
                  <div class="stat-title">Total Sessions</div>
                  <div class="stat-value">{{ $sessions->where('week_id', $week->id)->count() }}</div>
                  <div class="stat-desc">{{$week->global_week->start_week_date}} -> {{$week->global_week->start_week_date}}</div>
                </div>
                
                <div class="stat">
                  <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                  </div>
                  <div class="stat-title">Absences</div>
                  <div class="stat-value">{{ $week->absences()->count() }}</div>
                  <div class="stat-desc">↗︎ 400 (22%)</div>
                </div>
                
                <div class="stat">
                  <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                  </div>
                  <div class="stat-title">New Registers</div>
                  <div class="stat-value">1,200</div>
                  <div class="stat-desc">↘︎ 90 (14%)</div>
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
    @vite('resources/js/mark-absence.ts')

    <script>
        function openModal(button) {
            const modal = button.nextElementSibling;
            modal.showModal();
        }

        function closeModal(button) {
            const modal = button.closest('.modal');
            modal.close();
        }
    </script>
    <script>
        async function setupEventListeners() {
            const UpdateForms = document.querySelectorAll(".update-form");
            const UpdateButtons = document.querySelectorAll(".update-button");
            const SectionButtons = document.querySelectorAll(".section-button");
            const CompanyButtons = document.querySelectorAll(".company-button");

            const TpButtons = document.querySelectorAll(".add-tp-button");
            const TpCancels = document.querySelectorAll(".tp-cancel-button");
            const TpForms = document.querySelectorAll(".tp-insert-form");
            const sectionforms = document.querySelectorAll(".section-form");
            const companyforms = document.querySelectorAll(".company-form");
            const sectioncancels = document.querySelectorAll(".section-cancel-button");
            //    console.log(sectioncancels);
            const sectionupdatecancels = document.querySelectorAll(".section-update-cancel-button");
            const companycancels = document.querySelectorAll(".company-cancel-button");
            const companyupdatecancels = document.querySelectorAll(".company-update-cancel-button");
            TpButtons.forEach((button, index) => {
                button.addEventListener("click", function(event) {
                    event.preventDefault();
                    sectionforms.forEach(form => {
                        form.classList.add("hidden");
                    });
                    TpForms.forEach(form => {
                        form.classList.remove("hidden");
                        form.classList.add("hidden");
                    });
                    companyforms.forEach(form => {
                        form.classList.add("hidden");
                    });
                    UpdateForms.forEach(form => {
                        form.classList.add("hidden");
                    });
                    // const parents = document.querySelectorAll(".td-parent");
                    // parents.forEach(parent => {
                    //     parent.classList.remove("relative");
                    // });
                    // const parent = button.parentNode;
                    // parent.classList.add("relative");
                    const nextElementSibling = button.nextElementSibling;
                    nextElementSibling.classList.remove("hidden");


                });
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
                    TpForms.forEach(form => {
                        form.classList.add("hidden");
                    });
                    const parents = document.querySelectorAll(".updateformparent");
                    parents.forEach(parent => {
                        parent.classList.remove("relative");
                    });
                    const parent = Button.parentNode;
                    parent.classList.add("relative");
                    const nextElementSibling = Button.nextElementSibling;
                    // Hide all forms
                    nextElementSibling.classList.remove("hidden")

                    event.preventDefault();
                });
            });
            SectionButtons.forEach((button, index) => {
                button.addEventListener("click", function(event) {
                    event.preventDefault();
                    sectionforms.forEach(form => {
                        form.classList.add("hidden");
                    });
                    TpForms.forEach(form => {
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
                    nextElementSibling.classList.remove("hidden")


                });
            });
            CompanyButtons.forEach((button, index) => {
                button.addEventListener("click", function(event) {
                    sectionforms.forEach(form => {
                        form.classList.add("hidden");
                    });
                    TpForms.forEach(form => {
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

                    nextElementSibling.classList.remove("hidden")

                    event.preventDefault();
                });
            });
            TpCancels.forEach((cancel, index) => function(event) {

                cancel.addEventListener("click", function(event) {
                    console.log("cancel-clicked");
                    TpForms.forEach(form => {
                        form.classList.add("hidden");
                    });
                });
            });
            sectioncancels.forEach((cancel, index) => {
                // console.log(cancel);
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
            console.log("execute");
            companyupdatecancels.forEach((cancel, index) => {
                cancel.addEventListener("click", function(event) {
                    UpdateForms.forEach(form => {
                        form.classList.add("hidden");
                    });
                });
            });

        }
        document.addEventListener("DOMContentLoaded", async function() {
            await setupEventListeners();
            setInterval(setupEventListeners, 5000);
            setTimeout(setupEventListeners, 5);
        });
    </script>
@endpush
