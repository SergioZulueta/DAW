//10. Busca todos los 1 de enero que sean domingo del ano 2030 al
// 2050.
let añoActual = 2030;
let contador = 0;
let añoFuturo = 2050

for(let i; añoActual < añoFuturo; i++) {
    let fecha = new Date(añoActual,0,1);
    if (fecha.getDay() == 0) {
        contador += 1;
        alert("Sera domingo el 1 de enero en el año "+añoActual+"\n");
    }
    añoActual++;
}
alert("Habran "+contador+" domingos en el 1 de enero");

