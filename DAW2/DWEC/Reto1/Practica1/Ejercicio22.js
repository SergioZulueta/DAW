/*
22. El calculo de la letra del Documento Nacional de Identidad (DNI) es
un proceso matematico sencillo que se basa en obtener el resto de la ´
division entera del numero de DNI y el n ´ umero 23. A partir del resto ´
de la division, se obtiene la letra seleccion ´ andola dentro de un array ´
de letras.
El array de letras es:
[’T’, ’R’, ’W’, ’A’, ’G’, ’M’, ’Y’, ’F’, ’P’, ’D’, ’X’, ’B’, ’N’, ’J’, ’Z’, ’S’, ’Q’,
’V’, ’H’, ’L’, ’C’, ’K’, ’E’];
Por tanto si el resto de la division es 0, la letra del DNI es la T y si el ´
resto es 3 la letra es la A.
Con estos datos, elaborar un pequeno script que: ˜
Almacene en una variable el numero de DNI indicado por el
usuario y en otra variable la letra del DNI que se ha indicado.
A continuacion en una sola instruccion se debe comprobar si
el numero es menor que 0 o mayor que 99999999. Si ese es el
caso, se muestra un mensaje al usuario indicando que el numero proporcionado no es valido y el programa no muestra m ´ as´
mensajes.
Si el numero es valido, se calcula la letra que le corresponde
segun el metodo explicado anteriormente.
Una vez calculada la letra, se debe comparar con la letra indicada
por el usuario. Si no coinciden, se muestra un mensaje al usuario
indicando que la letra que ha indicado no es correcta. En otro
caso, se muestra un mensaje indicando que el numero y la letra
de DNI son correctos.
 */

let letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];
let numero = prompt("Escribe tu numero de DNI (sin la letra)");
let letra = prompt("Escribe la letra de tu DNI en mayusculas").toUpperCase();

if (numero < 0 || numero > 99999999) {
    alert("El numero indicado no es válido");
} else {
    let letraCalculada = letras[numero % 23];
    if (letraCalculada != letra) {
        alert("La letra introducida no es válida");
    } else {
        alert("El número y letra introducidos son correctos");
    }
}