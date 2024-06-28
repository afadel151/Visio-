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
        <a href="{{ route('modules.index') }}">
            <button
                class="absolute top-5 left-5 bg-slate-500 text-gray-100 border-slate-500 border-2 hover:text-gray-950 rounded-3xl text-xl hover:bg-slate-50 h-20 w-40">
                < All modules</button>
        </a>


        <div class="flex flex-col justify-center items-center space-y-4 ">
            <p class="text-7xl font-weight-bold   " style="font-weight: 700">Module :
                <span class="text-red-500">{{ $module->module }}</span>
            </p>
            <p class="text-4xl font-weight-bold  "> category : <span class="text-green-500">
                    {{ $module->department->department }}</span></p>
            <p class="text-4xl font-weight-bold  "> Semester : <span class="text-blue-500">
                    {{ $module->semester }}</span></p>
            <p class="text-4xl font-weight-bold  "> Battalion : <span class="text-blue-500">
                    {{ $module->battalion }}</span></p>
            <p class="text-4xl font-weight-bold  "> Sector : <span class="text-blue-500">
                    {{ $module->module_sector }}</span></p>
        </div>
        
        <div class="card mt-20 mb-20 w-[100%]">
            <div class="card-header text-center text-3xl font-bold">Teachers</div>
            <div class="card-body relative">

                <table class="table display  table-fixed text-center" id="teachers">
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

                </table>
            </div>
        </div>
        <div class="card mt-20 mb-20 w-[100%]">
            <div class="card-header text-center text-3xl font-bold">Absences</div>
            <div class="card-body relative">

                <table class="table display  table-fixed text-center" id="absences">
                    <thead class="text-center">
                        <tr>
                            
                            <th class="text-center">schoolyear</th>
                            <th class="text-center">teacher(s)</th>
                            <th class="text-center">Session type</th>
                            <th class="text-center">Students</th>
                            <th class="text-center">Room</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">timing</th>
                            <th class="text-center">Caught Up</th>
                        </tr>
                    </thead>

                </table>
            </div>
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
    <script>
        $(function() {
            var ModuleID = {{ $module->id }}
            var url = "{{ route('modules.show', ':moduleID') }}";
            url = url.replace(':moduleID', ModuleID);
            var table = $('#teachers').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                searching: true,
                ajax: url,

                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'teacher',
                        name: 'teacher',
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
            var ModuleID = {{ $module->id }}
            var url = "{{ route('modules.module_absences', ':moduleID') }}";
            url = url.replace(':moduleID', ModuleID);
            var table = $('#absences').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                searching: true,
                ajax: url,

                columns: [
                    {
                        data: 'schoolyear',
                        name: 'schoolyear'
                    }, 
                {
                        data: 'teacher(s)',
                        name: 'teacher(s)'
                    },
                    {
                        data: 'session_type',
                        name: 'session_type'
                    },
                    {
                        data: 'students',
                        name: 'students'
                    },
                    {
                        data: 'room.room',
                        name: 'room',
                        searchable: true,
                    },
                    {
                        data: 'session_date',
                        name: 'session_date',
                    },
                    {
                        data: 'null',
                        render: function(data, type, row){
                            return row.timing.session_start + '->' + row.timing.session_finish;
                        }
                    },
                    {
                        data:'caughtup',
                        name: 'caughtup'
                    }
                ],

            });

        });
    </script>
@endpush
{{-- 
<tr>
    <th class="text-center">Teacher</th>
    <th class="text-center">Session type</th>
    <th class="text-center">Room</th>
    <th class="text-center">Date</th>
    <th class="text-center">timing</th>
    <th class="text-center">Reason</th>
</tr> --}}