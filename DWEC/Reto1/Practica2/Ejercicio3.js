/*
Vamos a hacer una funcion que divida una cadena de caracteres
en dos mitades mas o menos iguales y las muestre en pantalla
 */

let cadena = prompt("Introduce lo que quieras")


alert("La primera mitad es: "+cadena.substring(0, cadena.length/2))
alert("la segunda mitad es: "+cadena.substring(cadena.length/2, cadena.length))