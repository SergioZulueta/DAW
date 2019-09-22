//11. ¿Cuantos dıas faltan para Navidad?
let hoy = new Date();
let navidad = new Date(2019,11,25);

let dias = navidad.getTime() - hoy.getTime();
alert(Math.round("quedan " + dias/ (1000*60*60*24) + " dias para la navidad"));