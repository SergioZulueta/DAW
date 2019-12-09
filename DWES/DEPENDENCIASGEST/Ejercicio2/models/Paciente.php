<?php
namespace gestionDependencias\ejercicio2\models;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
class Paciente
{
    private $nombre, $apellido, $edad, $loger;

    public function __construct($nombre, $apellido, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->loger = $log = new Logger('estado');
        $this->loger->pushHandler(new StreamHandler('your.log',0, Logger::INFO,0777));
    }
    public function enfermar()
    {
        $this->loger->info('estoy enfermo');
    }
    public function curar()
    {
        $this->loger->info('estoy curado!!');
    }
    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }
    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }
    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
}