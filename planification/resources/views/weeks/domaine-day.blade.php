<table class="h-[100%] z-0 w-[100%]">
    <tr class="w-[100%]">
        @foreach ($companies as $company)
            <td class="">
                @include('weeks.company-day',['company' => $company , 'timings' => $timings, 'date' => $date, 'week_id'=>$week_id])
            </td>
        @endforeach
    </tr>
</table>