<?php

require 'vendor/autoload.php';
use duncan3dc\Laravel\Blade;

echo Blade::render("Hola", ["name" => "Blade"]);