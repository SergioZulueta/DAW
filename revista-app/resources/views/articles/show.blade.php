@extends('layouts.app')

@section('seccion')
    <!-- No mostramos nada -->
@endsection

@section('content')
<section>
    <div class="container my-3 pt-2">
        <div class="row justify-content-md-center">
            <div class="col-md-8 pt-4">
                <h1 class="text-center">{{ $article->title }}</h1>
                <p class="lead mb-4 text-center">{{ $article->subtitle }}</p>
                <p>
                    {{ $article->body }}
                </p>
            </div>
        </div>
    </div>
</section>
<section class="bg-secondary pt-md-3">
    <div class="container">
        <div class="row row justify-content-md-center">
            @if(Auth::check())
                <div class="col-md-8 py-2">
                    <h4 class="mb-4 text-white">Escribir comentario</h4>
                        <div class="card mb-4 box-shadow">
                            <div class="card-body">
                                <form action="{{ route('comments.store',$article->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <textarea class="form-control" id="text" name="text" rows="3" placeholder="Tu comentario..."></textarea>
                                    </div>
                                    <button class="btn bg-dark text-white float-right">Enviar comentario</button>
                                </form>
                            </div>
                        </div>

                </div>
                <div class="col-md-8 py-2">
                    <h4 class="mb-4 text-white">Comentarios ({{ count($article->comments) }})</h4>
                    @foreach($article->comments as $comment)
                        <div class="card mb-4 box-shadow">
                            <div class="card-body">
                                <p class="card-text">{{ $comment->text }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">{{ $comment->created_at }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        @else
            <div class="col-md-8 py-2">
                <h4 class="mb-4 text-white">Comentarios</h4>
                <div class="card mb-4 box-shadow">
                    <div class="card-body">
                        <p>Para escribir o leer comentarios tienes que <a href="/login">iniciar sesión</a>.</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>

    <!-- Simple y viejo:
    <h3>Article details:</h3>
    <table>
        <tr>
            <td>ID</td>
            <td>{{ $article->id }}</td>
        </tr>
        <tr>
            <td>Titulo</td>
            <td>{{ $article->title }}</td>
        </tr>
        <tr>
            <td>Subtitulo</td>
            <td>{{ $article->subtitle }}</td>
        </tr>
        <tr>
            <td>Texto</td>
            <td>{{ $article->body }}</td>
        </tr>
    </table>
    <h4>Nuevo comentario:</h4>
    <form action="/articles/{{ $article->id }}/comments" method="POST">
        @csrf
        <div class="form-group">
            <label for="text">Comentario:</label>
            <textarea class="form-control" id="text" name="text" rows="3"></textarea>
        </div>
        <button>Enviar comentario</button>
    </form>
    <h4>Comentarios:</h4>
    <ul>
        @foreach($article->comments as $comment)
            <li>{{ $comment->text }}</li>
        @endforeach
    </ul>



@endsection
