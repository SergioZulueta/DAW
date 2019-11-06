<html>
<head>
    <title>Primera prueba bdd</title>
</head>
<body>

<?php
function connect()
{
    $dbname = "alumnos";
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    return $dbh;
}

function consulta($dbh)
{
    echo "------Datos de la tabla-----<hr></hr>";
    $stmt = $dbh->prepare("SELECT nombre, apellidos, edad FROM alumno");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo $row['nombre'] . "<br>";
        echo $row['apellidos'] . "<br>";
        echo $row['edad'] . "<hr>";

    }
}

function insert($dbh)
{
    $data = array(
        'nombre' => 'Sergio',
        'apellidos' => 'Zulueta Muñoz',
        'email' => 'serzulu@gmail.com',
        'edad' => 22);
    $stmt = $dbh->prepare("INSERT INTO alumno(nombre, apellidos, email, edad) 
      values (:nombre, :apellidos, :email, :edad)");
    $stmt->execute($data);

    echo "------Añadir a sergio-----<hr></hr>";
}

function delete($dbh, $id){
    $data = array(
        'id' => $id
    );

    $stmt = $dbh->prepare("DELETE FROM alumno WHERE id = :id");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute($data);

    echo "------Eliminar a id 3-----<hr></hr>";
}

function update($dbh){

    $stmt = $dbh->prepare("UPDATE alumno SET apellidos = 'update' WHERE nombre = 'Mikel'");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    echo "------UPDATE a Mikel-----<hr></hr>";
}

$dbh = connect();
consulta($dbh);
insert($dbh);
consulta($dbh);
delete($dbh, 3);
consulta($dbh);
update($dbh);
consulta($dbh);

?>

</body>
</html>
