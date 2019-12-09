<?php


namespace gestionDependencias\ejercicio3\models;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

abstract class User
{
    protected $username, $nombre, $apellidos, $email, $password, $ultimo_acceso, $loger;


    public function __construct($username, $nombre, $apellidos, $email, $password, $ultimo_acceso)
    {
        $this->username = $username;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->password = $password;
        $this->ultimo_acceso = $ultimo_acceso;
        $this->loger = $loger = new Logger('debug');
        $this->loger->pushHandler(new StreamHandler('app.log', 0, Logger::DEBUG, 0777));
        $this->loger->debug('usuario creado');
    }

    public abstract function showActions();

    public function login()
    {
        $this->loger->debug('Ejecutando el metodo '.__FUNCTION__.' por el usuario ' . $this->username . '');
    }

    public function logout()
    {
        $this->loger->debug('Ejecutando el metodo '.__FUNCTION__.' por el usuario ' . $this->username . '');
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