<?php
require 'vendor/autoload.php';
use gestionDependencias\ejercicio2\models\Paciente;
if(isset($_GET['accion'])){
    switch ($_GET['accion']){
        case 'curar':
            $nuevoPaciente = new Paciente('assa', 'xvcxz', '21');
            $nuevoPaciente->curar();
            break;
        case 'enfermar':
            $nuevoPaciente = new Paciente('fdsa', 'zxcv', '12');
            $nuevoPaciente->enfermar();
            break;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="index.php?accion=enfermar">Enfermar</a>/<a href="index.php?accion=curar">Curar</a>

</body>
</html>