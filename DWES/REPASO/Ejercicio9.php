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
    "user4" => array(
        "nombre" => "castillito",
        "apellido" => "tontito",
        "gmail" =>"gabriel@gmail.com"
    ),
);
$dato = "user4";
$valor = "nombre";

function getDatos($arrayDiccionario, $dato, $valor){

    return $arrayDiccionario[$dato][$valor];

}

?>

<html>
<head>
    <title>Ejer9</title>
</head>
<body>

<?= getDatos($arrayDiccionario, $dato, $valor)?>

</body>
</html>