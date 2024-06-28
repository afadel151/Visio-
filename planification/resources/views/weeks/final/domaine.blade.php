<table>
    <tr>
        @if ($domaine == 'ST')
            <td  colspan="{{ $companies->where('sector','ST')->count() }}">Domaine Scientifique</td>
        @elseif($domaine == 'MI')
            <td   colspan="{{ $companies->where('sector','MI')->count() }}">Domaine Math</td>
        @else
        <td   colspan="{{ $companies->where('sector','PR')->count() }}">Domaine Preparatoire</td>
        @endif
    </tr>
    <tr>
        @foreach ($companies as $company)
            <td >
                @include('weeks.final.company-header',['company'=>$company])
            </td>
        @endforeach
    </tr>
</table>


