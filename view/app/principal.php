<?php 
require_once '../../controller/estudiantes_controller.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Seguimiento | Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8">
</head>
<body>
    <div class="container" style="overflow-x:scroll;margin-top:40px;">
        <table class="table table_bordered table-hover">
		<thead>
			<tr>
				<th nowrap>SEMESTRE</th>
				<th nowrap>CICLO</th>
				<th nowrap>CFP</th>
				<th nowrap>CARRERA</th>
				<th nowrap>ID ALUMNO</th>
				<th nowrap>DIA DE CLASE</th>
				<th nowrap>BLOQUE</th>
				<th nowrap>APELLIDOS Y NOMBRES ALUMNO</th>
				<th nowrap>CELULAR ALUMNO</th>
				<th nowrap>EMAIL ALUMNO</th>
				<th nowrap>RUC EMPRESA</th>
				<th nowrap>RAZON SOCIAL</th>
				<th nowrap>SEDE</th>
				<th nowrap>DEPARTAMENTO</th>
				<th nowrap>PROVINCIA</th>
				<th nowrap>DISTRITO</th>
				<th nowrap>DIRECCION SEDE</th>
				<th nowrap>TELEFONO SEDE</th>
				<th nowrap>EMAIL SEDE</th>
				<th nowrap>DNI MONITOR</th>
				<th nowrap>APELLIDOS Y NOMBRES MONITOR</th>
				<th nowrap>TELEFONO MONITOR</th>
				<th nowrap>ID ESPECIALISTA</th>
				<th nowrap>APELLIDOS Y NOMBRES ESPECIALISTA</th>
			</tr>
		</thead>
		<tbody>
		    <?php while($result=mysqli_fetch_array($all_estudiantes)){
                echo "<tr>
                <td>$result[0]</td>
                <td>$result[1]</td>
                <td>$result[2]</td>
                <td>$result[3]</td>
                <td><a href='$result[4]'>$result[4]</a></td>
                <td>$result[5]</td>
                <td>$result[6]</td>
                <td>$result[7] $result[8]</td>
                <td>$result[9]</td>
                <td>$result[10]</td>
                <td>$result[11]</td>
                <td>$result[12]</td>
                <td>$result[13]</td>
                <td>$result[14]</td>
                <td>$result[15]</td>
                <td>$result[16]</td>
                <td>$result[17]</td>
                <td>$result[18]</td>
                <td>$result[19]</td>
                <td>$result[20] $result[21]</td>
                <td>$result[22]</td>
                <td>$result[23]</td>
                <td>$result[24] $result[25]</td>
                </tr>";
            }?>
		</tbody>
	</table>
    </div>
		
</body>	
</html>