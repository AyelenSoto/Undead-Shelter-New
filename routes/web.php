<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InicioController;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CRecursosController;
use App\Http\Controllers\GuiasController;
use App\Http\Controllers\RefugiosController;
use App\Http\Controllers\SaludController;

/* Conexión directa a Inicio */ 
Route::get('/', [InicioController::class, 'index']);

/*  Login y Registro*/
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/registrar', [AuthController::class, 'registrar'])->name('registrar');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/* Conexión a vistsas*/
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/centro-recursos', [CRecursosController::class, 'index'])->name('centro-recursos');
Route::get('/salud', [SaludController::class, 'index'])->name('salud');
Route::get('/refugios', [RefugiosController::class, 'index'])->name('refugios');
Route::get('/guias', [GuiasController::class, 'index'])->name('guias');