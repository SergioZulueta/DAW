<?php
include ("models/Publicacion.php");

$publicacion = new models\Publicacion("asfasf", "1996", "asfd S.A.", "Titulo de fsadd", "Texto del titulo de dsdgf");

$publicacion->leer();



/*
use models\Publicacion;

$publicacion = new Publicacion("asfasf", "1996", "asfd S.A.", "Titulo de fsadd", "Texto del titulo de dsdgf");

$publicacion->leer();*/