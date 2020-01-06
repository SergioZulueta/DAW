@extends("index")
<h2>Detalle vino</h2>

<form action="/index" method="get">
    <input type="submit" class="btn btn-primary" value="Volver">
</form>
<form action="/borrarVino/{{$vino->id}}" method="get">
    <input type="submit" class="btn btn-primary" value="Eliminar">
</form>

<form action="/guardarVino" method="get">
    <div class="form-group">
        <input type="hidden" name="id" value="{{$vino->id}}">
        <label>Nombre</label>
        <input class="form-control" type="text" name="nombre" value="{{$vino->nombre}}">
        <label>Descripcion</label>
        <input class="form-control" type="text" name="descripcion" value="{{$vino->descripcion}}">
        <label>Año</label>
        <input class="form-control" type="text" name="año" value="{{$vino->año}}">
        <label>Alcohol</label>
        <input class="form-control" type="text" name="alcohol" value="{{$vino->alcohol}}">
        <label>Tipo de Vino</label>
        <input class="form-control" type="text" name="tipo" value="{{$vino->tipo}}">
        <br><br>
        <input type="submit" value="Actualizar Vino">
    </div>
</form>






