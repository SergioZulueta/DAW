//13. Escribe y ejecuta el siguiente programa. Si en vez de typeof utilizamos
// instanceof, ¿ cual sera la salida?

var Pepe;
var PEPE = "Hola que tal ";
var pepE = 75.47;
var pEpe = " ¿Como estás?";
Pepe = PEPE + pEpe;
alert("PEPE=" + PEPE);
alert("PEPE es " + typeof (PEPE));
alert("pepE=" + pepE);
alert("pepE es " + typeof (pepE));
alert("pEpe=" + pEpe);
alert("pEpe es " + typeof (pEpe));
alert("Pepe=" + Pepe);
alert("Pepe es " + typeof (Pepe));

//Para poder usar instanceof tendriamos que especificar el tipo de la variable que buscamos, string, int... Nos devuelve true o false