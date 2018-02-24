<?php 
require_once("../../model/Estudiantes.php");
$estudiantes=new Estudiantes;
$info_estudiante=$estudiantes->get_info_alu($_GET['alumno']);
$historial=$estudiantes->get_historial($_GET['alumno']);
require_once("../../view/app/historial.php");
?>