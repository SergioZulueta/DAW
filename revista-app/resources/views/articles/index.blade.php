@extends('layouts.app')

@section('seccion')
    <section class="index-lead text-center bg-white">
        <div class="container">
            <h1 class="jumbotron-heading">RevistaApp - Laravel</h1>
            <p class="lead text-muted">Lee y comenta todos nuestros artículos</p>
            <p>
                <a href="{{ route('articles.create') }}" class="btn btn-primary"><i class="fa fa-edit"></i>  Escribir artículo</a>
        </div>
    </section>
@endsection

@section('content')

    <!-- Tabla sencilla

    <a class="btn btn-primary" href="/articles/create">Crear un nuevo artículo</a>
    <table class="table">
        <tr>
            <td>ID</td><td>Titulo</td><td colspan="2">Acciones</td>
        </tr>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td><a class="btn btn-primary" href="/articles/{{ $article->id }}">Ver detalle</a></td>
                <td>
                    <form action="/articles/{{ $article->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    -->

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($articles as $article)
                    @include('articles.partials.article-card', ['article' => $article, 'read_articles' => $read_articles, 'favourites' => $favourites])
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('page-scripts')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    $('.leer').click(function() {
        var id = $(this).attr('id');
        //alert("id = " + id);
    });
});
</script>
@endsection


