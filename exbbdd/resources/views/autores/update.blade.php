@extends('plantilla')
@section('titulo', 'Autor nuevo')
@section('contenido')

    <div class="container mt-5">
        <h2>Modificar Autor</h2>
        
        <form action="{{ route('autores.update', $autor['id'])}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="titulo" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$autor['nombre']}}" required>
            </div>

            <div class="mb-3">
                <label for="editorial" class="form-label">Nacimiento:</label>
                <input type="text" class="form-control" id="nacimiento" name="nacimiento" value="{{$autor['nacimiento']}}" required>
            </div>
            <br>
            <input type="hidden" id="id" name="id" value="{{$autor['id']}}">
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>

@endsection