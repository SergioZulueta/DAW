<!--
/*
08. Crea un array asociativo que incluya 5 palabras castellano y sus respectivas
traducciones al inglés. Muestra por pantalla las palabras y sus traducciones en
frases como esta:
*/
-->

<html>
<head>
    <title>Hola mundo PHP</title>
</head>
<body>
<?php


$arrayTraducir = [
    "hola"=>"hello",
    "perro"=>"dog",
    "gato"=>"cat",
    "casa"=>"house",
    "adios"=>"bye"
];

echo "La traduccion de perro es " .$arrayTraducir["perro"];

?>
</body>
</html>