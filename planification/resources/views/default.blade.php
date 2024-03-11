<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    @stack('header')
    
    <!-- Scripts -->
    @vite(['resources/css/app.css'])

    @vite('resources/css/sidebar.css')

    <title>Document</title>
</head>

<body class="z-0">
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>
    <div class="flex w-screen">
        <div class="w-[92px] h-screen sticky  top-0 z-10 ">
            @include('inc.sidebar',[ 'schoolyear_id' => $global_week->schoolyear_id])
        </div>
        <div class="w-[110%] z-0 flex justify-center items-center ">

            @yield('content')
        </div>
    </div>





    
    
    @vite('resources/js/sidebar.js')
    @stack('scripts')

</body>

</html>
