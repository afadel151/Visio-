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
    <div class="  flex justify-center items-center flex-col w-[100%] relative  mt-20">
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
        <div class="w-full flex flex-col mt-4 justify-center items-center">
            <form id="teacherClassesForm" onsubmit="fetchClasses(event)"
                class="flex gap-6  justify-center w-fit  items-center  border-2 p-6 rounded-lg h-72 ">
                @csrf
                <div class="flex gap-4 justify-center items-center">
                    <p class="text-xl text-start font-bold">Min date :</p>
                    <input type="date" class="input input-primary input-lg" name="min_date">
                </div>
                <div class="flex gap-4  justify-center items-center">
                    <p class="text-xl font-bold">Max date:</p>
                    <input type="date" class="input input-primary input-lg" name="max_date">
                </div>
                <input type="submit" value="Submit" class="btn  btn-primary ">
            </form>
            <div id="result" class=" w-full px-4 mt-5">
                <p class="text-center text-5xl font-bold">The Teacher's Record : <span class="text-3xl font-normal">Enter
                        dates below</span> </p>
            </div>

        </div>
        {{-- {{ $teacher }} --}}
        {{-- {{ $teacher }} --}}
        <div class="card mt-20 mb-20 w-[70%]">
            <div class="card-header text-center text-3xl font-bold">Modules</div>
            <div class="card-body relative">
                {{-- {!! $dataTable->table() !!} --}}
                <table class="table display  table-fixed text-center" id="modules">
                    <thead class="text-center">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Module</th>
                            <th class="text-center">Battalion</th>
                            <th class="text-center">Sector</th>
                            <th class="text-center">Semester</th>
                            <th class="text-center">Department </th>
                            <th class="text-center">Seances</th>
                            <th class="text-center">Action </th>
                        </tr>
                    </thead>

                </table>
            </div>
            <button id="show-module-add" class="absolute btn -bottom-14 right-0">Add</button>
        </div>
        <div id="parent-of-module"
            class="p-4 border-[3px]  w-[50%] bg-slate-50 rounded-xl flex flex-col justify-center items-center"
            style="display: none;">

            <div class="flex flex-col justify-center items-center space-y-4">
                <form action="{{ route('teachers.add_module', ['id' => $teacher->id]) }}" enctype="multipart/form-data"
                    method="POST" class="flex flex-col justify-center items-center space-y-6" id="">
                    @csrf
                    <div class="flex space-x-3 ">
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-2xl">Select Schoolyear</p>
                            <select name="schoolyear_id" id="" class="w-[300px] select-bordered select ">
                                @foreach ($schoolyears as $schoolyear)
                                    <option value="{{ $schoolyear->id }}">Schoolyear : {{ $schoolyear->schoolyear }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-2xl">Select module</p>
                            <select name="module_id" id="" class="w-[300px] select-bordered select">
                                @foreach ($allmodules as $module)
                                    <option value="{{ $module->id }}">{{ $module->module }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="w-full flex mt-6 justify-around items-center">
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-xl">COUR</p>
                            <input name="cour" type="checkbox" class="toggle" />
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-xl">TD</p>
                            <input name="td" type="checkbox" class="toggle" />
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-xl">TP</p>
                            <input name="tp" type="checkbox" class="toggle" />
                        </div>

                    </div>

                    <input type="submit" name="submit" value="Add" class="btn  ">
                </form>
            </div>

        </div>
        <div class="card mt-10 mb-20 w-[70%]">
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
            <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
            <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
            <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
            <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
            <script>
                $(document).ready(function() {
                    $('#show-module-add').click(function() {
                        $('#parent-of-module').slideToggle();
                    });
                });
                $(function() {
                    var url = "{{ route('teachers.show', $teacher->id) }}";
                    var table = $('#modules').DataTable({
                        destroy: true,
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
                        destroy: true,
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
                                            '<div class="h-[100%] text-center  w-[100%] flex justify-center items-center"><div class="h-8 w-16 bg-green-400 flex justify-center items-center font-bold rounded-2xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" /></svg></div></div>';
                                    } else {
                                        caught =
                                            '<div class="h-[100%] text-center  w-[100%] flex justify-center items-center"><div class="h-8 w-16 bg-red-400 flex justify-center items-center font-bold rounded-2xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M7.498 15.25H4.372c-1.026 0-1.945-.694-2.054-1.715a12.137 12.137 0 0 1-.068-1.285c0-2.848.992-5.464 2.649-7.521C5.287 4.247 5.886 4 6.504 4h4.016a4.5 4.5 0 0 1 1.423.23l3.114 1.04a4.5 4.5 0 0 0 1.423.23h1.294M7.498 15.25c.618 0 .991.724.725 1.282A7.471 7.471 0 0 0 7.5 19.75 2.25 2.25 0 0 0 9.75 22a.75.75 0 0 0 .75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 0 0 2.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384m-10.253 1.5H9.7m8.075-9.75c.01.05.027.1.05.148.593 1.2.925 2.55.925 3.977 0 1.487-.36 2.89-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398-.306.774-1.086 1.227-1.918 1.227h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 0 0 .303-.54" /></svg></div></div>';
                                    }
                                    return caught;
                                }

                            },
                        ],

                    });

                });
            </script>
            <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
                                <table class="table table-zebra table-bordered border-2 w-[80%] ml-[10%]">
    <thead>
        <th class="text-2xl font-bold">
            TYPE
        </th>
        <th class="text-2xl font-bold">Dones</th>
        <th class="text-2xl font-bold">Absented</th>
        <th class="text-2xl font-bold">Caught Up</th>
    </thead>
    <tbody>
        <tr>
            <td class="text-xl font-bold">
                Cours
            </td>
            <td class="text-xl font-bold">15</td>
            <td class="text-xl font-bold">2</td>
            <td class="text-xl font-bold">1</td>
        </tr>
        <tr>
            <td class="text-xl font-bold">
                TD
            </td>
            <td class="text-xl font-bold">28</td>
            <td class="text-xl font-bold">1</td>
            <td class="text-xl font-bold">0</td>
        </tr>
        <tr>
            <td class="text-xl font-bold">
                TP
            </td>
            <td class="text-xl font-bold">3</td>
            <td class="text-xl font-bold">0</td>
            <td class="text-xl font-bold">0</td>
        </tr>
        <tr>
            <td class="text-xl font-bold">
                Supplementaire
            </td>
            <td class="text-xl font-bold">4</td>
            <td class="text-xl font-bold">0</td>
            <td class="text-xl font-bold">0</td>
        </tr>
     
        <tr>
            <td class="text-xl font-bold">
                Surv Examen
            </td>
            <td class="text-xl font-bold">4</td>
            <td class="text-xl font-bold">1</td>
            <td class="text-xl font-bold"></td>
        </tr>
        <tr>
            <td class="text-xl font-bold">
                Surv Controls
            </td>
            <td class="text-xl font-bold">9</td>
            <td class="text-xl font-bold">0</td>
            <td class="text-xl font-bold"></td>
        </tr>
        <tr>
            <td class="text-xl font-bold">
                Cour Magistreaux
            </td>
            <td class="text-xl font-bold">4</td>
            <td class="text-xl font-bold">0</td>
            <td class="text-xl font-bold">0</td>
        </tr>
        <tr>
            <td class="text-xl font-bold">
                Tutorat
            </td>
            <td class="text-xl font-bold">10</td>
            <td class="text-xl font-bold">1</td>
            <td class="text-xl font-bold">0</td>
        </tr>
    </tbody>
