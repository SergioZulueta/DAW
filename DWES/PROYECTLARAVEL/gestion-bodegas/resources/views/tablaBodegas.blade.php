@extends("index")
@section("contenido")
    <form action="/anadirBodega" method="get">
        <input type="submit" class="btn btn-primary" value="Añadir Bodega">
        <br><br>
    </form>
    <table class="table">
        <tr>
            <th>Nombre</th>
            <th>Localizacion</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        @foreach($bodegas as $bodega)
            <tr>
                <td>{{$bodega->nombre}}</td>
                <td>{{$bodega->direccion}}</td>
                <td>{{$bodega->telefono}}</td>
                <td>{{$bodega->email}}</td>
                <td>
                    <form action="/borrarBodega/{{$bodega->id}}" method="get">
                        <input type="submit" class="btn btn-primary" value="Eliminar">
                    </form>
                    <form action="/detalleBodega/{{$bodega->id}}" method="get">
                        <input type="submit" class="btn btn-primary" value="Entrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
