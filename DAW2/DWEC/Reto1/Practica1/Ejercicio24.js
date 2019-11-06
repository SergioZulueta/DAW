//24. El factorial de un numero entero n es una operacion matematica que
// consiste en multiplicar todos los factores n x (n-1) x (n-2) x ... x 1. As´ı,
// el factorial de 5 (escrito como 5!) es igual a: 5! = 5 x 4 x 3 x 2 x 1 = 120
// Crear un script que calcule el factorial de un numero entero

let numero = prompt("Ingresa un numero");
numero = Number(numero);
let factorial = 1;

for (let x = 1; x <= numero; x++) {
    factorial = x * factorial;
}
alert("El factorial es: " + factorial);