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
@section('content')
    <div class="container flex justify-center items-stretch flex-col w-[100%] h-screen">
        <div>
            <p class="text-7xl font-weight-bold mb-20 " style="font-weight: 700">All Teachers </p>
        </div>
        <div class="card">
            <div class="card-header">Manage Teachers</div>
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
        <div class="card">
            <div class="card-header">Manage Rooms</div>
            <div class="card-body">
                {{-- {!! $dataTable->table() !!} --}}
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
       </div>  

@endsection
@push('scripts')

{{-- {!! $dataTable->scripts() !!} --}}
    
@endpush



{{-- </body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>

{{ $dataTable->scripts(attributes: ['type' => 'module']) }}

</html> --}}
