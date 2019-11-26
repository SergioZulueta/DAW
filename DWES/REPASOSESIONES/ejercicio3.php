<?php

function guardarCookie($contenidoCookie){
    setcookie("idioma", $contenidoCookie, time() + 60, "/");
}

function mostrarCookie($cookie){
    echo $cookie;
}

if (isset($_GET["idioma"])){
    guardarCookie($_GET["idioma"]);
}

if (isset($_COOKIE["idioma"])){
    mostrarCookie($_COOKIE["idioma"]);
}

?>

<html>
<head>
    <title>Ejer3</title>
</head>
<body>
<form action="ejercicio3.php" method="get">
    <label> Elige tu idioma</label>
        <select name="idioma">
            <option value="españolo">Españñññññña</option>
            <option value="euskañolo">euskañolo</option>
            <option value="catalanius">cataque</option>
        </select>
    <input type="submit" value="guardar">
</form>

</body>
</html>