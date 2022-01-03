<?php


class FactoryMensajero
{

    static public function crearMensajero($tipo){

        switch ($tipo){
            case 'whatsapp':
                return new MensajeroWhatsapp();
            case 'instagram':
                return new MensajeroInstagram();

        }


    }

}
