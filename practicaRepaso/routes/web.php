<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorTodo;

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', [controladorTodo::class, 'home'])->name('rutainicio');
Route::get('/repaso', [controladorTodo::class, 'repaso'])->name('rutarepaso');
Route::post('/convertir', [controladorTodo::class, 'convertir'])->name('rutaconvertir');