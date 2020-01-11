@extends("index")
<h2>Nuevo vino</h2>

<form action="/addVino" method="get">
    <div class="form-group">
        <label>Nombre</label>
        <input class="form-control" type="text" name="nombre" placeholder="Nombre" required>
        <label>Descripcion</label>
        <textarea class="form-control" name="descripcion" placeholder="descripcion" required></textarea>
        <label>Año</label>
        <input class="form-control" type="text" name="año" placeholder="Año" required>
        <label>Alcohol</label>
        <input class="form-control" type="text" name="alcohol" placeholder="Porcentaje de alcohol" required>
        <label>Tipo de Vino</label>
        <select name="tipo" class="form-control">
            <option value="Tinto" name="tipo">Tinto</option>
            <option value="Blanco" name="tipo">Blanco</option>
            <option value="Rosado" name="tipo">Rosado</option>
        </select>
        <br><br>
        <input type="hidden" name="id_bodega" value="{{$id_bodega}}">
        <input type="hidden" name="accion" value="insertar">
        <input type="submit" class="btn btn-primary" value="Añadir">
    </div>
</form>
