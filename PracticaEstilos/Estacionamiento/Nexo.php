<?php

$patente = $_POST['patente'];
$accion = $_POST['accion'];

echo "<br>";
echo $patente;
echo "<br>";
echo $accion;


include "Estacionamiento.php";
if($accion == "estacionar"){
	 $retorno =	Estacionamiento::Guardar($patente);
	 echo "<br>";
	 echo $retorno;
} else {
	Estacionamiento::Sacar($patente);
}



//header("location:../Index.php");


?>
