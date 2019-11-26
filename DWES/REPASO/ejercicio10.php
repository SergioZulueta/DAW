<?php

$arrayNumeros = array(5, 2, 9, 7, 24);
$posicion = 3;
$entero = 6;

function mayor($arrayNumeros, $posicion, $entero)
{
    $posicionActual = $arrayNumeros[$posicion];

    if ($posicionActual > $entero) {
        return "Es mayor";
    } elseif ($posicionActual == $entero) {
        return "Es igual";
    } else {
        return "es menor";
    }
}

?>

<html>
<head>
    <title>Ejer10</title>
</head>
<body>

<?= mayor($arrayNumeros, $posicion, $entero) ?>

</body>
</html>