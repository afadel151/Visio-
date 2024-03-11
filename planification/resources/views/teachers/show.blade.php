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
    <div class="container flex justify-center items-center flex-col w-[100%]  mt-20">
        <div class="flex flex-col justify-center items-center space-y-4 ">
            <p class="text-7xl font-weight-bold   " style="font-weight: 700">Teacher :
                <span class="text-red-500">{{ $teacher->teacher_name }}</span>
            </p>
            <p class="text-4xl font-weight-bold  "> category : <span class="text-green-500"> {{ $teacher->teacher_type }}</span></p>
            <p class="text-4xl font-weight-bold  "> grade : <span class="text-blue-500"> {{ $teacher->teacher_grade }}</span></p>
        </div>
        {{-- {{ $teacher }} --}}
        {{-- {{ $teacher }} --}}
        <div class="card mt-20 mb-20 w-[80%]">
            <div class="card-header text-center text-3xl font-bold">Modules</div>
            <div class="card-body">
                {{-- {!! $dataTable->table() !!} --}}
                <table class="table table-bordered display  table-fixed text-center" id="modules">
                    <thead class="text-center">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Module</th>
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
                                <td>{{ $module->semester }}</td>
                                <td>{{ $module->department }}</td>
                                <td class="" >
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
                                    <a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
                            data: 'semester',
                            name: 'semester',
                        },
                        //   {data: 'teacher_grade', name: 'teacher_grade', orderable: true, searchable: true},
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
                                var seances = '';
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
                                return seances;
                            }
                        },
                        {
                            data: 'action',
                            name: 'action'
                        },
                    ]
                });

            });
        </script>
    @endpush
