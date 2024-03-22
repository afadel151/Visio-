<table class="h-[100%] z-0 w-[100%]">
    <tr class="w-[100%]">
        @foreach ($companies as $company)
            <td class="">
                @include('weeks.company-day2', [
                    'company' => $company,
                    'sessions'=>$sessions,
                    'timings' => $timings,
                    'date' => $date,
                    'week_id' => $week_id,
                    'rooms' => $rooms,
                    'teachers' => $teachers,
                    'modules' => $modules,
                    'sector' => $company->sector,
                ])
            </td>
        @endforeach
    </tr>
</table>
