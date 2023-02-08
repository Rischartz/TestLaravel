<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/servicios', function () {
    return 'Página de servicios';
});

Route::get('/detalle/{id}/{nombre}', function ($id, $nombre) {
    return 'Detalle '.$id . ' de '.$nombre;
})->where('nombre', '[a-zA-Z]+');*/

Route::get('/inicio', [InicioController::class, 'saludar']);