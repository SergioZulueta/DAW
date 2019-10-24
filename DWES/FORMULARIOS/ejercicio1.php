

<html>
<head>
    <title>Hola mundo PHP</title>
</head>


<?php


function convertir(){

    $temp = $_POST['temperatura'];
    $unidad = $_POST['unidad'];
    if ($temp == "") {
        echo "<p>No has escrito la temperatura</p>";
    } elseif ($unidad == 'c') {
        $temp = $temp * 1.8 + 32;
        echo "Los celsius a fahrenheit son: ".$temp."<p></p>";
    } else {
        $temp = $temp / 1.8 - 32;
        echo "Los fahrenheit a celsius son: ".$temp."<p></p>";
    }
}



?>


<body>

<?php

if (isset($_POST["convertir"])){
    convertir();
}

?>

<form action="ejercicio1.php" method="post">
    <fieldset>
        <legend>Conversor de temperatura</legend>
        <strong>Introduce la temperatura:</strong>
        <input type="number" name="temperatura" size="7" maxlength="7">
        <select name="unidad">
            <option value="c" selected="selected">Celsius</option>
            <option value="f">Fahrenheit</option>
        </select>

        <p><input type="submit" value="convertir" name="convertir"></p>
    </fieldset>
</form>
</body>
</html>