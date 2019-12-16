"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var Autor_1 = require("./Autor");
var Libro_1 = require("./Libro");
var autores = [new Autor_1.Autor("12807129Q", "Sergio Zulueta"), new Autor_1.Autor("79767288E", "Iñaki Caballero"),
    new Autor_1.Autor("03145950X", "Miguel Barros")];
var libros = [new Libro_1.Libro("JS", "4375512270118", "Ciencia ficcion", 300, true, "", autores[0]),
    new Libro_1.Libro("PHP", "5332351355016", "Aventura", 100, true, "", autores[1]),
    new Libro_1.Libro("CSS", "5280038344122", "Aventura", 200, false, "19/12/2019", autores[2]),
    new Libro_1.Libro("Servidores", "6859523270261", "Comedia", 200, false, "22/12/2019", autores[2])];
function cargarDatos() {
    var fecha = document.getElementById("fecha");
    fecha.style.display = "none";
}
function enviar() {
    var isbn = document.getElementById("isbn");
    var dni = document.getElementsByClassName("dni");
    var titulo = document.getElementById("titulo");
    var tipo = document.getElementById("listaLibros");
    var disponible = "";
    var ejemplares = document.getElementById("ejemplares");
    var fecha = document.getElementById("fecha");
    var nombreApellidos = document.getElementsByClassName("nombreApellidos");
    var si = document.getElementById("si");
    var no = document.getElementById("no");
    if (si.checked) {
        disponible = "si";
    }
    else if (no.checked) {
        disponible = "no";
    }
    var arrayNombreApellidos = Array(nombreApellidos);
    var arrayDni = Array.from(dni);
    var arrayAutores = [];
    for (var x = 0; x < arrayDni.length; x++) {
        arrayAutores.push(new Autor_1.Autor(arrayDni[x].value, arrayNombreApellidos[x].value));
    }
    console.log(arrayAutores);
    var libro = new Libro_1.Libro(titulo.value, isbn.value, tipo.value, ejemplares.value, disponible, fecha.value, arrayAutores);
    console.log(libro);
    enviarObjJSON(libro);
}
function enviarObjJSON(libro) {
    var objLibro = JSON.stringify(libro);
    var $;
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
