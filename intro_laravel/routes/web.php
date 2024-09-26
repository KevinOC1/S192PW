<?php

use Illuminate\Support\Facades\Route;

//Ruta tipo GET
/* Route::get('/', function () {
    return view('welcome');
}); */


//Ruta tipo VIEW
Route::get('/', function () {
    return view('inicio');
})->name('rutainicio');

Route::get('/form', function () {
    return view('formulario');
})->name('rutaformulario');

Route::get('/clientes', function () {
    return view('clientes');
})->name('rutaclientes');