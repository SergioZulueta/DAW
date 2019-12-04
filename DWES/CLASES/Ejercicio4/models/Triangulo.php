<?php
require_once ("Poligono.php");

class Triangulo extends Poligono {


    function area()
    {
        return "Area del triangulo: " . ($this->altura * $this->anchura) / 2 . "<br>";
    }
}
