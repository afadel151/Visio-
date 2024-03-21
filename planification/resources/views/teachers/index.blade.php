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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css" rel="stylesheet">
    
    
@endpush
@section('content')
    <div class="container flex justify-center items-center flex-col w-[100%]  mt-20">
        <div>
            <p class="text-7xl font-weight-bold  " style="font-weight: 700">All Teachers </p>
        </div>
        <div class="card p-4 mt-20 w-[80%] mb-20">
            <div class="card-header text-3xl text-center ">Manage Teachers</div>
            <div class="card-body w-[100%]">
                {{-- {!! $dataTab->table() !!} --}}
                <table class="table table-bordered w-[100%] display" id="teachers">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Teacher Name</th>
                            <th>Teacher Grade</th>
                            <th>Department </th>
                            <th>Action</th>
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
    @endsection
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
        @vite('resources/js/app.js')
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
                        {
                            data: 'department.department',
                            name: 'department_id',
                            searchable: false,
                            orderable: true
                        },
                        {
                            data: 'action',
                            name: 'action'
                        }

                    ],
                    drawCallback: function(settings) {
                            $('#teachers tbody tr td').addClass('hover:bg-slate-100 hover:scale-105  duration-500');
                        }
                });

                table.on('click', 'tbody tr', function() {
                    let data = table.row(this).data();
                    let teacherId = data.id;
                    window.location.href = "{{ route('teachers.show', ':id') }}".replace(':id', teacherId);
                });

            });
        </script>
         
    @endpush
