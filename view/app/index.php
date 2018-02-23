<?php 

if(isset($_GET['alumno'])){
    $views=explode("/",$_GET['alumno']);
    if(@$views[1]){
    	switch ($views[1]) {
    		case 'edit':
    			include 'edit_alumno.php';
    			break;
    		
    		default:
    			include '../../error/404.html';
    			break;
    	}
        
    }else{
        include 'alumno.php';
    }
}else{
	include 'principal.php';
}

?>