@extends('default')
@push('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('content')
    <div class="flex flex-col items-center justify-center w-[100%] overflow-y-scroll">
        
        
        <div class="flex flex-col justify-center items-center w-[80%]">
            {{-- schoolyars datatable --}}
            <p class="text-6xl font-bold mt-20">ALL SCHOOLYEARS</p>
            <div class="card mt-4  rounded-xl  mb-20  w-[100%]">
                
                <div class="card-header ">Manage School Years</div>
                <div class="card-body">
                    <table class="table table-bordered display" id="schoolyears">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>School year</th>
                                <th>Start Date</th>
                                <th>Number of weeks</th>
                                <th>Absences</th>
                                <th>Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schoolyears as $schoolyear)
                                <tr>
                                    <td>{{ $schoolyear->id }}</td>
                                    <td>{{ $schoolyear->schoolyear }}</td>
                                    <td>{{ $schoolyear->schoolyear_start_date }}</td>
                                    <td>{{ $schoolyear->global_weeks }}</td>
                                    <td>
                                        <a href="{{ route('schoolyears.show', ['id' => $schoolyear->id]) }}"
                                            class="edit btn btn-info btn-sm rounded-l">View</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
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
        function customCount(obj) {
            if (Array.isArray(obj)) {
                // If obj is an array, return its length
                return obj.length;
            } else if (typeof obj === 'object' && obj !== null) {
                // If obj is an object, count the number of keys
                return Object.keys(obj).length;
            } else {
                // Otherwise, return 0 or handle other cases as needed
                return 0;
            }
        }
        $(function() {
            var table = $('#schoolyears').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('schoolyears.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'schoolyear',
                        name: 'schoolyear',
                        searchable: true,
                    },
                    {
                        data: 'schoolyear_start_date',
                        name: 'schoolyear_start_date'
                    },
                    {
                        data: 'global_weeks',
                        name: 'global_weeks',
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
