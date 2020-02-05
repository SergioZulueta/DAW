@extends('layouts.app')

@section('seccion')
    <!-- No mostramos nada -->
@endsection

@section('content')
    <section>
        <div class="container my-3 pt-2">
            <div class="row justify-content-md-center">
                <div class="col-md-8 pt-4">
                    <h4>Escribir artículo</h4>
                    <hr>
                    <form action="/articles/" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Título del artículo</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Titulo">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Subtítulo del artículo</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitulo">
                        </div>
                        <div class="form-group">
                            <label for="body">Texto</label>
                            <textarea class="form-control" id="body" name="body" rows="3"></textarea>
                        </div>
                        <button class="btn btn-primary float-right">Crear artículo</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection

