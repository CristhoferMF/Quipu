<?php
include "config/php.php";
if(isset($_GET['view'])){
	switch ($_GET['view']) {
	case 'login':
		include 'view/login.php';
		break;
	default:
		include 'error/404.html';
		break;
}
}else{
	include 'view/home.php';
}

?>