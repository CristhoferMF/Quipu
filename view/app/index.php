<?php 

if(isset($_GET['alumno'])){
    $views=explode("/",$_GET['alumno']);
    if(@$views[1]){
    	switch (@$views[1]) {
    		case 'edit':
    			include 'edit_alumno.php';
    			break;
    		case 'nueva_empresa':
    			include 'nueva_empresa.php';
    			break;
            case 'historial':
    			include 'historial.php';
    			break;
    		default:
                $viewsa=explode("/-",$_GET['alumno']);
                //echo $viewsa[0];
                if(@$viewsa[1] && $viewsa[0]=="empresa"){
                    switch ($viewsa[1]) {
                        case 'add':
                            include 'add_empresa.php';
                            break;
                        
                        default:
                            include 'info_empresa.php';
                            break;
                    }
                }else{
                    include '../../error/404.html';
                }
    			break;
    	}
        
    }else{
        switch ($views[0]) {
            case 'add-alumno':
                include 'add_alumno.php';
                break;
            case 'empresa':
                include 'empresa.php';
                break;
            case 'especialista':
                include 'especialista.php';
                break;        
            default:
                include 'alumno.php';
                break;
        }
        //include 'alumno.php';
    }
}else{
	include 'principal.php';
}

?>