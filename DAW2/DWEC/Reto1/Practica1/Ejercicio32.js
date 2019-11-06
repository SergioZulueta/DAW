//32. Desarrolla un programa que solicite la fecha de nacimiento y muestre
// la edad dentro de cinco anos.


let fechaNac = prompt("Introduce tu fecha de nacimiento");
let hoy = Date.now();

fechaNac = fechaNac.split("/");
let edad = hoy.getFullYear() - fechaNac[2];
if (hoy.getMonth() + 1 - fechaNac[1] > 0) {
    edad += 1;
}
edad += + 5;
alert("En cinco años tendras: " + edad );