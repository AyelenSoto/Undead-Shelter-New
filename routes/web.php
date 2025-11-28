<?php

use Illuminate\Support\Facades\Route;

/* Conexión directa a Inicio */ 
Route::get('/', function () {
    return view('US-Inicio');
});
