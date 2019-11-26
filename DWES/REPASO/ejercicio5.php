<?php
$ciudades = array('Paris','Berlin', 'Amnstrerdam', 'Praga');
$posicion = 3;
$valor = 'Madrid';

function getValor($array, $posicion){
    return $array[$posicion];
}

function setValor($array, $posicion, $valor){
    $array[$posicion] = $valor;
    return $array;
}

?>

<html>
<head>
    <title>Ejer6</title>
</head>
<body>

<?= getValor($ciudades, $posicion)?>
<?php
echo '<pre>';
print_r(setValor($ciudades, $posicion,$valor));
echo '</pre>';?>

</body>
</html>