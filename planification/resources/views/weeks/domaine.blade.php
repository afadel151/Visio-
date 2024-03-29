<table class="w-[100%] table  bg-base-200 bg-opacity-95 backdrop-blur transition-shadow duration-100 [transform:translate3d(5,0,0)] 
shadow-sm" style="z-index:60">
    <tr>
        @if ($domaine == 'ST')
            <td class="text-center  " colspan="{{ $companies->where('sector','ST')->count() }}">Domaine Scientifique</td>
        @else
            <td class="text-center  "  colspan="{{ $companies->where('sector','MI')->count() }}">Domaine Math</td>
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


