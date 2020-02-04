@extends('layouts.app')

@section('content')

    <a href="{{route('createPruebas')}}">Crear prueba</a>

    <table>
        <tr>
            <th>codigo</th>
            <th>titulo</th>
            <th>subtitulo</th>
            <th>telefono</th>
            <th>botonera</th>
        </tr>
        @foreach($pruebas as $prueba)
            <tr>
                <td>{{$prueba->id}}</td>
                <td>{{$prueba->titulo}}</td>
                <td>{{$prueba->subtitulo}}</td>
                <td>{{$prueba->telefono}}</td>
                <td><a href="{{route('showPruebas', $prueba->id)}}">Ver</a>
                    <a href="{{route('editPruebas', $prueba->id)}}">Edi</a>
                    <a href="{{route('pruebaDelete', $prueba->id)}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

@endsection
