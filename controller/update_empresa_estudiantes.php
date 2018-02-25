<?php 
require_once("../../model/Estudiantes.php");
$estudiantes=new Estudiantes;
$info_estudiante=$estudiantes->get_info_alu($_GET['alumno']);
$empresa_antigua=$estudiantes->get_empresa_antigua($_GET['alumno']);
require_once("../../view/app/nueva_empresa.php");
?>