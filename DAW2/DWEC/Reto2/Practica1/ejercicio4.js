function arbol(){
    let html = document.documentElement
    let head = html.firstChild
    let body = html.lastChild

    padre()

    function padre(){
        alert("El nodo padre es: " + html.nodeName)
        alert("En el head tenemos: " + head.nodeName)
        alert("En el body tenemos: " + body.nodeName)

        hijo(html)
        hijo(head)
        hijo(body)

    }

    function hijo(nodo) {
        let mensaje = "Los objetos dentro de: " + nodo.nodeName + " son: "
        for (let x = 0; x < nodo.children.length; x++) {
            mensaje = mensaje + nodo.children[x].nodeName + "  ";
        }
        alert(mensaje);
        for (let x = 0; x < nodo.children.length; x++) {
            if (nodo.children[x].hasChildNodes()) {
                hijo(nodo.children[x])
            }
        }
        alert(mensaje);
    }


}


