<table class="w-[100%]">
    <tr>
        
        <td colspan="{{ $company->sections->count() }}" class="text-center  bg-slate-300">
        
            {{ $company->company }}

        </td>
    </tr>
    <tr>
        
        @foreach ($company->sections as $section)
            <td class="text-center   bg-slate-500" class="w-[100%]">{{ $section->section }}</td>
        @endforeach
    </tr>
</table>