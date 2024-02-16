@extends('plantilla')
@section('titulo', 'Ficha post')
@section('contenido')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Ficha del post {{$post->id}}</h1>
                <h2>{{$post->titulo}}</h2>
                <p>{{$post->contenido}}</p>
                <p>{{$post->created_at}}</p>
                <p>{{$post->updated_at}}</p>
            </div>
        </div>
    </div>
@endsection