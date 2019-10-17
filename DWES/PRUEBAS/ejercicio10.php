<!--
10. Crea un array con 5 números. A continuación, crea una función que reciba,
aparte del array, otros 2 parámetros: el primero indicará la posición del array y el
segundo un número entero. La función deberá comprobar si el número de la
posición indicada del array es mayor, igual o menor que el segundo parámetro.
Devolverá una frase como la siguiente: “El número de la posición 4 es mayor que
9.”
[5, 2, 9, -10, 24]
comparar($datos, 3, 8) → “El número en la posición 3 es mayor que
9”
-->

<html>
<head>
    <title>Hola mundo PHP</title>
</head>
<body>
<?php
$arrayNumeros = array(1, 2, 3, 4, 5);


function parametros($arrayNumeros, $posicion, $entero)
{
    if ($arrayNumeros[$posicion] > $entero) {
        $resultado = " es mayor";
    } elseif ($arrayNumeros[$posicion] < $entero) {
        $resultado = " es menor";
    }

    echo "El numero de la posicion " .$posicion   .$resultado;

}

parametros($arrayNumeros);


?>
</body>
</html>