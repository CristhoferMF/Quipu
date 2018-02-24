<?php 
require_once("../model/Estudiantes.php");
$estudiantes=new Estudiantes;
$id_sede=$_POST['id_sede'];
echo $estudiantes->get_monitor_all($id_sede);
?>