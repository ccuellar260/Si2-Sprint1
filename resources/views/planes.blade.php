<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>
<body>

    <!-- component -->
<style>
    @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
    </style>

    <div class="min-w-screen min-h-screen bg-white">
        <div class="flex flex-row-reverse justify-between m-5">
            <a href="{{ route('empleados.index') }}"
            class="rounded-lg border bg-gray-600 text-white px-2 py-1" >Ir a Home
            </a>
        </div>



        <div class="w-full mx-auto bg-white px-5  text-gray-600 mb-10">
            <div class="text-center max-w-xl mx-auto ">
                <h1 class="text-5xl md:text-6xl font-bold mb-14 mt-10">PLANES</h1>
                {{-- <h3 class="text-xl font-medium mb-10">Lorem ipsum dolor sit amet consectetur adipisicing elit repellat dignissimos laboriosam odit accusamus porro</h3> --}}
            </div>
            <div class="w-10/12 mx-auto md:flex ">
                <div class="w-full border  md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4 ">BASICO</h2>
                        <h3 class="text-center font-bold text-4xl mb-5">$620/mes</h3>
                        <ul class="text-sm px-5 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> 2 Miembros </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> 1GB Almacenamiento</li>
                            {{-- <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> </li> --}}
                        </ul>
                    </div>
                    <div class="w-full">
                        <button class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full">Buy Now</button>
                    </div>
                </div>

                <div class="w-full border  md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:-mx-3 md:mb-0 rounded-md shadow-lg shadow-gray-600 md:relative md:z-50 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4">INTERMEDIO</h2>
                        <h3 class="text-center font-bold text-4xl md:text-5xl mb-5">$1700/semestre</h3>
                        <ul class="text-sm px-5 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> 2 Miembros </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> 1GB Almacenamiento</li>
                        </ul>
                    </div>
                    <div class="w-full">
                        <button class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full">Buy Now</button>
                    </div>
                </div>


                <div class="w-full border md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4">AVANZADO</h2>
                        <h3 class="text-center font-bold text-4xl mb-5">$6650/año</h3>
                        <ul class="text-sm px-5 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> 2 Miembros </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> 1GB Almacenamiento</li>
                        </ul>
                    </div>
                    <div class="w-full">
                        <button class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

</body>
</html>
