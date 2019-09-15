/*9. Codifica un programa que solicite el nombre de una persona y los
apellidos y despues los muestre. A continuacion debe preguntar si
quiere acabar la ejecucion, dando opcion a una contestacion afirmativa
o negativa.*/
do {
    let nombre = prompt("Introduce el nombre");
    let apellidos = prompt("Introduce tus apellidos");
    document.write("Su nombre y sus apellidos son: " + nombre + " " + apellidos + "\n");
    var respuesta = confirm("Desea finalizar el programa?")
} while (!respuesta)


