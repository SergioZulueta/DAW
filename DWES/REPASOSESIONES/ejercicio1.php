<?php

function guardarCookie($item){
    setcookie("usuario", $item, time() + 7);
}

function mostrarCookie($cookie){
    echo $cookie;
}

if (isset($_COOKIE["usuario"])){
    mostrarCookie($_COOKIE["usuario"]);
}

if (isset($_GET["texto"]) && !empty($_GET["texto"])){
    guardarCookie($_GET["texto"]);
}

?>

<html>
<head>
    <title>Ejer11</title>
</head>
<body>

<form action="ejercicio11.php" method="get">
    <label>Introduce el texto que desee almacenar</label>
    <input type="text" name="texto">
    <input type="submit" value="Guardar">
</form>

</body>
</html>