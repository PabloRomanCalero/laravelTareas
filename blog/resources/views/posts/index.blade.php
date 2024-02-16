@extends('plantilla')
@section('titulo', 'Listado Posts')
@section('contenido')
    <br><br>
    <div class="container">
        <h1>Listado de posts</h1>
        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title">{{$post->titulo}}</h2>
                    <p class="card-text">{{$post->contenido}}</p>
                    <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">Ver</a>
                    <form action="{{route('posts.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar" class="btn btn-danger"/>
                    </form>
                    
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    </div>
@endsection
