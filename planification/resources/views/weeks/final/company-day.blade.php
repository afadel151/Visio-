<table id="company-day">

    @php
        $sections = $company->sections;
        $sectionsC = $sections->count();
    @endphp
    @foreach ($timings as $timing)
            <tr>

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
                    <td colspan="3">

                        




                            <p>
                                {{ $c->teacher->teacher_name }} </p>


                            <p class=" font-normal">{{ $c->module->module }}</p>
                            <p class= " font-bold">{{ $c->room->room }}</p>

                        

                    </td>
                @else
                    @foreach ($sections as $section)
                       

                        @if ($sessions->where('sessionable_type', 'App\\Models\\Section')->where('session_date', $date)->where('timing_id', $timing->id)->where('sessionable_id', $section->id)->where('session_type', 'tp')->isNotEmpty())
                            <td rowspan="2">
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

                               



                                    @php
                                        $tpteachers = $tp->TpTeachers;
                                    @endphp
                                    
                                        @foreach ($tpteachers as $tpteacher)
                                            <p class="  text-xl  font-bold">
                                                {{ $tpteacher->teacher_name }} </p>
                                        @endforeach
                                    
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
                                <td>
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

                                        




                                            <p>
                                                {{ $s->teacher->teacher_name }}
                                            </p>
                                            </button>
                                            <p class="text-xl font-normal">{{ $s->module->module }}</p>
                                            <p class= "text-xl font-bold">{{ $s->room->room }}</p>

                                      
                                        @php
                                            $td = true;
                                        @endphp
                                  
                                       

                                    @endif
                                </td>
                            @endif
                        @endif
                    @endforeach
                @endif
            </tr>
       
    @endforeach

</table>
