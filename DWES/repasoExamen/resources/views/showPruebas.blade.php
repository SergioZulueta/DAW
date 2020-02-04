@extends('layouts.app')

@section('content')

        <div>
            <input type="hidden" name="id_bodega" value="{{$prueba->id}}">

            <label>Titulo</label>
            <input type="text" name="titulo" value="{{$prueba->titulo}}">
            <label>Subitulo</label>
            <input type="text" name="titulo" value="{{$prueba->subtitulo}}">
            <label>Telefono</label>
            <input type="text" name="titulo" value="{{$prueba->telefono}}">
        </div>


    @endsection
