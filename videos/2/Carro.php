<?php

/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 10/07/16
 * Time: 01:35 PM
 */
class Carro
{
    var $nroRuedas;
    var $color;
    var $id;

    //Metodo constructor
    function __construct()
    {
        $this->nroRuedas = 4;
        $this->color = "";
        $this->id = "nii36b";
    }

    function arrancar()
    {
        echo "- Estoy arrancando.<br>";
    }

    function frenar()
    {
        echo "- Estoy frenando.<br>";
    }

    function girar()
    {
        echo "- Estoy girando.<br>";
    }

    function estableceColor($colorCarro)
    {
        $this->color = $colorCarro;
        echo "Se asignó el color " . $this->color . ".<br>";
    }


}