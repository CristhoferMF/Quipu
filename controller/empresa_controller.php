<?php 
require_once("../../model/Estudiantes.php");
$estudiantes=new Estudiantes;
$all_empresas=$estudiantes->all_empresas();
require_once("../../view/app/empresa.php");
?>