@extends("index")
<p>Detalle bodega</p>


<form action="/index" method="get">
    <input type="submit" class="btn btn-primary" value="Volver">
</form>
<form action="/borrarBodega/{{$bodega->id}}" method="get">
    <input type="submit" class="btn btn-primary" value="Eliminar">
</form>
<form action="/updateBodega/{{$bodega->id}}" method="get">
    <div class="form-group">
        <input type="hidden" name="id_bodega" value="{{$bodega->id}}">
        <label>Nombre</label>
        <input class="form-control" type="text" name="nombre" value="{{$bodega->nombre}}" required>
        <label>Direccion</label>
        <input class="form-control" type="text" name="direccion" value="{{$bodega->direccion}}" required>
        <label>Email</label>
        <input class="form-control" type="text" name="email" value="{{$bodega->email}}" required>
        <label>Telefono</label>
        <input class="form-control" type="text" name="telefono" value="{{$bodega->telefono}}" required>
        <label>Persona de contacto</label>
        <input class="form-control" type="text" name="contacto" value="{{$bodega->contacto}}" required>
        <label>Año de fundacion</label>
        <input class="form-control" type="text" name="año" value="{{$bodega->año}}" required>
        <label>Dispone de restaurante</label><br>
        @if($bodega->restaurante == 1)
            <input type="radio" name="restaurante" value="1" checked>Si<br>
            <input type="radio" name="restaurante" value="0">No<br>
        @else
            <input type="radio" name="restaurante" value="1">Si<br>
            <input type="radio" name="restaurante" value="0" checked>No<br>
        @endif
        <label>Dispone de hotel</label><br>
        @if($bodega->hotel == 1)
            <input type="radio" name="hotel" value="1" checked>Si<br>
            <input type="radio" name="hotel" value="0">No<br>
        @else
            <input type="radio" name="hotel" value="1">Si<br>
            <input type="radio" name="hotel" value="0" checked>No<br>
        @endif
        <br>
        <input type="hidden" name="accion" value="update">
        <input type="submit" class="btn btn-primary" value="Actualizar bodega">
    </div>
</form>

<table class="table">
    <tr>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Acciones</th>
    </tr>
    <h2>Vinos disponibles</h2>
    <form action="/anadirVino" method="get">
        <input type="submit" class="btn btn-primary" value="Añadir Vino">
        <br><br>
    </form>
    @foreach($vinos as $vino)
        <tr>
            <td>{{$vino->nombre}}</td>
            <td>{{$vino->tipo}}</td>
            <td>
                <form action="/detalleVino/{{$vino->id}}" method="get">
                    <input type="submit" class="btn btn-primary" value="Ver">
                </form>
                <form action="/borrarVino/{{$vino->id}}" method="get">
                    <input type="submit" class="btn btn-primary" value="Eliminar">
                </form>
        </tr>
    @endforeach
</table>
