<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

    <title>@yield('title')</title>
</head>

<body class="h-[100vh] w-full p-0 m-0 relative overflow-hidden ">
    <img src="{{ asset('images/backg.jpg') }}" class="h-[100vh] w-screen bg-cover relative top-0 left-0 m-0 p-0" alt="">
    <div class="">
        <img src="{{ asset('images/tt.svg') }}" class="txt absolute bottom-[-60px] right-[-40px] h-[80%] w-[60%]"  alt="">
    </div>
    <div class="Logo absolute top-[10%] left-[10%] flex justify-center items-center">
        <img src="{{ asset('images/cube-transparent-fill.svg') }}" class="w-[80px]" alt="">
        <p class="font-[Nunito] font-bold text-6xl ">Planify</p>
    </div>
    <div class=" absolute top-2 left-2">
        <p></p>
        <p></p>
        <p></p>
    </div>
    <div class=" absolute bottom-[18%] left-[16%]">
        <button class="bg-indigo-600 p-2 rounded-lg text-white">Get Started</button>
    </div>
</body>

</html>
