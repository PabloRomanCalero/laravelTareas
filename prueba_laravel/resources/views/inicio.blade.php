<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <h1>{{ isset($fecha) ? $fecha : '' }}</h1>
    <h2>Esto es el inicio de {{ isset($nombre) ? $nombre : '' }} {{ isset($apellido) ? $apellido : '' }}</h2>
    <a href="{{route('listado_libros1')}}">Listado libros1</a>
    <br><br>
    <a href="{{route('listado_libros2')}}">Listado libros2</a>
    @if (isset($libros))
        <h2>Listado de libros</h2>
        <ul>
        @forelse ($libros as $libro)
        <li>{{ $libro["titulo"] }} ({{ $libro["autor"] }})</li>
        @empty
        <li>No se encontraron libros</li>
        @endforelse
        <br>
        Numero de libros: {{isset($count) ? $count : ''}}
        </ul>
    
    @endif
    
</body>
</html>