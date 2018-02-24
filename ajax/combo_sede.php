<?php 
require_once("../model/Estudiantes.php");
$estudiantes=new Estudiantes;
$ruc=$_POST['ruc'];
echo $combo_sede=$estudiantes->get_sede_all($ruc);
?>