<?php

require 'vendor/autoload.php';
use gestionDependencias\ejercicio3\models;

$faker = Faker\Factory::create();
$admins=[];
$regularUsers=[];

for($x=0;$x<5;$x++){
    $admin=new models\Admin($faker->userName,$faker->name('male'),$faker->firstNameMale.' '.$faker->lastName,$faker->email,$faker->password,$faker->dateTime,$faker->numberBetween(1,3));
    array_push($admins,$admin);
    $usuarioRegular= new models\RegularUser($faker->userName,$faker->name('female'),$faker->firstNameFemale.' '.$faker->lastName,$faker->email,$faker->password,$faker->dateTime,$faker->url,$faker->url);
    array_push($regularUsers,$usuarioRegular);
}

$admins[3]->login();
$admins[2]->showActions();
$regularUsers[2]->showActions();
$regularUsers[4]->logout();

