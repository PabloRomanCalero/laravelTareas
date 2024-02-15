@extends('plantilla')
@section('titulo', 'Detalles de Corto')
@section('contenido')
<div class="container">
    <div class="row">
        @forelse ($cortos as $corto)
        @if($corto['id'] == $id)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{ $corto["titulo"] }}</h2>
                        <h4 class="card-subtitle mb-3">{{ $corto["director"] }}</h4>
                        <p class="card-text">{{ $corto["sinapsis"] }}</p>
                        <a href="{{route('listado_cortos')}}" class="nav-link">Volver</a>
                    </div>
                </div>
            </div>
        @endif
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