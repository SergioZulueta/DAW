<?php
$dbh = connect();
?>
<html>
<head>
    <title>Ejercicio 2</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>

<?php
function connect()
{
    $dbname = "empresas";
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    return $dbh;
}

function consulta($dbh)
{
    echo "-------Datos de la tabla-------<hr></hr>";
    $stmt = $dbh->prepare("SELECT id, nombre, apellidos FROM empresa");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    return $stmt;
}

function añadir($dbh)
{
    if (isset($_POST['nombre']) && !empty ($_POST['nombre']) && isset($_POST['apellidos']) && !empty ($_POST['apellidos'])) {
        $data = array(
            'nombre' => $_POST['nombre'],
            'apellidos' => $_POST['apellidos'],
        );
        $stmt = $dbh->prepare("INSERT INTO empresa(nombre, apellidos) values (:nombre, :apellidos)");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute($data);

        echo "datos insertados";
    } else {
        echo "problemas al insertar datos";
    }
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

if (isset($_POST['añadir'])) {
    añadir($dbh);
}

if (isset($_POST['borrar'])) {
    delete($dbh);
}


?>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
    </tr>
    </thead>
    <tbody>

    <?php

    $stmt = consulta($dbh);
    while ($row = $stmt->fetch()) {

        echo "<tr><td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['apellidos'] . "</td></tr>";
    }
    ?>

    </tbody>
</table>
</div>
</table>
<form action="ejercicio2.php" method="post" name="form">
    <input type="text" name="nombre" placeholder="nombre" required>
    <input type="text" name="apellidos" placeholder="apellidos" required>
    <input type="submit" value="añadir" name="añadir">
</form>

<form action="ejercicio2.php" method="post" name="formEliminar">
    <input type="text" name="id" placeholder="id" required>
    <input type="submit" value="borrar" name="borrar">
</form>


</body>
</html>