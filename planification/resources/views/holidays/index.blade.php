@extends('default')
@push('header')
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush


@section('content')
    <div class="container flex justify-center items-center flex-col w-[100%]  mt-20">
        <div>
            <p class="text-7xl font-weight-bold" style="font-weight: 700">All Holidays of This Year</p>
        </div>
        <div class="card mt-10 mb-10 w-[90%]">
            <div class="card-header ">Manage Holidays</div>
            <div class="card-body">

                <table class="table table-bordered display" id="holidays">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>Holiday</th>
                            <th>Schoolyear</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                </table>
            </div>
            <div class="w-full flex justify-end">
                <button class="btn m-4" onclick="my_modal_1.showModal()">Add Holiday</button>
                <dialog id="my_modal_1" class="modal">
                    <div class="modal-box w-[600px] h-[400px]">
                        <h3 class="font-bold text-lg">Hello!</h3>
                        <div class="flex flex-col mt-10 justify-center items-stretch w-full">
                            <form class="flex flex-col gap-3 justify-center items-stretch" id="holiday-form">
                                <div class="flex items-center justify-between   w-full">
                                    <label class="font-bold w-36">
                                        Holiday :
                                    </label>
                                    <input class="input w-full input-bordered" type="text" name="holiday_name">
                                </div>
                                <div class="flex items-center justify-between  w-full">
                                    <label class="font-bold w-36">Date :</label>
                                    <input class="input w-full input-bordered" type="date" name="holiday_date">
                                </div>
                                <div class="flex items-center justify-between  w-full">
                                    <label class="font-bold w-36">Schoolyear :</label>
                                    <select name="schoolyear_id" class="select select-bordered w-full">
                                        <option value="{{ $current_schoolyear->id }}" selected>Current Schoolyear</option>
                                        @foreach ($schoolyears as $schoolyear)
                                            <option value="{{ $schoolyear->id }}">{{ $schoolyear->schoolyear }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-action mt-5">
                            <form method="dialog">
                                <button class="btn btn-primary mr-2" id="holiday-add">Add</button>
                                <button class="btn">Close</button>
                            </form>
                        </div>
                    </div>
                </dialog>
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
                var table = $('#holidays').DataTable({
                   
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('holidays.index') }}",
                    order: [
                        [1, 'asc']
                    ],
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'holiday_date',
                            name: 'holiday_date',
                            searchable: true
                        },
                        {
                            data: 'holiday_name',
                            name: 'holiday_name',
                            searchable: true
                        },
                        {
                            data: 'schoolyear.schoolyear',
                            name: 'schoolyear_schoolyear'
                        },
                        {
                            data: 'action',
                            name: 'action'
                        }
                    ]
                })
            });
        </script>
        @vite('resources/js/holiday.js')
    @endpush
