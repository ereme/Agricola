<?php

class Propietario {
    var $nombre;

    function __construct ($nombre) {
        $this->nombre = $nombre;
    }

    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }

    function getNombre () {
        return $this->nombre;
    }

    function mostrar () {
        echo "El nombre del propietario es ".$this->getNombre ().". <br>";
    }
}

