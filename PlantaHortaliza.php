<?php

require_once ("Planta.php");

class PlantaHortaliza extends Planta {
    var $raizcomestible;

    function __construct ($nombre, $dias, $raizcomestible) {
        parent:: __construct ($nombre, $dias);
        $this->raizcomestible = $raizcomestible;
    }

    function setRaizComestible ($raizcomestible) {
        $this->raizcomestible = $raizcomestible;
    }

    function getRaizComestible () {
        return $this->raizcomestible;
    }

    function mostrar () {
        parent:: mostrar ();
        echo $this->getRaizComestible () ? "Su raíz si es comestible" : "Su raíz no es comestible";
    }
}

