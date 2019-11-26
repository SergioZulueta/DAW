<?php
function connect()
{
    $dbname = "empresas";
    $host = "localhost";
    $user = "root";
    $pass = "";
    try {
        $dbh= new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
        return null;
    }
}


function consulta($dbh)
{
    $stmt = $dbh->prepare("SELECT id, nombre, apellidos FROM empresa");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    return $stmt->fetchAll();
}

function insertar($dbh, $data)
{

        $stmt = $dbh->prepare("INSERT INTO empresa(nombre, apellidos) values (:nombre, :apellidos)");
        $stmt->execute($data);

        echo "datos insertados";
}

function delete($dbh, $id)
{

        $data = array(
            'id' =>$id
        );
        $stmt = $dbh->prepare('DELETE FROM empresa WHERE id = :id');
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($data);
        return $stmt->rowCount();
        echo "datos eliminados";

}

function eliminarPorId($dbh, $id)
{
    $data = array(
        'id' => $id
    );
    $stmt = $dbh->prepare("DELETE FROM empresa WHERE id = :id");
    $stmt->execute($data);
}

?>
