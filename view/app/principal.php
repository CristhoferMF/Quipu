<?php 
require_once '../../controller/estudiantes_controller.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Seguimiento | Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8">
</head>
<body>
   <div class="container" style="margin-top:40px;">
        <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../app">Area de Seguimiento</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
             <!-- Buscador ID -->
             <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar ID de alumno">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
             
             <!-- Fin buscador-->
              <li class=""><a href="../app">Ir a Empresas</a></li>
              <li class=""><a href="../app">Ir a Alumnos</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acciones <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Editar Información</a></li>
                  <li><a href="#">Ver Historial</a></li>
                  <li><a href="#">Dar de baja</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Empresa</li>
                  <li><a href="#">Cambiar de empresa</a></li>
                  <li><a href="#">Cambiar monitor</a></li>
                  <li><a href="#">Asignar especialista</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
   </div>
    <div class="container" style="overflow-x:scroll;">
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