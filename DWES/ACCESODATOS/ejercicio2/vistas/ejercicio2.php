<?php
include("partials/header.php");

?>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>ELIMINAR</th>
    </tr>
    </thead>
    <tbody>

        <?php
        foreach ($items as $item) {
            echo "<tr><td> {$item->id}</td> ";
            echo "<td> {$item->nombre} </td> ";
            echo "<td> {$item->apellidos} </td>";
            echo "<td> (<a href='../../../ACCESODATOS/ejercicio2/union.php?accion=eliminar&id={$item->id}'>Eliminar</a>)</td></tr>";
        }
        ?>
    </tr>

    </tbody>
</table>
</div>
</table>
<form action="../../../ACCESODATOS/ejercicio2/union.php" method="get">
    <input type="text" name="nombre" placeholder="nombre" required>
    <input type="text" name="apellidos" placeholder="apellidos" required>
    <input type="hidden" name="accion" value="insertar">
    <input type="submit" value="Añadir">
</form>

<form action="../../../ACCESODATOS/ejercicio2/union.php" method="get">
    <input type="text" name="id" placeholder="id" required>
    <input type="hidden" name="accion" value="delete">
    <input type="submit" value="borrar" name="borrar">
</form>

<?php
include("partials/footer.php");
?>