<?php
$a = 5;
$b = 8;



function mayorQue($a, $b){
    if ($a > $b)
        return 'true';
    else
        return 'false';

}


?>

<html>
<head>
    <title>Ejer2</title>
</head>
<body>
<?= "La resta de $a menos $b es : " . ($a - $b) ?><br>
<?= "La division de $a entre $b es : " . ($a / $b) ?><br>
<?=  mayorQue($a,$b);?><br>
<?= "La resta de $a menos $b es : " . ($a - $b) ?>

</body>
</html>
