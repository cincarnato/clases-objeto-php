<?php

require_once 'Perro.php';
require_once 'Gato.php';


$perro1 = new Perro("Bas");
$perro2 = new Perro("Chopper");

$perro2->setNombre("Pepe");


$gato = new Gato("Tom");

echo $perro1->getTipo()." ".$perro1->getNombre()." ".$perro1->caminar()." ".$perro1->ladrar().PHP_EOL;
echo $perro2->getTipo()." ".$perro2->getNombre()." ".$perro2->caminar()." ".$perro2->ladrar().PHP_EOL;

echo $gato->getTipo()." ".$gato->getNombre()." ".$gato->caminar()." ".$gato->maullar().PHP_EOL;
