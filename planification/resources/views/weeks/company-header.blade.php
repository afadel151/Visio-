@php
$sections = $company->sections;
$sectionsC = $sections->count();
@endphp
<table class="table"  style="width: calc({{ $sectionsC }}*140px) ;">

   
    <tr style="width: calc({{ $sectionsC }}*140px) ;">
        
        <td colspan="{{ $company->sections->count() }}" class="text-center  ">
        
            {{ $company->company }}

        </td>
    </tr>
    <tr style="width: calc({{ $sectionsC }}*140px) ;">
        
        @foreach ($company->sections as $section)
            <td class="text-center   b" class="w-[140px]">{{ $section->section }}</td>
        @endforeach
    </tr>
</table>