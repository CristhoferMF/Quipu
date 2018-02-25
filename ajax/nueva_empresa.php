<?php 
require_once("../model/Estudiantes.php");
$estudiantes=new Estudiantes;
$id=$_POST['txt-id'];
$cfp=$_POST['txt-cfp'];
$semestre=$_POST['txt-semestre'];
$ciclo=$_POST['txt-ciclo'];
$bloque=$_POST['txt-bloque'];
$carrera=$_POST['txt-carrera'];
$id_historia=$_POST['txt-id-historia'];
$n_historia=$_POST['txt-n-historia'];

$fecha_inicio=$_POST['txt-fecha-inicio'];
$fecha_fin=$_POST['txt-fecha-fin'];
$tipo_contrato=$_POST['txt-tipo-contrato'];
$id_sede=$_POST['cbo-sede'];
$dni_monitor=$_POST['cbo-monitor'];

try {
	$query=$estudiantes->set_empresa_nueva($id_historia,$n_historia+1,$fecha_fin,$id_sede,$id,$dni_monitor,$cfp,$carrera,$bloque,$ciclo,$tipo_contrato,$fecha_inicio,$semestre);
	if($query){
        echo "INSERCION EXITOSA";
    }
} catch (Exception $e) {
	echo "ERROR ECONTRADO: ".$e->getMessage();
}

?>