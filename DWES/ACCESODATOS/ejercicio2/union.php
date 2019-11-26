<?php
include ("funciones.php");


$dbh = connect();

if(isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    switch ($accion) {
        case 'insertar':
            $data = array(
                'nombre' => $_GET["nombre"],
                'apellidos' => $_GET["apellidos"]
            );
            insertar($dbh, $data);
            break;
        case 'eliminar':
            $id = $_GET["id"];
            eliminarPorId($dbh,$id);
            break;
        case 'delete':
            $id = $_GET["id"];
            echo delete($dbh, $id);
    }
}
$items = consulta($dbh);
include ("vistas/ejercicio2.php");

?>
