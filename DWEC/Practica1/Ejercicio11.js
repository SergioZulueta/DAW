//11. Ejercicio que muestre la suma, resta, multiplicacion, division y resto
// de dos numeros introducidos por el usuario.

let numero1 = parseInt(prompt("Introduce el primer numero"));
let numero2 = parseInt(prompt("Introduce el segudo numero"));
alert("Los dos numeros introducidos son: " + numero1 + " y " + numero2 + "; " + "\nLa suma es  = " + (numero1 + numero2) +
    "\nLa resta es  = " + (numero1 - numero2) +
    "\nLa multiplicacion es  = " + (numero1 * numero2) +
    "\nLa division es  = " + (numero1 / numero2) +
    "\nel resto es  = " + (numero1 % numero2)
)
;