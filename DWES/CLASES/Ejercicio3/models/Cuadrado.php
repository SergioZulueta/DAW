<?php
require_once ("Poligono.php");

class Cuadrado extends Poligono {


    public function areaCua(){
        return "Area del cuadrado: " . $this->altura * $this->anchura . "<br>";
    }


}

