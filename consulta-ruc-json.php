<?php

$ruta = "https://ruc.com.pe/api/v1/ruc";
$token = "61541e9e-7706-4252-a288-bf02bbe120f2-abf0dc4a-d00e-41f0-85f9-5b67fb763418";

$rucaconsultar = '10178520739';

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

$leer_respuesta = json_decode($respuesta, true);
if (isset($leer_respuesta['errors'])) {
	//Mostramos los errores si los hay
    echo $leer_respuesta['errors'];
} else {
	//Mostramos la respuesta
	echo "Respuesta de la API:<br>";
	print_r($leer_respuesta);
}