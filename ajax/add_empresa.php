<?php
require_once("../model/Estudiantes.php");
$estudiantes=new Estudiantes;
$ruc=$_POST['txt-result-ruc'];
$razon=$_POST['txt-result-razon'];
$departamento=$_POST['txt-result-departamento'];
$provincia=$_POST['txt-result-provincia'];
$distrito=$_POST['txt-result-distrito'];
$direccion=$_POST['txt-result-direccion'];
$referencia=$_POST['txt-referencia-direccion'];
$estado=$_POST['txt-result-estado'];
$nombre=$_POST['txt-nombre-repre'];
$actividad=$_POST['txt-actividad-principal'];
$dni=$_POST['txt-dni-repre'];
$cantidad=$_POST['txt-cant-trabajadores'];
$telefono=$_POST['txt-telefono-empresa'];
$email=$_POST['txt-empresa-email'];

if($ruc){
$query=$estudiantes->create_empresa($ruc,$razon,$departamento,$provincia,$distrito,$direccion,$referencia,$estado,$nombre,$actividad,$dni,$cantidad,$telefono,$email);
if($query){
	echo "ACCION EXITOSA";
}
}

?>