@extends('default')
@push('header')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
@endpush
@section('content')
    <div class="hidden" id="additive_id">{{ $additive->id }}</div>
    <div class="h-[100%] w-[100%] flex flex-col justify-start p-6 items-center">
        <div class="headers  font-bold flex flex-col justify-center space-y-2 items-center">
            <h1 class="text-4xl">Battalion : <span class="text-red-600"> {{ $battalion->battalion }}</span></h1>
            <h1 class="text-3xl">Week :{{ $week->week_type }} <span class="text-red-600">({{ $week->week_number }})</span>
            </h1>
            <h1 class="text-3xl">From <span class="text-red-600">{{ $week->global_week->start_week_date }}</span> to <span
                    class="text-red-600">{{ $week->global_week->end_week_date }}</span> </h1>
            <h1 class="text-2xl">Semester : <span class="text-red-600"> {{ $week->semester }}</span></h1>
            <h1 class="text-4xl">Additive Number : <span class="text-red-600">{{ $additive->additive_number }}</span></h1>
        </div>
        {{-- RECTIFICATIONS --}}
        <div class=" relative mt-20 sm:rounded-lg w-[80%] pb-10 px-4 flex flex-col space-y-4 justify-center items-center">
            <p class="font-bold text-5xl">Rectifications</p>
            <table class="w-[100%] table relative text-sm shadow-xl p-4  text-center rtl:text-right text-gray-500 ">
                <thead class="text-xs  text-gray-700 uppercase bg-gray-50  ">
                    <tr class="h-[60px]">
                        <th scope="col" class="px-6 py-3">Session date</th>
                        <th scope="col" class="px-6 py-3">Session Time</th>
                        <th scope="col" class="px-6 py-3">Teacher</th>
                        <th scope="col" class="px-6 py-3">Module</th>
                        <th scope="col" class="px-6 py-3">Room</th>
                        <th scope="col" class="px-6 py-3">Section/Company</th>
                        <th scope="col" class="px-6 py-3">Rectif Time</th>
                        <th scope="col" class="px-6 py-3">Rectif Room</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="rectifications-tbody">
                    @foreach ($rectifications as $rect)
                        @php
                            // $session = $rect->session->with('timing','teacher','module','room','class');
                            $session = $rect->session;
                        @endphp
                        <tr
                            class="odd:bg-white h-[60px] odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b ">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $session->session_date }}</th>
                            <td class="px-6 py-4">{{ $session->timing->session_start }} ->
                                {{ $session->timing->session_finish }}</td>
                            <td class="px-6 py-4"> {{ $session->teacher->teacher_name }}</td>
                            <td class="px-6 py-4">{{ $session->module->module }}</td>
                            <td class="px-6 py-4">{{ $session->room->room }}</td>
                            <td class="px-6 py-4">{{ $session->class() }}</td>
                            <td class="px-6 py-4">{{ $rect->timing->session_start }} ->
                                {{ $rect->timing->session_finish }}</td>
                            <td class="px-6 py-4">{{ $rect->room->room }}</td>
                            <td class="px-2 py-4 "><a href="#"
                                    class="delete-rectification font-medium text-red-600 hover:no-underline  dark:text-blue-500 p-4  duration-300  hover:bg-red-50 hover:rounded-xl h-[100%] w-[100%]">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button id="show-rect-insert"
                class="absolute -bottom-4 right-3 bg-indigo-500 rounded-xl w-40 h-12 text-slate-50 text-xl hover:bg-slate-200 hover:text-gray-900 hover:border-2 hover:border-slate-900 hover:scale-110 duration-300">insert</button>
        </div>


        <div id="parent-of-rectify"
            class="p-4 border-[3px]  w-[50%] bg-slate-50 rounded-xl flex flex-col justify-center items-center"
            style="display: none;">

            <div class="flex flex-col justify-center items-center space-y-4" id="get-date-time">
                <form action="" id="select-rectified-session-form">
                    <input type="hidden" id="week_id" name="week_id" value="{{ $week->id }}">
                    <div class="flex space-x-3 ">
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-2xl">Select Date</p>
                            <input type="date" name="session_date" id="rectify-date" class="input input-bordered">
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-2xl">Select Time</p>
                            <select name="timing_id" id="" class="input input-bordered">
                                @foreach ($timings as $timing)
                                    <option value="{{ $timing->id }}">{{ $timing->session_start }} ->
                                        {{ $timing->session_finish }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
                <button id="rectification-search-session"
                    class="bg-indigo-500 rounded-xl w-40 h-12 text-slate-50 text-xl hover:bg-slate-200 hover:text-gray-900 hover:border-2 hover:border-slate-900 hover:scale-110 duration-300">Search</button>
            </div>
            <div id="insert-rectification"
                class="w-[400px]  focus:border-blue-400 flex  flex-col justify-center items-center space-y-4 focus:border-2 rounded-xl ">
            </div>
        </div>
        {{-- END OF RECTIFICATIONS --}}
        {{-- CATCHUP ABSENCES --}}
        <div class=" relative mt-20 sm:rounded-lg w-[80%] pb-10 px-4 flex flex-col space-y-4 justify-center items-center">
            <p class="font-bold text-5xl">Catch up Absences</p>
            <table class="w-[100%] table relative text-sm shadow-xl p-4  text-center rtl:text-right text-gray-500 ">
                <thead class="text-xs  text-gray-700 uppercase bg-gray-50  ">
                    <tr class="h-[60px]">
                        <th scope="col" class="px-6 py-3">Session date</th>
                        <th scope="col" class="px-6 py-3">Session Time</th>
                        <th scope="col" class="px-6 py-3">Teacher</th>
                        <th scope="col" class="px-6 py-3">Module</th>
                        <th scope="col" class="px-6 py-3">Section/Company</th>
                        <th scope="col" class="px-6 py-3">catch up Time</th>
                        <th scope="col" class="px-6 py-3">Catch up Room</th>
                        <th scope="col" class="px-6 py-3">Catch up Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="rectifications-tbody">
                    @foreach ($catchups as $catchup)
                        @php
                            $session = $catchup->session;
                        @endphp
                        @if ($session)
                            <tr class="odd:bg-white h-[60px] border-b ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{ $session->session_date }}</th>
                                <td class="px-6 py-4">{{ $session->timing->session_start }} ->
                                    {{ $session->timing->session_finish }}</td>
                                <td class="px-6 py-4"> {{ $session->teacher->teacher_name }}</td>
                                <td class="px-6 py-4">{{ $session->module->module }}</td>
                                <td class="px-6 py-4">{{ $session->class() }}</td>
                                <td class="px-6 py-4">{{ $catchup->timing->session_start }} ->
                                    {{ $catchup->timing->session_finish }}</td>
                                <td class="px-6 py-4">{{ $catchup->room->room }}</td>
                                <td class="px-6 py-4">{{ $catchup->catchup_date }}</td>
                                <td class="px-2 py-4 "><a href="#"
                                        class="delete-rectification font-medium text-red-600 hover:no-underline  dark:text-blue-500 p-4  duration-300  hover:bg-red-50 hover:rounded-xl h-[100%] w-[100%]">Delete</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <button id="show-catchup-insert"
                class="absolute -bottom-4 right-3 bg-indigo-500 rounded-xl w-40 h-12 text-slate-50 text-xl hover:bg-slate-200 hover:text-gray-900 hover:border-2 hover:border-slate-900 hover:scale-110 duration-300">insert</button>
        </div>
        <div id="parent-of-catchup"
            class="p-4 border-[3px]  w-[50%] bg-slate-50 rounded-xl flex flex-col justify-center items-center"
            style="display: none;">

            <div class="flex flex-col justify-center items-center space-y-4" id="get-date-time">
                <form action="" id="select-absented-session-form">
                    <input type="hidden" id="week_id" name="week_id" value="{{ $week->id }}">
                    <div class="flex space-x-3 ">

                        <div class="flex flex-col justify-center items-center">
                            <p class="text-2xl">Select Teacher</p>
                            <select name="teacher_id" id="select_teacher_to_catchup" class="input w-52 input-bordered">
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
                <button id="catch-search-absence"
                    class="bg-indigo-500 rounded-xl w-40 h-12 text-slate-50 text-xl hover:bg-slate-200 hover:text-gray-900 hover:border-2 hover:border-slate-900 hover:scale-110 duration-300">Search</button>
                <div id="insert-catchup"
                    class="w-[400px]  focus:border-blue-400 flex  flex-col justify-center items-center space-y-4 focus:border-2 rounded-xl ">
                </div>
            </div>

        </div>
        <div class=" relative mt-20 sm:rounded-lg w-[80%] pb-10 px-4 flex flex-col space-y-4 justify-center items-center">
            <p class="font-bold text-5xl">Additionals</p>
            <table class="w-[100%] table relative text-sm shadow-xl p-4  text-center rtl:text-right text-gray-500 ">
                <thead class="text-xs  text-gray-700 uppercase bg-gray-50  ">
                    <tr class="h-[60px]">
                        <th scope="col" class="px-6 py-3">Additional date</th>
                        <th scope="col" class="px-6 py-3">Additional Time</th>
                        <th scope="col" class="px-6 py-3">Teacher</th>
                        <th scope="col" class="px-6 py-3">Module</th>
                        <th scope="col" class="px-6 py-3">Room</th>
                        <th scope="col" class="px-6 py-3">Sections</th>
                        <th scope="col" class="px-6 py-3">Companies</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="rectifications-tbody">
                    @foreach ($additionals as $additional)
                        <tr
                            class="odd:bg-white h-[60px] odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b ">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $additional->additional_date }}</th>
                            <td class="px-6 py-4">{{ $additional->timing->session_start }} ->
                                {{ $additional->timing->session_finish }}</td>
                            <td class="px-6 py-4"> {{ $additional->teacher->teacher_name }}</td>
                            <td class="px-6 py-4">{{ $additional->module->module }}</td>
                            <td class="px-6 py-4">{{ $additional->room->room }}</td>
                            <td class="px-6 py-4">

                                /@foreach ($additional->sections as $section)
                                    {{ $section->section }}/
                                @endforeach

                            </td>
                            <td class="px-6 py-4">
                                /@foreach ($additional->companies as $company)
                                    {{ $company->company }}/
                                @endforeach
                            </td>
                            <td class="px-2 py-4 "><a href="#"
                                    class="delete-rectification font-medium text-red-600 hover:no-underline  dark:text-blue-500 p-4  duration-300  hover:bg-red-50 hover:rounded-xl h-[100%] w-[100%]">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button id="show-additional-insert"
                class="absolute -bottom-4 right-3 bg-indigo-500 rounded-xl w-40 h-12 text-slate-50 text-xl hover:bg-slate-200 hover:text-gray-900 hover:border-2 hover:border-slate-900 hover:scale-110 duration-300">insert</button>
        </div>


        <div id="parent-of-additonal"
            class="p-4 border-[3px]  w-[50%] bg-slate-50 rounded-xl flex flex-col justify-center items-center"
            style="display: none;">
            <ul class="w-full flex justify-around">
                <li class="w-full">
                    <a class="text-center font-bold font-sans rounded-lg  w-full" href="#get-date-time">Normal</a>
                </li>
                <li class="w-full">
                    <a class="text-center font-bold font-sans rounded-lg  w-full" href="#insert-from-holidays">Holidays</a>
                </li>
                <li class="w-full">
                    <a class="text-center font-bold font-sans rounded-lg  w-full" href="#insert-from-occasions">Occasions</a>
                </li>
            </ul>
            <div class="flex flex-col  w-full justify-center items-center space-y-6" id="get-date-time">
                <form action="" id="select-additional-props" class="w-full space-y-6">
                    <input type="hidden" id="week_id" name="week_id" value="{{ $week->id }}">
                    <div class="flex space-x-3 justify-around items-center w-full ">
                        <div class="flex flex-col  justify-center items-center">
                            <p class="text-2xl">Select Sections</p>
                            <select name="sections[]" id="additional-select-sections"
                                class="select select-multiple w-52 text-xl border-2 focus:h-52" multiple>
                                @php
                                    $sections = $additive->week->battalion->sections;
                                @endphp
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}">{{ $section->section }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-2xl">Select Companies</p>
                            @php
                                $companies = $additive->week->battalion->companies;
                            @endphp
                            <select name="companies[]" id="additional-select-companies" multiple
                                class="select select-multiple  w-52 text-xl border-2 focus:h-52">

                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">Company {{ $company->company }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <p class="text-2xl">Select Date</p>
                        <input type="date" name="session_date" id="additional-date" class="input ">
                    </div>
                    <div class="flex justify-around w-[100%] items-center ">
                        
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-2xl">Select Module</p>
                            <select name="aditional_module_id" id="additional-select-module"
                                class="select  select-bordered w-52 text-xl">
                                @foreach ($modules as $module)
                                    <option value="{{ $module->module_id }}">{{ $module->module->module }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-2xl">Select Teacher</p>
                            <select name="additional_teacher_id" id="additional-select-teacher"
                                class="select select-bordered w-52 text-xl">
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
                <button id="additional-search-room"
                    class="bg-indigo-500 rounded-xl place-self-end w-40 h-12 text-slate-50 text-xl hover:bg-slate-200 hover:text-gray-900 hover:border-2 hover:border-slate-900 hover:scale-110 duration-300">Search</button>
            </div>
            <div id="insert-from-holidays">
                <div class="flex flex-col justify-center items-center">
                    <p class="text-2xl">Select Teacher</p>
                    <select name="aditional_module_id" id="additional-select-module"
                        class="select  select-bordered w-52 text-xl">
                        @foreach ($holiday_sessions as $session)
                            <option value="{{ $session->id }}">{{ $session->module->module }}-{{$session->session_date}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div id="insert-from-occasions">
                InSert From Occasion
            </div>
            <div id="insert-additional"
                class="w-[400px]  focus:border-blue-400 flex  flex-col justify-center items-center space-y-4 focus:border-2 rounded-xl ">
            </div>
        </div>

    </div>

    <script>
        const JsonTimings = @json($timings);
    </script>
@endsection
@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#parent-of-additonal").tabs();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#select_teacher_to_catchup').select2();
        });
        $(document).ready(function() {
            $('#show-catchup-insert').click(function() {
                $('#parent-of-catchup').slideToggle();
            });
            $('#show-rect-insert').click(function() {
                $('#parent-of-rectify').slideToggle();
            });
            $('#show-additional-insert').click(function() {
                $('#parent-of-additonal').slideToggle();
            });
        });
    </script>
    @vite('resources/js/rectification-add-delete.ts')
    @vite('resources/js/catchupt-add-delete.ts')
    @vite('resources/js/additional-add-delete.ts')
@endpush
