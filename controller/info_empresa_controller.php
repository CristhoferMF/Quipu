<?php 
require_once("../../model/Estudiantes.php");
$estudiantes=new Estudiantes;
$empresa=$_GET['alumno'];
$ruc=explode("/-", $empresa);
$info_empresa=$estudiantes->info_empresa($ruc[1]);
$info_sede=$estudiantes->info_sede($ruc[1]);
$cbo_sede=$estudiantes->get_sede_all($ruc[1]);
require_once("../../view/app/info_empresa.php");
?>