@extends('layouts.app')

@section('content')

    <form action="{{route('pruebaStore')}}" method="post">
    @csrf
        <label>Titulo</label>
        <input type="text" name="titulo" value="{{$prueba->titulo ?? ''}}">
        <label>Subitulo</label>
        <input type="text" name="subtitulo" value="{{$prueba->subtitulo ?? ''}}">
        <label>Telefono</label>
        <input type="text" name="telefono" value="{{$prueba->telefono ?? ''}}">

        <input type="submit" value="Guardar">
    </form>

@endsection
