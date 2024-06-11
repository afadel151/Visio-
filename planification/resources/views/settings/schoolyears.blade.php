@extends('settings.index')
@push('settings.styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css" rel="stylesheet">
@endpush
@section('settings')
    <div class="flex flex-col items-center justify-center w-[100%] overflow-y-scroll">


        <div class="flex flex-col justify-center items-center w-[80%]">
            {{-- schoolyars datatable --}}
            <p class="text-6xl font-bold mt-20">ALL SCHOOLYEARS</p>
            <div class="card mt-4  rounded-xl  mb-20  w-[100%]">

                <div class="card-header ">Manage School Years</div>
                <div class="card-body">
                    {{-- {!! $dataTable->table() !!} --}}
                    <table class="table table-bordered display" id="schoolyears">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>School year</th>
                                <th>Start Date</th>
                                <th>Time per session</th>
                                <th>Number of weeks</th>
                                <th>Action </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="h-[300px] w-[60%] border-2 rounded-2xl flex flex-col justify-center items-center">
            {{-- Add new school year  --}}
            <p class="text-2xl font-bold ">Add a New School year</p>
            <form action="{{ route('schoolyears.store') }}" enctype="multipart/form-data" method="POST"
                class="flex flex-col justify-around  items-center space-y-4 mt-4">
                @csrf
                <div>
                    <input type="text" name="schoolyear" placeholder="2XXX/2XXX"
                        class="mt-2 block w-full placeholder-gray-500/70 rounded-lg border border-gray-200 bg-white px-3 py-2.5 text-slate-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 " />

                </div>
                <div>
                    <input type="date" name="schoolyear_start_date" placeholder="John Doe"
                        class="block  mt-2 w-full placeholder-gray-400/70 :placeholder-gray-500 rounded-lg border border-gray-200 bg-white px-3 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 " />
                </div>
                <button type="submit"
                    class="w-20 h-10 rounded-xl bg-indigo-500 text-slate-100 hover:bg-slate-200">submit</button>
            </form>
        </div>
    </div>
@endsection
@push('settings.scripts')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>ب
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
                        data: 'time_per_session',
                        name: 'time_per_session',
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
