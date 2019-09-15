/*
29. Crea un array con un tamano de 5, asıgnale valores numericos ma-
nualmente (los que tu quieras) y muestralos por pantalla. Crea un
segundo array e introduce en el los valores que el usuario desee. A
continuacion programa las siguientes operaciones: ´
Muestra en un cuadro de dialogo de salida todos los n ´ umeros ´
pares del primer array.
Busca un valor tecleado por el usuario en el segundo array. Indica
si esta o no esta. Si se encuentra hay que indicar la posici on. Ten
en cuenta que el mismo valor se puede repetir y si esto ocurre
hay que indicar todas las posiciones.
Realiza tambien una busqueda que todos los datos que cumplan ´
una condicion concreta ( Mayor que 10 por ejemplo). ´
Crea un String a partir de los datos del primer array.
Borra el primer elemento, el ultimo y un elemento intermedio
del array dos.
Une los dos arrays formando solo uno. Visualiza el contenido de
este tercer array.
Crea un nuevo array con todos los numeros primos del array
creado en el punto cinco.
Suma un dos a cada uno de los elementos de este tercer array.
Crea un nuevo array con los numeros mayores de 10 del segundo
array.
Duplica los dos primeros elementos del primer array a partir de
la posicion cuatro. ´
Anade un elemento a un array en la primera posicion, otro en la
ultima y otro en una posicion intermedia.
Guarda un 6 en cada una de las posiciones del array dos.
Muestra el contenido de un array empezando por la ultima po-
sicion y acabando por la primera. ´
Ordena de mayor a menor el contenido de un array.
Genera un array a partir de una cadena de caracteres
 */

let arrayEstatico = [12, 32, 42, 37, 83];
alert(arrayEstatico);

let arrayUsuario = [];
for(let x = 1; x <= 5; x++){
    arrayUsuario.push(parseInt(prompt("Introduce hasta 5 numeros")));
}
alert(arrayUsuario);



