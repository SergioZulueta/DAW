window.onload = function () {
    let info = document.getElementById("informacion");


    let enlaces = document.getElementsByTagName("a");
    info.innerHTML = "Nº de enlaces: " + enlaces.length;


    let mensaje = "Penultimo enlace: " + enlaces[enlaces.length - 2].href;
    info.innerHTML = info.innerHTML + "<br/>" + mensaje;


    let contador = 0;
    for (let i = 0; i < enlaces.length; i++) {
        if (enlaces[i].href == "http://prueba" || enlaces[i].href == "http://prueba/") {
            contador++;
        }
    }
    info.innerHTML = info.innerHTML + "<br/>" + contador + " enlaces apuntan a http://prueba"

    let parrafos = document.getElementsByTagName("p");
    enlaces = parrafos[2].getElementsByTagName("a");
    info.innerHTML = info.innerHTML + "<br/>" + "El tercer parrafo tiene: " + enlaces.length + " enlaces";
}