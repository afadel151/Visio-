
    <form action=""
                    class=" rounded-[20px] shadow-lg text-xl w-[300px] h-[300px] bg-white company-form absolute"
                    style="top: 10px; left: 10px;z-index: 50;">
                    <div class=" h-[100%] w-[100%] flex  flex-col justify-around items-center">
                        <a
                            class="absolute top-4 right-4 company-cancel-button hover:cursor-pointer  bg-slate-400 h-6 w-6 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                                <path
                                    d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z" />
                            </svg>
                        </a>
                        <div>
                            <h2 class="">Company : {{ $selectedCompany->company }} </h2>
                            <h2> {{ $selectedDate }}</h2>
                            <h2> {{ $selectedTiming->session_start }} -> {{ $selectedTiming->session_finish }}</h2>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-center items-center w-[100%]">
                                <label for="room" class="w-[100px]">Module</label>
                                <select name="" id="room" class="w-[100px] h-6 rounded-lg">
                                    {{-- DISPLAY MODULES  --}}
                                    @foreach ($selectedModules as $module)
                                        <option value="">{{ $module->module }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex justify-center items-center w-[100%]">
                                <label for="room" class="w-[100px]">Teacher</label>
                                <select name="" id="room" class="w-[100px] h-6 rounded-lg">
                                    {{-- DISPLAY TEACHERS ACCORDING TO THE MOODULE --}}
                                    @foreach ($selectedTeachers as $teacher)
                                        <option value="">
                                            {{ $teacher->teacher_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex justify-center items-center w-[100%]">
                                <label for="room" class="w-[100px]">Room</label>
                                <select name="" id="room" class="w-[100px] h-6 rounded-lg">
                                    {{-- DISPLAY ROOMS THAT ARE AVAILABLE --}}
                                    @foreach ($selectedRooms as $room)
                                        <option value="">{{ $room->room }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </form>

