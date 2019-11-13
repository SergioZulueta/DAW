function añadirCampo() {
    let campo = prompt('Añade un nuevo campo');
    let body = document.documentElement.lastChild;
    let main = body.children[0];
    let form = main.children[main.children.length - 1];
    crearLabel(form, campo);
}

function confirmar() {
    //validaciones();
    let arrayCampos = [];
    try {
        for (let x = 0; x < document.getElementsByTagName("input").length; x++) {
            let input = document.getElementsByTagName('input')[x].type;
            if (input != 'button') {
                arrayCampos.push(document.getElementsByTagName('input')[x].value);
            }
        }
        let otros = arrayCampos.splice(2, 2)
        let contacto = {
            'nombre': arrayCampos[0],
            'organizacion': arrayCampos[1],
            'otros': otros
        };
        let contactoJSON = JSON.stringify(contacto);
        enviarJSON(contactoJSON);
        vaciarInput();
    } catch (e) {
        alert(e.getCachedFrameMessage())
    }


}

function validaciones() {
    let nombre = document.getElementById("nombre").value;
    let movil = document.getElementById("movil").value;
    let organizacion = document.getElementById("organizacion").value;
    let exRegNombre = new RegExp(/^[A-Z][a-z]{2,}/);
    let exRegTelf = new RegExp(/^(\+34|0034|34)?[6|7|8|9][0-9]{8}$/);

    try {
        if (exRegNombre.test(nombre) && exRegTelf.test(movil)) {
            alert("Los datos introducidos son correctos");
        } else
            alert("Los datos introudcidos NO son correctos");
        try{
            if(nombre.isEmpty()){
                alert("El nombre es obligatorio");
            }
            if(movil.isEmpty()){
                alert("El movil es obligatorio");
            }
            if(organizacion.isEmpty()){
                alert("La organizacion es obligatorio");
            }
        }catch (error) {
            alert("los datos son obligatorios");

        }

    } catch (error) {
        alert("Error en el movil o el nombre");

    }

}


function vaciarInput() {
    document.getElementById("nombre").value = "";
    document.getElementById("movil").value = "";
    document.getElementById("organizacion").value = "";
}


function crearLabel(form, campo) {
    try {
        let label = document.createElement('label');
        let br = document.createElement('br');
        let texto = document.createTextNode(campo + ': ');
        let input = crear(campo);
        label.appendChild(texto);
        label.appendChild(input);
        form.insertBefore(label, form.children[form.children.length - 2]);
        form.insertBefore(br, form.children[form.children.length - 2]);
    } catch (e) {
        alert("error con la creacion del label");
    }

}

function crear(posicion) {
    let input = document.createElement('input');
    input.type = 'text';
    input.name = posicion;
    input.id = posicion;
    return input;
}

function enviarJSON(contactoJSON) {
    $.ajax({
        url: '#',
        type: 'post',
        dataType: 'json',
        contentType: 'application/json',
        success: alert('Se ha enviado correctamente'),
        data: contactoJSON
    });

    añadirContacto(contactoJSON);

}

function añadirContacto(contactoJSON) {
    let contacto = JSON.parse(contactoJSON);

    let arrayContactos = localStorage.getItem('arrayContactosInicio');

    let contactos = JSON.parse(arrayContactos);

    contactos.push(contacto);

    localStorage.setItem('arrayContactos', JSON.stringify(contactos));
}