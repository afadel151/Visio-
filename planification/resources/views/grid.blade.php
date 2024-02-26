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
    <div    class="grid grid-cols-5 grid-rows-29 gap-1" >
        @for ($i = 0; $i < 20; $i++)
            @include('grid_element')
        @endfor
    </div>
</body>
</html>