<!--
/*
07. Crea dos arrays, uno con 4 tipos de animales ($animales) y otro con 4
nombres de colores ($colores).
■ Calcula el número de elementos de cada array.
■ Añade un elemento al final del array $animales utilizando una función.
■ Añade un elemento al principio del array $colores utilizando una función.
■ Crea un tercer array que incluya los elementos de los dos arrays
*/
-->

<html>
<head>
    <title>Hola mundo PHP</title>
</head>
<body>
<?php
$arrayAnimales = array('Leon', 'tigre', 'serpiente', 'perro');
$arrayColores = array('azul', 'blanco','verde','rojo');
echo count($arrayAnimales);
echo count($arrayColores);

array_push($arrayAnimales, 'elefante');
print_r($arrayAnimales);

array_unshift($arrayColores,'amarillo');
print_r($arrayColores);

$arrayFusionado = array_merge($arrayColores, $arrayAnimales);
print_r($arrayFusionado);

?>
</body>
</html>