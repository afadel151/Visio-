<table class="w-[100%]">
    <tr>
        @if ($domaine == 'ST')
            <td class="text-center  bg-slate-200" colspan="{{ $companies->where('sector','ST')->count() }}">Domaine Scientifique</td>
        @else
            <td class="text-center  bg-slate-200"  colspan="{{ $companies->where('sector','MI')->count() }}">Domaine Math</td>
        @endif
    </tr>
    <tr>
        {{-- foreach company --}}
        @foreach ($companies as $company)
            <td class="text-center  h-[100%] " >
                @include('weeks.company-header',['company'=>$company])
            </td>
        @endforeach
    </tr>
</table>