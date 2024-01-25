<?php

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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('hola', function () {
    return 'hola';
});

Route::get('listado1', function() {
    $libros = array(
    array("titulo" => "El juego de Ender",
    "autor" => "Orson Scott Card"),
    array("titulo" => "La tabla de Flandes",
    "autor" => "Arturo Pérez Reverte"),
    array("titulo" => "La historia interminable",
    "autor" => "Michael Ende"),
    array("titulo" => "El Señor de los Anillos",
    "autor" => "J.R.R. Tolkien")
    );
    return view('inicio', compact('libros'));
})->name('listado_libros1');

Route::get('listado2', function() {
    
    $libros = array(
    array("titulo" => "El juego de Ender",
    "autor" => "Orson Scott Card"),
    array("titulo" => "La tabla de Flandes",
    "autor" => "Arturo Pérez Reverte"),
    array("titulo" => "La historia interminable",
    "autor" => "Michael Ende"),
    array("titulo" => "El Señor de los Anillos",
    "autor" => "J.R.R. Tolkien")
    );
    $count = (count($libros));
    return view('inicio', compact('libros')) -> with('count', $count);
})->name('listado_libros2');

//El orden entre las anteriores y la siguiente se debe tener en cuenta ya que el sguiente pilla cualquiera que le metas excepto de las anteriores que son rutas fijas

Route::get('{nombre}', function ($nombre) {
    return view('inicio') -> with('nombre', $nombre);
});

Route::get('/inicio/{nombre}', function ($nombre) {
    return view('inicio') -> with('nombre', $nombre);
});

Route::get('/inicio/{nombre}/{apellido}', function ($nombre, $apellido) {
    return view('inicio') -> with(['nombre' => $nombre, 'apellido' => $apellido]);
});




