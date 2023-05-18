<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('planes');
})->name('planes');


// Route::get('/plane', function () {
//     return view('planes');
// });



Route::resource('empleados', EmpleadoController::class)->names('empleados');
Route::resource('clientes', ClienteController::class)->names('clientes');
Route::resource('areas', AreaController::class)->names('areas');
