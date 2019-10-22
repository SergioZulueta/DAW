<!--
/*
15. Crea un array con marcas de coches y una función que imprima por pantalla
una lista con todos los nombres utilizando la sentencia do-while.
*/
-->

<html>
<head>
    <title>Hola mundo PHP</title>
</head>
<body>

<?php

$arrayCoches = array("audi", "seat", "mercedes", "bmw");
$x=0;

do{
    echo $arrayCoches[$x] + "<br>";
}while($x <= 4);

?>
</body>
</html>