//9. Pide al usuario numeros y cuando ya no quiera continuar, mues-
// tra el mayor y el menor. Los numeros hay que guardarlos en un
// array.

let numeros = [];
let num;
let respuesta = true;

for (let i = 0; respuesta == true; i++) {
    num = parseInt(prompt("Introduce un numero"));
    numeros.push(num);

    respuesta = confirm("Quieres iontroducir mas numeros?");
}

alert(numeros);
compararNumeros(numeros);

function compararNumeros(numeros) {
    let max, min;

    max = Math.max.apply(null, numeros);
    min = Math.min.apply(null, numeros);

    alert("max: " + max + "\n" +
        "min " + max)
}