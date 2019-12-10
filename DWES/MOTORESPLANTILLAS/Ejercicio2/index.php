<?php

require 'vendor/autoload.php';
use duncan3dc\Laravel\Blade;
require 'models/Zapatilla.php';

$zapatilla = new Zapatilla("NIKE", "AIR FORCE", "TIPO3", 110);

echo Blade::render("zapatillas",["zapatilla" => $zapatilla]);