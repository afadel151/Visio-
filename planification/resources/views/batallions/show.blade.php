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
        <div class=" w-[80%]  flex flex-col justify-between mt-10 items-center p-20">

            <p class="text-6xl font-bold ">Schoolyear {{ $battalion->schoolyear->schoolyear }} </p>
            <p class="text-6xl font-bold ">Battalion {{ $battalion->battalion }} </p>
            <div class="card mt-4 rounded-2xl  z-0  mb-20  w-[80%]">
                <div class="card-header z-0 text-2xl ">Companies</div>
                <div class="card-body w-[100%] z-0">
                    <table class="z-0 display text-center " id="companies">
                        <thead>
                            <th class="text-center">Company</th>
                            <th class="text-center">Nb Sections</th>
                            <th class="text-center">Sector</th>
                            <th class="text-center">Default Room </th>
                            <th class="text-center">Action</th>
                        </thead>
                    </table>
                </div>
            </div>

            <div class="card w-[50%] h-[70%] p-4 mb-20 rounded-2xl">
                <div class="card-header bg-white text-center text-4xl z-0   ">Add Company</div>
                <form action="{{ route('battalions.store_companies', ['id' => $battalion->id]) }}"
                    class="flex space-y-3 justify-around h-[100%] items-center  flex-col">
                    @csrf
                    <div class="w-[50%]  rounded-xl flex flex-col justify-center p-2 items-center">
                        <label for="sc" class="text-xl ">Company Sector</label>
                        <select name="sector" id="sc" class="w-[100%] rounded-lg focus:border-2 focus:border-blue-400">
                            <option value="ST">ST</option>
                            <option value="MI">MI</option>
                        </select>
                    </div>
                    <div class="w-[50%]  rounded-xl flex flex-col justify-center p-2 items-center">
                        <label for="nb" class="text-xl ">Number of Sections</label>
                        <select name="nb_sections" id="nb" class="w-[100%] rounded-lg focus:border-2 focus:border-blue-400">
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="w-[50%]  rounded-xl flex flex-col justify-center p-2 items-center">
                        <label for="nb" class="text-xl ">Number of Sections</label>
                        <select name="default_room_id" id="nb" class="w-[100%] rounded-lg focus:border-2 focus:border-blue-400">
                            @foreach ($rooms as $room)
                                <option value="{{$room->id}}"> {{$room->room}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" value="Submit" class="h-10 w-40 rounded-xl bg-indigo-400 hover:border-2 hover:border-slate-900 hover:bg-slate-100 hover:scale-[1.2] duration-300 hover:text-gray-950 text-gray-950">
                </form>
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
                var url = "{{ route('battalions.companies', $battalion->id) }}";
                var table1 = $('#companies').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: url,
                    columns: [{
                            data: 'company',
                            name: 'company',
                            searchable: true,
                        },
                        {
                            data: 'sections',
                            name: 'sections'
                        },
                        {
                            data: 'sector',
                            name: 'sector'
                        },
                        {
                            data: 'default_room',
                            name: 'default_room'
                        },
                        {
                            data: 'action',
                            name: 'action'
                        }
                    ],
                });
            });
        </script>
    @endpush
