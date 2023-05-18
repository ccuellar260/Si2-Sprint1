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
    <section class="bg-light py-5 border-bottom" id="costumer">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <span class="badge rounded-pill text-info w-10 mt-n2 mx-auto mb-4"
                    style="background-color: #b0d1f5">Precios</span>
                <h2 class="text-center mb-3" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                    <b>Accede a nuestros planes de suscripcion flexibles</b>
                </h2>
                <p class="text-center mb-5">Precios que se escalan con su negocio de inmediato.</p>
                <div class="row">
                    <!--Precio barato-->
                    {{-- <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card bg-gradient-light shadow-lg">
                                <span
                                    class="badge rounded-pill bg-gray-400 text-dark w-30 mt-n2 mx-auto text-center">Starter</span>
                                <div class="card-header text-center bg-transparent pt-4 pb-3">
                                    <h1 class="font-weight-bold mt-2 text-dark"
                                        style="font-family: Arial, Helvetica, sans-serif">
                                        <small class="text-lg mb-auto">$</small>29<small
                                            class="text-lg">/mo</small>
                                    </h1>
                                </div>
                                <div class="card-body text-lg-start text-center pt-0">
                                    <a href="{{ route('registrar.index', 1) }}" class="btn btn-icon bg-info d-lg-block mt-3 mb-4 text-white">
                                        Try Starter
                                        <i class="fas fa-arrow-right ms-1"></i>
                                    </a>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto text-white">done</i>
                                        <span class="ps-3 text-dark">2 team members</span>
                                    </div>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto text-white">done</i>
                                        <span class="ps-3 text-dark">20GB Cloud storage </span>
                                    </div>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto">done</i>
                                        <span class="ps-3 text-dark">Integration help </span>
                                    </div>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto">remove</i>
                                        <span class="ps-3 text-dark">Sketch Files </span>
                                    </div>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto text-white">remove</i>
                                        <span class="ps-3 text-dark">API Access </span>
                                    </div>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto text-white">remove</i>
                                        <span class="ps-3 text-dark">Complete documentation </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!--Precio Premium-->
                    {{-- @foreach ($planes as $plan) --}}
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card bg-gradient-light shadow-lg">
                                <span class="badge rounded-pill w-30 mt-n2 mx-auto" style="background-color: #0AD149"></span>
                                <div class="card-header text-center pt-4 pb-3 bg-transparent">
                                    <h1 class="font-weight-bold mt-2 text-dark"
                                        style="font-family: Arial, Helvetica, sans-serif">
                                        <small class="text-lg mb-auto">$</small><small
                                            class="text-lg">/mo</small>
                                    </h1>
                                </div>
                                <div class="card-body text-lg-start text-center pt-0">
                                    <a href="#"
                                        class="btn btn-icon bg-info d-lg-block mt-3 mb-4 text-white">
                                        Try
                                        <i class="fas fa-arrow-right ms-1"></i>
                                    </a>

                                    <div class="p-2 text-center">
                                        <span class="text-dark"><b class="text-center"></b></span>
                                    </div>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto text-dark">done</i>
                                        <span class="ps-3 text-dark"> team members</span>
                                    </div>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto text-dark">done</i>
                                        <span class="ps-3 text-dark">GB Cloud storage </span>
                                    </div>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto text-dark">done</i>
                                        <span class="ps-3 text-dark">Integration help </span>
                                    </div>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto text-dark">done</i>
                                        <span class="ps-3 text-dark">Sketch Files </span>
                                    </div>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto text-dark">remove</i>
                                        <span class="ps-3 text-dark">API Access </span>
                                    </div>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto text-dark">remove</i>
                                        <span class="ps-3 text-dark">Complete documentation </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                    <!--Precio corporativo-->
                    {{-- <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card bg-gradient-light shadow-lg">
                                <span
                                    class="badge rounded-pill bg-gray-400 text-dark w-30 mt-n2 mx-auto">Corporativo</span>
                                <div class="card-header text-center pt-4 pb-3 bg-transparent">
                                    <h1 class="font-weight-bold mt-2 text-dark"
                                        style="font-family: Arial, Helvetica, sans-serif">
                                        <small class="text-lg mb-auto">$</small>59<small
                                            class="text-lg">/mo</small>
                                    </h1>
                                </div>
                                <div class="card-body text-lg-start text-center pt-0">
                                    <a href="{{ route('registrar.index', 3) }}" class="btn btn-icon bg-info d-lg-block mt-3 mb-4 text-white">
                                        Try Corporativo
                                        <i class="fas fa-arrow-right ms-1"></i>
                                    </a>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto text-dark">done</i>
                                        <span class="ps-3 text-dark">10 team members</span>
                                    </div>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto text-dark">done</i>
                                        <span class="ps-3 text-dark">40GB Cloud storage </span>
                                    </div>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto text-dark">done</i>
                                        <span class="ps-3 text-dark">Integration help </span>
                                    </div>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto text-dark">done</i>
                                        <span class="ps-3 text-dark">Sketch Files </span>
                                    </div>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto text-dark">remove</i>
                                        <span class="ps-3 text-dark">API Access </span>
                                    </div>

                                    <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                        <i class="material-icons my-auto text-dark">remove</i>
                                        <span class="ps-3 text-dark">Complete documentation </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

</body>
</html>
