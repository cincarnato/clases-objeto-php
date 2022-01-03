<?php

require_once "Animal.php";

class Gato extends Animal
{

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
        $this->tipo = "Gato";
    }

    public function maullar(){
        return "Maullando";
    }
}
