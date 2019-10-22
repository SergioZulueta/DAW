<!--
/*
Crea una función que reciba un número indicando el día de la semana y que
muestre por pantalla el día de la semana. En caso de recibir otro número que no
esté entre el 1 y el 7, mostrará el mensaje “No es ningún día de la semana". Utiliza
un switch para realizar el ejercicio.
*/
-->

<html>
<head>
    <title>Hola mundo PHP</title>
</head>
<body>
<?php


function diaSemana()
{

    $dia = 5;

    switch ($dia){
        case 1 :
            echo "Lunes";
            break;
        case 2 :
            echo "martes";
            break;
        case 3 :
            echo "miercoles";
            break;
        case 4 :
            echo "jueves";
            break;
        case 5 :
            echo "viernes";
            break;
        case 6 :
            echo "sabado";
            break;
        case 7 :
            echo "domingo";
            break;
        default:
            echo "no es ningun dia de la semana";
    }
};

diaSemana();

?>
</body>
</html>
