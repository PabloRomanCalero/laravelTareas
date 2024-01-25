<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class librosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public array $libros = [
        array("titulo" => "El juego de Ender",
        "autor" => "Orson Scott Card"),
        array("titulo" => "La tabla de Flandes",
        "autor" => "Arturo Pérez Reverte"),
        array("titulo" => "La historia interminable",
        "autor" => "Michael Ende"),
        array("titulo" => "El Señor de los Anillos",
        "autor" => "J.R.R. Tolkien")
    ];
    public function index()
    {
        $libros = $this->libros;
        return view('ListaDeLibros', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
