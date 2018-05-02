<html>
    <head>
        <title> Invernadero </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
</html>
<body>

<?php
 
require_once ("Invernadero.php");
include_once("style.css");

echo "<center><font size=19 color=grey>  INVERNADEROS </font> <br><br>";



$pr = new Propietario ("Pedro");

$i = new Invernadero ($pr, 1000);

$pf = new PlantaFrutal ("Manzano",  32, "2018-02-15");
$ph = new PlantaHortaliza ("Zanahoria", 23, false);
$pa = new PlantaAromatica ("Romero", 43, "azul");

$i->addPlanta ($pf);
$i->addPlanta ($ph);
$i->addPlanta ($pa);

/*$i->mostrarFechasSiembra ();*/

$i->sembrar (4, PlantaHortaliza::class, "sí");

if(isset($_POST['boton'])){
    $i->mostrar ();
}

$pr1 = new Propietario ("Juan");

$i1 = new Invernadero ($pr1, 2500);

$pf1 = new PlantaFrutal ("Limonero",  "2018-01-02", "2018-03-20");
$ph1 = new PlantaHortaliza ("Zanahoria", "2018-01-02", true);
$pa1 = new PlantaAromatica ("Lavanda", "2018-01-02", "violeta");

$i1->addPlanta ($pf1);
$i1->addPlanta ($ph1);
$i1->addPlanta ($pa1);

$i1->sembrar (5, PlantaFrutal::class,"20-04-2018") ;

if(isset($_POST['boton1'])){
    $i1->mostrar ();
}

if (isset($_POST['boton4'])){
    $i1->mostrarPlantasFrutales ();
}

if (isset($_POST['boton5'])){
    $i1->mostrarPlantasHortalizas ();
}

if (isset($_POST['boton6'])){
    $i1->mostrarPlantasAromaticas ();
}

?>

<center><form action="" method="post">
    <input type="submit" value="Invernadero Badajoz" name="boton" id="boton" />
</form> </center>

<center><form action="" method="post">
    <input type="submit" value="Invernadero Cáceres" name="boton1" id="boton1" />
</form> </center>

<center><form action="" method="post">
    <input type="submit" value="Mostrar Plantas Frutales" name="boton4" id="boton4" />
</form> </center>

<center><form action="" method="post">
    <input type="submit" value="Mostrar Plantas Hortalizas" name="boton5" id="boton5" />
</form> </center>

<center><form action="" method="post">
    <input type="submit" value="Mostrar Plantas Aromáticas" name="boton6" id="boton6" />
</form> </center>

</body>

</html>
