@extends('default')
@push('header')
    @livewireStyles
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('content')
    <div class="container flex justify-center items-center flex-col w-[100%]  mt-20">
        <div>
            <p class="text-7xl font-weight-bold" style="font-weight: 700">All modules </p>
        </div>
        <div class="card mt-10 mb-10 w-[90%]">
            <div class="card-header ">Manage modules</div>
            <div class="card-body">
                {{-- {!! $dataTable->table() !!} --}}
                <table class="table table-bordered display" id="modules">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Module</th>
                            <th>battalion</th>
                            <th>Sector</th>
                            <th>semester </th>
                            <th>departement </th>
                            <th>Vol.Horaire</th>
                            <th>Cours</th>
                            <th>Tds</th>
                            <th>Tps</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($modules as $module)
                            <tr>
                                <td>{{ $module->id }}</td>
                                <td>{{ $module->module }}</td>
                                <td>{{ $module->battalion }}</td>
                                <td>{{ $module->module_sector }}</td>
                                <td>{{ $module->semester }}</td>
                                <td>{{ $module->department->department }}</td>
                                <td>
                                    <a href="{{ route('modules.show', ['id' => $module->id]) }}"
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(function() {
                var table = $('#modules').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('modules.index') }}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'module',
                            name: 'module',
                            searchable: true
                        },
                        {
                            data: 'battalion',
                            name: 'battalion'
                        },
                        {
                            data: 'module_sector',
                            name: 'module_sector'
                        },
                        {
                            data: 'semester',
                            name: 'semester'
                        },
                        //   {data: 'teacher_grade', name: 'teacher_grade', orderable: true, searchable: true},
                        {
                            data: 'department.department',
                            name: 'department_id',
                            searchable: false,
                            orderable: true
                        },
                        {
                            data:null,
                            render: function(data,type,row) { return (data["nb_cours"] + data["nb_tds"] + data["nb_tps"])}
                        },
                        {
                            data:'nb_cours',
                            name:'nb_cours'
                        },
                        {
                            data:'nb_tds',
                            name:'nb_tds'
                        },
                        {
                            data:'nb_tps',
                            name:'nb_tps'
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
