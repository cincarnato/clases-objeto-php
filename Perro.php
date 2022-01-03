<?php

require_once "Animal.php";

class Perro extends Animal
{
    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
        $this->tipo = "Perro";
    }


    public function ladrar(){
        return "Ladrando";
    }

}
