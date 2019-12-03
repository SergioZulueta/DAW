<?php

class Publicacion {

    private $autores, $año, $editorial, $titulo, $texto;

    public function __construct($autores, $año, $editorial, $titulo, $texto){
        $this->autores = $autores;
        $this->año = $año;
        $this->editorial = $editorial;
        $this->titulo = $titulo;
        $this->texto = $texto;
    }

    public function leer(){
        echo "Este es el texto: " . $this->texto .'<br>';
    }

    public function escribir($texto){
        echo  $this->texto.=$texto;
    }

    public function getAutores()
    {
        return $this->autores;
    }

    public function setAutores($autores): void
    {
        $this->autores = $autores;
    }

    public function getAño()
    {
        return $this->año;
    }

    public function setAño($año): void
    {
        $this->año = $año;
    }

    public function getEditorial()
    {
        return $this->editorial;
    }

    public function setEditorial($editorial): void
    {
        $this->editorial = $editorial;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getTexto()
    {
        return $this->texto;
    }

    public function setTexto($texto): void
    {
        $this->texto = $texto;
    }




}

$libro = new Publicacion("Sergio", "1996", "Sergio S.A.", "Titulo de sergio", "Texto del titulo de sergio");
$libro2 = new Publicacion("Gabri", "1996", "Gabri S.A.", "Titulo de Gabri", "Texto del titulo de Gabri");
$libro->leer();
$libro->escribir(" Mas el nuevo texto");
