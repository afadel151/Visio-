@extends('default')
@section('content')
    
<div>
    <h1>School year : {{$schoolyear->schoolyear }}</h1>
    @php
        $global_weeks  = $schoolyear->global_weeks;
    @endphp
    <table>
        <th>
            <td></td>
            <td>1er annee</td>
            <td>2em annee</td>
            <td>3em annee</td>
            <td>evennement</td>
            <td>Sport</td>
        </th>
        @foreach ($global_weeks as $global_week)
            @php
                $weeks  = $global_week->weeks;
                $events  = $global_week->events;
                $sportevents  = $global_week->sport_events;
            @endphp
            <tr>
                <td>{{ $global_week->star_week_date }} -> {{  date('Y-m-d', strtotime('+4 days', strtotime($global_week->start_date)))  }}</td>
                @foreach ($weeks as $week)
                    <td>{{ $week->week_type }}</td>
                @endforeach
                <td> {{ $events }}</td>
                <td> {{ $sportevents }}</td>
            </tr>
        @endforeach
    </table>
</div> 
@endsection
