<!--
/*
21. Crea un programa que a partir del número indicado, recorra todos los números desde
dicho número hasta el 1 y sume todos los que sean primos. Mostrará la suma por pantalla.
Nota: La función que determine si un número es primo o no deberá estar en un fichero
aparte llamado “funciones.php”
*/
-->

<html>
<head>
    <title>Hola mundo PHP</title>
</head>
<body>

<?php

for($i=1;$i<=100;$i++)
{
    if(primo($i))
        echo "El número ".$i." es primo";
    else
        echo "El número ".$i." NO es primo";
}

function primo($num)
{
    $cont=0;
    for($i=2;$i<=$num;$i++)
    {
        if($num%$i==0)
        {

            if(++$cont>1)
                return false;
        }
    }
    return true;
}

?>
</body>
</html>