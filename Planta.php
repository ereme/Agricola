<?php

class Planta {
    var $nombre;
    var $dias;

    function __construct ($nombre, $dias) {
        $this->nombre = $nombre;
        $this->dias = $dias;
    }

     function setNombre ($nombre) {
        $this->nombre = $nombre;
    }

    function getNombre () {
        return $this->nombre;
    }
    
    function setDias ($dias) {
        $this->dias = $dias;
    }

    function getDias () {
        return $this->dias;
    }
  
    function mostrar () {
        $hoy = date ('Y-m-d');
        $nuevafecha = strtotime ( '-'.$this->getDias ().'day', strtotime ($hoy));
        $nuevafecha = date ( 'Y-m-d' , $nuevafecha);
        echo "<br><br> La planta ".$this->getNombre ()." se sombró hace ".$this->getDias ()." días. ";
        echo " Se sembró el día ".$nuevafecha.". ";

    }
    


    /*function mostrar () {
        echo "<br><br> La planta ".$this->getNombre ()." se sombró el día ".$this->getDias ().". ";

        $date1 = new DateTime ( date ('Y-m-d'));
        $date2 = new DateTime ($this->getDias());
        $diff = $date2->diff($date1);
        echo " Hace  ".$diff->days." días que sembraste.";
    } 
    */

}