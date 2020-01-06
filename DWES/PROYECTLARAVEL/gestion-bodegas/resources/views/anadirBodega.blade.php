@extends("index")
<p>Nueva bodega</p>


<form action="/add" method="get">
    <div class="form-group">
        <label>Nombre</label>
        <input class="form-control" type="text" name="nombre" placeholder="Nombre" required>
        <label>Direccion</label>
        <input class="form-control" type="text" name="direccion" placeholder="Direccion" required>
        <label>Email</label>
        <input class="form-control" type="text" name="email" placeholder="Email" required>
        <label>Telefono</label>
        <input class="form-control" type="text" name="telefono" placeholder="Telefono" required>
        <label>Persona de contacto</label>
        <input class="form-control" type="text" name="contacto" placeholder="Persona de contacto" required>
        <label>Año de fundacion</label>
        <input class="form-control" type="text" name="año" placeholder="Año de fundacion" required>
        <label>Dispone de restaurante</label><br>
        <input type="radio" name="restaurante" value="1">Si<br>
        <input type="radio" name="restaurante" value="0">No<br>
        <label>Dispone de hotel</label><br>
        <input type="radio" name="hotel" value="1">Si<br>
        <input type="radio" name="hotel" value="0">No<br>
        <br>
        <input type="hidden" name="accion" value="insertar">
        <input type="submit" class="btn btn-primary" value="Añadir">
    </div>
</form>
