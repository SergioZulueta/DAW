<?php
require_once ("Poligono.php");

class Triangulo extends Poligono {


    public function areaTri(){
        return "Area del triangulo: " . ($this->altura * $this->anchura) / 2 . "<br>";
    }

}
