<?php
include ("../funciones.php");
$dbh = connect();
include ("header&footer/header.php");

?>

<?php

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

    $stmt = consulta($dbh);
    ?>
    <td>
        <?php
        foreach ($items as $item) {
            echo "{$item->texto} (<a href='../union.php?accion=eliminar&id={$item->id}'>Eliminar</a>)";
        }
        ?>
    </td>

    </tr>

    </tbody>
</table>
</div>
</table>
<form action="ejercicio2.php" method="post" name="form">
    <input type="text" name="nombre" placeholder="nombre" required>
    <input type="text" name="apellidos" placeholder="apellidos" required>
    <input type="hidden" name="accion" value="insertar">
    <input type="submit" value="Añadir">
</form>

<form action="ejercicio2.php" method="post" name="formEliminar">
    <input type="text" name="id" placeholder="id" required>
    <input type="submit" value="borrar" name="borrar">
</form>

<?php
include ("header&footer/footer.php");
?>