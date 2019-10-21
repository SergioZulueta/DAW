//20. Haz un programa que nos pida un numero entero (0 - 15) y nos de
// como resultado el mismo numero pero en base 16.

do{
    let n1 = parseInt(prompt("Introduce un numero entre 1 y 15"));
}while(n1<=0 || n1>=15)
alert("El numero en hexadecimal es: " + n1.toString(16))