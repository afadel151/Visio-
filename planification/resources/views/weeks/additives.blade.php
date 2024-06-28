@extends('default')

@push('header')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css" rel="stylesheet">
@endpush

@section('content')
    <div class="container flex justify-center items-center space-y-3 flex-col w-[100%]  mt-20">
        <div>

            <p class="text-7xl font-weight-bold flex items-center justify-center  " style="font-weight: 700">Additives </p>
            <p class="text-4xl">{{ $week->global_week->start_week_date }} -> {{ $week->global_week->end_week_date }} </p>
        </div>
        <div class="card mt-20 w-[80%] mb-20">
            <div class="card-header ">Manage Teachers</div>
            <div class="card-body w-[100%]">
                {{-- {!! $dataTab->table() !!} --}}
                <table class="table table-bordered w-[100%] display" id="additives">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Additive Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($additives as $additive)
                            <tr>
                                <td>{{ $additive->id }}</td>
                                <td>{{ $additive->additive_number }}</td>

                                <td>
                                    <a href="{{ route('additives.show', ['id' => $additive->id]) }}"
                                        class="edit btn btn-info btn-sm rounded-l">View</a>
                                    <a href="{{ route('additives.delete', ['id' => $additive->id]) }}"
                                        class="edit btn btn-primary btn-sm rounded-lg">Edit</a>
                                    {{-- <a href="{{ route('additives.delete',['id'=>$additive->id])}}" class="edit btn btn-danger btn-sm rounded-lg">Delete</a> --}}

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="container flex justify-center items-center flex-col w-[40%] h-44 mb-20  mt-4 border-2 rounded-xl">
            <form action="{{ route('weeks.additives_add', ['id' => $week->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <button
                    class="p-2 btn hover:bg-slate-50 hover:text-gray-900 hover:border-2  bg-gray-700  text-slate-50 rounded-2xl w-20">Add</button>
            </form>


        </div>

    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>


    @vite('resources/js/app.js')
    <script>
        $(function() {
            var table = $('#additives').DataTable({

                processing: true,
                serverSide: true,
                buttons: [
                    'copy', 'excel', 'pdf' // Add buttons for copy, excel, and pdf export
                ],
                ajax: "{{ route('weeks.additives', $week->id) }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'additive_number',
                        name: 'additive_number',
                        // searchable: true
                    },

                    {
                        data: 'action',
                        name: 'action'
                    }

                ],
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                    }
                }

            });

            table.on('click', 'tbody tr', function() {
                let data = table.row(this).data();
                let additiveId = data.id;
                window.location.href = "{{ route('additives.show', ':id') }}".replace(':id', additiveId);
            });

        });
    </script>
@endpush
