<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorpeticiones;


Route::view('/', 'formUsuarios')->name('rutaform');
Route::post('/registrarusuaro', [controladorpeticiones::class, 'procesarusuario'])->name('rutare');