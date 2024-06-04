<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="h-full w-full p-10">
        <table class="table text-center table-zebra border-2 rounded-xl">
            <thead >
                $cell = $table->addCell(20);
        $cell->addText('Type');
            </thead>
            <tbody>
                @foreach ($additive->rectifications as $rectification)
                <tr class="table-row">
                    <td class="table-cell">Rectification</td>
                    <td class="table-cell">{{$rectification->session->session_date}}</td>
                    <td class="table-cell">{{$rectification->timing->session_start}}</td>
                    <td class="table-cell">{{$rectification->session->module->module}}</td>
                    <td class="table-cell">{{$rectification->session->teacher->teacher_name}}</td>
                    <td class="table-cell">{{$rectification->room->room}}</td>
                    @if ($rectification->session->sessionable->sessionable_type === 'App\\Models\\Section')
                          <td class="table-cell">{{$rectification->session->sessionable->section}}</td>
                    @else
                            <td class="table-cell">Compay : {{$rectification->session->sessionable->company->company}}</td>
                    @endif
                </tr>
                @endforeach
                @foreach ($additive->catchups as $catchup)
                    <tr class="table-row">
                        <td>Catch Up</td>
                        <td class="table-cell">{{ $catchup->catchup_date}}</td>
                        <td class="table-cell">{{ $catchup->timing->session_start}}</td>
                        <td class="table-cell">{{ $catchup->session->module->module}}</td>
                        <td class="table-cell">{{ $catchup->session->teacher->teacher_name}}</td>
                        <td class="table-cell">{{ $catchup->room->room}}</td>
                        @if ($catchup->session->sessionable_type === 'App\\Models\\Section')
                            <td class="table-cell">{{ $catchup->session->sessionable->section}}</td>
                        @else
                        <td class="table-cell">{{ $catchup->session->sessionable->company }}</td>
                        @endif
                        
                    </tr>
                @endforeach
                @foreach ($additive->additionals as $additional)
                    <tr class="table-row">
                        <td class="table-cell">Additional</td>
                        <td class="table-cell"> {{ $additional->additional_date }}</td>
                        <td class="table-cell"> {{ $additional->timing->session_start }} </td>
                        <td class="table-cell"> {{ $additional->module->module }} </td>
                        <td class="table-cell"> {{ $additional->teacher->teacher_name }} </td>
                        <td class="table-cell"> {{ $additional->room->room }} </td>
                        <td class="table-cell">
                            @foreach ($additional->sections as $section)
                                {{$section->section}},
                            @endforeach
                            @foreach ($additional->companies as $company)
                                {{$company->company}},
                            @endforeach      
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>