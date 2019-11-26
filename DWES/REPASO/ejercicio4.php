<?php
$cadena1 = "eric";
$cadena2 = " pincha";


function juntar($cadena1='tu', $cadena2=' mierda'){
    return $cadena1 . $cadena2;
}


?>

<html>
<head>
    <title>Ejer4</title>
</head>
<body>

<?= juntar($cadena1, $cadena2)?>

</body>
</html>