<table class="h-[100%] z-0 w-[100%] border-2">
    <tr class="w-[100%]">
        @foreach ($companies as $company)
            <td class="border-l-2">
                @include('weeks.company-day', [
                    'company' => $company,
                    'sessions'=>$sessions,
                    'timings' => $timings,
                    'date' => $date,
                    'catchups' => $catchups,
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
