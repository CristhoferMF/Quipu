<?php 
require_once("../model/Estudiantes.php");
$estudiantes=new Estudiantes;
$nombre=$_POST['nombre'];
echo $estudiantes->get_empresa_all($nombre);
//echo $nombre;
?>