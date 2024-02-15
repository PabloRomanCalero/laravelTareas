@extends('plantilla')
@section('titulo', 'Libro nuevo')
@section('contenido')

    <div class="container mt-5">
        <h2>Modificar Libro</h2>
        
        <form action="{{ route('libros.update', $libro['id'])}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{$libro['titulo']}}" required>
            </div>

            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial:</label>
                <input type="text" class="form-control" id="editorial" name="editorial" value="{{$libro['editorial']}}" required>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="number" class="form-control" id="precio" name="precio" value="{{$libro['precio']}}" required>
            </div>

            <div class="mb-3">
                <select id="autor" name="autor" class="form-select">
                <option value="" disabled selected>Seleccionar autor</option>
                    @foreach($autores as $autor)
                        <option value="{{$autor['id']}}" required>{{$autor['nombre']}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <input type="hidden" id="id" name="id" value="{{$libro['id']}}">
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>

@endsection