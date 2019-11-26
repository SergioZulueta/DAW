<?php

$diccionario = array (
    "Caballo" => "Horse",
    "Gato" => "Cat",
    "Perro" => "Dog",
);

?>

<html>
<head>
    <title>Ejer8</title>
</head>
<body>

<?php
 foreach ($diccionario as $key=>$item){
     echo "El animal " . $key . " en ingles se dice " . $item;
 }
?>

</body>
</html>