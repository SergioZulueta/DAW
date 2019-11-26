<?php
$animales = array('papeles', 'volter', 'miguel', 'eric');
$colores = array('rojo', 'celeste', 'turquesa', 'almizquero');
$nuevoAnimal = "castillo";

function contar($animales, $colores){
    return "el array de animales tiene: " . count($animales)  . " y el de colores: " . count($colores);
}

function añadirFinal($animales){

        array_push($animales, "castillo");
        return $animales;

}
?>

<html>
<head>
    <title>Ejer7</title>
</head>
<body>

<?= contar($animales, $colores)?>
<?php
añadirFinal($animales);
echo "<pre>";
    print_r(añadirFinal($animales));
echo "</pre>";
?>

</body>
</html>