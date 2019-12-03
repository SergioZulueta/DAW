<?php
class Cuadrado extends Poligono {
    private $area;


    public function __construct($area)
    {
        $this->area = $area;
    }

    public function area(){

    }

    public function getArea()
    {
        return $this->area;
    }

    public function setArea($area): void
    {
        $this->area = $area;
    }


}

