<?php 
require_once("../../model/Estudiantes.php");
$estudiantes=new Estudiantes;
$all_estudiantes=$estudiantes->get_reporte_actual();
require_once("../../view/app/principal.php");
?>