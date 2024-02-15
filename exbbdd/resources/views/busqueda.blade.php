@extends('plantilla')
@section('titulo', 'Busqueda Libros')
@section('contenido')

    <div class="container mt-5">
        <h2>Busqueda Libros por autor</h2>
        
        <form action="{{route('resultBusqueda')}}" method="get">
            @csrf
            <div class="mb-3">
                <select id="autor" name="autor" class="form-select">
                <option value="" disabled selected>Seleccionar autor</option>
                    @foreach($autores as $autor)
                        <option value="{{$autor['id']}}" required>{{$autor['nombre']}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>

@endsection