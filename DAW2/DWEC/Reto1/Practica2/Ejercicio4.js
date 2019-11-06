/*
Define una funcion que determine si la cadena de texto que se le ´
pasa como parametro es un pal ´ ´ındromo, es decir, si se lee de la
misma forma desde la izquierda y desde la derecha.
Ejemplo de pal´ındromo complejo: ”La ruta nos aporto otro paso
natural”
 */


function palindromo(cadena) {
    let cadenaSinEspacios = cadena.replace(/\s+/g, "");
    if (cadenaSinEspacios.toLowerCase() === cadenaSinEspacios.split("").reverse().join("").toUpperCase())
        alert("Es un palindromo")
    else
        alert("No es un palindromo")
}

palindromo(prompt("introduce texto"));