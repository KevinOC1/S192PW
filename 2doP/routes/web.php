<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlapeticiones;

Route::get('/',[controlapeticiones::class, 'inicio'])->name('rutaform');
Route::post('/registrarusuaro', [controlapeticiones::class, 'inicioC'])->name('rutare');