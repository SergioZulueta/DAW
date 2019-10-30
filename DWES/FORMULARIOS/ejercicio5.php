<html>
<head>
    <title>Hola mundo PHP</title>
</head>


<?php

$arrayUsuarios = array(
    "user1" => array(
        "nombre" => "ane",
        "apellido" => "lopez",
        "password" => "123Abc"
    ),
    "user2" => array(
        "nombre" => "Amaia",
        "apellido" => "Otsoa",
        "password" => "456Xyz"
    )
);

function comprobar($arrayUsuarios){
    $clavesArray=array_keys($arrayUsuarios[0]);
    $usuario=false;
    foreach ($clavesArray as $value){
        if ($value==$_GET['usuario']){
            $usuario=true;
        }
    }
    if ($usuario){
        $password=false;
        foreach ($arrayUsuarios[0] as $key=>$value){
            if ($key=='password'){
                if ($value==$_POST['password']){
                    $password=true;
                }
            }
        }
        if ($password){
            echo "Bienvenido";
        }else{
            echo "Error";
        }
    }
    else{
        echo "error";
    }
}

?>


<body>

<?php

if (isset($_POST["enviar"])){
    comprobar();
}

?>

<form action="ejercicio4.php" method="post">
    <fieldset>
        <legend>Usuario y contraseña</legend>
        <strong>Introduce tu nombre de usuario</strong>
        <input type="text" name="usuario"><br>
        <strong>Introduce tu  contraseña</strong>
        <input type="password" name="password">


        <p><input type="submit" value="enviar" name="enviar"></p>
    </fieldset>
</form>
</body>
</html>     g