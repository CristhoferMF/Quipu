<?php 
require_once("../model/Estudiantes.php");
$estudiantes=new Estudiantes;
$id=$_POST['txt-id'];
$apellidos=$_POST['txt-apellidos'];
$nombres=$_POST['txt-nombres'];
$cfp=$_POST['txt-cfp'];
$semestre=$_POST['txt-semestre'];
$ciclo=$_POST['txt-ciclo'];
$bloque=$_POST['txt-bloque'];
$carrera=$_POST['txt-carrera'];
$diaclase=$_POST['txt-diaclase'];
$telefono=$_POST['txt-telefono'];
$celular=$_POST['txt-celular'];
$email=$_POST['txt-email'];
$domicilio=$_POST['txt-domicilio'];
$horario=$_POST['txt-horario'];
$puesto=$_POST['txt-puesto'];
$empresa=$_POST['txt-empresa'];
$iniciosem=$_POST['txt-iniciosem'];
$finsem=$_POST['txt-finsem'];
$estado=$_POST['txt-estado'];
require_once("../model/Estudiantes.php");
$estudiantes=new Estudiantes;
if(isset($apellidos)){
	echo $query=$estudiantes->update_alumno($apellidos,$nombres,$cfp,$semestre,$ciclo,$bloque,$carrera,$diaclase,$telefono,$celular,$email,$domicilio,$horario,$puesto,$empresa,$iniciosem,$finsem,$estado,$id);
}
//echo $nombre;
?>