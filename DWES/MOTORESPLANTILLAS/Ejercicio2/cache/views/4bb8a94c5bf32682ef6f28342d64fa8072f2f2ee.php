<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zapatillas cruck</title>
</head>
<body>
<table>
    <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Tipo</th>
        <th>Precio</th>
    </tr>
    <tr>
        <td><?php echo e($zapatilla->getMarca()); ?></td>
        <td><?php echo e($zapatilla->getModelo()); ?></td>
        <td><?php echo e($zapatilla->getTipo()); ?></td>
        <td><?php echo e($zapatilla->getPrecio()); ?></td>
    </tr>
</table>
</body>
</html><?php /**PATH /vagrant/MOTORESPLANTILLAS/Ejercicio2/views/zapatillas.blade.php ENDPATH**/ ?>