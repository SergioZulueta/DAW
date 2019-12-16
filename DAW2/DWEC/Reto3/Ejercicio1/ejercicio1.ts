import {Autor} from "./Autor";
import {Libro} from "./Libro";


let autores = [new Autor("12807129Q", "Sergio Zulueta"), new Autor("79767288E", "Iñaki Caballero"),
    new Autor("03145950X", "Miguel Barros")];

let libros = [new Libro("JS", "4375512270118", "Ciencia ficcion", 300, true, "", autores[0]),
    new Libro("PHP", "5332351355016", "Aventura", 100, true, "", autores[1]),
    new Libro("CSS", "5280038344122", "Aventura", 200, false, "19/12/2019", autores[2]),
    new Libro("Servidores", "6859523270261", "Comedia", 200, false, "22/12/2019", autores[2])];


function cargarDatos() {
    let fecha = document.getElementById("fecha");

    fecha.style.display = "none";
}

function enviar() {
    let isbn = <HTMLInputElement>document.getElementById("isbn");
    let dni = document.getElementsByClassName("dni");

    let titulo = <HTMLInputElement>document.getElementById("titulo");
    let tipo = <HTMLInputElement>document.getElementById("listaLibros");
    let disponible = "";
    let ejemplares = <HTMLInputElement>document.getElementById("ejemplares");
    let fecha = <HTMLInputElement>document.getElementById("fecha");

    let nombreApellidos = document.getElementsByClassName("nombreApellidos");
    let si = <HTMLInputElement>document.getElementById("si");
    let no = <HTMLInputElement>document.getElementById("no");

    if (si.checked) {
        disponible = "si";
    } else if (no.checked) {
        disponible = "no";
    }

    let arrayNombreApellidos = Array.from(nombreApellidos);

    let arrayDni = Array.from(dni);
    let arrayAutores = [];

    for (let x = 0; x < arrayDni.length; x++) {
        arrayAutores.push(new Autor(arrayDni[x].value, arrayNombreApellidos[x].value));
    }

    console.log(arrayAutores);

    let libro = new Libro(titulo.value, isbn.value, tipo.value, ejemplares.valueAsNumber, disponible, fecha.value, arrayAutores);

    console.log(libro);

    enviarObjJSON(libro);

}

function enviarObjJSON(libro) {
    let objLibro = JSON.stringify(libro);

    let $;
    $.ajax({
        url: "",
        type: "POST",
        data: objLibro,
        dataType: "JSON",
        success: function () {
            console.log("Se ha enviado el objeto libro");
        }
    });

}
