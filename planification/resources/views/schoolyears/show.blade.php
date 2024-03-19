@extends('default')
@push('header')
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script>
        $(document).ready(function() {
            $('table.display').DataTable();
        });
    </script>
@endpush
@section('content')
    <div class="  h-[130vh] w-[90%]  flex flex-col justify-between mt-10 items-center p-20">
        <div class="flex flex-col justify-center items-center w-[100%]">
            {{-- schoolyars datatable --}}
            <p class="text-6xl font-bold ">School year : {{ $schoolyear->schoolyear }} </p>
            <div class="card mt-4 rounded-2xl  z-0  mb-20  w-[100%]">
                <div class="card-header z-0 text-2xl ">Battalions</div>
                <div class="card-body w-[100%] z-0">
                    <table class="z-0 display" id="battalions">
                        <thead>
                            <th>No</th>
                            <th>Battalion</th>
                            <th>Schoolyear id</th>
                            <th>Action</th>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="card mt-4  rounded-2xl  z-0  mb-20  w-[100%]">

                <div class="card-header z-0 text-2xl ">Manage School Years</div>
                <div class="card-body w-[100%] z-0">
                    <table class="z-0 display" id="global_weeks">
                        <thead>
                            <th>No</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>1er annee</th>
                            <th>2em annee</th>
                            <th>3em annee</th>
                            <th>Events</th>
                            <th>Sport events</th>

                        </thead>
                        <tbody class="z-0">

                            @foreach ($global_weeks as $global_week)
                                <tr>
                                    <td>{{ $global_week->id }}</td>
                                    <td>{{ $global_week->star_week_date }}</td>
                                    <td>{{ $global_week->end_week_date }}</td>
                                    <td> {{ $global_week->battalion_1 }} </td>
                                    <td>{{ $global_week->battalion_2 }}</td>
                                    <td>{{ $global_week->battalion_3 }}</td>
                                    <td> {{ $global_week->events }}</td>
                                    <td>{{ $global_week->sport_events }}</td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
            <div class="relative flex flex-col justify-center items-center mb-20 w-[100%] ">
                <button class=" bg-slate-400 rounded-lg add-button  p-2 z-0" id="form-button">Add</button>
                <form action="{{ route('global_weeks.store', ['id' => $schoolyear->id]) }}" enctype="multipart/form-data"
                    method="POST"
                    class="z-100 p-4 global-week-form   absolute h-fit flex flex-col justify-center items-center  bg-slate-50 top-20 left-[10%]  w-[80%] rounded-3xl shadow-lg">
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
                                    <option value="Cours magistreau">Cours magistreau</option>
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
                                <label for="n1">Week number</label>
                                <input type="text" name="number_1" id="n1"
                                    class="w-24 rounded-lg focus:border-indigo-400 h-8">
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
                                    <option value="Cours magistreau">Cours magistreau</option>
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
                                <label for="n2">Week number</label>
                                <input type="text" name="number_2" id="n2"
                                    class="w-24 rounded-lg focus:border-indigo-400 h-8" pattern="{1,2}">
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
                                    <option value="Cours magistreau">Cours magistreau</option>
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
                                <label for="n3">Week number</label>
                                <input type="text" class="w-24 rounded-lg focus:border-indigo-400 h-8" name="number_3"
                                    id="n3">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(function() {
                var url = "{{ route('schoolyears.battalions', $schoolyear->id) }}";
                var table1 = $('#battalions').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: url,
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'battalion',
                            name: 'battalion',
                            searchable: true,
                        },
                        {
                            data: 'schoolyear_id',
                            name: 'schoolyear_id'
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
                var url = "{{ route('schoolyears.show', $schoolyear->id) }}";
                var table = $('#global_weeks').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: url,
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
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
                            data: 'sport_events',
                            name: 'sport_events',
                        },
                    ],
                    columnDefs: [{
                        targets: [3, 4, 5], // Indices of columns where you want to include the div
                        render: function(data, type, row, meta) {
                            // Add the div element with class bg-green-400 around the data
                            var jsonData = JSON.parse(data);

                            // var jsonData = JSON.parse(data);
                            var ur =
                                '{{ route('weeks.show', ':id') }}'; // Define the route template
                            ur = ur.replace(':id', jsonData.id);
                            if (jsonData.week_type == 'Cours') {
                                var element =
                                    '<div class="flex justify-between text-xl items-center p-2 rounded-lg">' +
                                    jsonData.week_type + ' (' + jsonData.week_number + ')';
                                if (jsonData.cc == 1) {
                                    element = element +
                                        '<div class=" bg-blue-400 h-6 w-6 rounded-full"></div>';
                                }
                                if (jsonData.sport_exam == 1) {
                                    element = element +
                                        '<div class=" bg-yellow-400 h-6 w-6 rounded-full"></div>';
                                }
                                return element +
                                    ' <button class="bg-green-400 p-1 rounded-lg"><a class="text-none" href="' +
                                    ur +
                                    '">View</a></button></div>';
                                    
                            } else {
                                return jsonData ?

                                    '<div class="flex justify-between text-xl items-center p-2 rounded-lg">' +
                                    jsonData.week_type +
                                    ' <button class="bg-green-400 p-1 rounded-lg"><a class="text-none" href="' +
                                    ur +
                                    '">View</a></button></div>' :
                                    'Empty';
                            }

                        }
                    }]
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
        </script>
    @endpush
