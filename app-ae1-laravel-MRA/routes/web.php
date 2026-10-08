<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

//Ruta 1
Route::get('/', function () {
    return 'Bienvenido a mi primera aplicación Laravel';
});

//Ruta 2
Route::get('/info', function () {
    return 'Aplicación realizada por: Mario Rodríguez 2º DAW: Introducción a Laravel';
});

//Ruta 3
Route::get('/saludo/{nombre}', function ($nombre) {
    return "Hola, {$nombre}. Bienvenida a Laravel.";
});