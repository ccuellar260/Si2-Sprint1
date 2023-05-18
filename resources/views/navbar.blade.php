<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="{{ asset('css/desabilitarInputNumber.css') }}" /> --}}
</head>

<body class="">

    <div class="  h-screen flex p-2 pt-3 ">
        {{-- barra lateral de la izquierda  w-64 --}}
        <div class="bg-gray-700  px-2 w-64  h-full rounded-xl mr-6">
            <!--transition-transform duration-300 ease-in-out-->
            {{-- logo y botno para abriir las ventanas  --}}
            <div class="flex items-center ">

                <div  class="text-center flex flex-row-reverse justify-center text-white py-5 border-gray-400 border-b mb-4  w-full ">
                    {{-- <img src="" alt=""> object-cover w-full h-full rounded-full--}}

                        {{-- <img class="text-center bg-red-900 "
                        src="{{ asset('img/Logo.png') }}" alt=""
                        loading="lazy"  width="40"/> --}}
                        {{-- <p> HOME -SPRINT 1</p> --}}
                        <a href="{{ route('planes') }}" >HOME -SPRINT 1 </a>

                </div>
            </div>

            <div class=" flex flex-col space-y-2 text-gray-100 ">
                <a href="{{ route('empleados.index') }}" id="empresa"
                    class="flex items-center text-sm font-medium py-2 px-2 hover:bg-gray-500 hover:text-white hover:text-base rounded-md transition duration-150 ease-in-out">
                    <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>
                    <span class="  pl-2   ">Empleados</span>
                </a>
                <a href="{{ route('clientes.index') }}" id="empresa"
                class="flex items-center text-sm font-medium  py-2 px-2 hover:bg-gray-500 hover:text-white hover:text-base rounded-md transition duration-150 ease-in-out">
                <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                    </path>
                </svg>
                <span class="  pl-2   ">Clientes</span>
                </a>

                <a href="{{ route('areas.index') }}" id="empresa"
                class="flex items-center text-sm font-medium  py-2 px-2 hover:bg-gray-500 hover:text-white hover:text-base rounded-md transition duration-150 ease-in-out">
                <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                    </path>
                </svg>
                <span class="  pl-2   ">Area</span>
                </a>

                {{-- <a href="{{ route('areas.index') }}" id="empresa"
                class="flex items-center text-sm font-medium  py-2 px-2 hover:bg-gray-500 hover:text-white hover:text-base rounded-md transition duration-150 ease-in-out">
                <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                    </path>
                </svg>
                <span class="  pl-2   ">Roles</span>
                </a> --}}


            </div> <!-- termina la barra lateral inzquierda-->

        </div>



        <div  class=" w-full">
            <!-- ml-64-->

            <div class=" ">
                {{-- <div class="lg:bg-blue-500 md:bg-red-300 xl:bg-yellow-400 2xl:bg-purple-600 sm:bg-black bg-gray-400">
                    <label>
                        celu = plomo,
                        sm 640px = black ,
                        md 768px = rojo ,
                        lg 1024px = azul ,
                        xl 1280px = amariilo ,
                        2xl 1536px = purpura ,
                    </label>
                </div> --}}

                @yield('Contenido')
            </div>

        </div>

    </div>

    {{-- <script src="js/graph.js" type="text/javascript"></script>
        <script>
            var user = document.getElementById("user-chart").nodeName;
            var chart = new Graph({
                data: [1, 20, 5, 6, 8],
                target: document.querySelector(user),
            });
        </script> --}}
    {{-- <input type="hidden" id="bool_div_menu" value="cerrado"> --}}
    {{-- <script src="{{ asset('js/desplegar_nav2.js') }}"></script> --}}

</body>

</html>
