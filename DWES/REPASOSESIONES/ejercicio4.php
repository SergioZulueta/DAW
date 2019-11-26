<?php
session_start();










function funcionAccion($accion){
    switch ($accion){
        case "insertar":
            if (isset($_GET["usuario"]) && !empty($_GET["usuario"])){
                echo "bien";

            }else{
                echo "error";
            }
    }
}


if (isset($_GET["accion"])){
    $accion = $_GET["accion"];
    funcionAccion($accion);
}

?>

<html>
<head>
    <title>Ejer3</title>
</head>
<body>
<h1>Asistentes</h1>
<form action="ejercicio4.php" method="get">
    <input type="text" name="usuario">
    <input type="hidden" name="accion" value="insertar">
    <input type="submit" value="Añadir">
</form>
<a href="ejercicio4.php?accion=eliminar">Vaciar lista</a>

</body>
</html>