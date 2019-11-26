<?php

function connect(){
    $dbname = "empresas";
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    return $dbh;
}

