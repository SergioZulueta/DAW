<!--
/*
20. Crea un programa que reciba un número como argumento y haga la suma de los
siguientes 100 números (incluyendo el número pasado como argumento) . Ejemplo: 15 →
Suma del 15 al 115 = 6565
*/
-->

<html>
<head>
    <title>Hola mundo PHP</title>
</head>
<body>

<?php

$numero = 15;


for($x = 0; $x > 100;){
    $numero = $numero + $numero;
    return $numero;
    $x ++;
}

echo $numero;

?>
</body>
</html>