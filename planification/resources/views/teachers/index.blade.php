{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head> --}}

{{-- <body>
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style> --}}
@extends('default')
@push('header')
    @livewireStyles
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('content')
    <div class="container flex justify-center items-center flex-col w-[100%]  mt-20">
        <div>
            <p class="text-7xl font-weight-bold  " style="font-weight: 700">All Teachers </p>
        </div>
        <div class="card mt-20 mb-20">
            <div class="card-header ">Manage Teachers</div>
            <div class="card-body">
                {{-- {!! $dataTable->table() !!} --}}
                <table class="table table-bordered display" id="teachers">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Teacher Name</th>
                            <th>Teacher Grade</th>
                            <th>Department </th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{ $teacher->id }}</td>
                                <td>{{ $teacher->teacher_name }}</td>
                                <td>{{ $teacher->teacher_type }}</td>
                                <td>{{ $teacher->department->department }}</td>
                                <td>
                                    <a href="{{ route('teachers.show', ['id' => $teacher->id]) }}"
                                        class="edit btn btn-info btn-sm rounded-l">View</a>
                                    <a href="javascript:void(0)" class="edit btn btn-primary btn-sm rounded-lg">Edit</a>
                                    <a href="javascript:void(0)" class="edit btn btn-danger btn-sm rounded-lg">Delete</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <div class="card">
            <div class="card-header">Manage Rooms</div>
            <div class="card-body">
                <table class="table table-bordered display" id="rooms">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Room</th>
                            <th>Capacity exams</th>
                            <th>Capacity teaching</th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $room)
                            <tr>
                                <td>{{ $room->id }}</td>
                                <td>{{ $room->room }}</td>
                                <td>{{ $room->capacity_exams }}</td>
                                <td>{{ $room->capacity_exams }}</td>
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
       </div>   --}}
    @endsection
    @push('scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        @livewireScripts
        <script>
            $(function() {
                var table = $('#teachers').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('teachers.index') }}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'teacher_name',
                            name: 'teacher_name',
                            searchable: true
                        },
                        {
                            data: 'teacher_type',
                            name: 'teacher_type'
                        },
                        //   {data: 'teacher_grade', name: 'teacher_grade', orderable: true, searchable: true},
                        {
                            data: 'department.department',
                            name: 'department_id',
                            searchable: false,
                            orderable: true
                        },
                        {
                            data: 'action',
                            name: 'action'
                        },
                    ]
                });
                var table = $('#rooms').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('rooms.index') }}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'room',
                            name: 'room',
                            searchable: true
                        },
                        {
                            data: 'capacity_exams',
                            name: 'capacity_exams'
                        },
                        //   {data: 'teacher_grade', name: 'teacher_grade', orderable: true, searchable: true},
                        {
                            data: 'capacity_teaching',
                            name: 'capacity_teaching',
                            searchable: false,
                            orderable: true
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
