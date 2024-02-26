<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="p-0 ">
    <div class="h-[100px] flex justify-around items-center ">
        <div class="bg-indigo-300 rounded-xl h-20 text-center flex justify-center items-center w-[300px]"> Semester :
            {{ $week->semester }}</div>
        <div class="bg-indigo-300 rounded-xl h-20 text-center flex justify-center items-center w-[300px]"> Semaine :
            {{ $week->week_type }}</div>
        <div class="bg-indigo-300 rounded-xl h-20 text-center flex justify-center items-center w-[300px]">Du
            {{ $week->start_week_date }} au {{ $week->end_week_date }}</div>
    </div>
    <table class="" style="width: {{ $battalion->sections->count() }}00px">
        <tr>
            <td class=" w-[200px]" style="visibility: hidden">Domaine JCP</td>{{-- //vide --}}
            <td class="border-2  p-0">
                @php
                    $companies = $battalion->companies_ST;
                    $domaine = 'ST';
                @endphp
                @include('plannings.3em.domaine', ['companies' => $companies, 'domaine' => $domaine, 'week_id'=>$week->id])
            </td>
            <td class="border-2 p-0">
                @php
                    $companies = $battalion->companies_MI;
                    $domaine = 'MI';
                @endphp
                @include('plannings.3em.domaine', ['companies' => $companies, 'domaine' => $domaine, 'week_id'=>$week->id])
            </td>
        </tr>
        @php

            $date = $week->start_week_date;
        @endphp


        @for ($i = 0; $i < 5; $i++)
            <tr class="h-[400px]">
                @php
                    $date = date('Y-m-d', strtotime('+1 days', strtotime($date)));
                @endphp
                <td class="h-[400%] bg-indigo-50">
                    @include('plannings.3em.day', ['date' => $date, 'timings' => $timings])
                </td>
                @php
                    $companies = $battalion->companies_ST;
                @endphp
                <td class="h-[400px]">
                    @include('plannings.3em.domaine-day', [
                        'companies' => $companies,
                        'timings' => $timings,
                        'date' => $date,
                        'week_id' => $week->id,
                    ])
                </td>

                @php
                    $companies = $battalion->companies_MI;
                @endphp
                <td class="h-[400px] bg-indigo-50">
                    @include('plannings.3em.domaine-day', [
                        'companies' => $companies,
                        'timings' => $timings,
                        'date' => $date,
                        'week_id' => $week->id,
                    ])
                </td>
            </tr>
        @endfor

    </table>
   

</body>

</html>
