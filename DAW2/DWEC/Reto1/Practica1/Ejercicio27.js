//27. Crea un array con elementos de tipo string. Almacena los meses de
// ano. Solicitar el ingreso de un n ˜ umero entre 1 y 12 y muestra a que
// mes corresponde y cuantos dias tiene dicho mes.

let meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

let mes = parseInt(prompt("Introduce un numero del 1-12"));

switch (mes) {
    case(1):
        alert("Enero, 31 dias")
        break;

    case(2):
        alert("Febrero, 28 dias")
        break;

    case(3):
        alert("Marzo, 31 dias")
        break;

    case(4):
        alert("Abril, 30 dias")
        break;

    case(5):
        alert("Mayo, 31 dias")
        break;

    case(6):
        alert("Junio, 30 dias")
        break;

    case(7):
        alert("Julio, 31 dias")
        break;

    case(8):
        alert("Agosto, 31 dias")
        break;

    case(9):
        alert("Septiembre, 30 dias")
        break;

    case(10):
        alert("Octubre, 31 dias")
        break;

    case(11):
        alert("Noviembre, 30 dias")
        break;

    case(12):
        alert("Diciembre, 31 dias")
        break;

    default:
        alert("Numero introducido incorrecto")
}