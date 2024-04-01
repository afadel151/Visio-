<table class="w-[100%] table h-[800px] bg-base-100 bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] 
shadow-sm">
    <tr class="">
        @php
            $timestamp = strtotime($date);
            $day = date('l', $timestamp);
        @endphp
        <td rowspan="5" class=" w-[30%] text-center rotate-180 " style="writing-mode: vertical-lr;">{{ $day }}
            {{ $date }}</td>
        <td class="text-center  border-b-2">{{ date('H:i', strtotime($timings[0]->session_start)) }} ->
            {{ date('H:i', strtotime($timings[0]->session_finish)) }} </td>
    </tr>
    <tr>
        <td class="text-center  border-b-2">
            {{ date('H:i', strtotime($timings[1]->session_start)) }} ->
            {{ date('H:i', strtotime($timings[1]->session_finish)) }}
        </td>
    </tr>
    <tr>
        <td class="text-center  border-b-2">
            {{ date('H:i', strtotime($timings[2]->session_start)) }} ->
            {{ date('H:i', strtotime($timings[2]->session_finish)) }}</td>
    </tr>
    <tr>
        <td class="text-center  border-b-2">
            {{ date('H:i', strtotime($timings[3]->session_start)) }} ->
            {{ date('H:i', strtotime($timings[3]->session_finish)) }}
        </td>
    </tr>
    <tr>
        <td class="text-center  border-b-2">
            {{ date('H:i', strtotime($timings[4]->session_start)) }} ->
            {{ date('H:i', strtotime($timings[4]->session_finish)) }}
        </td>
    </tr>
</table>
