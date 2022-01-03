<?php


abstract class Animal
{

    protected string $tipo = "Animal";

    protected string $nombre;

    /**
     * @return string
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }


    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre(string $nombre): void
    {
        if($nombre == "Pepe"){
            throw new \Exception("Mo puede llamarse PEPE");
        }

        $this->nombre = $nombre;
    }



    public function caminar(){
        return "Caminando";
    }

    public function comer(){
        return "Comiendo";
    }

}
