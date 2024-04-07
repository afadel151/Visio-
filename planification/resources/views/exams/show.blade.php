@extends('default')
@push('header')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')
    <div class="w-full h-full flex flex-col justify-start mt-32 space-y-10 items-center">

        <h1 class="text-4xl font-black">Battalion {{ $battalion->battalion }}</h1>
        <h1 class="text-3xl font-bold">{{ $week->global_week->start_week_date }} -> {{ $week->global_week->end_week_date }}
        </h1>
        {{-- 
        <select name="" class=" w-52" id="module-select">
            @foreach ($modules as $module)
                <option value="">{{ $module->module }}</option>
            @endforeach
        </select> --}}
        <table class="table text-center  w-[80%]  border-2">
            <thead>
                <th>Date</th>
                <th>MI</th>
                <th>St</th>
            </thead>
            <tbody>
                @foreach ($exams_dates as $date)
                    <tr class="h-44">
                        <td class=" w-64">
                            <table class="table text-center h-full ">
                                <tbody>
                                    <tr>
                                        <td rowspan="2" class="bg-base-300 h-44 font-bold text-xl"> {{ $date->exam_date }}
                                        </td>
                                        <td class="bg-base-200">AM</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-base-200">PM</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <table class="table text-center w-full h-full">
                                <tbody class="h-44">
                                    <tr>
                                        <td
                                            class="flex justify-center border-2 items-center space-x-4 text-xl h-full w-full">
                                            @if ($exams->where('exam_date', $date->exam_date)->where('sector', 'MI')->where('exam_time', 'AM')->isNotEmpty())
                                                @php
                                                    $exam = $exams
                                                        ->where('exam_date', $date->exam_date)
                                                        ->where('sector', 'MI')
                                                        ->where('exam_time', 'AM')
                                                        ->first();
                                                @endphp
                                                <p class="w-[70%] text-xl font-bold">
                                                    {{ $exam->module->module }}
                                                </p>
                                                <button class="btn rounded-3xl " onclick="ShowModal(this)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                </button>
                                                <a heref class="btn rounded-3xl" title="Go to rooms and groups">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M15.75 2.25H21a.75.75 0 0 1 .75.75v5.25a.75.75 0 0 1-1.5 0V4.81L8.03 17.03a.75.75 0 0 1-1.06-1.06L19.19 3.75h-3.44a.75.75 0 0 1 0-1.5Zm-10.5 4.5a1.5 1.5 0 0 0-1.5 1.5v10.5a1.5 1.5 0 0 0 1.5 1.5h10.5a1.5 1.5 0 0 0 1.5-1.5V10.5a.75.75 0 0 1 1.5 0v8.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V8.25a3 3 0 0 1 3-3h8.25a.75.75 0 0 1 0 1.5H5.25Z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                </a>
                                                <dialog class="modal">
                                                    <div class="modal-box">
                                                        <h3 class="font-bold text-lg">Hello!</h3>
                                                        <p class="py-4">Do you want to delete this Exam</p>
                                                        <div class="modal-action">
                                                            <form method="dialog">
                                                                <!-- if there is a button in form, it will close the modal -->
                                                                <a class="btn btn-error"
                                                                    href="{{ route('exams.destroy', ['id' => $exam->id]) }}">Delete</a>
                                                                <button class="btn">Close</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </dialog>
                                            @else
                                                <button class="btn relative" onclick="ShowForm(this)">Add module</button>
                                                <form action="{{ route('exams.store') }}" method="POST"
                                                    enctype="multipart/form-data"
                                                    class="hidden flex z-20 py-10 space-y-5 absolute bottom-0 border-2 bg-base-200 rounded-xl left-2 flex-col justify-center items-center w-64">
                                                    @csrf
                                                    <button class="absolute btn btn-sm top-2 right-2"
                                                        onclick="CloseForm(this)">close</button>
                                                    <input type="hidden" name="exam_sector" value="MI">
                                                    <input type="hidden" name="exam_time" value="AM">
                                                    <input type="hidden" name="exam_date" value="{{ $date->exam_date }}">
                                                    <input type="hidden" name="week_id" value="{{ $week->id }}">
                                                    <select name="module_id" class="module-select w-44" id="">
                                                        @foreach ($modules as $module)
                                                            <option value="{{ $module->id }}">{{ $module->module }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit" class="btn">Add</button>
                                                </form>
                                            @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td
                                            class="flex justify-center items-center border-2 space-x-4 text-xl h-full w-full">
                                            @if ($exams->where('exam_date', $date->exam_date)->where('sector', 'MI')->where('exam_time', 'PM')->isNotEmpty())
                                                @php
                                                    $exam = $exams
                                                        ->where('exam_date', $date->exam_date)
                                                        ->where('sector', 'MI')
                                                        ->where('exam_time', 'PM')
                                                        ->first();
                                                @endphp
                                                <p class="w-[70%] text-xl font-bold">
                                                    {{ $exam->module->module }}
                                                </p>
                                                <button class="btn rounded-3xl" onclick="ShowModal(this)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                </button>
                                                <a heref class="btn rounded-3xl" title="Go to rooms and groups">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M15.75 2.25H21a.75.75 0 0 1 .75.75v5.25a.75.75 0 0 1-1.5 0V4.81L8.03 17.03a.75.75 0 0 1-1.06-1.06L19.19 3.75h-3.44a.75.75 0 0 1 0-1.5Zm-10.5 4.5a1.5 1.5 0 0 0-1.5 1.5v10.5a1.5 1.5 0 0 0 1.5 1.5h10.5a1.5 1.5 0 0 0 1.5-1.5V10.5a.75.75 0 0 1 1.5 0v8.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V8.25a3 3 0 0 1 3-3h8.25a.75.75 0 0 1 0 1.5H5.25Z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                </a>
                                                <dialog class="modal">
                                                    <div class="modal-box">
                                                        <h3 class="font-bold text-lg">Hello!</h3>
                                                        <p class="py-4">Do you want to delete this Exam</p>
                                                        <div class="modal-action">
                                                            <form method="dialog">

                                                                <a class="btn btn-error"
                                                                    href="{{ route('exams.destroy', ['id' => $exam->id]) }}">Delete</a>
                                                                <button class="btn">Close</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </dialog>
                                            @else
                                                <button class="btn relative" onclick="ShowForm(this)">Add module</button>
                                                <form action="{{ route('exams.store') }}" method="POST"
                                                    enctype="multipart/form-data"
                                                    class="hidden flex z-20 py-10 space-y-5 absolute -bottom-48 border-2 bg-base-200 rounded-xl left-2 flex-col justify-center items-center w-64">
                                                    @csrf
                                                    <button class="absolute btn btn-sm top-2 right-2"
                                                        onclick="CloseForm(this)">close</button>
                                                    <input type="hidden" name="exam_sector" value="MI">
                                                    <input type="hidden" name="exam_time" value="PM">
                                                    <input type="hidden" name="exam_date"
                                                        value="{{ $date->exam_date }}">
                                                    <input type="hidden" name="week_id" value="{{ $week->id }}">
                                                    <select name="module_id" class="module-select w-44" id="">
                                                        @foreach ($modules as $module)
                                                            <option value="{{ $module->id }}">{{ $module->module }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit" class="btn">Add</button>
                                                </form>
                                            @endif
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <table class="table  text-center  w-full h-full">
                                <tbody class="h-44">
                                    <tr>
                                        <td
                                            class="flex space-x-4 justify-center border-2 items-center text-xl h-full w-full">
                                            @if ($exams->where('exam_date', $date->exam_date)->where('sector', 'ST')->where('exam_time', 'AM')->isNotEmpty())
                                                @php
                                                    $exam = $exams
                                                        ->where('exam_date', $date->exam_date)
                                                        ->where('sector', 'ST')
                                                        ->where('exam_time', 'AM')
                                                        ->first();
                                                @endphp
                                                <p class="w-[70%] text-xl font-bold">
                                                    {{ $exam->module->module }}
                                                </p>
                                                <button class="btn rounded-3xl" onclick="ShowModal(this)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                </button>
                                                <a heref class="btn rounded-3xl" title="Go to rooms and groups">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M15.75 2.25H21a.75.75 0 0 1 .75.75v5.25a.75.75 0 0 1-1.5 0V4.81L8.03 17.03a.75.75 0 0 1-1.06-1.06L19.19 3.75h-3.44a.75.75 0 0 1 0-1.5Zm-10.5 4.5a1.5 1.5 0 0 0-1.5 1.5v10.5a1.5 1.5 0 0 0 1.5 1.5h10.5a1.5 1.5 0 0 0 1.5-1.5V10.5a.75.75 0 0 1 1.5 0v8.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V8.25a3 3 0 0 1 3-3h8.25a.75.75 0 0 1 0 1.5H5.25Z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                </a>
                                                <dialog class="modal">
                                                    <div class="modal-box">
                                                        <h3 class="font-bold text-lg">Hello!</h3>
                                                        <p class="py-4">Do you want to delete this Exam</p>
                                                        <div class="modal-action">
                                                            <form method="dialog">
                                                                <!-- if there is a button in form, it will close the modal -->
                                                                <a class="btn btn-error"
                                                                    href="{{ route('exams.destroy', ['id' => $exam->id]) }}">Delete</a>
                                                                <button class="btn">Close</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </dialog>
                                            @else
                                                <button class="btn relative" onclick="ShowForm(this)">Add module</button>
                                                <form action="{{ route('exams.store') }}" method="POST"
                                                    enctype="multipart/form-data"
                                                    class="hidden flex z-20 py-10 space-y-5 absolute bottom-0 border-2 bg-base-200 rounded-xl left-2 flex-col justify-center items-center w-64">
                                                    @csrf
                                                    <button class="absolute btn btn-sm top-2 right-2"
                                                        onclick="CloseForm(this)">close</button>
                                                    <input type="hidden" name="exam_sector" value="ST">
                                                    <input type="hidden" name="exam_time" value="AM">
                                                    <input type="hidden" name="exam_date"
                                                        value="{{ $date->exam_date }}">
                                                    <input type="hidden" name="week_id" value="{{ $week->id }}">
                                                    <select name="module_id" class="module-select w-44" id="">
                                                        @foreach ($modules as $module)
                                                            <option value="{{ $module->id }}">{{ $module->module }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit" class="btn">Add</button>
                                                </form>
                                            @endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <td
                                            class="flex justify-center space-x-4 border-2  items-center text-xl h-full w-full">
                                            @if ($exams->where('exam_date', $date->exam_date)->where('sector', 'ST')->where('exam_time', 'PM')->isNotEmpty())
                                                @php
                                                    $exam = $exams
                                                        ->where('exam_date', $date->exam_date)
                                                        ->where('sector', 'ST')
                                                        ->where('exam_time', 'PM')
                                                        ->first();
                                                @endphp
                                                <p class="w-[70%] text-xl font-bold">
                                                    {{ $exam->module->module }}
                                                </p>
                                                <button class="btn rounded-3xl" onclick="ShowModal(this)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                </button>
                                                <a heref class="btn rounded-3xl" title="Go to rooms and groups">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M15.75 2.25H21a.75.75 0 0 1 .75.75v5.25a.75.75 0 0 1-1.5 0V4.81L8.03 17.03a.75.75 0 0 1-1.06-1.06L19.19 3.75h-3.44a.75.75 0 0 1 0-1.5Zm-10.5 4.5a1.5 1.5 0 0 0-1.5 1.5v10.5a1.5 1.5 0 0 0 1.5 1.5h10.5a1.5 1.5 0 0 0 1.5-1.5V10.5a.75.75 0 0 1 1.5 0v8.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V8.25a3 3 0 0 1 3-3h8.25a.75.75 0 0 1 0 1.5H5.25Z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                </a>
                                                <dialog class="modal">
                                                    <div class="modal-box">
                                                        <h3 class="font-bold text-lg">Hello!</h3>
                                                        <p class="py-4">Do you want to delete this Exam</p>
                                                        <div class="modal-action">
                                                            <form method="dialog">
                                                                <!-- if there is a button in form, it will close the modal -->
                                                                <a class="btn btn-error"
                                                                    href="{{ route('exams.destroy', ['id' => $exam->id]) }}">Delete</a>
                                                                <button class="btn">Close</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </dialog>
                                            @else
                                                <button class="btn relative" onclick="ShowForm(this)">Add module</button>
                                                <form action="{{ route('exams.store') }}" method="POST"
                                                    enctype="multipart/form-data"
                                                    class="hidden flex z-20 py-10 space-y-5 absolute -bottom-48 border-2 bg-base-200 rounded-xl left-2 flex-col justify-center items-center w-64">
                                                    @csrf
                                                    <button class="absolute btn btn-sm top-2 right-2"
                                                        onclick="CloseForm(this)">close</button>
                                                    <input type="hidden" name="exam_sector" value="ST">
                                                    <input type="hidden" name="exam_time" value="PM">
                                                    <input type="hidden" name="exam_date"
                                                        value="{{ $date->exam_date }}">
                                                    <input type="hidden" name="week_id" value="{{ $week->id }}">
                                                    <select name="module_id" class="module-select w-44" id="">
                                                        @foreach ($modules as $module)
                                                            <option value="{{ $module->id }}">{{ $module->module }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit" class="btn">Add</button>
                                                </form>
                                            @endif
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <div class="relative">
            <button class="btn " onclick="ShowForm(this)">Add Date</button>
            <form action="{{ route('exams.add_exams_day') }}" method="POST" enctype="multipart/form-data"
                class="hidden bg-base-200  flex z-10 absolute  top-0 right-0 flex-col justify-around  rounded-xl border-2 items-center w-[500px] space-y-14 py-10 ">
                <button class="absolute top-0 right-0 btn btn-sm" onclick="CloseForm(this)">close</button>
                @csrf
                <table class="w-full text-center table">
                    <thead>
                        <th>Time</th>
                        <th>MI</th>
                        <th>ST</th>
                    </thead>
                    <tr>
                        <td>AM</td>
                        <td>
                            <select name="AM_MI_module_id" class="module-select w-36" id="">
                                @foreach ($modules as $module)
                                    <option value="0" selected>No Exam</option>
                                    <option value="{{ $module->id }}">{{ $module->module }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="AM_ST_module_id" class="module-select w-36" id="">
                                @foreach ($modules as $module)
                                    <option value="0" selected>No Exam</option>
                                    <option value="{{ $module->id }}">{{ $module->module }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>PM</td>
                        <td>
                            <select name="PM_MI_module_id" class="module-select w-36" id="">
                                @foreach ($modules as $module)
                                    <option value="0" selected>No Exam</option>
                                    <option value="{{ $module->id }}">{{ $module->module }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="PM_ST_module_id" class="module-select w-36" id="">
                                @foreach ($modules as $module)
                                    <option value="0" selected> No Exam</option>
                                    <option value="{{ $module->id }}">{{ $module->module }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="week_id" value="{{ $week->id }}">
                <input type="date" name="exams_date" class="input">
                <button class="btn">Add</button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function ShowModal(button) {
            const modal = button.nextElementSibling;
            modal.showModal();
        }

        function ShowForm(button) {
            event.preventDefault();
            const form = button.nextElementSibling;
            form.classList.remove('hidden');
        }

        function CloseForm(button) {
            event.preventDefault();
            const form = button.parentNode;
            form.classList.add('hidden');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.module-select').select2();
        });
    </script>
@endpush
