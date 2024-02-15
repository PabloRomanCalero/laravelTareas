@extends('plantilla')
@section('titulo', 'Autor nuevo')
@section('contenido')

    <div class="container mt-5">
        <h2>Formulario de Autor</h2>
        
        <form action="{{ route('autores.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="nacimiento" class="form-label">Nacimiento:</label>
                <input type="text" class="form-control" id="nacimiento" name="nacimiento" required>
            </div>

            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>

    <div class="container mt-5">
        <h1 class="mb-4">Lista de Autores</h1>

        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Nacimiento</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($autores as $autor)
                    <tr>
                        <td>{{$autor['nombre']}}</td>
                        <td>{{$autor['nacimiento']}}</td>
                        <td>
                        <form action="{{ route('autores.destroy', $autor['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Borrar" />
                        </form>

                        <form action="{{ route('autores.edit', $autor['id']) }}" method="GET">
                            @csrf
                            <input type="submit" class="btn btn-warning" value="Modificar"/>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
