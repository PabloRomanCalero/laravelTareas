@extends('plantilla')
@section('titulo', 'Listado de Cortos')
@section('contenido')
<div class="container">
    <div class="row">
        @forelse ($cortos as $corto)
        
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{ $corto["titulo"] }}</h2>
                        <h4 class="card-subtitle mb-3">{{ $corto["director"] }}</h4>
                        <p class="card-text">{{ $corto["sinapsis"] }}</p>
                        <a href="{{ route('detalles_corto', $corto['id']) }}" class="btn btn-primary">Detalles</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">No se encontraron cortos</p>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection