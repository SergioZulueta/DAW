<?php
include ("funciones.php");


$dbh = connect();

if(isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    switch ($accion) {
        case 'insertar':
            $nombre = $_GET["nombre"];
            $apellidos = $_GET["apellidos"];
            insertar($dbh, $nombre, $apellidos);
            break;
        case 'eliminar':
            $id = $_GET["id"];
            eliminarPorId($dbh,$id);
            break;
        case 'delete':
            delete($dbh);
    }
}
$items = consulta($dbh);
include ("vistas/ejercicio2.php");

?>
