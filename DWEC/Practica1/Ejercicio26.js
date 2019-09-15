//26. Crea un array para almacenar los sueldos de cinco operarios y que
// luego muestre el total de gastos en sueldos (recorrer el array sumando
// // el contenido).
// // Este ejercicios hay que realizarlo con diferentes for.

let sueldos;
sueldos = new Array(5);
cargar(sueldos);
calcularGastos(sueldos);

function cargar(sueldos) {
    let x;
    for (x = 0; x < sueldos.length; x++) {
        let v;
        v = parseInt(prompt("Ingrese sueldo:"));
        sueldos[x] = parseInt(v);
    }
}

function calcularGastos(sueldos) {
    let total = 0;
    let x;
    for (x = 0; x < sueldos.length; x++) {
        total = total + sueldos[x];
    }
    document.write('Listado de sueldos<br>');
    for (x = 0; x < sueldos.length; x++) {
        document.write(sueldos[x] + '<br>');
    }
    document.write("Total de gastos en sueldos: " + total);
}
