<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InicioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CRecursosController;
use App\Http\Controllers\RefugiosController;
use App\Http\Controllers\SaludController;
use App\Http\Controllers\PostController;

/* Conexión directa a Inicio */ 
Route::get('/', [InicioController::class, 'index'])->name('inicio');

/* Login y Registro - AGREGA LA RUTA GET */
Route::get('/login', [InicioController::class, 'index'])->name('login'); // Redirige a inicio si no tienes vista de login
Route::post('/login', [AuthController::class, 'login']);

Route::get('/registrar', [InicioController::class, 'index'])->name('registrar'); // Redirige a inicio si no tienes vista de registro
Route::post('/registrar', [AuthController::class, 'registrar']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/* Conexión a vistas */
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/centro-recursos', [CRecursosController::class, 'index'])->name('centro-recursos');
Route::get('/salud', [SaludController::class, 'index'])->name('salud');
Route::get('/refugios', [RefugiosController::class, 'index'])->name('refugios');

/* Guías - pública para ver */
Route::get('/guias', [PostController::class, 'index'])->name('guias');

/* Rutas protegidas */
Route::middleware('auth')->group(function () {
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

});
