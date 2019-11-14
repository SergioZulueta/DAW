<?php
function connect()
{
    $dbname = "empresas";
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbh = new PDO ("mysql:host=$host;dbname=$dbname", $user, $pass);
    return $dbh;
}


function consulta($dbh)
{
    $stmt = $dbh->prepare("SELECT id, nombre, apellidos FROM empresa");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    return $stmt->fetchAll();
}

function insertar($dbh, $nombre, $apellidos)
{
        $data = array(
            'nombre' => $nombre,
            'apellidos' => $apellidos,
        );
        $stmt = $dbh->prepare("INSERT INTO empresa(nombre, apellidos) values (:nombre, :apellidos)");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute($data);

        echo "datos insertados";
}

function delete($dbh)
{
    if (isset($_POST['id']) && !empty ($_POST['id'])) {
        $data = array(
            'id' => $_POST['id']
        );
        $stmt = $dbh->prepare("DELETE FROM empresa WHERE id = :id");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute($data);

        echo "datos eliminados";
    } else {
        echo "problemas al eliminar";
    }
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
