<table>
    <tr >
        @foreach ($companies as $company)
            <td >
                @include('weeks.final.company-day', [
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
