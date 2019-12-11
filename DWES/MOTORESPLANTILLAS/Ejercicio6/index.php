<?php

require 'vendor/autoload.php';
use duncan3dc\Laravel\Blade;
require 'models/Zapatilla.php';


echo Blade::render("tienda",["tienda"=>"JD"]);

$zapatilla = [new Zapatilla("NIKE", "AIR FORCE", "TIPO3", 110), new Zapatilla("ADIDAS", "AIR FORCE", "TIPO2", 110),
    new Zapatilla("REBOOK", "AIR FORCE", "TIPO1", 110), new Zapatilla("ASICS", "AIR FORCE", "TIPO4", 110),
    new Zapatilla("ZAPATILLAS", "AIR FORCE", "TIPO5", 110), new Zapatilla("BOTAS", "AIR FORCE", "TIPO5", 110)];

echo Blade::render("zapatillas",["zapatillas" => $zapatilla]);