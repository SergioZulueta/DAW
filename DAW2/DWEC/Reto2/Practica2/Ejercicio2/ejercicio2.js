let si = document.getElementById("si");
let no = document.getElementById("no");

function cargarDatos() {
    let fecha = document.getElementById("fecha");

    fecha.style.display = "none";
}

function enviar() {
    let isbn = document.getElementById("isbn");
    let dni = document.getElementsByClassName("dni");



    let titulo = document.getElementById("titulo");
    let tipo = document.getElementById("listaLibros");
    let disponible = "";
    let ejemplares = document.getElementById("ejemplares");
    let fecha = document.getElementById("fecha");

    let nombreApellidos = document.getElementsByClassName("nombreApellidos");

    if (document.getElementById("si").checked) {
        disponible = "si";
    } else if (document.getElementById("no").checked) {
        disponible = "no";
    }

    let arrayNombreApellidos = Array.from(nombreApellidos);
    let arrayDni = Array.from(dni);
    let arrayAutores = [];

    for (x = 0; x < arrayDni.length; x++) {
        arrayAutores.push(new Autor(arrayDni[x].value, arrayNombreApellidos[x].value));
    }

    console.log(arrayAutores);

    let libro = new Libro(titulo.value, isbn.value, tipo.value, ejemplares.value, disponible, fecha.value, arrayAutores);

    console.log(libro);

    enviarObjJSON(libro);
    //}
}

function enviarObjJSON(libro) {
    let objLibro = JSON.stringify(libro);

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

function anadirDescripcion() {
    let select = document.getElementById("listaLibros");
    if (select.value == "Añadir Tipo") {
        let div = document.getElementById("div");
        let label = document.createElement("label");
        let texto = document.createTextNode("Descripcion: ");

        label.appendChild(texto);

        let nuevoCampo = document.createElement("input");
        nuevoCampo.setAttribute("type", "text");

        div.appendChild(label);
        div.appendChild(nuevoCampo);
    }

}

function anadirAutor() {
    let div = document.getElementById("divAutores");
    let texto = document.createTextNode("Dni: ");
    let texto2 = document.createTextNode(("Nombre y apellidos: "));
    let br = document.createElement("br");
    let br2 = document.createElement("br");
    let br3 = document.createElement("br");

    let nuevoCampo = document.createElement("input");
    nuevoCampo.setAttribute("type", "text");
    nuevoCampo.setAttribute("class", "dni");

    let nuevoCampo2 = document.createElement("input");
    nuevoCampo2.setAttribute("type", "text");
    nuevoCampo2.setAttribute("class", "nombreApellidos");

    div.appendChild(texto);
    div.appendChild(nuevoCampo);
    div.appendChild(br2)
    div.appendChild(texto2);
    div.appendChild(nuevoCampo2);
    div.appendChild(br);
    div.appendChild(br3)
}

function ocultarCaja() {
    let fecha = document.getElementById("fecha");

    fecha.style.display = "none";
}

function mostrarCaja() {
    let fecha = document.getElementById("fecha");

    fecha.style.display = "block";
}

function validarDatos(dni, isbn) {
    try {
        let expRegIsbn = document.getElementById("isbn")
        let expRegDni = new RegExp("^[0-9]{8}[A-Z]");

        if (expRegDni.test(dni) || expRegIsbn.test(isbn)) {
            return true;
        } else {
            alert( "ISBN o dni mal introducidos");
            return false;
        }
    } catch (e) {
        alert(e.getCachedFrameMessage() + "error en las validaciones")
    }

}