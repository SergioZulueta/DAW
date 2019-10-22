<!--
/*
13. Crea un array multidimensional que simule una agenda de contactos (contendrá de cada
persona su nombre, apellidos, teléfono y dirección de correo electrónico). Implementa una
función que imprima en una tabla los datos de las personas utilizando la sentencia while.
Nota: Puedes utilizar la función count() para conocer el tamaño del array que debes recorrer.
*/
-->

<html>
<head>
    <title>Hola mundo PHP</title>
</head>
<body>

<table>
    <tr>
        <td>nombre</td>
        <td>apellidos</td>
        <td>telefono</td>
        <td>emaill</td>
    </tr>
</table>

<?php

$arrayAgenda = array(
    "persona1" => array(
        "amaia", "gorbea jainaga", 945010101, "amaia@gmail.com"
    ),
    "persona2" => array(
        "ane","larrain ogeta",945020202,"ane@gmail.com"
    ),
    "persona3" => array(
        "maite", "murgiondo lekue", 945030303, "maite@gmail.com"
    ),
    "persona4" => array(
        "lorea", "aranceta otxoa", 945040404, "lorea@gmail.com"
    )
);

$x = 1;

while ($x <= count($arrayAgenda)) {
    echo '<tr>';
    $y = 0;
    $clave = "persona" . $x;
    echo $clave;
    while ($y < count($arrayAgenda[$clave])) {
        echo "<td>" . $arrayAgenda[$clave][$y] . "</td>";
        ++$y;
    }
    echo '</tr>';
    ++$x;

}

?>
</body>
</html>