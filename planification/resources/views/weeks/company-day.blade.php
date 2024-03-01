<table class="h-[100%] z-0 w-[100%]" id="company-day">

    @php
        $sections = $company->sections;
    @endphp
    @foreach ($timings as $timing)
        <tr class="w=[100%] relative">

            
            @foreach ($sections as $section)
                <td class="relative sectionparentofform  text-center  ">
                    <button
                        class="flex section-button items-center justify-center p-2 w-16 rounded-lg bg-slate-500 hover:bg-yellow-50 z-0">Add</button>
                    <form action=""
                        class="section-form  bg-slate-50 hidden absolute  rounded-[20px] shadow-lg text-xl w-[300px] h-[300px]"
                        style="top: 50px; left: 50px;z-index: 50;" method="post">
                        <div class=" h-[100%] w-[100%] flex  flex-col justify-around items-center">
                            <a
                                class="absolute top-4 right-4 section-cancel-button hover:cursor-pointer  bg-slate-400 h-6 w-6 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                                    <path
                                        d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z" />
                                </svg>
                            </a>
                            <div>
                                <h2 class=""> {{ $section->section }}</h2>
                                <h2> {{ $date }}</h2>
                                <h2> {{ $timing->session_start }} -> {{ $timing->session_finish }}</h2>
                            </div>
                            <div class="mb-4">
                                <div class="flex justify-center items-center w-[100%]">
                                    <label for="room" class="w-[100px]">Module</label>
                                    <select name="" id="room" class="w-[100px] h-6 rounded-lg">
                                        {{-- DISPLAY MODULES  --}}
                                        <option value="">A</option>
                                        <option value="">B</option>
                                        <option value="">C</option>
                                    </select>
                                </div>
                                <div class="flex justify-center items-center w-[100%]">
                                    <label for="room" class="w-[100px]">Teacher</label>
                                    <select name="" id="room" class="w-[100px] h-6 rounded-lg">
                                        {{-- DISPLAY TEACHERS ACCORDING TO THE MOODULE --}}
                                        <option value="">A</option>
                                        <option value="">B</option>
                                        <option value="">C</option>
                                    </select>
                                </div>
                                <div class="flex justify-center items-center w-[100%]">
                                    <label for="room" class="w-[100px]">Room</label>
                                    <select name="" id="room" class="w-[100px] h-6 rounded-lg">
                                        {{-- DISPLAY ROOMS THAT ARE AVAILABLE --}}
                                        <option value="">A</option>
                                        <option value="">B</option>
                                        <option value="">C</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </form>
                    
                </td>
            @endforeach
            <td class="parentofform relative">
                <button class="absolute company-button z-0  top-4 right-4 cancel-button hover:cursor-pointer bg-slate-400 h-6 w-6 rounded-full"></button>
                <form action="" class="hidden rounded-[20px] shadow-lg text-xl w-[300px] h-[300px] bg-white company-form absolute"  style="top: 50px; left: 50px;z-index: 50;">
                    <div class=" h-[100%] w-[100%] flex  flex-col justify-around items-center">
                        <a
                            class="absolute top-4 right-4 company-cancel-button hover:cursor-pointer  bg-slate-400 h-6 w-6 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                                <path
                                    d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z" />
                            </svg>
                        </a>
                        <div>
                            <h2 class="">Company : {{  $company->company }} </h2>
                            <h2> {{ $date }}</h2>
                            <h2> {{ $timing->session_start }} -> {{ $timing->session_finish }}</h2>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-center items-center w-[100%]">
                                <label for="room" class="w-[100px]">Module</label>
                                <select name="" id="room" class="w-[100px] h-6 rounded-lg">
                                    {{-- DISPLAY MODULES  --}}
                                    <option value="">A</option>
                                    <option value="">B</option>
                                    <option value="">C</option>
                                </select>
                            </div>
                            <div class="flex justify-center items-center w-[100%]">
                                <label for="room" class="w-[100px]">Teacher</label>
                                <select name="" id="room" class="w-[100px] h-6 rounded-lg">
                                    {{-- DISPLAY TEACHERS ACCORDING TO THE MOODULE --}}
                                    <option value="">A</option>
                                    <option value="">B</option>
                                    <option value="">C</option>
                                </select>
                            </div>
                            <div class="flex justify-center items-center w-[100%]">
                                <label for="room" class="w-[100px]">Room</label>
                                <select name="" id="room" class="w-[100px] h-6 rounded-lg">
                                    {{-- DISPLAY ROOMS THAT ARE AVAILABLE --}}
                                    <option value="">A</option>
                                    <option value="">B</option>
                                    <option value="">C</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </td>
        </tr>
    @endforeach

</table>
