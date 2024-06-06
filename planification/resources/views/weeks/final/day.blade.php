<table >
    <tr >
        @php
            $timestamp = strtotime($date);
            $day = date('l', $timestamp);
        @endphp
        <td rowspan="5">{{ $day }}
            {{ $date }}</td>
        <td >{{ date('H:i', strtotime($timings[0]->session_start)) }} ->
            {{ date('H:i', strtotime($timings[0]->session_finish)) }} </td>
    </tr>
    <tr>
        <td >
            {{ date('H:i', strtotime($timings[1]->session_start)) }} ->
            {{ date('H:i', strtotime($timings[1]->session_finish)) }}
        </td>
    </tr>
    <tr>
        <td >
            {{ date('H:i', strtotime($timings[2]->session_start)) }} ->
            {{ date('H:i', strtotime($timings[2]->session_finish)) }}</td>
    </tr>
    <tr>
        <td >
            {{ date('H:i', strtotime($timings[3]->session_start)) }} ->
            {{ date('H:i', strtotime($timings[3]->session_finish)) }}
        </td>
    </tr>
    <tr>
        <td >
            {{ date('H:i', strtotime($timings[4]->session_start)) }} ->
            {{ date('H:i', strtotime($timings[4]->session_finish)) }}
        </td>
    </tr>
</table>
