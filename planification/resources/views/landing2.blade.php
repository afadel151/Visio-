<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Document</title>
</head>

<body>
    <!-- Hero -->
    <div 
        class="relative h-[100%] overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:size-full before:-z-[1] before:transform before:-translate-x-1/2 ">
        <div class="absolute top-20 right-5 h-[200px] w-[300px]">
            <p
                class="text-6xl h-[100%] font-[700] bg-clip-text bg-gradient-to-tl from-blue-400 to-violet-400 text-transparent">
                <span id="element"></span>
            </p>
        </div>
        <div  class="  absolute  top-20 left-24  text-4xl font-bold">NEX<span
                class="text-xl bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent">CET</span>
        </div>

        <div class="mt-32 w-[80%] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">
            <!-- Announcement Banner -->
            <div class="flex justify-center">
                <a href="{{ route('schoolyears.show', 1) }}"
                    class="inline-flex items-center gap-x-2 bg-white border border-gray-200 text-sm text-gray-800 p-1 ps-3 rounded-full transition hover:border-gray-300 "
                    href="#">
                    
                    <span
                        class="py-1.5 px-2.5 inline-flex justify-center items-center gap-x-2 rounded-full bg-gray-200 font-semibold text-sm text-gray-600 ">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </span>
                </a>
            </div>
            <!-- End Announcement Banner -->

            <!-- Title -->
            <div class="mt-10 text-center "  >
                <h1  class="block  font-bold text-gray-800 text-9xl">
                    Let's Plan 
                    <span 
                        class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent">Together</span>
                </h1>
            </div>
            <!-- End Title -->

            <div class="mt-5 max-w-[50%] text-center mx-auto">
                <p class="text-lg text-gray-600 "
                    style="font-family: ui-sans-serif, system-ui, sans-serif,Apple Color Emoji,Segoe UI Emoji">Preline
                    UI is an open-source set of prebuilt UI components, ready-to-use examples and Figma design system
                    based on the utility-first Tailwind CSS framework.</p>
            </div>

            <!-- Buttons -->
            <div   class="mt-8 gap-3 flex justify-center">
                <a href="{{ route('dashboard') }}"
                    class="inline-flex h-12 w-40 justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 border border-transparent text-white text-sm font-medium rounded-md focus:outline-none focus:ring-1 focus:ring-gray-600 py-3 px-4 "
                    href="#">
                    Get started
                    <svg class="flex-shrink-0 size-4" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
            </div>
            <!-- End Buttons -->

            <div class="mt-5  flex justify-center items-center gap-x-1 sm:gap-x-3">
                <span class="text-sm text-gray-600 ">Maker:</span>
                <span class="text-sm font-bold text-gray-900 ">Fadel Akram</span>
                <svg class="size-5 text-gray-300 " width="16" height="16" viewBox="0 0 16 16"
                    fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round" />
                </svg>
                <a href="#docs"
                    class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium"
                    href="#">
                    using Guide
                    <svg class="flex-shrink-0 size-4" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="w-[80%] ml-[10%] h-screen" id="docs">
        @include('features')
    </div>
    <div class=" h-[800px] w-screen mt-32 flex justify-center">
        <div data-aos="fade-right" data-aos-duration="1500"  class="w-[100%]   py-12"> 
            <div class=" bg-opacity-50 backdrop-blur transition-shadow duration-100 [transform:translate3d(5,0,0)] 
              h-[70%] w-[60%] mr-12 mt-[10%] flex flex-col justify-around items-center space-y-3  float-right ">
                <div class="pl-10">
                  <p class="text-7xl w-full bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent font-bold">Calendar</p>
                  <p class="text-2xl mt-4 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, ratione repudiandae? Perspiciatis
                    eos in quia recusandae corrupti porro.</p>
                </div>
                <div class="pl-10 flex flex-col space-y-4">
                  <p class="text-xl font-bold  text-slate-600"><span class="text-3xl flex items-center  space-x-2 text-slate-950">
                    <svg xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    
                    <span>Fine-grained control</span></span> consectetur adipisicing elit. Illo, ratione repudiandae? Perspiciatis</p>
                  <p class="text-xl font-bold text-slate-600"><span class="text-3xl flex items-center  space-x-2 text-slate-950">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    
                    <span>Synchronisation</span></span> consectetur adipisicing elit. Illo, ratione repudiandae? Perspiciatis</p>
                  <p class="text-xl font-bold text-slate-600"><span class="text-3xl  flex items-center  space-x-2 text-slate-950">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                    </svg>
                    
                    <span>Flexibility</span> </span> consectetur adipisicing elit. Illo, ratione repudiandae? Perspiciatis</p>
                </div>
            </div>
        </div>
        <div data-aos="fade-left" data-aos-duration="1500"  class="w-[110%]  flex items-center p-4">
            <div class="mockup-window border bg-base-300 mr-4 ">
                <img src="/images/cap3.PNG" alt="">
            </div>

        </div>
    </div>
    <div class="h-[800px] w-screen mt-32 flex justify-center">
        <div data-aos="fade-right" data-aos-duration="1500"  class="w-[110%]  flex items-center p-4">
            <div class="mockup-window border bg-base-300 mr-4 ">
                <img src="/images/allteachers.PNG" alt="">
            </div>

        </div>
        <div data-aos="fade-left" data-aos-duration="1500"  class="w-[100%]   py-12"> 
            <div class=" bg-opacity-50 backdrop-blur transition-shadow duration-100 [transform:translate3d(5,0,0)] 
              h-[80%] w-[60%] ml-12  mt-[10%] flex flex-col justify-around items-center space-y-3  float-left ">
                <div class="pl-10">
                  <p class="text-7xl w-full bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent font-bold">Advanced DataTables</p>
                  <p class="text-2xl mt-4 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, ratione repudiandae? Perspiciatis
                    eos in quia recusandae corrupti porro.</p>
                </div>
                <div class="pl-10 flex flex-col space-y-4">
                  <p class="text-xl font-bold  text-slate-600"><span class="text-3xl flex items-center  space-x-2 text-slate-950">
                    <svg xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    
                    <span>Fine-grained control</span></span> consectetur adipisicing elit. Illo, ratione repudiandae? Perspiciatis</p>
                  <p class="text-xl font-bold text-slate-600"><span class="text-3xl flex items-center  space-x-2 text-slate-950">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    
                    <span>Synchronisation</span></span> consectetur adipisicing elit. Illo, ratione repudiandae? Perspiciatis</p>
                  <p class="text-xl font-bold text-slate-600"><span class="text-3xl  flex items-center  space-x-2 text-slate-950">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                    </svg>
                    
                    <span>Flexibility</span> </span> consectetur adipisicing elit. Illo, ratione repudiandae? Perspiciatis</p>
                </div>
            </div>
        </div>
        
    </div>
    <div
        class="tab-content bg-secondary w-[48rem] overflow-hidden max-w-none rounded-lg shadow-2xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0">
        <img src="/images/sync-settings.png" alt="Product screenshot" class="tab-pane active" width="1200"
            height="600" data-tab="tab-encryption">
        <img src="/images/sync-diff.png" alt="Product screenshot" class="tab-pane" width="1200" height="860"
            data-tab="tab-history">
        <img src="/images/sync-share.png" alt="Product screenshot" class="tab-pane" width="1200" height="860"
            data-tab="tab-collab">
    </div>
    </div>
    </div>
    </div>
    <!-- End Hero -->
    <!-- End Hero -->
    
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <script>
        var typed = new Typed('#element', {
            strings: ['1°RM', 'ENPEI.DZ', 'D.ETUDES', 'DPP'],
            typeSpeed: 200,
            loop: true,
            backSpeed: 60,
        });
    </script>
</body>

</html>
