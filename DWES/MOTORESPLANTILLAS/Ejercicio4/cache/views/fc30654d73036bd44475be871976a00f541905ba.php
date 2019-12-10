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
    <?php $__currentLoopData = $zapatillas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zapatilla): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($zapatilla->getMarca()); ?></td>
        <td><?php echo e($zapatilla->getModelo()); ?></td>
        <td><?php echo e($zapatilla->getTipo()); ?></td>
        <td><?php echo e($zapatilla->getPrecio()); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH /vagrant/MOTORESPLANTILLAS/Ejercicio4/views/zapatillas.blade.php ENDPATH**/ ?>