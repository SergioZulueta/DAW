<?php
require 'vendor/autoload.php';

use SebastianBergmann\Timer\Timer;

Timer::start();

$valores = array();

$max_num = 100;

for ($x=0;$x<$max_num;$x++) {
    $num_aleatorio = rand(1,100);
    array_push($valores,$num_aleatorio);
}

for ($x=0;$x<count($valores);$x++)
    echo $valores[$x]."<br/>";

$time = Timer::stop();

print Timer::secondsToTimeString($time);