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
            <div class="card-header ">Manage Occasions</div>
            <div class="card-body">

                <table class="table table-bordered display" id="occasions">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>Occasion</th>
                            <th>Students</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                </table>
            </div>
            <div class="w-full flex justify-end">
                <button class="btn m-4" onclick="my_modal_1.showModal()">Add Holiday</button>
                <dialog id="my_modal_1" class="modal">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg">Hello!</h3>
                        <div class="flex flex-col mt-10 justify-center items-stretch w-full">
                            <form class="flex flex-col gap-3 justify-center items-stretch" id="holiday-form">
                                <div class="flex items-center justify-between  w-full">
                                    <label class="font-bold w-36">Students :</label>
                                   <select name="students[]" id="students" multiple class="select  w-full select-bordered"  style="width: 100%" multiselect-search="true">
                                    @foreach ($battalions as $battalion)
                                        <option value="B_{{$battalion->id}}">Battalion : {{$battalion->battalion}}</option>
                                        @foreach ($battalion->companies as $company)
                                            <option value="C_{{$company->id}}" data-parent="B_{{$battalion->id}}">Company : {{$company->company}} ({{$company->sector}})</option>
                                            @foreach($company->sections as $section) 
                                                <option value="S_{{$section->id}}" data-parent="C_{{$company->id}}">Section : {{$section->section}}</option>
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                  </select>
                                </div>
                                <div class="flex items-center justify-between   w-full">
                                    <label class="font-bold w-36">
                                        Occasion :
                                    </label>
                                    <input id="occasion_name" class="input w-full input-bordered" type="text" name="occasion_name">
                                </div>
                                <div class="flex items-center justify-between  w-full">
                                    <label class="font-bold w-36">Date :</label>
                                    <input id="occasion_date" class="input w-full input-bordered"  type="date" name="occasion_date">
                                </div>
                               
                                <div class="flex items-center justify-between  w-full">
                                    <label class="font-bold w-36">Times :</label>
                                    <select name="timings[]" id="timings" multiple class="select  w-full select-bordered"  style="width: 100%" multiselect-search="true">
                                        @foreach ($timings as $timing)
                                            <option value="{{$timing->id}}"> {{$timing->session_start}}->{{$timing->session_finish}} </option>
                                        @endforeach
                                    </select>
                                </div>` 
                            </form>
                        </div>
                        <div class="modal-action mt-5">
                            <form method="dialog">
                                <button class="btn btn-primary mr-2" id="occasion-add">Add</button>
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
                var table = $('#occasions').DataTable({
                   
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('occasions.index') }}",
                    order: [
                        [1, 'asc']
                    ],
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'occasion_date',
                            name: 'occasion_date',
                            searchable: true
                        },
                        {
                            data: 'occasion',
                            name: 'occasion',
                            searchable: true
                        },
                        {
                            data: 'occasionable',
                            name: 'occasionable' 
                        },
                            {
                                data: 'timings',
                                name: 'timings' 
                            },
                        {
                            data: 'action',
                            name: 'action'
                        }
                    ]
                })
            });
        </script>
        @vite('resources/js/multiselect-dropdown.js')
    @endpush
