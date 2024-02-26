<table class="h-[100%] w-[100%] " id="company-day">

    @php
        $sections = $company->sections;
    @endphp
    @foreach ($timings as $timing)
    <tr>
        @foreach ($sections as $section)
           <td class="text-center">
                    {{-- {{ $section->sessions->where('week_id',$week_id)->where('timing_id',$timing->id) }} --}}
                    <button class="h-10 w-20 bg-indigo-400">Add</button>
            </td>
        @endforeach
    </tr>
    @endforeach

</table>
