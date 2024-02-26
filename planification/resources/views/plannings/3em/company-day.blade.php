<table class="h-[100%] w-[100%] " id="company-day">

    @php
        $sections = $company->sections;
    @endphp
    @foreach ($timings as $timing)
    <tr>
        @foreach ($sections as $section)
           <td class="text-center">
                    <button class="h-[30px] w-[60px] rounded-lg hover:bg-indigo-600 bg-indigo-300 toggle-form" >Ajouter</button>
            </td>
        @endforeach
    </tr>
    @endforeach

</table>
