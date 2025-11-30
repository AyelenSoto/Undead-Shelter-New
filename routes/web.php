<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CRecursosController;
use App\Http\Controllers\GuiasController;
use App\Http\Controllers\RefugiosController;
use App\Http\Controllers\SaludController;

/* Conexión directa a Inicio */ 
Route::get('/', [InicioController::class, 'index']);

/* Conexión a vistsas*/
Route::get('/home', [HomeController::class, 'index']);
Route::get('/centro-recursos', [CRecursosController::class, 'index']);
Route::get('/guias', [GuiasController::class, 'index']);
Route::get('/refugios', [RefugiosController::class, 'index']);
Route::get('/salud', [SaludController::class, 'index']); 