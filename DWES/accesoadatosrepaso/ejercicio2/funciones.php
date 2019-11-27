<?php

function connect(){
    $dbname = "empresas";
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    return $dbh;
}

function consulta($dbh){

    $stmt = $dbh -> prepare("SELECT id, nombre, apellidos FROM empresa");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    return $stmt->fetchAll();


}