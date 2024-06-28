@extends('default')
@push('header')
@endpush

@section('content')
    <div class="w-full flex flex-col items-center justify-start h-full gap-10 py-32">
        <div class="text-4xl text-center " id="props">
            <p>Battalion : {{ $week->battalion->battalion }}</p>
            <p>Week : {{ $week->week_type }}</p>
            <p> from : {{ $week->global_week->start_week_date }} To {{ $week->global_week->end_week_date }} </p>
        </div>
        <div class="w-[80%] space-y-4 relative">
            <p class="text-center text-3xl font-bold">Controls</p>
            <table class="table w-full   text-center table-zebra border-2 ">
                <thead class="text-xl font-bold bg-base-200 ">
                    <th>
                        Module
                    </th>
                    <th>
                        Company
                    </th>
                    <th>
                        Monitor
                    </th>
                    <th>
                        control Date
                    </th>
                    <th>
                        Timing
                    </th>
                    <th>
                        Room
                    </th>
                    <th>
                        Action
                    </th>
                </thead>
                <tbody>
                    @foreach ($controls as $control)
                        <tr>
                            <td>
                                {{ $control->module->module }}
                            </td>
                            <td>
                                Company : {{ $control->company->company }}
                            </td>
                            <td>
                                {{ $control->teacher->teacher_name }}
                            </td>
                            <td>
                                {{ $control->control_date }}
                            </td>
                            <td>
                                {{ $control->timing->session_start }} -> {{ $control->timing->session_finish }}
                            </td>
                            <td>
                                {{ $control->room->room }}
                            </td>
                            <td class="flex justify-center items-center">
                                <button class="btn btn-warning " onclick="OpenModal(this)">Delete</button>
                                <dialog id="my_modal_1" class="modal">
                                    <div class="modal-box">
                                        <h3 class="font-bold text-lg">Hello!</h3>
                                        <p class="py-4">Do you really want to delete this Control</p>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <a href="{{ route('controls.destroy', ['id' => $control->id]) }}"
                                                    class="btn btn-error">Delete</a>
                                            </form>
                                            <form method="dialog">
                                                <button class="btn">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button id="show-control-insert" class="absolute -bottom-20 right-3 btn btn-info">insert</button>
        </div>
        <div id="target"
            class="p-4 border-[3px]  w-[50%] bg-slate-50 rounded-xl flex flex-col justify-center items-center gap-6"
            style="display: none;">

            <div class="flex flex-col  justify-center items-center space-y-4" id="get-date-time">
                <form id="control-form" class="flex flex-col justify-center items-center gap-10">
                    <input type="hidden" id="week_id" name="week_id" value="{{ $week->id }}">
                    <div class="flex flex-col justify-center items-center space-y-8 ">
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-2xl">Select Date</p>
                            <input type="date" name="session_date" id="control_date"
                                class="w-[300px] input input-bordered">
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-2xl">Select Company</p>
                            <select name="company_id" id="company_id" class="w-[300px] select select-bordered">
                                @foreach ($week->battalion->companies as $company)
                                    <option value="{{ $company->id }}">Company : {{ $company->company }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-2xl">Select timing</p>
                            <select name="timing_id" id="timing_id" class="w-[300px] select select-bordered">
                                @foreach ($timings as $timing)
                                    <option value="{{ $timing->id }}"> {{ $timing->session_start }} ->
                                        {{ $timing->session_finish }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-2xl">Select Module</p>
                            <select name="module_id" id="module_id" class="w-[300px] select select-bordered">
                                @foreach ($modules as $module)
                                    <option value="{{ $module->id }}"> {{ $module->module }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-2xl">Select Teacher</p>
                            <select name="teacher_id" id="teacher_id" class="w-[300px] select select-bordered">
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}"> {{ $teacher->teacher_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button id="control-search-rooms" onclick="SearchRooms(this)" class="btn btn-info">Search
                        for Rooms</button>

                </form>
                <div id="insert-control"
                    class="w-[400px]  focus:border-blue-400 flex  flex-col justify-center items-center space-y-4 focus:border-2 rounded-xl ">
                </div>
            </div>

        </div>
    @endsection


    @push('scripts')
        <script>
            function OpenModal(button) {
                const modal = button.nextElementSibling;
                modal.showModal();
            }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#show-control-insert').click(function() {
                    $('#target').slideToggle();
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
            async function SearchRooms(button) {
                event.preventDefault();
                const form = button.parentNode;
                const week_id = form.querySelector('#week_id').value;
                const date = form.querySelector('#control_date').value;
                const companyId = form.querySelector('#company_id').value;
                const timingId = form.querySelector('#timing_id').value;
                const moduleId = form.querySelector('#module_id').value;
                const teacherId = form.querySelector('#teacher_id').value;
                let response = await axios.get('http://127.0.0.1:8000/controls/available_rooms', {
                    params: {
                        week_id: week_id,
                        control_date: date,
                        company_id: company_id,
                        timing_id: timing_id
                    }
                });
                console.log(response);
                const Target = document.querySelector('#insert-control');
                console.log(Target);
                const Oldselect = document.querySelector("#room_select");
                if (Oldselect) {
                    Target.removeChild(Oldselect);
                }
                const OldButton = document.querySelector("#add_control");
                if (OldButton) {
                    Target.removeChild(OldButton);
                }
                const newSelect = document.createElement('select');
                newSelect.name = "room_id";
                newSelect.id = "room_select";
                newSelect.classList.add("select", "select-bordered");
                const Rooms = response.data;
                for (let i = 0; i < Rooms.length; i++) {
                    var newOption = document.createElement('option');
                    newOption.text = Rooms[i].room;
                    newOption.value = Rooms[i].id;
                    newSelect.add(newOption);
                }
                Target.appendChild(newSelect);
                const newbutton = document.createElement('button');
                newbutton.classList.add("btn", "btn-info");
                newbutton.id = "add_control";
                newbutton.innerText = "Add";
                Target.appendChild(newbutton);
                PostControl(week_id,date,companyId,newSelect,timingId,moduleId,teacherId);
            }
            async function PostControl(week_id,date,companyId,newSelect,timingId,moduleId,teacherId)
            {
                const Tbutton = document.querySelector("#add_control");
                Tbutton.addEventListener("click", async function() {
                    event.preventDefault();
                    const RoomId = newSelect.value;
                    console.log(teacherId);
                    try {

                        let response = await axios.get('http://127.0.0.1:8000/controls/store', {
                            params: {
                                week_id: week_id,
                                control_date: date,
                                company_id: companyId,
                                timing_id: timingId,
                                room_id: RoomId,
                                module_id: moduleId,
                                teacher_id: teacherId,
                            }
                        });
                        console.log(response);
                        location.reload();

                    } catch (error) {
                        console.log(error);
                    }
                });
            }
        </script>
    @endpush
