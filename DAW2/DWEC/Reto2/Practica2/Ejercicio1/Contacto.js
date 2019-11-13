class Contacto {
    constructor(nombre, organizacion, otros) {
        this.nombre = nombre;
        this.organizacion = organizacion;
        this.otros = [];
    }

    contactoString() {
        return nombre + ' nombre de la organizacion ' + organinazion + "Datos extras añadidos: " + otros;
    }
}

let newVar = [
    contacto1 = new Contacto('sergio', 'comida'),
    contacto2 = new Contacto('miguel', 'videojuegos'),
    contacto3 = new Contacto('adrian', 'bar')];

localStorage.setItem('arrayContactosInicio', JSON.stringify(arrayContactos));