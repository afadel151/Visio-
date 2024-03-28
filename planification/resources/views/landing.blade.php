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
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class=" w-screen  px-10 overflow-x-hidden">
    <style>
        body {
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: bold;
        }
    </style>
    <div class="flex flex-col w-[50%] h-screen justify-between ml-20">
        <div class="mt-24    text-4xl">NEX<span class="text-xl text-red-500">CET</span></div>
        <div class="mb-30 mt-16">
            <p class="text-7xl mb-6  text-wrap ">Easy , fast and simple tool to plan your entire <span
                    class="text-red-700">year !</span> </p>
            <p class="w-[80%] text-xl font-normal">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita
                eligendi earum ipsa tempora, autem a explicabo aperiam dolorum necessitatibus cumque eveniet magni
                corrupti, enim laudantium, perferendis ipsum hic beatae dignissimos. </p>
        </div>
        <div class="mb-[15%] ml-8 flex space-x-4 ">
           <a href="{{ route('dashboard') }}">
            <button class="text-slate-900 hover:before:bg-red  font-[700]  rounded-xl h-16 w-48 text-xl relative  overflow-hidden border-indigo-500  bg-indigo-500   shadow-2xl transition-all before:absolute before:bottom-0 hover:border-red-500 before:left-0 before:top-0 before:z-0 before:h-full before:w-0 before:bg-red-500 before:transition-all before:duration-500 hover:text-white hover:shadow-red-500 hover:before:left-0 hover:before:h-[100%] hover:before:w-full"><span class="relative z-10">Get started</span></button>
            </a> 
            <a href="#docs">
                <button class="relative flex h-16 rounded-xl  text-xl border-2 border-slate-700  font-[700] w-48 items-center justify-center overflow-hidden bg-slate-200 text-slate-900 shadow-2xl transition-all before:absolute hover:text-slate-200 before:h-0 before:w-0 before:rounded-full before:bg-slate-600 before:duration-500 before:ease-out hover:shadow-slate-800 hover:before:h-56 hover:before:w-56">
                    <span class="relative z-10">Documentation</span>
                </button>
            </a>
        </div>
    </div>
    
    <div class="absolute top-20 right-10 h-[200px] w-[300px]">
        <p class="text-6xl h-[100%] font-[700] text-slate-900"><span id="element"></span></p>
    </div >
    <div class="absolute right-[-10%] top-0 w-[66%] h-screen flex justify-center flex-col">
        <div class="  ">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    viewBox="0 0 1000 1000" xml:space="preserve">
        
                    <g transform="matrix(1 0 0 1 500 500)" id="324360">
                        <g style="" vector-effect="non-scaling-stroke">
                            <g transform="matrix(1 0 0 1 34.837 -88.151)" id="Vector" clip-path="url(#CLIPPATH_4)">
                                <clipPath id="CLIPPATH_4">
                                    <rect transform="matrix(1 0 0 1 -34.837 88.1511)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(177,180,196); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-331.337, -213.3489)"
                                    d="M 455.953 390.189 L 206.721 246.253 C 203.225 244.239 200.391 238.824 200.391 234.193 V 41.3054 C 200.391 36.6503 203.225 34.5036 206.721 36.4814 L 455.953 180.466 C 459.45 182.48 462.283 187.895 462.283 192.526 V 385.365 C 462.283 390.069 459.45 392.215 455.953 390.189 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 162.1175 85.7885)" id="Vector_2" clip-path="url(#CLIPPATH_5)">
                                <clipPath id="CLIPPATH_5">
                                    <rect transform="matrix(1 0 0 1 -162.1175 -85.7885)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(177,180,196); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-458.6175, -387.2885)"
                                    d="M 457.231 392.179 L 460.004 390.587 L 458.799 382.398 L 457.231 392.179 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -93.2455 -263.939)" id="Vector_3" clip-path="url(#CLIPPATH_6)">
                                <clipPath id="CLIPPATH_6">
                                    <rect transform="matrix(1 0 0 1 93.2455 263.939)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(177,180,196); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-203.2545, -37.561)"
                                    d="M 199.945 37.7114 L 202.658 36.1436 L 206.564 38.3747 C 206.564 38.3747 202.405 39.0018 202.308 38.9777 C 202.212 38.9535 199.945 37.7114 199.945 37.7114 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 32.5525 -86.8292)" id="Vector_4" clip-path="url(#CLIPPATH_7)">
                                <clipPath id="CLIPPATH_7">
                                    <rect transform="matrix(1 0 0 1 -32.5525 86.8291)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(228,231,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-329.0525, -214.6709)"
                                    d="M 453.675 391.515 L 204.43 247.579 C 200.934 245.553 198.101 240.138 198.101 235.519 V 42.6314 C 198.101 37.9642 200.934 35.8295 204.43 37.8074 L 453.675 181.78 C 457.171 183.794 460.004 189.221 460.004 193.84 V 386.727 C 460.004 391.382 457.171 393.529 453.675 391.515 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 32.113 -86.5776)" id="Vector_5" clip-path="url(#CLIPPATH_8)">
                                <clipPath id="CLIPPATH_8">
                                    <rect transform="matrix(1 0 0 1 -32.113 86.5776)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(214,216,229); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-328.613, -214.9224)"
                                    d="M 453.229 391.769 L 203.996 247.821 C 200.5 245.807 197.667 240.392 197.667 235.761 V 42.8855 C 197.667 38.2183 200.5 36.0716 203.996 38.0615 L 453.229 182.034 C 456.725 184.048 459.559 189.463 459.559 194.094 V 386.981 C 459.559 391.637 456.725 393.783 453.229 391.769 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 32.046 -90.7413)" id="Vector_6" clip-path="url(#CLIPPATH_9)">
                                <clipPath id="CLIPPATH_9">
                                    <rect transform="matrix(1 0 0 1 -32.046 90.7413)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-328.546, -210.7587)"
                                    d="M 456.134 380.034 L 200.825 232.589 L 200.958 43.6567 C 200.958 41.7151 202.32 40.9312 203.996 41.896 L 453.229 185.844 C 454.112 186.418 454.848 187.192 455.376 188.103 C 455.904 189.015 456.209 190.038 456.267 191.09 L 456.134 380.034 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 32.022 -90.8797)" id="Vector_7" clip-path="url(#CLIPPATH_10)">
                                <linearGradient id="SVGID_3" gradientUnits="userSpaceOnUse"
                                    gradientTransform="matrix(1 0 0 1 0 0)" x1="327.199" y1="292.994" x2="410.046"
                                    y2="148.882">
                                    <stop offset="21%" style="stop-color:rgb(255,255,255);stop-opacity: 0" />
                                    <stop offset="100%" style="stop-color:rgb(255,255,255);stop-opacity: 0.2" />
                                </linearGradient>
                                <clipPath id="CLIPPATH_10">
                                    <rect transform="matrix(1 0 0 1 -32.022 90.8797)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: url(#SVGID_3); fill-rule: nonzero; opacity: 0.5;"
                                    transform=" translate(-328.522, -210.6203)"
                                    d="M 456.11 379.89 L 200.801 232.456 L 200.934 43.5122 C 200.934 41.5826 202.296 40.7987 203.972 41.7635 L 453.205 185.724 C 454.089 186.299 454.825 187.075 455.353 187.989 C 455.881 188.903 456.186 189.928 456.243 190.982 L 456.11 379.89 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -65.0785 77.9285)" id="Vector_8" clip-path="url(#CLIPPATH_11)">
                                <clipPath id="CLIPPATH_11">
                                    <rect transform="matrix(1 0 0 1 65.0785 -77.9285)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(214,216,229); fill-rule: nonzero; opacity: 0.4;"
                                    transform=" translate(-231.4215, -379.4285)"
                                    d="M 265.243 503.831 L 16.0111 359.883 C 12.5147 357.869 12.9608 354.347 16.9997 352.008 L 183.958 255.588 C 187.997 253.261 194.098 253.007 197.594 255.021 L 446.827 398.957 C 450.323 400.983 449.889 404.505 445.85 406.833 L 278.891 503.313 C 274.889 505.592 268.752 505.845 265.243 503.831 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -59.6314 74.6293)" id="Vector_9" clip-path="url(#CLIPPATH_12)">
                                <clipPath id="CLIPPATH_12">
                                    <rect transform="matrix(1 0 0 1 59.6315 -74.6293)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(177,180,196); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-236.8685, -376.1293)"
                                    d="M 270.693 500.562 L 21.4606 356.614 C 17.9642 354.6 18.3982 351.079 22.4371 348.739 L 189.408 252.259 C 193.435 249.931 199.547 249.678 203.044 251.692 L 452.276 395.689 C 455.773 397.715 455.339 401.236 451.3 403.564 L 284.341 500.044 C 280.302 502.323 274.189 502.576 270.693 500.562 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -274.7622 49.5115)" id="Vector_10" clip-path="url(#CLIPPATH_13)">
                                <clipPath id="CLIPPATH_13">
                                    <rect transform="matrix(1 0 0 1 274.7622 -49.5115)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(177,180,196); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-21.7378, -351.0115)"
                                    d="M 19.0974 353.357 V 348.666 L 24.3782 350.873 L 19.0974 353.357 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 156.186 95.69)" id="Vector_11" clip-path="url(#CLIPPATH_14)">
                                <clipPath id="CLIPPATH_14">
                                    <rect transform="matrix(1 0 0 1 -156.186 -95.69)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(177,180,196); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-452.686, -397.19)"
                                    d="M 454.639 399.21 V 394.615 L 450.733 395.954 L 453.325 399.765 L 454.639 399.21 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -59.6314 70.6958)" id="Vector_12" clip-path="url(#CLIPPATH_15)">
                                <clipPath id="CLIPPATH_15">
                                    <rect transform="matrix(1 0 0 1 59.6315 -70.6958)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(228,231,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-236.8685, -372.1958)"
                                    d="M 270.693 496.595 L 21.4606 352.659 C 17.9642 350.645 18.3982 347.111 22.4371 344.783 L 189.408 248.364 C 193.435 246.024 199.547 245.771 203.044 247.797 L 452.276 391.733 C 455.773 393.747 455.339 397.281 451.3 399.608 L 284.341 496.028 C 280.302 498.367 274.189 498.621 270.693 496.595 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -59.6314 70.0885)" id="Vector_13" clip-path="url(#CLIPPATH_16)">
                                <clipPath id="CLIPPATH_16">
                                    <rect transform="matrix(1 0 0 1 59.6315 -70.0885)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(214,216,229); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-236.8685, -371.5885)"
                                    d="M 270.693 495.991 L 21.4606 352.043 C 17.9642 350.029 18.3982 346.508 22.4371 344.168 L 189.408 247.748 C 193.435 245.421 199.547 245.167 203.044 247.181 L 452.276 391.118 C 455.773 393.144 455.339 396.665 451.3 398.993 L 284.341 495.473 C 280.302 497.752 274.189 498.005 270.693 495.991 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -110.0077 -28.9175)" id="Vector_14" clip-path="url(#CLIPPATH_17)">
                                <clipPath id="CLIPPATH_17">
                                    <rect transform="matrix(1 0 0 1 110.0077 28.9175)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-186.4923, -272.5825)"
                                    d="M 184.778 280.274 L 173.168 273.569 C 172.227 273.026 172.348 272.074 173.433 271.435 L 184.513 265.043 C 185.073 264.732 185.699 264.555 186.339 264.528 C 186.979 264.501 187.617 264.623 188.202 264.886 L 199.813 271.591 C 200.753 272.134 200.645 273.099 199.547 273.726 L 188.467 280.118 C 187.908 280.432 187.282 280.609 186.642 280.637 C 186.001 280.664 185.362 280.54 184.778 280.274 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -93.5803 -19.4314)" id="Vector_15" clip-path="url(#CLIPPATH_18)">
                                <clipPath id="CLIPPATH_18">
                                    <rect transform="matrix(1 0 0 1 93.5803 19.4315)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-202.9197, -282.0685)"
                                    d="M 201.211 289.765 L 189.601 283.06 C 188.66 282.517 188.769 281.552 189.866 280.925 L 200.946 274.533 C 201.505 274.219 202.131 274.042 202.772 274.014 C 203.413 273.987 204.051 274.111 204.635 274.377 L 216.234 281.082 C 217.186 281.625 217.066 282.577 215.968 283.217 L 204.9 289.608 C 204.34 289.92 203.715 290.096 203.074 290.123 C 202.434 290.15 201.796 290.028 201.211 289.765 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -77.011 -9.841)" id="Vector_16" clip-path="url(#CLIPPATH_19)">
                                <clipPath id="CLIPPATH_19">
                                    <rect transform="matrix(1 0 0 1 77.011 9.8411)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-219.489, -291.6589)"
                                    d="M 217.825 299.353 L 206.167 292.66 C 205.226 292.105 205.347 291.152 206.432 290.525 L 217.512 284.121 C 218.072 283.809 218.698 283.634 219.339 283.609 C 219.98 283.583 220.618 283.71 221.201 283.977 L 232.811 290.67 C 233.752 291.225 233.631 292.178 232.546 292.805 L 221.466 299.209 C 220.912 299.513 220.295 299.684 219.663 299.709 C 219.031 299.734 218.402 299.612 217.825 299.353 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -60.7227 -0.4555)" id="Vector_17" clip-path="url(#CLIPPATH_20)">
                                <clipPath id="CLIPPATH_20">
                                    <rect transform="matrix(1 0 0 1 60.7227 0.4555)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-235.7773, -301.0445)"
                                    d="M 234.065 308.736 L 222.455 302.031 C 221.514 301.488 221.635 300.536 222.72 299.896 L 233.8 293.505 C 234.361 293.193 234.986 293.017 235.626 292.99 C 236.267 292.963 236.905 293.085 237.489 293.348 L 249.1 300.053 C 250.04 300.596 249.92 301.561 248.835 302.188 L 237.755 308.58 C 237.195 308.894 236.57 309.071 235.929 309.099 C 235.288 309.126 234.649 309.002 234.065 308.736 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -44.2958 9.0306)" id="Vector_18" clip-path="url(#CLIPPATH_21)">
                                <clipPath id="CLIPPATH_21">
                                    <rect transform="matrix(1 0 0 1 44.2957 -9.0305)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-252.2043, -310.5305)"
                                    d="M 250.486 318.227 L 238.888 311.522 C 237.935 310.979 238.056 310.014 239.153 309.387 L 250.221 302.995 C 250.783 302.681 251.41 302.504 252.053 302.476 C 252.696 302.449 253.336 302.573 253.922 302.839 L 265.521 309.544 C 266.473 310.087 266.353 311.039 265.255 311.679 L 254.188 318.07 C 253.625 318.382 252.998 318.558 252.355 318.585 C 251.713 318.612 251.073 318.49 250.486 318.227 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -27.8687 18.5175)" id="Vector_19" clip-path="url(#CLIPPATH_22)">
                                <clipPath id="CLIPPATH_22">
                                    <rect transform="matrix(1 0 0 1 27.8687 -18.5175)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-268.6313, -320.0175)"
                                    d="M 266.919 327.706 L 255.309 321.012 C 254.368 320.458 254.489 319.505 255.574 318.878 L 266.654 312.474 C 267.215 312.162 267.841 311.986 268.481 311.961 C 269.122 311.936 269.76 312.062 270.343 312.329 L 281.954 319.023 C 282.894 319.577 282.774 320.53 281.689 321.157 L 270.609 327.561 C 270.048 327.873 269.422 328.049 268.781 328.074 C 268.14 328.099 267.502 327.973 266.919 327.706 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -11.4417 27.9728)" id="Vector_20" clip-path="url(#CLIPPATH_23)">
                                <clipPath id="CLIPPATH_23">
                                    <rect transform="matrix(1 0 0 1 11.4417 -27.9728)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-285.0583, -329.4728)"
                                    d="M 283.328 337.197 L 271.742 330.443 C 270.789 329.901 270.91 328.948 272.007 328.309 L 283.075 321.917 C 283.638 321.606 284.265 321.429 284.907 321.402 C 285.55 321.375 286.19 321.497 286.776 321.76 L 298.375 328.465 C 299.327 329.008 299.207 329.973 298.11 330.6 L 287.042 336.992 C 286.483 337.317 285.855 337.506 285.21 337.541 C 284.564 337.577 283.919 337.459 283.328 337.197 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 4.9672 37.4896)" id="Vector_21" clip-path="url(#CLIPPATH_24)">
                                <clipPath id="CLIPPATH_24">
                                    <rect transform="matrix(1 0 0 1 -4.9673 -37.4895)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-301.4673, -338.9895)"
                                    d="M 299.773 346.689 L 288.151 339.984 C 287.198 339.441 287.319 338.476 288.416 337.849 L 299.484 331.457 C 300.043 331.143 300.669 330.965 301.31 330.938 C 301.951 330.911 302.589 331.035 303.173 331.3 L 314.784 338.006 C 315.736 338.548 315.616 339.501 314.518 340.14 L 303.439 346.532 C 302.881 346.839 302.26 347.014 301.624 347.041 C 300.988 347.068 300.355 346.948 299.773 346.689 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 21.4185 46.9802)" id="Vector_22" clip-path="url(#CLIPPATH_25)">
                                <clipPath id="CLIPPATH_25">
                                    <rect transform="matrix(1 0 0 1 -21.4185 -46.9801)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-317.9185, -348.4801)"
                                    d="M 316.206 356.168 L 304.596 349.474 C 303.656 348.92 303.776 347.967 304.861 347.34 L 315.941 340.948 C 316.5 340.631 317.125 340.452 317.767 340.425 C 318.408 340.397 319.047 340.523 319.63 340.791 L 331.241 347.496 C 332.181 348.039 332.061 348.992 330.976 349.619 L 319.896 356.023 C 319.335 356.335 318.709 356.511 318.068 356.536 C 317.427 356.561 316.79 356.435 316.206 356.168 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 37.8455 56.4679)" id="Vector_23" clip-path="url(#CLIPPATH_26)">
                                <clipPath id="CLIPPATH_26">
                                    <rect transform="matrix(1 0 0 1 -37.8455 -56.4679)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-334.3455, -357.9679)"
                                    d="M 332.627 365.659 L 321.029 358.954 C 320.077 358.411 320.197 357.458 321.294 356.819 L 332.362 350.427 C 332.925 350.115 333.553 349.939 334.196 349.914 C 334.838 349.889 335.478 350.015 336.063 350.283 L 347.662 356.976 C 348.614 357.531 348.494 358.483 347.397 359.11 L 336.329 365.502 C 335.767 365.816 335.14 365.994 334.497 366.021 C 333.854 366.049 333.214 365.924 332.627 365.659 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 54.2725 65.9561)" id="Vector_24" clip-path="url(#CLIPPATH_27)">
                                <clipPath id="CLIPPATH_27">
                                    <rect transform="matrix(1 0 0 1 -54.2725 -65.9561)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-350.7725, -367.4561)"
                                    d="M 349.06 375.151 L 337.45 368.445 C 336.51 367.902 336.63 366.95 337.715 366.311 L 348.795 359.919 C 349.356 359.608 349.981 359.431 350.621 359.404 C 351.262 359.377 351.9 359.499 352.484 359.762 L 364.095 366.467 C 365.035 367.01 364.915 367.963 363.83 368.602 L 352.75 374.994 C 352.189 375.305 351.564 375.481 350.924 375.508 C 350.283 375.536 349.645 375.413 349.06 375.151 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 70.6995 75.4434)" id="Vector_25" clip-path="url(#CLIPPATH_28)">
                                <clipPath id="CLIPPATH_28">
                                    <rect transform="matrix(1 0 0 1 -70.6995 -75.4433)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-367.1995, -376.9433)"
                                    d="M 365.481 384.629 L 353.883 377.936 C 352.931 377.381 353.051 376.428 354.148 375.801 L 365.216 369.409 C 365.778 369.095 366.405 368.918 367.048 368.89 C 367.691 368.863 368.331 368.987 368.917 369.253 L 380.516 375.958 C 381.468 376.501 381.348 377.453 380.251 378.081 L 369.183 384.484 C 368.62 384.797 367.992 384.972 367.349 384.997 C 366.706 385.023 366.067 384.896 365.481 384.629 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 87.1301 84.9319)" id="Vector_26" clip-path="url(#CLIPPATH_29)">
                                <clipPath id="CLIPPATH_29">
                                    <rect transform="matrix(1 0 0 1 -87.1301 -84.9319)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-383.6301, -386.4319)"
                                    d="M 381.914 394.121 L 370.316 387.415 C 369.364 386.873 369.484 385.92 370.581 385.293 L 381.649 378.889 C 382.21 378.577 382.836 378.401 383.477 378.376 C 384.118 378.351 384.755 378.477 385.339 378.744 L 396.949 385.438 C 397.889 385.992 397.781 386.945 396.684 387.572 L 385.604 393.964 C 385.045 394.281 384.419 394.46 383.778 394.487 C 383.137 394.515 382.498 394.389 381.914 394.121 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 107.5602 96.7035)" id="Vector_27" clip-path="url(#CLIPPATH_30)">
                                <clipPath id="CLIPPATH_30">
                                    <rect transform="matrix(1 0 0 1 -107.5602 -96.7035)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-404.0602, -398.2035)"
                                    d="M 406.305 408.183 L 386.785 396.907 C 385.845 396.364 385.953 395.412 387.051 394.772 L 398.131 388.381 C 398.691 388.069 399.316 387.893 399.957 387.866 C 400.597 387.839 401.235 387.961 401.82 388.224 L 421.339 399.5 C 422.28 400.043 422.159 400.995 421.074 401.635 L 409.994 408.026 C 409.434 408.338 408.808 408.514 408.168 408.541 C 407.528 408.568 406.89 408.446 406.305 408.183 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -101.5643 -5.6505)" id="Vector_28" clip-path="url(#CLIPPATH_31)">
                                <clipPath id="CLIPPATH_31">
                                    <rect transform="matrix(1 0 0 1 101.5643 5.6505)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-194.9357, -295.8495)"
                                    d="M 193.23 303.538 L 181.619 296.845 C 180.667 296.29 180.787 295.337 181.885 294.71 L 192.952 288.306 C 193.515 287.994 194.143 287.818 194.786 287.793 C 195.429 287.768 196.069 287.894 196.654 288.161 L 208.252 294.855 C 209.205 295.409 209.084 296.362 207.987 296.989 L 196.919 303.393 C 196.359 303.705 195.733 303.881 195.092 303.906 C 194.451 303.931 193.813 303.805 193.23 303.538 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -85.107 3.8445)" id="Vector_29" clip-path="url(#CLIPPATH_32)">
                                <clipPath id="CLIPPATH_32">
                                    <rect transform="matrix(1 0 0 1 85.107 -3.8445)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-211.393, -305.3445)"
                                    d="M 209.675 313.042 L 198.077 306.324 C 197.124 305.769 197.245 304.817 198.342 304.189 L 209.41 297.786 C 209.972 297.474 210.6 297.298 211.243 297.273 C 211.886 297.248 212.526 297.374 213.111 297.641 L 224.709 304.334 C 225.662 304.889 225.541 305.842 224.444 306.469 L 213.4 312.897 C 212.835 313.213 212.202 313.391 211.555 313.416 C 210.908 313.441 210.263 313.313 209.675 313.042 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -68.65 13.3572)" id="Vector_30" clip-path="url(#CLIPPATH_33)">
                                <clipPath id="CLIPPATH_33">
                                    <rect transform="matrix(1 0 0 1 68.65 -13.3571)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-227.85, -314.8571)"
                                    d="M 226.132 322.545 L 214.534 315.851 C 213.581 315.297 213.702 314.344 214.799 313.717 L 225.867 307.325 C 226.427 307.008 227.055 306.829 227.699 306.802 C 228.342 306.774 228.983 306.9 229.568 307.168 L 241.166 313.874 C 242.119 314.416 241.998 315.369 240.901 315.996 L 229.833 322.4 C 229.271 322.712 228.643 322.888 228 322.913 C 227.357 322.938 226.717 322.812 226.132 322.545 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -52.1927 22.8624)" id="Vector_31" clip-path="url(#CLIPPATH_34)">
                                <clipPath id="CLIPPATH_34">
                                    <rect transform="matrix(1 0 0 1 52.1927 -22.8623)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-244.3073, -324.3623)"
                                    d="M 242.589 332.048 L 230.991 325.355 C 230.038 324.8 230.159 323.847 231.256 323.22 L 242.324 316.828 C 242.886 316.514 243.513 316.337 244.156 316.309 C 244.799 316.282 245.439 316.406 246.025 316.672 L 257.624 323.377 C 258.576 323.92 258.456 324.872 257.359 325.5 L 246.291 331.903 C 245.728 332.216 245.1 332.391 244.457 332.416 C 243.814 332.442 243.175 332.315 242.589 332.048 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -35.8683 32.2897)" id="Vector_32" clip-path="url(#CLIPPATH_35)">
                                <clipPath id="CLIPPATH_35">
                                    <rect transform="matrix(1 0 0 1 35.8683 -32.2896)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-260.6317, -333.7896)"
                                    d="M 258.914 341.478 L 247.315 334.773 C 246.363 334.23 246.483 333.278 247.581 332.65 L 258.649 326.247 C 259.211 325.934 259.839 325.759 260.482 325.734 C 261.125 325.708 261.765 325.835 262.35 326.102 L 273.948 332.795 C 274.901 333.35 274.78 334.303 273.683 334.93 L 262.615 341.322 C 262.054 341.638 261.427 341.818 260.783 341.845 C 260.14 341.872 259.499 341.747 258.914 341.478 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -19.411 41.7575)" id="Vector_33" clip-path="url(#CLIPPATH_36)">
                                <clipPath id="CLIPPATH_36">
                                    <rect transform="matrix(1 0 0 1 19.4109 -41.7575)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-277.0891, -343.2575)"
                                    d="M 275.371 350.946 L 263.773 344.253 C 262.82 343.698 262.941 342.745 264.038 342.118 L 275.106 335.714 C 275.668 335.402 276.296 335.227 276.939 335.201 C 277.582 335.176 278.222 335.302 278.807 335.57 L 290.406 342.263 C 291.358 342.818 291.237 343.77 290.14 344.398 L 279.072 350.801 C 278.51 351.114 277.882 351.289 277.239 351.314 C 276.596 351.339 275.956 351.213 275.371 350.946 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -2.954 51.2966)" id="Vector_34" clip-path="url(#CLIPPATH_37)">
                                <clipPath id="CLIPPATH_37">
                                    <rect transform="matrix(1 0 0 1 2.9539 -51.2966)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-293.5461, -352.7966)"
                                    d="M 291.828 360.485 L 280.23 353.792 C 279.277 353.237 279.398 352.284 280.495 351.657 L 291.563 345.253 C 292.125 344.941 292.753 344.766 293.396 344.74 C 294.039 344.715 294.679 344.841 295.264 345.109 L 306.863 351.802 C 307.815 352.357 307.694 353.309 306.597 353.937 L 295.529 360.34 C 294.967 360.653 294.339 360.828 293.696 360.853 C 293.053 360.879 292.413 360.752 291.828 360.485 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 13.5032 60.8005)" id="Vector_35" clip-path="url(#CLIPPATH_38)">
                                <clipPath id="CLIPPATH_38">
                                    <rect transform="matrix(1 0 0 1 -13.5033 -60.8005)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-310.0033, -362.3005)"
                                    d="M 308.285 369.989 L 296.687 363.296 C 295.734 362.741 295.855 361.788 296.952 361.161 L 308.02 354.757 C 308.58 354.445 309.206 354.269 309.847 354.244 C 310.488 354.219 311.126 354.345 311.709 354.612 L 323.32 361.306 C 324.272 361.861 324.152 362.813 323.054 363.44 L 311.986 369.844 C 311.424 370.156 310.796 370.332 310.153 370.357 C 309.51 370.382 308.87 370.256 308.285 369.989 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 29.9581 70.3035)" id="Vector_36" clip-path="url(#CLIPPATH_39)">
                                <clipPath id="CLIPPATH_39">
                                    <rect transform="matrix(1 0 0 1 -29.9581 -70.3035)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-326.4581, -371.8035)"
                                    d="M 324.742 379.492 L 313.144 372.799 C 312.192 372.244 312.312 371.291 313.409 370.664 L 324.477 364.26 C 325.038 363.948 325.664 363.772 326.305 363.747 C 326.945 363.722 327.583 363.848 328.166 364.115 L 339.777 370.821 C 340.717 371.363 340.609 372.316 339.512 372.943 L 328.432 379.347 C 327.871 379.659 327.245 379.835 326.604 379.86 C 325.963 379.885 325.326 379.759 324.742 379.492 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 46.4135 79.8096)" id="Vector_37" clip-path="url(#CLIPPATH_40)">
                                <clipPath id="CLIPPATH_40">
                                    <rect transform="matrix(1 0 0 1 -46.4135 -79.8096)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-342.9135, -381.3096)"
                                    d="M 341.2 388.995 L 329.589 382.302 C 328.649 381.747 328.769 380.794 329.854 380.167 L 340.934 373.776 C 341.494 373.462 342.119 373.284 342.76 373.257 C 343.401 373.229 344.04 373.353 344.624 373.619 L 356.234 380.324 C 357.174 380.867 357.066 381.82 355.969 382.447 L 344.889 388.851 C 344.328 389.163 343.702 389.338 343.061 389.363 C 342.421 389.388 341.783 389.262 341.2 388.995 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 62.8445 89.3096)" id="Vector_38" clip-path="url(#CLIPPATH_41)">
                                <clipPath id="CLIPPATH_41">
                                    <rect transform="matrix(1 0 0 1 -62.8445 -89.3096)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-359.3445, -390.8096)"
                                    d="M 357.657 398.498 L 346.022 391.805 C 345.082 391.25 345.202 390.297 346.287 389.67 L 357.367 383.278 C 357.927 382.965 358.552 382.787 359.193 382.76 C 359.834 382.732 360.472 382.856 361.056 383.122 L 372.667 389.827 C 373.607 390.37 373.487 391.322 372.402 391.95 L 361.322 398.353 C 360.764 398.662 360.143 398.835 359.506 398.86 C 358.87 398.885 358.237 398.761 357.657 398.498 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 79.3259 98.8176)" id="Vector_39" clip-path="url(#CLIPPATH_42)">
                                <clipPath id="CLIPPATH_42">
                                    <rect transform="matrix(1 0 0 1 -79.3259 -98.8175)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-375.8259, -400.3175)"
                                    d="M 374.114 408.014 L 362.503 401.309 C 361.563 400.754 361.684 399.801 362.769 399.174 L 373.849 392.782 C 374.408 392.468 375.034 392.291 375.675 392.263 C 376.315 392.236 376.954 392.36 377.538 392.626 L 389.148 399.331 C 390.089 399.874 389.968 400.826 388.883 401.466 L 377.803 407.857 C 377.243 408.169 376.617 408.345 375.977 408.372 C 375.337 408.399 374.699 408.277 374.114 408.014 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -121.9757 -17.4391)" id="Vector_40" clip-path="url(#CLIPPATH_43)">
                                <clipPath id="CLIPPATH_43">
                                    <rect transform="matrix(1 0 0 1 121.9758 17.4391)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-174.5242, -284.0609)"
                                    d="M 176.773 294.034 L 157.253 282.77 C 156.301 282.216 156.421 281.263 157.518 280.636 L 168.586 274.244 C 169.147 273.927 169.775 273.748 170.418 273.72 C 171.061 273.693 171.702 273.819 172.288 274.087 L 191.795 285.351 C 192.748 285.906 192.627 286.859 191.53 287.486 L 180.462 293.89 C 179.901 294.202 179.275 294.377 178.635 294.402 C 177.994 294.428 177.356 294.301 176.773 294.034 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 89.8594 112.863)" id="Vector_41" clip-path="url(#CLIPPATH_44)">
                                <clipPath id="CLIPPATH_44">
                                    <rect transform="matrix(1 0 0 1 -89.8594 -112.863)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-386.3594, -414.363)"
                                    d="M 405.461 408.834 L 393.863 402.141 C 393.328 401.87 392.737 401.729 392.138 401.729 C 391.54 401.729 390.949 401.87 390.414 402.141 L 378.707 408.834 C 378.499 408.904 378.318 409.037 378.189 409.216 C 378.061 409.394 377.992 409.609 377.992 409.829 C 377.992 410.049 378.061 410.263 378.189 410.442 C 378.318 410.62 378.499 410.754 378.707 410.824 L 379.636 411.354 C 379.829 411.418 379.997 411.541 380.116 411.705 C 380.235 411.87 380.299 412.068 380.299 412.271 C 380.299 412.474 380.235 412.672 380.116 412.837 C 379.997 413.001 379.829 413.124 379.636 413.188 L 367.266 420.327 C 366.301 420.882 366.301 421.774 367.266 422.317 L 374.657 426.586 C 375.191 426.856 375.782 426.997 376.381 426.997 C 376.98 426.997 377.57 426.856 378.105 426.586 L 389.667 419.905 L 392.078 418.518 L 393.802 417.529 L 395.538 416.528 L 405.509 410.763 C 406.401 410.221 406.413 409.34 405.461 408.834 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -173.6321 7.9014)" id="Vector_42" clip-path="url(#CLIPPATH_45)">
                                <clipPath id="CLIPPATH_45">
                                    <rect transform="matrix(1 0 0 1 173.6321 -7.9015)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-122.8679, -309.4015)"
                                    d="M 121.156 317.094 L 109.545 310.388 C 108.605 309.846 108.726 308.893 109.811 308.254 L 120.891 301.862 C 121.451 301.551 122.076 301.375 122.717 301.347 C 123.357 301.32 123.995 301.443 124.58 301.705 L 136.19 308.411 C 137.131 308.965 137.01 309.918 135.925 310.545 L 124.845 316.937 C 124.286 317.251 123.66 317.429 123.019 317.456 C 122.378 317.483 121.74 317.359 121.156 317.094 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -157.2533 17.3636)" id="Vector_43" clip-path="url(#CLIPPATH_46)">
                                <clipPath id="CLIPPATH_46">
                                    <rect transform="matrix(1 0 0 1 157.2533 -17.3635)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-139.2467, -318.8635)"
                                    d="M 137.529 326.56 L 125.93 319.855 C 124.978 319.3 125.098 318.347 126.196 317.72 L 137.264 311.328 C 137.825 311.014 138.453 310.837 139.096 310.809 C 139.738 310.782 140.379 310.906 140.965 311.172 L 152.563 317.877 C 153.516 318.42 153.395 319.372 152.298 320.012 L 141.23 326.403 C 140.668 326.715 140.04 326.891 139.398 326.918 C 138.756 326.945 138.116 326.823 137.529 326.56 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -140.9165 26.8175)" id="Vector_44" clip-path="url(#CLIPPATH_47)">
                                <clipPath id="CLIPPATH_47">
                                    <rect transform="matrix(1 0 0 1 140.9165 -26.8175)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-155.5835, -328.3175)"
                                    d="M 153.914 336.016 L 142.267 329.31 C 141.315 328.768 141.435 327.815 142.532 327.176 L 153.6 320.784 C 154.161 320.473 154.786 320.297 155.426 320.269 C 156.067 320.242 156.705 320.365 157.289 320.627 L 168.9 327.333 C 169.852 327.875 169.732 328.84 168.635 329.467 L 157.567 335.859 C 157.011 336.165 156.392 336.339 155.759 336.366 C 155.125 336.393 154.493 336.273 153.914 336.016 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -1.3665 107.3892)" id="Vector_45" clip-path="url(#CLIPPATH_48)">
                                <clipPath id="CLIPPATH_48">
                                    <rect transform="matrix(1 0 0 1 1.3665 -107.3891)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-295.1335, -408.8891)"
                                    d="M 293.42 416.577 L 281.809 409.884 C 280.869 409.329 280.989 408.376 282.074 407.749 L 293.154 401.357 C 293.713 401.04 294.339 400.861 294.98 400.834 C 295.621 400.806 296.26 400.932 296.844 401.2 L 308.454 407.906 C 309.394 408.448 309.286 409.401 308.189 410.028 L 297.109 416.432 C 296.548 416.744 295.922 416.92 295.281 416.945 C 294.641 416.97 294.003 416.844 293.42 416.577 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 15.0647 116.8519)" id="Vector_46" clip-path="url(#CLIPPATH_49)">
                                <clipPath id="CLIPPATH_49">
                                    <rect transform="matrix(1 0 0 1 -15.0647 -116.8519)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-311.5647, -418.3519)"
                                    d="M 309.853 426.044 L 298.242 419.339 C 297.302 418.796 297.422 417.843 298.507 417.204 L 309.587 410.812 C 310.148 410.501 310.773 410.325 311.414 410.298 C 312.054 410.27 312.692 410.393 313.277 410.655 L 324.887 417.361 C 325.828 417.904 325.707 418.868 324.622 419.495 L 313.542 425.887 C 312.982 426.201 312.357 426.379 311.716 426.406 C 311.075 426.433 310.437 426.309 309.853 426.044 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 31.3952 126.3133)" id="Vector_47" clip-path="url(#CLIPPATH_50)">
                                <clipPath id="CLIPPATH_50">
                                    <rect transform="matrix(1 0 0 1 -31.3953 -126.3133)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-327.8953, -427.8133)"
                                    d="M 326.177 435.499 L 314.579 428.806 C 313.626 428.251 313.747 427.298 314.844 426.671 L 325.912 420.267 C 326.475 419.955 327.103 419.779 327.745 419.754 C 328.388 419.729 329.028 419.855 329.613 420.122 L 341.212 426.816 C 342.164 427.37 342.044 428.323 340.946 428.95 L 329.879 435.366 C 329.315 435.676 328.686 435.85 328.044 435.873 C 327.401 435.896 326.762 435.768 326.177 435.499 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 47.78 135.8195)" id="Vector_48" clip-path="url(#CLIPPATH_51)">
                                <clipPath id="CLIPPATH_51">
                                    <rect transform="matrix(1 0 0 1 -47.78 -135.8195)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-344.28, -437.3195)"
                                    d="M 342.562 445.014 L 330.964 438.308 C 330.011 437.766 330.132 436.813 331.229 436.174 L 342.297 429.782 C 342.857 429.471 343.482 429.295 344.123 429.267 C 344.763 429.24 345.401 429.363 345.986 429.625 L 357.596 436.331 C 358.549 436.873 358.428 437.826 357.331 438.465 L 346.263 444.857 C 345.701 445.168 345.073 445.345 344.431 445.372 C 343.789 445.399 343.149 445.276 342.562 445.014 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -122.3795 37.5017)" id="Vector_49" clip-path="url(#CLIPPATH_52)">
                                <clipPath id="CLIPPATH_52">
                                    <rect transform="matrix(1 0 0 1 122.3795 -37.5018)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-174.1205, -339.0018)"
                                    d="M 174.518 347.907 L 158.688 338.778 C 157.748 338.223 157.868 337.271 158.953 336.643 L 170.033 330.252 C 170.592 329.935 171.218 329.756 171.859 329.728 C 172.5 329.701 173.139 329.827 173.723 330.095 L 189.553 339.236 C 190.493 339.779 190.373 340.732 189.287 341.359 L 178.208 347.763 C 177.647 348.075 177.021 348.25 176.38 348.276 C 175.739 348.301 175.101 348.175 174.518 347.907 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -19.857 96.7104)" id="Vector_50" clip-path="url(#CLIPPATH_53)">
                                <clipPath id="CLIPPATH_53">
                                    <rect transform="matrix(1 0 0 1 19.857 -96.7105)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-276.643, -398.2105)"
                                    d="M 277.035 407.121 L 261.217 397.979 C 260.264 397.437 260.385 396.484 261.482 395.845 L 272.55 389.453 C 273.112 389.142 273.739 388.965 274.382 388.938 C 275.024 388.911 275.664 389.034 276.251 389.296 L 292.069 398.438 C 293.022 398.98 292.901 399.945 291.804 400.572 L 280.736 406.964 C 280.174 407.278 279.547 407.456 278.904 407.483 C 278.261 407.51 277.621 407.386 277.035 407.121 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -71.1189 67.1087)" id="Vector_51" clip-path="url(#CLIPPATH_54)">
                                <clipPath id="CLIPPATH_54">
                                    <rect transform="matrix(1 0 0 1 71.1189 -67.1087)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-225.3811, -368.6087)"
                                    d="M 256.442 395.218 L 179.28 350.669 C 178.34 350.126 178.449 349.173 179.546 348.534 L 190.626 342.142 C 191.186 341.831 191.811 341.655 192.452 341.628 C 193.092 341.601 193.73 341.723 194.315 341.986 L 271.477 386.547 C 272.429 387.09 272.309 388.043 271.211 388.67 L 260.144 395.074 C 259.582 395.388 258.953 395.564 258.31 395.59 C 257.667 395.615 257.027 395.487 256.442 395.218 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -113.0155 6.1285)" id="Vector_52" clip-path="url(#CLIPPATH_55)">
                                <clipPath id="CLIPPATH_55">
                                    <rect transform="matrix(1 0 0 1 113.0155 -6.1285)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-183.4845, -307.6285)"
                                    d="M 181.776 315.32 L 170.166 308.615 C 169.225 308.072 169.334 307.12 170.431 306.48 L 181.511 300.089 C 182.071 299.777 182.697 299.601 183.337 299.574 C 183.977 299.547 184.615 299.669 185.2 299.932 L 196.799 306.637 C 197.751 307.18 197.63 308.145 196.533 308.772 L 185.465 315.164 C 184.906 315.478 184.28 315.655 183.639 315.683 C 182.999 315.71 182.36 315.586 181.776 315.32 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -96.6065 15.6039)" id="Vector_53" clip-path="url(#CLIPPATH_56)">
                                <clipPath id="CLIPPATH_56">
                                    <rect transform="matrix(1 0 0 1 96.6065 -15.6039)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-199.8935, -317.1039)"
                                    d="M 198.185 324.8 L 186.575 318.095 C 185.634 317.552 185.743 316.587 186.84 315.96 L 197.92 309.568 C 198.479 309.255 199.105 309.077 199.746 309.05 C 200.387 309.022 201.025 309.146 201.609 309.412 L 213.208 316.117 C 214.16 316.66 214.039 317.613 212.942 318.252 L 201.874 324.644 C 201.314 324.955 200.689 325.131 200.048 325.158 C 199.408 325.185 198.77 325.063 198.185 324.8 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -80.184 25.0813)" id="Vector_54" clip-path="url(#CLIPPATH_57)">
                                <clipPath id="CLIPPATH_57">
                                    <rect transform="matrix(1 0 0 1 80.184 -25.0812)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-216.316, -326.5812)"
                                    d="M 214.606 334.267 L 202.996 327.573 C 202.055 327.019 202.164 326.066 203.261 325.439 L 214.341 319.047 C 214.9 318.733 215.526 318.555 216.167 318.528 C 216.808 318.501 217.446 318.625 218.03 318.89 L 229.64 325.596 C 230.581 326.138 230.46 327.091 229.375 327.73 L 218.295 334.122 C 217.735 334.434 217.109 334.61 216.468 334.635 C 215.827 334.66 215.189 334.534 214.606 334.267 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -63.7487 34.5523)" id="Vector_55" clip-path="url(#CLIPPATH_58)">
                                <clipPath id="CLIPPATH_58">
                                    <rect transform="matrix(1 0 0 1 63.7487 -34.5523)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-232.7513, -336.0523)"
                                    d="M 231.003 343.71 L 219.429 337.052 C 218.488 336.498 218.609 335.545 219.694 334.918 L 230.774 328.514 C 231.334 328.202 231.96 328.026 232.601 328.001 C 233.242 327.976 233.88 328.102 234.463 328.369 L 246.074 335.063 C 247.014 335.617 246.894 336.57 245.808 337.197 L 234.728 343.601 C 234.161 343.913 233.527 344.086 232.879 344.105 C 232.231 344.124 231.588 343.988 231.003 343.71 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -47.376 44.0344)" id="Vector_56" clip-path="url(#CLIPPATH_59)">
                                <clipPath id="CLIPPATH_59">
                                    <rect transform="matrix(1 0 0 1 47.376 -44.0344)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-249.124, -345.5344)"
                                    d="M 247.412 353.225 L 235.802 346.52 C 234.861 345.977 234.982 345.024 236.067 344.397 L 247.147 337.994 C 247.707 337.682 248.333 337.506 248.974 337.481 C 249.615 337.456 250.253 337.582 250.836 337.849 L 262.446 344.542 C 263.387 345.097 263.266 346.05 262.181 346.677 L 251.101 353.069 C 250.542 353.382 249.916 353.56 249.275 353.587 C 248.634 353.615 247.996 353.491 247.412 353.225 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -30.9671 53.5121)" id="Vector_57" clip-path="url(#CLIPPATH_60)">
                                <clipPath id="CLIPPATH_60">
                                    <rect transform="matrix(1 0 0 1 30.9671 -53.5121)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-265.5329, -355.0121)"
                                    d="M 263.821 362.704 L 252.21 355.999 C 251.27 355.456 251.391 354.503 252.476 353.864 L 263.556 347.472 C 264.116 347.161 264.741 346.985 265.382 346.958 C 266.022 346.931 266.66 347.053 267.245 347.316 L 278.855 354.021 C 279.796 354.564 279.675 355.529 278.59 356.156 L 267.51 362.547 C 266.951 362.861 266.325 363.039 265.684 363.066 C 265.043 363.094 264.405 362.97 263.821 362.704 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -14.5585 62.9866)" id="Vector_58" clip-path="url(#CLIPPATH_61)">
                                <clipPath id="CLIPPATH_61">
                                    <rect transform="matrix(1 0 0 1 14.5585 -62.9865)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-281.9415, -364.4865)"
                                    d="M 280.23 372.183 L 268.619 365.478 C 267.679 364.935 267.799 363.97 268.884 363.343 L 279.964 356.951 C 280.524 356.637 281.149 356.46 281.79 356.432 C 282.431 356.405 283.07 356.529 283.654 356.795 L 295.264 363.5 C 296.204 364.043 296.084 364.995 294.999 365.635 L 283.919 372.026 C 283.358 372.338 282.733 372.514 282.093 372.541 C 281.452 372.568 280.814 372.446 280.23 372.183 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 1.8045 72.4662)" id="Vector_59" clip-path="url(#CLIPPATH_62)">
                                <clipPath id="CLIPPATH_62">
                                    <rect transform="matrix(1 0 0 1 -1.8045 -72.4661)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-298.3045, -373.9661)"
                                    d="M 296.59 381.663 L 284.98 374.957 C 284.04 374.402 284.16 373.45 285.245 372.823 L 296.325 366.431 C 296.885 366.117 297.51 365.939 298.151 365.912 C 298.792 365.885 299.43 366.009 300.014 366.274 L 311.625 372.979 C 312.565 373.522 312.457 374.475 311.36 375.114 L 300.28 381.506 C 299.719 381.817 299.094 381.993 298.454 382.02 C 297.813 382.048 297.175 381.925 296.59 381.663 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 18.2271 81.937)" id="Vector_60" clip-path="url(#CLIPPATH_63)">
                                <clipPath id="CLIPPATH_63">
                                    <rect transform="matrix(1 0 0 1 -18.2271 -81.937)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-314.7271, -383.437)"
                                    d="M 313.048 391.13 L 301.413 384.436 C 300.461 383.882 300.581 382.929 301.678 382.302 L 312.746 375.898 C 313.307 375.586 313.933 375.41 314.574 375.385 C 315.214 375.36 315.852 375.486 316.435 375.753 L 328.046 382.446 C 328.986 383.001 328.878 383.954 327.781 384.581 L 316.701 390.985 C 316.145 391.291 315.525 391.463 314.891 391.489 C 314.257 391.514 313.626 391.391 313.048 391.13 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 34.6745 91.4202)" id="Vector_61" clip-path="url(#CLIPPATH_64)">
                                <clipPath id="CLIPPATH_64">
                                    <rect transform="matrix(1 0 0 1 -34.6745 -91.4202)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-331.1745, -392.9202)"
                                    d="M 329.456 400.609 L 317.858 393.904 C 316.906 393.361 317.026 392.408 318.123 391.781 L 329.191 385.377 C 329.752 385.065 330.378 384.89 331.019 384.864 C 331.66 384.839 332.297 384.965 332.881 385.233 L 344.491 391.926 C 345.443 392.481 345.323 393.433 344.226 394.06 L 333.158 400.452 C 332.597 400.769 331.969 400.948 331.326 400.976 C 330.683 401.003 330.042 400.877 329.456 400.609 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 51.0835 100.8485)" id="Vector_62" clip-path="url(#CLIPPATH_65)">
                                <clipPath id="CLIPPATH_65">
                                    <rect transform="matrix(1 0 0 1 -51.0835 -100.8485)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-347.5835, -402.3485)"
                                    d="M 345.865 410.04 L 334.267 403.335 C 333.315 402.792 333.435 401.84 334.532 401.2 L 345.6 394.808 C 346.163 394.497 346.79 394.321 347.432 394.294 C 348.075 394.267 348.715 394.389 349.302 394.652 L 360.9 401.357 C 361.852 401.9 361.732 402.865 360.635 403.492 L 349.567 409.884 C 349.005 410.198 348.378 410.375 347.735 410.403 C 347.092 410.43 346.452 410.306 345.865 410.04 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 67.5228 110.3809)" id="Vector_63" clip-path="url(#CLIPPATH_66)">
                                <clipPath id="CLIPPATH_66">
                                    <rect transform="matrix(1 0 0 1 -67.5227 -110.3809)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-364.0227, -411.8809)"
                                    d="M 362.274 419.568 L 350.676 412.862 C 349.724 412.32 349.844 411.367 350.941 410.728 L 362.009 404.336 C 362.572 404.025 363.199 403.848 363.841 403.821 C 364.484 403.794 365.124 403.916 365.71 404.179 L 377.369 410.884 C 378.322 411.427 378.201 412.38 377.104 413.019 L 366.036 419.411 C 365.466 419.732 364.828 419.914 364.174 419.941 C 363.52 419.968 362.869 419.84 362.274 419.568 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -135.6238 -6.9285)" id="Vector_64" clip-path="url(#CLIPPATH_67)">
                                <clipPath id="CLIPPATH_67">
                                    <rect transform="matrix(1 0 0 1 135.6237 6.9285)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-160.8763, -294.5715)"
                                    d="M 165.367 305.842 L 141.363 291.985 C 140.41 291.43 140.531 290.477 141.628 289.85 L 152.696 283.458 C 153.258 283.144 153.885 282.966 154.528 282.939 C 155.171 282.912 155.811 283.036 156.397 283.302 L 180.39 297.158 C 181.342 297.713 181.222 298.666 180.124 299.293 L 169.057 305.685 C 168.497 305.999 167.872 306.177 167.231 306.204 C 166.59 306.231 165.951 306.107 165.367 305.842 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -137.0828 10.6195)" id="Vector_65" clip-path="url(#CLIPPATH_68)">
                                <clipPath id="CLIPPATH_68">
                                    <rect transform="matrix(1 0 0 1 137.0827 -10.6195)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-159.4173, -312.1195)"
                                    d="M 157.699 319.807 L 146.101 313.114 C 145.148 312.559 145.269 311.607 146.366 310.98 L 157.434 304.576 C 157.997 304.264 158.625 304.088 159.267 304.063 C 159.91 304.038 160.55 304.164 161.135 304.431 L 172.734 311.124 C 173.686 311.679 173.566 312.632 172.468 313.259 L 161.401 319.663 C 160.838 319.975 160.21 320.151 159.567 320.176 C 158.924 320.201 158.284 320.075 157.699 319.807 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -120.6759 20.0465)" id="Vector_66" clip-path="url(#CLIPPATH_69)">
                                <clipPath id="CLIPPATH_69">
                                    <rect transform="matrix(1 0 0 1 120.6759 -20.0465)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-175.8241, -321.5465)"
                                    d="M 174.108 329.238 L 162.51 322.533 C 161.558 321.99 161.678 321.038 162.775 320.398 L 173.843 314.007 C 174.404 313.695 175.029 313.519 175.669 313.492 C 176.31 313.465 176.948 313.587 177.532 313.85 L 189.143 320.555 C 190.083 321.098 189.975 322.063 188.878 322.69 L 177.798 329.082 C 177.238 329.396 176.613 329.573 175.972 329.601 C 175.331 329.628 174.692 329.504 174.108 329.238 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -104.295 29.5686)" id="Vector_67" clip-path="url(#CLIPPATH_70)">
                                <clipPath id="CLIPPATH_70">
                                    <rect transform="matrix(1 0 0 1 104.295 -29.5685)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-192.205, -331.0685)"
                                    d="M 190.493 338.765 L 178.883 332.06 C 177.942 331.517 178.063 330.552 179.148 329.925 L 190.228 323.533 C 190.787 323.219 191.413 323.042 192.054 323.014 C 192.695 322.987 193.333 323.111 193.917 323.377 L 205.527 330.082 C 206.468 330.625 206.347 331.577 205.262 332.217 L 194.182 338.608 C 193.622 338.92 192.997 339.096 192.356 339.123 C 191.716 339.15 191.078 339.028 190.493 338.765 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -87.8619 39.0439)" id="Vector_68" clip-path="url(#CLIPPATH_71)">
                                <clipPath id="CLIPPATH_71">
                                    <rect transform="matrix(1 0 0 1 87.8619 -39.0439)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-208.6381, -340.5439)"
                                    d="M 206.926 348.232 L 195.316 341.539 C 194.375 340.984 194.496 340.031 195.581 339.404 L 206.661 333 C 207.221 332.688 207.847 332.513 208.488 332.488 C 209.129 332.462 209.767 332.588 210.35 332.856 L 221.961 339.549 C 222.901 340.104 222.78 341.056 221.695 341.684 L 210.615 348.087 C 210.055 348.399 209.429 348.575 208.788 348.6 C 208.147 348.625 207.509 348.499 206.926 348.232 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -71.4686 48.5335)" id="Vector_69" clip-path="url(#CLIPPATH_72)">
                                <clipPath id="CLIPPATH_72">
                                    <rect transform="matrix(1 0 0 1 71.4686 -48.5335)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-225.0314, -350.0335)"
                                    d="M 223.335 357.711 L 211.725 351.006 C 210.784 350.463 210.893 349.511 211.99 348.871 L 223.046 342.504 C 223.606 342.192 224.231 342.016 224.872 341.989 C 225.512 341.962 226.15 342.084 226.735 342.347 L 238.333 349.052 C 239.286 349.595 239.165 350.56 238.068 351.187 L 227 357.579 C 226.442 357.885 225.82 358.056 225.183 358.079 C 224.547 358.102 223.914 357.976 223.335 357.711 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -55.05 57.9946)" id="Vector_70" clip-path="url(#CLIPPATH_73)">
                                <clipPath id="CLIPPATH_73">
                                    <rect transform="matrix(1 0 0 1 55.05 -57.9945)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-241.45, -359.4945)"
                                    d="M 239.732 367.191 L 228.134 360.486 C 227.181 359.943 227.302 358.978 228.399 358.351 L 239.467 351.959 C 240.028 351.645 240.656 351.467 241.299 351.44 C 241.942 351.413 242.582 351.537 243.168 351.802 L 254.766 358.508 C 255.719 359.051 255.598 360.003 254.501 360.642 L 243.433 367.034 C 242.871 367.346 242.243 367.522 241.601 367.549 C 240.959 367.576 240.319 367.454 239.732 367.191 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -38.6411 67.4695)" id="Vector_71" clip-path="url(#CLIPPATH_74)">
                                <clipPath id="CLIPPATH_74">
                                    <rect transform="matrix(1 0 0 1 38.6411 -67.4695)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-257.8589, -368.9695)"
                                    d="M 256.141 376.658 L 244.542 369.965 C 243.59 369.41 243.711 368.457 244.808 367.83 L 255.876 361.426 C 256.438 361.114 257.066 360.938 257.709 360.913 C 258.352 360.888 258.992 361.014 259.577 361.282 L 271.175 367.975 C 272.128 368.53 272.007 369.482 270.91 370.109 L 259.842 376.513 C 259.28 376.825 258.652 377.001 258.009 377.026 C 257.366 377.051 256.726 376.925 256.141 376.658 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -22.2347 76.9444)" id="Vector_72" clip-path="url(#CLIPPATH_75)">
                                <clipPath id="CLIPPATH_75">
                                    <rect transform="matrix(1 0 0 1 22.2347 -76.9445)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-274.2653, -378.4445)"
                                    d="M 272.55 386.137 L 260.951 379.431 C 259.999 378.889 260.119 377.936 261.217 377.297 L 272.284 370.905 C 272.845 370.594 273.47 370.418 274.111 370.39 C 274.751 370.363 275.389 370.486 275.974 370.748 L 287.584 377.454 C 288.525 378.008 288.416 378.961 287.319 379.588 L 276.239 385.98 C 275.68 386.294 275.054 386.472 274.413 386.499 C 273.772 386.526 273.134 386.402 272.55 386.137 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -5.8777 86.4001)" id="Vector_73" clip-path="url(#CLIPPATH_76)">
                                <clipPath id="CLIPPATH_76">
                                    <rect transform="matrix(1 0 0 1 5.8777 -86.4001)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-290.6223, -387.9001)"
                                    d="M 288.959 395.567 L 277.3 388.91 C 276.359 388.368 276.48 387.403 277.565 386.776 L 288.645 380.384 C 289.205 380.07 289.83 379.892 290.471 379.865 C 291.112 379.838 291.75 379.962 292.334 380.227 L 303.945 386.932 C 304.885 387.475 304.765 388.428 303.68 389.067 L 292.6 395.459 C 292.042 395.755 291.423 395.918 290.792 395.937 C 290.16 395.956 289.533 395.829 288.959 395.567 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 10.5795 95.8962)" id="Vector_74" clip-path="url(#CLIPPATH_77)">
                                <clipPath id="CLIPPATH_77">
                                    <rect transform="matrix(1 0 0 1 -10.5795 -95.8961)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-307.0795, -397.3961)"
                                    d="M 305.368 405.084 L 293.757 398.39 C 292.817 397.836 292.937 396.883 294.022 396.256 L 305.102 389.864 C 305.661 389.547 306.287 389.368 306.928 389.341 C 307.57 389.313 308.208 389.439 308.792 389.707 L 320.402 396.412 C 321.342 396.955 321.222 397.908 320.137 398.535 L 309.057 404.939 C 308.496 405.251 307.87 405.427 307.229 405.452 C 306.589 405.477 305.951 405.351 305.368 405.084 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 26.9851 105.3704)" id="Vector_75" clip-path="url(#CLIPPATH_78)">
                                <clipPath id="CLIPPATH_78">
                                    <rect transform="matrix(1 0 0 1 -26.9851 -105.3705)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-323.4851, -406.8705)"
                                    d="M 321.777 414.563 L 310.166 407.857 C 309.226 407.315 309.334 406.362 310.431 405.723 L 321.511 399.331 C 322.072 399.02 322.697 398.843 323.337 398.816 C 323.978 398.789 324.616 398.912 325.201 399.174 L 336.799 405.879 C 337.752 406.434 337.631 407.387 336.534 408.014 L 325.466 414.406 C 324.906 414.72 324.281 414.897 323.64 414.925 C 322.999 414.952 322.361 414.828 321.777 414.563 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 53.5443 120.7132)" id="Vector_76" clip-path="url(#CLIPPATH_79)">
                                <clipPath id="CLIPPATH_79">
                                    <rect transform="matrix(1 0 0 1 -53.5443 -120.7132)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-350.0443, -422.2132)"
                                    d="M 358.489 435.764 L 326.575 417.336 C 325.622 416.793 325.743 415.84 326.84 415.201 L 337.908 408.81 C 338.471 408.498 339.098 408.322 339.74 408.295 C 340.383 408.268 341.023 408.39 341.609 408.653 L 373.523 427.08 C 374.463 427.635 374.343 428.588 373.258 429.215 L 362.178 435.619 C 361.617 435.931 360.991 436.107 360.35 436.132 C 359.71 436.157 359.072 436.031 358.489 435.764 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -155.6015 -0.0744)" id="Vector_77" clip-path="url(#CLIPPATH_80)">
                                <clipPath id="CLIPPATH_80">
                                    <rect transform="matrix(1 0 0 1 155.6015 0.0745)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-140.8985, -301.4255)"
                                    d="M 141.29 310.34 L 125.472 301.199 C 124.52 300.656 124.64 299.691 125.737 299.064 L 136.805 292.672 C 137.367 292.358 137.994 292.18 138.637 292.153 C 139.28 292.126 139.92 292.25 140.507 292.515 L 156.325 301.657 C 157.277 302.2 157.157 303.152 156.06 303.791 L 144.992 310.183 C 144.429 310.495 143.802 310.671 143.159 310.698 C 142.517 310.725 141.877 310.603 141.29 310.34 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 14.4777 27.1399)" id="Vector_78" clip-path="url(#CLIPPATH_81)">
                                <clipPath id="CLIPPATH_81">
                                    <rect transform="matrix(1 0 0 1 -14.4777 -27.1399)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-310.9777, -328.6399)"
                                    d="M 422.738 398.655 L 189.721 264.114 C 188.781 263.571 188.889 262.606 189.987 261.979 L 195.521 258.783 C 196.083 258.472 196.71 258.296 197.353 258.268 C 197.995 258.241 198.635 258.364 199.222 258.626 L 432.238 393.156 C 433.179 393.698 433.058 394.651 431.973 395.29 L 426.427 398.486 C 425.869 398.802 425.244 398.982 424.603 399.011 C 423.962 399.041 423.323 398.919 422.738 398.655 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -109.8819 99.1023)" id="Vector_79" clip-path="url(#CLIPPATH_82)">
                                <clipPath id="CLIPPATH_82">
                                    <rect transform="matrix(1 0 0 1 109.8819 -99.1023)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(177,180,196); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-186.6181, -400.6023)"
                                    d="M 278.385 413.959 C 278.056 414.684 277.491 415.275 276.782 415.636 L 212.653 452.66 C 211.575 453.263 210.372 453.604 209.138 453.656 C 207.905 453.709 206.676 453.471 205.552 452.961 L 95.9699 389.67 C 95.4708 389.41 95.0784 388.984 94.8607 388.464 C 94.4628 387.5 95.0174 386.366 96.4763 385.522 L 160.605 348.534 C 161.684 347.936 162.888 347.598 164.121 347.548 C 165.354 347.497 166.582 347.736 167.706 348.244 L 277.3 411.535 C 277.761 411.718 278.132 412.074 278.334 412.527 C 278.537 412.98 278.555 413.493 278.385 413.959 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -109.8772 99.7416)" id="Vector_80" clip-path="url(#CLIPPATH_83)">
                                <clipPath id="CLIPPATH_83">
                                    <rect transform="matrix(1 0 0 1 109.8772 -99.7416)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(195,198,209); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-186.6228, -401.2416)"
                                    d="M 278.385 413.959 C 278.056 414.684 277.491 415.275 276.781 415.635 L 212.653 452.66 C 211.575 453.262 210.371 453.604 209.138 453.656 C 207.905 453.709 206.676 453.47 205.552 452.961 L 95.9698 389.67 C 95.4707 389.41 95.0783 388.983 94.8606 388.464 C 95.1984 387.765 95.7579 387.196 96.4521 386.848 L 160.581 349.824 C 161.658 349.221 162.862 348.88 164.095 348.827 C 165.329 348.775 166.557 349.013 167.682 349.522 L 277.3 412.813 C 277.777 413.066 278.158 413.469 278.385 413.959 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 27.465 16.0096)" id="Vector_81" clip-path="url(#CLIPPATH_84)">
                                <clipPath id="CLIPPATH_84">
                                    <rect transform="matrix(1 0 0 1 -27.465 -16.0096)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,48,63); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-323.965, -317.5096)"
                                    d="M 440.473 388.453 L 207.457 253.887 C 206.936 253.511 206.511 253.019 206.214 252.449 C 205.916 251.88 205.756 251.249 205.745 250.607 V 247.869 C 205.745 246.603 206.516 246.024 207.457 246.567 L 440.473 381.096 C 440.996 381.47 441.424 381.961 441.721 382.531 C 442.019 383.101 442.178 383.734 442.185 384.376 V 387.126 C 442.185 388.417 441.426 388.995 440.473 388.453 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -35.9826 -204.1278)" id="Vector_82"
                                clip-path="url(#CLIPPATH_85)">
                                <clipPath id="CLIPPATH_85">
                                    <rect transform="matrix(1 0 0 1 35.9826 204.1279)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-260.5174, -97.3721)"
                                    d="M 300.907 125.134 L 220.128 78.5103 C 219.759 78.2414 219.457 77.8898 219.248 77.4835 C 219.038 77.0773 218.927 76.6277 218.922 76.1707 V 70.5387 C 218.922 69.6342 219.477 69.2121 220.128 69.61 L 300.907 116.234 C 301.276 116.503 301.578 116.855 301.787 117.261 C 301.996 117.667 302.108 118.117 302.112 118.574 V 124.218 C 302.136 125.11 301.582 125.532 300.907 125.134 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -46.1402 -195.2719)" id="Vector_83"
                                clip-path="url(#CLIPPATH_86)">
                                <clipPath id="CLIPPATH_86">
                                    <rect transform="matrix(1 0 0 1 46.1402 195.2719)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-250.3598, -106.2281)"
                                    d="M 280.169 126.485 L 220.55 92.0535 C 220.171 91.7767 219.864 91.4134 219.655 90.9938 C 219.445 90.5742 219.338 90.1106 219.344 89.6415 V 86.9039 C 219.344 85.9994 219.887 85.5773 220.55 85.9753 L 280.169 120.407 C 280.548 120.683 280.855 121.047 281.065 121.466 C 281.274 121.886 281.381 122.35 281.375 122.819 V 125.616 C 281.399 126.461 280.917 126.871 280.169 126.485 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -46.1402 -184.6469)" id="Vector_84"
                                clip-path="url(#CLIPPATH_87)">
                                <clipPath id="CLIPPATH_87">
                                    <rect transform="matrix(1 0 0 1 46.1402 184.6468)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-250.3598, -116.8532)"
                                    d="M 280.169 137.111 L 220.55 102.679 C 220.171 102.402 219.864 102.039 219.655 101.62 C 219.445 101.2 219.338 100.736 219.344 100.267 V 97.5296 C 219.344 96.6251 219.887 96.2151 220.55 96.601 L 280.169 131.044 C 280.541 131.311 280.844 131.662 281.053 132.069 C 281.263 132.476 281.373 132.926 281.375 133.384 V 136.182 C 281.399 137.086 280.917 137.484 280.169 137.111 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -51.7589 -177.263)" id="Vector_85" clip-path="url(#CLIPPATH_88)">
                                <clipPath id="CLIPPATH_88">
                                    <rect transform="matrix(1 0 0 1 51.7589 177.263)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-244.7411, -124.237)"
                                    d="M 268.933 141.247 L 220.55 113.365 C 220.178 113.098 219.875 112.746 219.666 112.34 C 219.456 111.933 219.346 111.482 219.344 111.025 V 108.155 C 219.344 107.25 219.887 106.84 220.55 107.226 L 268.933 135.169 C 269.311 135.447 269.617 135.81 269.827 136.229 C 270.036 136.649 270.143 137.112 270.138 137.581 V 140.379 C 270.15 141.223 269.608 141.633 268.933 141.247 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -35.9827 -92.5545)" id="Vector_86" clip-path="url(#CLIPPATH_89)">
                                <clipPath id="CLIPPATH_89">
                                    <rect transform="matrix(1 0 0 1 35.9827 92.5545)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-260.5173, -208.9455)"
                                    d="M 300.907 236.713 L 220.128 190.09 C 219.751 189.811 219.445 189.448 219.235 189.028 C 219.026 188.609 218.918 188.146 218.922 187.678 V 182.106 C 218.922 181.201 219.477 180.791 220.128 181.177 L 300.907 227.801 C 301.284 228.079 301.59 228.443 301.799 228.862 C 302.009 229.281 302.116 229.744 302.112 230.213 V 235.845 C 302.136 236.689 301.582 237.099 300.907 236.713 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -46.1401 -83.6935)" id="Vector_87" clip-path="url(#CLIPPATH_90)">
                                <clipPath id="CLIPPATH_90">
                                    <rect transform="matrix(1 0 0 1 46.1401 83.6935)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-250.3599, -217.8065)"
                                    d="M 280.169 238.064 L 220.55 203.621 C 220.178 203.354 219.875 203.002 219.666 202.596 C 219.456 202.189 219.346 201.738 219.344 201.281 V 198.483 C 219.344 197.579 219.887 197.156 220.55 197.554 L 280.169 231.986 C 280.54 232.254 280.841 232.605 281.051 233.012 C 281.26 233.418 281.371 233.868 281.375 234.325 V 237.135 C 281.399 238.04 280.917 238.45 280.169 238.064 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -46.1401 -73.068)" id="Vector_88" clip-path="url(#CLIPPATH_91)">
                                <clipPath id="CLIPPATH_91">
                                    <rect transform="matrix(1 0 0 1 46.1401 73.068)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-250.3599, -228.432)"
                                    d="M 280.169 248.689 L 220.55 214.258 C 220.18 213.987 219.878 213.633 219.668 213.225 C 219.459 212.816 219.348 212.365 219.344 211.906 V 209.108 C 219.344 208.204 219.887 207.781 220.55 208.179 L 280.169 242.611 C 280.548 242.888 280.855 243.251 281.065 243.67 C 281.274 244.09 281.381 244.554 281.375 245.023 V 247.821 C 281.399 248.665 280.917 249.075 280.169 248.689 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -51.7589 -65.6751)" id="Vector_89" clip-path="url(#CLIPPATH_92)">
                                <clipPath id="CLIPPATH_92">
                                    <rect transform="matrix(1 0 0 1 51.7589 65.6751)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-244.7411, -235.8249)"
                                    d="M 268.933 252.825 L 220.55 224.882 C 220.18 224.612 219.878 224.258 219.668 223.85 C 219.459 223.441 219.348 222.99 219.344 222.531 V 219.733 C 219.344 218.828 219.887 218.418 220.55 218.804 L 268.933 246.747 C 269.303 247.015 269.605 247.367 269.814 247.773 C 270.024 248.18 270.135 248.63 270.138 249.087 V 251.897 C 270.15 252.801 269.608 253.26 268.933 252.825 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 81.689 -5.4391)" id="Vector_90" clip-path="url(#CLIPPATH_93)">
                                <clipPath id="CLIPPATH_93">
                                    <rect transform="matrix(1 0 0 1 -81.689 5.4391)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(245,246,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-378.189, -296.0609)"
                                    d="M 322.512 250.559 C 322.512 250.559 331.422 258.036 344.274 247.821 C 353.461 240.284 361.671 244.589 366.241 247.194 C 370.81 249.799 377.466 251.355 390.004 274.076 C 392.716 278.543 396.431 282.317 400.855 285.099 C 407.619 288.994 410.862 287.101 416.179 279.069 C 421.496 271.037 424.968 262.185 434.734 267.974 V 348.534 L 321.644 283.229 V 250.028 L 322.512 250.559 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -37.2549 -131.3935)" id="Vector_91"
                                clip-path="url(#CLIPPATH_94)">
                                <clipPath id="CLIPPATH_94">
                                    <rect transform="matrix(1 0 0 1 37.2549 131.3935)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-259.2451, -170.1065)"
                                    d="M 297.941 216.405 L 220.55 171.71 C 220.18 171.44 219.878 171.086 219.668 170.678 C 219.459 170.269 219.348 169.818 219.344 169.359 V 124.737 C 219.344 123.832 219.887 123.422 220.55 123.808 L 297.941 168.502 C 298.31 168.774 298.612 169.128 298.821 169.536 C 299.03 169.944 299.142 170.395 299.146 170.854 V 215.476 C 299.158 216.381 298.616 216.791 297.941 216.405 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 81.677 -2.8755)" id="Vector_92" clip-path="url(#CLIPPATH_95)">
                                <clipPath id="CLIPPATH_95">
                                    <rect transform="matrix(1 0 0 1 -81.677 2.8755)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: rgb(233,234,242); stroke-width: 0.22; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 10; is-custom-font: none; font-file-url: none; fill: none; fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-378.177, -298.6245)"
                                    d="M 321.632 248.678 V 283.266 L 434.722 348.571 V 267.998" stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 69.584 -23.2875)" id="Vector_93" clip-path="url(#CLIPPATH_96)">
                                <clipPath id="CLIPPATH_96">
                                    <rect transform="matrix(1 0 0 1 -69.584 23.2875)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: rgb(233,234,242); stroke-width: 0.22; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 10; is-custom-font: none; font-file-url: none; fill: none; fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-366.084, -278.2125)" d="M 366.084 247.58 V 308.845"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 104.174 6.078)" id="Vector_94" clip-path="url(#CLIPPATH_97)">
                                <clipPath id="CLIPPATH_97">
                                    <rect transform="matrix(1 0 0 1 -104.174 -6.078)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: rgb(233,234,242); stroke-width: 0.22; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 10; is-custom-font: none; font-file-url: none; fill: none; fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-400.674, -307.578)" d="M 400.674 286.328 V 328.828"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 81.671 -36.2339)" id="Vector_95" clip-path="url(#CLIPPATH_98)">
                                <clipPath id="CLIPPATH_98">
                                    <rect transform="matrix(1 0 0 1 -81.671 36.2338)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: rgb(233,234,242); stroke-width: 1.09; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 10; is-custom-font: none; font-file-url: none; fill: none; fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-378.171, -265.2662)"
                                    d="M 321.632 250.027 C 341.694 262.473 344.539 234.349 366.398 246.964 C 388.256 259.579 385.242 276.041 401.362 285.363 C 417.481 294.686 417.879 258.276 434.71 267.997"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 69.5902 -53.913)" id="Vector_96" clip-path="url(#CLIPPATH_99)">
                                <clipPath id="CLIPPATH_99">
                                    <rect transform="matrix(1 0 0 1 -69.5902 53.913)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-366.0902, -247.587)"
                                    d="M 367.977 250.856 C 369.021 250.253 369.022 248.301 367.98 246.495 C 366.938 244.69 365.247 243.715 364.203 244.318 C 363.16 244.921 363.158 246.873 364.2 248.678 C 365.242 250.484 366.933 251.459 367.977 250.856 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 139.9414 -32.4217)" id="Vector_97"
                                clip-path="url(#CLIPPATH_100)">
                                <clipPath id="CLIPPATH_100">
                                    <rect transform="matrix(1 0 0 1 -139.9414 32.4218)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-436.4414, -269.0782)"
                                    d="M 438.328 272.362 C 439.377 271.76 439.382 269.801 438.34 267.987 C 437.298 266.173 435.603 265.192 434.554 265.794 C 433.506 266.397 433.501 268.356 434.543 270.17 C 435.585 271.984 437.279 272.965 438.328 272.362 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 105.7684 -14.783)" id="Vector_98" clip-path="url(#CLIPPATH_101)">
                                <clipPath id="CLIPPATH_101">
                                    <rect transform="matrix(1 0 0 1 -105.7684 14.783)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-402.2684, -286.717)"
                                    d="M 404.155 290.001 C 405.204 289.398 405.209 287.439 404.167 285.626 C 403.125 283.812 401.43 282.83 400.381 283.433 C 399.333 284.036 399.328 285.995 400.37 287.808 C 401.412 289.622 403.107 290.604 404.155 290.001 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 26.4095 -50.4667)" id="Vector_99" clip-path="url(#CLIPPATH_102)">
                                <clipPath id="CLIPPATH_102">
                                    <rect transform="matrix(1 0 0 1 -26.4095 50.4668)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-322.9095, -251.0332)"
                                    d="M 324.796 254.317 C 325.845 253.715 325.85 251.756 324.808 249.942 C 323.766 248.128 322.071 247.147 321.023 247.749 C 319.974 248.352 319.969 250.311 321.011 252.125 C 322.053 253.939 323.748 254.92 324.796 254.317 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 26.0124 -125.0624)" id="Vector_100"
                                clip-path="url(#CLIPPATH_103)">
                                <clipPath id="CLIPPATH_103">
                                    <rect transform="matrix(1 0 0 1 -26.0124 125.0624)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-322.5124, -176.4376)"
                                    d="M 324.827 190.608 L 320.197 187.931 C 319.828 187.662 319.526 187.31 319.317 186.904 C 319.108 186.498 318.996 186.048 318.991 185.591 V 163.196 C 318.991 162.291 319.546 161.881 320.197 162.267 L 324.827 164.944 C 325.196 165.214 325.497 165.566 325.706 165.972 C 325.915 166.378 326.027 166.827 326.033 167.284 V 189.691 C 326.057 190.548 325.526 191.006 324.827 190.608 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 36.6876 -130.478)" id="Vector_101"
                                clip-path="url(#CLIPPATH_104)">
                                <clipPath id="CLIPPATH_104">
                                    <rect transform="matrix(1 0 0 1 -36.6876 130.478)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-333.1876, -171.022)"
                                    d="M 335.509 196.782 L 330.867 194.165 C 330.498 193.893 330.197 193.539 329.988 193.131 C 329.779 192.723 329.667 192.272 329.661 191.814 V 146.191 C 329.661 145.286 330.216 144.876 330.867 145.262 L 335.509 147.939 C 335.887 148.217 336.193 148.58 336.403 149 C 336.612 149.419 336.719 149.883 336.714 150.351 V 195.854 C 336.726 196.758 336.184 197.168 335.509 196.782 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 58.0585 -115.939)" id="Vector_102"
                                clip-path="url(#CLIPPATH_105)">
                                <clipPath id="CLIPPATH_105">
                                    <rect transform="matrix(1 0 0 1 -58.0585 115.939)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-354.5585, -185.561)"
                                    d="M 356.873 209.108 L 352.243 206.431 C 351.873 206.16 351.571 205.807 351.362 205.398 C 351.152 204.99 351.041 204.538 351.038 204.079 V 162.943 C 351.038 162.038 351.58 161.628 352.243 162.014 L 356.873 164.691 C 357.242 164.964 357.543 165.318 357.752 165.726 C 357.961 166.134 358.073 166.585 358.079 167.043 V 208.18 C 358.079 209.084 357.524 209.494 356.873 209.108 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 68.7166 -106.2485)" id="Vector_103"
                                clip-path="url(#CLIPPATH_106)">
                                <clipPath id="CLIPPATH_106">
                                    <rect transform="matrix(1 0 0 1 -68.7166 106.2485)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-365.2166, -195.2515)"
                                    d="M 367.519 215.271 L 362.901 212.594 C 362.532 212.324 362.232 211.972 362.022 211.566 C 361.813 211.16 361.701 210.711 361.696 210.254 V 176.16 C 361.696 175.256 362.25 174.846 362.901 175.232 L 367.531 177.909 C 367.901 178.18 368.203 178.534 368.413 178.942 C 368.622 179.35 368.733 179.802 368.737 180.261 V 214.342 C 368.749 215.247 368.206 215.657 367.519 215.271 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 89.9598 -85.4035)" id="Vector_104"
                                clip-path="url(#CLIPPATH_107)">
                                <clipPath id="CLIPPATH_107">
                                    <rect transform="matrix(1 0 0 1 -89.9598 85.4035)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-386.4598, -216.0965)"
                                    d="M 388.775 227.548 L 384.145 224.871 C 383.768 224.592 383.462 224.229 383.252 223.81 C 383.043 223.39 382.935 222.927 382.939 222.459 V 205.575 C 382.939 204.67 383.494 204.26 384.145 204.646 L 388.775 207.323 C 389.145 207.594 389.447 207.948 389.656 208.356 C 389.866 208.764 389.977 209.216 389.98 209.675 V 226.559 C 390.004 227.524 389.426 227.934 388.775 227.548 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 100.6356 -99.4132)" id="Vector_105"
                                clip-path="url(#CLIPPATH_108)">
                                <clipPath id="CLIPPATH_108">
                                    <rect transform="matrix(1 0 0 1 -100.6356 99.4132)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-397.1356, -202.0868)"
                                    d="M 399.457 233.711 L 394.815 231.034 C 394.446 230.762 394.145 230.408 393.936 230 C 393.727 229.592 393.615 229.141 393.609 228.682 V 171.397 C 393.609 170.493 394.164 170.07 394.815 170.468 L 399.457 173.146 C 399.827 173.414 400.129 173.766 400.338 174.172 C 400.548 174.578 400.659 175.028 400.662 175.485 V 232.758 C 400.674 233.687 400.132 234.097 399.457 233.711 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 126.6776 -64.198)" id="Vector_106"
                                clip-path="url(#CLIPPATH_109)">
                                <clipPath id="CLIPPATH_109">
                                    <rect transform="matrix(1 0 0 1 -126.6776 64.198)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-423.1776, -237.302)"
                                    d="M 425.499 248.75 L 420.857 246.024 C 420.488 245.752 420.187 245.398 419.978 244.99 C 419.769 244.582 419.657 244.131 419.651 243.673 V 226.789 C 419.651 225.884 420.206 225.462 420.857 225.86 L 425.499 228.537 C 425.869 228.806 426.171 229.157 426.38 229.564 C 426.59 229.97 426.701 230.42 426.704 230.877 V 247.761 C 426.716 248.726 426.174 249.136 425.499 248.75 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 137.3479 -60.761)" id="Vector_107"
                                clip-path="url(#CLIPPATH_110)">
                                <clipPath id="CLIPPATH_110">
                                    <rect transform="matrix(1 0 0 1 -137.3479 60.761)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-433.8479, -240.739)"
                                    d="M 436.169 254.912 L 431.527 252.235 C 431.157 251.966 430.855 251.615 430.645 251.209 C 430.436 250.802 430.325 250.352 430.321 249.895 V 227.5 C 430.321 226.595 430.864 226.173 431.527 226.571 L 436.169 229.248 C 436.538 229.517 436.84 229.869 437.049 230.275 C 437.258 230.681 437.37 231.131 437.374 231.588 V 253.983 C 437.398 254.888 436.844 255.298 436.169 254.912 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 150.514 203.904)" id="Vector_108" clip-path="url(#CLIPPATH_111)">
                                <clipPath id="CLIPPATH_111">
                                    <rect transform="matrix(1 0 0 1 -150.514 -203.904)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(214,216,229); fill-rule: nonzero; opacity: 0.4;"
                                    transform=" translate(-447.014, -505.404)"
                                    d="M 424.715 587.201 L 305.38 518.278 L 469.312 423.607 L 588.648 492.518 L 424.715 587.201 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 154.866 201.469)" id="Vector_109" clip-path="url(#CLIPPATH_112)">
                                <clipPath id="CLIPPATH_112">
                                    <rect transform="matrix(1 0 0 1 -154.866 -201.469)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(177,180,196); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-451.366, -502.969)"
                                    d="M 589.069 487.827 L 473.677 421.172 L 313.662 513.588 L 309.732 511.32 V 515.855 L 429.067 584.766 L 593 490.095 V 485.56 L 589.069 487.827 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 154.866 196.934)" id="Vector_110" clip-path="url(#CLIPPATH_113)">
                                <clipPath id="CLIPPATH_113">
                                    <rect transform="matrix(1 0 0 1 -154.866 -196.934)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(250,251,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-451.366, -498.434)"
                                    d="M 429.067 580.231 L 309.732 511.32 L 473.677 416.637 L 593 485.56 L 429.067 580.231 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 218.1745 161.001)" id="Vector_111"
                                clip-path="url(#CLIPPATH_114)">
                                <clipPath id="CLIPPATH_114">
                                    <rect transform="matrix(1 0 0 1 -218.1745 -161.001)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-514.6745, -462.501)"
                                    d="M 557.771 492.868 L 462.09 437.609 L 471.567 432.134 L 567.259 487.393 L 557.771 492.868 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 205.7085 168.2075)" id="Vector_112"
                                clip-path="url(#CLIPPATH_115)">
                                <clipPath id="CLIPPATH_115">
                                    <rect transform="matrix(1 0 0 1 -205.7085 -168.2075)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-502.2085, -469.7075)"
                                    d="M 547.68 498.706 L 451.999 443.447 L 456.737 440.709 L 552.418 495.968 L 547.68 498.706 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 197.8835 172.717)" id="Vector_113"
                                clip-path="url(#CLIPPATH_116)">
                                <clipPath id="CLIPPATH_116">
                                    <rect transform="matrix(1 0 0 1 -197.8835 -172.717)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-494.3835, -474.217)"
                                    d="M 539.855 503.215 L 444.174 447.956 L 448.913 445.219 L 544.593 500.478 L 539.855 503.215 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 190.071 177.2395)" id="Vector_114"
                                clip-path="url(#CLIPPATH_117)">
                                <clipPath id="CLIPPATH_117">
                                    <rect transform="matrix(1 0 0 1 -190.071 -177.2395)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-486.571, -478.7395)"
                                    d="M 532.042 507.738 L 436.362 452.479 L 441.1 449.741 L 536.78 505 L 532.042 507.738 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 135.0875 208.988)" id="Vector_115"
                                clip-path="url(#CLIPPATH_118)">
                                <clipPath id="CLIPPATH_118">
                                    <rect transform="matrix(1 0 0 1 -135.0875 -208.988)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-431.5875, -510.488)"
                                    d="M 474.701 540.855 L 379.009 485.596 L 388.497 480.121 L 484.166 535.38 L 474.701 540.855 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 119.3535 214.2945)" id="Vector_116"
                                clip-path="url(#CLIPPATH_119)">
                                <clipPath id="CLIPPATH_119">
                                    <rect transform="matrix(1 0 0 1 -119.3535 -214.2945)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-415.8535, -515.7945)"
                                    d="M 458.051 542.905 L 368.917 491.421 L 373.656 488.684 L 462.79 540.168 L 458.051 542.905 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 110.643 218.2985)" id="Vector_117"
                                clip-path="url(#CLIPPATH_120)">
                                <clipPath id="CLIPPATH_120">
                                    <rect transform="matrix(1 0 0 1 -110.643 -218.2985)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-407.143, -519.7985)"
                                    d="M 448.454 546.391 L 361.093 495.944 L 365.831 493.206 L 453.193 543.653 L 448.454 546.391 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 96.0725 218.914)" id="Vector_118" clip-path="url(#CLIPPATH_121)">
                                <clipPath id="CLIPPATH_121">
                                    <rect transform="matrix(1 0 0 1 -96.0725 -218.914)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-392.5725, -520.414)"
                                    d="M 427.126 543.111 L 353.28 500.454 L 358.019 497.717 L 431.865 540.373 L 427.126 543.111 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 129.879 172.1565)" id="Vector_119"
                                clip-path="url(#CLIPPATH_122)">
                                <clipPath id="CLIPPATH_122">
                                    <rect transform="matrix(1 0 0 1 -129.879 -172.1565)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-426.379, -473.6565)"
                                    d="M 426.379 489.069 L 399.686 473.657 L 426.379 458.244 L 453.072 473.657 L 426.379 489.069 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 164.3725 192.074)" id="Vector_120"
                                clip-path="url(#CLIPPATH_123)">
                                <clipPath id="CLIPPATH_123">
                                    <rect transform="matrix(1 0 0 1 -164.3725 -192.074)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-460.8725, -493.574)"
                                    d="M 460.873 508.993 L 434.179 493.58 L 460.873 478.155 L 487.566 493.58 L 460.873 508.993 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 198.866 211.997)" id="Vector_121" clip-path="url(#CLIPPATH_124)">
                                <clipPath id="CLIPPATH_124">
                                    <rect transform="matrix(1 0 0 1 -198.866 -211.997)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-495.366, -513.497)"
                                    d="M 495.366 528.916 L 468.673 513.491 L 495.366 498.078 L 522.059 513.503 L 495.366 528.916 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -244.6147 -19.085)" id="Vector_122"
                                clip-path="url(#CLIPPATH_125)">
                                <clipPath id="CLIPPATH_125">
                                    <rect transform="matrix(1 0 0 1 244.6147 19.085)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(214,216,229); fill-rule: nonzero; opacity: 0.3;"
                                    transform=" translate(-51.8853, -282.415)"
                                    d="M 51.8793 295.482 L 29.2612 282.421 L 51.8793 269.348 L 74.5094 282.421 L 51.8793 295.482 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -208.7589 -40.021)" id="Vector_123"
                                clip-path="url(#CLIPPATH_126)">
                                <clipPath id="CLIPPATH_126">
                                    <rect transform="matrix(1 0 0 1 208.7589 40.021)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(214,216,229); fill-rule: nonzero; opacity: 0.3;"
                                    transform=" translate(-87.7411, -261.479)"
                                    d="M 87.7473 274.546 L 65.1172 261.485 L 87.7473 248.412 L 110.365 261.485 L 87.7473 274.546 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -195.3278 -165.222)" id="Vector_124"
                                clip-path="url(#CLIPPATH_127)">
                                <clipPath id="CLIPPATH_127">
                                    <rect transform="matrix(1 0 0 1 195.3279 165.222)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-101.1722, -136.278)"
                                    d="M 101.178 149.339 L 78.5483 136.278 L 101.178 123.217 L 123.796 136.278 L 101.178 149.339 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -206.6368 -99.8685)" id="Vector_125"
                                clip-path="url(#CLIPPATH_128)">
                                <clipPath id="CLIPPATH_128">
                                    <rect transform="matrix(1 0 0 1 206.6369 99.8685)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-89.8631, -201.6315)"
                                    d="M 101.178 266.985 L 78.5483 253.912 V 136.278 L 101.178 149.351 V 266.985 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -206.6368 -99.8685)" id="Vector_126"
                                clip-path="url(#CLIPPATH_129)">
                                <clipPath id="CLIPPATH_129">
                                    <rect transform="matrix(1 0 0 1 206.6369 99.8685)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 0.1;"
                                    transform=" translate(-89.8631, -201.6315)"
                                    d="M 101.178 266.985 L 78.5483 253.912 V 136.278 L 101.178 149.351 V 266.985 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -184.013 -99.8685)" id="Vector_127"
                                clip-path="url(#CLIPPATH_130)">
                                <clipPath id="CLIPPATH_130">
                                    <rect transform="matrix(1 0 0 1 184.013 99.8685)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-112.487, -201.6315)"
                                    d="M 123.796 253.912 L 101.178 266.985 V 149.351 L 123.796 136.278 V 253.912 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -184.013 -99.8685)" id="Vector_128"
                                clip-path="url(#CLIPPATH_131)">
                                <clipPath id="CLIPPATH_131">
                                    <rect transform="matrix(1 0 0 1 184.013 99.8685)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 0.15;"
                                    transform=" translate(-112.487, -201.6315)"
                                    d="M 123.796 253.912 L 101.178 266.985 V 149.351 L 123.796 136.278 V 253.912 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -229.2668 -106.429)" id="Vector_129"
                                clip-path="url(#CLIPPATH_132)">
                                <clipPath id="CLIPPATH_132">
                                    <rect transform="matrix(1 0 0 1 229.2668 106.429)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-67.2332, -195.071)"
                                    d="M 67.2392 208.144 L 44.6091 195.071 L 67.2392 181.998 L 89.8573 195.071 L 67.2392 208.144 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -240.5759 -60.7285)" id="Vector_130"
                                clip-path="url(#CLIPPATH_133)">
                                <clipPath id="CLIPPATH_133">
                                    <rect transform="matrix(1 0 0 1 240.5759 60.7285)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-55.9241, -240.7715)"
                                    d="M 67.2392 286.473 L 44.6091 273.412 V 195.07 L 67.2392 208.143 V 286.473 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -240.5759 -60.7285)" id="Vector_131"
                                clip-path="url(#CLIPPATH_134)">
                                <clipPath id="CLIPPATH_134">
                                    <rect transform="matrix(1 0 0 1 240.5759 60.7285)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 0.1;"
                                    transform=" translate(-55.9241, -240.7715)"
                                    d="M 67.2392 286.473 L 44.6091 273.412 V 195.07 L 67.2392 208.143 V 286.473 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -217.9517 -60.7285)" id="Vector_132"
                                clip-path="url(#CLIPPATH_135)">
                                <clipPath id="CLIPPATH_135">
                                    <rect transform="matrix(1 0 0 1 217.9517 60.7285)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(233,234,242); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-78.5483, -240.7715)"
                                    d="M 89.8573 273.412 L 67.2393 286.473 V 208.143 L 89.8573 195.07 V 273.412 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -217.9517 -60.7285)" id="Vector_133"
                                clip-path="url(#CLIPPATH_136)">
                                <clipPath id="CLIPPATH_136">
                                    <rect transform="matrix(1 0 0 1 217.9517 60.7285)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 0.15;"
                                    transform=" translate(-78.5483, -240.7715)"
                                    d="M 89.8573 273.412 L 67.2393 286.473 V 208.143 L 89.8573 195.07 V 273.412 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -273.5986 -1.959)" id="Vector_134"
                                clip-path="url(#CLIPPATH_137)">
                                <clipPath id="CLIPPATH_137">
                                    <rect transform="matrix(1 0 0 1 273.5986 1.959)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(214,216,229); fill-rule: nonzero; opacity: 0.3;"
                                    transform=" translate(-22.9014, -299.541)"
                                    d="M 22.9074 312.608 L 0.277344 299.547 L 22.9074 286.474 L 45.5255 299.547 L 22.9074 312.608 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -265.4001 -44.338)" id="Vector_135"
                                clip-path="url(#CLIPPATH_138)">
                                <clipPath id="CLIPPATH_138">
                                    <rect transform="matrix(1 0 0 1 265.4001 44.338)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-31.0999, -257.162)"
                                    d="M 31.1059 270.229 L 8.47583 257.156 L 31.0939 244.095 L 53.724 257.156 L 31.1059 270.229 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -276.7092 -19.079)" id="Vector_136"
                                clip-path="url(#CLIPPATH_139)">
                                <clipPath id="CLIPPATH_139">
                                    <rect transform="matrix(1 0 0 1 276.7091 19.079)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-19.7909, -282.421)"
                                    d="M 31.1059 307.687 L 8.47583 294.614 V 257.155 L 31.1059 270.228 V 307.687 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -276.7092 -19.079)" id="Vector_137"
                                clip-path="url(#CLIPPATH_140)">
                                <clipPath id="CLIPPATH_140">
                                    <rect transform="matrix(1 0 0 1 276.7091 19.079)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 0.1;"
                                    transform=" translate(-19.7909, -282.421)"
                                    d="M 31.1059 307.687 L 8.47583 294.614 V 257.155 L 31.1059 270.228 V 307.687 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -254.085 -19.079)" id="Vector_138"
                                clip-path="url(#CLIPPATH_141)">
                                <clipPath id="CLIPPATH_141">
                                    <rect transform="matrix(1 0 0 1 254.085 19.079)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-42.415, -282.421)"
                                    d="M 53.724 294.614 L 31.106 307.687 V 270.228 L 53.724 257.155 V 294.614 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -254.085 -19.079)" id="Vector_139"
                                clip-path="url(#CLIPPATH_142)">
                                <clipPath id="CLIPPATH_142">
                                    <rect transform="matrix(1 0 0 1 254.085 19.079)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 0.15;"
                                    transform=" translate(-42.415, -282.421)"
                                    d="M 53.724 294.614 L 31.106 307.687 V 270.228 L 53.724 257.155 V 294.614 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -25.445 -282.175)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;"
                                clip-path="url(#CLIPPATH_143)">
                                <clipPath id="CLIPPATH_143">
                                    <rect transform="matrix(1 0 0 1 25.445 282.1751)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,42,48); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-271.055, -19.3249)"
                                    d="M 267.233 1.60442 C 268.27 -0.0478037 276.155 -1.14526 278.747 5.54804 C 279.735 8.08064 279.579 14.5569 280.398 18.6331 C 281.218 22.7094 283.171 25.0129 283.859 28.2811 C 284.546 31.5494 283.425 37.1211 275.419 38.098 C 267.414 39.0748 261.385 36.3131 259.505 33.7684 C 257.624 31.2238 257.588 25.833 259.505 22.9144 C 261.422 19.9959 262.941 17.6683 262.892 13.8936 L 267.233 1.60442 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -30.2372 -293.8189)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_2"
                                clip-path="url(#CLIPPATH_144)">
                                <clipPath id="CLIPPATH_144">
                                    <rect transform="matrix(1 0 0 1 30.2372 293.8189)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,42,48); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-266.2628, -7.6811)"
                                    d="M 272.477 0.458514 C 272.477 0.458514 266.449 -1.20577 262.892 1.95395 C 261.703 3.04768 260.838 4.44764 260.392 6.0005 C 259.945 7.55336 259.934 9.1992 260.361 10.7578 C 260.843 12.6391 261.795 15.1958 263.29 15.3406 C 264.785 15.4853 272.477 0.458514 272.477 0.458514 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -26.3559 -276.2628)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_3"
                                clip-path="url(#CLIPPATH_145)">
                                <clipPath id="CLIPPATH_145">
                                    <rect transform="matrix(1 0 0 1 26.3559 276.2628)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-270.1441, -25.2372)"
                                    d="M 274.708 16.6553 C 274.708 16.6553 274.322 23.2883 274.443 23.7707 C 274.563 24.2531 277.035 24.7234 277.734 25.3023 C 278.433 25.8812 274.117 32.5986 271.947 33.5996 C 269.777 34.6006 263.001 32.0438 262.531 28.6791 C 262.097 25.5917 264.472 23.1797 265.388 22.3355 C 266.006 22.2908 266.627 22.2908 267.245 22.3355 L 267.45 19.1276 C 270.404 18.0904 274.708 16.6553 274.708 16.6553 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -45.7404 -257.3964)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_4"
                                clip-path="url(#CLIPPATH_146)">
                                <clipPath id="CLIPPATH_146">
                                    <rect transform="matrix(1 0 0 1 45.7404 257.3964)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-250.7596, -44.1036)"
                                    d="M 255.236 52.0028 C 253.359 54.5783 251.14 56.8868 248.642 58.8649 C 247.844 59.7047 247.091 60.5863 246.387 61.5061 C 245.203 62.8724 243.669 63.8898 241.95 64.4487 C 240.455 64.8346 239.828 64.7382 239.539 64.4487 C 239.25 64.1593 239.406 63.7492 240.057 63.4839 C 241.122 63.1693 242.111 62.6398 242.963 61.9282 C 242.963 61.9282 241.576 62.5674 240.696 62.8689 C 239.918 63.1393 239.107 63.3016 238.285 63.3513 C 237.453 63.3513 236.597 62.3985 237.248 62.1453 C 237.899 61.892 238.454 61.8317 239.78 61.3614 C 240.46 61.1185 241.105 60.7859 241.697 60.3724 C 240.806 60.635 239.894 60.8246 238.972 60.9393 C 238.203 61.0649 237.414 60.973 236.694 60.6739 C 236.308 60.5051 235.97 59.8056 236.838 59.5765 C 237.96 59.4674 239.062 59.212 240.118 58.8167 C 241.13 58.3584 241.769 57.876 241.54 57.7795 C 241.311 57.6831 240.745 57.9966 239.732 57.9243 C 238.719 57.8519 237.767 57.2007 237.779 56.7183 C 237.791 56.2359 237.996 56.4771 238.984 56.3926 C 240.035 56.1344 241.103 55.953 242.179 55.8499 C 243.245 55.8907 244.311 55.7646 245.338 55.4761 C 246.411 55.1505 248.834 52.244 250.691 49.5787 C 252.712 46.5971 254.31 43.3504 255.441 39.9307 C 256.551 36.3127 257.853 29.4024 258.829 27.0145 C 259.806 24.6266 261.409 23.5533 262.965 23.505 C 264.785 23.4447 265.569 25.8447 265.087 27.919 C 264.243 31.4767 260.192 45.4904 255.236 52.0028 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -27.3107 -264.4801)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_5"
                                clip-path="url(#CLIPPATH_147)">
                                <clipPath id="CLIPPATH_147">
                                    <rect transform="matrix(1 0 0 1 27.3108 264.4801)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(244,244,244); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-269.1892, -37.0199)"
                                    d="M 275.624 24.4099 C 277.481 24.6993 279.603 25.6883 279.892 26.7134 C 280.668 30.3801 280.485 34.1849 279.362 37.7603 C 277.758 42.0296 275.926 49.7118 275.009 51.557 C 270.214 52.2247 265.334 51.2696 261.144 48.8435 C 261.144 48.8435 260.758 41.4386 260.734 38.9904 C 254.706 33.7685 259.866 27.3164 264.93 22.3115 C 265.54 22.2634 266.153 22.2634 266.763 22.3115 C 266.763 22.3115 262.241 27.6661 265.376 30.7535 C 272.128 28.643 273.466 25.6159 275.624 24.4099 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -26.2835 -290.1756)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_6"
                                clip-path="url(#CLIPPATH_148)">
                                <clipPath id="CLIPPATH_148">
                                    <rect transform="matrix(1 0 0 1 26.2835 290.1755)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-270.2165, -11.3245)"
                                    d="M 262.338 8.44188 C 263.013 4.1847 266.087 0.976743 270.476 1.20588 C 271.586 1.26891 272.673 1.55071 273.673 2.03508 C 274.674 2.51946 275.569 3.19687 276.308 4.0284 C 277.046 4.85992 277.613 5.82918 277.976 6.88047 C 278.338 7.93177 278.49 9.04438 278.421 10.1544 C 278.338 11.4443 277.96 12.698 277.316 13.8187 C 276.673 14.9395 275.78 15.8974 274.708 16.6186 C 274.556 17.2657 274.329 17.893 274.033 18.4879 C 272.477 20.2969 268.354 21.4426 266.992 21.4546 C 265.786 21.4546 264.797 20.3692 263.688 18.5482 C 261.397 14.7734 261.976 10.5524 262.338 8.44188 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -25.5836 -292.6143)" id="Vector_140"
                                clip-path="url(#CLIPPATH_149)">
                                <clipPath id="CLIPPATH_149">
                                    <rect transform="matrix(1 0 0 1 25.5836 292.6143)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,42,48); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-270.9164, -8.8857)"
                                    d="M 271.826 1.32695 C 274.901 1.91789 277.433 2.78621 278.264 5.81327 C 278.843 7.88759 279.591 11.8433 278.879 13.5317 L 278.433 14.7377 L 274.708 16.6552 C 274.708 16.6552 272.972 15.208 273.502 10.9629 C 273.486 10.3897 273.306 9.83309 272.984 9.35891 C 272.748 8.95831 272.577 8.52274 272.477 8.06849 C 272.034 6.92514 271.172 5.99368 270.066 5.46353 C 268.89 4.94376 267.609 4.70374 266.325 4.76233 C 265.041 4.82092 263.787 5.17652 262.663 5.80121 C 263.444 4.11545 264.781 2.75015 266.45 1.9352 C 268.119 1.12026 270.018 0.90545 271.826 1.32695 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -47.1648 -193.3869)" id="Vector_141"
                                clip-path="url(#CLIPPATH_150)">
                                <clipPath id="CLIPPATH_150">
                                    <rect transform="matrix(1 0 0 1 47.1648 193.3869)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,42,48); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-249.3352, -108.1131)"
                                    d="M 254.887 103.161 C 253.331 104.367 250.908 103.547 250.788 103.668 C 248.968 105.223 247.064 106.676 245.085 108.022 C 244.12 108.781 242.601 109.807 242.878 111.278 C 243.373 113.895 247.568 113.087 249.16 112.291 C 250.751 111.495 252.029 110.156 253.536 109.228 C 254.597 108.564 255.658 108.215 255.815 106.816 C 255.924 106.044 255.164 103.125 254.887 103.161 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -47.1362 -191.8048)" id="Vector_142"
                                clip-path="url(#CLIPPATH_151)">
                                <clipPath id="CLIPPATH_151">
                                    <rect transform="matrix(1 0 0 1 47.1362 191.8048)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(191,75,75); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-249.3638, -109.6952)"
                                    d="M 255.803 106.321 C 255.598 107.612 254.597 107.974 253.5 108.625 C 251.969 109.577 250.631 110.94 249.039 111.748 C 247.448 112.556 243.927 113.22 242.903 111.35 C 243.457 113.883 247.581 113.087 249.16 112.291 C 250.739 111.495 252.029 110.156 253.536 109.228 C 254.597 108.564 255.658 108.215 255.815 106.816 C 255.831 106.651 255.827 106.485 255.803 106.321 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -54.2092 -198.0047)" id="Vector_143"
                                clip-path="url(#CLIPPATH_152)">
                                <clipPath id="CLIPPATH_152">
                                    <rect transform="matrix(1 0 0 1 54.2092 198.0047)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,42,48); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-242.2908, -103.4953)"
                                    d="M 247.303 98.8916 C 245.881 100.098 243.686 99.3981 243.614 99.5067 C 241.951 100.923 240.213 102.248 238.405 103.474 C 237.513 104.174 236.127 105.115 236.38 106.453 C 236.826 108.865 240.672 108.118 242.131 107.382 C 243.59 106.646 244.759 105.428 246.134 104.584 C 247.11 103.969 248.075 103.655 248.232 102.413 C 248.191 101.184 247.874 99.9806 247.303 98.8916 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -54.1783 -196.4784)" id="Vector_144"
                                clip-path="url(#CLIPPATH_153)">
                                <clipPath id="CLIPPATH_153">
                                    <rect transform="matrix(1 0 0 1 54.1783 196.4784)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(191,75,75); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-242.3217, -105.0216)"
                                    d="M 248.22 101.932 C 248.027 103.138 247.074 103.439 246.098 104.042 C 244.747 104.923 243.542 106.129 242.023 106.9 C 240.504 107.672 237.345 108.251 236.404 106.539 C 236.911 108.854 240.684 108.13 242.131 107.395 C 243.578 106.659 244.759 105.441 246.134 104.597 C 247.11 103.982 248.075 103.668 248.232 102.426 C 248.245 102.261 248.241 102.096 248.22 101.932 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -41.5963 -225.7056)" id="Vector_145"
                                clip-path="url(#CLIPPATH_154)">
                                <clipPath id="CLIPPATH_154">
                                    <rect transform="matrix(1 0 0 1 41.5963 225.7056)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-254.9037, -75.7944)"
                                    d="M 268.86 53.1846 C 264.638 53.7467 260.343 53.1246 256.454 51.3877 C 256.527 52.7143 256.599 53.8841 256.599 53.8841 C 251.547 57.5021 241.42 63.4598 240.757 67.6084 C 241.42 80.7056 243.409 99.4227 243.976 99.688 C 245.555 100.448 246.664 100.327 247.412 99.5674 C 247.412 99.5674 250.595 88.4722 249.666 72.1912 C 249.666 72.1912 267.329 64.3643 268.487 60.1312 C 269.003 58.4046 269.167 56.5919 268.969 54.8007 C 268.957 54.27 268.921 53.7032 268.86 53.1846 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -33.943 -223.5884)" id="Vector_146"
                                clip-path="url(#CLIPPATH_155)">
                                <clipPath id="CLIPPATH_155">
                                    <rect transform="matrix(1 0 0 1 33.943 223.5884)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-262.557, -77.9116)"
                                    d="M 274.72 51.4844 C 271.373 52.9888 267.662 53.4874 264.038 52.9195 C 264.038 54.6682 264.291 57.9606 264.291 57.9606 C 259.215 61.5062 249.124 67.5362 248.473 71.6849 C 249.124 84.7941 250.353 103.764 250.884 104.006 C 251.565 104.291 252.308 104.396 253.041 104.309 C 253.774 104.222 254.472 103.948 255.068 103.511 C 255.068 103.511 258.263 92.5487 257.334 76.2677 C 257.334 75.9662 272.477 68.501 274.394 66.5353 C 276.311 64.5695 276.685 61.6268 276.637 58.841 C 276.505 56.2838 275.853 53.7805 274.72 51.4844 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -37.4582 -233.9515)" id="Vector_147"
                                clip-path="url(#CLIPPATH_156)">
                                <clipPath id="CLIPPATH_156">
                                    <rect transform="matrix(1 0 0 1 37.4582 233.9515)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(226,97,97); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-259.0418, -67.5485)"
                                    d="M 278.433 54.2707 C 278.433 54.2707 284.04 64.196 274.708 69.2974 C 264.858 74.6762 258.866 75.9304 258.866 75.9304 L 257.383 76.2802 C 257.847 79.7016 257.847 83.1701 257.383 86.5915 C 257.383 86.5915 250.354 89.0035 241.396 81.1524 L 238.43 71.5888 L 238.08 69.0562 C 237.91 68.1912 237.958 67.2975 238.219 66.4554 C 238.48 65.6133 238.946 64.8494 239.575 64.2322 C 241.721 62.2785 248.533 57.2857 252.765 54.4395 C 256.997 51.5933 260.421 48.8437 260.421 48.8437 L 261.156 48.1562 C 261.156 48.1562 266.184 52.1602 275.359 50.8215 C 276.564 51.7965 277.603 52.9615 278.433 54.2707 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -17.3315 -250.5956)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_7"
                                clip-path="url(#CLIPPATH_157)">
                                <clipPath id="CLIPPATH_157">
                                    <rect transform="matrix(1 0 0 1 17.3315 250.5956)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-279.1685, -50.9044)"
                                    d="M 272.887 68.9832 C 273.74 68.2139 274.642 67.5008 275.588 66.8485 C 276.593 66.3386 277.516 65.68 278.325 64.8948 C 279.181 64.0386 280.447 60.4326 281.11 56.9232 C 281.721 52.9974 281.655 48.996 280.917 45.0923 C 279.753 40.4218 278.184 35.8619 276.227 31.4645 C 275.021 28.8354 275.684 27.2314 276.818 26.0616 C 278.156 24.6988 279.542 24.735 281.134 28.4013 C 283.365 33.5481 285.015 38.928 286.053 44.4411 C 286.685 48.4412 286.628 52.5201 285.884 56.5011 C 285.228 59.995 284.151 63.3966 282.677 66.6315 C 282.267 67.5842 282.195 68.3802 281.628 70.2495 C 281.088 72.1508 280.095 73.8928 278.735 75.3267 C 277.529 76.4604 276.902 76.6774 276.576 76.5327 C 276.251 76.388 276.179 75.9056 276.673 75.3267 C 277.524 74.4674 278.214 73.4626 278.71 72.36 C 278.71 72.36 277.686 73.6745 277.01 74.4102 C 276.411 75.0747 275.721 75.6512 274.961 76.1227 C 274.225 76.5689 273.056 76.0383 273.538 75.4473 C 274.02 74.8564 274.563 74.5187 275.552 73.4092 C 276.082 72.828 276.54 72.184 276.914 71.4916 C 276.212 72.1916 275.454 72.8329 274.647 73.4092 C 274.02 73.9106 273.263 74.2242 272.465 74.3137 C 272.055 74.3137 271.477 73.8313 272.176 73.168 C 273.172 72.4782 274.079 71.6681 274.876 70.756 C 275.624 69.8032 276.01 69.0193 275.769 69.0435 C 275.528 69.0676 275.13 69.6465 274.177 70.0927 C 273.225 70.5389 272.103 70.3821 271.911 69.8515 C 271.718 69.3208 272.007 69.562 272.887 68.9832 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -17.3564 -271.28)" id="Vector_148"
                                clip-path="url(#CLIPPATH_158)">
                                <clipPath id="CLIPPATH_158">
                                    <rect transform="matrix(1 0 0 1 17.3564 271.28)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(237,237,237); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-279.1436, -30.22)"
                                    d="M 283.569 33.3585 C 283.569 33.3585 280.181 36.3735 276.408 35.7705 L 274.889 29.439 C 274.889 29.439 273.888 26.1225 276.733 24.8562 C 279.579 23.5899 282.34 26.9064 283.569 33.3585 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -35.356 -275.2654)" id="Vector_149"
                                clip-path="url(#CLIPPATH_159)">
                                <clipPath id="CLIPPATH_159">
                                    <rect transform="matrix(1 0 0 1 35.356 275.2654)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(237,237,237); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-261.144, -26.2346)"
                                    d="M 264.93 22.3111 C 264.93 22.3111 261.253 21.1896 257.358 29.3301 L 258.817 30.2104 C 260.639 27.4174 262.684 24.7758 264.93 22.3111 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -38.563 -241.1473)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_8"
                                clip-path="url(#CLIPPATH_160)">
                                <clipPath id="CLIPPATH_160">
                                    <rect transform="matrix(1 0 0 1 38.563 241.1473)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(244,244,244); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-257.937, -60.3527)"
                                    d="M 239.563 57.4421 L 252.656 49.8804 C 252.77 49.8148 252.899 49.7803 253.03 49.7803 C 253.161 49.7803 253.29 49.8148 253.404 49.8804 L 276.311 63.1464 L 262.844 70.9251 L 239.563 57.4421 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -33.3905 -232.9188)" id="Vector_150"
                                clip-path="url(#CLIPPATH_161)">
                                <clipPath id="CLIPPATH_161">
                                    <rect transform="matrix(1 0 0 1 33.3905 232.9188)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-263.1095, -68.5812)"
                                    d="M 263.242 67.9226 L 264.243 68.5014 C 264.327 68.5014 264.315 68.6341 264.243 68.6944 L 263.29 69.2371 C 263.241 69.2606 263.188 69.2728 263.134 69.2728 C 263.079 69.2728 263.026 69.2606 262.977 69.2371 L 261.976 68.6582 C 261.892 68.6582 261.904 68.5256 261.976 68.4653 L 262.941 67.9226 C 262.988 67.9009 263.039 67.8896 263.091 67.8896 C 263.143 67.8896 263.195 67.9009 263.242 67.9226 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -34.8098 -233.7304)" id="Vector_151"
                                clip-path="url(#CLIPPATH_162)">
                                <clipPath id="CLIPPATH_162">
                                    <rect transform="matrix(1 0 0 1 34.8098 233.7304)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-261.6902, -67.7696)"
                                    d="M 261.831 67.1144 L 262.832 67.6933 C 262.904 67.6933 262.904 67.8139 262.832 67.8742 L 261.88 68.429 C 261.829 68.4527 261.773 68.465 261.717 68.465 C 261.661 68.465 261.605 68.4527 261.554 68.429 L 260.553 67.8501 C 260.469 67.8501 260.481 67.7174 260.553 67.6571 L 261.506 67.1144 C 261.556 67.088 261.612 67.0742 261.669 67.0742 C 261.725 67.0742 261.781 67.088 261.831 67.1144 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -36.2177 -234.5128)" id="Vector_152"
                                clip-path="url(#CLIPPATH_163)">
                                <clipPath id="CLIPPATH_163">
                                    <rect transform="matrix(1 0 0 1 36.2177 234.5128)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-260.2823, -66.9872)"
                                    d="M 260.421 66.33 L 261.422 66.9088 C 261.506 66.9088 261.494 67.0415 261.422 67.0897 L 260.469 67.6445 C 260.418 67.6682 260.363 67.6805 260.306 67.6805 C 260.25 67.6805 260.195 67.6682 260.144 67.6445 L 259.143 67.0656 C 259.058 67.0656 259.071 66.933 259.143 66.8847 L 260.095 66.33 C 260.146 66.3062 260.202 66.2939 260.258 66.2939 C 260.314 66.2939 260.37 66.3062 260.421 66.33 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -37.6538 -235.3712)" id="Vector_153"
                                clip-path="url(#CLIPPATH_164)">
                                <clipPath id="CLIPPATH_164">
                                    <rect transform="matrix(1 0 0 1 37.6538 235.3712)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-258.8462, -66.1288)"
                                    d="M 258.998 65.4738 L 259.999 66.0527 C 260.071 66.0527 259.999 66.1853 259.999 66.2336 L 259.034 66.7883 C 258.985 66.8119 258.932 66.8241 258.877 66.8241 C 258.823 66.8241 258.77 66.8119 258.721 66.7883 L 257.72 66.2095 C 257.636 66.2095 257.648 66.0768 257.72 66.0286 L 258.672 65.4738 C 258.723 65.4474 258.779 65.4336 258.835 65.4336 C 258.892 65.4336 258.948 65.4474 258.998 65.4738 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -39.0612 -236.1886)" id="Vector_154"
                                clip-path="url(#CLIPPATH_165)">
                                <clipPath id="CLIPPATH_165">
                                    <rect transform="matrix(1 0 0 1 39.0612 236.1886)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-257.4388, -65.3114)"
                                    d="M 257.575 64.6539 L 258.576 65.2328 C 258.66 65.2328 258.648 65.3654 258.576 65.4137 L 257.624 65.9684 C 257.573 65.9922 257.517 66.0045 257.461 66.0045 C 257.405 66.0045 257.349 65.9922 257.298 65.9684 L 256.297 65.3896 C 256.225 65.3896 256.225 65.2569 256.297 65.2087 L 257.262 64.6539 C 257.311 64.6304 257.364 64.6182 257.419 64.6182 C 257.473 64.6182 257.526 64.6304 257.575 64.6539 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -40.486 -237.0083)" id="Vector_155"
                                clip-path="url(#CLIPPATH_166)">
                                <clipPath id="CLIPPATH_166">
                                    <rect transform="matrix(1 0 0 1 40.486 237.0084)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-256.014, -64.4916)"
                                    d="M 256.153 63.8336 L 257.153 64.4125 C 257.238 64.4125 257.226 64.5452 257.153 64.5934 L 256.189 65.1482 C 256.141 65.1746 256.087 65.1884 256.032 65.1884 C 255.977 65.1884 255.923 65.1746 255.875 65.1482 L 254.875 64.5693 C 254.79 64.5693 254.802 64.4487 254.875 64.3884 L 255.827 63.8336 C 255.878 63.8082 255.933 63.7949 255.99 63.7949 C 256.047 63.7949 256.102 63.8082 256.153 63.8336 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -41.8965 -237.8271)" id="Vector_156"
                                clip-path="url(#CLIPPATH_167)">
                                <clipPath id="CLIPPATH_167">
                                    <rect transform="matrix(1 0 0 1 41.8965 237.8271)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-254.6035, -63.6729)"
                                    d="M 254.742 63.0136 L 255.743 63.5924 C 255.827 63.5924 255.815 63.7251 255.743 63.7733 L 254.79 64.3281 C 254.74 64.3545 254.684 64.3683 254.628 64.3683 C 254.571 64.3683 254.515 64.3545 254.465 64.3281 L 253.464 63.7492 C 253.38 63.7492 253.392 63.6286 253.464 63.5683 L 254.417 63.0136 C 254.468 62.9898 254.523 62.9775 254.579 62.9775 C 254.636 62.9775 254.691 62.9898 254.742 63.0136 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -43.3491 -238.6541)" id="Vector_157"
                                clip-path="url(#CLIPPATH_168)">
                                <clipPath id="CLIPPATH_168">
                                    <rect transform="matrix(1 0 0 1 43.3491 238.6541)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-253.1509, -62.8459)"
                                    d="M 253.32 62.1935 L 254.32 62.7724 C 254.405 62.7724 254.393 62.905 254.32 62.9653 L 253.368 63.508 C 253.32 63.5344 253.266 63.5483 253.211 63.5483 C 253.156 63.5483 253.102 63.5344 253.054 63.508 L 251.981 62.9533 C 251.897 62.9533 251.909 62.8206 251.981 62.7603 L 252.934 62.2055 C 252.99 62.1673 253.057 62.1459 253.125 62.1437 C 253.193 62.1416 253.261 62.1588 253.32 62.1935 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -44.7175 -239.4471)" id="Vector_158"
                                clip-path="url(#CLIPPATH_169)">
                                <clipPath id="CLIPPATH_169">
                                    <rect transform="matrix(1 0 0 1 44.7175 239.447)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-251.7825, -62.053)"
                                    d="M 251.909 61.3859 L 252.91 61.9527 C 252.994 61.9527 252.982 62.0853 252.91 62.1456 L 251.981 62.7125 C 251.93 62.7362 251.875 62.7485 251.819 62.7485 C 251.762 62.7485 251.707 62.7362 251.656 62.7125 L 250.655 62.1336 C 250.571 62.1336 250.583 62.0009 250.655 61.9406 L 251.608 61.3979 C 251.654 61.3735 251.705 61.3598 251.757 61.3577 C 251.809 61.3556 251.861 61.3652 251.909 61.3859 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -46.1465 -240.2794)" id="Vector_159"
                                clip-path="url(#CLIPPATH_170)">
                                <clipPath id="CLIPPATH_170">
                                    <rect transform="matrix(1 0 0 1 46.1465 240.2793)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-250.3535, -61.2206)"
                                    d="M 250.486 60.5656 L 251.487 61.1445 C 251.571 61.1445 251.559 61.2651 251.487 61.3254 L 250.534 61.8802 C 250.485 61.9037 250.432 61.9159 250.378 61.9159 C 250.323 61.9159 250.27 61.9037 250.221 61.8802 L 249.22 61.3013 C 249.136 61.3013 249.148 61.1686 249.22 61.1204 L 250.173 60.5656 C 250.221 60.5392 250.275 60.5254 250.329 60.5254 C 250.384 60.5254 250.438 60.5392 250.486 60.5656 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -47.5653 -241.0995)" id="Vector_160"
                                clip-path="url(#CLIPPATH_171)">
                                <clipPath id="CLIPPATH_171">
                                    <rect transform="matrix(1 0 0 1 47.5653 241.0995)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-248.9347, -60.4005)"
                                    d="M 249.076 59.7453 L 250.076 60.3242 C 250.149 60.3242 250.149 60.4448 250.076 60.5051 L 249.124 61.0598 C 249.073 61.0836 249.017 61.0959 248.961 61.0959 C 248.905 61.0959 248.849 61.0836 248.798 61.0598 L 247.798 60.4809 C 247.713 60.4809 247.725 60.3483 247.798 60.3 L 248.75 59.7453 C 248.8 59.7189 248.856 59.7051 248.913 59.7051 C 248.97 59.7051 249.025 59.7189 249.076 59.7453 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -48.981 -241.9173)" id="Vector_161"
                                clip-path="url(#CLIPPATH_172)">
                                <clipPath id="CLIPPATH_172">
                                    <rect transform="matrix(1 0 0 1 48.981 241.9173)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-247.519, -59.5827)"
                                    d="M 247.653 58.9254 L 248.654 59.5043 C 248.738 59.5043 248.726 59.6369 248.654 59.6852 L 247.701 60.2399 C 247.652 60.2634 247.599 60.2757 247.545 60.2757 C 247.49 60.2757 247.437 60.2634 247.388 60.2399 L 246.375 59.661 C 246.303 59.661 246.315 59.5284 246.375 59.4801 L 247.34 58.9254 C 247.388 58.9019 247.442 58.8896 247.496 58.8896 C 247.551 58.8896 247.604 58.9019 247.653 58.9254 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -50.401 -242.7353)" id="Vector_162"
                                clip-path="url(#CLIPPATH_173)">
                                <clipPath id="CLIPPATH_173">
                                    <rect transform="matrix(1 0 0 1 50.401 242.7353)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-246.099, -58.7647)"
                                    d="M 246.242 58.1054 L 247.243 58.6842 C 247.315 58.6842 247.303 58.8169 247.243 58.8651 L 246.279 59.4199 C 246.231 59.4463 246.177 59.4601 246.122 59.4601 C 246.067 59.4601 246.013 59.4463 245.965 59.4199 L 244.964 58.841 C 244.88 58.841 244.892 58.7084 244.964 58.6601 L 245.917 58.1054 C 245.968 58.0816 246.023 58.0693 246.08 58.0693 C 246.136 58.0693 246.191 58.0816 246.242 58.1054 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -52.1566 -243.7513)" id="Vector_163"
                                clip-path="url(#CLIPPATH_174)">
                                <clipPath id="CLIPPATH_174">
                                    <rect transform="matrix(1 0 0 1 52.1566 243.7512)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-244.3434, -57.7488)"
                                    d="M 244.132 56.8874 L 245.82 57.8643 C 245.905 57.8643 245.893 57.9969 245.82 58.0452 L 244.868 58.5999 C 244.818 58.6263 244.762 58.6401 244.705 58.6401 C 244.648 58.6401 244.593 58.6263 244.542 58.5999 L 242.866 57.6351 C 242.782 57.6351 242.794 57.5025 242.866 57.4422 L 243.819 56.8995 C 243.867 56.8741 243.92 56.8598 243.974 56.8577 C 244.029 56.8556 244.083 56.8658 244.132 56.8874 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -34.12 -234.9198)" id="Vector_164"
                                clip-path="url(#CLIPPATH_175)">
                                <clipPath id="CLIPPATH_175">
                                    <rect transform="matrix(1 0 0 1 34.12 234.9198)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-262.38, -66.5802)"
                                    d="M 262.519 65.9208 L 263.519 66.4997 C 263.604 66.4997 263.592 66.6323 263.519 66.6806 L 262.567 67.2353 C 262.517 67.2617 262.461 67.2755 262.404 67.2755 C 262.347 67.2755 262.291 67.2617 262.241 67.2353 L 261.241 66.6564 C 261.156 66.6564 261.168 66.5238 261.241 66.4755 L 262.193 65.9208 C 262.244 65.8971 262.3 65.8848 262.356 65.8848 C 262.412 65.8848 262.468 65.8971 262.519 65.9208 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -35.5402 -235.7159)" id="Vector_165"
                                clip-path="url(#CLIPPATH_176)">
                                <clipPath id="CLIPPATH_176">
                                    <rect transform="matrix(1 0 0 1 35.5402 235.7159)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-260.9598, -65.7841)"
                                    d="M 261.096 65.1246 L 262.097 65.7035 C 262.181 65.7035 262.169 65.8361 262.097 65.8844 L 261.144 66.4391 C 261.094 66.4655 261.038 66.4793 260.981 66.4793 C 260.925 66.4793 260.869 66.4655 260.819 66.4391 L 259.818 65.8603 C 259.746 65.8603 259.746 65.7276 259.818 65.6794 L 260.782 65.1246 C 260.831 65.1011 260.885 65.0889 260.939 65.0889 C 260.993 65.0889 261.047 65.1011 261.096 65.1246 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -36.9595 -236.5607)" id="Vector_166"
                                clip-path="url(#CLIPPATH_177)">
                                <clipPath id="CLIPPATH_177">
                                    <rect transform="matrix(1 0 0 1 36.9595 236.5607)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-259.5405, -64.9394)"
                                    d="M 259.673 64.2799 L 260.674 64.8588 C 260.758 64.8588 260.746 64.9914 260.674 65.0397 L 259.721 65.5944 C 259.673 65.6208 259.619 65.6346 259.565 65.6346 C 259.51 65.6346 259.456 65.6208 259.408 65.5944 L 258.407 65.0155 C 258.323 65.0155 258.335 64.8829 258.407 64.8346 L 259.36 64.2799 C 259.409 64.2564 259.462 64.2441 259.516 64.2441 C 259.571 64.2441 259.624 64.2564 259.673 64.2799 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -38.3805 -237.38)" id="Vector_167"
                                clip-path="url(#CLIPPATH_178)">
                                <clipPath id="CLIPPATH_178">
                                    <rect transform="matrix(1 0 0 1 38.3805 237.38)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-258.1195, -64.12)"
                                    d="M 258.251 63.4605 L 259.263 64.0394 C 259.336 64.0394 259.324 64.1721 259.263 64.2203 L 258.299 64.7751 C 258.251 64.8015 258.197 64.8153 258.142 64.8153 C 258.087 64.8153 258.033 64.8015 257.985 64.7751 L 256.985 64.1962 C 256.9 64.1962 256.912 64.0635 256.985 64.0153 L 257.937 63.4605 C 257.986 63.437 258.04 63.4248 258.094 63.4248 C 258.148 63.4248 258.202 63.437 258.251 63.4605 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -39.8368 -238.1328)" id="Vector_168"
                                clip-path="url(#CLIPPATH_179)">
                                <clipPath id="CLIPPATH_179">
                                    <rect transform="matrix(1 0 0 1 39.8368 238.1327)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-256.6632, -63.3672)"
                                    d="M 256.804 62.7121 L 257.805 63.291 C 257.877 63.291 257.877 63.4116 257.805 63.4719 L 256.852 64.0266 C 256.801 64.0504 256.746 64.0626 256.689 64.0626 C 256.633 64.0626 256.578 64.0504 256.527 64.0266 L 255.526 63.4477 C 255.442 63.4477 255.454 63.3151 255.526 63.2548 L 256.478 62.7121 C 256.529 62.6857 256.584 62.6719 256.641 62.6719 C 256.698 62.6719 256.754 62.6857 256.804 62.7121 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -41.207 -239.0126)" id="Vector_169"
                                clip-path="url(#CLIPPATH_180)">
                                <clipPath id="CLIPPATH_180">
                                    <rect transform="matrix(1 0 0 1 41.207 239.0126)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-255.293, -62.4874)"
                                    d="M 255.429 61.8322 L 256.43 62.4111 C 256.515 62.4111 256.502 62.5317 256.43 62.592 L 255.478 63.1467 C 255.427 63.1705 255.371 63.1828 255.315 63.1828 C 255.259 63.1828 255.203 63.1705 255.152 63.1467 L 254.151 62.5679 C 254.079 62.5679 254.079 62.4352 254.151 62.3749 L 255.104 61.8322 C 255.154 61.8058 255.21 61.792 255.267 61.792 C 255.323 61.792 255.379 61.8058 255.429 61.8322 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -42.626 -239.8317)" id="Vector_170"
                                clip-path="url(#CLIPPATH_181)">
                                <clipPath id="CLIPPATH_181">
                                    <rect transform="matrix(1 0 0 1 42.626 239.8317)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-253.874, -61.6683)"
                                    d="M 254.007 61.0116 L 255.007 61.5905 C 255.092 61.5905 255.08 61.7111 255.007 61.7714 L 254.055 62.3262 C 254.006 62.3497 253.952 62.3619 253.898 62.3619 C 253.844 62.3619 253.79 62.3497 253.741 62.3262 L 252.741 61.7473 C 252.656 61.7473 252.668 61.6146 252.741 61.5664 L 253.705 61.0116 C 253.752 60.9873 253.803 60.9746 253.856 60.9746 C 253.908 60.9746 253.96 60.9873 254.007 61.0116 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -44.0545 -240.6547)" id="Vector_171"
                                clip-path="url(#CLIPPATH_182)">
                                <clipPath id="CLIPPATH_182">
                                    <rect transform="matrix(1 0 0 1 44.0545 240.6547)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-252.4455, -60.8453)"
                                    d="M 252.584 60.1921 L 253.585 60.7709 C 253.669 60.7709 253.657 60.8915 253.585 60.9518 L 252.62 61.5066 C 252.571 61.5301 252.518 61.5423 252.464 61.5423 C 252.409 61.5423 252.356 61.5301 252.307 61.5066 L 251.306 60.9277 C 251.222 60.9277 251.234 60.7951 251.306 60.7468 L 252.259 60.1921 C 252.308 60.1635 252.364 60.1484 252.421 60.1484 C 252.479 60.1484 252.535 60.1635 252.584 60.1921 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -45.4673 -241.4726)" id="Vector_172"
                                clip-path="url(#CLIPPATH_183)">
                                <clipPath id="CLIPPATH_183">
                                    <rect transform="matrix(1 0 0 1 45.4673 241.4726)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-251.0327, -60.0274)"
                                    d="M 251.174 59.3722 L 252.174 59.9511 C 252.247 59.9511 252.247 60.0717 252.174 60.132 L 251.222 60.6868 C 251.171 60.7105 251.115 60.7228 251.059 60.7228 C 251.003 60.7228 250.947 60.7105 250.896 60.6868 L 249.896 60.1079 C 249.811 60.1079 249.823 59.9752 249.896 59.927 L 250.848 59.3722 C 250.898 59.3458 250.954 59.332 251.011 59.332 C 251.067 59.332 251.123 59.3458 251.174 59.3722 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -46.8612 -242.3182)" id="Vector_173"
                                clip-path="url(#CLIPPATH_184)">
                                <clipPath id="CLIPPATH_184">
                                    <rect transform="matrix(1 0 0 1 46.8612 242.3182)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-249.6388, -59.1818)"
                                    d="M 249.751 58.5521 L 250.776 59.0948 C 250.86 59.0948 250.848 59.2154 250.776 59.2757 L 249.823 59.8304 C 249.772 59.8542 249.717 59.8665 249.66 59.8665 C 249.604 59.8665 249.549 59.8542 249.498 59.8304 L 248.497 59.2516 C 248.425 59.2516 248.425 59.1189 248.497 59.0707 L 249.449 58.5159 C 249.499 58.4989 249.552 58.4933 249.604 58.4996 C 249.656 58.5058 249.706 58.5238 249.751 58.5521 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -48.2925 -243.0843)" id="Vector_174"
                                clip-path="url(#CLIPPATH_185)">
                                <clipPath id="CLIPPATH_185">
                                    <rect transform="matrix(1 0 0 1 48.2925 243.0844)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-248.2075, -58.4156)"
                                    d="M 248.364 57.7316 L 249.365 58.3105 C 249.449 58.3105 249.437 58.4311 249.365 58.4914 L 248.364 59.0944 C 248.315 59.1179 248.262 59.1301 248.207 59.1301 C 248.153 59.1301 248.1 59.1179 248.051 59.0944 L 247.05 58.5155 C 246.966 58.5155 246.978 58.3829 247.05 58.3346 L 248.015 57.7799 C 248.062 57.739 248.12 57.7128 248.182 57.7042 C 248.244 57.6957 248.307 57.7052 248.364 57.7316 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -49.7275 -243.9337)" id="Vector_175"
                                clip-path="url(#CLIPPATH_186)">
                                <clipPath id="CLIPPATH_186">
                                    <rect transform="matrix(1 0 0 1 49.7275 243.9337)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-246.7725, -57.5663)"
                                    d="M 246.905 56.9113 L 247.906 57.4902 C 247.99 57.4902 247.978 57.6108 247.906 57.6711 L 246.954 58.2259 C 246.905 58.2494 246.851 58.2616 246.797 58.2616 C 246.743 58.2616 246.689 58.2494 246.64 58.2259 L 245.639 57.647 C 245.555 57.647 245.567 57.5143 245.639 57.4661 L 246.592 56.9113 C 246.64 56.8849 246.694 56.8711 246.749 56.8711 C 246.803 56.8711 246.857 56.8849 246.905 56.9113 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -32.3596 -233.9029)" id="Vector_176"
                                clip-path="url(#CLIPPATH_187)">
                                <clipPath id="CLIPPATH_187">
                                    <rect transform="matrix(1 0 0 1 32.3596 233.9029)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-264.1404, -67.5971)"
                                    d="M 263.929 66.7408 L 265.617 67.7177 C 265.702 67.7177 265.69 67.8383 265.617 67.8986 L 264.665 68.4533 C 264.616 68.4769 264.562 68.4891 264.508 68.4891 C 264.454 68.4891 264.4 68.4769 264.351 68.4533 L 262.663 67.4765 C 262.579 67.4765 262.591 67.3438 262.663 67.2956 L 263.616 66.7408 C 263.665 66.7173 263.718 66.7051 263.773 66.7051 C 263.827 66.7051 263.88 66.7173 263.929 66.7408 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -50.6571 -245.1187)" id="Vector_177"
                                clip-path="url(#CLIPPATH_188)">
                                <clipPath id="CLIPPATH_188">
                                    <rect transform="matrix(1 0 0 1 50.6572 245.1188)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-245.8428, -56.3812)"
                                    d="M 244.205 56.8395 L 245.205 57.4184 C 245.252 57.4418 245.304 57.4539 245.356 57.4539 C 245.409 57.4539 245.46 57.4418 245.507 57.4184 L 246.508 56.8395 C 246.526 56.8327 246.542 56.8204 246.553 56.8042 C 246.564 56.788 246.57 56.7688 246.57 56.7491 C 246.57 56.7294 246.564 56.7102 246.553 56.694 C 246.542 56.6778 246.526 56.6655 246.508 56.6586 H 246.423 C 246.408 56.6503 246.396 56.6381 246.387 56.6232 C 246.378 56.6084 246.373 56.5915 246.373 56.5742 C 246.373 56.557 246.378 56.5401 246.387 56.5252 C 246.396 56.5104 246.408 56.4982 246.423 56.4898 L 247.496 55.8748 C 247.511 55.8664 247.524 55.8542 247.533 55.8393 C 247.541 55.8245 247.546 55.8076 247.546 55.7903 C 247.546 55.7731 247.541 55.7562 247.533 55.7413 C 247.524 55.7265 247.511 55.7143 247.496 55.7059 L 246.857 55.3441 C 246.81 55.3208 246.759 55.3086 246.707 55.3086 C 246.654 55.3086 246.603 55.3208 246.556 55.3441 L 245.555 55.923 L 245.35 56.0315 L 245.205 56.128 L 245.049 56.2124 L 244.193 56.7069 C 244.12 56.6828 244.12 56.7913 244.205 56.8395 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -27.9035 -236.0899)" id="Vector_178"
                                clip-path="url(#CLIPPATH_189)">
                                <clipPath id="CLIPPATH_189">
                                    <rect transform="matrix(1 0 0 1 27.9035 236.0899)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-268.5965, -65.41)"
                                    d="M 268.728 64.7506 L 269.74 65.3295 C 269.813 65.3295 269.801 65.4621 269.74 65.5104 L 268.776 66.0651 C 268.728 66.0915 268.674 66.1053 268.619 66.1053 C 268.564 66.1053 268.51 66.0915 268.462 66.0651 L 267.462 65.4862 C 267.377 65.4862 267.389 65.3536 267.462 65.3053 L 268.414 64.7506 C 268.463 64.7271 268.517 64.7148 268.571 64.7148 C 268.625 64.7148 268.679 64.7271 268.728 64.7506 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -29.3155 -236.9189)" id="Vector_179"
                                clip-path="url(#CLIPPATH_190)">
                                <clipPath id="CLIPPATH_190">
                                    <rect transform="matrix(1 0 0 1 29.3155 236.919)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-267.1845, -64.581)"
                                    d="M 267.317 63.9187 L 268.318 64.4976 C 268.402 64.4976 268.39 64.6302 268.318 64.6905 L 267.365 65.2332 C 267.317 65.2596 267.264 65.2734 267.209 65.2734 C 267.154 65.2734 267.1 65.2596 267.052 65.2332 L 266.051 64.6664 C 265.967 64.6664 265.979 64.5337 266.051 64.4734 L 267.004 63.9307 C 267.052 63.9053 267.105 63.891 267.159 63.8889 C 267.213 63.8869 267.267 63.897 267.317 63.9187 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -30.7278 -237.7226)" id="Vector_180"
                                clip-path="url(#CLIPPATH_191)">
                                <clipPath id="CLIPPATH_191">
                                    <rect transform="matrix(1 0 0 1 30.7278 237.7226)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-265.7722, -63.7774)"
                                    d="M 265.906 63.1223 L 266.907 63.7011 C 266.992 63.7011 266.979 63.8217 266.907 63.882 L 265.955 64.4368 C 265.904 64.4605 265.848 64.4728 265.792 64.4728 C 265.736 64.4728 265.68 64.4605 265.629 64.4368 L 264.628 63.8579 C 264.556 63.8579 264.568 63.7253 264.628 63.677 L 265.593 63.1223 C 265.641 63.0959 265.695 63.082 265.75 63.082 C 265.804 63.082 265.858 63.0959 265.906 63.1223 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -42.7645 -244.6767)" id="Vector_181"
                                clip-path="url(#CLIPPATH_192)">
                                <clipPath id="CLIPPATH_192">
                                    <rect transform="matrix(1 0 0 1 42.7645 244.6767)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-253.7355, -56.8233)"
                                    d="M 253.874 56.164 L 254.875 56.7428 C 254.959 56.7428 254.947 56.8755 254.875 56.9358 L 253.922 57.4785 C 253.872 57.5049 253.816 57.5187 253.759 57.5187 C 253.703 57.5187 253.647 57.5049 253.597 57.4785 L 252.596 56.8996 C 252.512 56.8996 252.524 56.779 252.596 56.7187 L 253.548 56.164 C 253.599 56.1402 253.655 56.1279 253.711 56.1279 C 253.767 56.1279 253.823 56.1402 253.874 56.164 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -44.1773 -245.4894)" id="Vector_182"
                                clip-path="url(#CLIPPATH_193)">
                                <clipPath id="CLIPPATH_193">
                                    <rect transform="matrix(1 0 0 1 44.1773 245.4894)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-252.3227, -56.0106)"
                                    d="M 252.464 55.3556 L 253.464 55.9345 C 253.537 55.9345 253.537 56.0551 253.464 56.1154 L 252.5 56.6702 C 252.451 56.6937 252.397 56.7059 252.343 56.7059 C 252.289 56.7059 252.235 56.6937 252.186 56.6702 L 251.186 56.0913 C 251.101 56.0913 251.113 55.9586 251.186 55.9104 L 252.138 55.3556 C 252.188 55.3292 252.244 55.3154 252.301 55.3154 C 252.358 55.3154 252.413 55.3292 252.464 55.3556 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -45.5915 -246.3048)" id="Vector_183"
                                clip-path="url(#CLIPPATH_194)">
                                <clipPath id="CLIPPATH_194">
                                    <rect transform="matrix(1 0 0 1 45.5915 246.3048)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-250.9085, -55.1953)"
                                    d="M 251.041 54.5357 L 252.042 55.1146 C 252.126 55.1146 252.114 55.2473 252.042 55.2955 L 251.089 55.8503 C 251.041 55.8767 250.987 55.8905 250.932 55.8905 C 250.878 55.8905 250.824 55.8767 250.776 55.8503 L 249.775 55.2714 C 249.691 55.2714 249.703 55.1387 249.775 55.0905 L 250.727 54.5357 C 250.776 54.5122 250.83 54.5 250.884 54.5 C 250.938 54.5 250.992 54.5122 251.041 54.5357 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -47.0025 -247.1235)" id="Vector_184"
                                clip-path="url(#CLIPPATH_195)">
                                <clipPath id="CLIPPATH_195">
                                    <rect transform="matrix(1 0 0 1 47.0025 247.1235)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-249.4975, -54.3765)"
                                    d="M 249.63 53.7155 L 250.631 54.2944 C 250.715 54.2944 250.703 54.4271 250.631 54.4874 L 249.678 55.0301 C 249.63 55.0565 249.577 55.0703 249.522 55.0703 C 249.467 55.0703 249.413 55.0565 249.365 55.0301 L 248.364 54.4512 C 248.28 54.4512 248.292 54.3306 248.364 54.2703 L 249.329 53.7155 C 249.376 53.6938 249.427 53.6826 249.48 53.6826 C 249.532 53.6826 249.583 53.6938 249.63 53.7155 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -32.3355 -238.6429)" id="Vector_185"
                                clip-path="url(#CLIPPATH_196)">
                                <clipPath id="CLIPPATH_196">
                                    <rect transform="matrix(1 0 0 1 32.3355 238.643)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-264.1645, -62.857)"
                                    d="M 264.134 62.0977 L 265.497 62.8816 C 265.581 62.8816 265.569 63.0143 265.497 63.0625 L 264.544 63.6173 C 264.494 63.6437 264.438 63.6575 264.381 63.6575 C 264.325 63.6575 264.269 63.6437 264.219 63.6173 L 262.832 62.8454 C 262.748 62.8454 262.76 62.7128 262.832 62.6525 L 263.785 62.1098 C 263.837 62.0772 263.896 62.059 263.958 62.0568 C 264.019 62.0547 264.08 62.0688 264.134 62.0977 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -41.1711 -243.759)" id="Vector_186"
                                clip-path="url(#CLIPPATH_197)">
                                <clipPath id="CLIPPATH_197">
                                    <rect transform="matrix(1 0 0 1 41.1711 243.7589)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-255.3289, -57.7411)"
                                    d="M 255.285 56.9844 L 256.647 57.7683 C 256.731 57.7683 256.719 57.901 256.647 57.9613 L 255.695 58.504 C 255.646 58.5275 255.592 58.5397 255.538 58.5397 C 255.484 58.5397 255.43 58.5275 255.381 58.504 L 254.007 57.708 C 253.934 57.708 253.934 57.5754 254.007 57.5271 L 254.971 56.9724 C 255.021 56.9507 255.075 56.9406 255.129 56.9427 C 255.184 56.9447 255.237 56.959 255.285 56.9844 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -36.7541 -241.2007)" id="Vector_187"
                                clip-path="url(#CLIPPATH_198)">
                                <clipPath id="CLIPPATH_198">
                                    <rect transform="matrix(1 0 0 1 36.7541 241.2007)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-259.7459, -60.2993)"
                                    d="M 257.057 58.0094 L 263.712 61.8565 C 263.797 61.8565 263.785 61.9892 263.712 62.0374 L 262.748 62.5922 C 262.699 62.6157 262.645 62.6279 262.591 62.6279 C 262.537 62.6279 262.483 62.6157 262.434 62.5922 L 255.779 58.7451 C 255.695 58.7451 255.707 58.6245 255.779 58.5642 L 256.732 58.0094 C 256.782 57.984 256.838 57.9707 256.894 57.9707 C 256.951 57.9707 257.007 57.984 257.057 58.0094 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -33.1315 -235.9375)" id="Vector_188"
                                clip-path="url(#CLIPPATH_199)">
                                <clipPath id="CLIPPATH_199">
                                    <rect transform="matrix(1 0 0 1 33.1315 235.9375)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-263.3685, -65.5626)"
                                    d="M 263.507 64.9074 L 264.508 65.4863 C 264.592 65.4863 264.58 65.6069 264.508 65.6672 L 263.555 66.2219 C 263.505 66.2457 263.449 66.2579 263.393 66.2579 C 263.336 66.2579 263.281 66.2457 263.23 66.2219 L 262.229 65.6431 C 262.145 65.6431 262.157 65.5104 262.229 65.4621 L 263.182 64.9074 C 263.232 64.881 263.288 64.8672 263.344 64.8672 C 263.401 64.8672 263.457 64.881 263.507 64.9074 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -34.548 -236.7552)" id="Vector_189"
                                clip-path="url(#CLIPPATH_200)">
                                <clipPath id="CLIPPATH_200">
                                    <rect transform="matrix(1 0 0 1 34.548 236.7552)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-261.952, -64.7448)"
                                    d="M 262.085 64.0875 L 263.085 64.6664 C 263.17 64.6664 263.158 64.799 263.085 64.8473 L 262.133 65.402 C 262.084 65.4255 262.03 65.4378 261.976 65.4378 C 261.922 65.4378 261.868 65.4255 261.819 65.402 L 260.819 64.8231 C 260.734 64.8231 260.746 64.6905 260.819 64.6422 L 261.771 64.0875 C 261.82 64.064 261.874 64.0518 261.928 64.0518 C 261.982 64.0518 262.036 64.064 262.085 64.0875 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -35.9645 -237.5732)" id="Vector_190"
                                clip-path="url(#CLIPPATH_201)">
                                <clipPath id="CLIPPATH_201">
                                    <rect transform="matrix(1 0 0 1 35.9645 237.5732)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-260.5355, -63.9268)"
                                    d="M 260.674 63.2675 L 261.675 63.8463 C 261.759 63.8463 261.747 63.979 261.675 64.0273 L 260.722 64.582 C 260.672 64.6084 260.616 64.6222 260.559 64.6222 C 260.503 64.6222 260.447 64.6084 260.397 64.582 L 259.396 64.0031 C 259.312 64.0031 259.324 63.8825 259.396 63.8222 L 260.348 63.2675 C 260.399 63.2437 260.455 63.2314 260.511 63.2314 C 260.567 63.2314 260.623 63.2437 260.674 63.2675 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -37.4235 -238.395)" id="Vector_191"
                                clip-path="url(#CLIPPATH_202)">
                                <clipPath id="CLIPPATH_202">
                                    <rect transform="matrix(1 0 0 1 37.4235 238.395)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-259.0765, -63.105)"
                                    d="M 259.215 62.4469 L 260.216 63.0258 C 260.3 63.0258 260.288 63.1584 260.216 63.2187 L 259.251 63.7614 C 259.203 63.7878 259.149 63.8017 259.095 63.8017 C 259.04 63.8017 258.986 63.7878 258.938 63.7614 L 257.937 63.1946 C 257.853 63.1946 257.865 63.062 257.937 63.0017 L 258.89 62.4469 C 258.94 62.4215 258.996 62.4082 259.053 62.4082 C 259.109 62.4082 259.165 62.4215 259.215 62.4469 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -38.7958 -239.206)" id="Vector_192"
                                clip-path="url(#CLIPPATH_203)">
                                <clipPath id="CLIPPATH_203">
                                    <rect transform="matrix(1 0 0 1 38.7957 239.206)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-257.7043, -62.294)"
                                    d="M 257.841 61.6389 L 258.841 62.2177 C 258.926 62.2177 258.914 62.3383 258.841 62.3986 L 257.889 62.9534 C 257.838 62.9771 257.782 62.9894 257.726 62.9894 C 257.67 62.9894 257.614 62.9771 257.563 62.9534 L 256.563 62.3745 C 256.49 62.3745 256.49 62.2419 256.563 62.1816 L 257.527 61.6389 C 257.575 61.6125 257.629 61.5986 257.684 61.5986 C 257.739 61.5986 257.793 61.6125 257.841 61.6389 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -40.2108 -240.0265)" id="Vector_193"
                                clip-path="url(#CLIPPATH_204)">
                                <clipPath id="CLIPPATH_204">
                                    <rect transform="matrix(1 0 0 1 40.2108 240.0265)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-256.2892, -61.4736)"
                                    d="M 256.43 60.8185 L 257.431 61.3974 C 257.503 61.3974 257.503 61.5301 257.431 61.5783 L 256.466 62.1331 C 256.417 62.1566 256.364 62.1688 256.31 62.1688 C 256.255 62.1688 256.202 62.1566 256.153 62.1331 L 255.152 61.5542 C 255.068 61.5542 255.08 61.4215 255.152 61.3733 L 256.105 60.8185 C 256.155 60.7921 256.211 60.7783 256.267 60.7783 C 256.324 60.7783 256.38 60.7921 256.43 60.8185 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -41.6255 -240.8426)" id="Vector_194"
                                clip-path="url(#CLIPPATH_205)">
                                <clipPath id="CLIPPATH_205">
                                    <rect transform="matrix(1 0 0 1 41.6255 240.8426)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-254.8745, -60.6574)"
                                    d="M 255.007 59.9987 L 256.008 60.5776 C 256.092 60.5776 256.08 60.7103 256.008 60.7585 L 255.056 61.3133 C 255.007 61.3368 254.953 61.349 254.899 61.349 C 254.845 61.349 254.791 61.3368 254.742 61.3133 L 253.741 60.7344 C 253.657 60.7344 253.669 60.6017 253.741 60.5535 L 254.706 59.9987 C 254.753 59.977 254.805 59.9658 254.857 59.9658 C 254.909 59.9658 254.96 59.977 255.007 59.9987 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -43.0417 -241.662)" id="Vector_195"
                                clip-path="url(#CLIPPATH_206)">
                                <clipPath id="CLIPPATH_206">
                                    <rect transform="matrix(1 0 0 1 43.0417 241.662)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-253.4583, -59.838)"
                                    d="M 253.597 59.1786 L 254.598 59.7575 C 254.682 59.7575 254.67 59.8901 254.598 59.9384 L 253.645 60.4931 C 253.595 60.5196 253.539 60.5334 253.482 60.5334 C 253.426 60.5334 253.37 60.5196 253.32 60.4931 L 252.319 59.9143 C 252.234 59.9143 252.247 59.7937 252.319 59.7334 L 253.271 59.1786 C 253.322 59.1549 253.378 59.1426 253.434 59.1426 C 253.49 59.1426 253.546 59.1549 253.597 59.1786 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -44.4585 -242.4795)" id="Vector_196"
                                clip-path="url(#CLIPPATH_207)">
                                <clipPath id="CLIPPATH_207">
                                    <rect transform="matrix(1 0 0 1 44.4585 242.4795)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-252.0415, -59.0205)"
                                    d="M 252.174 58.3581 L 253.175 58.937 C 253.259 58.937 253.247 59.0697 253.175 59.13 L 252.222 59.6727 C 252.174 59.6991 252.12 59.7129 252.066 59.7129 C 252.011 59.7129 251.957 59.6991 251.909 59.6727 L 250.908 59.1058 C 250.824 59.1058 250.836 58.9732 250.908 58.9129 L 251.861 58.3702 C 251.909 58.3448 251.962 58.3305 252.016 58.3284 C 252.07 58.3263 252.124 58.3365 252.174 58.3581 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -45.8607 -243.2939)" id="Vector_197"
                                clip-path="url(#CLIPPATH_208)">
                                <clipPath id="CLIPPATH_208">
                                    <rect transform="matrix(1 0 0 1 45.8607 243.2939)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-250.6393, -58.2061)"
                                    d="M 250.776 57.551 L 251.776 58.1298 C 251.861 58.1298 251.849 58.2504 251.776 58.3107 L 250.824 58.8655 C 250.773 58.8892 250.717 58.9015 250.661 58.9015 C 250.605 58.9015 250.549 58.8892 250.498 58.8655 L 249.498 58.2866 C 249.425 58.2866 249.425 58.1539 249.498 58.0936 L 250.45 57.551 C 250.5 57.5245 250.556 57.5107 250.613 57.5107 C 250.67 57.5107 250.725 57.5245 250.776 57.551 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -47.298 -244.1644)" id="Vector_198"
                                clip-path="url(#CLIPPATH_209)">
                                <clipPath id="CLIPPATH_209">
                                    <rect transform="matrix(1 0 0 1 47.298 244.1644)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-249.202, -57.3357)"
                                    d="M 249.341 56.6823 L 250.341 57.2612 C 250.426 57.2612 250.414 57.3938 250.341 57.4421 L 249.377 57.9968 C 249.328 58.0204 249.274 58.0326 249.22 58.0326 C 249.166 58.0326 249.112 58.0204 249.063 57.9968 L 248.063 57.418 C 247.978 57.418 247.99 57.2853 248.063 57.2371 L 249.015 56.6823 C 249.065 56.6537 249.121 56.6387 249.178 56.6387 C 249.235 56.6387 249.291 56.6537 249.341 56.6823 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -48.704 -244.9298)" id="Vector_199"
                                clip-path="url(#CLIPPATH_210)">
                                <clipPath id="CLIPPATH_210">
                                    <rect transform="matrix(1 0 0 1 48.704 244.9298)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-247.796, -56.5703)"
                                    d="M 247.93 55.9107 L 248.931 56.4896 C 249.015 56.4896 249.003 56.6223 248.931 56.6705 L 247.979 57.2253 C 247.928 57.2517 247.873 57.2655 247.816 57.2655 C 247.759 57.2655 247.703 57.2517 247.653 57.2253 L 246.652 56.6464 C 246.58 56.6464 246.592 56.5137 246.652 56.4655 L 247.617 55.9107 C 247.666 55.8872 247.719 55.875 247.774 55.875 C 247.828 55.875 247.881 55.8872 247.93 55.9107 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -31.1782 -234.8022)" id="Vector_200"
                                clip-path="url(#CLIPPATH_211)">
                                <clipPath id="CLIPPATH_211">
                                    <rect transform="matrix(1 0 0 1 31.1782 234.8023)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-265.3218, -66.6977)"
                                    d="M 264.918 65.7274 L 266.992 66.9334 C 267.076 66.9334 267.064 67.054 266.992 67.1143 L 266.039 67.6691 C 265.988 67.6928 265.933 67.7051 265.876 67.7051 C 265.82 67.7051 265.765 67.6928 265.714 67.6691 L 263.652 66.4631 C 263.567 66.4631 263.58 66.3304 263.652 66.2701 L 264.616 65.7274 C 264.663 65.7031 264.715 65.6904 264.767 65.6904 C 264.82 65.6904 264.871 65.7031 264.918 65.7274 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -31.0552 -236.3232)" id="Vector_201"
                                clip-path="url(#CLIPPATH_212)">
                                <clipPath id="CLIPPATH_212">
                                    <rect transform="matrix(1 0 0 1 31.0552 236.3232)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-265.4448, -65.1768)"
                                    d="M 265.581 64.5217 L 266.582 65.1005 C 266.666 65.1005 266.654 65.2211 266.582 65.2814 L 265.629 65.8362 C 265.578 65.8599 265.523 65.8722 265.466 65.8722 C 265.41 65.8722 265.355 65.8599 265.304 65.8362 L 264.303 65.2573 C 264.231 65.2573 264.231 65.1247 264.303 65.0764 L 265.255 64.5217 C 265.306 64.4952 265.362 64.4814 265.418 64.4814 C 265.475 64.4814 265.531 64.4952 265.581 64.5217 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -32.473 -237.1437)" id="Vector_202"
                                clip-path="url(#CLIPPATH_213)">
                                <clipPath id="CLIPPATH_213">
                                    <rect transform="matrix(1 0 0 1 32.473 237.1437)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-264.027, -64.3563)"
                                    d="M 264.17 63.7013 L 265.171 64.2802 C 265.243 64.2802 265.231 64.4129 265.171 64.4611 L 264.207 65.0159 C 264.158 65.0394 264.104 65.0516 264.05 65.0516 C 263.996 65.0516 263.942 65.0394 263.893 65.0159 L 262.892 64.437 C 262.808 64.437 262.82 64.3043 262.892 64.2561 L 263.845 63.7013 C 263.895 63.6749 263.951 63.6611 264.008 63.6611 C 264.064 63.6611 264.12 63.6749 264.17 63.7013 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -33.885 -237.9575)" id="Vector_203"
                                clip-path="url(#CLIPPATH_214)">
                                <clipPath id="CLIPPATH_214">
                                    <rect transform="matrix(1 0 0 1 33.885 237.9575)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-262.615, -63.5425)"
                                    d="M 262.748 62.8815 L 263.748 63.4604 C 263.833 63.4604 263.821 63.5931 263.748 63.6413 L 262.796 64.1961 C 262.748 64.2225 262.694 64.2363 262.639 64.2363 C 262.584 64.2363 262.53 64.2225 262.482 64.1961 L 261.482 63.6172 C 261.397 63.6172 261.409 63.4845 261.482 63.4363 L 262.446 62.8815 C 262.494 62.8599 262.545 62.8486 262.597 62.8486 C 262.649 62.8486 262.7 62.8599 262.748 62.8815 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -35.3015 -238.7792)" id="Vector_204"
                                clip-path="url(#CLIPPATH_215)">
                                <clipPath id="CLIPPATH_215">
                                    <rect transform="matrix(1 0 0 1 35.3015 238.7792)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-261.1985, -62.7208)"
                                    d="M 261.337 62.0614 L 262.338 62.6403 C 262.422 62.6403 262.41 62.773 262.338 62.8333 L 261.385 63.376 C 261.335 63.4024 261.279 63.4162 261.223 63.4162 C 261.166 63.4162 261.11 63.4024 261.06 63.376 L 260.059 62.7971 C 259.975 62.7971 259.987 62.6765 260.059 62.6162 L 261.012 62.0614 C 261.063 62.0377 261.118 62.0254 261.174 62.0254 C 261.231 62.0254 261.286 62.0377 261.337 62.0614 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -36.7183 -239.6005)" id="Vector_205"
                                clip-path="url(#CLIPPATH_216)">
                                <clipPath id="CLIPPATH_216">
                                    <rect transform="matrix(1 0 0 1 36.7183 239.6006)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-259.7817, -61.8994)"
                                    d="M 259.914 61.2536 L 260.915 61.8204 C 261 61.8204 260.987 61.953 260.915 62.0133 L 259.963 62.556 C 259.914 62.5796 259.86 62.5918 259.806 62.5918 C 259.752 62.5918 259.698 62.5796 259.649 62.556 L 258.648 61.9772 C 258.564 61.9772 258.576 61.8445 258.648 61.7842 L 259.601 61.2415 C 259.65 61.2169 259.704 61.2052 259.759 61.2073 C 259.814 61.2094 259.867 61.2253 259.914 61.2536 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -38.1322 -240.412)" id="Vector_206"
                                clip-path="url(#CLIPPATH_217)">
                                <clipPath id="CLIPPATH_217">
                                    <rect transform="matrix(1 0 0 1 38.1322 240.412)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-258.3678, -61.088)"
                                    d="M 258.504 60.4328 L 259.505 61.0117 C 259.589 61.0117 259.577 61.1323 259.505 61.1926 L 258.552 61.7473 C 258.501 61.7711 258.446 61.7834 258.389 61.7834 C 258.333 61.7834 258.278 61.7711 258.227 61.7473 L 257.226 61.1684 C 257.154 61.1684 257.154 61.0358 257.226 60.9875 L 258.178 60.4328 C 258.229 60.4064 258.284 60.3926 258.341 60.3926 C 258.398 60.3926 258.454 60.4064 258.504 60.4328 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -39.55 -241.2298)" id="Vector_207"
                                clip-path="url(#CLIPPATH_218)">
                                <clipPath id="CLIPPATH_218">
                                    <rect transform="matrix(1 0 0 1 39.55 241.2298)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-256.95, -60.2702)"
                                    d="M 257.081 59.6129 L 258.094 60.1918 C 258.166 60.1918 258.154 60.3244 258.094 60.3727 L 257.129 60.9274 C 257.08 60.9509 257.027 60.9632 256.973 60.9632 C 256.918 60.9632 256.865 60.9509 256.816 60.9274 L 255.815 60.3485 C 255.731 60.3485 255.743 60.2159 255.815 60.1676 L 256.768 59.6129 C 256.817 59.5894 256.87 59.5771 256.924 59.5771 C 256.979 59.5771 257.032 59.5894 257.081 59.6129 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -40.962 -242.0464)" id="Vector_208"
                                clip-path="url(#CLIPPATH_219)">
                                <clipPath id="CLIPPATH_219">
                                    <rect transform="matrix(1 0 0 1 40.962 242.0464)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-255.538, -59.4536)"
                                    d="M 255.671 58.7927 L 256.671 59.3715 C 256.756 59.3715 256.744 59.5042 256.671 59.5525 L 255.719 60.1072 C 255.671 60.1336 255.617 60.1474 255.562 60.1474 C 255.507 60.1474 255.453 60.1336 255.405 60.1072 L 254.405 59.5283 C 254.32 59.5283 254.332 59.4077 254.405 59.3474 L 255.369 58.7927 C 255.416 58.771 255.468 58.7598 255.52 58.7598 C 255.572 58.7598 255.623 58.771 255.671 58.7927 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -42.3785 -242.8681)" id="Vector_209"
                                clip-path="url(#CLIPPATH_220)">
                                <clipPath id="CLIPPATH_220">
                                    <rect transform="matrix(1 0 0 1 42.3785 242.8681)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-254.1215, -58.6319)"
                                    d="M 254.26 57.9725 L 255.261 58.5514 C 255.345 58.5514 255.333 58.6841 255.261 58.7444 L 254.308 59.2871 C 254.258 59.3135 254.202 59.3273 254.145 59.3273 C 254.089 59.3273 254.033 59.3135 253.983 59.2871 L 252.982 58.7082 C 252.898 58.7082 252.91 58.5876 252.982 58.5273 L 253.934 57.9725 C 253.985 57.9488 254.041 57.9365 254.097 57.9365 C 254.153 57.9365 254.209 57.9488 254.26 57.9725 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -43.7955 -243.6798)" id="Vector_210"
                                clip-path="url(#CLIPPATH_221)">
                                <clipPath id="CLIPPATH_221">
                                    <rect transform="matrix(1 0 0 1 43.7955 243.6798)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-252.7045, -57.8203)"
                                    d="M 252.837 57.1652 L 253.838 57.7441 C 253.922 57.7441 253.91 57.8647 253.838 57.925 L 252.885 58.4798 C 252.837 58.5033 252.783 58.5155 252.729 58.5155 C 252.674 58.5155 252.621 58.5033 252.572 58.4798 L 251.571 57.9009 C 251.487 57.9009 251.499 57.7682 251.571 57.7079 L 252.524 57.1652 C 252.572 57.1388 252.626 57.125 252.681 57.125 C 252.735 57.125 252.789 57.1388 252.837 57.1652 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -45.2098 -244.4999)" id="Vector_211"
                                clip-path="url(#CLIPPATH_222)">
                                <clipPath id="CLIPPATH_222">
                                    <rect transform="matrix(1 0 0 1 45.2097 244.4999)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-251.2903, -57.0001)"
                                    d="M 251.427 56.3449 L 252.427 56.9238 C 252.512 56.9238 252.5 57.0564 252.427 57.1047 L 251.475 57.6594 C 251.424 57.6832 251.368 57.6955 251.312 57.6955 C 251.256 57.6955 251.2 57.6832 251.149 57.6594 L 250.149 57.0806 C 250.076 57.0806 250.076 56.9479 250.149 56.8997 L 251.101 56.3449 C 251.151 56.3185 251.207 56.3047 251.264 56.3047 C 251.321 56.3047 251.377 56.3185 251.427 56.3449 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -47.5013 -245.8211)" id="Vector_212"
                                clip-path="url(#CLIPPATH_223)">
                                <clipPath id="CLIPPATH_223">
                                    <rect transform="matrix(1 0 0 1 47.5014 245.8211)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-248.9986, -55.6788)"
                                    d="M 248.256 54.5114 L 251.017 56.1033 C 251.089 56.1033 251.077 56.236 251.017 56.2842 L 250.052 56.839 C 250.004 56.8654 249.95 56.8792 249.895 56.8792 C 249.841 56.8792 249.787 56.8654 249.739 56.839 L 246.99 55.2471 C 246.905 55.2471 246.917 55.1265 246.99 55.0662 L 247.954 54.5114 C 248.002 54.4897 248.053 54.4785 248.105 54.4785 C 248.157 54.4785 248.208 54.4897 248.256 54.5114 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -29.4676 -235.4015)" id="Vector_213"
                                clip-path="url(#CLIPPATH_224)">
                                <clipPath id="CLIPPATH_224">
                                    <rect transform="matrix(1 0 0 1 29.4677 235.4015)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-267.0323, -66.0985)"
                                    d="M 266.992 65.3298 L 268.366 66.1258 C 268.438 66.1258 268.366 66.2584 268.366 66.3067 L 267.401 66.8614 C 267.353 66.8849 267.299 66.8972 267.245 66.8972 C 267.19 66.8972 267.137 66.8849 267.088 66.8614 L 265.726 66.0775 C 265.641 66.0775 265.653 65.9449 265.726 65.8846 L 266.678 65.3419 C 266.726 65.3164 266.779 65.3022 266.833 65.3001 C 266.888 65.298 266.942 65.3081 266.992 65.3298 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -44.1073 -237.7488)" id="Vector_214"
                                clip-path="url(#CLIPPATH_225)">
                                <clipPath id="CLIPPATH_225">
                                    <rect transform="matrix(1 0 0 1 44.1073 237.7488)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-252.3927, -63.7512)"
                                    d="M 242.71 57.7196 L 262.832 69.3213 C 262.917 69.3213 262.905 69.454 262.832 69.5143 L 262.35 69.7796 C 262.302 69.806 262.248 69.8198 262.193 69.8198 C 262.138 69.8198 262.084 69.806 262.036 69.7796 L 241.926 58.1779 C 241.854 58.1779 241.926 58.0452 241.926 57.997 L 242.408 57.7196 C 242.455 57.6953 242.507 57.6826 242.559 57.6826 C 242.612 57.6826 242.663 57.6953 242.71 57.7196 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -34.94 -243.7982)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_9"
                                clip-path="url(#CLIPPATH_226)">
                                <clipPath id="CLIPPATH_226">
                                    <rect transform="matrix(1 0 0 1 34.94 243.7982)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(191,191,191); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-261.56, -57.7018)"
                                    d="M 266.497 58.4797 L 266.365 58.552 L 262.904 60.554 L 256.756 56.9963 L 256.623 56.9239 L 260.216 54.8496 L 266.497 58.4797 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -34.9395 -243.726)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_10"
                                clip-path="url(#CLIPPATH_227)">
                                <clipPath id="CLIPPATH_227">
                                    <rect transform="matrix(1 0 0 1 34.9395 243.726)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(229,229,229); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-261.5605, -57.7739)"
                                    d="M 266.365 58.5518 L 262.904 60.5538 L 256.756 56.9961 L 260.216 54.9941 L 266.365 58.5518 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -38.5332 -236.9036)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_11"
                                clip-path="url(#CLIPPATH_228)">
                                <clipPath id="CLIPPATH_228">
                                    <rect transform="matrix(1 0 0 1 38.5332 236.9036)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(229,229,229); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-257.9668, -64.5964)"
                                    d="M 276.371 63.1468 V 63.4483 C 276.372 63.6701 276.315 63.8882 276.205 64.0808 C 276.095 64.2734 275.936 64.4337 275.745 64.5457 L 263.531 71.5888 C 263.348 71.6946 263.14 71.7503 262.928 71.7503 C 262.717 71.7503 262.509 71.6946 262.326 71.5888 L 240.202 58.8413 C 240.004 58.736 239.839 58.5774 239.726 58.3836 C 239.613 58.1897 239.557 57.9682 239.563 57.7439 V 57.4424 L 262.904 70.9134 L 276.371 63.1468 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -45.2667 -236.9)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_12"
                                clip-path="url(#CLIPPATH_229)">
                                <clipPath id="CLIPPATH_229">
                                    <rect transform="matrix(1 0 0 1 45.2667 236.9)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(229,229,229); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-251.2333, -64.6)"
                                    d="M 262.904 70.9134 V 71.7576 C 262.684 71.7557 262.469 71.6976 262.277 71.5888 L 240.202 58.8413 C 240.004 58.736 239.839 58.5774 239.726 58.3836 C 239.613 58.1897 239.557 57.9682 239.563 57.7439 V 57.4424 L 262.904 70.9134 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -47.1552 -245.0684)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_13"
                                clip-path="url(#CLIPPATH_230)">
                                <clipPath id="CLIPPATH_230">
                                    <rect transform="matrix(1 0 0 1 47.1552 245.0684)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(244,244,244); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-249.3448, -56.4316)"
                                    d="M 262.555 71.1544 C 262.346 71.2351 262.122 71.2684 261.899 71.2517 C 261.676 71.235 261.459 71.1688 261.265 71.0579 L 239.274 58.3105 C 239.082 58.2011 238.918 58.05 238.792 57.8683 C 238.667 57.6867 238.584 57.4793 238.55 57.2613 L 236.139 42.9099 C 236.133 42.8296 236.133 42.749 236.139 42.6687 C 236.138 42.4709 236.177 42.275 236.254 42.0926 C 236.331 41.9103 236.443 41.7452 236.585 41.6074 L 259.42 54.8011 C 259.562 54.8813 259.685 54.9922 259.779 55.1257 C 259.872 55.2592 259.935 55.412 259.963 55.5729 L 262.555 71.1544 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -46.7615 -245.2638)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_14"
                                clip-path="url(#CLIPPATH_231)">
                                <clipPath id="CLIPPATH_231">
                                    <rect transform="matrix(1 0 0 1 46.7615 245.2638)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(229,229,229); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-249.7385, -56.2362)"
                                    d="M 262.904 70.9253 L 262.76 71.0097 L 262.555 71.1062 L 259.951 55.5729 C 259.923 55.412 259.86 55.2592 259.766 55.1257 C 259.673 54.9921 259.55 54.8812 259.408 54.8011 L 236.573 41.6074 C 236.662 41.5141 236.764 41.433 236.874 41.3662 L 259.782 54.6322 C 259.921 54.7191 260.041 54.8335 260.134 54.9683 C 260.227 55.103 260.292 55.2554 260.324 55.4161 L 262.904 70.9253 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -225.6673 -136.9574)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_15"
                                clip-path="url(#CLIPPATH_232)">
                                <clipPath id="CLIPPATH_232">
                                    <rect transform="matrix(1 0 0 1 225.6673 136.9574)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-70.8327, -164.5426)"
                                    d="M 69.3731 175.039 C 71.1091 178.123 73.21 180.985 75.6305 183.566 C 76.3056 184.35 81.5141 182.36 80.4531 181.805 C 79.3921 181.25 75.956 176.487 74.256 173.363 C 72.8289 169.573 71.6213 165.703 70.6391 161.773 C 69.566 157.902 68.6498 152.21 67.8661 149.533 C 67.6608 148.545 67.1752 147.637 66.4674 146.918 C 65.7596 146.2 64.8596 145.7 63.8754 145.48 C 62.0066 145.046 60.7889 145.553 61.1265 147.82 C 61.669 151.764 64.7796 167.225 69.3731 175.039 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -224.4602 -60.6969)" id="Vector_215"
                                clip-path="url(#CLIPPATH_233)">
                                <clipPath id="CLIPPATH_233">
                                    <rect transform="matrix(1 0 0 1 224.4602 60.6969)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(56,34,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-72.0398, -240.8031)"
                                    d="M 66.3832 235.592 C 67.9988 236.907 70.386 235.701 70.5066 235.821 C 72.3974 237.588 74.3858 239.247 76.4625 240.79 C 77.4632 241.574 79.0305 242.635 78.7532 244.155 C 78.2469 246.88 73.9306 246.036 72.2427 245.204 C 70.5548 244.372 69.2648 242.997 67.7095 242.032 C 66.6003 241.345 65.5031 240.983 65.2982 239.62 C 65.2258 238.788 66.1059 235.556 66.3832 235.592 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -224.4633 -58.9768)" id="Vector_216"
                                clip-path="url(#CLIPPATH_234)">
                                <clipPath id="CLIPPATH_234">
                                    <rect transform="matrix(1 0 0 1 224.4632 58.9768)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(156,115,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-72.0368, -242.5232)"
                                    d="M 65.3584 239.018 C 65.5633 240.368 66.6484 240.73 67.7697 241.43 C 69.3491 242.406 70.7356 243.842 72.3873 244.662 C 74.0391 245.482 77.6801 246.193 78.7532 244.252 C 78.1745 246.869 73.9306 246.049 72.2668 245.216 C 70.603 244.384 69.2888 243.009 67.7335 242.045 C 66.6243 241.357 65.5272 240.995 65.3222 239.633 C 65.3153 239.427 65.3274 239.221 65.3584 239.018 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -208.2889 -70.3114)" id="Vector_217"
                                clip-path="url(#CLIPPATH_235)">
                                <clipPath id="CLIPPATH_235">
                                    <rect transform="matrix(1 0 0 1 208.2889 70.3115)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(56,34,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-88.2111, -231.1885)"
                                    d="M 82.7561 226.162 C 84.3717 227.476 87.1929 226.041 87.3135 226.162 C 88.989 227.873 90.7644 229.484 92.6304 230.986 C 93.6431 231.782 95.2105 232.843 94.9211 234.362 C 94.4148 237.088 90.0985 236.244 88.4227 235.412 C 86.7468 234.579 85.4327 233.205 83.8774 232.24 C 82.7682 231.552 81.6831 231.191 81.4661 229.828 C 81.5574 228.512 82.0032 227.245 82.7561 226.162 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -208.2611 -68.604)" id="Vector_218"
                                clip-path="url(#CLIPPATH_236)">
                                <clipPath id="CLIPPATH_236">
                                    <rect transform="matrix(1 0 0 1 208.2611 68.604)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(156,115,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-88.2389, -232.896)"
                                    d="M 81.5625 229.394 C 81.7674 230.732 82.8525 231.106 83.9738 231.806 C 85.5532 232.782 86.9397 234.218 88.5794 235.026 C 90.2191 235.834 93.8842 236.557 94.9573 234.616 C 94.3786 237.245 90.1347 236.412 88.4709 235.592 C 86.807 234.772 85.4929 233.385 83.9376 232.421 C 82.8284 231.733 81.7313 231.371 81.5263 230.009 C 81.512 229.803 81.5242 229.596 81.5625 229.394 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -228.4758 -93.0213)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_16"
                                clip-path="url(#CLIPPATH_237)">
                                <clipPath id="CLIPPATH_237">
                                    <rect transform="matrix(1 0 0 1 228.4759 93.0212)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-68.0241, -208.4788)"
                                    d="M 44.8142 183.854 C 43.0299 195.034 47.9851 199.194 54.4595 201.582 C 59.0892 203.283 65.7323 205.912 65.7323 205.912 C 65.7323 205.912 65.6359 208.324 65.5876 213.871 C 65.5876 218.695 66.1784 236.412 66.1784 236.412 C 66.9432 236.804 67.7904 237.009 68.65 237.009 C 69.5096 237.009 70.3568 236.804 71.1216 236.412 C 71.1216 236.412 73.7258 222.856 74.2804 216.742 C 75.0279 208.444 76.2938 203.017 75.8718 201.232 C 75.4981 199.665 66.4437 195.202 63.5621 192.79 L 82.5512 199.158 C 82.1715 201.211 81.9818 203.294 81.9845 205.381 C 82.1533 211.954 82.527 226.197 82.527 226.197 C 82.527 226.197 85.1313 228.078 87.3497 226.197 C 87.3497 226.197 92.1723 198 91.5453 194.274 C 90.9907 190.728 74.2683 183.492 71.3145 181.008 C 70.801 180.589 70.2047 180.283 69.5648 180.11 C 68.9248 179.938 68.2556 179.903 67.6011 180.007 L 44.8142 183.854 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -224.1005 -110.1575)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_17"
                                clip-path="url(#CLIPPATH_238)">
                                <clipPath id="CLIPPATH_238">
                                    <rect transform="matrix(1 0 0 1 224.1005 110.1575)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(244,244,244); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-72.3995, -191.3425)"
                                    d="M 90.3275 188.509 L 77.5717 181.141 C 77.4622 181.076 77.3373 181.042 77.21 181.042 C 77.0828 181.042 76.9579 181.076 76.8483 181.141 L 54.4714 194.069 L 67.5889 201.643 L 90.3275 188.509 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -229.373 -101.867)" id="Vector_219"
                                clip-path="url(#CLIPPATH_239)">
                                <clipPath id="CLIPPATH_239">
                                    <rect transform="matrix(1 0 0 1 229.373 101.867)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-67.127, -199.633)"
                                    d="M 66.9981 198.99 L 66.0215 199.557 C 65.9492 199.557 65.9492 199.677 66.0215 199.737 L 66.9499 200.268 C 66.9979 200.294 67.0518 200.308 67.1066 200.308 C 67.1614 200.308 67.2153 200.294 67.2634 200.268 L 68.2279 199.713 C 68.3123 199.713 68.3002 199.581 68.2279 199.532 L 67.2995 198.99 C 67.252 198.969 67.2007 198.958 67.1488 198.958 C 67.0969 198.958 67.0456 198.969 66.9981 198.99 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -227.9873 -102.72)" id="Vector_220"
                                clip-path="url(#CLIPPATH_240)">
                                <clipPath id="CLIPPATH_240">
                                    <rect transform="matrix(1 0 0 1 227.9873 102.72)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-68.5127, -198.78)"
                                    d="M 68.3727 198.145 L 67.3962 198.7 C 67.3238 198.7 67.3962 198.833 67.3962 198.881 L 68.3245 199.412 C 68.3725 199.438 68.4264 199.452 68.4812 199.452 C 68.536 199.452 68.59 199.438 68.638 199.412 L 69.6025 198.857 C 69.6869 198.857 69.6748 198.724 69.6025 198.676 L 68.6741 198.145 C 68.6276 198.121 68.5759 198.108 68.5234 198.108 C 68.471 198.108 68.4193 198.121 68.3727 198.145 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -226.6044 -103.5235)" id="Vector_221"
                                clip-path="url(#CLIPPATH_241)">
                                <clipPath id="CLIPPATH_241">
                                    <rect transform="matrix(1 0 0 1 226.6044 103.5235)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-69.8956, -197.9765)"
                                    d="M 69.7592 197.337 L 68.7947 197.892 C 68.7103 197.892 68.7224 198.025 68.7947 198.073 L 69.7231 198.616 C 69.7699 198.639 69.8215 198.651 69.8738 198.651 C 69.9261 198.651 69.9777 198.639 70.0245 198.616 L 71.001 198.049 C 71.0734 198.049 71.0734 197.928 71.001 197.868 L 70.0727 197.337 C 70.0238 197.314 69.9702 197.302 69.916 197.302 C 69.8617 197.302 69.8081 197.314 69.7592 197.337 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -225.2083 -104.3535)" id="Vector_222"
                                clip-path="url(#CLIPPATH_242)">
                                <clipPath id="CLIPPATH_242">
                                    <rect transform="matrix(1 0 0 1 225.2083 104.3534)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-71.2917, -197.1466)"
                                    d="M 71.1335 196.577 L 70.169 197.132 C 70.0846 197.132 70.0966 197.265 70.169 197.313 L 71.1335 197.783 C 71.2339 197.825 71.3466 197.825 71.447 197.783 L 72.4235 197.216 C 72.4959 197.216 72.4838 197.096 72.4235 197.035 L 71.4952 196.505 C 71.4347 196.479 71.3677 196.472 71.3031 196.485 C 71.2385 196.498 71.1794 196.53 71.1335 196.577 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -223.8676 -105.108)" id="Vector_223"
                                clip-path="url(#CLIPPATH_243)">
                                <clipPath id="CLIPPATH_243">
                                    <rect transform="matrix(1 0 0 1 223.8676 105.108)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-72.6324, -196.392)"
                                    d="M 72.496 195.757 L 71.5315 196.312 C 71.4471 196.312 71.4592 196.444 71.5315 196.493 L 72.4599 197.035 C 72.5074 197.056 72.5587 197.067 72.6106 197.067 C 72.6625 197.067 72.7138 197.056 72.7613 197.035 L 73.7379 196.469 C 73.8102 196.469 73.8102 196.348 73.7379 196.288 L 72.8095 195.757 C 72.7615 195.731 72.7076 195.717 72.6528 195.717 C 72.598 195.717 72.5441 195.731 72.496 195.757 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -222.4911 -105.8995)" id="Vector_224"
                                clip-path="url(#CLIPPATH_244)">
                                <clipPath id="CLIPPATH_244">
                                    <rect transform="matrix(1 0 0 1 222.4911 105.8995)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-74.0089, -195.6005)"
                                    d="M 73.8824 194.961 L 72.9058 195.516 C 72.8214 195.516 72.8334 195.649 72.9058 195.697 L 73.8341 196.24 C 73.8809 196.263 73.9325 196.275 73.9848 196.275 C 74.0372 196.275 74.0887 196.263 74.1356 196.24 L 75.1121 195.673 C 75.1965 195.673 75.1845 195.552 75.1121 195.492 L 74.1838 194.961 C 74.137 194.938 74.0854 194.926 74.0331 194.926 C 73.9808 194.926 73.9292 194.938 73.8824 194.961 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -221.1165 -106.6955)" id="Vector_225"
                                clip-path="url(#CLIPPATH_245)">
                                <clipPath id="CLIPPATH_245">
                                    <rect transform="matrix(1 0 0 1 221.1165 106.6955)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-75.3835, -194.8045)"
                                    d="M 75.2569 194.165 L 74.2803 194.732 C 74.1959 194.732 74.208 194.853 74.2803 194.901 L 75.2087 195.444 C 75.2576 195.467 75.3111 195.479 75.3654 195.479 C 75.4196 195.479 75.4732 195.467 75.5221 195.444 L 76.4866 194.877 C 76.571 194.877 76.559 194.756 76.4866 194.696 L 75.5583 194.165 C 75.5115 194.142 75.4599 194.13 75.4076 194.13 C 75.3553 194.13 75.3037 194.142 75.2569 194.165 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -219.7397 -107.491)" id="Vector_226"
                                clip-path="url(#CLIPPATH_246)">
                                <clipPath id="CLIPPATH_246">
                                    <rect transform="matrix(1 0 0 1 219.7397 107.491)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-76.7603, -194.009)"
                                    d="M 76.6314 193.37 L 75.6548 193.937 C 75.5825 193.937 75.5825 194.057 75.6548 194.105 L 76.5832 194.648 C 76.6321 194.672 76.6857 194.684 76.7399 194.684 C 76.7942 194.684 76.8478 194.672 76.8967 194.648 L 77.8612 194.081 C 77.9456 194.081 77.9335 193.961 77.8612 193.912 L 76.9449 193.37 C 76.896 193.346 76.8424 193.334 76.7882 193.334 C 76.7339 193.334 76.6803 193.346 76.6314 193.37 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -218.3615 -108.287)" id="Vector_227"
                                clip-path="url(#CLIPPATH_247)">
                                <clipPath id="CLIPPATH_247">
                                    <rect transform="matrix(1 0 0 1 218.3616 108.287)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-78.1384, -193.213)"
                                    d="M 78.0058 192.574 L 77.0292 193.141 C 76.9569 193.141 77.0292 193.261 77.0292 193.322 L 77.9576 193.852 C 78.0065 193.876 78.06 193.888 78.1143 193.888 C 78.1686 193.888 78.2221 193.876 78.271 193.852 L 79.2476 193.285 C 79.32 193.285 79.2476 193.165 79.2476 193.117 L 78.3193 192.574 C 78.2704 192.55 78.2168 192.538 78.1625 192.538 C 78.1083 192.538 78.0547 192.55 78.0058 192.574 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -216.9883 -109.107)" id="Vector_228"
                                clip-path="url(#CLIPPATH_248)">
                                <clipPath id="CLIPPATH_248">
                                    <rect transform="matrix(1 0 0 1 216.9884 109.107)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-79.5116, -192.393)"
                                    d="M 79.3803 191.754 L 78.4158 192.32 C 78.3314 192.32 78.3435 192.441 78.4158 192.501 L 79.3441 193.032 C 79.393 193.055 79.4466 193.068 79.5009 193.068 C 79.5551 193.068 79.6087 193.055 79.6576 193.032 L 80.6342 192.477 C 80.7065 192.477 80.6342 192.344 80.6342 192.296 L 79.6938 191.754 C 79.6449 191.73 79.5913 191.718 79.5371 191.718 C 79.4828 191.718 79.4292 191.73 79.3803 191.754 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -215.6029 -109.8617)" id="Vector_229"
                                clip-path="url(#CLIPPATH_249)">
                                <clipPath id="CLIPPATH_249">
                                    <rect transform="matrix(1 0 0 1 215.603 109.8617)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-80.897, -191.6383)"
                                    d="M 80.7788 190.982 L 79.8142 191.549 C 79.7298 191.549 79.7419 191.669 79.8142 191.73 L 80.7426 192.26 C 80.7884 192.287 80.8404 192.301 80.8933 192.301 C 80.9462 192.301 80.9982 192.287 81.044 192.26 L 81.9844 191.754 C 82.0568 191.754 82.0568 191.621 81.9844 191.573 L 81.0561 191.03 C 80.9722 190.982 80.874 190.965 80.7788 190.982 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -214.2323 -110.6705)" id="Vector_230"
                                clip-path="url(#CLIPPATH_250)">
                                <clipPath id="CLIPPATH_250">
                                    <rect transform="matrix(1 0 0 1 214.2322 110.6705)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-82.2678, -190.8295)"
                                    d="M 82.1411 190.186 L 81.1646 190.753 C 81.0802 190.753 81.0922 190.873 81.1646 190.934 L 82.0929 191.464 C 82.1387 191.491 82.1907 191.505 82.2436 191.505 C 82.2965 191.505 82.3485 191.491 82.3943 191.464 L 83.3709 190.91 C 83.4553 190.91 83.4433 190.777 83.3709 190.729 L 82.4426 190.186 C 82.3951 190.165 82.3437 190.154 82.2919 190.154 C 82.24 190.154 82.1886 190.165 82.1411 190.186 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -212.8578 -111.4655)" id="Vector_231"
                                clip-path="url(#CLIPPATH_251)">
                                <clipPath id="CLIPPATH_251">
                                    <rect transform="matrix(1 0 0 1 212.8578 111.4655)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-83.6423, -190.0345)"
                                    d="M 83.5157 189.402 L 82.5391 189.956 C 82.4547 189.956 82.4667 190.089 82.5391 190.137 L 83.4674 190.668 C 83.5133 190.694 83.5652 190.708 83.6181 190.708 C 83.6711 190.708 83.723 190.694 83.7689 190.668 L 84.7454 190.113 C 84.8298 190.113 84.8178 189.981 84.7454 189.932 L 83.8171 189.402 C 83.7713 189.375 83.7193 189.361 83.6664 189.361 C 83.6135 189.361 83.5615 189.375 83.5157 189.402 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -211.1012 -112.451)" id="Vector_232"
                                clip-path="url(#CLIPPATH_252)">
                                <clipPath id="CLIPPATH_252">
                                    <rect transform="matrix(1 0 0 1 211.1012 112.451)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-85.3988, -189.049)"
                                    d="M 85.6014 188.22 L 83.9617 189.161 C 83.8894 189.161 83.8894 189.293 83.9617 189.342 L 84.8901 189.872 C 84.9381 189.899 84.992 189.913 85.0468 189.913 C 85.1016 189.913 85.1555 189.899 85.2035 189.872 L 86.8312 188.932 C 86.9156 188.932 86.9035 188.811 86.8312 188.751 L 85.9028 188.22 C 85.856 188.197 85.8044 188.185 85.7521 188.185 C 85.6998 188.185 85.6482 188.197 85.6014 188.22 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -228.6662 -103.8775)" id="Vector_233"
                                clip-path="url(#CLIPPATH_253)">
                                <clipPath id="CLIPPATH_253">
                                    <rect transform="matrix(1 0 0 1 228.6662 103.8775)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-67.8338, -197.6225)"
                                    d="M 67.6975 196.987 L 66.7329 197.542 C 66.6485 197.542 66.6606 197.675 66.7329 197.723 L 67.6613 198.266 C 67.7088 198.287 67.7601 198.298 67.812 198.298 C 67.8639 198.298 67.9152 198.287 67.9627 198.266 L 68.9393 197.699 C 69.0116 197.699 69.0116 197.578 68.9393 197.518 L 68.0109 196.987 C 67.9629 196.961 67.909 196.947 67.8542 196.947 C 67.7994 196.947 67.7455 196.961 67.6975 196.987 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -227.2871 -104.6737)" id="Vector_234"
                                clip-path="url(#CLIPPATH_254)">
                                <clipPath id="CLIPPATH_254">
                                    <rect transform="matrix(1 0 0 1 227.2871 104.6737)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-69.2129, -196.8263)"
                                    d="M 69.084 196.192 L 68.1075 196.747 C 68.0351 196.747 68.0351 196.879 68.1075 196.927 L 69.0358 197.47 C 69.1362 197.512 69.2489 197.512 69.3493 197.47 L 70.3138 196.903 C 70.3982 196.903 70.3861 196.783 70.3138 196.722 L 69.3855 196.192 C 69.3396 196.165 69.2877 196.151 69.2348 196.151 C 69.1818 196.151 69.1299 196.165 69.084 196.192 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -225.9102 -105.4941)" id="Vector_235"
                                clip-path="url(#CLIPPATH_255)">
                                <clipPath id="CLIPPATH_255">
                                    <rect transform="matrix(1 0 0 1 225.9102 105.4941)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-70.5898, -196.0059)"
                                    d="M 70.4584 195.371 L 69.4939 195.926 C 69.4095 195.926 69.4216 196.059 69.4939 196.107 L 70.4223 196.65 C 70.5226 196.691 70.6354 196.691 70.7357 196.65 L 71.7123 196.083 C 71.7847 196.083 71.7123 195.962 71.7123 195.902 L 70.7719 195.371 C 70.7239 195.345 70.67 195.331 70.6152 195.331 C 70.5604 195.331 70.5065 195.345 70.4584 195.371 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -224.5284 -106.265)" id="Vector_236"
                                clip-path="url(#CLIPPATH_256)">
                                <clipPath id="CLIPPATH_256">
                                    <rect transform="matrix(1 0 0 1 224.5284 106.265)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-71.9716, -195.235)"
                                    d="M 71.845 194.6 L 70.8684 195.155 C 70.784 195.155 70.7961 195.287 70.8684 195.336 L 71.7968 195.878 C 71.8443 195.899 71.8956 195.91 71.9475 195.91 C 71.9994 195.91 72.0507 195.899 72.0982 195.878 L 73.0748 195.311 C 73.1592 195.311 73.1471 195.191 73.0748 195.131 L 72.1464 194.6 C 72.1006 194.574 72.0486 194.56 71.9957 194.56 C 71.9428 194.56 71.8908 194.574 71.845 194.6 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -223.1528 -107.0555)" id="Vector_237"
                                clip-path="url(#CLIPPATH_257)">
                                <clipPath id="CLIPPATH_257">
                                    <rect transform="matrix(1 0 0 1 223.1528 107.0555)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-73.3472, -194.4445)"
                                    d="M 73.2072 193.803 L 72.2306 194.37 C 72.1583 194.37 72.2306 194.491 72.2306 194.551 L 73.159 195.082 C 73.2079 195.105 73.2615 195.118 73.3157 195.118 C 73.37 195.118 73.4236 195.105 73.4725 195.082 L 74.437 194.527 C 74.5214 194.527 74.5093 194.394 74.437 194.346 L 73.5086 193.803 C 73.4613 193.782 73.4099 193.771 73.3579 193.771 C 73.3059 193.771 73.2545 193.782 73.2072 193.803 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -221.7819 -107.901)" id="Vector_238"
                                clip-path="url(#CLIPPATH_258)">
                                <clipPath id="CLIPPATH_258">
                                    <rect transform="matrix(1 0 0 1 221.7819 107.901)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-74.7181, -193.599)"
                                    d="M 74.5817 192.96 L 73.6172 193.526 C 73.5328 193.526 73.5449 193.647 73.6172 193.707 L 74.5335 194.238 C 74.5824 194.261 74.636 194.274 74.6902 194.274 C 74.7445 194.274 74.7981 194.261 74.847 194.238 L 75.8235 193.683 C 75.8959 193.683 75.8959 193.551 75.8235 193.502 L 74.8952 192.96 C 74.8463 192.936 74.7927 192.924 74.7385 192.924 C 74.6842 192.924 74.6306 192.936 74.5817 192.96 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -220.4173 -108.6485)" id="Vector_239"
                                clip-path="url(#CLIPPATH_259)">
                                <clipPath id="CLIPPATH_259">
                                    <rect transform="matrix(1 0 0 1 220.4173 108.6485)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-76.0827, -192.8515)"
                                    d="M 75.9561 192.212 L 74.9795 192.779 C 74.8951 192.779 74.9072 192.9 74.9795 192.96 L 75.9079 193.491 C 75.9547 193.514 76.0063 193.526 76.0586 193.526 C 76.1109 193.526 76.1625 193.514 76.2093 193.491 L 77.1859 192.924 C 77.2702 192.924 77.2582 192.803 77.1859 192.755 L 76.2575 192.212 C 76.2107 192.189 76.1591 192.177 76.1068 192.177 C 76.0545 192.177 76.0029 192.189 75.9561 192.212 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -219.0263 -109.4435)" id="Vector_240"
                                clip-path="url(#CLIPPATH_260)">
                                <clipPath id="CLIPPATH_260">
                                    <rect transform="matrix(1 0 0 1 219.0263 109.4435)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-77.4737, -192.0565)"
                                    d="M 77.3426 191.416 L 76.366 191.983 C 76.2937 191.983 76.3057 192.103 76.366 192.163 L 77.2944 192.694 C 77.3433 192.718 77.3968 192.73 77.4511 192.73 C 77.5053 192.73 77.5589 192.718 77.6078 192.694 L 78.5723 192.127 C 78.6567 192.127 78.6447 192.007 78.5723 191.958 L 77.644 191.416 C 77.5967 191.394 77.5453 191.383 77.4933 191.383 C 77.4413 191.383 77.3899 191.394 77.3426 191.416 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -217.6464 -110.241)" id="Vector_241"
                                clip-path="url(#CLIPPATH_261)">
                                <clipPath id="CLIPPATH_261">
                                    <rect transform="matrix(1 0 0 1 217.6464 110.241)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-78.8536, -191.259)"
                                    d="M 78.7172 190.62 L 77.7527 191.187 C 77.6683 191.187 77.6804 191.307 77.7527 191.355 L 78.6811 191.898 C 78.7279 191.921 78.7795 191.934 78.8318 191.934 C 78.8841 191.934 78.9357 191.921 78.9825 191.898 L 79.9591 191.331 C 80.0314 191.331 80.0314 191.211 79.9591 191.162 L 79.0307 190.62 C 78.9818 190.596 78.9282 190.584 78.874 190.584 C 78.8197 190.584 78.7661 190.596 78.7172 190.62 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -216.2675 -111.037)" id="Vector_242"
                                clip-path="url(#CLIPPATH_262)">
                                <clipPath id="CLIPPATH_262">
                                    <rect transform="matrix(1 0 0 1 216.2675 111.037)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-80.2325, -190.463)"
                                    d="M 80.1036 189.824 L 79.127 190.39 C 79.0547 190.39 79.0547 190.511 79.127 190.559 L 80.0554 191.102 C 80.1043 191.125 80.1578 191.138 80.2121 191.138 C 80.2664 191.138 80.3199 191.125 80.3688 191.102 L 81.3333 190.535 C 81.4177 190.535 81.4057 190.415 81.3333 190.366 L 80.405 189.824 C 80.3582 189.8 80.3066 189.788 80.2543 189.788 C 80.202 189.788 80.1504 189.8 80.1036 189.824 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -214.8803 -111.833)" id="Vector_243"
                                clip-path="url(#CLIPPATH_263)">
                                <clipPath id="CLIPPATH_263">
                                    <rect transform="matrix(1 0 0 1 214.8803 111.833)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-81.6197, -189.667)"
                                    d="M 81.4782 189.028 L 80.5016 189.595 C 80.4293 189.595 80.5016 189.715 80.5016 189.764 L 81.43 190.306 C 81.4789 190.33 81.5325 190.342 81.5867 190.342 C 81.641 190.342 81.6946 190.33 81.7435 190.306 L 82.72 189.739 C 82.7924 189.739 82.7803 189.619 82.72 189.571 L 81.7917 189.028 C 81.7428 189.004 81.6892 188.992 81.6349 188.992 C 81.5807 188.992 81.5271 189.004 81.4782 189.028 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -213.5112 -112.629)" id="Vector_244"
                                clip-path="url(#CLIPPATH_264)">
                                <clipPath id="CLIPPATH_264">
                                    <rect transform="matrix(1 0 0 1 213.5111 112.629)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-82.9889, -188.871)"
                                    d="M 82.8525 188.232 L 81.888 188.799 C 81.8036 188.799 81.8156 188.919 81.888 188.968 L 82.8163 189.51 C 82.8631 189.534 82.9147 189.546 82.967 189.546 C 83.0193 189.546 83.0709 189.534 83.1177 189.51 L 84.0943 188.944 C 84.1667 188.944 84.1667 188.823 84.0943 188.775 L 83.166 188.232 C 83.1171 188.209 83.0635 188.196 83.0092 188.196 C 82.955 188.196 82.9014 188.209 82.8525 188.232 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -230.3879 -102.8905)" id="Vector_245"
                                clip-path="url(#CLIPPATH_265)">
                                <clipPath id="CLIPPATH_265">
                                    <rect transform="matrix(1 0 0 1 230.3879 102.8905)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-66.1121, -198.6095)"
                                    d="M 66.311 197.783 L 64.6713 198.724 C 64.599 198.724 64.6713 198.857 64.6713 198.905 L 65.5997 199.436 C 65.6477 199.462 65.7016 199.476 65.7564 199.476 C 65.8112 199.476 65.8651 199.462 65.9131 199.436 L 67.5528 198.495 C 67.6252 198.495 67.5528 198.374 67.5528 198.314 L 66.6245 197.783 C 66.5764 197.757 66.5225 197.743 66.4677 197.743 C 66.4129 197.743 66.359 197.757 66.311 197.783 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -212.6299 -113.811)" id="Vector_246"
                                clip-path="url(#CLIPPATH_266)">
                                <clipPath id="CLIPPATH_266">
                                    <rect transform="matrix(1 0 0 1 212.6299 113.811)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-83.8701, -187.689)"
                                    d="M 85.4808 188.136 L 84.5163 188.69 C 84.4719 188.715 84.4222 188.727 84.3716 188.727 C 84.3211 188.727 84.2713 188.715 84.2269 188.69 L 83.1901 188.136 C 83.175 188.127 83.1624 188.115 83.1537 188.1 C 83.1449 188.085 83.1403 188.068 83.1403 188.051 C 83.1403 188.034 83.1449 188.017 83.1537 188.002 C 83.1624 187.987 83.175 187.975 83.1901 187.967 H 83.2745 C 83.3468 187.967 83.3468 187.846 83.2745 187.81 L 82.2376 187.207 C 82.1532 187.207 82.1532 187.086 82.2376 187.038 L 82.8525 186.688 C 82.8969 186.664 82.9466 186.651 82.9972 186.651 C 83.0477 186.651 83.0975 186.664 83.1419 186.688 L 84.1064 187.243 L 84.3113 187.364 L 84.456 187.448 L 84.6007 187.533 L 85.4326 188.015 C 85.6014 188.051 85.6014 188.136 85.4808 188.136 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -234.7042 -105.0181)" id="Vector_247"
                                clip-path="url(#CLIPPATH_267)">
                                <clipPath id="CLIPPATH_267">
                                    <rect transform="matrix(1 0 0 1 234.7042 105.0181)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-61.7958, -196.4819)"
                                    d="M 61.6692 195.854 L 60.6927 196.409 C 60.6083 196.409 60.6203 196.542 60.6927 196.59 L 61.621 197.121 C 61.6678 197.144 61.7194 197.156 61.7717 197.156 C 61.824 197.156 61.8756 197.144 61.9224 197.121 L 62.899 196.554 C 62.9834 196.554 62.9713 196.433 62.899 196.373 L 61.9706 195.842 C 61.9238 195.818 61.8712 195.806 61.8183 195.808 C 61.7654 195.81 61.714 195.826 61.6692 195.854 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -233.332 -105.803)" id="Vector_248"
                                clip-path="url(#CLIPPATH_268)">
                                <clipPath id="CLIPPATH_268">
                                    <rect transform="matrix(1 0 0 1 233.332 105.803)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-63.168, -195.697)"
                                    d="M 63.0317 195.058 L 62.0672 195.613 C 61.9828 195.613 61.9948 195.746 62.0672 195.794 L 62.9955 196.337 C 63.0423 196.36 63.0939 196.372 63.1462 196.372 C 63.1985 196.372 63.2501 196.36 63.2969 196.337 L 64.2735 195.77 C 64.3458 195.77 64.3458 195.649 64.2735 195.589 L 63.3452 195.058 C 63.2962 195.035 63.2427 195.022 63.1884 195.022 C 63.1342 195.022 63.0806 195.035 63.0317 195.058 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -231.9516 -106.6)" id="Vector_249"
                                clip-path="url(#CLIPPATH_269)">
                                <clipPath id="CLIPPATH_269">
                                    <rect transform="matrix(1 0 0 1 231.9517 106.6)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-64.5483, -194.9)"
                                    d="M 64.4059 194.262 L 63.4414 194.829 C 63.357 194.829 63.3691 194.95 63.4414 195.01 L 64.3698 195.541 C 64.4187 195.564 64.4723 195.576 64.5265 195.576 C 64.5808 195.576 64.6343 195.564 64.6833 195.541 L 65.6598 194.986 C 65.7322 194.986 65.7322 194.853 65.6598 194.805 L 64.7315 194.262 C 64.681 194.237 64.6252 194.224 64.5687 194.224 C 64.5122 194.224 64.4564 194.237 64.4059 194.262 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -220.2725 -113.3472)" id="Vector_250"
                                clip-path="url(#CLIPPATH_270)">
                                <clipPath id="CLIPPATH_270">
                                    <rect transform="matrix(1 0 0 1 220.2725 113.3471)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-76.2275, -188.1529)"
                                    d="M 76.1009 187.508 L 75.1243 188.075 C 75.0399 188.075 75.052 188.196 75.1243 188.256 L 76.0526 188.787 C 76.1007 188.813 76.1546 188.827 76.2094 188.827 C 76.2642 188.827 76.3181 188.813 76.3661 188.787 L 77.3306 188.232 C 77.415 188.232 77.403 188.099 77.3306 188.051 L 76.4023 187.52 C 76.3564 187.495 76.3053 187.481 76.253 187.479 C 76.2007 187.477 76.1486 187.487 76.1009 187.508 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -218.898 -114.14)" id="Vector_251"
                                clip-path="url(#CLIPPATH_271)">
                                <clipPath id="CLIPPATH_271">
                                    <rect transform="matrix(1 0 0 1 218.898 114.14)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-77.602, -187.36)"
                                    d="M 77.4754 186.725 L 76.4988 187.28 C 76.4144 187.28 76.4265 187.412 76.4988 187.461 L 77.4272 188.003 C 77.4746 188.024 77.526 188.035 77.5779 188.035 C 77.6298 188.035 77.6811 188.024 77.7286 188.003 L 78.7051 187.436 C 78.7895 187.436 78.7775 187.316 78.7051 187.256 L 77.7768 186.725 C 77.731 186.699 77.679 186.685 77.6261 186.685 C 77.5732 186.685 77.5212 186.699 77.4754 186.725 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -217.5258 -114.9325)" id="Vector_252"
                                clip-path="url(#CLIPPATH_272)">
                                <clipPath id="CLIPPATH_272">
                                    <rect transform="matrix(1 0 0 1 217.5258 114.9325)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-78.9742, -186.5675)"
                                    d="M 78.8378 185.928 L 77.8733 186.495 C 77.7889 186.495 77.801 186.616 77.8733 186.664 L 78.8017 187.207 C 78.8485 187.23 78.9001 187.242 78.9524 187.242 C 79.0047 187.242 79.0563 187.23 79.1031 187.207 L 80.0797 186.64 C 80.152 186.64 80.152 186.519 80.0797 186.471 L 79.1513 185.928 C 79.1024 185.905 79.0488 185.893 78.9946 185.893 C 78.9403 185.893 78.8867 185.905 78.8378 185.928 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -216.1566 -115.725)" id="Vector_253"
                                clip-path="url(#CLIPPATH_273)">
                                <clipPath id="CLIPPATH_273">
                                    <rect transform="matrix(1 0 0 1 216.1566 115.725)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-80.3434, -185.775)"
                                    d="M 80.2121 185.132 L 79.2476 185.699 C 79.1632 185.699 79.1752 185.82 79.2476 185.88 L 80.1759 186.411 C 80.224 186.437 80.2779 186.451 80.3327 186.451 C 80.3875 186.451 80.4414 186.437 80.4894 186.411 L 81.466 185.856 C 81.5383 185.856 81.466 185.723 81.466 185.675 L 80.5376 185.132 C 80.4862 185.11 80.4308 185.099 80.3749 185.099 C 80.3189 185.099 80.2635 185.11 80.2121 185.132 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -230.4011 -107.492)" id="Vector_254"
                                clip-path="url(#CLIPPATH_274)">
                                <clipPath id="CLIPPATH_274">
                                    <rect transform="matrix(1 0 0 1 230.4011 107.492)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-66.0989, -194.008)"
                                    d="M 66.1301 193.273 L 64.8039 194.032 C 64.7315 194.032 64.8039 194.153 64.8039 194.213 L 65.7322 194.744 C 65.7803 194.77 65.8342 194.784 65.889 194.784 C 65.9438 194.784 65.9977 194.77 66.0457 194.744 L 67.3719 193.984 C 67.4442 193.984 67.4442 193.852 67.3719 193.803 L 66.4436 193.273 C 66.3955 193.246 66.3416 193.232 66.2868 193.232 C 66.232 193.232 66.1781 193.246 66.1301 193.273 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -221.7976 -112.453)" id="Vector_255"
                                clip-path="url(#CLIPPATH_275)">
                                <clipPath id="CLIPPATH_275">
                                    <rect transform="matrix(1 0 0 1 221.7977 112.453)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-74.7023, -189.047)"
                                    d="M 74.7506 188.304 L 73.4243 189.076 C 73.3399 189.076 73.352 189.197 73.4243 189.257 L 74.3527 189.788 C 74.3995 189.811 74.4511 189.823 74.5034 189.823 C 74.5557 189.823 74.6073 189.811 74.6541 189.788 L 75.9803 189.028 C 76.0647 189.028 76.0527 188.895 75.9803 188.847 L 75.052 188.304 C 75.0047 188.283 74.9533 188.271 74.9013 188.271 C 74.8492 188.271 74.7978 188.283 74.7506 188.304 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -226.1079 -109.9358)" id="Vector_256"
                                clip-path="url(#CLIPPATH_276)">
                                <clipPath id="CLIPPATH_276">
                                    <rect transform="matrix(1 0 0 1 226.1079 109.9357)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-70.3921, -191.5643)"
                                    d="M 73.0024 189.341 L 66.5401 193.068 C 66.4557 193.068 66.4677 193.2 66.5401 193.249 L 67.4684 193.791 C 67.5688 193.833 67.6815 193.833 67.7819 193.791 L 74.2442 190.053 C 74.3286 190.053 74.3165 189.932 74.2442 189.872 L 73.3038 189.341 C 73.257 189.318 73.2054 189.306 73.1531 189.306 C 73.1008 189.306 73.0492 189.318 73.0024 189.341 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -229.6262 -104.862)" id="Vector_257"
                                clip-path="url(#CLIPPATH_277)">
                                <clipPath id="CLIPPATH_277">
                                    <rect transform="matrix(1 0 0 1 229.6262 104.862)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-66.8738, -196.638)"
                                    d="M 66.7449 195.999 L 65.7684 196.565 C 65.696 196.565 65.696 196.686 65.7684 196.734 L 66.6967 197.277 C 66.7456 197.3 66.7992 197.313 66.8534 197.313 C 66.9077 197.313 66.9613 197.3 67.0102 197.277 L 67.9747 196.71 C 68.0591 196.71 68.047 196.59 67.9747 196.529 L 67.0584 195.999 C 67.0095 195.975 66.9559 195.963 66.9017 195.963 C 66.8474 195.963 66.7938 195.975 66.7449 195.999 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -228.2517 -105.6565)" id="Vector_258"
                                clip-path="url(#CLIPPATH_278)">
                                <clipPath id="CLIPPATH_278">
                                    <rect transform="matrix(1 0 0 1 228.2517 105.6565)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-68.2483, -195.8435)"
                                    d="M 68.1195 195.203 L 67.1429 195.77 C 67.0705 195.77 67.0705 195.89 67.1429 195.951 L 68.0712 196.481 C 68.1201 196.505 68.1737 196.517 68.228 196.517 C 68.2822 196.517 68.3358 196.505 68.3847 196.481 L 69.3492 195.914 C 69.4336 195.914 69.4216 195.794 69.3492 195.746 L 68.4209 195.203 C 68.3736 195.181 68.3222 195.17 68.2702 195.17 C 68.2181 195.17 68.1667 195.181 68.1195 195.203 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -226.8662 -106.4525)" id="Vector_259"
                                clip-path="url(#CLIPPATH_279)">
                                <clipPath id="CLIPPATH_279">
                                    <rect transform="matrix(1 0 0 1 226.8662 106.4525)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-69.6338, -195.0475)"
                                    d="M 69.4938 194.407 L 68.5173 194.974 C 68.4449 194.974 68.5173 195.094 68.5173 195.155 L 69.4456 195.685 C 69.4945 195.709 69.5481 195.721 69.6023 195.721 C 69.6566 195.721 69.7102 195.709 69.7591 195.685 L 70.7236 195.131 C 70.808 195.131 70.7959 194.998 70.7236 194.95 L 69.7952 194.407 C 69.748 194.385 69.6966 194.374 69.6445 194.374 C 69.5925 194.374 69.5411 194.385 69.4938 194.407 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -225.4555 -107.2565)" id="Vector_260"
                                clip-path="url(#CLIPPATH_280)">
                                <clipPath id="CLIPPATH_280">
                                    <rect transform="matrix(1 0 0 1 225.4556 107.2565)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-71.0444, -194.2435)"
                                    d="M 70.8683 193.611 L 69.9279 194.166 C 69.8556 194.166 69.9279 194.286 69.9279 194.347 L 70.8563 194.877 C 70.9043 194.904 70.9582 194.918 71.013 194.918 C 71.0678 194.918 71.1217 194.904 71.1697 194.877 L 72.1342 194.323 C 72.2186 194.323 72.2066 194.19 72.1342 194.142 L 71.2059 193.611 C 71.1539 193.584 71.0959 193.569 71.0371 193.569 C 70.9783 193.569 70.9203 193.584 70.8683 193.611 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -224.1172 -108.038)" id="Vector_261"
                                clip-path="url(#CLIPPATH_281)">
                                <clipPath id="CLIPPATH_281">
                                    <rect transform="matrix(1 0 0 1 224.1172 108.038)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-72.3828, -193.462)"
                                    d="M 72.2429 192.827 L 71.2663 193.382 C 71.1939 193.382 71.2663 193.514 71.2663 193.563 L 72.1946 194.093 C 72.2427 194.12 72.2966 194.134 72.3514 194.134 C 72.4062 194.134 72.4601 194.12 72.5081 194.093 L 73.4726 193.539 C 73.557 193.539 73.545 193.406 73.4726 193.358 L 72.5443 192.827 C 72.4977 192.803 72.446 192.79 72.3936 192.79 C 72.3411 192.79 72.2894 192.803 72.2429 192.827 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -222.7429 -108.8328)" id="Vector_262"
                                clip-path="url(#CLIPPATH_282)">
                                <clipPath id="CLIPPATH_282">
                                    <rect transform="matrix(1 0 0 1 222.7429 108.8328)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-73.7571, -192.6672)"
                                    d="M 73.6171 192.031 L 72.6405 192.586 C 72.5682 192.586 72.6405 192.719 72.6405 192.767 L 73.5689 193.309 C 73.6693 193.351 73.782 193.351 73.8824 193.309 L 74.8469 192.743 C 74.9313 192.743 74.9192 192.622 74.8469 192.562 L 73.9185 192.031 C 73.872 192.007 73.8203 191.994 73.7678 191.994 C 73.7154 191.994 73.6636 192.007 73.6171 192.031 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -221.3757 -109.626)" id="Vector_263"
                                clip-path="url(#CLIPPATH_283)">
                                <clipPath id="CLIPPATH_283">
                                    <rect transform="matrix(1 0 0 1 221.3757 109.626)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-75.1243, -191.874)"
                                    d="M 74.9916 191.235 L 74.0151 191.802 C 73.9427 191.802 74.0151 191.922 74.0151 191.971 L 74.9434 192.513 C 74.9923 192.537 75.0459 192.549 75.1001 192.549 C 75.1544 192.549 75.208 192.537 75.2569 192.513 L 76.2335 191.946 C 76.3058 191.946 76.2335 191.826 76.2335 191.766 L 75.3051 191.235 C 75.2562 191.211 75.2026 191.199 75.1484 191.199 C 75.0941 191.199 75.0405 191.211 74.9916 191.235 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -220.0102 -110.422)" id="Vector_264"
                                clip-path="url(#CLIPPATH_284)">
                                <clipPath id="CLIPPATH_284">
                                    <rect transform="matrix(1 0 0 1 220.0102 110.422)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-76.4898, -191.078)"
                                    d="M 76.366 190.439 L 75.3894 191.006 C 75.3171 191.006 75.3292 191.126 75.3894 191.175 L 76.3178 191.717 C 76.3667 191.741 76.4203 191.753 76.4745 191.753 C 76.5288 191.753 76.5824 191.741 76.6313 191.717 L 77.6078 191.151 C 77.6802 191.151 77.6078 191.03 77.6078 190.982 L 76.6795 190.439 C 76.6306 190.416 76.577 190.403 76.5228 190.403 C 76.4685 190.403 76.4149 190.416 76.366 190.439 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -218.6357 -111.218)" id="Vector_265"
                                clip-path="url(#CLIPPATH_285)">
                                <clipPath id="CLIPPATH_285">
                                    <rect transform="matrix(1 0 0 1 218.6357 111.218)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-77.8643, -190.282)"
                                    d="M 77.7405 189.643 L 76.7639 190.21 C 76.6916 190.21 76.7037 190.331 76.7639 190.391 L 77.6923 190.922 C 77.7412 190.945 77.7948 190.957 77.849 190.957 C 77.9033 190.957 77.9569 190.945 78.0058 190.922 L 78.9823 190.367 C 79.0547 190.367 78.9823 190.234 78.9823 190.186 L 78.054 189.643 C 78.0051 189.62 77.9515 189.607 77.8973 189.607 C 77.843 189.607 77.7894 189.62 77.7405 189.643 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -217.2537 -112.0096)" id="Vector_266"
                                clip-path="url(#CLIPPATH_286)">
                                <clipPath id="CLIPPATH_286">
                                    <rect transform="matrix(1 0 0 1 217.2537 112.0096)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-79.2463, -189.4904)"
                                    d="M 79.1149 188.847 L 78.1504 189.414 C 78.066 189.414 78.0781 189.535 78.1504 189.595 L 79.0788 190.126 C 79.1268 190.152 79.1807 190.166 79.2355 190.166 C 79.2903 190.166 79.3442 190.152 79.3922 190.126 L 80.3688 189.571 C 80.4412 189.571 80.3688 189.438 80.3688 189.39 L 79.4405 188.859 C 79.3909 188.832 79.3357 188.817 79.2791 188.815 C 79.2226 188.813 79.1664 188.824 79.1149 188.847 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -215.8792 -112.7877)" id="Vector_267"
                                clip-path="url(#CLIPPATH_287)">
                                <clipPath id="CLIPPATH_287">
                                    <rect transform="matrix(1 0 0 1 215.8792 112.7878)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-80.6208, -188.7122)"
                                    d="M 80.4894 188.063 L 79.5249 188.618 C 79.4405 188.618 79.4526 188.751 79.5249 188.799 L 80.4533 189.33 C 80.5013 189.356 80.5552 189.37 80.61 189.37 C 80.6648 189.37 80.7187 189.356 80.7667 189.33 L 81.7433 188.775 C 81.8157 188.775 81.7433 188.642 81.7433 188.594 L 80.7788 188.136 C 80.7398 188.101 80.6932 188.077 80.6429 188.064 C 80.5926 188.052 80.54 188.051 80.4894 188.063 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -214.5047 -113.5996)" id="Vector_268"
                                clip-path="url(#CLIPPATH_288)">
                                <clipPath id="CLIPPATH_288">
                                    <rect transform="matrix(1 0 0 1 214.5047 113.5996)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-81.9953, -187.9004)"
                                    d="M 81.864 187.267 L 80.8994 187.822 C 80.815 187.822 80.8271 187.955 80.8994 188.003 L 81.8278 188.546 C 81.9282 188.587 82.0409 188.587 82.1413 188.546 L 83.1178 187.979 C 83.1902 187.979 83.1178 187.858 83.1178 187.798 L 82.1895 187.267 C 82.14 187.239 82.0839 187.224 82.0267 187.224 C 81.9696 187.224 81.9134 187.239 81.864 187.267 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -231.5212 -103.747)" id="Vector_269"
                                clip-path="url(#CLIPPATH_289)">
                                <clipPath id="CLIPPATH_289">
                                    <rect transform="matrix(1 0 0 1 231.5212 103.747)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-64.9788, -197.753)"
                                    d="M 65.3706 196.794 L 63.3572 198 C 63.2728 198 63.2849 198.133 63.3572 198.181 L 64.2856 198.712 C 64.3336 198.738 64.3875 198.752 64.4423 198.752 C 64.4971 198.752 64.551 198.738 64.599 198.712 L 66.6004 197.506 C 66.6848 197.506 66.6727 197.385 66.6004 197.325 L 65.6721 196.794 C 65.6262 196.768 65.5743 196.754 65.5213 196.754 C 65.4684 196.754 65.4165 196.768 65.3706 196.794 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -231.6419 -105.241)" id="Vector_270"
                                clip-path="url(#CLIPPATH_290)">
                                <clipPath id="CLIPPATH_290">
                                    <rect transform="matrix(1 0 0 1 231.6419 105.241)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-64.8581, -196.259)"
                                    d="M 64.7315 195.624 L 63.7549 196.179 C 63.6705 196.179 63.6826 196.312 63.7549 196.36 L 64.6833 196.903 C 64.7307 196.924 64.7821 196.934 64.834 196.934 C 64.8859 196.934 64.9372 196.924 64.9847 196.903 L 65.9612 196.336 C 66.0456 196.336 66.0336 196.215 65.9612 196.155 L 65.0329 195.624 C 64.9871 195.598 64.9351 195.584 64.8822 195.584 C 64.8293 195.584 64.7773 195.598 64.7315 195.624 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -230.2916 -106.0382)" id="Vector_271"
                                clip-path="url(#CLIPPATH_291)">
                                <clipPath id="CLIPPATH_291">
                                    <rect transform="matrix(1 0 0 1 230.2916 106.0382)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-66.2084, -195.4618)"
                                    d="M 66.1059 194.829 L 65.1052 195.372 C 65.0209 195.372 65.0329 195.505 65.1052 195.553 L 66.0336 196.095 C 66.0804 196.119 66.132 196.131 66.1843 196.131 C 66.2366 196.131 66.2882 196.119 66.335 196.095 L 67.3116 195.529 C 67.396 195.529 67.3839 195.408 67.3116 195.348 L 66.3832 194.817 C 66.3388 194.799 66.2911 194.791 66.2433 194.793 C 66.1955 194.795 66.1487 194.808 66.1059 194.829 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -228.8327 -106.793)" id="Vector_272"
                                clip-path="url(#CLIPPATH_292)">
                                <clipPath id="CLIPPATH_292">
                                    <rect transform="matrix(1 0 0 1 228.8327 106.7931)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-67.6673, -194.7069)"
                                    d="M 67.5166 194.032 L 66.5401 194.599 C 66.4557 194.599 66.4677 194.72 66.5401 194.768 L 67.5166 195.371 C 67.5635 195.394 67.615 195.406 67.6674 195.406 C 67.7197 195.406 67.7713 195.394 67.8181 195.371 L 68.7946 194.804 C 68.879 194.804 68.867 194.683 68.7946 194.635 L 67.8663 194.093 C 67.8193 194.051 67.7618 194.023 67.7 194.013 C 67.6383 194.002 67.5748 194.009 67.5166 194.032 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -227.5184 -107.624)" id="Vector_273"
                                clip-path="url(#CLIPPATH_293)">
                                <clipPath id="CLIPPATH_293">
                                    <rect transform="matrix(1 0 0 1 227.5184 107.624)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-68.9816, -193.876)"
                                    d="M 68.855 193.237 L 67.8784 193.804 C 67.794 193.804 67.8061 193.924 67.8784 193.984 L 68.8068 194.515 C 68.8536 194.538 68.9052 194.551 68.9575 194.551 C 69.0098 194.551 69.0614 194.538 69.1082 194.515 L 70.0848 193.96 C 70.1692 193.96 70.1571 193.828 70.0848 193.779 L 69.1564 193.237 C 69.1096 193.213 69.058 193.201 69.0057 193.201 C 68.9534 193.201 68.9018 193.213 68.855 193.237 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -226.1441 -108.4146)" id="Vector_274"
                                clip-path="url(#CLIPPATH_294)">
                                <clipPath id="CLIPPATH_294">
                                    <rect transform="matrix(1 0 0 1 226.1441 108.4146)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-70.3559, -193.0854)"
                                    d="M 70.2293 192.441 L 69.2527 193.008 C 69.1683 193.008 69.1804 193.128 69.2527 193.189 L 70.1811 193.719 C 70.2269 193.746 70.2789 193.76 70.3318 193.76 C 70.3847 193.76 70.4367 193.746 70.4825 193.719 L 71.4591 193.165 C 71.5434 193.165 71.5314 193.032 71.4591 192.984 L 70.5307 192.453 C 70.4848 192.428 70.4337 192.413 70.3814 192.411 C 70.3291 192.409 70.277 192.419 70.2293 192.441 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -224.7696 -109.2153)" id="Vector_275"
                                clip-path="url(#CLIPPATH_295)">
                                <clipPath id="CLIPPATH_295">
                                    <rect transform="matrix(1 0 0 1 224.7696 109.2152)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-71.7304, -192.2848)"
                                    d="M 71.6038 191.657 L 70.6272 192.212 C 70.5428 192.212 70.5549 192.344 70.6272 192.393 L 71.5556 192.923 C 71.6024 192.947 71.654 192.959 71.7063 192.959 C 71.7586 192.959 71.8102 192.947 71.857 192.923 L 72.8336 192.357 C 72.918 192.357 72.9059 192.236 72.8336 192.176 L 71.9052 191.645 C 71.8583 191.62 71.8058 191.608 71.7529 191.611 C 71.7 191.613 71.6485 191.629 71.6038 191.657 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -223.3951 -110.0048)" id="Vector_276"
                                clip-path="url(#CLIPPATH_296)">
                                <clipPath id="CLIPPATH_296">
                                    <rect transform="matrix(1 0 0 1 223.3951 110.0048)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-73.1049, -191.4952)"
                                    d="M 72.9783 190.861 L 72.0017 191.415 C 71.9173 191.415 71.9294 191.548 72.0017 191.596 L 72.9301 192.139 C 73.0304 192.181 73.1432 192.181 73.2436 192.139 L 74.2081 191.572 C 74.2925 191.572 74.2804 191.452 74.2081 191.391 L 73.2797 190.861 C 73.2339 190.834 73.1819 190.82 73.129 190.82 C 73.0761 190.82 73.0241 190.834 72.9783 190.861 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -222.0208 -110.796)" id="Vector_277"
                                clip-path="url(#CLIPPATH_297)">
                                <clipPath id="CLIPPATH_297">
                                    <rect transform="matrix(1 0 0 1 222.0208 110.796)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-74.4792, -190.704)"
                                    d="M 74.3526 190.065 L 73.376 190.632 C 73.2916 190.632 73.3037 190.752 73.376 190.8 L 74.3044 191.343 C 74.3533 191.367 74.4068 191.379 74.4611 191.379 C 74.5153 191.379 74.5689 191.367 74.6178 191.343 L 75.5823 190.776 C 75.6667 190.776 75.6547 190.656 75.5823 190.595 L 74.654 190.065 C 74.6072 190.041 74.5556 190.029 74.5033 190.029 C 74.451 190.029 74.3994 190.041 74.3526 190.065 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -220.6463 -111.592)" id="Vector_278"
                                clip-path="url(#CLIPPATH_298)">
                                <clipPath id="CLIPPATH_298">
                                    <rect transform="matrix(1 0 0 1 220.6463 111.592)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-75.8537, -189.908)"
                                    d="M 75.7271 189.269 L 74.7505 189.836 C 74.6661 189.836 74.6782 189.956 74.7505 190.017 L 75.6789 190.547 C 75.7278 190.571 75.7813 190.583 75.8356 190.583 C 75.8899 190.583 75.9434 190.571 75.9923 190.547 L 76.9569 189.98 C 77.0412 189.98 77.0292 189.86 76.9569 189.812 L 76.0285 189.269 C 75.9817 189.246 75.9301 189.233 75.8778 189.233 C 75.8255 189.233 75.7739 189.246 75.7271 189.269 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -219.2115 -112.3835)" id="Vector_279"
                                clip-path="url(#CLIPPATH_299)">
                                <clipPath id="CLIPPATH_299">
                                    <rect transform="matrix(1 0 0 1 219.2115 112.3835)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-77.2885, -189.1165)"
                                    d="M 77.1619 188.473 L 76.1853 189.04 C 76.1009 189.04 76.113 189.161 76.1853 189.221 L 77.1137 189.752 C 77.1617 189.778 77.2156 189.792 77.2704 189.792 C 77.3252 189.792 77.3791 189.778 77.4271 189.752 L 78.3917 189.197 C 78.4761 189.197 78.464 189.064 78.3917 189.016 L 77.4633 188.473 C 77.4158 188.452 77.3645 188.441 77.3126 188.441 C 77.2607 188.441 77.2094 188.452 77.1619 188.473 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -217.8952 -113.1785)" id="Vector_280"
                                clip-path="url(#CLIPPATH_300)">
                                <clipPath id="CLIPPATH_300">
                                    <rect transform="matrix(1 0 0 1 217.8952 113.1785)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-78.6048, -188.3215)"
                                    d="M 78.4759 187.689 L 77.4993 188.244 C 77.427 188.244 77.427 188.376 77.4993 188.424 L 78.4277 188.955 C 78.4757 188.982 78.5296 188.995 78.5844 188.995 C 78.6392 188.995 78.6931 188.982 78.7411 188.955 L 79.7057 188.4 C 79.7901 188.4 79.778 188.268 79.7057 188.219 L 78.7773 187.689 C 78.7315 187.662 78.6795 187.648 78.6266 187.648 C 78.5737 187.648 78.5217 187.662 78.4759 187.689 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -215.6707 -114.4713)" id="Vector_281"
                                clip-path="url(#CLIPPATH_301)">
                                <clipPath id="CLIPPATH_301">
                                    <rect transform="matrix(1 0 0 1 215.6707 114.4712)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-80.8293, -187.0288)"
                                    d="M 81.5504 185.904 L 78.8738 187.448 C 78.8015 187.448 78.8015 187.581 78.8738 187.629 L 79.8022 188.16 C 79.8511 188.183 79.9047 188.195 79.9589 188.195 C 80.0132 188.195 80.0667 188.183 80.1157 188.16 L 82.7802 186.616 C 82.8645 186.616 82.8525 186.483 82.7802 186.435 L 81.8639 185.892 C 81.814 185.871 81.76 185.86 81.7057 185.863 C 81.6515 185.865 81.5984 185.879 81.5504 185.904 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -233.1849 -104.3455)" id="Vector_282"
                                clip-path="url(#CLIPPATH_302)">
                                <clipPath id="CLIPPATH_302">
                                    <rect transform="matrix(1 0 0 1 233.1849 104.3455)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-63.3151, -197.1545)"
                                    d="M 63.3572 196.421 L 62.031 197.181 C 61.9466 197.181 61.9587 197.313 62.031 197.362 L 62.9594 197.892 C 63.0074 197.919 63.0613 197.932 63.1161 197.932 C 63.1709 197.932 63.2248 197.919 63.2729 197.892 L 64.5991 197.132 C 64.6835 197.132 64.6714 197 64.5991 196.952 L 63.6707 196.421 C 63.6235 196.392 63.5693 196.377 63.514 196.377 C 63.4587 196.377 63.4045 196.392 63.3572 196.421 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -218.9441 -106.623)" id="Vector_283"
                                clip-path="url(#CLIPPATH_303)">
                                <clipPath id="CLIPPATH_303">
                                    <rect transform="matrix(1 0 0 1 218.9441 106.623)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-77.5559, -194.877)"
                                    d="M 86.9275 189.016 L 67.408 200.292 C 67.3357 200.292 67.3357 200.413 67.408 200.473 L 67.8662 200.739 C 67.9151 200.762 67.9686 200.774 68.0229 200.774 C 68.0772 200.774 68.1307 200.762 68.1796 200.739 L 87.6991 189.462 C 87.7835 189.462 87.7715 189.342 87.6991 189.282 L 87.241 189.016 C 87.1921 188.993 87.1385 188.98 87.0843 188.98 C 87.03 188.98 86.9764 188.993 86.9275 189.016 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -227.5969 -112.737)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_18"
                                clip-path="url(#CLIPPATH_304)">
                                <clipPath id="CLIPPATH_304">
                                    <rect transform="matrix(1 0 0 1 227.5969 112.737)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(191,191,191); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-68.9031, -188.763)"
                                    d="M 64.0925 189.523 L 64.2131 189.595 L 67.5889 191.537 L 73.581 188.076 L 73.7136 188.003 L 70.2052 185.989 L 64.0925 189.523 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -227.6029 -112.6645)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_19"
                                clip-path="url(#CLIPPATH_305)">
                                <clipPath id="CLIPPATH_305">
                                    <rect transform="matrix(1 0 0 1 227.6029 112.6645)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(229,229,229); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-68.8971, -188.8355)"
                                    d="M 64.2131 189.595 L 67.589 191.537 L 73.5811 188.075 L 70.2052 186.134 L 64.2131 189.595 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -224.1004 -106.0134)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_20"
                                clip-path="url(#CLIPPATH_306)">
                                <clipPath id="CLIPPATH_306">
                                    <rect transform="matrix(1 0 0 1 224.1005 106.0134)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(229,229,229); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-72.3995, -195.4866)"
                                    d="M 54.4715 194.069 V 194.371 C 54.4697 194.587 54.5258 194.799 54.634 194.986 C 54.7421 195.172 54.8983 195.327 55.0864 195.432 L 66.9741 202.294 C 67.1587 202.408 67.3721 202.467 67.589 202.463 C 67.8054 202.463 68.0178 202.405 68.2039 202.294 L 89.7127 189.873 C 89.9007 189.767 90.0569 189.613 90.1651 189.426 C 90.2732 189.239 90.3293 189.027 90.3276 188.811 V 188.51 L 67.589 201.643 L 54.4715 194.069 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -215.6648 -114.0129)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_21"
                                clip-path="url(#CLIPPATH_307)">
                                <clipPath id="CLIPPATH_307">
                                    <rect transform="matrix(1 0 0 1 215.6648 114.0129)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(244,244,244); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-80.8352, -187.4871)"
                                    d="M 67.9385 201.824 C 68.1343 201.896 68.3437 201.925 68.552 201.909 C 68.7602 201.892 68.9623 201.83 69.1441 201.727 L 90.6047 189.342 C 90.7914 189.236 90.9521 189.091 91.0752 188.916 C 91.1983 188.74 91.2806 188.54 91.3161 188.329 L 93.7274 174.339 C 93.7334 174.259 93.7334 174.178 93.7274 174.098 C 93.7288 173.906 93.6922 173.715 93.6198 173.537 C 93.5474 173.359 93.4405 173.197 93.3054 173.061 L 70.9888 185.929 C 70.8526 186.01 70.7356 186.12 70.6461 186.252 C 70.5566 186.383 70.4967 186.532 70.4703 186.688 L 67.9385 201.824 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -216.077 -114.1605)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_22"
                                clip-path="url(#CLIPPATH_308)">
                                <clipPath id="CLIPPATH_308">
                                    <rect transform="matrix(1 0 0 1 216.077 114.1605)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(229,229,229); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-80.423, -187.3395)"
                                    d="M 67.5889 201.643 L 67.7335 201.727 L 67.9385 201.824 L 70.4704 186.688 C 70.4967 186.532 70.5567 186.383 70.6462 186.251 C 70.7357 186.12 70.8526 186.01 70.9888 185.929 L 93.2572 173.073 C 93.1648 172.99 93.0637 172.917 92.9558 172.855 L 70.6512 185.723 C 70.5142 185.801 70.3965 185.909 70.3068 186.038 C 70.217 186.168 70.1575 186.316 70.1328 186.471 L 67.5889 201.643 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -240.7069 -152.5046)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_23"
                                clip-path="url(#CLIPPATH_309)">
                                <clipPath id="CLIPPATH_309">
                                    <rect transform="matrix(1 0 0 1 240.7069 152.5046)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-55.7931, -148.9954)"
                                    d="M 51.4212 141.777 C 51.4212 141.777 51.6985 147.108 51.5779 147.578 C 51.4574 148.049 49.1666 149.604 48.4553 150.171 C 47.744 150.738 52.1325 154.995 54.2545 155.996 C 56.3764 156.997 63.0799 154.404 63.2004 151.172 C 63.321 147.94 61.9948 145.142 61.0182 144.961 C 60.0416 144.78 51.4212 141.777 51.4212 141.777 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -240.0422 -134.2156)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_24"
                                clip-path="url(#CLIPPATH_310)">
                                <clipPath id="CLIPPATH_310">
                                    <rect transform="matrix(1 0 0 1 240.0421 134.2156)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(244,244,244); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-56.4579, -167.2844)"
                                    d="M 50.8305 148.494 C 50.8305 148.494 54.6885 154.247 60.0778 154.79 C 61.7778 153.113 61.9225 147.156 59.5714 145.25 C 59.5714 145.25 61.7416 143.513 63.1884 143.851 C 64.7794 144.811 65.9632 146.322 66.516 148.096 C 67.8958 152.047 68.5494 156.214 68.445 160.397 C 68.3486 166.042 68.445 180.321 68.445 180.321 C 68.1291 182.007 67.4597 183.608 66.4809 185.017 C 65.5022 186.426 64.2363 187.612 62.7664 188.497 C 58.8854 190.689 54.3153 191.319 49.9865 190.258 C 48.915 190.03 47.9204 189.53 47.0988 188.805 C 46.2772 188.081 45.6564 187.156 45.2965 186.121 C 45.5497 182.154 47.117 174.061 46.5022 169.032 C 45.8873 164.003 44.7901 160.337 44.5128 156.321 C 44.2355 152.305 45.0433 152.378 47.0688 150.942 C 48.264 150.04 49.5209 149.221 50.8305 148.494 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -247.1716 -124.3789)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_25"
                                clip-path="url(#CLIPPATH_311)">
                                <clipPath id="CLIPPATH_311">
                                    <rect transform="matrix(1 0 0 1 247.1716 124.3789)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-49.3284, -177.1211)"
                                    d="M 57.0153 194.371 C 56.045 193.727 55.0341 193.147 53.9891 192.634 C 53.0145 192.329 52.1289 191.791 51.409 191.066 C 50.4566 190.138 48.9133 186.628 47.7921 183.203 C 46.674 179.349 46.2334 175.329 46.49 171.324 C 46.9602 166.5 48.6843 159.807 49.1183 157.045 C 49.5523 154.283 48.6722 153.186 47.3822 152.221 C 45.8751 151.015 43.7652 151.558 42.6801 155.429 C 41.2731 160.786 40.4644 166.283 40.2688 171.819 C 40.2296 175.914 40.8608 179.988 42.1376 183.879 C 43.2878 187.225 44.8382 190.42 46.7552 193.394 C 47.2857 194.286 47.4545 195.07 48.2623 196.891 C 49.0426 198.722 50.2547 200.335 51.7948 201.595 C 53.1572 202.572 53.7962 202.704 54.1097 202.523 C 54.4232 202.342 54.4232 201.848 53.8565 201.317 C 52.8974 200.564 52.0808 199.645 51.4452 198.604 C 51.4452 198.604 52.6509 199.81 53.4104 200.449 C 54.0954 201.025 54.8535 201.507 55.665 201.884 C 56.4607 202.234 57.5579 201.559 56.9912 201.028 C 56.4245 200.497 55.8579 200.232 54.7366 199.255 C 54.1022 198.76 53.5348 198.184 53.0487 197.543 C 53.8422 198.148 54.6805 198.692 55.5565 199.171 C 56.2431 199.586 57.0329 199.799 57.8352 199.786 C 58.2571 199.786 58.7635 199.183 57.9798 198.58 C 56.9212 198.029 55.93 197.357 55.026 196.578 C 54.1579 195.709 53.6757 194.986 53.9168 194.974 C 54.1579 194.962 54.6281 195.492 55.6409 195.818 C 56.6536 196.144 57.7387 195.818 57.8713 195.287 C 58.004 194.757 57.9678 194.841 57.0153 194.371 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -240.675 -164.9448)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_26"
                                clip-path="url(#CLIPPATH_312)">
                                <clipPath id="CLIPPATH_312">
                                    <rect transform="matrix(1 0 0 1 240.6749 164.9448)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-55.8251, -136.5552)"
                                    d="M 63.4657 133.866 C 62.8267 129.729 59.8487 126.63 55.5928 126.835 C 54.5151 126.893 53.4595 127.164 52.4864 127.631 C 51.5133 128.098 50.6418 128.752 49.9218 129.557 C 49.2017 130.361 48.6473 131.299 48.2902 132.318 C 47.933 133.337 47.7802 134.416 47.8404 135.494 C 47.9133 136.752 48.2781 137.976 48.9059 139.069 C 49.5337 140.161 50.4073 141.093 51.4574 141.789 C 51.6044 142.417 51.827 143.024 52.1205 143.598 C 53.6155 145.359 58.1488 146.456 59.487 146.263 C 60.2646 146.194 61.0034 145.893 61.6075 145.398 C 62.2117 144.903 62.6532 144.238 62.8749 143.49 C 64.2614 140.233 63.8153 135.892 63.4657 133.866 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -241.7226 -168.0671)" id="Vector_284"
                                clip-path="url(#CLIPPATH_313)">
                                <clipPath id="CLIPPATH_313">
                                    <rect transform="matrix(1 0 0 1 241.7226 168.0671)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-54.7774, -133.4329)"
                                    d="M 51.4212 141.777 L 51.8071 138.159 C 51.8071 138.159 48.8653 130.537 55.8219 132.009 C 60.4154 132.974 61.5728 133.384 62.9714 130.308 C 64.3699 127.233 59.4388 124.447 53.5794 125.219 C 51.5644 125.433 49.7032 126.396 48.3636 127.916 C 47.0241 129.437 46.3039 131.405 46.3455 133.432 C 46.5022 135.711 47.105 140.306 51.4212 141.777 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -251.7522 -143.2834)" id="Vector_285"
                                clip-path="url(#CLIPPATH_314)">
                                <clipPath id="CLIPPATH_314">
                                    <rect transform="matrix(1 0 0 1 251.7522 143.2834)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(237,237,237); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-44.7478, -158.2166)"
                                    d="M 39.5093 162.473 C 39.5093 162.473 43.3071 166.247 47.8042 165.162 C 48.4432 164.728 49.9864 155.9 49.9864 155.9 C 49.9864 155.9 49.9864 151.004 46.2368 151.076 C 42.4872 151.148 39.5093 162.473 39.5093 162.473 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -229.3993 -151.975)" id="Vector_286"
                                clip-path="url(#CLIPPATH_315)">
                                <clipPath id="CLIPPATH_315">
                                    <rect transform="matrix(1 0 0 1 229.3993 151.975)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(237,237,237); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-67.1007, -149.525)"
                                    d="M 68.1797 155.151 C 69.2344 155.117 70.2374 154.686 70.9889 153.945 C 70.8321 151.968 68.3003 144.454 63.2124 143.899 C 64.6017 144.865 65.702 146.191 66.3953 147.734 C 67.1802 150.157 67.7767 152.637 68.1797 155.151 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 253.0965 132.8895)" id="Vector_287"
                                clip-path="url(#CLIPPATH_316)">
                                <clipPath id="CLIPPATH_316">
                                    <rect transform="matrix(1 0 0 1 -253.0965 -132.8895)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(214,216,229); fill-rule: nonzero; opacity: 0.4;"
                                    transform=" translate(-549.5965, -434.3895)"
                                    d="M 549.596 450.188 C 564.705 450.188 576.953 443.115 576.953 434.389 C 576.953 425.664 564.705 418.591 549.596 418.591 C 534.488 418.591 522.24 425.664 522.24 434.389 C 522.24 443.115 534.488 450.188 549.596 450.188 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 255.9007 3.9933)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_27"
                                clip-path="url(#CLIPPATH_317)">
                                <clipPath id="CLIPPATH_317">
                                    <rect transform="matrix(1 0 0 1 -255.9007 -3.9934)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-552.4007, -305.4934)"
                                    d="M 548.391 286.654 C 549.488 284.893 557.867 283.736 560.628 290.839 C 561.665 293.528 561.508 300.415 562.388 304.732 C 563.268 309.05 565.318 311.51 566.005 315.019 C 566.692 318.529 565.547 324.402 557.095 325.451 C 548.644 326.5 542.145 323.522 540.144 320.82 C 538.143 318.119 538.106 312.378 540.144 309.327 C 542.182 306.276 543.761 303.743 543.761 299.679 L 548.391 286.654 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 243.9068 27.7612)" id="Vector_288"
                                clip-path="url(#CLIPPATH_318)">
                                <clipPath id="CLIPPATH_318">
                                    <rect transform="matrix(1 0 0 1 -243.9068 -27.7612)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-540.4068, -329.2612)"
                                    d="M 538.36 316.371 C 538.36 316.371 536.37 330.445 540.132 340.346 C 543.894 350.247 542.845 337.777 542.845 337.777 L 541.94 334.811 C 541.94 334.811 541.193 323.354 541.506 320.544 C 541.82 317.734 541.747 315.322 541.94 315.092 C 542.133 314.863 541.205 314.417 540.807 314.357 C 540.409 314.296 538.36 316.371 538.36 316.371 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 250.8479 -8.4249)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_28"
                                clip-path="url(#CLIPPATH_319)">
                                <clipPath id="CLIPPATH_319">
                                    <rect transform="matrix(1 0 0 1 -250.8479 8.4249)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-547.3479, -293.0751)"
                                    d="M 553.925 285.436 C 553.925 285.436 547.619 283.615 543.797 287.028 C 542.535 288.19 541.616 289.675 541.139 291.324 C 540.663 292.972 540.648 294.719 541.097 296.375 C 541.603 298.365 542.628 301.09 544.207 301.199 C 545.787 301.307 553.925 285.436 553.925 285.436 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 254.9961 10.3136)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_29"
                                clip-path="url(#CLIPPATH_320)">
                                <clipPath id="CLIPPATH_320">
                                    <rect transform="matrix(1 0 0 1 -254.9961 -10.3136)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-551.4961, -311.8136)"
                                    d="M 556.336 302.706 C 556.336 302.706 555.926 309.737 556.059 310.256 C 556.191 310.774 558.807 311.269 559.555 311.884 C 560.302 312.499 555.733 319.626 553.406 320.688 C 551.079 321.749 543.906 319.047 543.411 315.466 C 542.953 312.185 545.461 309.628 546.438 308.736 C 547.096 308.692 547.756 308.692 548.415 308.736 L 548.62 305.335 C 551.767 304.214 556.336 302.706 556.336 302.706 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 253.9812 20.6916)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_30"
                                clip-path="url(#CLIPPATH_321)">
                                <clipPath id="CLIPPATH_321">
                                    <rect transform="matrix(1 0 0 1 -253.9812 -20.6916)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(244,244,244); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-550.4812, -322.1916)"
                                    d="M 557.301 310.871 C 559.278 311.184 561.533 312.233 561.846 313.283 C 562.662 317.178 562.467 321.218 561.279 325.017 C 559.567 329.54 558.422 332.422 557.433 334.376 C 557.433 334.376 548.885 337.994 542.001 333.761 C 542.001 333.761 541.519 328.937 541.495 326.32 C 535.129 320.772 540.566 313.922 545.956 308.603 C 546.602 308.555 547.251 308.555 547.897 308.603 C 547.897 308.603 543.074 314.296 546.438 317.528 C 553.587 315.369 555.01 312.161 557.301 310.871 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 255.1055 -4.4574)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_31"
                                clip-path="url(#CLIPPATH_322)">
                                <clipPath id="CLIPPATH_322">
                                    <rect transform="matrix(1 0 0 1 -255.1055 4.4574)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-551.6055, -297.0426)"
                                    d="M 543.206 293.927 C 543.918 289.404 547.173 285.991 551.839 286.269 C 553.728 286.358 555.54 287.044 557.016 288.227 C 558.492 289.41 559.556 291.029 560.055 292.854 C 560.554 294.679 560.463 296.615 559.795 298.384 C 559.127 300.154 557.916 301.667 556.336 302.706 C 556.175 303.387 555.937 304.047 555.625 304.672 C 553.973 306.602 549.596 307.82 548.138 307.832 C 546.932 307.832 545.811 306.686 544.641 304.745 C 542.194 300.644 542.821 296.158 543.206 293.927 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 255.8079 -7.0781)" id="Vector_289"
                                clip-path="url(#CLIPPATH_323)">
                                <clipPath id="CLIPPATH_323">
                                    <rect transform="matrix(1 0 0 1 -255.8079 7.0781)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-552.3079, -294.4219)"
                                    d="M 553.274 286.353 C 556.541 286.992 559.23 287.909 560.122 291.117 C 560.725 293.336 561.52 297.545 560.761 299.318 L 560.303 300.608 L 556.336 302.706 C 556.336 302.706 554.491 301.163 555.07 296.676 C 555.043 296.066 554.852 295.474 554.515 294.964 C 554.264 294.54 554.077 294.08 553.961 293.601 C 553.492 292.385 552.578 291.393 551.405 290.827 C 548.451 289.175 544.171 290.598 543.544 291.201 C 544.355 289.393 545.768 287.921 547.542 287.037 C 549.316 286.153 551.342 285.912 553.274 286.353 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 266.4835 30.2286)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_32"
                                clip-path="url(#CLIPPATH_324)">
                                <clipPath id="CLIPPATH_324">
                                    <rect transform="matrix(1 0 0 1 -266.4835 -30.2286)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-562.9835, -331.7286)"
                                    d="M 562.075 343.711 C 562.81 339.128 564.185 336.161 563.546 333.641 C 562.121 328.544 560.258 323.581 557.976 318.807 C 556.529 315.961 556.975 313.983 558.47 312.849 C 560.158 311.643 561.761 312.138 563.293 315.261 C 565.21 319.229 567.356 323.305 568.405 329.215 C 569.077 333.037 569.028 336.952 568.26 340.756 C 567.609 344.869 566.307 347.184 564.751 351.043 C 564.317 352.153 561.448 347.618 562.075 343.711 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 256.8339 132.8943)" id="Vector_290"
                                clip-path="url(#CLIPPATH_325)">
                                <clipPath id="CLIPPATH_325">
                                    <rect transform="matrix(1 0 0 1 -256.8339 -132.8943)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(56,34,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-553.3339, -434.3943)"
                                    d="M 559.218 429.131 C 557.566 430.47 554.986 429.541 554.865 429.662 C 552.945 431.319 550.933 432.865 548.837 434.293 C 547.8 435.101 546.197 436.186 546.486 437.754 C 547.004 440.54 551.465 439.684 553.153 438.827 C 554.841 437.971 556.204 436.56 557.795 435.571 C 558.94 434.86 560.05 434.498 560.206 433.063 C 560.315 432.194 559.507 429.095 559.218 429.131 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 256.8701 134.5445)" id="Vector_291"
                                clip-path="url(#CLIPPATH_326)">
                                <clipPath id="CLIPPATH_326">
                                    <rect transform="matrix(1 0 0 1 -256.8701 -134.5445)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(156,115,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-553.3701, -436.0445)"
                                    d="M 560.182 432.484 C 559.965 433.859 558.868 434.245 557.771 434.896 C 556.155 435.897 554.733 437.308 553.045 438.201 C 551.357 439.093 547.607 439.769 546.522 437.779 C 547.113 440.468 551.501 439.624 553.165 438.78 C 554.829 437.936 556.215 436.512 557.807 435.524 C 558.952 434.812 560.062 434.45 560.218 433.015 C 560.22 432.837 560.208 432.66 560.182 432.484 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 245.7978 130.2003)" id="Vector_292"
                                clip-path="url(#CLIPPATH_327)">
                                <clipPath id="CLIPPATH_327">
                                    <rect transform="matrix(1 0 0 1 -245.7978 -130.2002)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(56,34,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-542.2978, -431.7002)"
                                    d="M 547.607 426.804 C 546.1 428.01 543.809 427.347 543.701 427.467 C 541.935 428.975 540.087 430.384 538.167 431.688 C 537.214 432.424 535.755 433.425 536.009 434.848 C 536.491 437.405 540.578 436.621 542.121 435.837 C 543.664 435.053 544.918 433.763 546.377 432.858 C 547.414 432.207 548.439 431.869 548.608 430.555 C 548.704 429.759 547.884 426.78 547.607 426.804 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 245.7725 131.799)" id="Vector_293"
                                clip-path="url(#CLIPPATH_328)">
                                <clipPath id="CLIPPATH_328">
                                    <rect transform="matrix(1 0 0 1 -245.7725 -131.799)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(156,115,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-542.2725, -433.299)"
                                    d="M 548.572 430.024 C 548.367 431.291 547.366 431.628 546.329 432.28 C 544.846 433.196 543.544 434.523 542.001 435.307 C 540.458 436.091 537.022 436.742 535.973 434.921 C 536.515 437.333 540.53 436.609 542.001 435.837 C 543.472 435.065 544.798 433.763 546.257 432.859 C 547.294 432.207 548.319 431.87 548.487 430.555 C 548.532 430.381 548.56 430.204 548.572 430.024 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 254.9905 81.5001)" id="Vector_294"
                                clip-path="url(#CLIPPATH_329)">
                                <clipPath id="CLIPPATH_329">
                                    <rect transform="matrix(1 0 0 1 -254.9905 -81.5001)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-551.4905, -383.0001)"
                                    d="M 538.698 349.861 C 539.433 344.156 541.531 335.871 541.531 335.871 C 543.518 336.804 545.668 337.341 547.861 337.451 C 551.07 337.43 554.27 337.115 557.421 336.51 C 558.452 338.311 559.579 340.054 560.797 341.732 C 562.437 344.012 565.62 348.968 564.86 357.76 C 564.366 363.464 561.159 387.717 561.159 387.717 C 562.404 391.796 563.066 396.031 563.124 400.296 C 562.835 405.36 562.166 410.395 561.123 415.359 L 559.218 429.131 C 559.218 429.131 556.674 430.964 554.865 429.662 L 555.095 416.191 C 554.878 412.898 554.552 408.038 554.335 404.927 C 553.997 399.874 553.129 391.842 552.828 389.828 C 552.526 387.813 551.924 384.316 551.622 380.385 C 551.321 376.453 549.838 356.506 549.838 356.506 L 549.633 360.244 C 549.633 360.244 549.428 366.274 548.56 373.8 C 547.692 381.325 547.354 384.654 547.354 384.654 C 548.179 386.16 548.757 387.789 549.066 389.478 C 549.223 391.094 551.068 403.95 549.958 410.414 L 547.716 426.924 C 547.15 427.314 546.5 427.564 545.819 427.654 C 545.138 427.744 544.445 427.672 543.798 427.443 L 542.459 410.752 C 541.567 404.396 539.674 390.937 539.385 389.188 C 538.741 385.664 538.362 382.096 538.252 378.515 C 537.805 371.291 537.974 355.565 538.698 349.861 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 254.7341 63.4959)" id="Vector_295"
                                clip-path="url(#CLIPPATH_330)">
                                <clipPath id="CLIPPATH_330">
                                    <rect transform="matrix(1 0 0 1 -254.7341 -63.4959)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-551.2341, -364.9959)"
                                    d="M 557.433 334.412 L 562.34 344.277 C 562.34 344.277 569.839 355.252 562.075 383.448 L 563.534 392.143 C 563.534 392.143 548.837 401.586 538.999 392.143 C 538.999 392.143 535.587 366.082 537.407 354.07 C 538.41 347.157 539.942 340.331 541.989 333.652 C 541.989 333.652 544.4 336.318 556.782 334.557"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 264.9195 16.3561)" id="Vector_296"
                                clip-path="url(#CLIPPATH_331)">
                                <clipPath id="CLIPPATH_331">
                                    <rect transform="matrix(1 0 0 1 -264.9196 -16.3561)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(237,237,237); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-561.4196, -317.8561)"
                                    d="M 566.246 320.857 C 566.246 320.857 562.834 324.258 558.783 323.836 L 556.842 317.178 C 556.842 317.178 555.637 313.717 558.53 312.198 C 561.424 310.678 564.546 314.079 566.246 320.857 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 245.4345 11.3085)" id="Vector_297"
                                clip-path="url(#CLIPPATH_332)">
                                <clipPath id="CLIPPATH_332">
                                    <rect transform="matrix(1 0 0 1 -245.4345 -11.3084)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(237,237,237); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-541.9345, -312.8084)"
                                    d="M 545.955 308.64 C 545.955 308.64 542.049 307.434 537.914 316.105 L 539.457 317.034 C 541.394 314.066 543.567 311.259 545.955 308.64 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -193.5493 285.701)" id="Vector_298"
                                clip-path="url(#CLIPPATH_333)">
                                <clipPath id="CLIPPATH_333">
                                    <rect transform="matrix(1 0 0 1 193.5493 -285.701)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(214,216,229); fill-rule: nonzero; opacity: 0.4;"
                                    transform=" translate(-102.9507, -587.201)"
                                    d="M 102.951 603 C 118.059 603 130.307 595.926 130.307 587.201 C 130.307 578.476 118.059 571.402 102.951 571.402 C 87.8423 571.402 75.5945 578.476 75.5945 587.201 C 75.5945 595.926 87.8423 603 102.951 603 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -174.7625 183.6555)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_33"
                                clip-path="url(#CLIPPATH_334)">
                                <clipPath id="CLIPPATH_334">
                                    <rect transform="matrix(1 0 0 1 174.7625 -183.6555)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-121.7375, -485.1555)"
                                    d="M 118.733 465.793 C 121.144 466.48 122.494 469.122 124.592 474.778 C 126.339 479.909 127.191 485.301 127.112 490.721 C 126.437 496.051 124.231 500.2 118.902 504.518 L 116.358 499.85 C 116.358 499.85 121.578 495.243 122.109 489.913 C 122.41 486.922 118.902 476.84 118.902 476.563 C 118.902 476.285 118.733 465.793 118.733 465.793 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -205.6846 289.443)" id="Vector_299"
                                clip-path="url(#CLIPPATH_335)">
                                <clipPath id="CLIPPATH_335">
                                    <rect transform="matrix(1 0 0 1 205.6846 -289.443)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(56,34,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-90.8154, -590.943)"
                                    d="M 97.8629 588.637 C 97.0594 588.881 96.2128 588.949 95.3807 588.837 C 94.5485 588.724 93.7503 588.434 93.0403 587.985 C 91.7382 587.985 84.0823 584.983 83.1178 587.527 C 82.2738 589.758 85.3482 591.833 86.9759 592.231 C 90.5928 593.087 93.197 594.872 94.6438 595.173 C 95.1908 595.368 95.7765 595.427 96.3515 595.348 C 96.9265 595.268 97.4738 595.051 97.9473 594.715 C 98.948 593.702 98.8636 589.963 97.8629 588.637 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -205.8241 290.1835)" id="Vector_300"
                                clip-path="url(#CLIPPATH_336)">
                                <clipPath id="CLIPPATH_336">
                                    <rect transform="matrix(1 0 0 1 205.8241 -290.1835)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(156,115,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-90.6759, -591.6835)"
                                    d="M 94.6197 594.558 C 93.1729 594.257 90.5325 592.472 86.9517 591.603 C 85.5893 591.278 83.2142 589.77 82.9851 587.985 C 82.6596 590.036 85.3964 591.857 86.9517 592.23 C 90.5687 593.087 93.1729 594.872 94.6197 595.173 C 95.1667 595.368 95.7524 595.427 96.3274 595.348 C 96.9023 595.268 97.4497 595.051 97.9231 594.715 C 98.1393 594.466 98.2996 594.174 98.3933 593.859 C 97.8617 594.26 97.244 594.532 96.589 594.654 C 95.934 594.775 95.2598 594.742 94.6197 594.558 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -185.9964 279.2523)" id="Vector_301"
                                clip-path="url(#CLIPPATH_337)">
                                <clipPath id="CLIPPATH_337">
                                    <rect transform="matrix(1 0 0 1 185.9964 -279.2523)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(56,34,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-110.5036, -580.7523)"
                                    d="M 117.298 578.53 C 116.597 578.771 115.848 578.839 115.116 578.728 C 114.383 578.616 113.688 578.329 113.09 577.891 C 111.885 577.891 104.012 575.021 103.083 577.469 C 102.276 579.616 105.229 581.593 106.797 581.979 C 110.245 582.812 112.825 584.536 114.175 584.826 C 114.703 585.011 115.267 585.068 115.821 584.99 C 116.375 584.912 116.902 584.703 117.358 584.379 C 118.347 583.402 118.262 579.809 117.298 578.53 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -186.1222 279.9573)" id="Vector_302"
                                clip-path="url(#CLIPPATH_338)">
                                <clipPath id="CLIPPATH_338">
                                    <rect transform="matrix(1 0 0 1 186.1221 -279.9573)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(156,115,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-110.3779, -581.4573)"
                                    d="M 114.175 584.234 C 112.789 583.933 110.245 582.22 106.797 581.388 C 105.483 581.062 103.18 579.615 102.975 577.891 C 102.673 579.868 105.386 581.629 106.797 581.979 C 110.245 582.811 112.825 584.536 114.175 584.825 C 114.703 585.011 115.267 585.067 115.821 584.99 C 116.375 584.912 116.902 584.702 117.358 584.379 C 117.571 584.141 117.724 583.856 117.804 583.547 C 117.295 583.937 116.702 584.203 116.072 584.322 C 115.441 584.442 114.792 584.412 114.175 584.234 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -188.9609 241.3252)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_34"
                                clip-path="url(#CLIPPATH_339)">
                                <clipPath id="CLIPPATH_339">
                                    <rect transform="matrix(1 0 0 1 188.961 -241.3252)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-107.539, -542.8252)"
                                    d="M 119.866 559.102 C 119.87 556.162 119.364 553.245 118.371 550.479 C 118.371 550.479 119.36 538.672 120.119 530.917 C 121.228 519.485 122.989 518.351 122.531 511.404 C 122.072 504.964 118.407 500.792 117.455 496.426 L 98.8033 497.897 C 98.8033 497.897 97.1757 503.191 95.0779 513.732 C 92.98 524.272 92.8353 536.803 93.0041 553.397 C 93.0041 557.679 92.2807 561.393 92.5219 572.054 C 92.6907 579.218 93.1006 587.997 93.1006 587.997 C 95.8254 590.337 97.7182 588.612 97.7182 588.612 C 97.7182 588.612 102.541 567.387 103.204 562.515 C 103.71 559.819 103.485 557.037 102.553 554.458 C 102.553 554.458 103.951 547.789 104.964 542.543 C 106.17 536.139 109.365 522.319 109.365 522.319 C 109.365 522.319 108.822 543.556 109.751 547.741 C 110.679 551.926 110.836 555.568 111.631 561.26 C 112.584 568.135 113.018 578.205 113.018 578.205 C 115.863 580.014 117.129 578.627 117.129 578.627 C 117.129 578.627 119.866 565.12 119.866 559.102 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -188.9039 220.8734)" id="Vector_303"
                                clip-path="url(#CLIPPATH_340)">
                                <clipPath id="CLIPPATH_340">
                                    <rect transform="matrix(1 0 0 1 188.9038 -220.8734)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-107.5962, -522.3734)"
                                    d="M 117.407 496.426 C 119.36 498.428 122.591 504.518 122.591 513.732 C 122.591 524.103 121.084 522.005 120.36 533.426 L 119.637 544.847 C 119.637 544.847 104.048 552.288 92.9318 545.389 C 91.9432 543.231 93.3055 519.207 95.2587 510.669 C 97.2119 502.13 98.5501 497.945 98.5501 497.945 C 98.5501 497.945 112.885 501.817 117.407 496.426 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -187.7554 155.2361)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_35"
                                clip-path="url(#CLIPPATH_341)">
                                <clipPath id="CLIPPATH_341">
                                    <rect transform="matrix(1 0 0 1 187.7554 -155.2362)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-108.7446, -456.7362)"
                                    d="M 117.636 465.685 C 113.657 465.444 113.271 466.107 112.958 464.696 C 112.849 464.189 112.62 460.692 112.62 460.692 C 112.987 460.225 113.322 459.734 113.621 459.221 C 114.956 458.415 116.086 457.31 116.923 455.994 C 117.76 454.678 118.28 453.186 118.443 451.635 C 118.723 448.942 117.923 446.248 116.219 444.145 C 114.514 442.042 112.045 440.702 109.353 440.419 C 104.084 439.876 100.202 443.579 99.1651 448.668 C 98.6105 451.177 98.0318 456.302 99.5991 460.414 C 100.479 462.742 101.299 464.37 103.397 464.286 C 104.097 464.223 104.791 464.102 105.471 463.924 C 105.583 464.888 105.623 465.86 105.591 466.83 C 105.591 467.855 105.712 468.362 103.71 469.592 C 101.709 470.822 106.725 473.331 109.992 473.09 C 113.259 472.848 116.924 470.87 117.937 468.76 C 119.046 466.396 119.504 465.793 117.636 465.685 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -173.258 174.9156)" id="Vector_304"
                                clip-path="url(#CLIPPATH_342)">
                                <clipPath id="CLIPPATH_342">
                                    <rect transform="matrix(1 0 0 1 173.258 -174.9156)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(237,237,237); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-123.242, -476.4156)"
                                    d="M 120.565 483.304 C 120.565 483.304 125.062 482.291 127.124 480.289 C 127.124 480.289 124.447 471.847 122.735 469.748 C 121.023 467.65 119.36 481.193 119.36 481.193 L 120.565 483.304 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -186.8156 181.367)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_36"
                                clip-path="url(#CLIPPATH_343)">
                                <clipPath id="CLIPPATH_343">
                                    <rect transform="matrix(1 0 0 1 186.8156 -181.367)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(244,244,244); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-109.6844, -482.867)"
                                    d="M 113.681 465.6 C 114.417 466.516 114.501 467.662 111.668 468.386 C 109.607 468.972 107.404 468.801 105.459 467.903 C 103.226 468.848 101.079 469.986 99.0445 471.304 C 96.6332 479.264 98.5743 480.289 97.5615 485.993 C 97.9594 488.864 98.4296 496.269 98.5502 497.945 C 103.964 501.732 114.947 500.441 117.407 496.425 C 117.451 495.088 117.576 493.755 117.78 492.433 C 120.36 482.858 122.374 480.373 121.663 473.137 C 121.253 469.013 120.927 466.939 118.733 465.829 C 117.066 465.533 115.368 465.456 113.681 465.6 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -215.205 187.9791)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_37"
                                clip-path="url(#CLIPPATH_344)">
                                <clipPath id="CLIPPATH_344">
                                    <rect transform="matrix(1 0 0 1 215.205 -187.9791)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-81.295, -489.4791)"
                                    d="M 63.9841 496.739 C 65.2117 497.003 66.4202 497.349 67.601 497.776 C 68.7088 498.359 69.9006 498.766 71.1336 498.982 C 72.4598 499.187 74.5335 498.5 78.1143 496.811 C 82.0353 494.801 85.583 492.133 88.6035 488.924 C 92.0355 484.839 95.1016 480.461 97.7664 475.839 C 99.3217 473.005 101.287 472.293 102.999 472.848 C 105.049 473.523 105.302 475.561 102.999 479.372 C 100.059 484.351 96.538 488.962 92.5098 493.109 C 89.3322 496.287 85.6336 498.898 81.5745 500.827 C 78.6796 502.334 75.5807 503.41 72.3754 504.023 C 71.2542 504.264 70.4946 504.735 68.4209 505.458 C 66.3588 506.209 64.1467 506.453 61.9706 506.17 C 60.1742 505.82 59.5593 505.41 59.487 504.964 C 59.4146 504.518 59.7763 504.204 60.6203 504.264 C 61.9493 504.476 63.3058 504.443 64.6231 504.168 C 64.6231 504.168 62.7664 504.108 61.6692 503.975 C 60.6838 503.868 59.7181 503.624 58.7998 503.251 C 57.9196 502.877 57.5941 501.49 58.4863 501.539 C 59.3785 501.587 59.9813 501.852 61.621 502.021 C 62.4859 502.126 63.3603 502.126 64.2252 502.021 C 63.1405 501.842 62.072 501.576 61.0302 501.225 C 60.1677 500.996 59.3918 500.518 58.7998 499.85 C 58.4984 499.501 58.5827 498.644 59.6317 498.861 C 60.8949 499.302 62.2064 499.589 63.538 499.718 C 64.8763 499.718 65.8287 499.609 65.6599 499.404 C 65.4911 499.199 64.6954 499.223 63.6827 498.656 C 62.6699 498.09 62.0671 496.992 62.477 496.461 C 62.8869 495.931 62.8869 496.329 63.9841 496.739 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -197.5273 175.8472)" id="Vector_305"
                                clip-path="url(#CLIPPATH_345)">
                                <clipPath id="CLIPPATH_345">
                                    <rect transform="matrix(1 0 0 1 197.5273 -175.8472)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(237,237,237); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-98.9727, -477.3472)"
                                    d="M 100.841 483.979 C 97.7084 483.524 94.8114 482.054 92.5942 479.795 L 97.5856 472.872 C 97.5856 472.872 100.395 469.326 104.108 471.328 C 104.108 471.328 106.905 471.63 104.108 477.491 C 103.156 479.72 102.065 481.887 100.841 483.979 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -186.0492 159.6681)" id="Vector_306"
                                clip-path="url(#CLIPPATH_346)">
                                <clipPath id="CLIPPATH_346">
                                    <rect transform="matrix(1 0 0 1 186.0492 -159.6681)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-110.4508, -461.1681)"
                                    d="M 98.2006 445.665 C 98.3994 444.475 99.0555 443.411 100.029 442.698 C 101.002 441.986 102.215 441.683 103.409 441.854 C 105.152 440.684 107.256 440.175 109.341 440.419 C 114.079 440.913 117.178 444.037 118.612 448.74 C 119.316 451.1 119.785 453.524 120.011 455.976 C 121.433 466.529 125.267 474.898 121.687 478.034 C 118.106 481.17 108.292 483.16 104.193 481.194 C 100.093 479.228 107.568 461.041 99.4545 450.935 C 97.5495 448.535 97.3687 446.859 98.2006 445.665 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -269.1438 247.1215)" id="Vector_307"
                                clip-path="url(#CLIPPATH_347)">
                                <clipPath id="CLIPPATH_347">
                                    <rect transform="matrix(1 0 0 1 269.1438 -247.1215)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(214,216,229); fill-rule: nonzero; opacity: 0.4;"
                                    transform=" translate(-27.3562, -548.6215)"
                                    d="M 27.3562 564.42 C 42.4647 564.42 54.7125 557.347 54.7125 548.622 C 54.7125 539.897 42.4647 532.823 27.3562 532.823 C 12.2478 532.823 0 539.897 0 548.622 C 0 557.347 12.2478 564.42 27.3562 564.42 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -275.4921 249.1753)" id="Vector_308"
                                clip-path="url(#CLIPPATH_348)">
                                <clipPath id="CLIPPATH_348">
                                    <rect transform="matrix(1 0 0 1 275.4921 -249.1753)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,42,48); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-21.0079, -550.6753)"
                                    d="M 14.4677 544.654 C 16.3365 546.173 19.0854 544.786 19.218 544.931 C 21.413 546.957 23.7108 548.869 26.1023 550.659 C 27.3079 551.576 29.0802 552.794 28.7426 554.555 C 28.1639 557.69 23.1364 556.726 21.2314 555.761 C 19.3265 554.796 17.7833 553.216 15.9868 552.143 C 14.7089 551.347 13.455 550.937 13.25 549.321 C 13.0812 548.296 14.094 544.617 14.4677 544.654 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -275.53 251.1579)" id="Vector_309"
                                clip-path="url(#CLIPPATH_349)">
                                <clipPath id="CLIPPATH_349">
                                    <rect transform="matrix(1 0 0 1 275.53 -251.1579)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(191,75,75); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-20.97, -552.6579)"
                                    d="M 13.2621 548.622 C 13.5153 550.166 14.7572 550.6 16.0231 551.384 C 17.8557 552.518 19.4592 554.158 21.3521 555.11 C 23.2449 556.063 27.4768 556.883 28.7066 554.64 C 28.0434 557.667 23.1003 556.714 21.2195 555.762 C 19.3386 554.809 17.7713 553.217 15.9749 552.144 C 14.6969 551.348 13.443 550.938 13.238 549.322 C 13.2272 549.088 13.2353 548.854 13.2621 548.622 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -259.5734 242.9304)" id="Vector_310"
                                clip-path="url(#CLIPPATH_350)">
                                <clipPath id="CLIPPATH_350">
                                    <rect transform="matrix(1 0 0 1 259.5734 -242.9304)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,42,48); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-36.9266, -544.4304)"
                                    d="M 30.5995 538.636 C 32.4683 540.155 35.7235 538.503 35.8682 538.636 C 37.806 540.605 39.855 542.461 42.005 544.195 C 43.2106 545.1 44.9829 546.33 44.6574 548.091 C 44.0666 551.226 39.0391 550.261 37.1462 549.297 C 35.2533 548.332 33.698 546.74 31.9016 545.679 C 30.6236 544.883 29.3577 544.473 29.1648 542.857 C 29.0442 541.832 30.274 538.599 30.5995 538.636 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -259.5787 244.914)" id="Vector_311"
                                clip-path="url(#CLIPPATH_351)">
                                <clipPath id="CLIPPATH_351">
                                    <rect transform="matrix(1 0 0 1 259.5786 -244.914)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(191,75,75); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-36.9214, -546.414)"
                                    d="M 29.2128 542.375 C 29.466 543.919 30.7078 544.353 31.9738 545.137 C 33.8063 546.27 35.4099 547.911 37.3027 548.875 C 39.1956 549.84 43.4275 550.636 44.6572 548.393 C 43.9941 551.42 39.0509 550.479 37.1701 549.527 C 35.2893 548.574 33.734 546.97 31.9376 545.848 C 30.6475 545.052 29.3937 544.642 29.1887 543.026 C 29.1804 542.809 29.1885 542.591 29.2128 542.375 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -269.1177 206.0345)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_38"
                                clip-path="url(#CLIPPATH_352)">
                                <clipPath id="CLIPPATH_352">
                                    <rect transform="matrix(1 0 0 1 269.1177 -206.0345)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(226,97,97); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-27.3823, -507.5345)"
                                    d="M 14.311 475.815 C 14.4075 478.637 15.2755 490.89 15.6734 497.366 C 16.0713 503.842 16.1557 511.838 16.1557 511.838 C 16.1557 511.838 15.0344 516.554 14.311 522.113 C 13.5876 527.673 14.311 545.184 14.311 545.184 C 15.0287 545.651 15.8663 545.899 16.7223 545.899 C 17.5783 545.899 18.4159 545.651 19.1336 545.184 C 19.1336 545.184 22.1236 531.158 23.4981 524.839 C 24.8725 518.519 25.1257 514.877 25.837 510.97 C 26.7051 506.23 28.5739 484.124 28.5739 484.124 H 29.3214 L 31.3228 509.076 C 30.705 510.917 30.2807 512.816 30.0568 514.745 C 29.5143 518.809 30.6355 539.263 30.6355 539.263 C 31.4321 539.706 32.3356 539.92 33.2462 539.882 C 34.1569 539.843 35.0392 539.554 35.7957 539.046 C 35.7957 539.046 40.7751 511.959 40.7751 507.846 C 40.7751 505.109 40.3169 469.17 40.3169 469.17 L 14.311 475.815 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -270.3811 128.181)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_39"
                                clip-path="url(#CLIPPATH_353)">
                                <clipPath id="CLIPPATH_353">
                                    <rect transform="matrix(1 0 0 1 270.3811 -128.181)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-26.1189, -429.681)"
                                    d="M 21.0749 421.316 C 21.0749 421.316 21.3884 427.467 21.2557 428.01 C 21.1231 428.552 18.4345 430.349 17.6388 431.001 C 16.8431 431.652 21.8947 436.572 24.3422 437.778 C 26.7897 438.984 34.542 435.945 34.6746 432.134 C 34.8073 428.323 33.3484 425.127 32.1669 424.959 C 30.9854 424.79 21.0749 421.316 21.0749 421.316 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -246.8887 147.68)" id="Vector_312"
                                clip-path="url(#CLIPPATH_354)">
                                <clipPath id="CLIPPATH_354">
                                    <rect transform="matrix(1 0 0 1 246.8887 -147.68)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-49.6113, -449.18)"
                                    d="M 37.9056 432.725 C 38.2673 430.011 36.4829 427.43 38.207 425.271 C 44.2352 431.229 43.5118 446.979 44.8863 457.05 C 49.3954 461.753 58.4499 466.396 60.9938 467.542 C 61.452 467.759 61.8619 467.988 61.7654 468.482 C 61.4243 470.16 60.7024 471.736 59.6555 473.089 C 53.6273 470.509 49.3472 469.025 41.8601 461.91 C 41.1509 461.14 40.517 460.304 39.9672 459.413 C 37.8332 452.997 37.2907 437.404 37.9056 432.725 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -269.5947 150.1174)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_40"
                                clip-path="url(#CLIPPATH_355)">
                                <clipPath id="CLIPPATH_355">
                                    <rect transform="matrix(1 0 0 1 269.5947 -150.1174)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(244,244,244); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-26.9053, -451.6174)"
                                    d="M 20.3875 429.071 C 20.3875 429.071 24.8484 435.717 31.0696 436.307 C 33.0348 434.378 33.2036 427.492 30.4909 425.285 C 30.4909 425.285 32.9866 423.271 34.6986 423.657 C 36.5532 424.775 37.9342 426.534 38.5808 428.601 C 40.1577 433.175 40.9009 437.995 40.7751 442.832 C 40.6666 449.356 40.7751 469.292 40.7751 469.292 C 40.7751 469.292 39.907 473.501 34.2766 476.636 C 28.6462 479.772 24.4626 480.085 20.6407 479.193 C 17.494 478.457 14.8897 477.348 13.8047 475.068 C 14.094 470.486 16.1316 458.558 15.372 452.806 C 14.6124 447.053 13.3947 442.772 13.0813 438.116 C 12.7678 433.461 13.6841 433.558 16.0231 431.906 C 17.407 430.856 18.8657 429.909 20.3875 429.071 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -270.357 113.7589)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_41"
                                clip-path="url(#CLIPPATH_356)">
                                <clipPath id="CLIPPATH_356">
                                    <rect transform="matrix(1 0 0 1 270.357 -113.7589)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-26.143, -415.2589)"
                                    d="M 34.964 412.151 C 34.2285 407.327 30.7924 403.709 25.8613 404.035 C 23.883 404.14 21.9875 404.863 20.4417 406.102 C 18.896 407.342 17.7781 409.035 17.2455 410.944 C 16.7128 412.852 16.7924 414.88 17.4729 416.741 C 18.1534 418.602 19.4006 420.203 21.0387 421.317 C 21.2089 422.04 21.4638 422.74 21.7983 423.403 C 23.5344 425.441 28.8031 426.696 30.3102 426.479 C 31.2112 426.407 32.07 426.067 32.7752 425.501 C 33.4803 424.936 33.9993 424.171 34.2647 423.307 C 35.9044 419.52 35.386 414.503 34.964 412.151 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -271.5621 110.1891)" id="Vector_313"
                                clip-path="url(#CLIPPATH_357)">
                                <clipPath id="CLIPPATH_357">
                                    <rect transform="matrix(1 0 0 1 271.5621 -110.1891)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,42,48); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-24.9379, -411.6891)"
                                    d="M 21.0748 421.316 L 21.5209 417.144 C 21.5209 417.144 18.0848 408.34 26.1627 410.04 C 31.4676 411.162 32.7938 411.644 34.4094 408.087 C 36.0249 404.529 30.3343 401.321 23.5585 402.213 C 21.2302 402.458 19.0785 403.567 17.529 405.323 C 15.9795 407.078 15.1453 409.351 15.1913 411.693 C 15.3842 414.298 16.0834 419.604 21.0748 421.316 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -272.4738 154.6395)" id="Vector_314"
                                clip-path="url(#CLIPPATH_358)">
                                <clipPath id="CLIPPATH_358">
                                    <rect transform="matrix(1 0 0 1 272.4738 -154.6395)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-24.0262, -456.1395)"
                                    d="M 11.6587 435.366 C 13.9856 434.703 12.2133 435.246 13.9856 434.703 C 20.0139 440.649 19.3026 450.851 20.677 460.922 C 24.0287 466.481 36.459 473.958 36.459 473.958 C 36.6157 475.032 36.242 475.345 34.8917 477.576 C 27.9723 474.922 21.6788 470.861 16.409 465.649 C 16.1076 465.372 15.6736 465.287 15.553 464.913 C 13.419 458.449 11.0439 440.058 11.6587 435.366 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -243.9578 165.7115)" id="Vector_315"
                                clip-path="url(#CLIPPATH_359)">
                                <clipPath id="CLIPPATH_359">
                                    <rect transform="matrix(1 0 0 1 243.9578 -165.7115)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(244,244,244); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-52.5422, -467.2115)"
                                    d="M 66.9739 447.801 L 57.9436 478.699 L 38.1106 486.622 L 45.3445 456.52 L 66.9739 447.801 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -256.026 174.2449)" id="Vector_316"
                                clip-path="url(#CLIPPATH_360)">
                                <clipPath id="CLIPPATH_360">
                                    <rect transform="matrix(1 0 0 1 256.026 -174.2449)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-40.474, -475.7449)"
                                    d="M 33.3361 474.212 C 33.6255 473.151 34.3851 473.416 35.2531 473.681 C 36.1819 474.059 37.2031 474.147 38.1829 473.935 C 38.9453 473.561 39.6515 473.082 40.2807 472.512 C 40.681 472.27 41.1392 472.14 41.6069 472.138 C 41.6069 472.403 41.1488 473.971 41.1488 473.971 C 41.1488 473.971 45.5012 473.971 45.9714 473.971 C 46.1212 473.944 46.2759 473.963 46.414 474.028 C 46.552 474.092 46.6667 474.198 46.7422 474.33 C 46.8176 474.463 46.8501 474.615 46.8351 474.767 C 46.8201 474.918 46.7585 475.062 46.6586 475.177 H 46.96 C 47.8401 474.984 48.1657 476.383 47.3338 476.552 L 46.6104 476.66 C 47.1891 476.889 47.3338 477.866 46.6104 477.987 H 46.3813 C 46.2775 478.004 46.1716 478.004 46.0678 477.987 H 45.8146 C 45.8372 478.09 45.838 478.197 45.8168 478.301 C 45.7957 478.405 45.7531 478.503 45.6918 478.589 C 45.6305 478.675 45.5518 478.748 45.4609 478.802 C 45.3699 478.856 45.2687 478.891 45.1636 478.903 C 43.0416 479.181 39.919 480.025 38.002 478.276 C 36.6709 478.149 35.3707 477.798 34.156 477.239 C 33.0106 476.66 32.9744 475.466 33.3361 474.212 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -237.6757 169.8156)" id="Vector_317"
                                clip-path="url(#CLIPPATH_361)">
                                <clipPath id="CLIPPATH_361">
                                    <rect transform="matrix(1 0 0 1 237.6757 -169.8156)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-58.8243, -471.3156)"
                                    d="M 55.014 471.679 H 55.3154 C 55.1896 471.59 55.0955 471.463 55.0467 471.317 C 54.9979 471.171 54.997 471.013 55.0441 470.867 C 55.0912 470.72 55.1838 470.592 55.3085 470.502 C 55.4331 470.411 55.5834 470.363 55.7374 470.364 C 56.1835 470.364 60.6564 469.424 60.6564 469.424 L 61.199 467.59 C 61.199 467.482 61.9706 467.952 61.9947 467.976 C 62.3748 468.221 62.6941 468.549 62.9281 468.936 C 63.1621 469.322 63.3047 469.757 63.345 470.207 C 63.3679 470.841 63.2657 471.473 63.0443 472.066 C 62.823 472.66 62.4868 473.205 62.055 473.669 C 61.2603 474.457 60.1958 474.914 59.077 474.947 C 58.5345 474.947 58.016 475.007 57.5458 475.056 C 57.4399 475.062 57.3338 475.047 57.2339 475.011 C 57.134 474.976 57.0424 474.92 56.9646 474.848 C 56.8868 474.776 56.8245 474.689 56.7814 474.592 C 56.7383 474.495 56.7154 474.39 56.7139 474.284 H 56.5693 C 56.4668 474.313 56.3582 474.313 56.2558 474.284 H 56.0267 C 55.2672 474.284 55.2069 473.343 55.7253 473.005 H 54.9899 C 54.0253 473.09 54.1097 471.667 55.014 471.679 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -257.3163 128.7225)" id="Vector_318"
                                clip-path="url(#CLIPPATH_362)">
                                <clipPath id="CLIPPATH_362">
                                    <rect transform="matrix(1 0 0 1 257.3162 -128.7225)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(237,237,237); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-39.1838, -430.2225)"
                                    d="M 40.4376 436.753 C 41.6591 436.698 42.8141 436.181 43.6688 435.306 C 43.5 433.015 40.5823 424.344 34.6987 423.692 C 36.2761 424.825 37.5244 426.357 38.3157 428.13 C 39.2403 430.947 39.9497 433.829 40.4376 436.753 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 -281.3231 139.1851)" id="Vector_319"
                                clip-path="url(#CLIPPATH_363)">
                                <clipPath id="CLIPPATH_363">
                                    <rect transform="matrix(1 0 0 1 281.3231 -139.1851)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(237,237,237); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-15.1769, -440.6851)"
                                    d="M 10.5978 448.21 C 10.5978 448.21 16.4452 450.236 20.5686 446.835 C 21.0267 446.063 18.1573 436.101 18.1573 436.101 C 18.1573 436.101 15.746 431.012 11.8637 433.038 C 7.98155 435.064 10.5978 448.21 10.5978 448.21 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 68.8346 -208.8124)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_42"
                                clip-path="url(#CLIPPATH_364)">
                                <clipPath id="CLIPPATH_364">
                                    <rect transform="matrix(1 0 0 1 -68.8346 208.8124)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-365.3346, -92.6876)"
                                    d="M 366.892 104.235 C 364.987 107.616 362.679 110.754 360.02 113.581 C 359.272 114.449 353.57 112.267 354.763 111.652 C 355.957 111.036 359.694 105.814 361.575 102.341 C 363.15 98.1889 364.482 93.9487 365.566 89.642 C 366.772 85.3848 367.76 79.1378 368.616 76.1951 C 368.839 75.1101 369.37 74.1126 370.147 73.323 C 370.923 72.5334 371.912 71.9853 372.993 71.745 C 375.042 71.2746 376.381 71.8294 376.007 74.3258 C 375.344 78.6915 371.932 95.6479 366.892 104.235 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 67.4222 -125.0918)" id="Vector_320"
                                clip-path="url(#CLIPPATH_365)">
                                <clipPath id="CLIPPATH_365">
                                    <rect transform="matrix(1 0 0 1 -67.4222 125.0917)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(56,34,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-363.9222, -176.4083)"
                                    d="M 370.135 170.685 C 368.375 172.12 365.759 170.805 365.626 170.938 C 363.551 172.871 361.369 174.687 359.091 176.377 C 357.982 177.245 356.27 178.415 356.572 180.08 C 357.138 183.07 361.913 182.154 363.709 181.286 C 365.506 180.417 366.988 178.874 368.688 177.8 C 369.894 177.04 371.1 176.655 371.293 175.111 C 371.437 174.134 370.473 170.649 370.135 170.685 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 67.5219 -123.2158)" id="Vector_321"
                                clip-path="url(#CLIPPATH_366)">
                                <clipPath id="CLIPPATH_366">
                                    <rect transform="matrix(1 0 0 1 -67.5219 123.2158)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(156,115,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-364.0219, -178.2842)"
                                    d="M 371.341 174.447 C 371.112 175.919 369.93 176.317 368.725 177.076 C 366.988 178.15 365.457 179.705 363.661 180.61 C 361.864 181.514 357.837 182.298 356.668 180.164 C 357.307 183.046 361.997 182.142 363.781 181.237 C 365.566 180.333 367.061 178.825 368.761 177.752 C 369.966 176.992 371.172 176.606 371.365 175.062 C 371.385 174.857 371.377 174.65 371.341 174.447 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 49.695 -135.5983)" id="Vector_322"
                                clip-path="url(#CLIPPATH_367)">
                                <clipPath id="CLIPPATH_367">
                                    <rect transform="matrix(1 0 0 1 -49.695 135.5983)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(56,34,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-346.195, -165.9017)"
                                    d="M 352.207 160.398 C 350.435 161.833 347.385 160.265 347.204 160.398 C 345.357 162.261 343.409 164.02 341.368 165.668 C 340.259 166.536 338.535 167.694 338.849 169.37 C 339.403 172.349 344.19 171.433 345.986 170.576 C 347.782 169.72 349.265 168.164 350.965 167.091 C 352.171 166.343 353.377 165.945 353.57 164.414 C 353.69 163.364 352.521 160.301 352.207 160.398 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 49.699 -133.7801)" id="Vector_323"
                                clip-path="url(#CLIPPATH_368)">
                                <clipPath id="CLIPPATH_368">
                                    <rect transform="matrix(1 0 0 1 -49.699 133.7801)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(156,115,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-346.199, -167.7199)"
                                    d="M 353.521 163.883 C 353.28 165.354 352.099 165.752 350.893 166.512 C 349.157 167.585 347.638 169.141 345.829 170.045 C 344.021 170.95 340.018 171.734 338.849 169.599 C 339.476 172.482 344.178 171.577 345.962 170.673 C 347.746 169.768 349.229 168.261 350.941 167.187 C 352.147 166.427 353.353 166.042 353.546 164.498 C 353.554 164.293 353.546 164.087 353.521 163.883 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 71.8818 -160.5563)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_43"
                                clip-path="url(#CLIPPATH_369)">
                                <clipPath id="CLIPPATH_369">
                                    <rect transform="matrix(1 0 0 1 -71.8818 160.5564)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-368.3818, -140.9436)"
                                    d="M 393.838 113.907 C 395.804 126.172 390.354 130.791 383.277 133.36 C 378.201 135.229 370.907 138.111 370.907 138.111 C 370.907 138.111 371.015 140.801 371.064 146.843 C 371.124 152.161 370.413 171.59 370.413 171.59 C 369.571 172.012 368.64 172.227 367.698 172.216 C 366.757 172.206 365.831 171.97 364.999 171.529 C 364.999 171.529 362.142 156.647 361.539 149.942 C 360.719 140.837 359.32 134.879 359.779 132.925 C 360.189 131.201 370.135 126.304 373.294 123.687 L 352.46 130.67 C 352.873 132.93 353.074 135.223 353.063 137.52 C 352.87 144.756 352.472 160.374 352.472 160.374 C 352.472 160.374 349.615 162.436 347.18 160.374 C 347.18 160.374 341.935 129.44 342.574 125.4 C 343.177 121.517 361.539 113.569 364.77 110.831 C 365.334 110.373 365.989 110.038 366.691 109.849 C 367.393 109.66 368.127 109.621 368.845 109.734 L 393.838 113.907 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 67.0645 -179.351)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_44"
                                clip-path="url(#CLIPPATH_370)">
                                <clipPath id="CLIPPATH_370">
                                    <rect transform="matrix(1 0 0 1 -67.0645 179.351)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(244,244,244); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-363.5645, -122.149)"
                                    d="M 343.888 119.007 L 357.886 110.951 C 358.009 110.88 358.148 110.843 358.29 110.843 C 358.431 110.843 358.571 110.88 358.694 110.951 L 383.241 125.134 L 368.845 133.455 L 343.888 119.007 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 72.8534 -170.3455)" id="Vector_324"
                                clip-path="url(#CLIPPATH_371)">
                                <clipPath id="CLIPPATH_371">
                                    <rect transform="matrix(1 0 0 1 -72.8534 170.3455)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-369.3534, -131.1545)"
                                    d="M 369.496 130.452 L 370.569 131.067 C 370.654 131.067 370.642 131.212 370.569 131.26 L 369.545 131.851 C 369.493 131.881 369.435 131.897 369.376 131.897 C 369.316 131.897 369.258 131.881 369.207 131.851 L 368.146 131.236 C 368.05 131.236 368.062 131.104 368.146 131.043 L 369.159 130.452 C 369.211 130.426 369.269 130.412 369.328 130.412 C 369.386 130.412 369.444 130.426 369.496 130.452 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 71.343 -171.2165)" id="Vector_325"
                                clip-path="url(#CLIPPATH_372)">
                                <clipPath id="CLIPPATH_372">
                                    <rect transform="matrix(1 0 0 1 -71.343 171.2165)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-367.843, -130.2835)"
                                    d="M 367.989 129.584 L 369.05 130.199 C 369.147 130.199 369.135 130.332 369.05 130.392 L 368.037 130.983 C 367.985 131.01 367.927 131.023 367.869 131.023 C 367.81 131.023 367.752 131.01 367.7 130.983 L 366.627 130.368 C 366.542 130.368 366.554 130.235 366.627 130.175 L 367.652 129.584 C 367.704 129.558 367.762 129.544 367.82 129.544 C 367.879 129.544 367.937 129.558 367.989 129.584 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 69.8754 -172.0995)" id="Vector_326"
                                clip-path="url(#CLIPPATH_373)">
                                <clipPath id="CLIPPATH_373">
                                    <rect transform="matrix(1 0 0 1 -69.8754 172.0995)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-366.3754, -129.4005)"
                                    d="M 366.518 128.703 L 367.591 129.319 C 367.676 129.319 367.664 129.451 367.591 129.511 L 366.567 130.102 C 366.514 130.129 366.456 130.143 366.398 130.143 C 366.339 130.143 366.281 130.129 366.229 130.102 L 365.168 129.487 C 365.072 129.487 365.084 129.343 365.168 129.294 L 366.181 128.703 C 366.232 128.674 366.29 128.658 366.349 128.658 C 366.409 128.658 366.467 128.674 366.518 128.703 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 68.3219 -172.963)" id="Vector_327"
                                clip-path="url(#CLIPPATH_374)">
                                <clipPath id="CLIPPATH_374">
                                    <rect transform="matrix(1 0 0 1 -68.3219 172.963)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-364.8219, -128.537)"
                                    d="M 364.963 127.835 L 366.036 128.45 C 366.12 128.45 366.108 128.595 366.036 128.643 L 365.011 129.234 C 364.96 129.264 364.902 129.279 364.842 129.279 C 364.783 129.279 364.725 129.264 364.674 129.234 L 363.613 128.619 C 363.528 128.619 363.528 128.486 363.613 128.426 L 364.625 127.835 C 364.678 127.809 364.736 127.795 364.794 127.795 C 364.853 127.795 364.911 127.809 364.963 127.835 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 66.8112 -173.8335)" id="Vector_328"
                                clip-path="url(#CLIPPATH_375)">
                                <clipPath id="CLIPPATH_375">
                                    <rect transform="matrix(1 0 0 1 -66.8111 173.8335)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-363.3111, -127.6665)"
                                    d="M 363.456 126.967 L 364.529 127.582 C 364.613 127.582 364.601 127.715 364.529 127.775 L 363.504 128.366 C 363.452 128.392 363.394 128.406 363.335 128.406 C 363.277 128.406 363.219 128.392 363.167 128.366 L 362.094 127.751 C 362.009 127.751 362.021 127.618 362.094 127.558 L 363.118 126.967 C 363.171 126.941 363.229 126.927 363.287 126.927 C 363.346 126.927 363.404 126.941 363.456 126.967 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 65.3025 -174.7071)" id="Vector_329"
                                clip-path="url(#CLIPPATH_376)">
                                <clipPath id="CLIPPATH_376">
                                    <rect transform="matrix(1 0 0 1 -65.3025 174.7071)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-361.8025, -126.7929)"
                                    d="M 361.949 126.086 L 363.01 126.713 C 363.106 126.713 363.094 126.846 363.01 126.906 L 361.997 127.497 C 361.944 127.521 361.886 127.534 361.828 127.534 C 361.77 127.534 361.713 127.521 361.659 127.497 L 360.586 126.882 C 360.502 126.882 360.514 126.738 360.586 126.677 L 361.611 126.098 C 361.663 126.07 361.72 126.054 361.779 126.052 C 361.837 126.05 361.896 126.062 361.949 126.086 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 63.815 -175.5776)" id="Vector_330"
                                clip-path="url(#CLIPPATH_377)">
                                <clipPath id="CLIPPATH_377">
                                    <rect transform="matrix(1 0 0 1 -63.815 175.5776)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-360.315, -125.9224)"
                                    d="M 360.49 125.218 L 361.551 125.833 C 361.635 125.833 361.623 125.978 361.551 126.026 L 360.49 126.629 C 360.436 126.659 360.376 126.674 360.315 126.674 C 360.254 126.674 360.194 126.659 360.14 126.629 L 359.079 126.014 C 358.995 126.014 359.007 125.882 359.079 125.821 L 360.092 125.23 C 360.152 125.194 360.22 125.173 360.289 125.171 C 360.359 125.169 360.428 125.185 360.49 125.218 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 62.2795 -176.4505)" id="Vector_331"
                                clip-path="url(#CLIPPATH_378)">
                                <clipPath id="CLIPPATH_378">
                                    <rect transform="matrix(1 0 0 1 -62.2795 176.4505)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-358.7795, -125.0495)"
                                    d="M 358.923 124.35 L 359.996 124.965 C 360.08 124.965 360.068 125.098 359.996 125.158 L 358.971 125.749 C 358.919 125.775 358.861 125.789 358.802 125.789 C 358.743 125.789 358.686 125.775 358.633 125.749 L 357.572 125.134 C 357.476 125.134 357.488 125.001 357.572 124.941 L 358.585 124.35 C 358.637 124.323 358.695 124.31 358.754 124.31 C 358.812 124.31 358.87 124.323 358.923 124.35 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 60.7695 -177.3236)" id="Vector_332"
                                clip-path="url(#CLIPPATH_379)">
                                <clipPath id="CLIPPATH_379">
                                    <rect transform="matrix(1 0 0 1 -60.7695 177.3236)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-357.2695, -124.1764)"
                                    d="M 357.416 123.47 L 358.477 124.097 C 358.573 124.097 358.561 124.23 358.477 124.29 L 357.464 124.881 C 357.411 124.905 357.353 124.917 357.295 124.917 C 357.237 124.917 357.179 124.905 357.126 124.881 L 356.053 124.266 C 355.969 124.266 355.981 124.121 356.053 124.061 L 357.078 123.482 C 357.129 123.454 357.187 123.438 357.245 123.436 C 357.304 123.434 357.362 123.445 357.416 123.47 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 59.2601 -178.196)" id="Vector_333"
                                clip-path="url(#CLIPPATH_380)">
                                <clipPath id="CLIPPATH_380">
                                    <rect transform="matrix(1 0 0 1 -59.2601 178.196)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-355.7601, -123.304)"
                                    d="M 355.909 122.602 L 356.969 123.217 C 357.054 123.217 357.054 123.362 356.969 123.41 L 355.957 124.001 C 355.905 124.03 355.847 124.046 355.788 124.046 C 355.729 124.046 355.67 124.03 355.619 124.001 L 354.546 123.386 C 354.462 123.386 354.474 123.253 354.546 123.193 L 355.571 122.602 C 355.623 122.575 355.681 122.562 355.74 122.562 C 355.798 122.562 355.856 122.575 355.909 122.602 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 57.7487 -179.068)" id="Vector_334"
                                clip-path="url(#CLIPPATH_381)">
                                <clipPath id="CLIPPATH_381">
                                    <rect transform="matrix(1 0 0 1 -57.7487 179.068)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-354.2487, -122.432)"
                                    d="M 354.389 121.733 L 355.462 122.348 C 355.547 122.348 355.535 122.48 355.462 122.541 L 354.438 123.132 C 354.385 123.158 354.328 123.172 354.269 123.172 C 354.21 123.172 354.152 123.158 354.1 123.132 L 353.039 122.517 C 352.955 122.517 352.955 122.384 353.039 122.324 L 354.052 121.733 C 354.104 121.706 354.162 121.692 354.221 121.692 C 354.279 121.692 354.337 121.706 354.389 121.733 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 56.2379 -179.9421)" id="Vector_335"
                                clip-path="url(#CLIPPATH_382)">
                                <clipPath id="CLIPPATH_382">
                                    <rect transform="matrix(1 0 0 1 -56.2379 179.9421)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-352.7379, -121.5579)"
                                    d="M 352.882 120.853 L 353.955 121.48 C 354.04 121.48 354.028 121.613 353.955 121.673 L 352.931 122.264 C 352.878 122.288 352.82 122.3 352.762 122.3 C 352.704 122.3 352.646 122.288 352.593 122.264 L 351.52 121.649 C 351.436 121.649 351.448 121.504 351.52 121.444 L 352.533 120.865 C 352.586 120.835 352.645 120.818 352.706 120.816 C 352.767 120.814 352.828 120.826 352.882 120.853 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 54.7294 -180.8135)" id="Vector_336"
                                clip-path="url(#CLIPPATH_383)">
                                <clipPath id="CLIPPATH_383">
                                    <rect transform="matrix(1 0 0 1 -54.7294 180.8135)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-351.2294, -120.6865)"
                                    d="M 351.375 119.985 L 352.436 120.6 C 352.533 120.6 352.521 120.744 352.436 120.793 L 351.424 121.384 C 351.372 121.413 351.314 121.429 351.255 121.429 C 351.196 121.429 351.137 121.413 351.086 121.384 L 350.013 120.769 C 349.929 120.769 349.941 120.636 350.013 120.576 L 351.038 119.985 C 351.09 119.958 351.148 119.944 351.207 119.944 C 351.265 119.944 351.323 119.958 351.375 119.985 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 52.8514 -181.896)" id="Vector_337"
                                clip-path="url(#CLIPPATH_384)">
                                <clipPath id="CLIPPATH_384">
                                    <rect transform="matrix(1 0 0 1 -52.8514 181.896)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-349.3514, -119.604)"
                                    d="M 349.133 118.694 L 350.929 119.731 C 351.014 119.731 351.002 119.863 350.929 119.924 L 349.917 120.515 C 349.862 120.541 349.802 120.555 349.742 120.555 C 349.681 120.555 349.621 120.541 349.567 120.515 L 347.782 119.478 C 347.686 119.478 347.698 119.345 347.782 119.285 L 348.795 118.694 C 348.848 118.667 348.905 118.653 348.964 118.653 C 349.023 118.653 349.08 118.667 349.133 118.694 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 72.0784 -172.483)" id="Vector_338"
                                clip-path="url(#CLIPPATH_385)">
                                <clipPath id="CLIPPATH_385">
                                    <rect transform="matrix(1 0 0 1 -72.0784 172.483)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-368.5784, -129.017)"
                                    d="M 368.724 128.318 L 369.785 128.933 C 369.882 128.933 369.87 129.065 369.785 129.126 L 368.773 129.717 C 368.72 129.743 368.663 129.757 368.604 129.757 C 368.545 129.757 368.487 129.743 368.435 129.717 L 367.362 129.102 C 367.278 129.102 367.29 128.957 367.362 128.909 L 368.387 128.318 C 368.439 128.291 368.497 128.277 368.556 128.277 C 368.614 128.277 368.672 128.291 368.724 128.318 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 70.5625 -173.3646)" id="Vector_339"
                                clip-path="url(#CLIPPATH_386)">
                                <clipPath id="CLIPPATH_386">
                                    <rect transform="matrix(1 0 0 1 -70.5625 173.3646)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-367.0625, -128.1354)"
                                    d="M 367.206 127.437 L 368.279 128.052 C 368.363 128.052 368.351 128.197 368.279 128.257 L 367.254 128.836 C 367.201 128.863 367.144 128.876 367.085 128.876 C 367.026 128.876 366.969 128.863 366.916 128.836 L 365.855 128.209 C 365.759 128.209 365.771 128.076 365.855 128.016 L 366.868 127.425 C 366.922 127.403 366.98 127.393 367.038 127.395 C 367.096 127.397 367.153 127.411 367.206 127.437 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 69.0524 -174.1785)" id="Vector_340"
                                clip-path="url(#CLIPPATH_387)">
                                <clipPath id="CLIPPATH_387">
                                    <rect transform="matrix(1 0 0 1 -69.0524 174.1785)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-365.5524, -127.3215)"
                                    d="M 365.698 126.629 L 366.759 127.244 C 366.856 127.244 366.844 127.377 366.759 127.437 L 365.747 128.028 C 365.694 128.054 365.636 128.068 365.578 128.068 C 365.519 128.068 365.461 128.054 365.409 128.028 L 364.336 127.413 C 364.252 127.413 364.264 127.28 364.336 127.22 L 365.313 126.629 C 365.371 126.594 365.437 126.575 365.505 126.575 C 365.573 126.575 365.64 126.594 365.698 126.629 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 67.5364 -175.112)" id="Vector_341"
                                clip-path="url(#CLIPPATH_388)">
                                <clipPath id="CLIPPATH_388">
                                    <rect transform="matrix(1 0 0 1 -67.5364 175.112)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-364.0364, -126.388)"
                                    d="M 364.179 125.689 L 365.252 126.304 C 365.337 126.304 365.325 126.449 365.252 126.509 L 364.228 127.088 C 364.175 127.114 364.118 127.128 364.059 127.128 C 364 127.128 363.942 127.114 363.89 127.088 L 362.829 126.473 C 362.733 126.473 362.745 126.328 362.829 126.268 L 363.842 125.689 C 363.894 125.662 363.952 125.648 364.011 125.648 C 364.069 125.648 364.127 125.662 364.179 125.689 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 66.0384 -175.9731)" id="Vector_342"
                                clip-path="url(#CLIPPATH_389)">
                                <clipPath id="CLIPPATH_389">
                                    <rect transform="matrix(1 0 0 1 -66.0384 175.9731)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-362.5384, -125.5269)"
                                    d="M 362.684 124.821 L 363.745 125.448 C 363.842 125.448 363.83 125.58 363.745 125.641 L 362.733 126.232 C 362.68 126.256 362.622 126.268 362.564 126.268 C 362.506 126.268 362.448 126.256 362.395 126.232 L 361.322 125.617 C 361.238 125.617 361.25 125.472 361.322 125.412 L 362.347 124.833 C 362.398 124.804 362.456 124.788 362.514 124.786 C 362.573 124.784 362.631 124.796 362.684 124.821 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 64.5224 -176.848)" id="Vector_343"
                                clip-path="url(#CLIPPATH_390)">
                                <clipPath id="CLIPPATH_390">
                                    <rect transform="matrix(1 0 0 1 -64.5224 176.848)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-361.0224, -124.652)"
                                    d="M 361.165 123.952 L 362.238 124.567 C 362.323 124.567 362.311 124.712 362.238 124.76 L 361.214 125.351 C 361.161 125.378 361.103 125.392 361.045 125.392 C 360.986 125.392 360.928 125.378 360.876 125.351 L 359.815 124.736 C 359.719 124.736 359.731 124.604 359.815 124.543 L 360.828 123.952 C 360.88 123.926 360.938 123.912 360.997 123.912 C 361.055 123.912 361.113 123.926 361.165 123.952 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 63.0117 -177.7205)" id="Vector_344"
                                clip-path="url(#CLIPPATH_391)">
                                <clipPath id="CLIPPATH_391">
                                    <rect transform="matrix(1 0 0 1 -63.0116 177.7205)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-359.5116, -123.7795)"
                                    d="M 359.658 123.084 L 360.719 123.699 C 360.815 123.699 360.803 123.832 360.719 123.892 L 359.706 124.483 C 359.653 124.507 359.596 124.52 359.537 124.52 C 359.479 124.52 359.422 124.507 359.369 124.483 L 358.296 123.868 C 358.211 123.868 358.223 123.723 358.296 123.663 L 359.32 123.084 C 359.372 123.055 359.43 123.039 359.489 123.039 C 359.549 123.039 359.607 123.055 359.658 123.084 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 61.4957 -178.5945)" id="Vector_345"
                                clip-path="url(#CLIPPATH_392)">
                                <clipPath id="CLIPPATH_392">
                                    <rect transform="matrix(1 0 0 1 -61.4956 178.5945)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-357.9956, -122.9055)"
                                    d="M 358.139 122.203 L 359.212 122.818 C 359.296 122.818 359.284 122.963 359.212 123.011 L 358.187 123.602 C 358.136 123.632 358.078 123.648 358.018 123.648 C 357.959 123.648 357.901 123.632 357.85 123.602 L 356.789 122.987 C 356.692 122.987 356.704 122.855 356.789 122.794 L 357.801 122.203 C 357.854 122.177 357.911 122.163 357.97 122.163 C 358.029 122.163 358.087 122.177 358.139 122.203 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 59.9857 -179.4675)" id="Vector_346"
                                clip-path="url(#CLIPPATH_393)">
                                <clipPath id="CLIPPATH_393">
                                    <rect transform="matrix(1 0 0 1 -59.9856 179.4675)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-356.4856, -122.0325)"
                                    d="M 356.632 121.335 L 357.693 121.95 C 357.789 121.95 357.777 122.083 357.693 122.143 L 356.68 122.734 C 356.628 122.761 356.57 122.775 356.511 122.775 C 356.453 122.775 356.395 122.761 356.343 122.734 L 355.27 122.119 C 355.185 122.119 355.197 121.974 355.27 121.926 L 356.294 121.335 C 356.346 121.306 356.404 121.29 356.463 121.29 C 356.522 121.29 356.581 121.306 356.632 121.335 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 58.4695 -180.3415)" id="Vector_347"
                                clip-path="url(#CLIPPATH_394)">
                                <clipPath id="CLIPPATH_394">
                                    <rect transform="matrix(1 0 0 1 -58.4695 180.3415)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-354.9695, -121.1585)"
                                    d="M 355.113 120.454 L 356.186 121.069 C 356.27 121.069 356.258 121.214 356.186 121.274 L 355.161 121.853 C 355.11 121.883 355.051 121.899 354.992 121.899 C 354.933 121.899 354.875 121.883 354.823 121.853 L 353.762 121.238 C 353.666 121.238 353.678 121.106 353.762 121.045 L 354.775 120.454 C 354.828 120.43 354.886 120.418 354.944 120.418 C 355.002 120.418 355.06 120.43 355.113 120.454 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 56.9595 -181.2145)" id="Vector_348"
                                clip-path="url(#CLIPPATH_395)">
                                <clipPath id="CLIPPATH_395">
                                    <rect transform="matrix(1 0 0 1 -56.9595 181.2145)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-353.4595, -120.2855)"
                                    d="M 353.606 119.586 L 354.667 120.201 C 354.763 120.201 354.751 120.334 354.667 120.394 L 353.654 120.985 C 353.602 121.012 353.544 121.025 353.485 121.025 C 353.427 121.025 353.369 121.012 353.316 120.985 L 352.243 120.37 C 352.159 120.37 352.171 120.225 352.243 120.177 L 353.268 119.586 C 353.321 119.56 353.378 119.546 353.437 119.546 C 353.496 119.546 353.554 119.56 353.606 119.586 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 55.4075 -182.0961)" id="Vector_349"
                                clip-path="url(#CLIPPATH_396)">
                                <clipPath id="CLIPPATH_396">
                                    <rect transform="matrix(1 0 0 1 -55.4075 182.0961)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-351.9075, -119.4039)"
                                    d="M 352.051 118.706 L 353.124 119.321 C 353.208 119.321 353.196 119.466 353.124 119.526 L 352.099 120.105 C 352.046 120.131 351.989 120.145 351.93 120.145 C 351.871 120.145 351.814 120.131 351.761 120.105 L 350.7 119.478 C 350.604 119.478 350.616 119.345 350.7 119.285 L 351.713 118.694 C 351.767 118.672 351.825 118.661 351.883 118.663 C 351.941 118.665 351.998 118.68 352.051 118.706 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 73.9502 -171.402)" id="Vector_350"
                                clip-path="url(#CLIPPATH_397)">
                                <clipPath id="CLIPPATH_397">
                                    <rect transform="matrix(1 0 0 1 -73.9502 171.402)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-370.4502, -130.098)"
                                    d="M 370.232 129.186 L 372.028 130.223 C 372.113 130.223 372.1 130.368 372.028 130.416 L 371.015 131.007 C 370.963 131.033 370.905 131.047 370.847 131.047 C 370.788 131.047 370.73 131.033 370.678 131.007 L 368.881 129.97 C 368.785 129.97 368.797 129.837 368.881 129.777 L 369.894 129.186 C 369.947 129.162 370.005 129.149 370.063 129.149 C 370.121 129.149 370.179 129.162 370.232 129.186 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 54.4455 -183.382)" id="Vector_351"
                                clip-path="url(#CLIPPATH_398)">
                                <clipPath id="CLIPPATH_398">
                                    <rect transform="matrix(1 0 0 1 -54.4455 183.382)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-350.9455, -118.118)"
                                    d="M 349.205 118.634 L 350.278 119.249 C 350.325 119.279 350.379 119.295 350.435 119.295 C 350.49 119.295 350.545 119.279 350.592 119.249 L 351.665 118.634 C 351.761 118.634 351.761 118.501 351.665 118.453 H 351.58 C 351.565 118.445 351.553 118.432 351.544 118.418 C 351.535 118.403 351.53 118.386 351.53 118.369 C 351.53 118.351 351.535 118.334 351.544 118.32 C 351.553 118.305 351.565 118.292 351.58 118.284 L 352.726 117.621 C 352.744 117.614 352.76 117.602 352.771 117.585 C 352.782 117.569 352.788 117.55 352.788 117.53 C 352.788 117.511 352.782 117.491 352.771 117.475 C 352.76 117.459 352.744 117.447 352.726 117.44 L 352.05 116.982 C 352 116.955 351.944 116.941 351.888 116.941 C 351.831 116.941 351.775 116.955 351.725 116.982 L 350.664 117.585 L 350.447 117.717 L 350.29 117.814 L 350.121 117.898 L 349.205 118.429 C 349.178 118.429 349.152 118.44 349.133 118.459 C 349.113 118.478 349.103 118.504 349.103 118.531 C 349.103 118.559 349.113 118.585 349.133 118.604 C 349.152 118.623 349.178 118.634 349.205 118.634 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 78.7028 -173.7298)" id="Vector_352"
                                clip-path="url(#CLIPPATH_399)">
                                <clipPath id="CLIPPATH_399">
                                    <rect transform="matrix(1 0 0 1 -78.7028 173.7297)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-375.2028, -127.7703)"
                                    d="M 375.344 127.064 L 376.417 127.679 C 376.501 127.679 376.489 127.824 376.417 127.884 L 375.392 128.475 C 375.339 128.499 375.281 128.511 375.223 128.511 C 375.165 128.511 375.107 128.499 375.054 128.475 L 373.993 127.86 C 373.909 127.86 373.909 127.715 373.993 127.655 L 375.006 127.076 C 375.058 127.048 375.115 127.032 375.174 127.03 C 375.232 127.027 375.291 127.039 375.344 127.064 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 77.1979 -174.6057)" id="Vector_353"
                                clip-path="url(#CLIPPATH_400)">
                                <clipPath id="CLIPPATH_400">
                                    <rect transform="matrix(1 0 0 1 -77.1979 174.6056)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-373.6979, -126.8944)"
                                    d="M 373.848 126.195 L 374.909 126.81 C 374.994 126.81 374.982 126.955 374.909 127.015 L 373.897 127.594 C 373.842 127.621 373.782 127.635 373.722 127.635 C 373.661 127.635 373.601 127.621 373.547 127.594 L 372.486 126.967 C 372.402 126.967 372.414 126.835 372.486 126.774 L 373.499 126.183 C 373.555 126.162 373.615 126.152 373.675 126.154 C 373.735 126.156 373.794 126.17 373.848 126.195 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 75.691 -175.4715)" id="Vector_354"
                                clip-path="url(#CLIPPATH_401)">
                                <clipPath id="CLIPPATH_401">
                                    <rect transform="matrix(1 0 0 1 -75.691 175.4715)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-372.191, -126.0285)"
                                    d="M 372.342 125.327 L 373.403 125.942 C 373.487 125.942 373.475 126.086 373.403 126.135 L 372.39 126.726 C 372.336 126.755 372.276 126.771 372.215 126.771 C 372.154 126.771 372.094 126.755 372.04 126.726 L 370.979 126.111 C 370.895 126.111 370.907 125.978 370.979 125.918 L 371.992 125.327 C 372.046 125.3 372.106 125.286 372.167 125.286 C 372.227 125.286 372.287 125.3 372.342 125.327 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 62.8652 -182.8785)" id="Vector_355"
                                clip-path="url(#CLIPPATH_402)">
                                <clipPath id="CLIPPATH_402">
                                    <rect transform="matrix(1 0 0 1 -62.8652 182.8785)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-359.3652, -118.6215)"
                                    d="M 359.514 117.922 L 360.575 118.537 C 360.659 118.537 360.659 118.67 360.575 118.73 L 359.562 119.321 C 359.509 119.348 359.452 119.361 359.393 119.361 C 359.334 119.361 359.277 119.348 359.224 119.321 L 358.151 118.706 C 358.067 118.706 358.079 118.573 358.151 118.513 L 359.176 117.922 C 359.228 117.896 359.286 117.882 359.345 117.882 C 359.403 117.882 359.461 117.896 359.514 117.922 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 61.3604 -183.7465)" id="Vector_356"
                                clip-path="url(#CLIPPATH_403)">
                                <clipPath id="CLIPPATH_403">
                                    <rect transform="matrix(1 0 0 1 -61.3604 183.7465)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-357.8604, -117.7535)"
                                    d="M 358.006 117.054 L 359.067 117.669 C 359.164 117.669 359.152 117.802 359.067 117.862 L 358.055 118.453 C 358.002 118.479 357.945 118.493 357.886 118.493 C 357.827 118.493 357.769 118.479 357.717 118.453 L 356.644 117.838 C 356.56 117.838 356.572 117.705 356.644 117.645 L 357.669 117.054 C 357.721 117.027 357.779 117.014 357.838 117.014 C 357.896 117.014 357.954 117.027 358.006 117.054 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 59.8534 -184.617)" id="Vector_357"
                                clip-path="url(#CLIPPATH_404)">
                                <clipPath id="CLIPPATH_404">
                                    <rect transform="matrix(1 0 0 1 -59.8534 184.617)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-356.3534, -116.883)"
                                    d="M 356.499 116.186 L 357.56 116.801 C 357.657 116.801 357.645 116.934 357.56 116.994 L 356.548 117.585 C 356.495 117.611 356.437 117.625 356.379 117.625 C 356.32 117.625 356.262 117.611 356.21 117.585 L 355.137 116.97 C 355.053 116.97 355.065 116.825 355.137 116.777 L 356.162 116.186 C 356.213 116.156 356.271 116.141 356.331 116.141 C 356.39 116.141 356.448 116.156 356.499 116.186 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 58.3464 -185.4885)" id="Vector_358"
                                clip-path="url(#CLIPPATH_405)">
                                <clipPath id="CLIPPATH_405">
                                    <rect transform="matrix(1 0 0 1 -58.3464 185.4885)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-354.8464, -116.0115)"
                                    d="M 354.992 115.317 L 356.053 115.932 C 356.15 115.932 356.138 116.064 356.053 116.125 L 355.041 116.716 C 354.987 116.74 354.93 116.752 354.872 116.752 C 354.814 116.752 354.756 116.74 354.703 116.716 L 353.63 116.101 C 353.546 116.101 353.558 115.956 353.63 115.896 L 354.655 115.317 C 354.706 115.287 354.764 115.271 354.823 115.271 C 354.883 115.271 354.941 115.287 354.992 115.317 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 73.9909 -176.464)" id="Vector_359"
                                clip-path="url(#CLIPPATH_406)">
                                <clipPath id="CLIPPATH_406">
                                    <rect transform="matrix(1 0 0 1 -73.9909 176.464)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-370.4909, -125.036)"
                                    d="M 370.437 124.217 L 371.895 125.061 C 371.98 125.061 371.968 125.206 371.895 125.254 L 370.883 125.845 C 370.83 125.872 370.772 125.886 370.714 125.886 C 370.655 125.886 370.597 125.872 370.545 125.845 L 369.086 125.013 C 369.002 124.953 369.014 124.869 369.086 124.808 L 370.135 124.217 C 370.183 124.196 370.234 124.186 370.286 124.186 C 370.338 124.186 370.389 124.196 370.437 124.217 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 64.5674 -181.8955)" id="Vector_360"
                                clip-path="url(#CLIPPATH_407)">
                                <clipPath id="CLIPPATH_407">
                                    <rect transform="matrix(1 0 0 1 -64.5674 181.8955)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-361.0674, -119.6045)"
                                    d="M 361.02 118.79 L 362.467 119.635 C 362.564 119.635 362.552 119.767 362.467 119.828 L 361.454 120.419 C 361.402 120.445 361.344 120.459 361.286 120.459 C 361.227 120.459 361.169 120.445 361.117 120.419 L 359.658 119.574 C 359.574 119.574 359.586 119.442 359.658 119.381 L 360.671 118.79 C 360.725 118.764 360.785 118.75 360.846 118.75 C 360.906 118.75 360.966 118.764 361.02 118.79 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 69.2648 -179.1796)" id="Vector_361"
                                clip-path="url(#CLIPPATH_408)">
                                <clipPath id="CLIPPATH_408">
                                    <rect transform="matrix(1 0 0 1 -69.2648 179.1796)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-365.7648, -122.3204)"
                                    d="M 362.901 119.887 L 369.991 123.976 C 370.075 123.976 370.063 124.12 369.991 124.181 L 368.978 124.76 C 368.923 124.786 368.864 124.8 368.803 124.8 C 368.742 124.8 368.683 124.786 368.628 124.76 L 361.539 120.659 C 361.454 120.659 361.467 120.515 361.539 120.466 L 362.564 119.875 C 362.617 119.851 362.675 119.839 362.734 119.841 C 362.793 119.843 362.85 119.859 362.901 119.887 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 73.1305 -173.568)" id="Vector_362"
                                clip-path="url(#CLIPPATH_409)">
                                <clipPath id="CLIPPATH_409">
                                    <rect transform="matrix(1 0 0 1 -73.1305 173.568)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-369.6305, -127.932)"
                                    d="M 369.773 127.233 L 370.847 127.848 C 370.931 127.848 370.919 127.98 370.847 128.041 L 369.822 128.632 C 369.769 128.658 369.712 128.672 369.653 128.672 C 369.594 128.672 369.536 128.658 369.484 128.632 L 368.423 128.017 C 368.327 128.017 368.339 127.884 368.423 127.824 L 369.436 127.233 C 369.488 127.206 369.546 127.192 369.605 127.192 C 369.663 127.192 369.721 127.206 369.773 127.233 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 71.6279 -174.4375)" id="Vector_363"
                                clip-path="url(#CLIPPATH_410)">
                                <clipPath id="CLIPPATH_410">
                                    <rect transform="matrix(1 0 0 1 -71.6279 174.4375)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-368.1279, -127.0625)"
                                    d="M 368.266 126.364 L 369.339 126.979 C 369.424 126.979 369.412 127.112 369.339 127.172 L 368.327 127.763 C 368.274 127.79 368.217 127.803 368.158 127.803 C 368.099 127.803 368.041 127.79 367.989 127.763 L 366.916 127.148 C 366.832 127.148 366.844 127.003 366.916 126.955 L 367.941 126.364 C 367.991 126.337 368.047 126.322 368.104 126.322 C 368.161 126.322 368.217 126.337 368.266 126.364 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 70.1134 -175.3101)" id="Vector_364"
                                clip-path="url(#CLIPPATH_411)">
                                <clipPath id="CLIPPATH_411">
                                    <rect transform="matrix(1 0 0 1 -70.1134 175.3101)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-366.6134, -126.1899)"
                                    d="M 366.759 125.484 L 367.82 126.111 C 367.917 126.111 367.905 126.244 367.82 126.304 L 366.808 126.895 C 366.755 126.919 366.697 126.931 366.639 126.931 C 366.581 126.931 366.523 126.919 366.47 126.895 L 365.397 126.28 C 365.313 126.28 365.325 126.135 365.397 126.075 L 366.422 125.496 C 366.473 125.467 366.53 125.452 366.589 125.449 C 366.648 125.447 366.706 125.459 366.759 125.484 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 68.6642 -176.1805)" id="Vector_365"
                                clip-path="url(#CLIPPATH_412)">
                                <clipPath id="CLIPPATH_412">
                                    <rect transform="matrix(1 0 0 1 -68.6642 176.1805)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-365.1642, -125.3195)"
                                    d="M 365.313 124.615 L 366.374 125.231 C 366.458 125.231 366.458 125.375 366.374 125.436 L 365.361 126.014 C 365.31 126.044 365.251 126.06 365.192 126.06 C 365.133 126.06 365.075 126.044 365.023 126.014 L 363.95 125.399 C 363.866 125.399 363.878 125.267 363.95 125.206 L 364.975 124.615 C 365.028 124.592 365.086 124.579 365.144 124.579 C 365.202 124.579 365.26 124.592 365.313 124.615 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 67.0944 -177.054)" id="Vector_366"
                                clip-path="url(#CLIPPATH_413)">
                                <clipPath id="CLIPPATH_413">
                                    <rect transform="matrix(1 0 0 1 -67.0943 177.054)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-363.5943, -124.446)"
                                    d="M 363.745 123.747 L 364.806 124.362 C 364.891 124.362 364.878 124.494 364.806 124.555 L 363.793 125.145 C 363.739 125.172 363.679 125.186 363.619 125.186 C 363.558 125.186 363.498 125.172 363.444 125.145 L 362.383 124.53 C 362.298 124.53 362.31 124.398 362.383 124.337 L 363.396 123.747 C 363.45 123.72 363.51 123.706 363.57 123.706 C 363.631 123.706 363.691 123.72 363.745 123.747 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 65.5852 -177.924)" id="Vector_367"
                                clip-path="url(#CLIPPATH_414)">
                                <clipPath id="CLIPPATH_414">
                                    <rect transform="matrix(1 0 0 1 -65.5851 177.924)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-362.0851, -123.576)"
                                    d="M 362.226 122.879 L 363.299 123.494 C 363.384 123.494 363.371 123.627 363.299 123.687 L 362.274 124.278 C 362.222 124.305 362.164 124.318 362.106 124.318 C 362.047 124.318 361.989 124.305 361.937 124.278 L 360.876 123.663 C 360.791 123.663 360.791 123.518 360.876 123.47 L 361.889 122.879 C 361.94 122.85 361.998 122.834 362.057 122.834 C 362.117 122.834 362.175 122.85 362.226 122.879 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 64.0757 -178.7951)" id="Vector_368"
                                clip-path="url(#CLIPPATH_415)">
                                <clipPath id="CLIPPATH_415">
                                    <rect transform="matrix(1 0 0 1 -64.0756 178.7951)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-360.5756, -122.7049)"
                                    d="M 360.719 121.998 L 361.792 122.626 C 361.876 122.626 361.864 122.758 361.792 122.818 L 360.767 123.409 C 360.714 123.433 360.657 123.446 360.598 123.446 C 360.54 123.446 360.483 123.433 360.43 123.409 L 359.369 122.794 C 359.272 122.794 359.284 122.65 359.369 122.589 L 360.381 122.01 C 360.433 121.982 360.49 121.966 360.549 121.964 C 360.607 121.962 360.666 121.974 360.719 121.998 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 62.5687 -179.666)" id="Vector_369"
                                clip-path="url(#CLIPPATH_416)">
                                <clipPath id="CLIPPATH_416">
                                    <rect transform="matrix(1 0 0 1 -62.5686 179.666)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-359.0686, -121.834)"
                                    d="M 359.212 121.13 L 360.285 121.745 C 360.369 121.745 360.357 121.89 360.285 121.95 L 359.26 122.529 C 359.209 122.559 359.151 122.574 359.091 122.574 C 359.032 122.574 358.974 122.559 358.923 122.529 L 357.862 121.914 C 357.765 121.914 357.777 121.781 357.862 121.721 L 358.874 121.13 C 358.927 121.106 358.985 121.094 359.043 121.094 C 359.101 121.094 359.159 121.106 359.212 121.13 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 61.0602 -180.5385)" id="Vector_370"
                                clip-path="url(#CLIPPATH_417)">
                                <clipPath id="CLIPPATH_417">
                                    <rect transform="matrix(1 0 0 1 -61.0601 180.5385)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-357.5601, -120.9615)"
                                    d="M 357.705 120.262 L 358.778 120.877 C 358.862 120.877 358.85 121.01 358.778 121.07 L 357.753 121.661 C 357.701 121.687 357.643 121.701 357.584 121.701 C 357.526 121.701 357.468 121.687 357.416 121.661 L 356.343 121.046 C 356.258 121.046 356.27 120.913 356.343 120.853 L 357.367 120.262 C 357.42 120.235 357.477 120.222 357.536 120.222 C 357.595 120.222 357.653 120.235 357.705 120.262 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 59.5515 -181.409)" id="Vector_371"
                                clip-path="url(#CLIPPATH_418)">
                                <clipPath id="CLIPPATH_418">
                                    <rect transform="matrix(1 0 0 1 -59.5515 181.409)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-356.0515, -120.091)"
                                    d="M 356.198 119.394 L 357.259 120.009 C 357.355 120.009 357.343 120.142 357.259 120.202 L 356.246 120.793 C 356.194 120.819 356.136 120.833 356.077 120.833 C 356.019 120.833 355.961 120.819 355.909 120.793 L 354.835 120.178 C 354.751 120.178 354.763 120.033 354.835 119.985 L 355.86 119.394 C 355.912 119.364 355.97 119.349 356.029 119.349 C 356.088 119.349 356.147 119.364 356.198 119.394 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 58.0422 -182.2806)" id="Vector_372"
                                clip-path="url(#CLIPPATH_419)">
                                <clipPath id="CLIPPATH_419">
                                    <rect transform="matrix(1 0 0 1 -58.0422 182.2806)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-354.5422, -119.2194)"
                                    d="M 354.691 118.513 L 355.752 119.14 C 355.836 119.14 355.836 119.273 355.752 119.333 L 354.739 119.924 C 354.686 119.948 354.628 119.96 354.57 119.96 C 354.512 119.96 354.454 119.948 354.401 119.924 L 353.328 119.309 C 353.244 119.309 353.256 119.164 353.328 119.104 L 354.353 118.525 C 354.405 118.497 354.462 118.481 354.521 118.479 C 354.579 118.477 354.638 118.488 354.691 118.513 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 56.533 -183.151)" id="Vector_373" clip-path="url(#CLIPPATH_420)">
                                <clipPath id="CLIPPATH_420">
                                    <rect transform="matrix(1 0 0 1 -56.533 183.151)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-353.033, -118.349)"
                                    d="M 353.184 117.645 L 354.245 118.26 C 354.329 118.26 354.317 118.405 354.245 118.465 L 353.232 119.044 C 353.178 119.074 353.118 119.089 353.057 119.089 C 352.996 119.089 352.936 119.074 352.882 119.044 L 351.821 118.429 C 351.737 118.429 351.749 118.296 351.821 118.236 L 352.834 117.645 C 352.889 117.622 352.949 117.609 353.009 117.609 C 353.069 117.609 353.128 117.622 353.184 117.645 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 75.269 -172.3665)" id="Vector_374"
                                clip-path="url(#CLIPPATH_421)">
                                <clipPath id="CLIPPATH_421">
                                    <rect transform="matrix(1 0 0 1 -75.269 172.3665)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-371.769, -129.1335)"
                                    d="M 371.341 128.101 L 373.547 129.379 C 373.644 129.379 373.632 129.512 373.547 129.572 L 372.534 130.163 C 372.482 130.19 372.424 130.203 372.366 130.203 C 372.307 130.203 372.249 130.19 372.197 130.163 L 369.991 128.885 C 369.894 128.885 369.906 128.752 369.991 128.692 L 371.003 128.101 C 371.056 128.077 371.114 128.064 371.172 128.064 C 371.23 128.064 371.288 128.077 371.341 128.101 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 75.3434 -173.978)" id="Vector_375"
                                clip-path="url(#CLIPPATH_422)">
                                <clipPath id="CLIPPATH_422">
                                    <rect transform="matrix(1 0 0 1 -75.3433 173.978)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-371.8433, -127.522)"
                                    d="M 371.992 126.823 L 373.053 127.438 C 373.137 127.438 373.137 127.57 373.053 127.631 L 372.04 128.221 C 371.988 128.248 371.93 128.262 371.871 128.262 C 371.813 128.262 371.755 128.248 371.703 128.221 L 370.63 127.606 C 370.545 127.606 370.557 127.462 370.63 127.413 L 371.654 126.823 C 371.707 126.796 371.765 126.782 371.823 126.782 C 371.882 126.782 371.94 126.796 371.992 126.823 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 73.8342 -174.8521)" id="Vector_376"
                                clip-path="url(#CLIPPATH_423)">
                                <clipPath id="CLIPPATH_423">
                                    <rect transform="matrix(1 0 0 1 -73.8341 174.8521)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-370.3341, -126.6479)"
                                    d="M 370.485 125.942 L 371.546 126.569 C 371.63 126.569 371.618 126.702 371.546 126.762 L 370.533 127.353 C 370.478 127.377 370.418 127.389 370.358 127.389 C 370.298 127.389 370.239 127.377 370.184 127.353 L 369.123 126.738 C 369.038 126.738 369.05 126.593 369.123 126.533 L 370.135 125.954 C 370.189 125.925 370.248 125.91 370.309 125.907 C 370.369 125.905 370.43 125.917 370.485 125.942 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 72.291 -175.7225)" id="Vector_377"
                                clip-path="url(#CLIPPATH_424)">
                                <clipPath id="CLIPPATH_424">
                                    <rect transform="matrix(1 0 0 1 -72.291 175.7225)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-368.791, -125.7775)"
                                    d="M 368.93 125.073 L 370.003 125.689 C 370.087 125.689 370.075 125.833 370.003 125.894 L 368.978 126.472 C 368.927 126.502 368.868 126.518 368.809 126.518 C 368.75 126.518 368.692 126.502 368.64 126.472 L 367.579 125.857 C 367.495 125.857 367.507 125.725 367.579 125.664 L 368.592 125.073 C 368.645 125.05 368.703 125.037 368.761 125.037 C 368.819 125.037 368.877 125.05 368.93 125.073 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 70.8155 -176.5835)" id="Vector_378"
                                clip-path="url(#CLIPPATH_425)">
                                <clipPath id="CLIPPATH_425">
                                    <rect transform="matrix(1 0 0 1 -70.8155 176.5835)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-367.3155, -124.9165)"
                                    d="M 367.459 124.217 L 368.532 124.832 C 368.616 124.832 368.604 124.977 368.532 125.025 L 367.507 125.616 C 367.455 125.643 367.397 125.656 367.338 125.656 C 367.28 125.656 367.222 125.643 367.169 125.616 L 366.108 125.001 C 366.012 125.001 366.024 124.868 366.108 124.808 L 367.121 124.217 C 367.173 124.191 367.231 124.177 367.29 124.177 C 367.349 124.177 367.406 124.191 367.459 124.217 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 69.3085 -177.4635)" id="Vector_379"
                                clip-path="url(#CLIPPATH_426)">
                                <clipPath id="CLIPPATH_426">
                                    <rect transform="matrix(1 0 0 1 -69.3085 177.4635)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-365.8085, -124.0365)"
                                    d="M 365.952 123.337 L 367.025 123.952 C 367.109 123.952 367.097 124.085 367.025 124.145 L 366 124.736 C 365.948 124.763 365.89 124.776 365.831 124.776 C 365.772 124.776 365.715 124.763 365.662 124.736 L 364.601 124.121 C 364.505 124.121 364.517 123.976 364.601 123.928 L 365.614 123.337 C 365.666 123.311 365.724 123.297 365.783 123.297 C 365.842 123.297 365.899 123.311 365.952 123.337 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 67.8 -178.3371)" id="Vector_380" clip-path="url(#CLIPPATH_427)">
                                <clipPath id="CLIPPATH_427">
                                    <rect transform="matrix(1 0 0 1 -67.8 178.3371)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-364.3, -123.1629)"
                                    d="M 364.445 122.456 L 365.518 123.084 C 365.602 123.084 365.59 123.216 365.518 123.276 L 364.493 123.867 C 364.44 123.891 364.382 123.904 364.324 123.904 C 364.266 123.904 364.208 123.891 364.155 123.867 L 363.082 123.252 C 362.998 123.252 363.01 123.108 363.082 123.047 L 364.107 122.468 C 364.158 122.44 364.216 122.424 364.274 122.422 C 364.333 122.42 364.391 122.432 364.445 122.456 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 66.2551 -179.2131)" id="Vector_381"
                                clip-path="url(#CLIPPATH_428)">
                                <clipPath id="CLIPPATH_428">
                                    <rect transform="matrix(1 0 0 1 -66.2552 179.2131)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-362.7552, -122.2869)"
                                    d="M 362.901 121.589 L 363.962 122.204 C 364.059 122.204 364.047 122.348 363.962 122.409 L 362.949 122.988 C 362.897 123.014 362.839 123.028 362.781 123.028 C 362.722 123.028 362.664 123.014 362.612 122.988 L 361.539 122.36 C 361.454 122.36 361.467 122.228 361.539 122.167 L 362.564 121.577 C 362.618 121.554 362.676 121.544 362.734 121.546 C 362.792 121.548 362.849 121.563 362.901 121.589 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 64.7844 -180.0805)" id="Vector_382"
                                clip-path="url(#CLIPPATH_429)">
                                <clipPath id="CLIPPATH_429">
                                    <rect transform="matrix(1 0 0 1 -64.7844 180.0805)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-361.2844, -121.4195)"
                                    d="M 361.431 120.72 L 362.491 121.335 C 362.588 121.335 362.576 121.48 362.491 121.528 L 361.479 122.119 C 361.426 122.145 361.369 122.159 361.31 122.159 C 361.251 122.159 361.194 122.145 361.141 122.119 L 360.068 121.504 C 359.984 121.504 359.996 121.371 360.068 121.311 L 361.093 120.72 C 361.145 120.693 361.203 120.68 361.262 120.68 C 361.32 120.68 361.378 120.693 361.431 120.72 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 63.2747 -180.9485)" id="Vector_383"
                                clip-path="url(#CLIPPATH_430)">
                                <clipPath id="CLIPPATH_430">
                                    <rect transform="matrix(1 0 0 1 -63.2747 180.9485)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-359.7747, -120.5515)"
                                    d="M 359.923 119.852 L 360.984 120.467 C 361.069 120.467 361.069 120.6 360.984 120.66 L 359.971 121.251 C 359.919 121.277 359.861 121.291 359.803 121.291 C 359.744 121.291 359.686 121.277 359.634 121.251 L 358.561 120.636 C 358.476 120.636 358.488 120.503 358.561 120.443 L 359.586 119.852 C 359.638 119.825 359.696 119.812 359.754 119.812 C 359.813 119.812 359.871 119.825 359.923 119.852 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 61.7659 -181.822)" id="Vector_384"
                                clip-path="url(#CLIPPATH_431)">
                                <clipPath id="CLIPPATH_431">
                                    <rect transform="matrix(1 0 0 1 -61.7659 181.822)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-358.2659, -119.678)"
                                    d="M 358.416 118.984 L 359.477 119.599 C 359.562 119.599 359.55 119.731 359.477 119.792 L 358.465 120.383 C 358.409 120.406 358.35 120.418 358.29 120.418 C 358.23 120.418 358.17 120.406 358.115 120.383 L 357.054 119.767 C 356.97 119.767 356.982 119.623 357.054 119.562 L 358.067 118.984 C 358.12 118.954 358.18 118.938 358.242 118.938 C 358.303 118.938 358.363 118.954 358.416 118.984 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 60.2222 -182.6987)" id="Vector_385"
                                clip-path="url(#CLIPPATH_432)">
                                <clipPath id="CLIPPATH_432">
                                    <rect transform="matrix(1 0 0 1 -60.2221 182.6986)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-356.7221, -118.8014)"
                                    d="M 356.873 118.103 L 357.934 118.718 C 358.018 118.718 358.006 118.862 357.934 118.923 L 356.921 119.502 C 356.867 119.528 356.807 119.542 356.746 119.542 C 356.686 119.542 356.626 119.528 356.572 119.502 L 355.511 118.874 C 355.426 118.874 355.438 118.742 355.511 118.681 L 356.523 118.09 C 356.579 118.069 356.639 118.059 356.699 118.061 C 356.759 118.063 356.818 118.077 356.873 118.103 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 57.8047 -184.0974)" id="Vector_386"
                                clip-path="url(#CLIPPATH_433)">
                                <clipPath id="CLIPPATH_433">
                                    <rect transform="matrix(1 0 0 1 -57.8046 184.0975)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-354.3046, -117.4025)"
                                    d="M 353.533 116.162 L 356.463 117.85 C 356.547 117.85 356.535 117.995 356.463 118.043 L 355.438 118.634 C 355.387 118.664 355.329 118.679 355.269 118.679 C 355.21 118.679 355.152 118.664 355.101 118.634 L 352.147 116.982 C 352.062 116.982 352.074 116.837 352.147 116.789 L 353.16 116.198 C 353.213 116.158 353.275 116.134 353.341 116.128 C 353.407 116.121 353.474 116.133 353.533 116.162 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 77.0532 -172.996)" id="Vector_387"
                                clip-path="url(#CLIPPATH_434)">
                                <clipPath id="CLIPPATH_434">
                                    <rect transform="matrix(1 0 0 1 -77.0531 172.996)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-373.5531, -128.504)"
                                    d="M 373.499 127.691 L 374.958 128.535 C 375.042 128.535 375.03 128.667 374.958 128.728 L 373.945 129.319 C 373.892 129.343 373.835 129.355 373.776 129.355 C 373.718 129.355 373.661 129.343 373.608 129.319 L 372.149 128.475 C 372.064 128.475 372.076 128.342 372.149 128.282 L 373.173 127.691 C 373.224 127.666 373.28 127.653 373.336 127.653 C 373.393 127.653 373.448 127.666 373.499 127.691 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 61.398 -175.5002)" id="Vector_388"
                                clip-path="url(#CLIPPATH_435)">
                                <clipPath id="CLIPPATH_435">
                                    <rect transform="matrix(1 0 0 1 -61.398 175.5002)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-357.898, -125.9998)"
                                    d="M 347.626 119.575 L 369.05 131.936 C 369.135 131.936 369.123 132.081 369.05 132.141 L 368.544 132.43 C 368.491 132.457 368.434 132.471 368.375 132.471 C 368.316 132.471 368.259 132.457 368.206 132.43 L 346.746 120.069 C 346.661 120.069 346.673 119.936 346.746 119.876 L 347.252 119.587 C 347.307 119.551 347.371 119.531 347.437 119.529 C 347.503 119.526 347.568 119.542 347.626 119.575 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 70.9105 -182.209)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_45"
                                clip-path="url(#CLIPPATH_436)">
                                <clipPath id="CLIPPATH_436">
                                    <rect transform="matrix(1 0 0 1 -70.9105 182.209)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(191,191,191); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-367.4105, -119.291)"
                                    d="M 372.691 120.117 L 372.546 120.202 L 368.845 122.336 L 362.262 118.537 L 362.13 118.465 L 365.976 116.246 L 372.691 120.117 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 70.904 -182.131)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_46"
                                clip-path="url(#CLIPPATH_437)">
                                <clipPath id="CLIPPATH_437">
                                    <rect transform="matrix(1 0 0 1 -70.904 182.131)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(229,229,229); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-367.404, -119.369)"
                                    d="M 372.546 120.201 L 368.845 122.336 L 362.262 118.537 L 365.976 116.402 L 372.546 120.201 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 67.0644 -174.829)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_47"
                                clip-path="url(#CLIPPATH_438)">
                                <clipPath id="CLIPPATH_438">
                                    <rect transform="matrix(1 0 0 1 -67.0644 174.829)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(229,229,229); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-363.5644, -126.671)"
                                    d="M 383.241 125.11 V 125.423 C 383.248 125.665 383.191 125.905 383.074 126.117 C 382.957 126.329 382.786 126.506 382.577 126.629 L 369.52 134.167 C 369.316 134.287 369.082 134.349 368.845 134.347 C 368.608 134.346 368.376 134.284 368.17 134.167 L 344.563 120.539 C 344.352 120.418 344.177 120.242 344.058 120.03 C 343.939 119.817 343.88 119.576 343.888 119.333 V 118.995 L 368.845 133.467 L 383.241 125.11 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 57.8507 -183.596)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_48"
                                clip-path="url(#CLIPPATH_439)">
                                <clipPath id="CLIPPATH_439">
                                    <rect transform="matrix(1 0 0 1 -57.8508 183.596)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(244,244,244); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-354.3508, -117.904)"
                                    d="M 368.471 133.624 C 368.247 133.711 368.006 133.747 367.766 133.728 C 367.526 133.709 367.293 133.637 367.085 133.516 L 343.611 119.948 C 343.406 119.831 343.229 119.669 343.094 119.475 C 342.958 119.281 342.867 119.06 342.827 118.827 L 340.235 103.474 C 340.229 103.386 340.229 103.297 340.235 103.209 C 340.235 102.784 340.404 102.376 340.705 102.075 L 365.132 116.185 C 365.283 116.274 365.413 116.394 365.513 116.538 C 365.613 116.681 365.68 116.845 365.71 117.018 L 368.471 133.624 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 58.263 -183.789)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_49"
                                clip-path="url(#CLIPPATH_440)">
                                <clipPath id="CLIPPATH_440">
                                    <rect transform="matrix(1 0 0 1 -58.263 183.789)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(229,229,229); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-354.763, -117.711)"
                                    d="M 368.845 133.431 L 368.688 133.516 C 368.621 133.561 368.548 133.598 368.471 133.624 L 365.686 116.981 C 365.656 116.809 365.589 116.645 365.489 116.502 C 365.389 116.358 365.259 116.238 365.108 116.149 L 340.681 102.039 C 340.776 101.942 340.886 101.86 341.007 101.798 L 365.493 115.932 C 365.641 116.021 365.768 116.139 365.865 116.281 C 365.963 116.422 366.03 116.583 366.06 116.752 L 368.845 133.431 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 85.29 -225.8533)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_50"
                                clip-path="url(#CLIPPATH_441)">
                                <clipPath id="CLIPPATH_441">
                                    <rect transform="matrix(1 0 0 1 -85.2901 225.8533)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-381.7901, -75.6467)"
                                    d="M 386.592 67.7285 C 386.592 67.7285 386.291 73.5776 386.424 74.0962 C 386.556 74.6148 389.1 76.3273 389.848 76.9303 C 390.595 77.5333 385.809 82.2608 383.482 83.3342 C 381.155 84.4075 373.836 81.5855 373.668 77.9675 C 373.499 74.3495 374.873 71.3103 376.079 71.1536 C 377.285 70.9968 386.592 67.7285 386.592 67.7285 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 84.6271 -205.7775)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_51"
                                clip-path="url(#CLIPPATH_442)">
                                <clipPath id="CLIPPATH_442">
                                    <rect transform="matrix(1 0 0 1 -84.6271 205.7775)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(244,244,244); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-381.1271, -95.7225)"
                                    d="M 387.243 75.097 C 387.243 75.097 383.011 81.4164 377.092 82.0074 C 375.235 80.1742 375.066 73.5654 377.646 71.5393 C 377.646 71.5393 375.235 69.6217 373.644 69.9956 C 371.91 71.0592 370.624 72.7187 370.027 74.6628 C 368.515 79.0048 367.808 83.5863 367.941 88.1821 C 368.037 94.3809 367.941 110.047 367.941 110.047 C 368.285 111.897 369.019 113.653 370.093 115.198 C 371.168 116.743 372.559 118.042 374.174 119.007 C 378.44 121.415 383.461 122.109 388.22 120.949 C 391.21 120.25 392.319 118.537 393.356 116.402 C 393.091 112.061 391.367 103.136 392.09 97.6492 C 392.813 92.1619 393.971 88.1097 394.272 83.6958 C 394.574 79.2818 393.682 79.3662 391.475 77.7984 C 390.132 76.7961 388.718 75.8933 387.243 75.097 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 92.3953 -195.0982)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_52"
                                clip-path="url(#CLIPPATH_443)">
                                <clipPath id="CLIPPATH_443">
                                    <rect transform="matrix(1 0 0 1 -92.3953 195.0982)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-388.8953, -106.4018)"
                                    d="M 380.444 125.424 C 381.517 124.728 382.628 124.092 383.771 123.519 C 384.843 123.192 385.817 122.604 386.604 121.806 C 387.653 120.781 389.353 116.982 390.559 113.183 C 391.783 108.936 392.268 104.51 391.994 100.098 C 391.475 94.84 389.582 87.4713 389.1 84.4202 C 388.618 81.369 389.594 80.175 391.005 79.0655 C 392.657 77.751 394.948 78.3299 396.165 82.575 C 397.735 88.4537 398.649 94.4884 398.89 100.568 C 398.933 105.074 398.236 109.555 396.828 113.835 C 395.564 117.502 393.864 121.004 391.765 124.266 C 391.186 125.255 390.993 126.124 390.101 128.126 C 389.246 130.13 387.918 131.897 386.231 133.275 C 384.736 134.349 384.036 134.481 383.687 134.288 C 383.337 134.095 383.337 133.565 383.964 132.998 C 385.018 132.175 385.916 131.17 386.616 130.031 C 386.616 130.031 385.314 131.334 384.47 132.045 C 383.714 132.677 382.879 133.208 381.987 133.625 C 381.119 134.011 379.913 133.275 380.528 132.684 C 381.143 132.093 381.734 131.816 383.012 130.743 C 383.671 130.174 384.261 129.53 384.772 128.825 C 383.901 129.493 382.978 130.09 382.011 130.61 C 381.258 131.073 380.387 131.308 379.503 131.285 C 379.045 131.285 378.49 130.634 379.346 130.007 C 380.529 129.393 381.634 128.64 382.638 127.764 C 383.59 126.823 384.121 126.027 383.843 126.003 C 383.566 125.979 383.06 126.582 381.951 126.932 C 380.841 127.281 379.648 126.932 379.539 126.353 C 379.431 125.774 379.407 125.955 380.444 125.424 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 85.2716 -239.5193)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_53"
                                clip-path="url(#CLIPPATH_444)">
                                <clipPath id="CLIPPATH_444">
                                    <rect transform="matrix(1 0 0 1 -85.2715 239.5192)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-381.7715, -61.9808)"
                                    d="M 373.378 59.0213 C 374.078 54.4867 377.333 51.0617 382.011 51.3149 C 383.892 51.4101 385.696 52.0944 387.167 53.271 C 388.638 54.4477 389.702 56.0573 390.209 57.872 C 390.715 59.6868 390.639 61.6149 389.99 63.3837 C 389.341 65.1525 388.152 66.6724 386.592 67.7286 C 386.425 68.4164 386.182 69.0838 385.869 69.7185 C 384.217 71.6481 379.214 72.842 377.779 72.637 C 376.924 72.5593 376.112 72.2271 375.448 71.6832 C 374.784 71.1393 374.298 70.4087 374.053 69.5858 C 372.546 66.0281 372.993 61.2644 373.378 59.0213 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 86.4113 -242.9179)" id="Vector_389"
                                clip-path="url(#CLIPPATH_445)">
                                <clipPath id="CLIPPATH_445">
                                    <rect transform="matrix(1 0 0 1 -86.4114 242.9178)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(58,44,109); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-382.9114, -58.5822)"
                                    d="M 386.592 67.7288 L 386.158 63.7732 C 386.158 63.7732 389.389 55.4035 381.758 57.0196 C 376.718 58.0808 375.452 58.5391 373.921 55.1503 C 372.39 51.7614 377.791 48.7343 384.217 49.5785 C 386.429 49.8108 388.473 50.8657 389.945 52.5341 C 391.416 54.2026 392.208 56.3629 392.162 58.5874 C 391.994 61.0717 391.331 66.1128 386.592 67.7288 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 97.405 -215.6886)" id="Vector_390"
                                clip-path="url(#CLIPPATH_446)">
                                <clipPath id="CLIPPATH_446">
                                    <rect transform="matrix(1 0 0 1 -97.405 215.6886)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(237,237,237); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-393.905, -85.8114)"
                                    d="M 399.662 90.4503 C 399.662 90.4503 395.49 94.5989 390.559 93.405 C 389.86 92.9226 388.148 83.2384 388.148 83.2384 C 388.148 83.2384 388.148 77.8717 392.259 78.0044 C 396.37 78.137 399.662 90.4503 399.662 90.4503 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 72.882 -225.299)" id="Vector_391" clip-path="url(#CLIPPATH_447)">
                                <clipPath id="CLIPPATH_447">
                                    <rect transform="matrix(1 0 0 1 -72.882 225.299)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(237,237,237); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-369.382, -76.201)"
                                    d="M 368.194 82.4058 C 367.031 82.3502 365.932 81.8544 365.12 81.0189 C 365.288 78.8602 368.061 70.6112 373.644 69.9961 C 372.126 71.066 370.922 72.5237 370.159 74.2171 C 369.297 76.8926 368.64 79.6302 368.194 82.4058 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 179.5575 179.809)" id="Vector_392"
                                clip-path="url(#CLIPPATH_448)">
                                <clipPath id="CLIPPATH_448">
                                    <rect transform="matrix(1 0 0 1 -179.5575 -179.809)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(177,180,196); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-476.0575, -481.309)"
                                    d="M 512.475 468.302 C 510.597 466.587 508.535 465.086 506.326 463.828 C 489.627 454.18 462.476 454.18 445.79 463.828 C 443.212 465.286 440.843 467.088 438.749 469.182 C 429.574 478.601 431.925 490.782 445.79 498.79 C 462.476 508.438 489.639 508.438 506.326 498.79 C 520.625 490.529 522.674 477.829 512.475 468.302 Z M 501.009 495.666 C 487.252 503.614 464.839 503.614 451.119 495.666 C 441.474 490.094 438.58 482.063 442.474 475.019 C 444.571 471.571 447.557 468.751 451.119 466.855 C 464.875 458.919 487.288 458.919 501.009 466.855 C 504.567 468.747 507.546 471.569 509.629 475.019 C 513.536 482.111 510.654 490.131 501.009 495.666 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 178.7605 160.0889)" id="Vector_393"
                                clip-path="url(#CLIPPATH_449)">
                                <clipPath id="CLIPPATH_449">
                                    <rect transform="matrix(1 0 0 1 -178.7605 -160.0889)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(161,165,181); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-475.2605, -461.5889)"
                                    d="M 509.629 475.068 C 507.546 471.617 504.567 468.796 501.009 466.903 C 487.252 458.968 464.839 458.968 451.119 466.903 C 447.557 468.799 444.571 471.619 442.474 475.068 L 438.749 469.134 L 438.074 468.061 L 442.896 456.544 L 459.643 447.233 L 490.821 447.776 L 512.004 460.343 C 512.004 460.343 512.39 464.322 512.438 468.254 C 512.523 473.174 512.04 477.962 509.629 475.068 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 140.0245 173.1515)" id="Vector_394"
                                clip-path="url(#CLIPPATH_450)">
                                <clipPath id="CLIPPATH_450">
                                    <rect transform="matrix(1 0 0 1 -140.0245 -173.1515)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(177,180,196); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-436.5245, -474.6515)"
                                    d="M 433.275 481.194 L 433.287 468.109 L 439.774 479.096 L 433.275 481.194 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 219.4825 173.188)" id="Vector_395"
                                clip-path="url(#CLIPPATH_451)">
                                <clipPath id="CLIPPATH_451">
                                    <rect transform="matrix(1 0 0 1 -219.4825 -173.188)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(177,180,196); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-515.9825, -474.688)"
                                    d="M 518.84 481.194 V 468.182 L 513.125 474.658 L 518.84 481.194 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 179.95 173.158)" id="Vector_396" clip-path="url(#CLIPPATH_452)">
                                <clipPath id="CLIPPATH_452">
                                    <rect transform="matrix(1 0 0 1 -179.95 -173.158)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(62,126,255); fill-rule: nonzero; opacity: 0.1;"
                                    transform=" translate(-476.45, -474.658)"
                                    d="M 476.45 495.22 C 496.119 495.22 512.065 486.014 512.065 474.658 C 512.065 463.302 496.119 454.096 476.45 454.096 C 456.78 454.096 440.835 463.302 440.835 474.658 C 440.835 486.014 456.78 495.22 476.45 495.22 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 178.9368 188.4827)" id="Vector_397"
                                clip-path="url(#CLIPPATH_453)">
                                <clipPath id="CLIPPATH_453">
                                    <rect transform="matrix(1 0 0 1 -178.9368 -188.4827)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(177,180,196); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-475.4368, -489.9827)"
                                    d="M 436.531 483.401 C 436.531 483.401 442.016 505.013 482.924 503.903 C 511.317 503.903 514.946 479.494 514.271 476.021 C 511.358 480.036 507.604 483.366 503.27 485.778 C 498.936 488.19 494.128 489.627 489.181 489.986 C 471.904 491.494 459.149 491.301 452.325 487.996 C 445.501 484.692 436.543 476.021 436.543 476.021 L 436.531 483.401 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 179.558 167.3298)" id="Vector_398"
                                clip-path="url(#CLIPPATH_454)">
                                <clipPath id="CLIPPATH_454">
                                    <rect transform="matrix(1 0 0 1 -179.558 -167.3298)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(214,216,229); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-476.058, -468.8298)"
                                    d="M 445.79 486.319 C 429.104 476.671 429.104 460.993 445.79 451.345 C 462.476 441.697 489.639 441.697 506.326 451.345 C 523.012 460.993 523.012 476.671 506.326 486.319 C 489.639 495.967 462.476 495.955 445.79 486.319 Z M 500.997 454.433 C 487.24 446.497 464.827 446.485 451.119 454.433 C 437.411 462.38 437.362 475.297 451.119 483.244 C 464.875 491.192 487.288 491.192 500.997 483.244 C 514.705 475.297 514.813 462.38 500.997 454.433 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 88.7852 227.8095)" id="Vector_399"
                                clip-path="url(#CLIPPATH_455)">
                                <clipPath id="CLIPPATH_455">
                                    <rect transform="matrix(1 0 0 1 -88.7852 -227.8095)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 0.1;"
                                    transform=" translate(-385.2852, -529.3095)"
                                    d="M 389.354 536.359 C 391.603 535.061 391.605 530.851 389.357 526.958 C 387.11 523.064 383.465 520.961 381.216 522.26 C 378.967 523.558 378.966 527.768 381.213 531.661 C 383.46 535.555 387.105 537.658 389.354 536.359 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 141.893 193.883)" id="Vector_400" clip-path="url(#CLIPPATH_456)">
                                <clipPath id="CLIPPATH_456">
                                    <rect transform="matrix(1 0 0 1 -141.893 -193.883)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(177,180,196); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-438.393, -495.383)"
                                    d="M 450.178 491.783 L 432.166 502.191 L 426.608 498.971 L 444.62 488.575 L 450.178 491.783 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 144.672 198.683)" id="Vector_401" clip-path="url(#CLIPPATH_457)">
                                <clipPath id="CLIPPATH_457">
                                    <rect transform="matrix(1 0 0 1 -144.672 -198.683)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(161,165,181); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-441.172, -500.183)"
                                    d="M 450.178 498.199 L 432.166 508.595 V 502.179 L 450.178 491.771 V 498.199 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 112.047 214.6132)" id="Vector_402"
                                clip-path="url(#CLIPPATH_458)">
                                <clipPath id="CLIPPATH_458">
                                    <rect transform="matrix(1 0 0 1 -112.047 -214.6132)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-408.547, -516.1132)"
                                    d="M 435.843 506.737 C 435.735 504.74 435.158 502.796 434.159 501.063 C 433.16 499.33 431.766 497.857 430.092 496.763 C 429.518 496.348 428.846 496.09 428.142 496.014 C 427.438 495.938 426.727 496.046 426.077 496.329 L 381.251 522.198 L 389.426 536.236 L 433.697 510.669 C 435.011 510.198 435.843 508.823 435.843 506.737 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 88.7852 227.8095)" id="Vector_403"
                                clip-path="url(#CLIPPATH_459)">
                                <clipPath id="CLIPPATH_459">
                                    <rect transform="matrix(1 0 0 1 -88.7852 -227.8095)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(140,80,255); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-385.2852, -529.3095)"
                                    d="M 389.354 536.359 C 391.603 535.061 391.605 530.851 389.357 526.958 C 387.11 523.064 383.465 520.961 381.216 522.26 C 378.967 523.558 378.966 527.768 381.213 531.661 C 383.46 535.555 387.105 537.658 389.354 536.359 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 214.612 285.6045)" id="Vector_404"
                                clip-path="url(#CLIPPATH_460)">
                                <clipPath id="CLIPPATH_460">
                                    <rect transform="matrix(1 0 0 1 -214.612 -285.6045)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(214,216,229); fill-rule: nonzero; opacity: 0.4;"
                                    transform=" translate(-511.112, -587.1045)"
                                    d="M 511.112 602.903 C 526.221 602.903 538.468 595.83 538.468 587.104 C 538.468 578.379 526.221 571.306 511.112 571.306 C 496.004 571.306 483.756 578.379 483.756 587.104 C 483.756 595.83 496.004 602.903 511.112 602.903 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 230.3011 185.79)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_54"
                                clip-path="url(#CLIPPATH_461)">
                                <clipPath id="CLIPPATH_461">
                                    <rect transform="matrix(1 0 0 1 -230.3011 -185.79)" id="clip0" x="-296.5" y="-301.5"
                                        rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-526.8011, -487.29)"
                                    d="M 530.306 473.632 C 530.596 476.176 533.634 487.151 532.983 490.902 C 532.332 494.652 521.963 500.948 521.963 500.948 L 520.528 494.52 L 526.267 488.888 L 524.712 478.239 L 530.306 473.632 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 230.298 169.5759)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_55"
                                clip-path="url(#CLIPPATH_462)">
                                <clipPath id="CLIPPATH_462">
                                    <rect transform="matrix(1 0 0 1 -230.298 -169.5758)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(237,237,237); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-526.798, -471.0758)"
                                    d="M 522.289 462.815 C 523.298 462.349 524.444 462.27 525.508 462.592 C 526.572 462.915 527.481 463.616 528.064 464.564 C 529.583 467.084 531.162 475.755 531.307 477.227 C 531.307 477.227 529.173 480.193 525.966 479.699 L 522.289 462.815 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 205.2105 286.4897)" id="Vector_405"
                                clip-path="url(#CLIPPATH_463)">
                                <clipPath id="CLIPPATH_463">
                                    <rect transform="matrix(1 0 0 1 -205.2106 -286.4896)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,42,48); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-501.7106, -587.9896)"
                                    d="M 510.449 585.175 C 508.194 585.791 505.786 585.497 503.746 584.355 C 502.13 584.355 493.353 580.653 492.159 583.801 C 491.122 586.574 494.92 589.131 496.982 589.613 C 501.419 590.687 504.686 592.906 506.47 593.231 C 507.797 593.509 509.509 593.69 510.57 592.653 C 511.799 591.447 511.691 586.816 510.449 585.175 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 205.0484 287.4375)" id="Vector_406"
                                clip-path="url(#CLIPPATH_464)">
                                <clipPath id="CLIPPATH_464">
                                    <rect transform="matrix(1 0 0 1 -205.0485 -287.4375)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(191,75,75); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-501.5485, -588.9375)"
                                    d="M 506.434 592.508 C 504.65 592.134 501.383 589.927 496.946 588.89 C 495.246 588.48 492.316 586.611 492.015 584.392 C 491.629 586.936 495.053 589.216 496.946 589.65 C 501.383 590.723 504.65 592.942 506.434 593.268 C 507.76 593.545 509.472 593.726 510.533 592.689 C 510.805 592.384 511.003 592.021 511.112 591.628 C 510.454 592.128 509.689 592.468 508.877 592.621 C 508.065 592.774 507.229 592.735 506.434 592.508 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 219.4373 280.1062)" id="Vector_407"
                                clip-path="url(#CLIPPATH_465)">
                                <clipPath id="CLIPPATH_465">
                                    <rect transform="matrix(1 0 0 1 -219.4373 -280.1062)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,42,48); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-515.9373, -581.6062)"
                                    d="M 524.676 578.783 C 522.422 579.409 520.013 579.119 517.972 577.975 C 516.357 577.975 507.579 574.26 506.386 577.42 C 505.349 580.182 509.147 582.739 511.209 583.233 C 515.633 584.306 518.913 586.513 520.697 586.851 C 522.023 587.128 523.735 587.309 524.796 586.272 C 526.026 585.054 525.917 580.423 524.676 578.783 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 219.2749 281.0575)" id="Vector_408"
                                clip-path="url(#CLIPPATH_466)">
                                <clipPath id="CLIPPATH_466">
                                    <rect transform="matrix(1 0 0 1 -219.275 -281.0575)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(191,75,75); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-515.775, -582.5575)"
                                    d="M 520.661 586.116 C 518.876 585.742 515.597 583.535 511.172 582.498 C 509.472 582.088 506.543 580.231 506.241 578.012 C 505.855 580.556 509.279 582.836 511.172 583.27 C 515.597 584.343 518.876 586.55 520.661 586.888 C 521.987 587.165 523.699 587.346 524.76 586.309 C 525.031 586.004 525.229 585.641 525.339 585.248 C 524.681 585.748 523.916 586.088 523.103 586.239 C 522.291 586.39 521.454 586.348 520.661 586.116 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 214.9343 243.9038)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_56"
                                clip-path="url(#CLIPPATH_467)">
                                <clipPath id="CLIPPATH_467">
                                    <rect transform="matrix(1 0 0 1 -214.9343 -243.9038)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(226,97,97); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-511.4343, -545.4038)"
                                    d="M 524.845 554.94 C 524.471 551.669 523.797 548.44 522.831 545.292 C 522.831 545.292 523.434 536.995 523.735 529.132 C 524.073 520.208 527.171 512.357 524.724 505.241 L 497.211 511.356 C 497.211 511.356 498.875 546.933 499.236 551.238 C 499.43 554.588 499.833 557.923 500.442 561.224 C 501.648 568.134 503.734 584.56 503.734 584.56 C 505.827 585.562 508.199 585.826 510.461 585.307 C 510.461 585.307 510.256 564.54 510.063 559.559 C 509.834 553.529 509.653 553.952 509.653 553.952 L 510.57 538.816 L 511.16 531.291 C 511.16 531.291 511.92 536.814 512.366 541.747 C 512.8 546.052 513.837 549.948 514.994 557.955 C 516.007 564.902 517.635 578.867 517.635 578.867 C 520.552 580.556 524.495 579.157 524.495 579.157 C 524.495 579.157 525.664 560.97 524.845 554.94 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 215.1869 154.4037)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_57"
                                clip-path="url(#CLIPPATH_468)">
                                <clipPath id="CLIPPATH_468">
                                    <rect transform="matrix(1 0 0 1 -215.1868 -154.4037)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-511.6868, -455.9037)"
                                    d="M 520.842 462.959 C 518.744 463.068 517.225 463.611 516.923 462.959 C 516.702 461.88 516.541 460.789 516.441 459.691 C 516.682 459.076 516.899 458.425 516.899 458.425 C 519.528 456.809 520.36 453.963 520.709 450.646 C 521.3 444.978 518.238 440.021 512.571 439.43 C 507.254 438.876 503.336 442.626 502.287 447.764 C 501.732 450.296 500.611 455.084 502.118 459.257 C 502.974 461.597 504.059 463.442 505.156 463.804 C 506.21 463.78 507.261 463.687 508.303 463.526 C 508.303 463.526 508.58 465.094 508.773 466.107 C 508.966 467.12 508.894 467.651 506.88 468.881 C 504.867 470.111 509.919 472.668 513.222 472.414 C 516.526 472.161 520.227 470.171 521.252 468.049 C 522.373 465.697 522.265 462.899 520.842 462.959 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 216.3865 187.5481)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_58"
                                clip-path="url(#CLIPPATH_469)">
                                <clipPath id="CLIPPATH_469">
                                    <rect transform="matrix(1 0 0 1 -216.3865 -187.5481)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(244,244,244); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-512.8865, -489.0481)"
                                    d="M 517.804 463.273 C 518.382 464.72 516.899 466.493 512.981 467.735 C 509.063 468.977 508.689 467.373 508.689 467.373 C 506.068 468.55 503.512 469.866 501.033 471.317 C 498.622 472.969 497.633 477.757 497.307 485.789 C 496.946 495.123 496.91 508.98 497.223 511.368 C 497.223 511.368 501.636 515.77 507.29 515.312 C 512.945 514.853 522.445 509.849 524.748 505.977 C 524.688 497.789 523.723 496.462 525.049 491.746 C 528.088 480.892 529.679 476.527 528.208 469.351 C 527.003 463.43 525.291 462.694 522.952 462.754 C 521.228 462.837 519.509 463.01 517.804 463.273 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 189.6028 183.5702)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_59"
                                clip-path="url(#CLIPPATH_470)">
                                <clipPath id="CLIPPATH_470">
                                    <rect transform="matrix(1 0 0 1 -189.6028 -183.5703)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(255,206,169); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-486.1028, -485.0703)"
                                    d="M 488.41 493.543 C 493.051 494.749 494.137 491.795 494.751 489.371 C 496.222 483.509 497.018 478.215 498.115 474.899 C 499.417 470.967 500.768 470.34 502.685 469.58 C 504.915 468.676 506.844 470.569 506.097 475.61 C 505.185 481.404 503.765 487.106 501.853 492.651 C 501.274 494.484 499.984 497.728 498.043 499.296 C 495.632 501.226 492.015 501.141 486.589 499.79 C 484.274 499.212 481.767 497.825 477.318 495.774 C 476.112 495.22 475.22 494.858 472.953 493.797 C 470.682 492.771 468.689 491.216 467.142 489.262 C 465.936 487.538 465.804 486.729 466.045 486.344 C 466.286 485.958 466.889 485.958 467.516 486.681 C 468.438 487.9 469.569 488.945 470.855 489.769 C 470.855 489.769 469.385 488.249 468.601 487.272 C 467.89 486.398 467.298 485.432 466.841 484.402 C 466.419 483.401 467.287 481.99 467.938 482.75 C 468.589 483.509 468.914 484.197 470.108 485.632 C 470.739 486.398 471.46 487.087 472.254 487.682 C 471.511 486.675 470.85 485.611 470.277 484.498 C 469.769 483.625 469.518 482.626 469.553 481.616 C 469.553 481.097 470.337 480.47 471.024 481.471 C 471.705 482.83 472.543 484.105 473.52 485.27 C 474.581 486.368 475.473 487.007 475.497 486.693 C 475.521 486.38 474.858 485.789 474.484 484.51 C 474.111 483.232 474.484 481.881 475.196 481.725 C 475.907 481.568 475.762 481.616 476.329 482.822 C 477.113 484.05 477.817 485.327 478.439 486.645 C 478.797 487.881 479.451 489.011 480.344 489.937 C 481.489 491.095 484.009 492.434 488.41 493.543 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 205.0603 176.1616)"
                                id="&lt;&#xd0;&#x9a;&#xd0;&#xbe;&#xd0;&#xbd;&#xd1;&#x82;&#xd1;&#x83;&#xd1;&#x80;&gt;_60"
                                clip-path="url(#CLIPPATH_471)">
                                <clipPath id="CLIPPATH_471">
                                    <rect transform="matrix(1 0 0 1 -205.0603 -176.1616)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(237,237,237); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-501.5603, -477.6616)"
                                    d="M 504.397 468.76 C 501.298 468.313 499.116 469.7 497.741 474.392 C 496.367 479.083 495.427 482.942 495.427 482.942 C 496.652 484.711 498.506 485.945 500.611 486.391 C 504.312 487.284 505.65 485.511 505.65 485.511 C 505.65 485.511 506.675 480.591 507.314 477.25 C 507.953 473.909 508.23 469.326 504.397 468.76 Z"
                                    stroke-linecap="round" />
                            </g>
                            <g transform="matrix(1 0 0 1 214.8414 147.4591)" id="Vector_409"
                                clip-path="url(#CLIPPATH_472)">
                                <clipPath id="CLIPPATH_472">
                                    <rect transform="matrix(1 0 0 1 -214.8414 -147.4591)" id="clip0" x="-296.5"
                                        y="-301.5" rx="0" ry="0" width="593" height="603" />
                                </clipPath>
                                <path
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; is-custom-font: none; font-file-url: none; fill: rgb(43,42,48); fill-rule: nonzero; opacity: 1;"
                                    transform=" translate(-511.3414, -448.9591)"
                                    d="M 502.456 447.028 C 502.456 447.028 497.573 439.599 508.17 438.079 C 515.814 436.982 520.721 441.902 521.288 447.233 C 521.83 452.322 518.696 457.617 516.465 459.715 C 514.239 460.274 511.884 459.986 509.858 458.907 C 509.738 457.524 509.689 456.135 509.714 454.746 C 509.714 454.746 513.403 446.895 502.456 447.028 Z"
                                    stroke-linecap="round" />
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
    </div>
    
    
        <div class="w-screen h-screen" id="docs">
            @include('features')
        </div>
        
    <div
        class="blob w-[800px] h-[800px] rounded-[999px] absolute top-0 right-0 -z-10 blur-3xl bg-opacity-60 bg-gradient-to-r from-indigo-200 via-purple-200 to-pink-200">
    </div>
    <div
        class="blob w-[1000px] h-[1000px] rounded-[999px] absolute bottom-0 left-0 -z-10 blur-3xl bg-opacity-60 bg-gradient-to-r from-red-200 via-gray-100 to-blue-100">
    </div>
    <div
        class="blob w-[600px] h-[600px] rounded-[999px] absolute bottom-0 left-0 -z-10 blur-3xl bg-opacity-60 bg-gradient-to-r from-slate-100 via-teal-100 to-blue-100">
    </div>
    <div
        class="blob w-[300px] h-[300px] rounded-[999px] absolute bottom-[-10px] left-0 -z-10 blur-3xl bg-opacity-60 bg-gradient-to-r from-green-200 via-cyan-200 to-Fuchsia-300">
    </div>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
   
    <script>
            // var typed = new Typed('#element', {
            //     strings: ['1°RM', 'ENPEI.DZ' , 'D.ETUDES', 'DPP'],
            //     typeSpeed: 150,
            //     loop : true,
            //     backSpeed : 60,
            // });
    </script>


</body>

</html>
