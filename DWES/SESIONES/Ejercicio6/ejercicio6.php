<html>
<head>
    <title>Hola mundo</title>
</head>
<body>
<?php
session_start();
$users = array(
    "aaa" => array(
        "nombre" => "serzulu",
        "contraseña" => "12345Abcde"
    ),
    "jasperoide1" => array(
        "nombre" => "gabi",
        "contraseña" => "feojajaxd"
    ),
);

$_SESSION["burrito"] = "1234";
$_SESSION["jasperoide1"] = "1212";
$_SESSION["aaa"] = "aaa";


function comprobarUsuario($user, $password, $array){
    if ($_SESSION[$user] == $password){
        $_SESSION["mensaje"] = "Bienvenido ".$user;
        header("Location: funciones.php");
    }
}
if (isset($_GET["user"]) && isset($_GET["password"])){
    if (isset($_SESSION[$_GET["user"] . "fallos"])){
        if ($_SESSION[$_GET["user"] . "fallos"] > 3){
            echo "<p>No se puede acceder a la página debido al número de fallo</p>";
        }else{
            comprobarUsuario($_GET["user"], $_GET["password"], $users);
            $_SESSION[$_GET["user"] . "fallos"]++;
        }
    }else{
        $_SESSION[$_GET["user"] . "fallos"] = 0;
    }

}
?>

<form action="ejercicio6.php" method="get">
    <label>Usuario</label>
    <input type="text" name="user">
    <br/>
    <label>Constraseña</label>
    <input type="password" name="password">
    <br/>
    <input type="submit" value="Guardar">
</form>

</body>
</html>
