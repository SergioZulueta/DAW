function buscar() {
    let nombreBuscar = document.getElementById("nombre").value;
    let organizacionBuscar = document.getElementById("organizacion").value;
    if (nombreBuscar != "") {
        try {
            for (let i = 0; i < arrayContactos.length; i++) {
                if (arrayContactos[i].nombre == nombreBuscar && arrayContactos[i].organizacion == organizacionBuscar) {
                    alert("El número de teléfono de " + arrayContactos[i].nombre + " es: " + arrayContactos[i].movil);
                }
            }
            vaciarInput()
        } catch (error) {
            alert("No se ha encontrado contacto")
        }
    } else if (nombreBuscar == "" && organizacionBuscar != "") {
        let msj = "Los contactos en esa organización son: ";
        try {

            for (let i = 0; i < arrayContactos.length; i++) {
                if (arrayContactos[i].organizacion == organizacionBuscar) {
                    msj += arrayContactos[i].nombre + " ";
                }
            }
            alert(msj);
        } catch (error) {
            alert("Estamos teniendo problemas con la base de datos. Intentelo más tarde.")
        }

    } else {
        alert("Introduce el nombre para buscar")
    }
}