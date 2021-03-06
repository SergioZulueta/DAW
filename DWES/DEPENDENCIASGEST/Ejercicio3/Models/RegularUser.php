<?php


namespace gestionDependencias\ejercicio3\models;
require_once 'User.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class RegularUser extends User
{
    private $twitter, $facebook;


    public function __construct($username, $nombre, $apellidos, $email, $password, $ultimo_acceso, $twitter, $facebook)
    {
        parent::__construct($username, $nombre, $apellidos, $email, $password, $ultimo_acceso);
        $this->twitter = $twitter;
        $this->facebook = $facebook;
    }

    public function showActions()
    {
        $this->loger->debug('Ejecutando el metodo '.__FUNCTION__.' como '.__CLASS__.' por el usuario ' . $this->username . '');
    }

    /**
     * @return mixed
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * @param mixed $twitter
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * @return mixed
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param mixed $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
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
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getUltimoAcceso()
    {
        return $this->ultimo_acceso;
    }

    /**
     * @param mixed $ultimo_acceso
     */
    public function setUltimoAcceso($ultimo_acceso)
    {
        $this->ultimo_acceso = $ultimo_acceso;
    }

    /**
     * @return Logger
     */
    public function getLoger()
    {
        return $this->loger;
    }

    /**
     * @param Logger $loger
     */
    public function setLoger($loger)
    {
        $this->loger = $loger;
    }

}