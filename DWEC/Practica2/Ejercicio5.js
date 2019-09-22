/*
Desarrolla un ejercicio que pregunte al usuario su sueldo actual
y los anos que lleva en la empresa. A partir de esos datos el
programa debe mostrar un mensaje indicando:
• Si el sueldo es inferior a 500 y su antiguedad es igual o
superior a 10 anos, aumentaremos su sueldo en un 20 % y
mostraremos el mensaje indicando el nuevo sueldo a pagar.
• Si el sueldo es inferior a 500 pero su antiguedad es menor a
10 anos, se le otorgar a un aumento del 10 % y mostraremos
un mensaje indicando su nuevo sueldo.
• Si el sueldo es mayor o igual a 500 mostraremos el sueldo
sin cambios.
 */

calcSueldo(parseInt(prompt("introduce el sueldo")),
    parseInt(prompt("introduce los años que llevas en la empresa")))
function calcSueldo(sueldo,años){
    if (sueldo<500 && años>=10)
        alert("el nuevo sueldo a pagar seria: "+(sueldo+(sueldo*0.2)))
    if (sueldo<500 && años<10)
        alert("el nuevo sueldo a pagar seria: "+(sueldo+(sueldo*0.1)))
    if (sueldo>=500)
        alert("sueldo sin cambios: "+sueldo)
}