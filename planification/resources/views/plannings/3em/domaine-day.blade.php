<table class="h-[100%] w-[100%]">
    <tr>
        @foreach ($companies as $company)
            <td>
                @include('plannings.3em.company-day',['company' => $company , 'timings' => $timings, 'date' => $date, 'week_id'=>$week_id])
            </td>
        @endforeach
    </tr>
</table>