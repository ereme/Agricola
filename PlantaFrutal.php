<?php

require_once ("Planta.php");

class PlantaFrutal extends Planta {
    var $fechapoda;

    function __construct ($nombre, $dias, $fechapoda) {
        parent:: __construct ($nombre, $dias);
        $this->fechapoda = $fechapoda;
    }

    function setFechaPoda ($fechapoda){
        $this->fechapoda = $fechapoda;
    }

    function getFechaPoda () {
        return  $this->fechapoda;
    }

    function mostrar () {
        parent:: mostrar ();
        echo "Su fecha de poda es el ".$this->getFechaPoda ().".";

        $date1 = new DateTime ( date ('Y-m-d'));
        $date2 = new DateTime ($this->getFechaPoda());
        $diff = $date1->diff($date2);
        echo " Hace  ".$diff->days." días que podaste.";
    }
}