//Crea un agenda en la que guardar las anotaciones que una persona
// quiera.


let anotaciones = [];

function guardarAnotacion() {
    let anotacion = document.getElementById("texto").value;
    let fecha = document.getElementById("fecha").value;
    if (anotacion == " ") {
        alert("Campo vacio");
    } else {
        anotaciones.push(fecha + anotacion);
        alert("Anotacion guardada correctamente");
    }
}

function mostrarAnotaciones() {
    for (let x = 0; x < anotaciones.length; x++) {
        alert("Anotacion guardada el dia: " + " \n" + " " + anotaciones[x] + " \n");
    }


}
