<?php

require_once ("Planta.php");

class PlantaAromatica extends Planta {
    var $color;

    function __construct ($nombre, $dias, $color){
        parent:: __construct ($nombre, $dias);
        $this->color = $color;
    }

    function setColor ($color) {
        $this->color = $color;
    }

    function getColor () {
        return $this->color;
    }

    function mostrar () {
        parent:: mostrar ();
        echo "Su color es ".$this->getColor ().".";
    }
}