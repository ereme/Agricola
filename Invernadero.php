<?php 

require_once ("Propietario.php");
require_once ("Planta.php");
require_once ("PlantaFrutal.php");
require_once ("PlantaHortaliza.php");
require_once ("PlantaAromatica.php");

class Invernadero {
    var $propietario;
    var $superficie;
    var $plantas;

    function __construct ($propietario, $superficie){
        $this->propietario = $propietario;
        $this->superficie = $superficie;
        $this->plantas = array ();
    }

    function setPropietario ($propietario) {
        $this->propietario = $propietario;
    }

    function getPropietario () {
        return $this->propietario;
    }

    function setSuperficie ($superficie) {
        $this->superficie = $superficie;
    }

    function getSuperficie () {
        return $this->propietario;
    }

    function addPlanta ($planta) {
        $this->plantas [] = $planta;
    }

    function mostrar () {
        $this->propietario->mostrar ();
        echo " El invernadero tiene una superficie de ".$this->superficie." metros cuadrados. <br>";
        echo " <font color=darkblue size=4> <br> ~ PLANTAS ~ </font>  ";
        for ($i=0; $i < count ($this->plantas) ; $i++) { 
            $this->plantas [$i]->mostrar(); 
        }
    }

    function sembrar ($numeroplantas, $tipo,$x) {
        for ($i=0; $i < $numeroplantas ; $i++) { 
            $p = new $tipo ($tipo.$i,"2018-01-02",$x);
            $this->plantas [] = $p;
        }
    }

    function mostarPoda () {
        for ($i=0; $i < count ($this->plantas); $i++) { 
            if ($this->plantas [$i] instanceof PlantaFrutal) {
                $this->plantas [$i]->mostrar();
            }
        }
    }

    function mostrarFechasSiembra () {
        for ($i=0; $i < count ($this->plantas); $i++) { 
            $this->plantas [$i]->mostrar ();
           }
    }

    function mostrarPlantasFrutales () {
        for ($i=0; $i < count ($this->plantas); $i++) { 
            if ($this->plantas[$i] instanceof PlantaFrutal) {
                echo $this->plantas[$i]->mostrar ();
            }
        }
    }

    function mostrarPlantasAromaticas () {
        for ($i=0; $i < count ($this->plantas); $i++) { 
            if ($this->plantas[$i] instanceof PlantaAromatica) {
                echo $this->plantas[$i]->mostrar ();
            }
        }
    }

    function mostrarPlantasHortalizas () {
        for ($i=0; $i < count ($this->plantas); $i++) { 
            if ($this->plantas[$i] instanceof PlantaHortaliza) {
                echo $this->plantas[$i]->mostrar ();
            }
        }
    }
}

