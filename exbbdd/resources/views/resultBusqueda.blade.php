@extends('plantilla')
@section('titulo', 'Resultado Busqueda')
@section('contenido')

    <div class="container mt-5">
        <h2>Listado de libros del autor... {{$autor['nombre']}}</h2>
        @foreach($libros as $libro)
            <li>
                {{$libro['titulo']}}
            </li>
        @endforeach
        
    </div>

@endsection