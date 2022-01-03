<?php

require_once "Contacto.php";
require_once "MensajeroInterface.php";

abstract class Mensajero implements MensajeroInterface
{

    protected string $tipo;
    protected Contacto $contacto;

    public function __construct(Contacto  $contacto)
    {
        $this->contacto = $contacto;
    }


}
