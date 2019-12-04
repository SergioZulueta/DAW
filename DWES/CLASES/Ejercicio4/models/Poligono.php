<?php


abstract class Poligono{
    public $color, $altura, $anchura;


    public function __construct($color, $altura, $anchura)
    {
        $this->color = $color;
        $this->altura = $altura;
        $this->anchura = $anchura;
    }

    abstract function area();


    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): void
    {
        $this->altura = $altura;
    }

    public function getAnchura()
    {
        return $this->anchura;
    }

    public function setAnchura($anchura): void
    {
        $this->anchura = $anchura;
    }




}