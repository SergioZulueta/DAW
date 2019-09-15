/*
30. Crea un array bidimensional que contenga 3 columnas y las filas que
tu quieras, las dos primeras columnas tendr ´ an n ´ umeros y en la tercera ´
columna el resultado de sumar el numero de la primera y segunda ´
columna. Muestra el array de la siguiente forma:
3 + 5 = 8
4 + 4 = 8

 */

let array = new Array(3);
array[0] = new Array();
array[1] = new Array();
array[2] = new Array();

array[0][0] = 3;
array[0][1] = 4;

array[1][0] = 5;
array[1][1] = 4;

array[2][0] = array[0][0] + array[1][0];
array[2][1] = array[0][1] + array[1][1];

alert(array[0][0] + " + " + array[1][0] + " = " + array[2][0]);
alert(array[0][1] + " + " + array[1][1] + " = " + array[2][1]);