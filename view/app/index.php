<?php 

if(isset($_GET['alumno'])){
    include 'alumno.php';
}else{
	include 'principal.php';
}

?>