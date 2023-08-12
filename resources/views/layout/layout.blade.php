<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Mono:wght@100&display=swap"
        rel="stylesheet">
    <link href="../css/app.css" rel="stylesheet" />


    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="flex flex-col min-h-screen">
    <header class=" header flex justify-between items-center ]">
        <div class="   relative flex items-center  ">
            <img class="w-16 h-16 rounded-full  object-cover" src="/img/pizza image.avif" alt="pizza image"></img>
            <p class="font-bold px-4">pizza <span class="block">housse</span></p>
        </div>
        <ul class="flex ">
            <li class="hover:text-blue-300 transition-all ease-in-out duration-100 cursor-pointer ">home</li>
            <li class="px-6 hover:text-blue-300 transition-all ease-in-out duration-100 cursor-pointer ">about</li>
            <li class="hover:text-blue-300 transition-all ease-in-out duration-100 cursor-pointer"> contact</li>
        </ul>
    </header>
    <div class="">
        @yield('content')
    </div>


    <footer class="mt-auto header flex justify-center items-center">
        @copy right net ninja
    </footer>

</body>

</html>
