<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portada');
})->name ("portada");;

Route::get('/re', function () {
    return view('repaso1');
})->name ("repaso1");