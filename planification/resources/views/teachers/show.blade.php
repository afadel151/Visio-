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
    <div class="container  flex justify-center items-center flex-col w-[100%] relative  mt-20">
        <a href="{{ route('teachers.index') }}">
            <button
                class="absolute top-5 left-5 bg-slate-500 text-gray-100 border-slate-500 border-2 hover:text-gray-950 rounded-3xl text-xl hover:bg-slate-50 h-20 w-40">
                < All teachers</button>
        </a>
        <a href="{{ route('settings.teachers') }}">
            <button
                class="absolute top-5 right-5 flex flex-col justify-center items-center p-8   text-gray-950  text-2xl hover:text-gray-950 rounded-full  hover:bg-slate-50 ">
                <p>modify teacher</p>
                <img class="h-12 w-12" src="/svg/gear-bold.svg" alt="">
            </button>
        </a>

        <div class="flex flex-col justify-center items-center space-y-4 ">
            <p class="text-7xl font-weight-bold   " style="font-weight: 700">Teacher :
                <span class="text-red-500">{{ $teacher->teacher_name }}</span>
            </p>
            <p class="text-4xl font-weight-bold  "> category : <span class="text-green-500">
                    {{ $teacher->teacher_type }}</span></p>
            <p class="text-4xl font-weight-bold  "> grade : <span class="text-blue-500">
                    {{ $teacher->teacher_grade }}</span></p>
        </div>
        <div>
            <form id="teacherClassesForm" onsubmit="fetchClasses(event)"
                class="flex flex-col  justify-center items-center space-y-5 h-72 ">
                @csrf
                <div class="flex flex-col justify-center items-center">
                    <p class="text-xl font-bold">Min date</p>
                    <input type="date" class="rounded-lg hover:scale-110 duration-200 focus:border-blue-400"
                        name="min_date">
                </div>
                <div class="flex flex-col justify-center items-center">
                    <p class="text-xl font-bold">Max date</p>
                    <input type="date" class="rounded-lg hover:scale-110 duration-200 focus:border-blue-400"
                        name="max_date">
                </div>
                <input type="submit" value="Submit"
                    class="w-20 h-10 bg-indigo-500 hover:border-2 hover:border-slate-800 rounded-lg hover:scale-[1.2] duration-300 hover:bg-slate-200 hover:text-slate-950">
            </form>
            <div id="result"
                class="flex flex-col hover:scale-110 duration-300 hover:border-slate-600 hover:border-4 justify-center items-center w-[300px] h-[200px] bg-slate-100 shadow-xl rounded-2xl">
                <p class="text-3xl font-light">Results shows Here</p>
            </div>

        </div>
        {{-- {{ $teacher }} --}}
        {{-- {{ $teacher }} --}}
        <div class="card mt-20 mb-20 w-[100%]">
            <div class="card-header text-center text-3xl font-bold">Modules</div>
            <div class="card-body">
                {{-- {!! $dataTable->table() !!} --}}
                <table class="table table-bordered display  table-fixed text-center" id="modules">
                    <thead class="text-center">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Module</th>
                            <th class="text-center">Battalion</th>
                            <th class="text-center">Schoolyear</th>
                            <th class="text-center">Sector</th>
                            <th class="text-center">Semester</th>
                            <th class="text-center">Department </th>
                            <th class="text-center">Seances</th>
                            <th class="text-center">Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($modules as $module)
                            <tr>
                                <td>{{ $module->module_id }}</td>
                                <td>{{ $module->module }}</td>
                                <td>{{ $module->battalion }}</td>
                                <td>{{ $module->schoolyear }}</td>

                                <td>{{ $module->module_sector }}</td>

                                <td>{{ $module->semester }}</td>
                                <td>{{ $module->department }}</td>
                                <td class="">
                                    @if ($module->cours == true)
                                        <div class=" bg-green-400 rounded-full text-center">Cours</div>
                                    @endif
                                    @if ($module->td == true)
                                        <div class=" bg-red-400 rounded-full text-center">Td</div>
                                    @endif
                                    @if ($module->tp)
                                        <div class=" bg-yellow-200 rounded-full text-center">Tp</div>
                                    @endif
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="edit btn btn-info btn-sm rounded-lg">View</a>
                                    <a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="card mt-10 mb-20 w-[100%]">
            <div class="card-header text-center text-3xl font-bold">Absences</div>
            <div class="card-body">
                {{-- {!! $dataTable->table() !!} --}}
                <table class="table table-bordered display  table-fixed text-center" id="absences">
                    <thead class="text-center ">
                        <tr>
                            <th class="text-center">Module</th>
                            <th class="text-center">Room</th>
                            <th class="text-center">date</th>
                            <th class="text-center w-32">time </th>
                            <th class="text-center">Class</th>
                            <th class="text-center">Caught Up</th>
                        </tr>
                    </thead>

                </table>
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
                    var url = "{{ route('teachers.show', $teacher->id) }}";
                    var table = $('#modules').DataTable({
                        processing: true,
                        serverSide: true,
                        searching: true,
                        ajax: url,

                        columns: [{
                                data: 'id',
                                name: 'teachers_modules.module_id'
                            },
                            {
                                data: 'module',
                                name: 'module',
                                searchable: true,
                            },
                            {
                                data: 'battalion',
                                name: 'battalion',
                            },
                            {
                                data: 'schoolyear',
                                name: 'schoolyear',
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

                                data: 'department',
                                name: 'departments.department',
                                searchable: false,
                                orderable: true,

                            },
                            {
                                data: 'null',
                                name: 'Seances',
                                render: function(data, type, row) {
                                    // Generate the content for the Seances column dynamically based on other data
                                    var seances =
                                        '<div class="flex justify-around items-center h-[100%] w-[100%]">';
                                    if (row.cours == true) {
                                        seances +=
                                            '<span class="p-1 bg-green-400 rounded-full text-center">cours</span>';
                                    }
                                    if (row.td == true) {
                                        seances +=
                                            '<span class="p-1 bg-red-400 rounded-full text-center">Td</span>';
                                    }
                                    if (row.tp) {
                                        seances +=
                                            '<span class="p-1 bg-yellow-200 rounded-full text-center">Tp</span>';
                                    }
                                    return seances + '</div>';
                                }
                            },
                            {
                                data: 'action',
                                name: 'action'
                            },
                        ],
                        drawCallback: function(settings) {
                            $('#modules tbody tr').addClass('hover:scale-105  duration-500');
                        }
                    });

                });
            </script>
            <script>
                $(function() {
                    var teacherId = {{ $id }};


                    var url2 = "{{ route('teachers.absences', ':teacherId') }}";
                    url2 = url2.replace(':teacherId', teacherId);
                    var table2 = $('#absences').DataTable({
                        processing: true,
                        serverSide: true,
                        searching: true,
                        ajax: url2,

                        columns: [{
                                data: 'module',
                                name: 'module',

                            },
                            {
                                data: 'room',
                                name: 'room',
                            },
                            {

                                data: 'date',
                                name: 'date',
                            },
                            {

                                data: 'time',
                                name: 'time',

                            },
                            {

                                data: 'class',
                                name: 'class',

                            },
                            {

                                data: 'caughtup',
                                name: 'caughtup',
                                render: function(data, type, row) {
                                    var caught = '';
                                    if (row.caughtup == true) {
                                        caught =
                                            '<div class="h-8 w-20 text-center flex justify-center items-center bg-green-400 rounded-lg">YES</div>';
                                    } else {
                                        caught =
                                            '<div class="h-[100%] w-[100%] flex justify-center items-center"><div class="h-8 w-20 bg-red-400 flex justify-center items-center font-bold rounded-lg">NON</div></div>';
                                    }
                                    return caught;
                                }

                            },
                        ],
                        drawCallback: function(settings) {
                            $('#absences tbody tr').addClass('hover:scale-105  duration-500');
                        }
                    });

                });
            </script>
            <script>
                function fetchClasses(event) {
                    event.preventDefault();
                    const formData = new FormData(document.getElementById('teacherClassesForm'));
                    const data = {
                        min_date: formData.get('min_date'),
                        max_date: formData.get('max_date'),
                    };
                    axios.get('classes/' + {{ $teacher->id }}, {
                            params: data
                        })
                        .then(function(response) {
                            const classes = response.data;
                            document.getElementById('result').innerHTML = `
                                <p class="text-xl ">Nbcours: ${classes.Nbcours}</p>
                                <p class="text-xl ">Nbtds: ${classes.Nbtds}</p>
                                <p class="text-xl ">Nbtps: ${classes.Nbtps}</p>
                                `;
                            console.log(response);
                        })
                        .catch(function(error) {
                            console.log(error);
                            document.getElementById('result').innerText = 'Failed to fetch data';
                        });
                }
            </script>
            <script>
                document.addEventListener("DOMContentLoaded", function() {

                    const rows = document.querySelectorAll("tr");
                    rows.forEach(row => {
                        row.classList.add("hover:scale-110");
                        row.classList.add("duration-300");
                    });
                });
            </script>
        @endpush
