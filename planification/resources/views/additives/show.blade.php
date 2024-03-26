@extends('default')

@section('content')
    <div class="hidden" id="additive_id">{{ $additive->id}}</div>
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
        <div
            class="relative overflow-x-auto mt-20 sm:rounded-lg w-[80%] pb-10 px-4 flex flex-col space-y-4 justify-center items-center">
            <p class="font-bold text-5xl">Rectifications</p>
            <table class="w-[100%]  text-sm shadow-xl p-4  text-center rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                    @foreach ($additive->rectifications as $rect)
                        @php
                            // $session = $rect->session->with('timing','teacher','module','room','class');
                            $session = $rect->session;
                        @endphp
                        <tr
                            class="odd:bg-white h-[60px] odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
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
                            <td class="px-6 py-4" class="px-6 py-4"><a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <p class="text-5xl text-center mb-4">Add Rectification</p>
        <div id="parent-of-rectify" class="p-4 border-[3px] w-[50%] bg-slate-50 rounded-xl flex flex-col justify-center items-center">
            
            <div class="flex flex-col justify-center items-center space-y-4" id="get-date-time">
                <form action="" id="select-rectified-session-form">
                    <input type="hidden" id="week_id" name="week_id" value="{{ $week->id }}">
                    <div class="flex space-x-3 ">
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-2xl">Select Date</p>
                            <input type="date" name="session_date" id="rectify-date"
                                class="w-[300px] focus:border-blue-400 focus:border-2 rounded-xl hover:scale-110 duration-150">
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <p class="text-2xl">Select Time</p>
                            <select name="timing_id" id=""
                                class="w-[300px] focus:border-blue-400 focus:border-2 rounded-xl hover:scale-110 duration-150">
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
    </div>
@endsection
@push('scripts')
    @vite('resources/js/rectification-select-session.js')
@endpush