<?php
include ("funciones.php");
include ("vistas/ejercicio2.php");

$dbh = connect();

if(isset($_POST["accion"])) {
    $accion = $_POST["accion"];
    switch ($accion) {
        case 'insertar':
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            insertar($dbh, $nombre, $apellidos);
            break;
        case 'eliminar':
            $id = $_POST["id"];
            eliminarPorId($dbh,$id);
            break;
        case 'eliminarid':
            delete($dbh);
    }
}

$items = consulta($dbh);
?>
