//Codifica un ejemplo con cada una de las propiedades y/o metodos ´
// de las clases String, Number y Date. Prueba tambien algunos de los ´
// metodos de las clase Math.

let string = "palabra";

document.write("Propiedades del String" + "<br>");

document.write(string.anchor() + ".anchor sirve para crear y mostrar programando un ancla en un documento" + "<br>");
document.write(string.big() + ".big sirve para formatear y mostrar una cadena en un documento" + "<br>");
document.write(string.blink() + ".blank causa que una cadena parpadee como si estuviese en una etiqueta" + "<br>");
document.write(string.bold() + ".bold sirve para mostrar en negrita la cadena" + "<br>");
document.write(string.charAt(2) + ".charAt devuelve en un nuevo String el caracter que le decimos a traves de un numero entero" + "<br>");
document.write(string.charCodeAt(2) + ".charCodeAt devuelvo un numero indicando un valor unicode" + "<br>");
document.write(string.codePointAt() + ".codePointAt devuelve un entero no negativo que equivale al valor Unicode code point" + "<br>");
document.write(string.concat() + ".concat se utiliza para combinar dos o mas cadenas, no cambia las existentes, retorna una nueva" + "<br>");
document.write(string.endsWith() + ".endsWith determina cuando una cadena termina con los caracteres de otra cadena, devuelve true o false" + "<br>");
document.write(string.fixed() + ".fixed hace que muestre la cadena con una fuente de ancho fijo como si estuviera en las etiquetas tt" + "<br>");
document.write(string.fontcolor("red") + ".fontcolor('red') muestra la cadena en el color que se le indique, rojo en este caso " + "<br>");
document.write(string.includes('hola') + " .includes determina si una cadena de texto puede ser encontrada dentro de otra cadena de texto, retornando true o false" + "<br>");
document.write(string.indexOf("b") + " .indexOf devuelve el indice de la primera ocurrencia encontrada, si no lo encuentra devuelve -1" + "<br>");
document.write(string.fontsize(10) + ".fontsize asigna un tamaño de letra" + "<br>");
document.write(string.italics() + ".italics para poner la letra en cursiva" + "<br>");
document.write(string.lastIndexOf() + ".lastIndexOf empieza por el final" + "<br>");
document.write(string.length + ".length cuenta la cadena" + "<br>");
document.write(string.link() + ".link hace que la cadena sea una url" + "<br>");
document.write(string.match() + ".match se usa para obtener todas las ocurrencias de una regular exp dentro de una cadena" + "<br>");
document.write(string.matchAll() + ".matchAll etorna un iterador de todos los resultados de ocurrencia en una cadena de texto contra una expresión regular, incluyendo grupos de captura" + "<br>");
document.write(string.normalize() + ".normalize etorna un iterador de todos los resultados de ocurrencia en una cadena de texto contra una expresión regular, incluyendo grupos de captura" + "<br>");
document.write(string.padEnd() + "" + "<br>");
document.write(+"" + "<br>");
document.write(+"" + "<br>");
document.write(+"" + "<br>");


let number = 2;

document.write("Propiedades del Number" + "<br>");

document.write(number.toExponential() + ".toExponential muestra el numero de decimales a mostrar" + "<br>");
document.write(number.toString()+".toString lo convierte en String" + "<br>");
document.write(number.toFixed()+"" + "<br>");
document.write(number.toLocaleString()+".toLocaleString lo convierte en un string local" + "<br>");
document.write(number.valueOf()+".valueOf miramos el valor que devuelve" + "<br>");

document.write("Propiedades del Date" + "<br>");

let date = new Date();

document.write(date.getDate()+".getDate coge el dia en el que estamos" + "<br>");
document.write(date.getDay()+".getDay hace lo mismo que el date" + "<br>");
document.write(date.getFullYear()+".getFullYear coge el año en el que estmaos" + "<br>");
document.write(date.getHours()+".gethours coge la hora en la que estmaos" + "<br>");
document.write(date.getMilliseconds()+".getMilisicond se usa para tener los milisegundos" + "<br>");
document.write(date.getMinutes()+".getMinutes se usa para obtener los milisegundos" + "<br>");
document.write(date.getMonth()+".getMonth se usa para obterner el mes" + "<br>");
