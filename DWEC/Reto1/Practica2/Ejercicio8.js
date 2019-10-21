/*
Escribe un programa que permita realizar la suma de tantos
numeros como desee el usuario. Los numeros hay que guardarlos
en un array.
 */

let numero = [];
let suma = 0;
let respuesta;

do {
        numero = Number(prompt("Ingrese un numero a sumar"));
        suma = suma + numero

     respuesta = confirm("Desea finalizar el programa?")
} while (!respuesta)


document.write("suma = " + suma);


