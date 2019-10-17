<!--
/*
09. Crea un array multidimensional llamado “diccionario” que almacene para
cada usuario su nombre, apellidos e email. A continuación crea una función
llamada “getDatos()” que reciba el nombre de usuario y el dato a obtener
(nombre/apellidos/email) y lo muestre por pantalla.
getDatos(“diccionario”,“jvadillo”,”email”) → jvadillo@egibide.org
*/
-->

<html>
<head>
    <title>Hola mundo PHP</title>
</head>
<body>
<?php

$arrayDiccionario = array(
    "user1" => array(
        "nombre" => "sergio",
        "apellido" => "zulueta",
        "gmail" =>"sergio@gmail.com"
    ),
    "user2" => array(
        "nombre" => "jon",
        "apellido" => "vadillo",
        "gmail" =>"jon@gmail.com"
    ),
    "user3" => array(
        "nombre" => "gabriel",
        "apellido" => "tejedor",
        "gmail" =>"gabriel@gmail.com"
    ),
);

function getDatos($arrayDiccionario, $dato){

    return $dato ['user1'];
}

getDatos("user1", "apellido" );





?>
</body>
</html>