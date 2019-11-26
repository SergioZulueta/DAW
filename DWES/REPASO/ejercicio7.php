<?php
$animales = array('papeles', 'volter', 'miguel', 'eric');
$colores = array('rojo', 'celeste', 'turquesa', 'almizquero');
$nuevoAnimal = "castillo";

function contar($animales, $colores){
    return "el array de animales tiene: " . count($animales)  . " y el de colores: " . count($colores);
}

function añadirFinal($animales, $nuevoAnimal){
    return $animales = array_push($animales, $nuevoAnimal);

}
?>

<html>
<head>
    <title>Ejer7</title>
</head>
<body>

<?= contar($animales, $colores)?>
<?php
$animalesUnom = añadirFinal($animales, $nuevoAnimal);
echo "<pre>";
    print_r($animalesUnom);
echo "</pre>";
?>

</body>
</html>