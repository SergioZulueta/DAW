/*
Guarda informacion en arrays sobre usuarios y contrasenas y pos-
teriormente crea el tıpico formulario de login, validando usuario y
contrasena.
 */


function entrar() {

    let usuarioArray = ["admin", "adrian", "miguel", "aritz"]
    let passwordArray = ["12345", "54321", "1", "3"]

    let usuarios = document.getElementById("usuario").value;
    let contraseñas = document.getElementById("contraseña").value;

    for (let x = 0;x < usuarioArray.length; x++) {
        if(usuarioArray[x]===usuarios && passwordArray[x] ===contraseñas){
            alert("Usuario correcto");
            x = usuarioArray.length -1;
        } else {
            alert("tienes perdida de memoria")
        }

    }
}
