/*
Realizar un programa que pidiendo la introduccion de numeros,
muestre en pantalla el numero de numeros positivos, negativos
y nulos. Los numeros hay que guardarlos en un array.
 */

let numeros = [];
let num;
let respuesta = true;

for(let x = 0;respuesta == true; x++){
    num = parseInt(prompt("Introduce un numero"));
    numeros.push(num);

    respuesta = confirm("¿Quieres continuar introduciendo numeros?");
}

alert(numeros);
