<table class="h-[100%]  w-[100%] p-0 table-fixed" style="width: calc({{ $company->sections->count() }}*130px);"
    id="company-day">

    @php
        $sections = $company->sections;
        $sectionsC = $sections->count();
    @endphp
    <tr class="h-0">
        @for ($i = 0; $i < $sectionsC; $i++)
            <td class="w-[130px]"></td>
        @endfor

    </tr>
    @foreach ($timings as $timing)
        <tr class="relative company-tr h-[160px]" style="width: calc({{ $sectionsC }}*130px) ;">
            @if ($sessions->where('sessionable_type', 'App\\Models\\Company')->where('session_date', $date)->where('timing_id', $timing->id)->where('sessionable_id', $company->id)->isNotEmpty())
                @php
                    $cour = true;
                    $c = $sessions
                        ->where('sessionable_type', 'App\\Models\\Company')
                        ->where('session_date', $date)
                        ->where('timing_id', $timing->id)
                        ->where('sessionable_id', $company->id)
                        ->first();
                @endphp
                <td colspan="3" class="box-border h-[160px] session " style="width:100%;">
                    @if ($c->rectified == true && $c->absented == false)
                        <div
                            class="h-[150px] shadow-lg flex flex-col border-2 bg-yellow-200 rounded-xl justify-center items-center">
                    @endif
                    @if ($c->absented == true && $c->rectified == false)
                        <div
                            class="h-[150px] shadow-lg flex flex-col border-2 bg-red-300 rounded-xl justify-center items-center ">
                    @endif

                    @if ($c->absented == false and $c->rectified == false)
                        <div
                            class="h-[150px] shadow-lg  flex flex-col border-2 bg-indigo-300 rounded-xl justify-center items-center">
                    @endif

                    <a href="{{ route('teachers.show', $c->teacher->id) }}">
                        <p
                            class="btn text-xl hover:bg-slate-50 hover:shadow-lg  bg-slate-100 px-2 rounded-xl font-bold">
                            {{ $c->teacher->teacher_name }} </p>
                    </a>

                    <p class=" font-normal">{{ $c->module->module }}</p>
                    <p class= " font-bold">{{ $c->room->room }}</p>
                    <div class="flex updateformparent relative justify-center self-end  items-center space-x-2">
                        <button
                            class="flex btn form-display-button justify-center items-center  hover:scale-125 duration-300 border-[2px] shadow-md update-button rounded-lg border-slate-500   font-bold w-10 hover:bg-white bg-slate-100"
                            title="Update this session">
                        </button>
                        <form action="{{ route('sessions.update', ['id' => $c->id]) }}"
                            class="update-form flex flex-col justify-center space-y-4 items-center  text-xl w-[300px] h-[300px] ease-in z-30 hidden absolute bg-white shadow-xl rounded-xl top-10 right-2">
                            @csrf
                            @if ($sector == 'MI')
                                <div class="sector">MI</div>
                            @elseif ($sector == 'ST')
                                <div class="sector">ST</div>
                            @else
                                <div class="sector">PR</div>
                            @endif
                            <a
                                class="absolute top-2 right-2 hover:cursor-pointer company-update-cancel-button bg-slate-400 h-6 w-6 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                                    <path
                                        d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z" />
                                </svg>
                            </a>
                            <div class="form-section">
                                <div class="selects">
                                    <div class="flex justify-center items-center w-[100%]">
                                        <label for="module" class="w-[100px]">Module</label>
                                        <select name="module_id" id="module" class="w-[150px] h-10 rounded-lg">
                                            {{-- DISPLAY MODULES  --}}
                                            @foreach ($modules as $module)
                                                <option value="{{ $module->id }}">{{ $module->module }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex justify-center items-center w-[100%]">
                                        <label for="room" class="w-[100px]">Teacher</label>
                                        <select name="teacher_id" id="room" class="w-[150px] h-10 rounded-lg">
                                            {{-- DISPLAY TEACHERS ACCORDING TO THE MOODULE --}}
                                            @foreach ($teachers as $teacher)
                                                <option value="{{ $teacher->id }}">
                                                    {{ $teacher->teacher_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex available-rooms justify-center items-center w-[100%]">
                                        <div class="session_date hidden"> {{ $date }}</div>
                                        <div class="timing_id hidden">{{ $timing->id }}</div>
                                        <img src="/svg/3-dots-fade.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="submit" id="" value="Update"
                                class="bg-indigo-300 btn hover:shadow-lg rounded-lg shadow-lg h-10 w-28">
                        </form>
                        <form action="{{ route('sessions.delete', ['id' => $c->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <button type="submit" title="Delete this session"
                                class="rounded-lg flex justify-center items-center  hover:scale-125 duration-300 btn hover:shadow-lg w-10  border-[2px] border-slate-500 hover:bg-red-300 bg-red-400 h-10">
                            </button>
                        </form>

                        @if ($c->absented == 0)
                            <button type="submit" title="Mark as absented"
                                class="rounded-lg btn mark-cour-absence flex justify-center items-center  hover:scale-125 duration-300 hover:bg-gray-100 hover:shadow-lg border-[2px] border-slate-500  w-10  bg-gray-300 h-10">
                                <div class="company-id hidden">{{ $c->id }}</div>
                            </button>
                        @endif
                    </div>
                    </div>

                </td>
            @else
                {{-- Makanch Cour  --}}




                @php
                    $td = false;
                @endphp
                @foreach ($sections as $section)
                    @if ($sessions->where('sessionable_type', 'App\\Models\\Section')->where('session_date', $date)->where('timing_id', $timing->id)->where('sessionable_id', $section->id)->where('session_type','tp')->isNotEmpty())
                        <td rowspan="2"
                            class="text-center section-td session hover:z-20 ease-out w-[150px]  h-[320px] ">
                            @php
                            $tp = true;
                            $tp = $sessions
                                ->where('sessionable_type', 'App\\Models\\Section')
                                ->where('session_date', $date)
                                ->where('timing_id', $timing->id)
                                ->where('sessionable_id', $section->id)
                                ->where('session_type', 'tp')
                                ->first();
                        @endphp
                        @if ($tp->rectified == true)
                        <div class="h-[300px] shadow-lg flex flex-col border-2 bg-yellow-300 rounded-xl justify-center items-center">
                        @endif
                        @if ($tp->absented == true && $tp->rectified == false)
                            <div class="h-[300px] shadow-lg flex flex-col border-2 bg-red-300 rounded-xl justify-center items-center ">
                        @endif

                        @if ($tp->absented == false and $tp->rectified == false)
                            <div class="h-[300px] shadow-lg  flex flex-col border-2 bg-indigo-300 rounded-xl justify-center items-center">
                        @endif
                        <a href="{{ route('teachers.show', $tp->teacher->id) }}"
                            class=" h-8 w-fit px-2 hover:bg-slate-100 hover:shadow-lg  bg-slate-100  rounded-xl">
                            <p class="  text-xl  font-bold">
                                {{ $tp->teacher->teacher_name }} </p>
                        </a>
                        <p class="text-xl font-normal">{{ $tp->module->module }}</p>
                        <p class= "text-xl font-bold">{{ $tp->room->room }}</p>
                        </td>
                    @else
                        @php
                            $lastTime = $timing->id - 1;
                        @endphp
                        @if ($sessions->where('sessionable_type', 'App\\Models\\Section')->where('session_date', $date)->where('timing_id', $lastTime)->where('sessionable_id', $section->id)->where('session_type', 'tp')->isNotEmpty())

                        @else
                            <td class=" text-center section-td session hover:z-20 ease-out w-[150px]  h-[160px]  ">
                                @if ($sessions->where('sessionable_type', 'App\\Models\\Section')->where('session_date', $date)->where('timing_id', $timing->id)->where('sessionable_id', $section->id)->where('session_type', 'td')->isNotEmpty())
                                    @php
                                        $td = true;
                                        $s = $sessions
                                            ->where('sessionable_type', 'App\\Models\\Section')
                                            ->where('session_date', $date)
                                            ->where('timing_id', $timing->id)
                                            ->where('sessionable_id', $section->id)
                                            ->where('session_type', 'td')
                                            ->first();
                                    @endphp
                                    @if ($s->rectified == true)
                                        <div
                                            class="h-[150px] shadow-lg flex flex-col border-2 bg-yellow-300 rounded-xl justify-center items-center">
                                    @endif
                                    @if ($s->absented == true && $s->rectified == false)
                                        <div
                                            class="h-[150px] shadow-lg flex flex-col border-2 bg-red-300 rounded-xl justify-center items-center ">
                                    @endif

                                    @if ($s->absented == false and $s->rectified == false)
                                        <div
                                            class="h-[150px] shadow-lg  flex flex-col border-2 bg-indigo-300 rounded-xl justify-center items-center">
                                    @endif

                                    <a href="{{ route('teachers.show', $s->teacher->id) }}"
                                        class=" h-8 w-fit px-2 hover:bg-slate-100 hover:shadow-lg  bg-slate-100  rounded-xl">
                                        <p class="  text-xl  font-bold">
                                            {{ $s->teacher->teacher_name }} </p>
                                    </a>
                                    <p class="text-xl font-normal">{{ $s->module->module }}</p>
                                    <p class= "text-xl font-bold">{{ $s->room->room }}</p>
                                    <div
                                        class="flex updateformparent relative justify-center items-center mt-4 space-x-2">
                                        <button
                                            class="h-8 btn flex justify-center items-center  hover:scale-125 duration-300  shadow-md update-button rounded-xl hover:bg-slate-50 hover:shadow-lg border-[2px] border-slate-500 p-1 font-bold w-8 bg-slate-200">
                                            <img src="/svg/pen-thin.svg" class="h-6 w-6">
                                        </button>
                                        <form action="{{ route('sessions.update', ['id' => $s->id]) }}"
                                            onsubmit="UpdateSession(event)"
                                            class="update-form flex flex-col justify-center space-y-4 items-center  text-xl w-[300px] h-[300px] ease-in z-20 hidden absolute bg-white shadow-xl rounded-xl top-10 right-2">

                                            <a
                                                class="absolute top-4 right-4 section-update-cancel-button hover:cursor-pointer  bg-slate-400 h-6 w-6 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"
                                                    fill="currentColor">
                                                    <path
                                                        d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z" />
                                                </svg>
                                            </a>
                                            <div class="form-section">
                                                <div class="selects">
                                                    <div class="flex justify-center items-center w-[100%]">
                                                        <label for="module" class="w-[100px]">Module</label>
                                                        <select name="module_id" id="module"
                                                            class="w-[150px] h-10 rounded-lg">
                                                            {{-- DISPLAY MODULES  --}}
                                                            @foreach ($modules as $module)
                                                                <option value="{{ $module->id }}">
                                                                    {{ $module->module }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="flex justify-center items-center w-[100%]">
                                                        <label for="room" class="w-[100px]">Teacher</label>
                                                        <select name="teacher_id" id="room"
                                                            class="w-[150px] h-10 rounded-lg">
                                                            {{-- DISPLAY TEACHERS ACCORDING TO THE MOODULE --}}
                                                            @foreach ($teachers as $teacher)
                                                                <option value="{{ $teacher->id }}">
                                                                    {{ $teacher->teacher_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div
                                                        class="flex available-rooms justify-center items-center w-[100%]">
                                                        <div class="session_date hidden"> {{ $date }}</div>
                                                        <div class="timing_id hidden"> {{ $timing->id }}</div>
                                                        <img src="/svg/3-dots-fade.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="submit" name="submit" id="" value="Update"
                                                class="bg-indigo-300 btn rounded-lg  hover:scale-115 duration-300 shadow-lg h-10 w-32">
                                        </form>

                                        <button type="button"
                                            class="rounded-lg btn delete-td flex justify-center items-center w-8  hover:scale-125 duration-300 hover:bg-rose-400 hover:shadow-lg border-[2px] border-slate-500 bg-red-400 h-8">
                                            <div class="hidden section-id"> {{ $s->id }} </div>
                                            <div class="hidden sector">{{ $sector }}</div>
                                            <img src="/svg/trash.svg" class="h-6 w-6" alt="">
                                        </button>

                                        @if ($s->absented == 0)
                                            <button type="button" title="Mark as absented"
                                                class="rounded-lg  mark-td-absence btn flex justify-center items-center hover:scale-125 duration-300 hover:bg-gray-100 hover:shadow-lg border-[2px] border-slate-500 w-8 p-2 bg-gray-400 h-8">
                                                <div class="hidden section-id">{{ $s->id }}</div>
                                                <div class="hidden sector">{{ $sector }}</div>
                                            </button>
                                        @endif
                                    </div>
                                    </div>
                                @else
                                    <div
                                        class="relative sectionparentofform h-[100%] flex justify-center items-center">
                                        <button
                                            class="flex form-display-button shadow-md hover:scale-125 duration-300  btn section-button items-center justify-center  rounded-full bg-slate-300 hover:bg-yellow-50 z-0">
                                            <img src="/svg/pen-thin.svg" class="h-6 w-6" alt="">
                                        </button>

                                        <form @submit.prevent="submit"
                                            class="section-form  bg-slate-50 hidden absolute  rounded-[20px] shadow-lg text-xl w-[300px] h-[350px] flex flex-col justify-around items-center"
                                            style="top: 50px; left: 50px;z-index: 50;">
                                            @csrf
                                            <input type="hidden" name="date" value="{{ $date }}">
                                            <input type="hidden" name="timing_id" value="{{ $timing->id }}">
                                            <input type="hidden" name="week_id" value="{{ $week_id }}">
                                            <input type="hidden" name="sessionable_type" value="App\Models\Section">
                                            <input type="hidden" name="sessionable_id" value="{{ $section->id }}">
                                            <input type="hidden" name="session_type" value="td">
                                            @if ($sector == 'MI')
                                                <div class="sector hidden">MI</div>
                                            @elseif ($sector == 'ST')
                                                <div class="sector hidden">ST</div>
                                            @else
                                                <div class="sector hidden">PR</div>
                                            @endif
                                            <div
                                                class=" form-section h-[80%] w-[100%] flex  flex-col justify-around items-center">
                                                <a
                                                    class="absolute top-4 right-4 section-cancel-button hover:cursor-pointer hover:scale-125 duration-200  h-6 w-6 rounded-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:shadow-lg"
                                                        viewBox="0 0 256 256" fill="currentColor">
                                                        <path
                                                            d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z" />
                                                    </svg>
                                                </a>
                                                <div>
                                                    <h2 class=""> {{ $section->section }}</h2>
                                                    <h2> {{ $date }}</h2>
                                                    <h2> {{ $timing->session_start }} -> {{ $timing->session_finish }}
                                                    </h2>
                                                </div>
                                                <div class="mb-4 selects space-y-2">
                                                    <div class="flex justify-center items-center w-[100%]">
                                                        <label for="module" class="w-[100px]">Module</label>
                                                        <select name="module_id" id="module"
                                                            class="w-[150px] h-10 rounded-lg">
                                                            {{-- DISPLAY MODULES  --}}
                                                            @foreach ($modules as $module)
                                                                <option value="{{ $module->id }}">
                                                                    {{ $module->module }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="flex justify-center items-center w-[100%]">
                                                        <label for="room" class="w-[100px]">Teacher</label>
                                                        <select name="teacher_id" id="room"
                                                            class="w-[150px] h-10 rounded-lg">
                                                            {{-- DISPLAY TEACHERS ACCORDING TO THE MOODULE --}}
                                                            @foreach ($teachers as $teacher)
                                                                <option value="{{ $teacher->id }}">
                                                                    {{ $teacher->teacher_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div
                                                        class="flex available-rooms justify-center items-center w-[100%]">
                                                        <div class="session_date hidden"> {{ $date }}</div>
                                                        <div class="timing_id hidden"> {{ $timing->id }}</div>
                                                        <img src="/svg/3-dots-fade.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="submit" value="submit"
                                                class="h-10 btn submit-td  w-20 rounded-lg  bg-slate-300 hover:bg-slate-50 hover:text-slate-800 hover:scale-110 duration-200 hover:border-slate-300 hover:cursor-pointer hover:border-2">
                                        </form>

                                    </div>
                                @endif
                            </td>
                        @endif
                    @endif
                @endforeach
                <td class="parentofform absolute w-0 h-0  right-2 top-1 z-20">
                    @if ($td == false)
                        <button
                            class="absolute form-display-button company-button z-0  top-4 right-4 cancel-button hover:cursor-pointer bg-slate-500 h-6 w-6 rounded-full">
                        </button>
                    @endif
                    <form @submit.prevent="submit"
                        class="hidden rounded-[20px] shadow-lg flex flex-col space-y-3 pb-4 justify-start items-center text-xl w-[300px] h-[300px] bg-white company-form absolute"
                        style="top: 10px; left: 10px;z-index: 50;" method="POST">
                        <input type="hidden" name="date" value="{{ $date }}">
                        <input type="hidden" name="timing_id" value="{{ $timing->id }}">
                        <input type="hidden" name="week_id" value="{{ $week_id }}">
                        <input type="hidden" name="sessionable_type" value="App\Models\Company">
                        <input type="hidden" name="sessionable_id" value="{{ $company->id }}">
                        <input type="hidden" name="session_type" value="cour">
                        @if ($sector == 'MI')
                            <div class="sector hidden">MI</div>
                        @elseif ($sector == 'ST')
                            <div class="sector hidden">ST</div>
                        @else
                            <div class="sector hidden">PR</div>
                        @endif
                        <div class="form-section h-[100%] w-[100%] flex  flex-col justify-around items-center">
                            <a
                                class="absolute top-4 right-4 company-cancel-button font-bold hover:cursor-pointer   hover:scale-125 duration-200 h-6 w-6 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="hover:shadow-xl"
                                    fill="currentColor">
                                    <path
                                        d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z" />
                                </svg>
                            </a>
                            <div>
                                <h2 class="">Company : {{ $company->company }} </h2>
                                <h2> {{ $date }}</h2>
                                <h2> {{ $timing->session_start }} -> {{ $timing->session_finish }}</h2>
                            </div>
                            <div class="selects mb-4 space-y-2">
                                <div class="flex justify-center items-center w-[100%]">
                                    <label for="room" class="w-[100px]">Module</label>
                                    <select name="module_id" id="room" class="w-[150px] h-10 rounded-lg">
                                        @foreach ($modules as $module)
                                            <option value="{{ $module->id }}">{{ $module->module }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="flex justify-center items-center w-[100%]">
                                    <label for="room" class="w-[100px]">Teacher</label>
                                    <select name="teacher_id" id="room" class="w-[150px] h-10 rounded-lg">
                                        @foreach ($teachers as $teacher)
                                            <option value="{{ $teacher->id }}">
                                                {{ $teacher->teacher_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="flex justify-center available-rooms items-center w-[100%]">
                                    <div class="session_date hidden">{{ $date }}</div>
                                    <div class="timing_id hidden">{{ $timing->id }}</div>
                                    <img src="/svg/3-dots-fade.svg" class="w-20 h-10" alt="">
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="submit"
                            class="h-10 submit-cour  btn w-20 rounded-lg bg-slate-300 hover:bg-slate-50 hover:text-slate-800 hover:scale-110 duration-200 hover:border-slate-300 hover:cursor-pointer hover:border-2">
                    </form>
                </td>
            @endif
        </tr>
    @endforeach

</table>
