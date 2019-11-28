"use strict";

$(document).ready(function () {
    $("#importes").on("click", activarImportes);
    $("#submit").on("click", validarDatos);
});

function validarDatos() {
    try {
        let numCuenta = validarNumCuenta();
        let fecha = validarFechas();
        let importes = validarImportes();
        enviarDatosServidor(numCuenta, fecha, importes);
    }
    catch (err){
        tipoDeError(err);
    }
}

function tipoDeError(err) {
    switch (err){
        case 1:
            alert("Selecciona un radio button por lo menos");
            break;
        case 2:
            alert("La fecha desde tiene que ser menor que la de hasta");
            break;
        case 3:
            alert("El importe minimo no puede ser mayor que el máximo");
            break;
        case 4:
            alert("Es obligatorio por lo menos un valor de importe si está seleccionado");
            break;
        default:
            setColorRojo(err);
            break;
    }
}

function setColorRojo(element) {
    element.css("background-color", "red");
}

function activarImportes() {
    $(".hidden").attr("class", "normal");
    $("#importes").on("click", desactivarImportes);
}

function desactivarImportes() {
    $(".normal").attr("class", "hidden");
    $("#importes").on("click", activarImportes);
}

function validarNumCuenta() {
    let regex = /^[0-9]{20}$/;
    let input = $("#numcuenta");
    let numCuenta = input.val();
    if(!regex.test(numCuenta))
        throw input;
    let digits = numCuenta.slice(0,8);
    if(parseInt(numCuenta[8]) !== calcularDigito("00"+digits))
        throw input;
    digits = numCuenta.slice(-10);
    if(parseInt(numCuenta[9]) !== calcularDigito(digits))
        throw input;
    input.css("background-color", "green");
    return numCuenta;

}

function calcularDigito(numCuenta) {
    let nums = [1,2,4,8,5,10,9,7,3,6];
    let sumTot = 0;
    for(var x = 0; x<numCuenta.length; x++){
        sumTot += parseInt(numCuenta[x]) * nums[x];
    }
    sumTot = sumTot % 11;
    sumTot = 11-sumTot;
    return sumTot;
}

function validarFechas() {
    let hoy = $('#hoy');
    let fechas = $("#fechas");
    let date;

    if(hoy.is(':checked') || fechas.is(':checked')){
        if(hoy.is(':checked'))
            date = new Date();
        else{
            let desde = $("#desde").val();
            let hasta = $("#hasta").val();
            if(desde > hasta)
                throw 2;
            date = [desde, hasta];
        }
    }
    else
        throw 1;

    return date;
}

function validarImportes() {
    let importes = null;
    debugger;
    if($("#optional").attr("class") === "normal"){
        let min = $("#minimo")
        let minim = parseInt(min.val());
        let max = $("#maximo");
        let maxim = parseInt(max.val());

        if(isNaN(minim) && isNaN(minim))
            throw 4;

        if(minim < 0)
            throw min;
        if(maxim < 0)
            throw max;
        if(minim > maxim)
            throw 3;
        importes = [minim, maxim];
    }

    return importes;
}

function enviarDatosServidor(numCuenta, fecha, importes) {
    $.ajax({
        type: "get",
        url: "./respuesta.txt",
        data:{numeroCuenta : numCuenta, fech : fecha, impor : importes}
    }).done(function (data) {
        $("#respuesta").text(data);
    }).error(function () {
        alert("Error con el servidor");
    });
}
