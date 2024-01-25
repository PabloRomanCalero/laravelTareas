<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\CortoController;
use App\Http\Controllers\librosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    
    Route::get('/', [homeController::class, 'index'])->name('home');
    Route::get('libros', [librosController::class, 'index'])->name('listado_libros');
    Route::get('cortos', [CortoController::class, 'index'])->name('listado_cortos'); 
    Route::get('detallesCortos/{id}', [CortoController::class, 'show'])->name('detalles_corto'); 

