@extends('default')
@push('header')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css" rel="stylesheet">
@endpush
@section('content')
    <div class="  h-[130vh] w-[100%]  flex flex-col justify-between mt-10 items-center p-20">
        <div class="flex flex-col justify-center items-center w-[100%]">
            {{-- schoolyars datatable --}}
            <p class="text-6xl font-bold ">School year : {{ $schoolyear->schoolyear }} </p>
            <div class="card mt-4 rounded-2xl  z-0  mb-20  w-[50%]">
                <div class="card-header z-0 text-2xl ">Battalions</div>
                <div class="card-body w-[100%] z-0">
                    <table class="z-0  w-[100%]  display" id="battalions">
                        <thead>
                            <th>Battalion</th>
                            <th>Action</th>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="card mt-4 rounded-2xl  z-0  mb-20  w-[50%]">
                <div class="card-header z-0 text-2xl ">Modules</div>
                <div class="card-body w-[100%] z-0">
                    <table class="z-0  w-[100%]  display" id="modules">
                        <thead>
                            <th>Battalion</th>
                            <th>Module</th>
                            <th>Sector</th>
                            <th>Semester</th>
                            <th>Vol-Hor</th>
                            <th>Cours</th>
                            <th>Tds</th>
                            <th>Tps</th>
                            <th>Action</th>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="card mt-4  rounded-2xl  z-0  mb-20  w-[100%]">

                <div class="card-header z-0 text-2xl ">Manage School year Calendar</div>
                <div class="card-body w-[100%] z-0">
                    <table class="z-0 relative display text-center table" id="global_weeks">
                        <thead>
                            <th class="incluce">N°</th>
                            <th class="exclude">Start</th>
                            <th class="exclude">End</th>
                            {{-- <th class="incluce">N°</th> --}}
                            <th class="exclude">1er annee</th>
                            <th class="exclude">2em annee</th>
                            <th class="exclude">3em annee</th>
                            <th class="exclude">Events</th>
                            <th class="exclude">Occasions</th>
                            <th class="exclude">Sport events</th>
                            <th class="exclude">Action</th>
                        </thead>
                        <tbody class="z-0">
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="relative flex flex-col justify-center items-center mb-20 w-[100%] ">
                <button class=" bg-slate-400 rounded-lg add-button  p-2 z-0" id="form-button">Add</button>
                <form action="{{ route('global_weeks.store', ['id' => $schoolyear->id]) }}" enctype="multipart/form-data"
                    method="POST"
                    class="z-100 p-4 global-week-form   absolute h-fit flex flex-col justify-center items-center  bg-base-200 top-20 left-[10%]  w-[80%] rounded-3xl shadow-lg">
                    @csrf
                    @php
                        $nextstartdate = date('Y-m-d', strtotime('+7 days', strtotime($maxstartdate)));
                        $nextenddate = date('Y-m-d', strtotime('+4 days', strtotime($nextstartdate)));
                    @endphp
                    @if (isset($global_weeks))
                    @endif
                    <input type="hidden" name="start_week_date" value="{{ $nextstartdate }}">
                    <input type="hidden" name="end_week_date" value="{{ $nextenddate }}">
                    <input type="hidden" name="schoolyear_id" value="{{ $schoolyear->id }}">
                    <button class="cancel-button absolute top-6 right-6 font-bold text-3xl">x</button>
                    <div class="flex justify-around items-center space-x-6">
                        <div class="flex flex-col justify-around items-stretch space-y-4">
                            <p class="text-2xl font-bold text-center">1st Battalion</p>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="1">type</label>
                                <select name="type_1" id="1" class="h-10 rounded-lg focus:border-indigo-400 w-30">
                                    <option value="Cours Magistreaux">Cours Magistreaux</option>
                                    <option value="Cours">Cours</option>
                                    <option value="Examens">Examens</option>
                                    <option value="Detente">Detente</option>
                                    <option value="Formation militaire">Formation militaire</option>
                                    <option value="Conge">Conge</option>
                                    <option value="Recrutement">Recrutement</option>
                                </select>
                            </div>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="s1">semester</label>
                                <select name="semester_1" class="rounded-lg focus:border-indigo-400 h-10" id="s1">
                                    <option value="1">S1</option>
                                    <option value="2">S2</option>
                                </select>
                            </div>

                            <div class="flex justify-between space-x-2 items-center">
                                <label for="cc1">Control Continue</label>
                                <input type="checkbox" name="cc_1" value="true"
                                    class="rounded-lg focus:border-indigo-400" id="cc1">
                            </div>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="sp1">Examen Sport</label>
                                <input type="checkbox" name="sport_1" class="rounded-lg focus:border-indigo-400"
                                    value="true" id="sp1">
                            </div>
                        </div>

                        <div class="flex flex-col justify-around items-around space-y-4">
                            <p class="text-2xl font-bold text-center">2nd Battalion</p>
                            <div class="flex justify-between space-x-2 items-center">

                                <label for="2">type</label>
                                <select name="type_2" id="2" class="h-10 rounded-lg focus:border-indigo-400 w-30">
                                    <option value="Cours Magistreaux">Cours Magistreaux</option>
                                    <option value="Cours">Cours</option>
                                    <option value="Examens">Examens</option>
                                    <option value="Detente">Detente</option>
                                    <option value="Formation militaire">Formation militaire</option>
                                    <option value="Conge">Conge</option>
                                    <option value="Recrutement">Recrutement</option>
                                </select>
                            </div>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="s2">semester</label>
                                <select name="semester_2" class="rounded-lg focus:border-indigo-400 h-10" id="s2">
                                    <option value="1">S1</option>
                                    <option value="2">S2</option>
                                </select>
                            </div>

                            <div class="flex justify-between space-x-2 items-center">
                                <label for="cc2">Control Continue </label>
                                <input type="checkbox" name="cc_2" class="rounded-lg focus:border-indigo-400"
                                    value="true" id="cc2">
                            </div>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="sp2">Examen Sport</label>
                                <input type="checkbox" class="rounded-lg focus:border-indigo-400" name="sport_2"
                                    value="true" id="sp2">
                            </div>
                        </div>
                        <div class="flex flex-col justify-around items-stretch space-y-4">
                            <p class="text-2xl font-bold text-center">3rd Battalion</p>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="3">type</label>
                                <select name="type_3" id="3"
                                    class="h-10 rounded-lg focus:border-indigo-400 w-30">
                                    <option value="Cours Magistreaux">Cours Magistreaux</option>
                                    <option value="Cours">Cours</option>
                                    <option value="Examens">Examens</option>
                                    <option value="Detente">Detente</option>
                                    <option value="Formation militaire">Formation militaire</option>
                                    <option value="Conge">Conge</option>
                                    <option value="Recrutement">Recrutement</option>
                                </select>
                            </div>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="s3">semester</label>
                                <select name="semester_3" class="rounded-lg focus:border-indigo-400 h-10" id="s3">
                                    <option value="1">S1</option>
                                    <option value="2">S2</option>
                                </select>
                            </div>

                            <div class="flex justify-between space-x-2 items-center">
                                <label for="cc3">Control Continue</label>
                                <input type="checkbox" name="cc_3" value="true"
                                    class="rounded-lg focus:border-indigo-400" id="cc3">
                            </div>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="sp3">Examen Sport</label>
                                <input type="checkbox" name="sport_3" class="rounded-lg focus:border-indigo-400"
                                    value="true" id="sp3">
                            </div>
                        </div>
                        <div class="flex flex-col justify-around items-sretch space-y-4">
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="ev">Events</label>
                                <input type="text" name="event" id="ev"
                                    class="h-20 rounded-lg focus:border-indigo-400 w-30">
                            </div>
                            <div class="flex justify-between space-x-2 items-center">
                                <label for="sev">Sport events</label>
                                <input type="text" name="sport_event" id="sev"
                                    class="h-20 rounded-lg focus:border-indigo-400 w-30">
                            </div>
                        </div>
                    </div>
                    <div class=" h-20 w-60 flex justify-center items-center mt-10">
                        <button
                            class=" bg-indigo-500 h-12 hover:bg-slate-500 hover:text-slate-50 w-24 rounded-xl">INSERT</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.dataTables.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script>
            $(function() {
                var url = "{{ route('schoolyears.battalions', $schoolyear->id) }}";
                var table1 = $('#battalions').DataTable({
                    processing: true,
                    serverSide: true,

                    ajax: url,
                    columns: [{
                            data: 'battalion',
                            name: 'battalion',
                            searchable: true,
                        },

                        {
                            data: 'action',
                            name: 'action'
                        }
                    ],
                });
            });
        </script>
        <script>
            $(function() {
                var url = "{{ route('schoolyears.schoolyear_modules', $schoolyear->id) }}";
                var table1 = $('#modules').DataTable({
                    processing: true,
                    serverSide: true,

                    ajax: url,
                    columns: [
                        {
                            data: 'battalion.battalion',
                            name: 'battalion.battalion',
                            searchable: true,
                        },
                        {
                            data: 'module.module',
                            name: 'module.module',
                            searchable: true,
                        },
                        {
                            data: 'module_sector',
                            name: 'module_sector',
                        },
                        {
                            data: 'semester',
                            name: 'semester',
                        },  
                        {
                            data: null,
                            render: function(data,type,row) { return (data["nb_cours"] + data["nb_tds"] + data["nb_tps"])},
                        },
                        {
                            data: 'nb_cours',
                            name: 'nb_cours'
                        },
                        {
                            data: 'nb_tds',
                            name: 'nb_tds'
                        },
                        {
                            data: 'nb_tps',
                            name: 'nb_tps'
                        },
                        {
                            data: 'action',
                            name: 'action'
                        }
                    ],
                });
            });
        </script>
        <script>
            const openModal = (button) => {
                const modal = button.nextElementSibling;
                modal.showModal();
            }

            function closeModal(button) {
                const modal = button.closest('.modal');
                modal.close();
            }
        </script>
        <script>
            $(function() {
                var url = "{{ route('schoolyears.show', $schoolyear->id) }}";
                var table = $('#global_weeks').DataTable({
                    processing: true,
                    serverSide: true,
                    lengthMenu: [100],
                    ajax: url,
                    orderBy: 'start_week_date',
                    columns: [{
                            data: 'global_week_number',
                            name: 'global_week_number',
                            searchable: true,
                            orderable: true,
                        } ,{
                            data: 'start_week_date',
                            name: 'start_week_date',
                            searchable: true,
                        },
                        {
                            data: 'end_week_date',
                            name: 'end_week_date'
                        },
                        {
                            data: 'battalion_1',
                            name: 'battalion_1.week_type',
                        },
                        {
                            data: 'battalion_2',
                            name: 'battalion_2',
                        },
                        {
                            data: 'battalion_3',
                            name: 'battalion_3',
                        },
                        {
                            data: 'events',
                            name: 'events',
                        },
                        {
                            data: 'occasions',
                            name: 'occasions'
                        },
                        {
                            data: 'sport_events',
                            name: 'sport_events',
                        },
                        {
                            data: 'action',
                            name: 'action'
                        }
                    ],

                    layout: {
                        top2Start: {
                            buttons: [{
                                extend: 'copyHtml5',
                                text: '<i class="fa fa-files-o bg-base-200 btn">Copy</i>',
                                titleAttr: 'Copy'
                            }, {
                                extend: 'csvHtml5',
                                text: '<i class="fa fa-file-excel-o btn">CSV</i>',
                                titleAttr: 'CSV'
                            }, {
                                extend: 'excelHtml5',
                                text: '<i class="fa fa-file-excel-o btn">Excel</i>',
                                titleAttr: 'Excel',
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4, 5, 6]
                                },
                            }, {
                                extend: 'pdfHtml5',
                                text: '<i class="fa fa-file-pdf-o bg-base-200 btn">Pdf</i>',
                                titleAttr: 'PDF',
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4, 5, 6]
                                },
                            }]
                        }


                    },
                    columnDefs: [{
                        targets: [3, 4, 5], // Indices of columns where you want to include the div
                        render: function(data, type, row, meta) {
                            // Add the div element with class bg-green-400 around the data
                            var jsonData = JSON.parse(data);

                            // var jsonData = JSON.parse(data);
                            var ur =
                                '{{ route('weeks.show', ':id') }}'; // Define the route template
                            ur = ur.replace(':id', jsonData.id);
                            if (jsonData.week_type == 'Cours' || jsonData.week_type ==
                                'Cours Magistreaux' || jsonData.week_type == 'Examens') {
                                if (jsonData.semester == 1) {
                                    var element =
                                        '<div class="flex justify-start bg-secondary-content space-x-4 text-xl items-center p-2 rounded-lg"><div class="flex space-x-4"><a class="text-none" href="/weeks/' +
                                        jsonData.id +
                                        '">' +
                                        jsonData.week_type + '</div>';
                                } else {
                                    var element =
                                        '<div class="flex bg-primary-content  justify-start space-x-2 text-xl items-center p-2 rounded-lg"><a class="text-none" href="/weeks/' +
                                        jsonData.id +
                                        '">' +
                                        jsonData.week_type;
                                }

                                if (jsonData.week_type == 'Cours') {

                                    element = element + ' (' + jsonData.week_number + ')</a>';
                                    if (jsonData.cc == 1) {
                                        element = element +
                                            '<div class="badge badge-outline">cc</div>';
                                    }
                                    if (jsonData.sport_exam == 1) {
                                        element = element +
                                            '<div class="badge badge-primary  badge-outline">Es</div>';
                                    }
                                }
                                return element +
                                    '</div>';

                            } else {
                                return jsonData ?
                                    '<div class="flex justify-start bg-base-200 space-x-4 text-xl items-center p-2 rounded-lg "><span class="font-bold  text-red"> ' +
                                    jsonData.week_type + '</span></div>' :
                                    'Empty';
                            }

                        }
                    }],
                    // drawCallback: function(settings) {
                    //         $('#global_weeks tbody tr').addClass('relative');
                    //     }
                });
            });
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {


                const Button = document.querySelector(".add-button");

                const form = document.querySelector(".global-week-form");


                const cancel = document.querySelector(".cancel-button");


                form.classList.add("hidden");



                Button.addEventListener("click", function(event) {
                    event.preventDefault();
                    const parent = Button.parentElement;
                    parent.classList.add("relative");

                    // Hide all forms
                    form.classList.remove("hidden")

                    // Show only the form corresponding to the clicked button
                    // button.nextSibling.classList.remove("hidden");

                });
                cancel.addEventListener("click", function(event) {
                    event.preventDefault();
                    form.classList.add("hidden");
                });

            });
        </script>
        <script>
            function ShowMiddleForm(button) {
                const form = button.nextElementSibling;
                form.classList.remove("hidden");
            }

            function HideMiddleForm(button) {
                const form = button.parentNode;
                form.classList.add("hidden");
            }
        </script>
    @endpush
