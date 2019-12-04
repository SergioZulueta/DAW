<?php
include ("models/Cuadrado.php");
include ("models/Triangulo.php");

$tri = new Triangulo("rojo", 4, 5);
$cua = new Cuadrado("azul", 4, 4);

echo $tri->areaTri();

echo $cua->areaCua();