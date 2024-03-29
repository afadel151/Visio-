<table class="h-[100%]  w-[100%] p-0 " 
    id="company-day">

    @php
        $sections = $company->sections;
        $sectionsC = $sections->count();
    @endphp
    <tr class="h-0">
        @for ($i = 0; $i < $sectionsC; $i++)
            <td class="w-[140px]"></td>
        @endfor

    </tr>
    @foreach ($timings as $timing)
        <tr class="relative company-tr  h-[160px] w-[100%]">
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
                <td colspan="3" class="  session ">
                    @if ($c->rectified == true && $c->absented == false)
                        <div
                            class="h-[150px] w-[100%]  flex card bg-yellow-300 bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] 
                            shadow-sm  flex-col rounded-xl justify-center items-center">
                    @endif
                    @if ($c->absented == true && $c->rectified == false)
                        <div
                            class="h-[150px] w-[100%] flex flex-col border-2  bg-red-100 bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] 
                            shadow-sm rounded-xl justify-center items-center ">
                    @endif

                    @if ($c->absented == false and $c->rectified == false)
                        <div
                            class="h-[150px] w-[100%] shadow-lg  flex flex-col border-2 bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] 
                             rounded-xl justify-center items-center">
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
                            class="btn btn-circle form-display-button update-button"
                            title="Update this session">
                            <img src="/svg/pen-thin.svg" class="h-6 w-6">

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
                            <button class="btn btn-circle delete-td hover:bg-rose-400" onclick="openModal(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                                                                           
                                <div class="hidden section-id"> {{ $c->id }} </div>
                                <div class="hidden sector">{{ $sector }}</div>
                                
                             </button>
                            {{-- <button type="button" 
                                class="rounded-lg btn btn-sm delete-td flex justify-center items-center   hover:scale-125 duration-300 hover:bg-rose-400 hover:shadow-lg border-[2px] border-slate-500 bg-red-400 ">
                                <div class="hidden section-id"> {{ $s->id }} </div>
                                <div class="hidden sector">{{ $sector }}</div>
                                
                            </button> --}}
                            <dialog id="my_modal_1" class="modal z-60">
                                <div class="modal-box">
                                  <h3 class="font-bold text-lg">Hello!</h3>
                                  <p class="py-4">Do you rally want to delete this session ?</p>
                                  <div class="modal-action">
                                    <form action="">
                                        <button class="btn btn-warning">Delete</button>
                                    </form>
                                    <form method="dialog">
                                      <!-- if there is a button in form, it will close the modal -->
                                      <button class="btn">Close</button>
                                    </form>
                                  </div>
                                </div>
                              </dialog>
                        </form>

                        @if ($c->absented == 0)
                            <button type="submit" title="Mark as absented"
                                class=" btn btn-circle mark-cour-absence ">
                                <div class="company-id hidden">{{ $c->id }}</div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                  </svg>
                            </button>
                        @endif
                    </div>
                    </div>

                </td>
            @else
                {{-- Makanch Cour  --}}




                @php
                    $td = false;
                    $tp = false;
                @endphp
                @foreach ($sections as $section)
                    @if ($sessions->where('sessionable_type', 'App\\Models\\Section')->where('session_date', $date)->where('timing_id', $timing->id)->where('sessionable_id', $section->id)->where('session_type', 'tp')->isNotEmpty())
                        <td rowspan="2"
                            class="text-center section-td session hover:z-20 ease-out    ">
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
                                <div
                                    class="h-[300px] shadow-lg flex flex-col border-2 bg-yellow-200 rounded-xl justify-center items-center">
                            @endif
                            @if ($tp->absented == true && $tp->rectified == false)
                                <div
                                    class="h-[300px] shadow-lg flex flex-col border-2 bg-red-200 rounded-xl justify-center items-center ">
                            @endif

                            @if ($tp->absented == false and $tp->rectified == false)
                                <div
                                    class="h-[300px] shadow-lg  flex flex-col border-2 bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] rounded-xl justify-center items-center">
                            @endif
                            @php
                                $tpteachers = $tp->TpTeachers;
                            @endphp
                            <div class="flex flex-col space-y-2 justify-center items-center w-[100%]">
                                @foreach ($tpteachers as $tpteacher)
                                    <a href="{{ route('teachers.show', $tpteacher->id) }}"
                                        class=" h-8 w-fit px-2 hover:bg-slate-100 hover:shadow-lg  bg-slate-100  rounded-xl">
                                        <p class="  text-xl  font-bold">
                                            {{ $tpteacher->teacher_name }} </p>
                                    </a>
                                @endforeach
                            </div>
                            <p class="text-xl font-normal">{{ $tp->module->module }}</p>
                            <p class= "text-xl font-bold">{{ $tp->room->room }}</p>
                        </td>
                    @else
                        @php
                            $lastTime = $timing->id - 1;
                        @endphp
                        @if ($sessions->where('sessionable_type', 'App\\Models\\Section')->where('session_date', $date)->where('timing_id', $lastTime)->where('sessionable_id', $section->id)->where('session_type', 'tp')->isNotEmpty())
                            @php
                                $tp = true;
                            @endphp
                        @else
                            <td class="relative  text-center section-td session  ease-out" style="width: 150px">
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
                                            class="h-[150px] shadow-lg flex flex-col border-2 bg-yellow-200 rounded-xl justify-center items-center">
                                    @endif
                                    @if ($s->absented == true && $s->rectified == false)
                                        <div
                                            class="h-[150px] shadow-lg flex flex-col border-2 bg-red-200 rounded-xl justify-center items-center ">
                                    @endif

                                    @if ($s->absented == false and $s->rectified == false)
                                        <div
                                            class="h-[150px] shadow-lg  flex flex-col border-2 bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] rounded-xl justify-center items-center">
                                    @endif

                                    <a href="{{ route('teachers.show', $s->teacher->id) }}"
                                        class=" h-8 w-fit px-2 mt-2 hover:bg-slate-100 hover:shadow-lg  bg-slate-100  rounded-xl">
                                        <p class="  text-xl  font-bold">
                                            {{ $s->teacher->teacher_name }} </p>
                                    </a>
                                    <p class="text-xl font-normal">{{ $s->module->module }}</p>
                                    <p class= "text-xl font-bold">{{ $s->room->room }}</p>
                                    <div
                                        class="flex updateformparent relative justify-center items-center mt-4 ">

                                        <button
                                            class=" btn  btn-circle items-center   update-button ">
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
                                        <button class="btn btn-circle delete-td hover:bg-rose-400" onclick="openModal(this)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                                                                       
                                            <div class="hidden section-id"> {{ $s->id }} </div>
                                            <div class="hidden sector">{{ $sector }}</div>
                                            
                                         </button>
                                        {{-- <button type="button" 
                                            class="rounded-lg btn btn-sm delete-td flex justify-center items-center   hover:scale-125 duration-300 hover:bg-rose-400 hover:shadow-lg border-[2px] border-slate-500 bg-red-400 ">
                                            <div class="hidden section-id"> {{ $s->id }} </div>
                                            <div class="hidden sector">{{ $sector }}</div>
                                            
                                        </button> --}}
                                        <dialog id="my_modal_1" class="modal z-60">
                                            <div class="modal-box">
                                              <h3 class="font-bold text-lg">Hello!</h3>
                                              <p class="py-4">Do you rally want to delete this session ?</p>
                                              <div class="modal-action">
                                                <form action="">
                                                    <button class="btn btn-warning">Delete</button>
                                                </form>
                                                <form method="dialog">
                                                  <!-- if there is a button in form, it will close the modal -->
                                                  <button class="btn">Close</button>
                                                </form>
                                              </div>
                                            </div>
                                          </dialog>
                                        @if ($s->absented == 0)
                                            <button type="button" title="Mark as absented"
                                                class="btn btn-circle">
                                                <div class="hidden section-id">{{ $s->id }}</div>
                                                <div class="hidden sector">{{ $sector }}</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                                  </svg>
                                                  
                                            </button>
                                        @endif
                                    </div>
                                    </div>
                                @else
                                    @php
                                        $nextTime = $timing->id + 1;
                                    @endphp
                                    @if (
                                        ($timing->id == 1 || $timing->id == 2 || $timing->id == 4) &&
                                            $sessions->where('sessionable_type', 'App\\Models\\Section')->where('session_date', $date)->where('timing_id', $nextTime)->where('sessionable_id', $section->id)->where('session_type', 'td')->isEmpty() &&
                                            $sessions->where('sessionable_type', 'App\\Models\\Company')->where('session_date', $date)->where('timing_id', $nextTime)->where('sessionable_id', $company->id)->where('session_type', 'cour')->isEmpty() &&
                                            $sessions->where('sessionable_type', 'App\\Models\\Section')->where('session_date', $date)->where('timing_id', $nextTime)->where('sessionable_id', $section->id)->where('session_type', 'tp')->isEmpty())
                                        <button
                                            class="absolute form-display-button top-2 add-tp-button left-2 h-6 w-6 rounded-full bg-red-300 hover:cursor-pointer z-10">
                                        </button>
                                        <form action=""
                                            class="hidden section-form  tp-insert-form absolute    rounded-[20px] shadow-lg text-xl w-[300px] h-[350px] flex flex-col justify-around items-center bg-slate-50"
                                            style="top: 50px; left: 50px;z-index: 50;">
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
                                                class=" form-section  h-[80%] w-[100%] flex  flex-col justify-around items-center">
                                                <button
                                                    class="absolute top-4 right-4 tp-cancel-button   hover:scale-125 duration-200  h-6 w-6 rounded-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                                        viewBox="0 0 256 256" fill="currentColor">
                                                        <path
                                                            d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z" />
                                                    </svg>
                                                </button>
                                                <div>
                                                    <h2 class="text-xl">Session : TP </h2>
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
                                                            class="w-[150px] h-10 focus:h-fit focus:z-50 rounded-lg" multiple>
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
                                    @endif
                                    <div
                                        class="relative sectionparentofform h-[100%] flex justify-center items-center">

                                        <button
                                            class="flex form-display-button shadow-md hover:scale-125 duration-300  btn section-button items-center justify-center  rounded-full bg-slate-300 hover:bg-yellow-50 z-0">
                                            <img src="/svg/pen-thin.svg" class="h-6 w-6" alt="">
                                        </button>

                                        <form @submit.prevent="submit"
                                            class="section-form  0 hidden bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] absolute  rounded-[20px] shadow-lg text-xl w-[300px] h-[350px] flex flex-col justify-around items-center"
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
                    @if ($td == false && $tp == false)
                        <button
                            class="absolute hover:scale-125 hover:bg-slate-200 duration-300 form-display-button company-button z-0  top-4 right-4 cancel-button hover:cursor-pointer bg-slate-500 h-6 w-6 rounded-full">
                        </button>
                    @endif
                    <form @submit.prevent="submit"
                        class="hidden rounded-[20px] bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] shadow-lg flex flex-col space-y-3 pb-4 justify-start items-center text-xl w-[300px] h-[300px] company-form absolute"
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
