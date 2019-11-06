icremento = 0;
let form = document.documentElement.lastChild.children[0];
let contador = 0;

function desplegable() {
    let input = crearPosicion('posicion');
    form2.appendChild(input);
}

function crearPosicion(posicion = 'nuevo') {
    let input = document.createElement('input');
    input.type = 'text';
    input.name = posicion;
    input.id = posicion;
    input.value = '';
    return input;
}

function crear(obj) {
    icremento++;

    field = document.getElementById('field');
    contenedor = document.createElement('div');
    contenedor.id = 'div' + icremento;
    field.appendChild(contenedor);

    boton = document.createElement('input');
    boton.type = 'text';
    boton.name = 'text' + '[]';
    contenedor.appendChild(boton);

    boton = document.createElement('input');
    boton.type = 'button';
    boton.value = 'Borrar';
    boton.name = 'div' + icremento;
    boton.onclick = function () {
        borrar(this.name)
    }
    contenedor.appendChild(boton);

    if (document.getElementById('principio').checked) {
        let input = crearPosicion(contador);
        let primero = form.firstChild;
        form.insertBefore(input, primero);
        contador++;
    }
    if (document.getElementById('final').checked) {
        let input = crearPosicion(contador);
        form.appendChild(input);
        contador++;
    }
    if (document.getElementById('otro').checked) {
        let posicion = parseInt(document.getElementById('posicion').value);
        let input = crearPosicion(contador);
        let siguiente = form.children[posicion];
        form.insertBefore(input, siguiente);
        contador++;
    }
}

function borrar(obj) {
    field = document.getElementById('field');
    field.removeChild(document.getElementById(obj));
}
