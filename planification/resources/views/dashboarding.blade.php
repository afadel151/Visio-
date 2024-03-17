@extends('default')
@section('content')
    @php
        $weeks = $global_week->weeks;
        foreach ($weeks as $week) {
            if ($week->battalion->battalion == 1) {
                $week_1 = $week;
            }
            if ($week->battalion->battalion == 2) {
                $week_2 = $week;
            }
            if ($week->battalion->battalion == 3) { 
                $week_3 = $week;
            }
        }
    @endphp
    <div class=" pl-10 h-screen overflow-scroll" >
        <div class=" w-[100%] flex justify-center items-center h-20">
            <p class="text-3xl font-bold">{{ date('Y-m-d') }}</p>
          
        </div>
        <div class="grid grid-cols-9 grid-rows-7 gap-6 h-screen w-[100%] mb-10  " style="width: calc(100% - 92px)">
            <div
                class="col-span-3  hover:shadow-2xl hover:border-slate-500 px-6 rounded-2xl shadow-2xl bg-slate-100 flex justify-between items-center col-start-1 row-start-2">
                <div class="text-2xl font-bold w-[50%]">2em AP: <span class="text-red-500">{{ $week_2->week_type }}</span>
                </div>
                <div class="flex w-[40%] justify-between items-center">
                    <div class="text-2xl font-bold text-blue-600"> S{{ $week_2->semester }}</div>
                    @if ($week_2->cc == true)
                        <div
                            class="h-10 w-10 bg-yellow-300 rounded-full text-xl font-bold flex justify-center items-center">
                            C
                        </div>
                    @endif
                    @if ($week_2->sport_exam == true)
                        <div class="h-10 w-10 bg-green-500 rounded-full text-xl font-bold flex justify-center items-center">
                            S
                        </div>
                    @endif
                    <a href="{{ route('weeks.show', $week_2->id) }}"
                        class="bg-indigo-400 rounded-lg h-8 w-10   hover:bg-indigo-50 hover:text-slate-900 font-mono text-2xl flex justify-center items-center">
                        >
                    </a>
                </div>
            </div>
            <div
                class="col-span-5  hover:shadow-2xl hover:border-slate-500 rounded-2xl shadow-xl bg-slate-100 flex justify-center items-center row-span-4 col-start-1 row-start-4">
                Graph des absences</div>
            <div
                class="col-span-3   hover:shadow-2xl hover:border-slate-500 rounded-2xl shadow-xl  bg-slate-100 flex justify-center items-center row-span-3 col-start-7 row-start-1">
                notes   
            </div>
            <div
                class="col-span-3 p-2  hover:shadow-2xl  hover:border-slate-500 rounded-2xl shadow-xl  bg-slate-100  row-span-3 col-start-4 row-start-1">
                <div class="flex flex-col justify-start   items-center">
                    <p class="text-2xl font-bold  ">Next Week</p>
                    <div class="flex flex-col justify-center items-center  space-y-3   w-[100%]">
                        <div class="flex justify-between px-8 items-center w-[90%] ">
                            <p class="text-2xl font-bold shadow-sm ">3rd Battalion : <span
                                    class="text-blue-500 font-normal">Cours</span></p>
                            <button class="bg-indigo-400 text-2xl  rounded-xl h-10 w-14">></button>
                        </div>
                        <div class="flex justify-between px-8 items-center w-[90%] ">
                            <p class="text-2xl font-bold shadow-sm ">2nd Battalion : <span
                                    class="text-blue-500 font-normal">Cours</span></p>
                            <button class="bg-indigo-400 text-2xl rounded-xl h-10 w-14">></button>
                        </div>
                        <div class="flex justify-between px-8 items-center w-[90%] ">
                            <p class="text-2xl font-bold shadow-sm ">1st Battalion : <span
                                    class="text-blue-500 font-normal">Cours</span></p>
                            <button class="bg-indigo-400 text-2xl rounded-xl h-10 w-14">></button>
                        </div>
                    </div>
                    <div class="flex justify-between mt-4 items-start w-[70%]">
                        <p class="text-xl font-bold shadow-sm w-[30%]">Events :</p>
                        <p class="text-wrap w-[70%]">Aid El Adha/hbcdhcbdchbc/cduceug</p>
                    </div>
                    <div class="flex  justify-start items-center w-[70%]">
                        <p class="text-xl font-bold shadow-sm w-[30%]">Sport :</p>
                        <p class="text-wrap w-[70%]">Aid El Adha/hbcdhcbdchbc/cduceug</p>
                    </div>
                </div>
            </div>
            <div
                class="col-span-3  hover:shadow-2xl hover:border-slate-500 px-6 rounded-2xl shadow-2xl bg-slate-100 flex justify-between items-center col-start-1 row-start-1">
                <div class="text-2xl font-bold w-[80%]">3em AP : <span class="text-red-500">{{ $week_3->week_type }}</span>
                </div>
                <div class="flex w-[30%]  justify-between items-center">
                    <div class="text-2xl font-bold text-blue-600"> S{{ $week_3->semester }}</div>
                    @if ($week_3->cc == true)
                        <div
                            class="h-10 w-10 bg-yellow-300 rounded-full text-xl font-bold flex justify-center items-center">
                            C
                        </div>
                    @endif
                    @if ($week_3->sport_exam == true)
                        <div class="h-10 w-10 bg-green-500 rounded-full text-xl font-bold flex justify-center items-center">
                            S
                        </div>
                    @endif
                    <a href="{{ route('weeks.show', $week_3->id) }}"
                        class="bg-indigo-400 rounded-lg h-8 w-10   hover:bg-indigo-50 hover:text-slate-900 font-mono text-2xl flex justify-center items-center">
                        >
                    </a>
                </div>
            </div>
            <div
                class="col-span-3  hover:shadow-2xl hover:border-slate-500 px-6 rounded-2xl shadow-2xl bg-slate-100 flex justify-between items-center col-start-1 row-start-3">
                <div class="text-2xl font-bold w-[50%]">1er AP : <span class="text-red-500">{{ $week_1->week_type }}</span>
                </div>
                <div class="flex w-[50%] justify-between items-center">
                    <div class="text-2xl font-bold text-blue-600"> S{{ $week_1->semester }}</div>
                    @if ($week_1->cc == true)
                        <div
                            class="h-10 w-10 bg-yellow-300 rounded-full text-xl font-bold flex justify-center items-center">
                            C
                        </div>
                    @endif
                    @if ($week_1->sport_exam == true)
                        <div class="h-10 w-10 bg-green-500 rounded-full text-xl font-bold flex justify-center items-center">
                            S
                        </div>
                    @endif
                    <a href="{{ route('weeks.show', $week_1->id) }}"
                        class="bg-indigo-400 rounded-lg h-8 w-10   hover:bg-indigo-50 hover:text-slate-900 font-mono text-2xl flex justify-center items-center">
                        >
                    </a>
                </div>
            </div>
            <div
                class="col-span-2  hover:shadow-2xl hover:border-slate-500 rounded-2xl shadow-2xl bg-slate-100 flex justify-center items-center row-span-2 col-start-6 row-start-4">
                25</div>
            <div
                class="col-span-2  hover:shadow-2xl hover:border-slate-500 rounded-2xl shadow-2xl bg-slate-100 flex justify-center items-center row-span-2 col-start-8 row-start-4">
                26</div>
            <div
                class="col-span-4  hover:shadow-2xl hover:border-slate-500 rounded-2xl shadow-2xl bg-slate-100 flex justify-center items-center row-span-2 col-start-6 row-start-6">
                Events</div>
        </div>
    </div>
@endsection
