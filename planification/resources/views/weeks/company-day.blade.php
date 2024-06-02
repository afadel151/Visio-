<table class="h-[100%]  w-[100%] p-0 " id="company-day">

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
        @php
            $isRectifiedCour = false;
        @endphp
        @php
            $daysessions = $sessions
                ->where('sessionable_type', 'App\\Models\\Company')
                ->where('session_date', $date)
                ->where('sessionable_id', $company->id)
                ->where('session_type', 'cour');
            $rectificationsTimings = [];
            foreach ($daysessions as $daysession) {
                if ($daysession->rectification) {
                    array_push($rectificationsTimings, $daysession->rectification->timing_id);
                }
            }
            $isRectified = false;
            $HasControl = false;
            if (
                $company->controls
                    ->where('control_date', $date)
                    ->where('timing_id', $timing->id)
                    ->isNotEmpty()
            ) {
                $HasControl = true;
            }
        @endphp
        @if (in_array($timing->id, $rectificationsTimings))
            @php
                $isRectifiedCour = true;
            @endphp
        @endif

        @if ($isRectifiedCour == true || $HasControl == true)
            <tr class=" h-[160px] w-[100%] ">
                <td colspan="3">
                    <div class="card w-[100%] h-[100%] bg-base-200">
                        <div class="card-body items-center text-center">
                            @if ($isRectifiedCour == true)
                                <h2 class="card-title">Rectification Here!</h2>
                                @php
                                    $recty = $sessions
                                        ->where('sessionable_type', 'App\\Models\\Company')
                                        ->where('sessionable_id', $company->id)
                                        ->where('session_date', $date)
                                        ->where('rectified', 1)
                                        ->first();
                                    $time = $recty->timing;
                                    $roomRecty = $recty->room;
                                @endphp
                                <p> {{ $time->session_start }} -> {{ $time->session_finish }} in <span
                                        class="font-bold">{{ $roomRecty->room }}</span></p>
                            @elseif ($HasControl == true)
                                @php
                                    $controls = $company->controls
                                        ->where('control_date', $date)
                                        ->where('timing_id', $timing->id);
                                @endphp
                                <h2>Controls Here !</h2>
                                @foreach ($controls as $control)
                                    <p>{{ $control->teacher->teacher_name }} in {{ $control->room->room }}</p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </td>
            </tr>
        @elseif(
            $catchups->where('catchup_date', $date)->where('timing_id', $timing->id)->contains(function ($catchup) use ($company) {
                    if ($catchup->absence->absenceable_type === 'App\\Models\\Session') {
                        $session = $catchup->absence->absenceable;
                        $SessionCaught = $session;
                        return $session->sessionable_type === 'App\\Models\\Company' &&
                            $session->sessionable_id == $company->id;
                    }
                    return false;
                }))
            <div class="h-full w-full">
                Rattrapage d'une absence
            </div>
        @else
            <tr class="relative company-tr   h-[160px] w-[100%] border-b">

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
                    <td colspan="3" class=" z-0 session ">

                        <div
                            class="h-[150px] cours-div border-2 z-0 w-[100%] shadow-lg flex card  bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] 
                             flex-col rounded-xl justify-center items-center">
                            @if ($c->rectified == true && $c->absented == false)
                                <span class=" badge badge-accent">rectified</span>
                            @endif
                            @if ($c->absented == true && $c->rectified == false)
                                <span class=" badge badge-error">absented</span>
                            @endif
                            <div class="hidden company-id"> {{ $c->id }} </div>


                            <a href="{{ route('teachers.show', $c->teacher->id) }}">
                                <p class="btn text-xl px-2 rounded-xl font-bold">
                                    {{ $c->teacher->teacher_name }} </p>
                            </a>

                            <p class=" font-normal">{{ $c->module->module }}</p>
                            <p class= " font-bold">{{ $c->room->room }}</p>
                            <div class="flex updateformparent relative justify-center self-end  items-center space-x-2">
                                <button class="btn btn-circle delete-td hover:bg-rose-400" onclick="openModal(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>

                                </button>
                                <dialog class="modal z-60">
                                    <div class="modal-box">
                                        <h3 class="font-bold text-lg">Hello!</h3>
                                        <p class="py-4">Do you rally want to delete this session ?</p>

                                        <div class="modal-action flex ">

                                            <a href="{{ route('sessions.delete', ['id' => $c->id]) }}"
                                                class="btn btn-error delete-td">Delete</a>
                                            <form method="dialog">
                                                <!-- if there is a button in form, it will close the modal -->
                                                <button class="btn">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                                @if ($c->absented == 0)
                                    <button type="button" title="Mark as absented" onclick="openModal(this)"
                                        class="btn btn-circle request-td-absence">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                        </svg>

                                    </button>
                                    <dialog class="modal z-60">
                                        <div class="modal-box">
                                            <h3 class="font-bold text-lg">Hello!</h3>
                                            <p class="py-4">Do you rally want to make this session as
                                                absented ?</p>
                                            <div class="modal-action">

                                                <button class="btn btn-warning mark-td-absence">Delete
                                                    <div class="hidden section-id">{{ $c->id }}
                                                    </div>
                                                </button>

                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                @endif


                            </div>
                        </div>

                    </td>
                @else
                    @php
                        $isGlobalRectified = false;
                    @endphp
                    @php
                        $td = false;
                        $tp = false;
                    @endphp
                    @foreach ($sections as $section)
                        @php
                            $daysessions = $sessions
                                ->where('sessionable_type', 'App\\Models\\Section')
                                ->where('session_date', $date)
                                ->where('sessionable_id', $section->id)
                                ->where('session_type', 'td');
                            $rectificationsTimings = [];
                            foreach ($daysessions as $daysession) {
                                if ($daysession->rectification) {
                                    array_push($rectificationsTimings, $daysession->rectification->timing_id);
                                }
                            }
                            $isRectified = false;
                        @endphp
                        @if (in_array($timing->id, $rectificationsTimings))
                            @php
                                $isRectified = true;
                                $isGlobalRectified = true;
                            @endphp
                        @endif

                        @if ($sessions->where('sessionable_type', 'App\\Models\\Section')->where('session_date', $date)->where('timing_id', $timing->id)->where('sessionable_id', $section->id)->where('session_type', 'tp')->isNotEmpty())
                            <td rowspan="2" class="text-center  section-td session hover:z-20 ease-out    ">
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

                                <div
                                    class="h-[300px] shadow-xl  tp-div flex flex-col border-2 bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] rounded-xl justify-between items-center">
                                    @if ($tp->rectified == true)
                                        <span class=" badge badge-error">absented</span>
                                    @endif
                                    @if ($tp->absented == true && $tp->rectified == false)
                                        <span class=" badge badge-error">absented</span>
                                    @endif

                                    <div class="hidden section-id">{{ $tp->id }}</div>
                                    @php
                                        $tpteachers = $tp->TpTeachers;
                                    @endphp
                                    <div class="flex flex-col space-y-2 justify-around items-center w-[100%]">
                                        @foreach ($tpteachers as $tpteacher)
                                            <a href="{{ route('teachers.show', $tpteacher->id) }}" class=" btn btn-xs">
                                                <p class="  text-xl  font-bold">
                                                    {{ $tpteacher->teacher_name }} </p>
                                            </a>
                                        @endforeach
                                    </div>
                                    <p class="text-xl font-normal">{{ $tp->module->module }}</p>
                                    <p class= "text-xl font-bold">{{ $tp->room->room }}</p>
                                    <div class="flex  relative justify-center items-center mt-4 ">
                                        <button class="btn btn-circle delete-td hover:bg-rose-400"
                                            onclick="openModal(this)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                            </svg>

                                        </button>
                                        <dialog class="modal z-60">
                                            <div class="modal-box">
                                                <div role="tablist" class="tabs tabs-lifted">
                                                    <input type="radio" name="my_tabs_2" role="tab" class="tab"
                                                        aria-label="Delete" />
                                                    <div role="tabpanel"
                                                        class="tab-content bg-base-100  items-center border-base-300 rounded-box p-6">
                                                        Delete
                                                    
                                                        <a href="{{ route('sessions.delete', ['id' => $tp->id]) }}"
                                                            class="btn btn-error delete-td">Delete</a>
                                                    </div>
                                                    @if ($tp->absented == 0)
                                                        <input type="radio" name="my_tabs_2" role="tab"
                                                            class="tab" aria-label="Absence" checked />
                                                        <div role="tabpanel"
                                                            class="tab-content  bg-base-100 border-base-300 rounded-box p-6">
                                                            Mark Session Absence
                                                            <button class="btn btn-warning self-start mark-tp-absence">
                                                                Mark absence
                                                                <div class="section-id hidden">{{ $tp->id }}
                                                                </div>
                                                            </button>

                                                        </div>
                                                    @endif


                                                    <input type="radio" name="my_tabs_2" role="tab"
                                                        class="tab" aria-label="Teacher's absence" />
                                                    <div role="tabpanel"
                                                        class="tab-content  bg-base-100 border-base-300 rounded-box p-6">
                                                        Mark absence for a Teacher
                                                        @foreach ($tpteachers as $teacher)
                                                                <p class="text-xl mt-1"> {{$teacher->teacher_name}} <button class="btn ml-1 btn-square btn-destructive">Add</button></p>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                
                                                <div class="modal-action flex ">

                                                    
                                                    <form method="dialog">
                                                        <!-- if there is a button in form, it will close the modal -->
                                                        <button class="btn">Close</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </dialog>

                                    </div>
                                </div>
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

                                        <div
                                            class="h-[150px] shadow-lg  flex flex-col border-2 bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] rounded-xl justify-center items-center">

                                            @if ($s->rectified == true)
                                                <span class="indicator-item badge badge-secondary">rectified</span>
                                            @endif
                                            @if ($s->absented == true && $s->rectified == false)
                                                <span class=" badge badge-error">absented</span>
                                            @endif

                                            <div class="hidden section-id"> {{ $s->id }} </div>
                                            <button class="btn btn-sm">
                                                <a href="{{ route('teachers.show', $s->teacher->id) }}">
                                                    {{ $s->teacher->teacher_name }}
                                                </a>
                                            </button>
                                            <p class="text-xl font-normal">{{ $s->module->module }}</p>
                                            <p class= "text-xl font-bold">{{ $s->room->room }}</p>
                                            <div
                                                class="flex updateformparent relative justify-center items-center mt-4 ">
                                                <button class="btn btn-circle delete-td hover:bg-rose-400"
                                                    onclick="openModal(this)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>


                                                </button>
                                                <dialog class="modal z-60">
                                                    <div class="modal-box">
                                                        <h3 class="font-bold text-lg">Hello!</h3>
                                                        <p class="py-4">Do you rally want to delete this session ?
                                                        </p>
                                                        <div class="modal-action">

                                                            <a href="{{ route('sessions.delete', ['id' => $s->id]) }}"
                                                                class="btn btn-error delete-td">Delete</a>
                                                            <form method="dialog">
                                                                <!-- if there is a button in form, it will close the modal -->
                                                                <button class="btn">Close</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </dialog>
                                                @if ($s->absented == 0)
                                                    <button type="button" title="Mark as absented"
                                                        onclick="openModal(this)"
                                                        class="btn btn-circle request-td-absence">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                                        </svg>

                                                    </button>
                                                    <dialog class="modal z-60">
                                                        <div class="modal-box">
                                                            <h3 class="font-bold text-lg">Hello!</h3>
                                                            <p class="py-4">Do you rally want to make this session as
                                                                absented ?</p>
                                                            <div class="modal-action">

                                                                <button class="btn btn-warning mark-td-absence">Delete
                                                                    <div class="hidden section-id">{{ $s->id }}
                                                                    </div>
                                                                </button>

                                                                <form method="dialog">
                                                                    <!-- if there is a button in form, it will close the modal -->
                                                                    <button class="btn">Close</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </dialog>
                                                @endif
                                            </div>
                                        </div>
                                        @php
                                            $td = true;
                                        @endphp
                                    @elseif(
                                        $catchups->where('catchup_date', $date)->where('timing_id', $timing->id)->contains(function ($catchup) use ($section) {
                                                if ($catchup->absence->absenceable_type === 'App\\Models\\Session') {
                                                    $session = $catchup->absence->absenceable;
                                                    return $session->sessionable_type === 'App\\Models\\Section' &&
                                                        $session->sessionable_id == $section->id;
                                                }
                                                return false;
                                            }))
                                        <div class="h-full w-full">
                                            Rattrapage d'une absence
                                            Voir Additif
                                        </div>
                                    @else
                                        @php
                                            $nextTime = $timing->id + 1;

                                        @endphp
                                        @if (
                                            ($timing->id == 1 || $timing->id == 2 || $timing->id == 4) &&
                                                $sessions->where('sessionable_type', 'App\\Models\\Section')->where('session_date', $date)->where('timing_id', $nextTime)->where('sessionable_id', $section->id)->where('session_type', 'td')->isEmpty() &&
                                                $sessions->where('sessionable_type', 'App\\Models\\Company')->where('session_date', $date)->where('timing_id', $nextTime)->where('sessionable_id', $company->id)->where('session_type', 'cour')->isEmpty() &&
                                                $sessions->where('sessionable_type', 'App\\Models\\Section')->where('session_date', $date)->where('timing_id', $nextTime)->where('sessionable_id', $section->id)->where('session_type', 'tp')->isEmpty() &&
                                                $isRectified == false)
                                            <button
                                                class="absolute form-display-button top-2 add-tp-button left-2 btn btn-error  btn-xs btn-circle z-10"
                                                onclick="ShowTpForm(this)">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 4.5v15m7.5-7.5h-15" />
                                                </svg>

                                            </button>
                                            <form
                                                class="hidden section-form  tp-insert-form absolute    rounded-[20px] shadow-lg text-xl w-[300px] flex flex-col justify-around items-center bg-slate-50"
                                                style="top: 50px; left: 50px;z-index: 50;">
                                                <button onclick="HideTpForm(this)" type="button"
                                                    class="absolute top-4 right-4 tp-cancel-button   hover:scale-125 duration-200  h-6 w-6 rounded-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"
                                                        fill="currentColor">
                                                        <path
                                                            d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z" />
                                                    </svg>
                                                </button>
                                                <input type="hidden" class="date" name="date"
                                                    value="{{ $date }}">
                                                <input type="hidden" class="timing_id" name="timing_id"
                                                    value="{{ $timing->id }}">
                                                <input type="hidden" name="week_id" value="{{ $week_id }}">
                                                <input type="hidden" name="sessionable_type"
                                                    value="App\Models\Section">
                                                <input type="hidden" class="sessionable_id" name="sessionable_id"
                                                    value="{{ $section->id }}">
                                                <input type="hidden" name="session_type" value="tp">
                                                @if ($sector == 'MI')
                                                    <div class="sector hidden">MI</div>
                                                @elseif ($sector == 'ST')
                                                    <div class="sector hidden">ST</div>
                                                @else
                                                    <div class="sector hidden">PR</div>
                                                @endif
                                                <div
                                                    class=" form-section  py-4 w-[100%] flex  flex-col justify-around items-center">

                                                    <div>
                                                        <h2 class="text-xl">Session : TP </h2>
                                                        <h2 class=""> {{ $section->section }}</h2>
                                                        <h2> {{ $date }}</h2>
                                                        <h2> {{ $timing->session_start }} ->
                                                            {{ $timing->session_finish }}
                                                        </h2>
                                                    </div>
                                                    <div class="mb-4 selects space-y-2">
                                                        <div class="flex justify-center items-center w-[100%]">
                                                            <label for="module" class="w-[100px]">Module</label>
                                                            <select name="module_id" id="module"
                                                                class="select select-bordered">
                                                                {{-- DISPLAY MODULES  --}}
                                                                @foreach ($modules->where('nb_tps', '>', 0) as $module)
                                                                    <option value="{{ $module->id }}">
                                                                        {{ $module->module }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div
                                                            class="flex teachers-select justify-center items-center w-[100%]">
                                                            <label for="room" class="w-[100px]">Teacher</label>
                                                            <select name="teachers[]" id="room"
                                                                class="select select-multiple focus:h-56" multiple>

                                                                @foreach ($teachers->where('tp', true) as $teacher)
                                                                    <option value="{{ $teacher->id }}">
                                                                        {{ $teacher->teacher_name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="flex justify-center items-center ">
                                                            <label for="rooms" class="w-[100px]">Teacher</label>
                                                            <select name="room_id" class="select select-bordered">
                                                                @foreach ($rooms->where('capacity_teaching', '>=', $section->nb_students) as $room)
<option value="{{ $room->id }}">
                                                                        {{ $room->room }}
                                                                    </option>
@endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input value="submit"
                                                    class="h-10 btn   w-20 rounded-lg submit-tp  bg-slate-300 hover:bg-slate-50 hover:text-slate-800 hover:scale-110 duration-200 hover:border-slate-300 hover:cursor-pointer hover:border-2">

                                            </form>
                                            <div
                                                class="h-[300px] shadow-xl hidden result-tp   flex flex-col border-2 bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] rounded-xl justify-between items-center">

                                                <div
                                                    class="flex flex-col tp-teachers space-y-2 justify-around items-center w-[100%]">
                                                </div>
                                                <p class="text-xl font-normal module-p"></p>
                                                <p class= "text-xl font-bold room-p"></p>
                                                <div class="flex  relative justify-center items-center mt-4 ">
                                                    <button class="btn btn-circle delete-td hover:bg-rose-400"
                                                        onclick="openModal(this)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </button>
                                                    <dialog class="modal z-60">
                                                        <div class="modal-box">
                                                            <h3 class="font-bold text-lg">Hello!</h3>
                                                            <p class="py-4">Do you rally want to delete this session
                                                                ?</p>
                                                            <div class="modal-action">

                                                                <a class="btn btn-error delete-a">Delete</a>
                                                                <form method="dialog">
                                                                    <!-- if there is a button in form, it will close the modal -->
                                                                    <button class="btn">Close</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </dialog>

                                                </div>
                                            </div>
@endif

                                            @if ($isRectified)
<div class="rounded-xl w-[100%] h-[100%] bg-base-200">
                                                <div
                                                    class="flex w-[100%] h-[100%]  flex-col justify-center  text-center">
                                                    <h2 class="font-bold">Rectification Here!</h2>
                                                    @php
                                                        $Recty = $sessions
                                                            ->where('sessionable_type', 'App\\Models\\Section')
                                                            ->where('sessionable_id', $section->id)
                                                            ->where('session_date', $date)
                                                            ->where('rectified', 1)
                                                            ->first();
                                                        $time = $Recty->timing;
                                                        $roomRecty = $Recty->room;
                                                    @endphp
                                                    <p>{{ date('H:i', strtotime($time->session_start)) }} ->
                                                        {{ date('H:i', strtotime($time->session_finish)) }} <br>in
                                                        <span class="font-bold">{{ $roomRecty->room }}</span>
                                                    </p>
                                                </div>
                                            </div>
@else
<div
                                                class="relative sectionparentofform h-[100%] flex justify-center items-center">

                                                <button onclick="ShowTdForm(this)"
                                                    class=" form-display-button hover:scale-125 duration-300  btn section-button ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                    </svg>

                                                </button>

                                                <form @submit.prevent="submit"
                                                    class="section-form   hidden  absolute bg-base-200 card shadow-xl py-4   flex flex-col justify-around items-center"
                                                    style="top: 50px; left: 50px;z-index: 50;">
                                                    @csrf
                                                    <a onclick="HideTdForm(this)"
                                                        class="absolute top-4 right-4 section-cancel-button btn btn-circle btn-sm btn-ghost">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                        </svg>

                                                    </a>
                                                    <input type="hidden" class="date" name="date"
                                                        value="{{ $date }}">
                                                    <input type="hidden" class="timing_id" name="timing_id"
                                                        value="{{ $timing->id }}">
                                                    <input type="hidden" name="week_id"
                                                        value="{{ $week_id }}">
                                                    <input type="hidden" name="sessionable_type"
                                                        value="App\Models\Section">
                                                    <input type="hidden" name="sessionable_id"
                                                        value="{{ $section->id }}">
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

                                                        <div>
                                                            <h2 class=""> {{ $section->section }} students :
                                                                {{ $section->nb_students }}</h2>
                                                            <h2> {{ $date }}</h2>
                                                            <h2> {{ $timing->session_start }} ->
                                                                {{ $timing->session_finish }}
                                                            </h2>
                                                        </div>
                                                        <div class="mb-4 selects space-y-2">
                                                            <div class="flex justify-center items-center w-[100%]">
                                                                <label for="module" class="w-[100px]">Module</label>
                                                                <select name="module_id" id="module"
                                                                    class="select select-bordered">
                                                                    {{-- DISPLAY MODULES  --}}
                                                                    @foreach ($modules->where('nb_tds', '>', 0) as $module)
                                                                    <option value="{{ $module->id }}">
                                                                        {{ $module->module }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="flex justify-center items-center w-[100%]">
                                                            <label for="room" class="w-[100px]">Teacher</label>
                                                            <select name="teacher_id" class="select select-bordered">
                                                                @foreach ($teachers as $teacher)
                                                                    @if ($teacher->td == true)
                                                                        <option value="{{ $teacher->id }}">
                                                                            {{ $teacher->teacher_name }}
                                                                        </option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="flex justify-center items-center w-[100%]">
                                                            <label for="rooms" class="w-[100px]">Room</label>
                                                            <select name="room_id" class="select select-bordered">
                                                                @foreach ($rooms as $room)
                                                                    @if ($room->capacity_teaching >= $section->nb_students)
                                                                        <option value="{{ $room->id }}">
                                                                            {{ $room->room }}
                                                                        </option>
                                                                    @endif
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="submit" value="submit" class=" btn submit-td ">
                                            </form>

                                            </div>
                                            <div
                                                class="h-[150px] result hidden shadow-lg  flex flex-col border-2 bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] rounded-xl justify-center items-center">

                                                <a class="btn btn-sm teacher-a">
                                                </a>
                                                <p class="text-xl font-normal module-p"></p>
                                                <p class= "text-xl font-bold room-p"></p>
                                                <div
                                                    class="flex updateformparent relative justify-center items-center mt-4 ">
                                                    <button class="btn btn-circle delete-td hover:bg-rose-400"
                                                        onclick="openModal(this)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>


                                                    </button>
                                                    <dialog class="modal z-60">
                                                        <div class="modal-box">
                                                            <h3 class="font-bold text-lg">Hello!</h3>
                                                            <p class="py-4">Do you rally want to delete this session
                                                                ?
                                                            </p>
                                                            <div class="modal-action">

                                                                <a class="btn btn-error delete-a">Delete</a>
                                                                <form method="dialog">
                                                                    <!-- if there is a button in form, it will close the modal -->
                                                                    <button class="btn">Close</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </dialog>

                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                </td>
                            @endif
                        @endif
                    @endforeach
                    @if ($td == false && $tp == false && $isGlobalRectified == false)
                        <td class="parentofform absolute w-0 h-0  right-2 top-1 z-20">


                            <button onclick="ShowCourForm(this)"
                                class="absolute  form-display-button  z-0  top-1 right-1 btn-neutral btn btn-circle btn-sm ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>

                            </button>

                            <form @submit.prevent="submit"
                                class="hidden  flex flex-col space-y-3 justify-center items-center bg-base-200 card shadow-xl py-4 company-form absolute"
                                style="top: 10px; left: 10px;z-index: 50;" method="POST">
                                <a class="absolute top-4 right-4  btn btn-circle btn-sm btn-ghost"
                                    onclick="HideCourForm(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </a>
                                <input type="hidden" name="date" class="date" value="{{ $date }}">
                                <input type="hidden" name="timing_id" class="timing_id"
                                    value="{{ $timing->id }}">
                                <input type="hidden" name="week_id" value="{{ $week_id }}">
                                <input type="hidden" name="sessionable_type" value="App\Models\Company">
                                <input type="hidden" name="sessionable_id" value="{{ $company->id }}">
                                <input type="hidden" name="session_type" value="cour">
                                <div class="form-section h-[100%]  flex  flex-col justify-around items-center">
                                    <div>
                                        <h2 class="">Company : {{ $company->company }} </h2>
                                        <h2> {{ $date }}</h2>
                                        <h2> {{ $timing->session_start }} -> {{ $timing->session_finish }}</h2>
                                    </div>
                                    <div class="selects mb-4 space-y-2">
                                        <div class="flex justify-center items-center ">
                                            <label for="room" class="w-[100px]">Module</label>
                                            <select name="module_id" id="room" class="select select-bordered">
                                                @foreach ($modules->where('nb_cours', '>', 0) as $module)
                                                    <option value="{{ $module->id }}">{{ $module->module }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="flex justify-center items-center ">
                                            <label for="room" class="w-[100px]">Teacher</label>
                                            <select name="teacher_id" id="room" class="select select-bordered">
                                                @foreach ($teachers->where('cours', 1) as $teacher)
                                                    <option value="{{ $teacher->id }}">
                                                        {{ $teacher->teacher_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="flex justify-center items-center ">
                                            <label for="rooms" class="w-[100px]">Teacher</label>
                                            <select name="room_id" class="select select-bordered">
                                                @foreach ($rooms->where('capacity_teaching', '>=', $company->nb_students) as $room)
                                                    <option value="{{ $room->id }}">
                                                        {{ $room->room }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="submit" class=" submit-cour  btn">
                            </form>

                        </td>
                        <td class="result hidden" colspan="3">
                            <div
                                class="h-[150px] border-2 z-0 w-[100%] shadow-lg flex card  bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] 
                             flex-col rounded-xl justify-center items-center">
                                <a href="" class="btn teacher-a">
                                </a>

                                <p class=" font-normal module-p"></p>
                                <p class= " font-bold room-p"></p>
                                <div class="flex  relative justify-center self-end  items-center space-x-2">

                                    <button class="btn btn-circle delete-td hover:bg-rose-400"
                                        onclick="openModal(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>

                                    </button>
                                    <dialog id="my_modal_1" class="modal z-60">
                                        <div class="modal-box">
                                            <h3 class="font-bold text-lg">Hello!</h3>
                                            <p class="py-4">Do you rally want to delete this session ?</p>
                                            <div class="modal-action">
                                                <a href="" class="btn btn-error delete-a">Delete</a>
                                                <form method="dialog">
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                </div>
                            </div>
                        </td>
                    @endif
                @endif
            </tr>
        @endif
    @endforeach

</table>
