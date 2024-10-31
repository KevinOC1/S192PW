<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorvistas;

Route::get('/',[controladorvistas::class, 'principal'])->name('rutaprincipal');

Route::get('/re', [controladorvistas::class, 'registro'])->name('rutaregistro');