</table>
                                `;
                            console.log(response);
                        })
                        .catch(function(error) {
                            console.log(error);
                            document.getElementById('result').innerText = 'Failed to fetch data';
                        });
                }
            </script>
        @endpush
        {{-- <table class="table table-zebra ">
            <thead>
                <th>
                    TYPE
                </th>
                <th>Dones</th>
                <th>Absented</th>
                <th>Caught Up</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Cours
                    </td>
                    <td>15</td>
                    <td>2</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>
                        TD
                    </td>
                    <td>28</td>
                    <td>1</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>
                        TP
                    </td>
                    <td>3</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>
                        Supplementaire
                    </td>
                    <td>4</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>
                        Supplementaire
                    </td>
                    <td>4</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>
                        Surv Examen
                    </td>
                    <td>4</td>
                    <td>1</td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Surv Controls
                    </td>
                    <td>9</td>
                    <td>0</td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Cour Magistreaux
                    </td>
                    <td>4</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>
                        Tutorat
                    </td>
                    <td>10</td>
                    <td>1</td>
                    <td>0</td>
                </tr>
            </tbody>
        </table> --}}

        {{-- <p class="text-center text-5xl font-bold">The Teacher's Record : </p>
                            <div class="flex border-2 mt-5  justify-center items-start w-full">
                                <div class=" flex border-r-2 flex-col justify-center items-start w-full">
                                    <p class="text-2xl font-bold w-full   bg-gray-300">Cours</p>
                                    <p class="text-xl">Dones : 16</p>
                                    <p class="text-xl">Abented : 1</p>
                                    <p class="text-xl">Caught up :  0</p>
                                </div>
                                <div class=" flex border-r-2 flex-col justify-center items-start w-full">
                                    <p class="text-2xl font-bold w-full  bg-gray-300">Tds</p>
                                    <p class="text-xl">Dones : 23</p>
                                    <p class="text-xl">Absented :  2</p>
                                    <p class="text-xl">Caught up :  1</p>
                                </div>
                                <div class=" flex border-r-2 flex-col justify-center items-start w-full">
                                    <p class="text-2xl font-bold w-full  bg-gray-300 ">Tps</p>
                                    <p class="text-xl">Dones :  0</p>
                                    <p class="text-xl">Absented :  0</p>
                                    <p class="text-xl">Caught up : 0</p>
                                </div>
                                <div class=" flex border-r-2 flex-col justify-center items-start w-full">
                                    <p class="text-2xl font-bold w-full  bg-gray-300">Additionals</p>
                                    <p class="text-xl">Dones :6 </p>
                                    <p class="text-xl">Absented : 0 </p>
                                </div>
                                <div class=" flex border-r-2 flex-col justify-center items-start w-full">
                                    <p class="text-2xl font-bold w-full  bg-gray-300">Exam Monitoring</p>
                                    <p class="text-xl">Dones : 4</p>
                                    <p class="text-xl">Absented :  0</p>
                                </div>
                                 <div class=" flex border-r-2 flex-col justify-center items-start w-full">
                                    <p class="text-2xl font-bold w-full  bg-gray-300">Control Monitoring</p>
                                    <p class="text-xl">Dones : 8</p>
                                    <p class="text-xl">Absented :  0</p>
                                </div>
                            </div> --}}
