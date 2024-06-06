@php
$sections = $company->sections;
$sectionsC = $sections->count();
@endphp
<table>

   
    <tr>
        
        <td colspan="{{ $company->sections->count() }}" class="text-center  ">
        
            {{ $company->company }}

        </td>
    </tr>
    <tr>
        
        @foreach ($company->sections as $section)
            <td>{{ $section->section }}</td>
        @endforeach
    </tr>
</table>