<?php

use App\Http\Controllers\LibroNuevoController;
use App\Http\Controllers\AutorNuevoController;
use App\Models\Autor;
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

Route::resource('libros', LibroNuevoController::class);
Route::resource('autores', AutorNuevoController::class);

Route::get('/', function(){
    return redirect()->route('libros.index');
});

Route::get('/busqueda', function(){ $autores = Autor::get();return view('busqueda', compact('autores'));})->name('busqueda');
Route::get('/resultBusqueda', [LibroNuevoController::class, 'buscarLibros'])->name('resultBusqueda');

