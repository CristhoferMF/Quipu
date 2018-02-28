<?php

$ruta = "https://ruc.com.pe/api/v1/ruc";
$token = "61541e9e-7706-4252-a288-bf02bbe120f2-abf0dc4a-d00e-41f0-85f9-5b67fb763418";

$rucaconsultar = $_POST['txt_ruc'];
$rucaconsultar=trim($rucaconsultar);
if($rucaconsultar){
$data = array(
    "token"	=> $token,
    "ruc"   => $rucaconsultar
);
	
$data_json = json_encode($data);

// Invocamos el servicio a ruc.com.pe
// Ejemplo para JSON
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $ruta);
curl_setopt(
	$ch, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json',
	)
);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$respuesta  = curl_exec($ch);
curl_close($ch);

$leer = json_decode($respuesta, true);
if (isset($leer['errors'])) {
	//Mostramos los errores si los hay
    echo $leer['errors'];
} else {
	//Mostramos la respuesta
	
	if(!@$leer['ruc']){
		echo "No se encuentra el RUC##Error##Error";
	}else{
		echo $leer['ruc']."##".$leer['nombre_o_razon_social']."##".$leer['estado_del_contribuyente'];
	}
}
}else{
	echo "Ingrese Ruc";
}