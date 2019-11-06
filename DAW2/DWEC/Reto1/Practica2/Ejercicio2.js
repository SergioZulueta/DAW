/*
1. Crea una funcion que muestre informacin sobre una cadena de
texto que se le pasa como argumento. A partir de la cadena que
se le pasa, la funcion determina si esa cadena esta formada solo
por mayusculas, por min ´ usculas o por una mezcla de ambas.

 */
let cadena = prompt("Introduce una frase");

if (cadena == cadena.toUpperCase()) {
    alert("La cadena esta en mayusculas")
} else if (cadena == cadena.toLowerCase()) {
    alert("La cadena esta en minusculas")
} else {
    alert("La cadena tiene una mezcla de ambas")
}
