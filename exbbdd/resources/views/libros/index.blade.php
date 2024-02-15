@extends('plantilla')
@section('titulo', 'Libro nuevo')
@section('contenido')

    <div class="container mt-5">
        <h2>Formulario de Libro</h2>
        
        <form action="{{ route('libros.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>

            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial:</label>
                <input type="text" class="form-control" id="editorial" name="editorial" required>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="number" class="form-control" id="precio" name="precio" required>
            </div>

            <div class="mb-3">
                <label for="autor" class="form-label">Autor:</label>
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

    <div class="container mt-5">
        <h1 class="mb-4">Lista de Libros</h1>

        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Editorial</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($libros as $libro)
                    <tr>
                        <td>{{$libro['titulo']}}</td>
                        <td>{{$libro['editorial']}}</td>
                        <td>{{$libro['precio']}}</td>
                        <td>
                            {{$libro->autor->nombre}}
                        </td>
                        <td>
                        <form action="{{ route('libros.destroy', $libro['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Borrar" />
                        </form>

                        <form action="{{ route('libros.edit', $libro['id']) }}" method="GET">
                            @csrf
                            <input type="submit" class="btn btn-warning" value="Modificar" />
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$libros->links()}}
    </div>

@endsection
