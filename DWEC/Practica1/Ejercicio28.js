//28. Calcula el porcentaje de vocales en una cadena tecleada por el usuario.

let cadena = prompt("Introduce una cadena de caracteres");
let vocales = ['a', 'e', 'i', 'o', 'u'];
let contador = 0;

for (let x = 0; x < String.length; x++) {
    if (vocales.includes(cadena.charAt(x))) {
        contador++;
    }
}

alert("La frase: " + cadena + ". Tiene: " + (contador/cadena.length*100) + "% de vocales");