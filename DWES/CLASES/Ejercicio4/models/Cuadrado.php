<?php
require_once ("Poligono.php");

class Cuadrado extends Poligono {

    function area()
    {
        return "Area del cuadrado: " . $this->altura * $this->anchura . "<br>";
    }
}

